<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('test',[
            'title' => 'Curso Laravel en PLatzi 2019'
        ]);
    }
}