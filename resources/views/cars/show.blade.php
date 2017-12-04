@extends('layouts.app')

@section('content')
    <h1>{{ $car->class }}</h1>
    <h2>{{ $car->price }}</h2>
    <h2>{{ $car->color }}</h2>
@endsection