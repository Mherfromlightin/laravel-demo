@extends('layouts.app)

@section('content')
    {{ $post->text, $post->images }}
@endsection