<!-- PLANTILLA -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Document')</title>

    @stack('css')

</head>
<body>

    <header>
        <nav class="nav navbar">
            <div class="container">
                <!--<h1 class="logo"><a @yield('href_logo')>PRÁCTICA 8</a></h1>-->
                <a @yield('href_logo')>
                    <img class="logo" @yield('src_logo') alt="Kang Min Electronics" style="height: 50px">
                </a>
                <ul>
                    <li><a href="#home" class="">Inicio</a></li>
                    @stack('nav_button');
                </ul>
                <div>
                    <a @yield('sign_in') class="cta-button" type="submit">Iniciar Sesión</a>
                    <a @yield('sign_up') class="cta-button">Registrarse</a>
                </div>
                
                <!-- Cart -->
                @stack('cart-container');
                <!-- End Cart -->

                
            </div>
        </nav>
    </header>

    @yield('document_content')

    <footer @yield('css_footer')>
        <p>&copy; 2024 Heredia Saravia Edwin, Valdivia Rodriguez Rolando. Todos los derechos reservados.</p>
    </footer>

    <!-- script -->
    @stack('document_script')
</body>
</html>