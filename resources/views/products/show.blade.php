@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <h2>{{ $product->price }}</h2>
    <h2>{{ $product->count }}</h2>
@endsection