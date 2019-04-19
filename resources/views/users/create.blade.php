@extends('layouts.layout')

@section('form')
    <div class="align-self-center">
        <h2 class="text-dark text-center mt-5">Cadastrar Pessoa</h2>
    </div>
    <div class="jumbotron">

        <form action="/users" method="post">
            {{csrf_field()}}
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="name">Nome:</label></br>
                    <input class="form-control" type="text" name="name" placeholder="Pessoa"></br>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="idade">Idade:</label></br>
                    <input class="form-control" type="text" name="idade" placeholder="Idade"/></br>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email"></br>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-12 mb-3">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password">

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <input class="form-control btn btn-outline-dark" type="submit" value="Submit">
            </div>
        </form>
    </div>

@endsection
