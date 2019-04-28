@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>New Report</h1>
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
       <form action="/expense_reports" method='POST'>
       <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class='form-control' id='title' name='title' placeholder='Type a title'>
       </div>
       <button type='submit' class='btn btn-primary'>Submit</button>
       </form>
    </div>
</div>
@endsection