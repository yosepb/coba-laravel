@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>by. Bahtiar in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {{-- <h5>by {{ $post['author'] }}</h5> --}}
        {{-- {{ $post->body }} --}}
        {!! $post->body !!}
    </article>
    <a href="/posts">Back to Posts</a>
@endsection
