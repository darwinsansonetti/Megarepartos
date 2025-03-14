@extends('layout.layout_megarepartos')

@section('styles')
<style>
    .about-text {
        text-align: justify;
        max-width: 800px;
        margin: 0 auto;
        font-size: 18px;
        line-height: 1.6;
        color: #333;
    }

    .about-text p {
        margin-bottom: 15px;
    }

    .about-text strong {
        color: #007bff; /* Color azul para resaltar */
    }
</style>
@endsection

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
        <h2>QUIÉNES SOMOS</h2>
    </div>
    <!-- /main_title -->

    <div class="about-content">
        <p><strong>MEGAREPARTOS.COM</strong>, la app diseñada para transformar la vida en las ciudades al ofrecer soluciones logísticas eficientes y una experiencia integrada para los usuarios. Las personas pueden pedir comida, realizar compras en supermercados, gestionar envíos y recogidas, acceder a farmacias locales y utilizar un servicio todo en una sola plataforma.</p>

        <p>Desde su creación, <strong>MEGAREPARTOS</strong> ha revolucionado el sector logístico en España, brindando un servicio de última milla profesional y eficiente. A través de nuestra red de repartidores y soluciones tecnológicas, hemos ayudado a digitalizar y potenciar a restaurantes, supermercados y negocios locales, optimizando sus operaciones y mejorando la experiencia del cliente.</p>

        <p>Actualmente, <strong>MEGAREPARTOS</strong> opera en <strong>Figueras</strong>, con planes de expansión en toda Europa. Con una visión centrada en la innovación y el crecimiento sostenible, hemos desarrollado soluciones avanzadas y alianzas estratégicas para ofrecer un servicio de primer nivel.</p>

        <p>Estamos comprometidos con nuestra misión de <strong>empoderar a las personas y transformar comunidades</strong>, conectando a los usuarios con soluciones logísticas accesibles y eficientes. <strong>MEGAREPARTOS</strong> no es solo una aplicación, sino una plataforma que impulsa el progreso económico y la innovación en cada ciudad donde operamos.</p>
    </div>
</div>


        <!-- /container -->


    </main>
    <!-- /main -->	

@endsection