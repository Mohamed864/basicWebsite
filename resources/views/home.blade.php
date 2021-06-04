@extends('layouts.app')

@section('content')
    <h1 class="header">Home</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae eos, est nam qui voluptates deleniti sequi. Nobis cum impedit animi perspiciatis consequatur distinctio magnam, aperiam magni veniam sequi suscipit molestias.</p>
@endsection

@section('sidebar')
    @parent
    <p class="paragraph">This is appended to the sidebar</p>
@endsection