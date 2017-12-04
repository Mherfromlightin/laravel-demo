@extends('layouts.app')
@section('content')
    <ul>
        @foreach($cars as $car)
            <li>
                <a href="/cars/{{ $car->id }}">{{ $car->class }}</a>
            </li>
        @endforeach
    </ul>
@endsection