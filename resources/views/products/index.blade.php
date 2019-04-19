@extends('layouts.layout')

@section('content')

    <div class="jumbotron bg-light">
        <form action="/search" method="get">
            <input class="form-control" type="text" name="search" id="search"/>
            <button class="btn btn-outline-dark my-2">Pesquisar</button>
        </form>
        <table class="table table-stripped">
            <thead>
            <tr>
                <th>Produto</th>
                <th>Valor</th>
                <th>Usuario</th>
            </tr>

            @foreach($products as $product)

                <tr>
                    <th>{{$product->nome_product}}</th>
                    <th>R$ {{$product->valor}}</th>
                    <th></th>
                </tr>

            @endforeach
            </thead>
        </table>
    </div>

@endsection
