@extends('layouts.layout')

@section('content')


    <div class="jumbotron bd-light">

        <h1 class="jumbotron-heading">
            Dar lance</br></br>
        </h1>
        <table class="table table-stripped">
            <thead>
            <tr>
                <th><h3>Produto</h3></th>
                <th><h3>Valor atual</h3></th>
            </tr>
            <tr>
                <th><h5 id="descricao">{{$product->nome_product}}</h5></th>
                <th><h5 id="valor">R$ {{$product->valor}}</h5></th>
            </tr>
            </thead>
        </table>
        <form id="myform" action="/products/{{$product->id}}" method="post">

            <div class="col-md-8 mb-3">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <label for="valor" >Lance: </label>
                <input class="dinheiro form-control col-md-8" name="valor" type="text" id="dinheiro" min="{{$product->valor+0.01}}"></br></br>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input class="btn btn-outline-dark" type="submit" value="Dar lance">
            </div>
        </form>

    </div>
    <script src="/js/validation.js"></script>

@endsection
