
@extends('layouts.app')

@section('title')
    KANG MIN Electronics | Producto
@endsection

@push('css')
    <link rel="stylesheet" href="../../../resources/css/style.css">
    <link rel="stylesheet" href="../../../resources/css/document.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endpush

@section('href_logo')
    href="../../"
@endsection

@section('src_logo')
    src="../../../resources/images/logo.png"
@endsection

@section('sign_in')
href="../../account/login"
@endsection

@section('sign_up')
href="../../account/register"
@endsection

@push('nav_button')
    <li><a href="../../products">Productos</a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
@endpush

@section('document_content')
    <div class="container">
        <h1 class="text-center">EDITAR PRODUCTO</h1>
    </div>
    <div class="container">
        <form action="../../products/{{$products->id}}" method="POST">
            @csrf
            @method('PUT')
            
            <input type="hidden" name="id" id="" class="form-control" value="{{$products->id}}">
            
            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input type="text" name="name" id="" class="form-control" value="{{$products->name}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Cantidad</label>
                <input type="text" name="quantity" class="form-control" id="" value="{{$products->quantity}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Precio Bs.</label>
                <input type="text" name="price" id="" class="form-control" value="{{$products->unitPrice}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Disponibilidad (1==True y 0==False)</label>
                <input type="text" name="availability" id="" class="form-control" value="{{$products->availability}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
            
        </form>
    </div>
@endsection

@section('css_footer')
style="margin-top: 370px;"
@endsection

@push('document_script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endpush