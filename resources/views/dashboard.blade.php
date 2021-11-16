@extends('dashboard.init')

@section('content')

@section('title')
    Dashboard
@endsection


<h2>Welcome, {{ Auth::user()->name }}</h2>
@endsection
