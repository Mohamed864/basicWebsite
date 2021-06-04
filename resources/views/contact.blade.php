@extends('layouts.app')

@section('content')
    <h1 class="header">Contact</h1>

    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name','' ,['class'=>'form-control','placeholder' => 'Enter name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '',['class'=>'form-control','placeholder' => 'example@gmail.com'])}}
        </div>
        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::TextArea('message', '',['class'=>'form-control','placeholder' => 'Enter Message'])}}
        </div>
        <div>
            {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
@endsection