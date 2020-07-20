@extends('adminlte::page')

@section('title')
    Dashboard - Inicio
@endsection

@section('content_header')
<h1>Dashboard Inicial</h1>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <span class="font-weight-bold text-center" style="font-size: 3em;">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>    
                    </div>
                    
                    <hr>
                    <p class="font-weight-bold text-center mb-0">
                        <a href="Administrador/Usuários/" class="text-secondary">Usuários</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
