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
                <h2>Política de Privacidad</h2>
            </div>
            <!-- /main_title -->

            <div class="privacy-content">
                <p>En MEGAREPARTOS, trabajamos para brindarte la mejor experiencia a través de nuestros productos y servicios. Para lograrlo, en algunos casos necesitamos recopilar información personal. Valoramos tu privacidad y creemos en la transparencia sobre el uso de tus datos.</p>

                <p>De acuerdo con lo establecido en el <strong>Reglamento (UE) 2016/679</strong> del Parlamento Europeo y del Consejo (<strong>RGPD</strong>), relativo a la protección de datos personales y su libre circulación, así como en la <strong>Ley 34/2002</strong>, de Servicios de la Sociedad de la Información y de Comercio Electrónico (<strong>LSSI</strong>), MEGAREPARTOS informa a los usuarios que, como responsable del tratamiento, incorporará sus datos en un fichero automatizado.</p>

                <h3>Nuestro compromiso con tu privacidad</h3>
                <ul>
                    <li>Recopilamos datos para mejorar tu experiencia, ajustándonos a tus intereses y necesidades.</li>
                    <li>Somos transparentes sobre los datos que obtenemos y su finalidad.</li>
                    <li>Cumplimos con la normativa vigente y solicitamos tu consentimiento cuando sea necesario.</li>
                    <li>Tus datos te pertenecen. Puedes solicitarnos en cualquier momento que dejemos de procesarlos.</li>
                    <li>La seguridad es nuestra prioridad. Protegemos tus datos conforme a la normativa europea.</li>
                </ul>

                <p>Si tienes preguntas sobre esta Política de Privacidad, puedes escribirnos a <a href="mailto:infolacomarca1224@gmail.com">infolacomarca1224@gmail.com</a>.</p>
            </div>
        </div>



        <!-- /container -->


    </main>
    <!-- /main -->	

@endsection