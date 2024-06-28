
@extends('layouts.app')

@section('title')
    KANG MIN Electronics | Producto
@endsection

@push('css')
    <link rel="stylesheet" href="../../resources/css/style.css">
    <link rel="stylesheet" href="../../resources/css/document.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endpush

@section('href_logo')
    href="../"
@endsection

@section('src_logo')
    src="../../resources/images/logo.png"
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
    <main>
        <div class="container">
            <h1>Detalle de los Productos</h1>
        </div>
        <div class="container">
            <a href=""></a>
            
            <div style="display: flex;">
                <p>Nombre del Producto:</p>
                <p style="margin-left: 10px;">{{$products->name}}</p>
            </div>
            <div style="display: flex;">
                <p>Cantidad:</p>
                <p style="margin-left: 10px;">{{$products->quantity}}</p>
            </div>
            <div style="display: flex;">
                <p>Precio Bs.:</p>
                <p style="margin-left: 10px;">{{$products->unitPrice}}</p>
            </div>
            <div style="display: flex;">
                <p>Disponibilidad:</p>
                <p style="margin-left: 10px;">{{$products->availability}}</p>
            </div>


            <a href="./../products" class="cta-button" style="">Volver</a>
        </div>
        
    </main>
@endsection

@section('css_footer')
    style="margin-top: 300px;"
@endsection

@push('document_script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endpush