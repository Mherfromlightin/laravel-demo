@extends('layouts.app')

@section('content')
    <ul>
        @foreach($schools as $school)
            <li>
                <a href="/schools/{{$school->id}}">{{$school->name}}</a>
            </li>
        @endforeach
    </ul>
@endsection