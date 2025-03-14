@extends('layout.layout_megarepartos')

@section('content')

    <main>
        <div class="hero_single version_2">
            <div class="opacity-mask">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8">
                            <h1>Megarepartos, te lo llevamos en minutos...</h1>
                            <p>Los mejores Restaurantes al mejor precio</p>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <div class="wave hero"></div>
        </div>
        <!-- /hero_single -->

        <div class="container margin_30_60">
            <div class="main_title center">
                <span><em></em></span>
                <h2>Categorías Populares</h2>
                <p>Aca encontratas lo que buscas...</p>
            </div>
            <!-- /main_title -->

            <div class="owl-carousel owl-theme categories_carousel">
                <div class="item_version_2">
                    <a href="#" style="pointer-events: none;">
                        <figure>
                            <span>98</span>
                            <img src="{{ asset('img/home_cat_placeholder.jpg') }}" data-src="{{ asset('img/home_cat_pizza.jpg') }}" alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Pizza</h3>
                                <small>Avg price $40</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="#" style="pointer-events: none;">
                        <figure>
                            <span>55</span>
                            <img src="{{ asset('img/home_cat_placeholder.jpg') }}" data-src="{{ asset('img/home_cat_hamburgher.jpg') }}" alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Hamburguesas</h3>
                                <small>Avg price $55</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="#" style="pointer-events: none;">
                        <figure>
                            <span>55</span>
                            <img src="{{ asset('img/home_cat_vegetarian.jpg') }}" data-src="{{ asset('img/home_cat_vegetarian.jpg') }}" alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Vegetariana</h3>
                                <small>Avg price $40</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="#" style="pointer-events: none;">
                        <figure>
                            <span>65</span>
                            <img src="{{ asset('img/home_cat_placeholder.jpg') }}" data-src="{{ asset('img/home_cat_bakery.jpg') }}" alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Postres</h3>
                                <small>Avg price $60</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="#" style="pointer-events: none;">
                        <figure>
                            <span>25</span>
                            <img src="{{ asset('img/home_cat_chinesse.jpg') }}" data-src="{{ asset('img/home_cat_chinesse.jpg') }}" alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>China</h3>
                                <small>Avg price $40</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="#" style="pointer-events: none;">
                        <figure>
                            <span>35</span>
                            <img src="{{ asset('img/home_cat_mexican.jpg') }}" data-src="{{ asset('img/home_cat_mexican.jpg') }}" alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Mexicana</h3>
                                <small>Avg price $35</small>
                            </div>
                        </figure>
                    </a>
                </div>
            </div>
            <!-- /carousel -->
        </div>
        <!-- /container -->

        <div class="bg_gray">
            <div class="container margin_60_40">
                <div class="main_title">
                    <span><em></em></span>
                    <h2>Restaurantes Afiliados</h2>
                    <p>Los Restaurantes que forman parte de Megarepartos...</p>
                    <a href="#0">Mostrar todos &rarr;</a>
                </div>
                <div class="row add_bottom_25">
                    <div class="col-lg-6">
                        <div class="list_home">
                            <ul>
                                <li>
                                    <a href="{{ url('Restaurant-Shangai') }}">
                                        <figure>
                                            <img src="{{ asset('img/location_list_placeholder.png') }}" data-src="{{ asset('img/ShanGhai.jpg') }}" alt="" class="lazy" width="350" height="233">
                                        </figure>
                                        <div class="score"><strong>9.5</strong></div>
                                        <em>Comida China</em>
                                        <h3>Restaurant Xines Shangai</h3>
                                        <ul>
                                            <li><span class="ribbon off">40 min</span></li>
                                        </ul>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('Restaurant-Figueres') }}">
                                        <figure>
                                            <img src="{{ asset('img/location_list_placeholder.png') }}" data-src="{{ asset('img/figueres.jpg') }}" alt="" class="lazy" width="350" height="233">
                                        </figure>
                                        <div class="score"><strong>9.5</strong></div>
                                        <em>Pizzas</em>
                                        <h3>Kebad Pizzería Figueres</h3>
                                        <ul>
                                            <li><span class="ribbon off">40 min</span></li>
                                        </ul>
                                    </a>
                                </li>
                                <li>
                                    <a href="detail-restaurant.html">
                                        <figure>
                                            <img src="{{ asset('img/location_list_placeholder.png') }}" data-src="{{ asset('img/GIULIANA_PIZZA.jpg') }}" alt="" class="lazy" width="350" height="233">
                                        </figure>
                                        <div class="score"><strong>9.5</strong></div>
                                        <em>Pizzas</em>
                                        <h3>Giuliana Pizza</h3>
                                        <ul>
                                            <li><span class="ribbon off">40 min</span></li>
                                        </ul>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="list_home">
                            <ul>
                                <li>
                                    <a href="{{ url('Restaurant-Pomodoro') }}">
                                        <figure>
                                            <img src="{{ asset('img/location_list_placeholder.png') }}" data-src="{{ asset('img/EBASILICO.jpg') }}" alt="" class="lazy" width="350" height="233">
                                        </figure>
                                        <div class="score"><strong>9.5</strong></div>
                                        <em>Pizzas</em>
                                        <h3>Pizzería Pomodoro Ebasilico</h3>
                                        <ul>
                                        <li><span class="ribbon off">40 min</span></li>
                                        </ul>
                                    </a>
                                </li>
                                <li>
                                    <a href="detail-restaurant.html">
                                        <figure>
                                            <img src="{{ asset('img/location_list_placeholder.png') }}" data-src="{{ asset('img/COMET.jpg') }}" alt="" class="lazy" width="350" height="233">
                                        </figure>
                                        <div class="score"><strong>9.5</strong></div>
                                        <em>Pizzas</em>
                                        <h3>Pizza Comet</h3>
                                        <ul>
                                            <li><span class="ribbon off">40 min</span></li>
                                        </ul>
                                    </a>
                                </li>
                                <li>
                                    <a href="detail-restaurant.html">
                                        <figure>
                                            <img src="{{ asset('img/location_list_placeholder.png') }}" data-src="{{ asset('img/kebab_nou.jpg') }}" alt="" class="lazy" width="350" height="233">
                                        </figure>
                                        <div class="score"><strong>9.5</strong></div>
                                        <em>Kebab</em>
                                        <h3>Kebab de Nou</h3>
                                        <ul>
                                            <li><span class="ribbon off">40 min</span></li>
                                        </ul>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="banner lazy" data-bg="url({{ asset('img/detail_3.jpg') }})">
                    <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                        <div>
                            <small>Megarepartos</small>
                            <h3>Lo llevamos a donde sea...</h3>
                            <p>¡Disfruta de una comida sabrosa en minutos!</p>
                            <a href="https://megarepartos.com/" class="btn_1 gradient">Visitar!</a>
                        </div>
                    </div>
                    <!-- /wrapper -->
                </div>
                <!-- /banner -->
            </div>
        </div>
        <!-- /bg_gray -->

        <div class="shape_element_2">
            <div class="container margin_60_0">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box_how">
                                    <figure><img src="{{ asset('img/lazy-placeholder-100-100-white.png') }}" data-src="{{ asset('img/how_1.svg') }}" alt="" width="150" height="167" class="lazy"></figure>
                                    <h3>Descarga</h3>
                                    <p>Ingresa a <a href="https://megarepartos.com/">Megarepartos</a> y descarga nuestra app</p>
                                </div>
                                <div class="box_how">
                                    <figure><img src="{{ asset('img/lazy-placeholder-100-100-white.png') }}" data-src="{{ asset('img/how_2.svg') }}" alt="" width="130" height="145" class="lazy"></figure>
                                    <h3>Registrate</h3>
                                    <p>Ingresa la informacion solicitada y has tus pedidos de forma facil y rapida.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="box_how">
                                    <figure><img src="{{ asset('img/lazy-placeholder-100-100-white.png') }}" data-src="{{ asset('img/how_3.svg') }}" alt="" width="150" height="132" class="lazy"></figure>
                                    <h3>Disfruta</h3>
                                    <p>Es muy facil, solo has tu pedido y disfruta de la mejor comida en minutos.</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-center mt-3 d-block d-lg-none"><a href="#0" class="btn_1 medium gradient pulse_bt mt-2">Register Now!</a></p>
                    </div>
                    <div class="col-lg-5 offset-lg-1 align-self-center">
                        <div class="intro_txt">
                            <div class="main_title">
                                <span><em></em></span>
                                <h2>Ordena ahora mismo</h2>
                            </div>
                            <p class="lead">Disfruta de los mejores Restaurant en <a href="https://megarepartos.com/">Megarepartos</a></p>
                            <p><a href="https://megarepartos.com/" class="btn_1 medium gradient pulse_bt mt-2">Registrate</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /shape_element_2 -->

    </main>
    <!-- /main -->	

@endsection