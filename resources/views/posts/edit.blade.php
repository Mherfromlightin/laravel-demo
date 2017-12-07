@extends('layouts.app')


@section('content')
    <div class="col-sm-8 blog-main">

        <form action="/posts/{{$post->id}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
            </div>

            <div class="form-group">
                <label for="text">Text:</label>
                <textarea class="form-control" name="text" id="text">{{ $post->text }}</textarea>
            </div>

            <button type="submit" class="btn btn-default">Update</button>
        </form>

        @include('layouts.partials.errors')
    </div>
@endsection