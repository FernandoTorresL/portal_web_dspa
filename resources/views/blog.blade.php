@extends('template')

@section('content')
    <h1>Listado</h1>

    @foreach ($posts as $post)
        <p>
            {{-- Return data using array:
            <strong>{{ $post['id'] }}</strong>
            <a href="{{ route('post', $post['slug']) }}">
                {{ $post['title'] }}
            </a> --}}

            {{-- Return data using ORM (Objects) --}}
            <strong>{{ $post->id }}</strong>
            <a href="{{ route('post', $post->slug) }}">
                {{ $post->title }}
            </a>
        </p>
    @endforeach

    {{-- Add pagination links --}}
    {{ $posts->links() }}
@endsection
