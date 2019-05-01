<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\ExpenseReport;
use App\Mail\SummaryReport;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return ExpenseReport::all();
        return view('expenseReport.index',[
            'expenseReports'=> ExpenseReport::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'title'=> 'required|min:3'
        ]);

        // dd($validData);

        $report = new ExpenseReport();
        // $report->title = $request->get('title');//el nombre que se le asigno al campo que ingresa el valor de título
        $report->title = $validData['title'];
        $report->save();

        return \redirect('/expense_reports');

    }

    /**
     * Display the specified resource.
     *
     * @param  ExpenseReport $expeseReport
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $expenseReport)
    {
        // $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.show',[
            'report'=>$expenseReport
        ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.edit',[
            'report'=>$report
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd('PUT UPDATE');
        $validData = $request->validate([
            'title'=> 'required|min:3'
        ]);

        $report = ExpenseReport::findOrFail($id);
        // $report->title = $request->get('title');
        $report->title = $validData['title'];
        $report->save();

        return \redirect('/expense_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = ExpenseReport::findOrFail($id);
        $report->delete();
        
        return \redirect('/expense_reports');
    }

    public function confirmDelete($id){
        // dd('CONFIRM DELETE '.$id);
        $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.confirmDelete',[
            'report'=> $report
            ]);
        }
        
    public function confirmSendMail($id){
        $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.confirmSendMail',[
            'report'=>$report
        ]);
    }

    public function sendMail(Request $request, $id){
        $report = ExpenseReport::findOrFail($id);
        Mail::to($request->get('email'))->send(new SummaryReport($report));
        // return $report;
        return \redirect('/expense_reports/'.$id);
    }
}
