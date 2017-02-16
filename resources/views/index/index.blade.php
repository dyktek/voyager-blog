@extends('layout')

@section('body')

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            @foreach($posts as $post)

            <div class="post-preview">
                <a href="{{route('index.post', $post)}}">
                    <h2 class="post-title">
                        {{$post->title}}
                    </h2>
                    <h3 class="post-subtitle">
                        {!! $post->body !!}
                    </h3>
                </a>
                <p class="post-meta">Posted on {{$post->created_at}}</p>
            </div>
            <hr>
            @endforeach

            {{$posts->links()}}
        </div>
    </div>

@endsection