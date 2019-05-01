@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>New Expense</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class='btn btn-secondary' href="/expense_reports/{{$report->id}}">Back</a>
    </div>
</div>
<div class="row">
    <div class="col">
        @if($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!--al especificar el metodo post esta ligada a la ruta que realiza la acción store-->
       <form action="/expense_reports/{{$report->id}}/expense" method='POST'>
       @csrf 
       <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class='form-control' id='description' name='description' value= "{{ old('description') }}" placeholder='Type a description'>
       </div>
       <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="text" class='form-control' id='amount' name='amount' value= "{{ old('amount') }}" placeholder='Type a amount'>
       </div>
       <button type='submit' class='btn btn-primary'>Submit</button>
       </form>
    </div>
</div>
@endsection