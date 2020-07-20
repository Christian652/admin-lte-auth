@extends('adminlte::page')

@section('title')
    Dashboard - Usuários
@endsection

@section('content_header')
<h1>Editar {{ explode(' ', $user->name)[0] }}</h1>
@endsection

@section('content')
<div class="container">
    <form action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nome</label>

            <input type="text" value="{{ $user->name }}" name="name" placeholder="Digite Aqui o nome do usuário!" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="">Email</label>

            <input type="email" name="email" value="{{ $user->email }}" placeholder="Digite Aqui o email do usuário!" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="">Senha</label>
            <small>Se Nada For Digitado a Senha Permanece A Mesma</small>
            <input type="text" name="password" placeholder="Digite Aqui a Senha do usuário!" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Permissão</label>

            <select name="role_id" id="" class="form-control">
                <option value="{{ $user->roles()->first()->id }}">{{ $user->roles()->first()->nome }}</option>
                
                @foreach($roles as $role)
                @if($role->id !== $user->roles()->first()->id)
                <option value="{{ $role->id }}">{{ $role->nome }}</option>
                @endif
                @endforeach
            </select>
        </div>
        
        <button class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection
