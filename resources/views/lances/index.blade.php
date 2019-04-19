@extends('layouts.layout')

@section('content')

    <div class="jumbotron bg-light">
        <table class="table table-stripped">
            <thead>
            <tr>
                <th>Produto</th>
                <th>Valor</th>
                <th></th>
            </tr>

            @foreach($products as $product)

                <tr>
                    <th>{{$product->nome_product}}</th>
                    <th>R$ {{$product->valor}}</th>
                    <th>
                        <form action="/products/{{$product->id}}/edit" method="head">
                            <button class="btn btn-outline-dark my-2">Dar lance</button>
                        </form>
                    </th>
                </tr>

            @endforeach
            </thead>
        </table>
        <a href="/products/create" class="btn btn-outline-dark my-2">Novo Produto</a>
        <a href="/datatable" class="btn btn-outline-dark my-2">Produtos por usuarios</a>
    </div>

@endsection
