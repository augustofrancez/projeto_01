@extends('layouts.app')
@section('title', 'Cadastro de usuários')

@section('content')
    <h1>Cadastro de usuário</h1>
    <a href="{{ route('users.index') }}">Lista usuários</a>
    <form action={{ route('users.store') }} method="POST" enctype="multipart/form-data">
        @csrf

        {{ $errors->any() }}
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>
                    {{ $error }}
                </div>
            @endforeach
            {{-- {{ dd($errors->all()) }} --}}
        @endif

        <div>
            <label for="">Nome</label>
            <input type="text"name="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text"name="email" value="{{ old('email') }}">
        </div>
        <div>
            <label for="">Senha</label>
            <input type="password"name="password">
        </div>
        <div>
            <label for="">Avatar</label>
            <input type="file"name="avatar">
        </div>
        <div>
            <button type="submit">Cadastrar</button>
        </div>
    </form>
@endsection
