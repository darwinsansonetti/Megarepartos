@extends('layout.layout_restaurant')

@section('menu')
            
<header class="header_in clearfix">
    <div class="container">
        <div id="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/logo.png') }}" width="140" height="35" alt="">
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
                        <li><a href="404.html">Kebad Pizzería Figueres</a></li>
                        <li><a href="help.html">Pizzería Pomodoro Ebasilico</a></li>
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

@endsection

@section('content')

<main>

    <div class="hero_in detail_page background-image" data-background="url({{ asset('img/submit_restaurant_home.jpg') }})">
        <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            
            <div class="container">
                <div class="main_info">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="head"><div class="score"><span>Variado<em>350 view</em></span><strong>9.5</strong></div></div>
                            <h1>Restaurant Xines Shangai</h1>
                            Carrer d'Arquímedes, 140, 08224 Terrassa, Barcelona, España
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /main_info -->
            </div>
        </div>
    </div>
    <!--/hero_in-->

    <div class="bg_gray">
        <div class="container margin_detail">
            <div class="row">
                <div class="col-lg-12 list_menu">
                    <section id="section-3">
                        <h4>Productos</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/shanghai/1.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Ternera Picante</h3>
                                    <p>Plato Chino</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/shanghai/2.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pato Asado</h3>
                                    <p>Pato</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/shanghai/3.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pato con setos chinos y bambu</h3>
                                    <p>pato</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/shanghai/4.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pato Picante Gang Bao</h3>
                                    <p>Pato</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/shanghai/5.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Cazuela oriental</h3>
                                    <p>Pollo, sepia, gamba, col, fideos, seta</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/shanghai/6.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pollo Ma La</h3>
                                    <p>Pollo</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/shanghai/7.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pollo Dous</h3>
                                    <p>Pollo</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/shanghai/8.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pollo rebozado con escalonia</h3>
                                    <p>Pollo</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/shanghai/9.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pollo con almendras</h3>
                                    <p>Pollo</p>
                                </a>
                            </div>
                        </div>
                        <!-- /row -->
                    </section>
                    <!-- /section -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

    <!-- /bg_gray -->

</main>
<!-- /main -->

@endsection