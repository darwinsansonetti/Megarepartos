@extends('layout.layout_restaurant')

@section('content')

<main>

    <div class="hero_in detail_page background-image" data-background="url({{ asset('img/submit_restaurant_home.jpg') }})">
        <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            
            <div class="container">
                <div class="main_info">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="head"><div class="score"><span>Variado<em>350 view</em></span><strong>9.5</strong></div></div>
                            <h1>Kebad Pizzería Figueres</h1>
                            Avinguda de Salvador Dalí i Domènech, 52, Bj, 17600 Figueres, Girona, España
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
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/figueres/1.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pizza Margarita</h3>
                                    <p>Pizza</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/figueres/2.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pizza 4 Quesos</h3>
                                    <p>Pizza</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/figueres/3.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pizza El Kebab de Figueres Especial</h3>
                                    <p>Pizza</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/figueres/4.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pizza Hawaiana</h3>
                                    <p>Pizza</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/figueres/5.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pizza Boloñesa</h3>
                                    <p>Pizza</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/figueres/6.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pizza Gambas</h3>
                                    <p>Pizza</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/figueres/7.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pizza Pollo o Ternera</h3>
                                    <p>Pizza</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/figueres/8.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pizza BBQ 26</h3>
                                    <p>Pizza</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/figueres/9.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pizza 4 Estaciones</h3>
                                    <p>Pizza</p>
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