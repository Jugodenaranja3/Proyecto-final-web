@extends('layouts.app')

@section('title')
    Kang Min Electronics | Tienda
@endsection

@push('css')
    <link rel="stylesheet" href="../../resources/css/style.css">
    <link rel="stylesheet" href="../../resources/css/styleStore.css">
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
    @if (true)
        <li><a href="../electronic-components/collections">Tienda</a></li>
    @else
        
    @endif
@endpush

@push('cart-container')
    <div>
        <div class="container-icon">
            <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
            </svg>-->
            <div class="container-cart-icon" style="cursor: pointer;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-cart">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
                <div class="count-products">
                    <span id="contador-productos">0</span>
                </div>
            </div>



            <div class="container-cart-products hidden-cart">
                <div class="row-product">   <!-- row-product - innerhtml -->
                    <p class="cart-empty">El carrito está vacio</p>
                    <!--<div class="cart-product">
                        <div class="info-cart-product">
                            <span class="cantidad-producto-carrito">1</span>
                            <p class="titulo-producto-carrito">Green Tea Anti-Aging</p>
                            <span class="precio-producto-carrito">$175</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-close">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>-->
                </div>

                <div class="cart-total">
                    <h3>Total:</h3>
                    <span class="total-pagar">$0</span>
                </div>

                <div>
                    <!-- boton para pagar -->
                    <a id="paymentOrder" style="display: flex;align-items: center;background: #fff;padding: 10px;margin: 5px 0;text-decoration: none;color: #000;border-radius: 5px;box-shadow: 0 0 5px rgba(0,0,0,0.1);" data-showmodal="true">
                        <!--<i class="fas fa-camera" style="margin-right: 10px;"></i>--> 
                        Pagar
                    </a>
                </div>
            </div>
        </div>
    </div>
@endpush

@section('document_content')
    <!-- The Modal -->
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background: #AFDDE9FF">

                <!-- Modal Header -->
                <div class="modal-header" style="background: #37ABC8FF;">
                    <h4 class="modal-title">
                        Paga con QR Code
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" style="color: #aaa; float: right; font-size: 28px; font-weight: bold; ">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card mb-3">
                        <img src="../../resources/images/24062801014124617045.png" class="card-img-top" alt="qr code">
                        <div class="card-body">
                            <h5 class="card-title">Realiza tus pagos con QR.</h5>
                            <p class="card-text"></p>
                            <p class="card-text"><small class="text-body-secondary"></small></p>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->  
                    <!--<div>
                        <button type="button" id="capture">Capturar</button>
                        <button type="button" id="reset" style="display:none;">Tomar otra foto</button>
                    </div>-->
                    <a href="#" id="acceptPhoto" style="display: flex;align-items: center;background: #fff;padding: 10px;margin: 5px 0;text-decoration: none;color: #000;border-radius: 5px;box-shadow: 0 0 5px rgba(0,0,0,0.1);" data-showmodal="false">
                        <i></i> Aceptar
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- End The Modal -->

    <main class="hero container-lg">
        <div class="container-items" style="margin-top: 20px">
            @foreach ($products as $product)
            <div class="item">
                <figure>
                    <img src="../resources/images/" alt="{{$product->name}}">
                </figure>
                <div class="info-product">
                    <h2>{{$product->name}}</h2>
                    <h3>${{$product->unitPrice}} Value</h3>
                    <p class="price">${{$product->unitPrice}}</p>
                    <button class="btn-add-cart">QUICK ADD</button>
                </div>
            </div>
            @endforeach
        </div>
    </main>
@endsection

@section('css_footer')
    style="margin-top: 30px;"
@endsection

@push('document_script')
    <script src="../../resources/js/indexStore.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        /*$(document).ready(function () {
            var showModal = '<%= ShowModal %>';
        if (showModal == 'true') {
            $('#myModal').modal('show');
    
        }*
    
    
        // Manejar el clic en el enlace
        $('#paymentOrder').click(function (e) {
            e.preventDefault();
            var show = $(this).data('showmodal');   // data-showmodal
            if (show == true) {
                showModal = 'true';
                $('#myModal').modal('show');
            }
        });
    
        $('#acceptPhoto').click(function (e) {
            e.preventDefault();
            var show = $(this).data('showmodal');   // data-showmodal
            if (show == false) {
                showModal = 'false';
                $('#myModal').modal('hide');
            }
        });
    /*});*/


        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("paymentOrder");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <style>
        /* Modal container, hidden by default */
        .

        /* Modal content */
        

        /* The close button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
