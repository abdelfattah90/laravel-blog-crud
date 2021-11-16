@extends('dashboard.init')

@section('content')

@section('title')
    {{ $category->name }} Info
@endsection

<h4>{{ $category->name }} </h4>

@endsection
