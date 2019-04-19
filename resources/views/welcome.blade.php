@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron text-center bg-light">
            <h1 class="jumbotron-heading">
                Leilão de Produtos
            </h1>
            @guest
                <p class="lead text-muted">
                    Cadastro de produtos</br>
                    Faça o login para dar lances
                </p>
                <p>
                    <a href="\products\create" class="btn btn-dark my-2">Cadastrar Produtos</a>
                    <a href="\login" class="btn btn-dark my-2">Fazer Login</a>
                </p>

            @else
                <p class="lead text-muted">
                    Escolha entre cadastro de produtos ou dar lances
                </p>
                <p>
                    <a href="\products\create" class="btn btn-dark my-2">Cadastrar Produtos</a>
                    <a href="\lances" class="btn btn-dark my-2">Dar lance</a>
                </p>
            @endguest
        </div>
    </div>

@endsection
