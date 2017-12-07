@extends('layouts.app')


@section('content')

        <div class="col-sm-8 blog-main">
@foreach($posts as $post)

            <div class="blog-post">
                <h2 class="blog-post-title">{{ $post->title }}</h2>
                {{--<p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>--}}

                <p>{{ $post->text }}</p>

            </div>



@endforeach
        </div>
@endsection


