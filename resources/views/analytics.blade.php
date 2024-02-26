@extends('layouts.layout')

@section('title', 'Analytics')

@section('content')
    <h1>Your Name: {{ auth()->user()->username }}</h1>
@endsection
