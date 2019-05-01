@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Send Report</h1>
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
       <form action="/expense_reports/{{$report->id}}/sendMail" method='POST'>
       @csrf 
       <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class='form-control' id='email' name='email' value= "{{ old('email') }}" placeholder='Type a email'>
       </div>
       <button type='submit' class='btn btn-primary'>Send Mail</button>
       </form>
    </div>
</div>
@endsection