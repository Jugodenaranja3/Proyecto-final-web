@extends('layouts.app')

@section('title')
KANG MIN Electronics | Producto
@endsection

@push('css')
    <link rel="stylesheet" href="./../../resources/css/style.css">
    <link rel="stylesheet" href="./../../resources/css/document.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

@endpush

@section('href_logo')
    href="../"
@endsection

@section('src_logo')
    src="./../../resources/images/logo.png"
@endsection

@section('sign_in')
href="../account/login"
@endsection

@section('sign_up')
href="../account/register"
@endsection

@push('nav_button')
    <li><a href="../products">Productos</a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
@endpush

@section('document_content')

    <h1>Formulario para registrar un nuevo producto.</h1>

    <form action="../products" method="POST">
        @csrf
        <div>
            <label for="">Nombre del producto:
                <input type="text" name="name" id="">
            </label>
            <br><br>
            <label for="">Cantidad:
                <input type="text" name="quantity" id="">
            </label>
            <br><br>
            <label for="">Precio:
                <input type="text" name="price" id="">
            </label>
            <br><br>
            <label for="">Disponibilidad:
                <input type="text" name="availability" id="">
            </label>
            <br><br>
            <label for="">Categoría
                
            </label>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-info">Registrar Producto</button>
    </form>

@endsection

@section('css_footer')
style="margin-top: 120px;"
@endsection

@push('document_script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endpush