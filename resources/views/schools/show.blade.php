@extends('layouts.app')

@section('content')
    <h1>{{ $school->name }}</h1>
    <h2>{{ $school->address }}</h2>
    <h2>{{ $school->number_pupils }}</h2>
@endsection
