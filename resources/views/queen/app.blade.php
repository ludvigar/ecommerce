<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Verde Aroma') }}</title>

        <meta name="description" content="Queen, premium HTML5&amp;CSS3 template">
        <meta name="author" content="MosaicDesign">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- Scripts -->
        <script src="{{asset ('js/queen_js/vendor/modernizr.js') }}"></script>

        <!-- Styles -->
        <link href="{{asset('css/queen_css/theme-style.css') }}" rel="stylesheet">
        <link href="{{asset('css/queen_css/ie.style.css') }}" rel="stylesheet">
    </head>
    <body>

        @include('queen.sections.header')
        @include('queen.sections.slider')
        @include('queen.sections.banners')
        @include('queen.sections.top_sale')
        @include('queen.sections.product')
        @include('queen.sections.background_banner')
        @include('queen.sections.services')
        @include('queen.sections.client_say')
        @include('queen.sections.partners')
        @include('queen.sections.flickr')
        
        <!-- Section footer -->
        <footer id="footer">
            <div class="block footer-block">
                <div class="container">
                    <div class="header-1">
                        <h1>Y mucho mas</h1>
                        <div class="header-bottom-line"></div>
                        <h3>Nuestros servicios adicionales</h3>
                    </div>
                    <div class="row">
                        <div class="payment-service">
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                                <div class="payment-service-block">
                                    <a href="#">
                                        <span class="payment-service-icon"><i class="glyphicon glyphicon-saved"></i></span>
                                        <div class="payment-service-content">
                                            <h2 class="payment-service-main">100% garantizado</h2>
                                            <h3 class="payment-service-sub">Productos con garantía total</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                                <div class="payment-service-block">
                                    <a href="#">
                                        <span class="payment-service-icon"><i class="glyphicon glyphicon-usd"></i></span>
                                        <div class="payment-service-content">
                                            <h2 class="payment-service-main">El mejor precio</h2>
                                            <h3 class="payment-service-sub">La mejor opción precio calidad</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                                <div class="payment-service-block">
                                    <a href="#">
                                        <span class="payment-service-icon"><i class="glyphicon glyphicon-gift"></i></span>
                                        <div class="payment-service-content">
                                            <h2 class="payment-service-main">Envios a todo el pais</h2>
                                            <h3 class="payment-service-sub">Enviamos por todas las empresas</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                                <div class="payment-service-block">
                                    <a href="#">
                                        <span class="payment-service-icon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <div class="payment-service-content">
                                            <h2 class="payment-service-main">Pago seguro</h2>
                                            <h3 class="payment-service-sub">Todos los medios de pago</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-information">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="header-footer">
                                <h3>Información</h3>
                            </div>
                            <ul class="footer-categories list-unstyled">
                                <li><a href="#"><i class="icon-angle-right"></i> Sobre Nosotros</a></li>
                                <li><a href="#"><i class="icon-angle-right"></i> Contacto</a></li>
                                <li><a href="#"><i class="icon-angle-right"></i> Envíos</a></li>
                                <li><a href="privacy_policy.php"><i class="icon-angle-right"></i> Política de privacidad</a></li>
                                <li><a href="conditions.php"><i class="icon-angle-right"></i> Términos y condiciones</a></li>
                                <li><a href="#"><i class="icon-angle-right"></i> Mapa del Sitio</a></li>
                                <li><a href="#"><i class="icon-angle-right"></i> Inicio</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <div class="header-footer">
                                <h3>Mi Cuenta</h3>
                            </div>
                            <ul class="footer-categories list-unstyled">
                                <li><a href="#"><i class="icon-angle-right"></i> Mi Cuenta</a></li>
                                <li><a href="#"><i class="icon-angle-right"></i> Favoritos</a></li>
                                <li><a href="#"><i class="icon-angle-right"></i> Historial</a></li>
                                <li><a href="#"><i class="icon-angle-right"></i> Marcas</a></li>
                                <li><a href="#"><i class="icon-angle-right"></i> Ofertas</a></li>
                                <li><a href="#"><i class="icon-angle-right"></i> Recibir novedades</a></li>
                                <li><a href="#"><i class="icon-angle-right"></i> Pago Seguro</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <div class="header-footer">
                                <h3>Novedades</h3>
                            </div>
                            <p>
                                Reciba las novedades, promociones y ofertas más importantes desde la comodidad de su correo electrónico.
                            </p>
                            <form class="form-horizontal">
                                <input type="text" class="input" placeholder="Email">
                                <button type="submit"><i class="icon-angle-right"></i></button>
                            </form>
                            <div class="socials">
                                <a href="https://www.facebook.com/aromashopping.com.ar/"><i class="icon-facebook icon-large"></i></a>
                                <a href="https://www.facebook.com/aromashopping.com.ar/"><i class="icon-instagram icon-large"></i></a>
                                <a href="https://www.facebook.com/aromashopping.com.ar/"><i class="icon-twitter icon-large"></i></a>
                                <a href="https://www.facebook.com/aromashopping.com.ar/"><i class="icon-youtube icon-large"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="header-footer">
                                <h3>Estamos en contacto</h3>
                            </div>
                            <p><strong><i class="fa fa-whatsapp" style="font-size:18px"></i> +54 9 11 6970 2412</strong><br><strong>Web:</strong> www.verdearoma.com.ar<br><strong>Email:</strong> info@verdearoma.com.ar</p>
                            <p><strong>VERDE AROMA</strong><br>Quilmes, Argentina.</p>
                            <p><a href=""><i class="icon-map-marker"></i> Google Maps</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy color-scheme-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="index.html" class="logo-copy pull-left"></a>
                            <p class="pull-left">
                                <a href="">Copyright © 2017</a> VERDE AROMA | Todos los derechos reservados.<br>Diseñado por: <a href="http://mosaicdesign.uz" target="_blank">Mosaic Design</a>
                            </p>
                            <ul class="footer-payments pull-right">
                                <li><img src="includes/img/payment-maestro.jpg" alt="payment" /></li>
                                <li><img src="includes/img/payment-discover.jpg" alt="payment" /></li>
                                <li><img src="includes/img/payment-visa.jpg" alt="payment" /></li>
                                <li><img src="includes/img/payment-american-express.jpg" alt="payment" /></li>
                                <li><img src="includes/img/payment-paypal.jpg" alt="payment" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Section footer -->
        <script src="{{ asset('js/queen_js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('js/queen_js/vendor/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/queen_js/vendor/bootstrap.js') }}"></script>

        <script src="{{ asset('js/queen_js/vendor/jquery.flexisel.js') }}"></script>

        <script src="{{ asset('js/queen_js/vendor/jquery.transit.js') }}"></script>
        <script src="{{ asset('js/queen_js/vendor/jquery.jcountdown.js') }}"></script>
        <script src="{{ asset('js/queen_js/vendor/jquery.jPages.js') }}"></script>
        <script src="{{ asset('js/queen_js/vendor/tab.js') }}"></script>

        <script src="{{ asset('js/queen_js/vendor/responsiveslides.min.js') }}"></script>
        <script src="{{ asset('js/queen_js/vendor/jquery.elevateZoom-3.0.8.min.js') }}"></script>

        <!-- jQuery REVOLUTION Slider  -->
        <script src="{{ asset('js/queen_js/vendor/jquery.themepunch.plugins.min.js') }}"></script>
        <script src="{{ asset('js/queen_js/vendor/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('js/queen_js/vendor/jquery.scrollTo-1.4.2-min.js') }}"></script>

        <!-- Custome Slider  -->
        <script src="{{ asset('js/queen_js/main.js') }}"></script>

        <!--Here will be Google Analytics code from BoilerPlate-->
    </body>
</html>
