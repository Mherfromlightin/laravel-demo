@extends('layouts.app')

@section('content')
    <div class="col-sm-8 blog-main">

        <div class="panel">
            <h3>{{ $post->title }}</h3>
            {{ $post->text }}
        </div>
    </div>

@endsection