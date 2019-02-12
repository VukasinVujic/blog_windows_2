@extends('layouts.master')


@section('title')
    All post INDEX BLADE
@endsection


@section('content')
 
<ul>

    @foreach($posts as $post)

    <li>
        {{ $post->title }}
    </li>
        
    @endforeach


</ul>

@endsection


