@extends('layouts.auth')

@section('title', 'Registrar')

@section('content')
    <form id="registerForm" action="/register" method="post" class="login100-form validate-form">
        <span class="login100-form-title p-b-59">Registrar</span>
        @csrf

        <div class="wrap-input100 validate-input {{ $errors->has('name') ? 'alert-validate' : '' }}"
             data-validate="{{ $errors->has('name') ? $errors->first('name') : '' }}">

            <span class="label-input100">Nombre</span>
            <input name="name" class="input100 " type="text" placeholder="" value="{{ old('name') }}">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input {{ $errors->has('email') ? 'alert-validate' : '' }}"
             data-validate = "{{ $errors->has('email') ? $errors->first('email') : '' }}">

            <span class="label-input100">Email</span>
            <input name="email" class="input100" type="text" placeholder="mail@example.com" value="{{ old('email') }}">
            <span class="focus-input100"></span>

        </div>

        <div class="wrap-input100 validate-input {{ $errors->has('password') ? 'alert-validate' : '' }}"
             data-validate = "{{ $errors->has('password') ? $errors->first('password') : '' }}">

            <span class="label-input100">Contraseña</span>
            <input name="password" class="input100" type="password" placeholder="">
            <span class="focus-input100"></span>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Repetir contraseña es requerido">
            <span class="label-input100">Repetir contraseña</span>
            <input name="password_confirmation" class="input100" type="password"  placeholder="">
            <span class="focus-input100"></span>
        </div>

        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button type="submit" class="login100-form-btn">Registrar</button>
            </div>

            <a href="{{ url('/login') }}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                Ingresar <i class="fa fa-long-arrow-right m-l-5"></i>
            </a>
        </div>
    </form>
@endsection