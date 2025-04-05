@extends('layouts.app')

@section('title', 'Mostrando usuário ' . $user->name)

@section('content')
    <h1>Mostrar usuário {{ $user->name }}</h1>
    {{-- {{dd($user)}} --}}

    @php
        $isAdmin = true;
    @endphp


    @if ($isAdmin)
        <div>Sou Admin</div>
    @else
        <div>Não sou Admin</div>
    @endif
@endsection
