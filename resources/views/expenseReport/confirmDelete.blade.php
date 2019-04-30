@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Delete Report {{ $report->id }}</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class='btn btn-secondary' href="/expense_reports">Back</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <!--al especificar el metodo post esta ligada a la ruta que realiza la acción store-->
       <form action="/expense_reports/{{ $report->id }}" method='POST'>
       @csrf 
       @method('delete')
       <button type='submit' class='btn btn-primary'>Delete</button>
       </form>
    </div>
</div>
@endsection