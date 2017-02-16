@extends('layout')

@section('body')

    <div class="post-preview">
        <a href="{{route('index.post', $post)}}">
            <h2 class="post-title">
                {{$post->title}}
            </h2>
            <h3 class="post-subtitle">
                <img src="/storage/{{$post->image}}">
                {!! $post->body !!}
            </h3>
        </a>
        <p class="post-meta">Posted on {{$post->created_at}}</p>
    </div>

@endsection