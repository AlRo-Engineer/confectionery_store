@extends('layouts.base-layout')

@section('content')

    <h2>A new career form has been submitted:</h2>
    <p>Name: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Phone: {{ $phone }}</p>
    <p>Comments: {{ $comments }}</p>

@stop
