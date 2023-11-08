@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        {{-- <h5>by {{ $post['author'] }}</h5> --}}
        {{-- {{ $post->body }} --}}
        {!! $post->body !!}
    </article>
    <a href="/posts">Back to Posts</a>
@endsection
