@extends('layouts.app')

@section('title')
    Proyecto | Account Register
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
<main id="home" class="">
        

    <div class="box">
        <div class="container-doc container-r" style="width: 642px; height: 65%;">
            <div class="top">
                <span></span>
                <h2>Crea una Cuenta</h2>
            </div>

            <form action="../account/register" method="post">
                @csrf
                <div class="content">
                    <div class="input-field input-box">
                        <label for="name">Nombre*</label>
                        <input type="text" name="name" id="" class="input" placeholder="Introduzca el nombre" required>
                    </div>
                    <div class="input-field input-box">
                        <label for="lastName">Apellido*</label>
                        <input type="text" name="last_name" id="" class="input" placeholder="Introduzca el apellido" required>
                    </div>
                </div>

                    <div class="input-field input-box" style="width: 107%;">
                        <label for="email">Correo Electronico*</label>
                        <input type="email" name="email" id="" class="input" placeholder="Introducir la dirección de correo electrónico" required>
                    </div>
                <div class="content">
                    <div class="input-field input-box">
                        <label for="password">Contraseña*</label>
                        <input type="password" name="password" id="" class="input" placeholder="Introducir la contraseña" required>
                    </div>
                    <div class="input-field input-box">
                        <label for="rPassword">Vuelva a Escribir la Contraseña*</label>
                        <input type="password" name="rPassword" id="" class="input" placeholder="Vuelva a escribir la contraseña" required>
                    </div>
                    
                </div>
                <div class="input-field" style="display: flex; justify-content: center;">
                    <button type="submit" value="Registrarse" class="submit">Registrarse</button>
                </div>
            </form>

            <div style="display: flex; justify-content: center; margin-top: 10px;">
                <p>
                    <a href="./login" style="cursor: pointer; text-decoration: none; color: rgb(61, 86, 94); font-size: 12px;">Ya tienes una cuenta? Iniciar Sesión.</a>
                </p>
            </div>

        </div>
    </div>
    <h2>Credenciales</h2><br><p>Usuario</p><br><p>Contraseña</p>
    
</main>
@endsection

@section('css_footer')
style="margin-top: 0px;"
@endsection
