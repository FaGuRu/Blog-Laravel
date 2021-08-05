@extends('layout')

@section('title', 'Usuarios')

@section('content')
    <h2>{{ $title }}</h2>

    <ul>
        @forelse ($users as $user)
            <li>{{ $user }}</li>
        @empty
            <li>No hay usuarios registrados aun</li>
        @endforelse
    </ul>
@endsection

@section('sidebar')
    @parent

    <h2>Barra lateral personalizada!</h2>
@endsection
