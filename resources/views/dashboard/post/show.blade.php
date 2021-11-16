@extends('dashboard.init')

@section('content')

@section('title')
    {{ $post->title }} Info
@endsection

<h4>{{ $post->title }} </h4>
<p>{{ $post->content }} </p>
<p>{{ $post->category->name}} </p>

@endsection
