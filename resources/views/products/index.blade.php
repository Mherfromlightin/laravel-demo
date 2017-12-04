@extends('layouts.app')
@section('content')
    <ul>
        @foreach($products as $product)
            <li>
                <a href="/products/{{ $product->id }}">{{ $product->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection