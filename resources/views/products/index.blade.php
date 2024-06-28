
@extends('layouts.app')

@section('title')
    KANG MIN Electronics | Producto
@endsection

@push('css')
    <link rel="stylesheet" href="./../resources/css/style.css">
    <link rel="stylesheet" href="./../resources/css/document.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

@endpush

@section('href_logo')
    href="./"
@endsection

@section('src_logo')
    src="./../resources/images/logo.png"
@endsection

@section('sign_in')
href="./account/login"
@endsection

@section('sign_up')
href="./account/register"
@endsection

@push('nav_button')
    <li><a href="./products">Productos</a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
@endpush

@section('document_content')
    <!--<header>
        <nav class="nav navbar">
            <div class="container">
                <h1 class="logo"><a href="../index.html">PRÁCTICA 8</a></h1>
                <ul>
                    <li><a href="#home" class="">Inicio</a></li>
                    <li><a href="./product.php">Producto</a></li>
                </ul>
                <div>
                    <a href="../resource/php/logout.php" class="cta-button url-close" type="submit">Cerrar Sesión</a>
                </div>
                
            </div>
        </nav>
    </header>-->



    <div class="container">
        <h1 class="text-center">PRODUCTOS</h1>
    </div>
    <div class="container">
        <a href="./products/create" class="btn btn-outline-info">Registrar Nuevo Producto +</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre del Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio Bs.</th>
                    <th scope="col">Disponibilidad</th>
                    <th scope="col">Opciónes para CRUD</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->unitPrice}}</td>
                        <td>{{$product->availability}}</td>
                        <td>
                            <div style="display: -webkit-inline-box; ">
                                <a href="./products/{{$product->id}}/edit" class="btn btn-outline-warning" style="margin: 0 2px">Editar</a>

                                <form action="./products/{{$product->id}}" method="POST" style="margin: 0 2px">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger" type="submit">Eliminar</button>
                                </form>

                                <a href="./products/{{$product->id}}" class="btn btn-outline-info" style="margin: 0 2px">Ver</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                
            
            </tbody>
        </table>
    </div>
@endsection

@section('css_footer')
style="margin-top: 370px;"
@endsection

@push('document_script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endpush