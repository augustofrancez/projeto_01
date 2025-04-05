@extends('layouts.app')
@section('title', 'Listagem de usuários')

@section('content')
    <h1 class="title">
        {{ $greeting }}
    </h1>
    <img width="100" src="{{ Vite::asset('resources/images/Captura de imagem_20241217_123321.png') }}" alt="">

    @foreach ($users as $user)
        <div class="user-name">{{ $user->name }}</div>
    @endforeach

    {{ $users->links() }}
    {{-- {{dd($users)}} --}}
@endsection
