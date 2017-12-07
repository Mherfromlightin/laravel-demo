@extends('layouts.app')

@section('content')
    <div class="col-sm-8 blog-main">
            <div class="panel">
                <h3>{{ $post->title }}</h3>
                {{ $post->text }}
            </div>
        <a href="{{ url('/posts/' . $post->id . '/edit') }}" class="btn btn-default">EDIT</a>
        <form action="{{  url('/posts/' . $post->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit">DELETE</button>
        </form>
    </div>
@endsection