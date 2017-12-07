@extends('layouts.app')


@section('content')
    <div class="col-sm-8 blog-main">

        <form action="/posts" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="text">Text:</label>
                <textarea class="form-control" name="text" id="text">{{ old('text') }}</textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

        @include('layouts.partials.errors')
    </div>
@endsection