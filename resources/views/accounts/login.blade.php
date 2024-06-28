@extends('layouts.app')

@section('title')
    Proyecto
@endsection

@push('css')
    <link rel="stylesheet" href="../../resources/css/style.css">
    <link rel="stylesheet" href="../../resources/css/document.css">
@endpush

@section('href_logo')
    href="./../"
@endsection

@section('src_logo')
    src="../../resources/images/logo.png"
@endsection

@section('sign_in')
    href="./../account/login"
@endsection

@section('sign_up')
    href="./../account/register"
@endsection

@section('document_content')
<main id="home" class="hero">
        

    <div class="box">
        <div class="container-doc">
            <div class="top">
                <span>¿Tienes una cuenta?</span>
                <h2>Inicia Sesión en la Cuenta</h2>
            </div>

            <form action="../account/login" method="post">
                @csrf
                <div class="input-field">
                    <input type="email" name="username" id="" class="input" placeholder="Usuario" required>
                </div>
                <div class="input-field">
                    <input type="password" name="password" id="" class="input" placeholder="Contraseña" required style="margin: 10px 0;">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="input-field" style="display: flex; justify-content: center;">
                    <input type="submit" value="Iniciar Sesión" class="submit">
                </div>
            </form>

            <div>
                <p>
                    <a href="./register" style="cursor: pointer; text-decoration: none; color: rgb(61, 86, 94); font-size: 12px;">No tienes una cuenta? Registrate.</a>
                </p>
            </div>

        </div>
    </div>
@endsection

@section('css_footer')
style="margin-top: 0px;"
@endsection
