@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<h3 style="text-align:center"> Change Restaurant Infos</h3>

{!! Form::open(['action' => 'RestInfoController@store', 'method' => 'POST' ,"url" => "/info"]) !!}
    <div class="form-group">
        {{Form::label('restname', 'Restaurant Name')}}
        {{Form::text('restname', '',["class" => "form-control","placeholder" => "Enter food name"])}}
    </div>
    <div class="form-group">
        {{Form::label('restmail', 'Restaurant Email:')}}
        {{Form::text('mail', '',["class" => "form-control","type" => "email","placeholder" => "Enter food name"])}}
    </div>
    <div class="form-group">
        {{Form::label('restaddress', 'Restaurant Address')}}
        {{Form::text('address', '',["class" => "form-control","placeholder" => "Enter food name"])}}
    </div>
    <div class="form-group">
        {{Form::label('restnum', 'Restaurant Number')}}
        {{Form::text('number', '',["class" => "form-control","placeholder" => "Enter food name"])}}
    </div>
   
    <div>
    {{Form::submit("Submit", )}}
    </div>
{!! Form::close() !!}
    
@endsection