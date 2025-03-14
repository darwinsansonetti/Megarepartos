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
                <h2>Términos y Condiciones</h2>
            </div>
            <!-- /main_title -->

            <div class="terms-content">
                <p>Si deseas más información sobre el tratamiento de tus datos, consulta los siguientes apartados.</p>

                <h3>1. Responsable del tratamiento</h3>
                <ul>
                    <li><strong>Identidad:</strong> MEGAREPARTOS.COM</li>
                    <li><strong>Domicilio social:</strong> VERGE MARIA 12, 17600 Figueres</li>
                    <li><strong>Correo electrónico:</strong> <a href="mailto:infolacomarca1224@gmail.com">infolacomarca1224@gmail.com</a></li>
                </ul>

                <h3>2. Datos que recopilamos</h3>
                <p>Los datos personales que podemos solicitar incluyen:</p>
                <ul>
                    <li>Nombre y apellidos</li>
                    <li>Dirección</li>
                    <li>Número de teléfono</li>
                    <li>Correo electrónico</li>
                    <li>Información de pago (tarjeta de crédito o débito)</li>
                </ul>

                <h3>3. Finalidad del tratamiento de datos</h3>
                <p>Utilizamos la información proporcionada por los usuarios para:</p>
                <ul>
                    <li>Gestionar la relación contractual y la prestación de nuestros servicios.</li>
                    <li>Procesar pedidos y facilitar la contratación de nuestros servicios.</li>
                    <li>Enviar comunicaciones por correo electrónico.</li>
                    <li>Informar sobre promociones, descuentos y novedades.</li>
                </ul>

                <h3>4. Base legal para el tratamiento</h3>
                <ul>
                    <li>Cumplimiento de la relación contractual establecida con el usuario.</li>
                    <li>Consentimiento explícito del usuario en los casos requeridos.</li>
                    <li>Interés legítimo de MEGAREPARTOS para enviar información relevante.</li>
                </ul>
                <p>El usuario puede retirar su consentimiento en cualquier momento enviando un correo a <a href="mailto:infolacomarca1224@gmail.com">infolacomarca1224@gmail.com</a>.</p>

                <h3>5. Conservación de los datos</h3>
                <ul>
                    <li>Los datos serán tratados mientras sean necesarios para cumplir con la finalidad de su recopilación.</li>
                    <li>Se conservarán hasta 5 años después de la última actividad en la plataforma.</li>
                    <li>Al finalizar este período, se eliminarán, salvo cuando sea necesario conservarlos para el cumplimiento de obligaciones legales.</li>
                </ul>

                <h3>6. Destinatarios de los datos</h3>
                <p>Nunca vendemos tus datos a terceros. Sin embargo, en algunos casos compartimos información con proveedores para la prestación de servicios:</p>
                <ul>
                    <li>Procesadores de pago (para gestionar transacciones).</li>
                    <li>Restaurantes y comercios asociados (para facilitar pedidos).</li>
                    <li>Servicios de logística y transporte (para gestionar envíos).</li>
                </ul>
                <p>Todos los terceros con los que trabajamos cumplen estrictamente con las normas de privacidad y protección de datos.</p>

                <h3>7. Almacenamiento de los datos</h3>
                <ul>
                    <li>Los datos se almacenan dentro de la Unión Europea (UE).</li>
                    <li>Si en algún caso se transfieren fuera de la UE, garantizamos que los destinatarios cumplen con estándares adecuados de protección, como Normas Corporativas Vinculantes (BCR) o el Privacy Shield.</li>
                </ul>

                <h3>8. Derechos del usuario</h3>
                <p>Los usuarios tienen derecho a:</p>
                <ul>
                    <li>Acceder a sus datos personales.</li>
                    <li>Solicitar la rectificación o eliminación de datos.</li>
                    <li>Limitar el tratamiento de su información.</li>
                    <li>Oponerse al tratamiento de sus datos.</li>
                    <li>Solicitar la portabilidad de sus datos a otro servicio.</li>
                </ul>
                <p>Puedes ejercer estos derechos enviando un correo a <a href="mailto:infolacomarca1224@gmail.com">infolacomarca1224@gmail.com</a>.</p>

                <h3>9. Seguridad de los datos</h3>
                <p>En MEGAREPARTOS, aplicamos medidas de seguridad avanzadas para proteger tus datos de accesos no autorizados, alteraciones, pérdidas o usos indebidos.</p>
                <p>Sin embargo, ningún sistema es completamente seguro, por lo que en caso de detectar una vulnerabilidad, notificaremos a los usuarios afectados y a las autoridades competentes según lo establecido en la normativa.</p>

                <h3>10. Uso de cookies</h3>
                <p>Nuestra web y aplicación utilizan cookies para mejorar la experiencia del usuario y optimizar el rendimiento.</p>
                <ul>
                    <li>Las cookies no contienen información personal.</li>
                    <li>Puedes configurar tu navegador para bloquearlas si lo deseas.</li>
                </ul>
                <p>Para más detalles, consulta nuestra <a href="#">Política de Cookies</a>.</p>

                <h3>11. Modificaciones de la Política de Privacidad</h3>
                <p>MEGAREPARTOS se reserva el derecho de actualizar o modificar esta Política de Privacidad en cualquier momento.</p>
                <p>Las modificaciones se publicarán en la web/app y entrarán en vigor desde su publicación. Se recomienda a los usuarios revisarlas periódicamente.</p>

                <h3>Contacto</h3>
                <p>Si tienes preguntas o sugerencias, puedes escribir a <a href="mailto:infolacomarca1224@gmail.com">infolacomarca1224@gmail.com</a>.</p>
            </div>
        </div>


        <!-- /container -->


    </main>
    <!-- /main -->	

@endsection