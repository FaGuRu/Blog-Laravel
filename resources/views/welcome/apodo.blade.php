@extends('layout')

@section('title', "Bienvenido {$name}")

@section('content')
    <h1>Biemvenido {{$name}}, tu apodo es {{$nickname}}</h1>
    
@endsection