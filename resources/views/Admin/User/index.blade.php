@extends('adminlte::page')

@section('title')
    Dashboard - Usuários
@endsection

@section('content_header')
<h1>Usuários Registrados</h1>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{$users}}
    </div>
</div>
<hr>
<div class="container">
    <table class="text-center table table-striped table-inverse table-bordered">
        <thead class="thead-inverse">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}" class="btn btn-success text-center">
                            <i class="fa fa-edit float-left text-center"></i>
                        </a>

                        <button class="btn btn-danger" onclick="document.getElementById('deletar-{{ $user->id }}').submit()">
                            <i class="fa fa-trash float-left text-center"></i>
                        </button>
                        
                        <form style="display: none;" action="{{ route('admin.users.destroy', ['user' => $user->id]) }}" id="deletar-{{ $user->id }}" method="post">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
                @empty
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Não Foi Registrado Nenhum Usuário</strong>
                </div>
                @endforelse
            </tbody>
    </table>
</div>
@endsection
