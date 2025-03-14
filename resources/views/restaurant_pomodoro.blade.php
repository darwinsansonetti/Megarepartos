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
                            <h1>Pizzería Pomodoro Ebasilico</h1>
                            C. San Anastasio, 4, Arganzuela, 28005 Madrid, España
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
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/pomodoro/1.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pasta en Salsa de Gambas</h3>
                                    <p>Pastas</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/pomodoro/2.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pasta con Salmon</h3>
                                    <p>Pastas</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/pomodoro/3.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pizza Vulcano</h3>
                                    <p>Pizza</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/pomodoro/4.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pizza Calzone</h3>
                                    <p>Pizza</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/pomodoro/5.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Tiras de Pollo (10 Unidades)</h3>
                                    <p>Pollo</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/pomodoro/6.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Ensalada de Camembert Rebozado</h3>
                                    <p>Ensaladas</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/pomodoro/7.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Hamburguesa Chicago</h3>
                                    <p>Hamburguesas</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/pomodoro/8.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Hot Dog XL Chili Dog</h3>
                                    <p>Hot Dog</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="menu_item modal_dialog" href="#modal-dialog">
                                    <figure><img src="{{ asset('img/menu-thumb-placeholder.jpg') }}" data-src="{{ asset('img/pomodoro/9.jpg') }}" alt="thumb" class="lazy"></figure>
                                    <h3>Pizza Magret de Pato</h3>
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