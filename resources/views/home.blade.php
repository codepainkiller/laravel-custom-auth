@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Bienvenido, {{ auth()->user()->name }}!</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, temporibus.</p>
        </div>
    </div>
@endsection