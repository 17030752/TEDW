@extends('layouts.template1')

@section('title', 'Home')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p><h1>This is my Home page.</h1></p>
@endsection