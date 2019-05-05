@extends('layouts.app')

@section('content')
    <h1>Edit Menu</h1>
    <hr>
    <hr>
    <hr>
    {!! Form::open(['action' => ['MenuController@update', $menu->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $menu->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        
        <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $menu->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
        <div class="form-group">
            {{Form::label('cost', 'Cost')}}
            {{Form::text('cost', $menu->cost, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Price'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection