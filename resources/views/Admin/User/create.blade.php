@extends('adminlte::page')

@section('title')
    Dashboard - Usuários
@endsection

@section('content_header')
<h1>Cadastrar Usuário</h1>
@endsection

@section('content')
<div class="container">
    <form action="{{ route('admin.users.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nome</label>

            <input type="text" name="name" placeholder="Digite Aqui o nome do usuário!" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="">Email</label>

            <input type="email" name="email" placeholder="Digite Aqui o email do usuário!" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="">Senha</label>

            <input type="text" name="password" placeholder="Digite Aqui a Senha do usuário!" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Permissão</label>

            <select name="role_id" id="" class="form-control">
                @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->nome }}</option>
                @endforeach
            </select>
        </div>
        
        <button class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection
