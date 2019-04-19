@extends('layouts.layout')

@section('form')
    <div class="align-self-center">
        <h2 class="text-dark text-center mt-5">Cadastrar Produto</h2>
    </div>
    <div class="jumbotron">
        <form action="/products" method="post">
            {{csrf_field()}}
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="product">Nome do Produto:</label></br>
                    <input class="form-control" type="text" name="nome_product" placeholder="Produto" required></br>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="valor">Valor do Produto:</label></br>
                    <input class="dinheiro form-control" type="text" name="valor" placeholder="R$" id="dinheiro" required/></br></br>
                </div>
                <input class="form-control btn btn-outline-dark" type="submit" value="Submit">
            </div>
        </form>
    </div>

@endsection
