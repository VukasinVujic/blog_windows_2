@extends('layouts.master')


@section('title')

<title>{{ $post->title }}</title>
    
@endsection


@section('content')

<h1>{{ $post->title }}</h1>
    <p> {{ $post->body }}</p>

    
@endsection


