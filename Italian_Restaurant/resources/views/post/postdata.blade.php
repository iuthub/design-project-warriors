@extends('template.app')

@section('content')
    <h1>Create Menu</h1>
    <hr>
    <hr>
    <hr>
    
    {!! Form::open(["url" => "/test"]) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '',["class" => "form-control","placeholder" => "Enter food name"])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '',["class" => "form-control","placeholder" => "Enter food name"])}}
    </div>
    <div class="form-group">
        {{Form::label('cost', 'Cost')}}
        {{Form::text('cost', '',["class" => "form-control","placeholder" => "Enter food name"])}}
    </div>
    <div class="form-group">
        {{Form::label('foodid', 'Food ID')}}
        {{Form::text('foodid', '',["class" => "form-control","placeholder" => "Enter food name"])}}
    </div>
    <div class="form-group">
        {{Form::label('imgurl', 'Image URL')}}
        {{Form::text('imgurl', '',["class" => "form-control","placeholder" => "Enter food name"])}}
    </div>
    <div class="form-group">
        {{Form::label('socrank', 'Social Rank')}}
        {{Form::text('socrank', '',["class" => "form-control","placeholder" => "Enter food name"])}}
    </div>
    <div>
    {{Form::submit("Submit", )}}
    </div>
{!! Form::close() !!}
    

  
@endsection