@extends('layouts.app')

@section('title')
    Kang Min Electronics | Producto
@endsection

@push('css')
    <link rel="stylesheet" href="../resources/css/style.css">
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
    <li><a href="#featured_products">Destacados</a></li>
    <li><a href="#experience">Experiencia</a></li>
    @if (true)
        <li><a href="./electronic-components/collections">Tienda</a></li>
    @else
        
    @endif
@endpush

@section('document_content')
    <main class="hero">
        <!-- HOME -->
        <section id="home" class="home">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="../resources/images/SWS_FEB_24_kang_min_electronics.png" class="d-block w-100"
                            alt="KANG MIN ELECTRONIC">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>__________________________________________________</h5>
                            <p><b>KANG MIN ELECTRONICS</b> es un proveedor mundial de productos de electrónica.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="../resources/images/SWS_MAY_23_microchip_development_tools.png"
                            class="d-block w-100" alt="Herramientas de Desarrollo">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Herramientas de Desarrollo</h5>
                            <p>Programación rápida y mayor funcionalidad. <b>Depurador/programador en circuito MPLAB
                                    PICkit 4</b> permite la depuración y programación rápida y sencilla de Microchip
                                PIC, dsPIC, AVR, SAM y CEC.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="../resources/images/SWS_JUN_23_wurth-elektronik_conectivity.png"
                            class="d-block w-100" alt="Conectividad Inalámbrica y Sensores">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>¡Exclusivo en línea!</h5>
                            <p>Conectividad inalámbrica y sensores.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- PRODUCTOS DESTACADOS -->
        <section id="featured_products" class="featured-product">
            
            <div class="container featured-product-card">
                <div>
                    <h2 class="home-featured">Productos Destacados</h2>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="../resources/images/ceramic_chip_standard.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Condensador Cerámico</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="../resources/images/series_edh.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Condensador Electrolítico de Aluminio</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="../resources/images/inductors_chip_commercial.png" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Inductor</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!---->
        <section id="experience">
            
            <div class="container">
                <h3>Sobre Kang Min Electronics y nuestra experiencia</h3>

                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">__________</h5>
                                <p class="card-text">Kang Min Electronics tiene una amplia experiencia en manejo de paquetes de envios, y tiene una red logística muy amplia que satisface a los cliente alrededor del mundo.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="../resources/images/package.png" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('css_footer')
style="margin-top: 370px;"
@endsection

@push('document_script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endpush
