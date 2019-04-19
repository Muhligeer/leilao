@extends('layouts.layout')

@section('form')
    <div class="align-self-center">
        <h2 class="text-dark text-center mt-5">Cadastrar Pessoa</h2>
    </div>
    <div class="jumbotron">
        <form method="POST" action="{{ route('register') }}">
            @csrf


            <div class="form-row">

                <div class="col-md-10 mb-3">
                    <label for="name">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>


                <div class="col-md-10 mb-3">
                    <label for="idade">{{ __('Idade') }}</label>
                    <input class="form-control" type="text" name="idade"/>
                </div>



                <div class="col-md-10 mb-3">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>



                <div class="col-md-10 mb-3">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password">

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>



                <div class="col-md-10 mb-3">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>


                <div class="col-md-6 offset-md-3">
                    <input class="form-control btn btn-outline-dark" type="submit" value="{{ __('Register') }}">


                </div>

            </div>
        </form>
    </div>
@endsection
