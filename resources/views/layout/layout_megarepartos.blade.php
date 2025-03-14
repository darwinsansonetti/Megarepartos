<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Megarepartos - Quality delivery or takeaway food">
    <meta name="author" content="Ansonika">
    <title>Megarepartos</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('img/logo.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="anonymous">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" as="fetch" crossorigin="anonymous">
    <script type="text/javascript">
    !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap",r="__3perf_googleFonts_c2536";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage);
    </script>
    
    <!-- BASE CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/detail-page.css') }}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{ asset('css/listing.css') }}" rel="stylesheet">
    <link href="{{ asset('css/leaflet.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- ===========Contenido dinamico========== -->
    @yield('styles')
    <!-- ===========Contenido dinamico========== -->
</head>

<body>
    <header class="header clearfix element_to_stick">
        <div class="container">
            <div id="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" width="100" height="35" alt="">
                </a>
            </div>
            <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
            <ul id="top_menu">
                <li><a href="#" style="pointer-events: none;" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
            </ul>
            <!-- /top_menu -->
            <a href="#0" class="open_close">
                <i class="icon_menu"></i><span>Menu</span>
            </a>
            <nav class="main-menu">
                <div id="header_menu">
                    <a href="#0" class="open_close">
                        <i class="icon_close"></i><span>Menu</span>
                    </a>
                    <a href="{{ url('/') }}"><img src="{{ asset('img/logo.svg') }}" width="162" height="35" alt=""></a>
                </div>
                <ul>
                    <li class="submenu">
                        <a href="{{ url('/') }}" class="show-submenu">Inicio</a>
                    </li>
                    <li class="submenu">
                        <a href="#0" class="show-submenu">Restaurant</a>
                        <ul>
                            <li><a href="{{ url('Restaurant-Shangai') }}">Restaurant Xines Shangai</a></li>
                            <li><a href="{{ url('Restaurant-Figueres') }}">Kebad Pizzería Figueres</a></li>
                            <li><a href="{{ url('Restaurant-Pomodoro') }}">Pizzería Pomodoro Ebasilico</a></li>
                            <li><a href="blog.html">Pizza Comet</a></li>
                        </ul>
                    </li>                  
                    <li class="submenu">
                        <a href="#0" class="show-submenu">Tipo de Comida</a>
                        <ul>
                            <li><a href="admin_section/index.html" target="_blank">Pizzas</a></li>
                            <li><a href="404.html">Hamburguesas</a></li>
                            <li><a href="help.html">Kebab</a></li>
                            <li><a href="blog.html">Pastas</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#0" class="show-submenu">Lo más vendido</a>
                    </li>  
                </ul>
            </nav>
        </div>
    </header>
    <!-- /header -->
    

    <!-- ===========Contenido dinamico========== -->
    @yield('content')
    <!-- ===========Contenido dinamico========== -->

    <footer>
        <div class="wave footer"></div>
        <div class="container margin_60_40 fix_mobile">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_1">Enlaces</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_1">
                        <ul>
                            <li><a href="{{ url('Nosotros') }}">Nosotros</a></li>
                            <li><a href="{{ url('Terminos') }}">Terminos y Condiciones</a></li>
                            <li><a href="{{ url('Politicas') }}">Politicas de Privacidad</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_2">Tipo de Comida</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_2">
                        <ul>
                            <li><a href="grid-listing-filterscol.html">Pizzas</a></li>
                            <li><a href="https://ansonika.com/fooyes/grid-listing-filterscol-full-masonry.html">Hamburguesas</a></li>
                            <li><a href="https://ansonika.com/fooyes/grid-listing-filterscol-full-width.html">Kebab</a></li>
                            <li><a href="https://ansonika.com/fooyes/grid-listing-filterscol-full-masonry.html">Pastas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                        <h3 data-bs-target="#collapse_3">Contactanos</h3>
                    <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                        <ul>
                            <li><i class="icon_house_alt"></i>Carrer verge María 12, España</li>
                            <li><i class="icon_mobile"></i>+34 624-65-22-71</li>
                            <li><i class="icon_mail_alt"></i><a href="#0">infolacomarca1224@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                        <h3 data-bs-target="#collapse_4">Escribenos</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_4">
                        <div id="newsletter">
                            <div id="message-newsletter"></div>
                            <form method="post" action="https://www.ansonika.com/fooyes/assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                                <div class="form-group">
                                    <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                    <button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="follow_us">
                            <h5>Siguenos</h5>
                             <ul>
								<li><a href="https://www.facebook.com/share/18vPQs6TG2/"><i class="bi bi-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/lacomarca.es?utm_source=qr&igsh=MThrOHEyZGl0YXJ5NA=="><i class="bi bi-instagram"></i></a></li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row-->
            <hr>
        </div>
    </footer>
    <!--/footer-->

    <div id="toTop"></div><!-- Back to top button -->
    
<!-- Sign In Modal -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="modal_header">
        <h3>Sign In</h3>
    </div>
    <form>
        <div class="sign-in-wrapper">
            <a href="#0" class="social_bt facebook">Login with Facebook</a>
            <a href="#0" class="social_bt google">Login with Google</a>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-start">
                    <label class="container_check">Remember me
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-end"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
            </div>
            <div class="text-center">
                <input type="submit" value="Log In" class="btn_1 full-width mb_5">
                Don’t have an account? <a href="register.html">Sign up</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Modal -->

<!-- COMMON SCRIPTS -->
<script src="{{ asset('js/common_scripts.min.js') }}"></script>
<script type="text/javascript">
   jQuery.event.special.touchstart = {
  setup: function( _, ns, handle ) {
      this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
  }
};
</script>

<script src="{{ asset('js/common_func.js') }}"></script>
<script src="{{ asset('assets/validate.js') }}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{ asset('js/sticky_sidebar.min.js') }}"></script>
<script src="{{ asset('js/specific_listing.js') }}"></script>

<!-- Map LeafLet + Mapbox-->
<script src="{{ asset('js/leaflet_map/leaflet.min.js') }}"></script>
<script src="{{ asset('js/leaflet_map/leaflet_markercluster.min.js') }}"></script>
<script src="{{ asset('js/leaflet_map/leaflet_markers.js') }}"></script>
<script src="{{ asset('js/leaflet_map/leaflet_no_mapbox_func.js') }}"></script>


<!-- Autocomplete -->
<script>
function initMap() {
    var input = document.getElementById('autocomplete');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
        }

        var address = '';
        if (place.address_components) {
            address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }
    });
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?&amp;libraries=places&amp;callback=initMap"></script>

</body>

</html>