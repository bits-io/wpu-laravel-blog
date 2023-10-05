@extends('layouts.main')

@section('container')
    <h1>About</h1>
    <h1>{{ $name }}</h1>
    <h1>{{ $email }}</h1>

    <img src="img/photo.jpg" alt="{{ $name }}" width="300" srcset="">
@endsection
