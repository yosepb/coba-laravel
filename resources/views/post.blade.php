@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>by. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p>
        {{-- <h5>by {{ $post['author'] }}</h5> --}}
        {{-- {{ $post->body }} --}}
        {!! $post->body !!}
    </article>
    <a href="/posts">Back to Posts</a>
@endsection
