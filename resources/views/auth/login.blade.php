@extends('layouts.auth')

@section('title', 'Iniciar sesión')

@section('content')
    <div id="notification" class="alert alert-warning text-center" >
        Email o contraseña no válidos.
    </div>
    <form id="loginForm" class="login100-form validate-form">

        <span class="login100-form-title p-b-59">Ingresar</span>

        <div class="wrap-input100 validate-input" data-validate = "Se require un email válido">
            <span class="label-input100">Email</span>
            <input id="email" name="email" class="input100" type="text" placeholder="mail@example.com">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Contraseña requerida">
            <span class="label-input100">Contraseña</span>
            <input id="password" name="password" class="input100" type="password" placeholder="">
            <span class="focus-input100"></span>
        </div>

        <div class="flex-m w-full p-b-33">
            <div class="contact100-form-checkbox">
                <input name="remember" class="input-checkbox100" id="ckb1" type="checkbox" >
                <label class="label-checkbox100" for="ckb1">
                    <span class="txt1">Recordarme</span>
                </label>
            </div>
        </div>

        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button id="btnSubmit" class="login100-form-btn">Iniciar sesión</button>
            </div>

            <a href="{{ url('/register') }}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                Registrar <i class="zmdi zmdi-arrow-right m-l-5"></i>
            </a>
        </div>
    </form>
@endsection


@push('scripts')
    <script src="js/validate.js"></script>
    <script src="/js/login.js"></script>
@endpush