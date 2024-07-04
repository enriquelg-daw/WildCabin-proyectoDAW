<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/index.js" defer></script>   
    <link rel="stylesheet" href="styles/style.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/logop.jpg">
    <title>Wild Cabin - Quíenes somos</title>
</head>
<body>
    <!-- Incluir Navbar -->
        <?php include 'navbar.php'; ?>

    <!--quienes somos-->
    
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\nosotros\nosotros1.webp" alt="">
        </div>
        <div id="description-model">
            <h4>Casas Prefabricadas</h4>
            <p>Hemos sido pioneros en España en el diseño, construcción y comercialización de casas prefabricadas de lujo. Nuestro sistema de construcción industrializada nos permite crear viviendas modulares con la mejor eficiencia energética y calidad.</p>
            <p>La estructura de las casas prefabricadas cuentan con estructura realizada con los mismos materiales que las de construcción tradicional, es decir, forjados de hormigón armado y pilares de acero.</p>
            <p>Todo el proceso constructivo es testado y realizado en fábrica, esto nos permite tener un control de calidad de nivel industrial y una precisión milimétrica.</p>
        </div>    
    </section>

    <div class="container privacy" id="description-model">
        <p style="font-weight: bold;">En Wild Cabin nos comprometemos a construir tu vivienda en un plazo de 4 meses y con un precio cerrado, desde antes de comenzar la construcción. El sistema industrializado nos permite ofrecer, a nuestros clientes, su vivienda en un tiempo récord y con precio cerrado. Sin sorpresas ni sobrecostes</p>
    </div>

    <section class="cards2 column grid container">
        <div id="description-model">
            <h4>Precio de las casas prefabricadas</h4>
            <p>Una de las ventajas de una casa prefabricada es que tiene un precio cerrado, lo cual te permite conocer desde el inicio cuánto costará exactamente la vivienda. Esto te facilita la planificación financiera y brinda un control exacto del presupuesto total. Además, el precio cerrado implica que los costos asociados a la construcción están fijados, protegiéndote de variaciones en los precios de los materiales o cambios inesperados durante la construcción.</p>
            <p>Conocer el precio desde el inicio ofrece tranquilidad, mejora la experiencia general y reduce el estrés asociado con la construcción de una casa, ya que hay sorpresas desagradables en términos de costos.</p>
            <p>En resumen, conocer el precio cerrado en una casa prefabricada proporciona transparencia, control presupuestario y contribuye a una experiencia de construcción más fluida y predecible.</p>
        </div>    
        <div id="img-container">
            <img src="img\nosotros\nosotros2.webp" alt="">
        </div>
    </section>
    
    <section class="cards2 column grid container" style="display: block;">
        <div id="description-model">
            <h4>Equipamiento de nuestras casas modulares</h4>
            <p>Todas nuestras casas prefabricadas van equipadas con climatización por aerotermia y suelo radiante-refrescante. Llevan persianas motorizadas en todos los dormitorios. Las cocinas se entregan totalmente amuebladas con electrodomésticos incluidos. Y los baños se entregan con sanitarios, mueble colgado, espejo y aplique.</p>
            <p>Ademas, a nuestras casas modulares se les puede incorporar diferentes acabados de forma opcional. Revestimientos de madera y otros materiales nobles en suelos y paredes. Pinturas fotocatalíticas anti-alergénicas. Sistemas domóticos para el control de todos los elementos de la casa desde cualquier dispositivo móvil. E incluso sistemas audiovisuales de calidad profesional, en toda la casa.</p>
            <br>
        </div>    
        <div id="img-container">
            <img src="img\nosotros\nosotros4.webp" alt="">
        </div>
       
        
    </section>

    <!--End quienes somos-->
    
    <!--End Comment/Form-->

        <!--Testimonial-->
        <section class="testimonial container" style="margin-bottom: 10px;margin-top: 10px;">
        <h2>Qué opinan nuestros clientes</h2>
        <div class="swiper mySwiper testimonial-slider">
            <div class="swiper-wrapper">
              <!-- <div class="swiper-slide">
                <div class="profile row">
                <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="24" height="24" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.9999 6C9.79077 6 7.99991 7.79086 7.99991 10C7.99991 12.2091 9.79077 14 11.9999 14C14.209 14 15.9999 12.2091 15.9999 10C15.9999 7.79086 14.209 6 11.9999 6ZM17.1115 15.9974C17.8693 16.4854 17.8323 17.5491 17.1422 18.1288C15.7517 19.2966 13.9581 20 12.0001 20C10.0551 20 8.27215 19.3059 6.88556 18.1518C6.18931 17.5723 6.15242 16.5032 6.91351 16.012C7.15044 15.8591 7.40846 15.7251 7.68849 15.6097C8.81516 15.1452 10.2542 15 12 15C13.7546 15 15.2018 15.1359 16.3314 15.5954C16.6136 15.7102 16.8734 15.8441 17.1115 15.9974Z" fill="#323232"/></svg>
                    <div>
                        <h4 id="nombre">Emilia Sanz</h4>
                        <p id="ubicacion">Altea, Alicante</p>
                    </div>
                </div>
                <p id="comentario ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem doloremque cupiditate dignissimos eius consequuntur. Ducimus nesciunt amet totam aut! Fugiat totam, consequuntur impedit sit magnam necessitatibus quae odit quo velit.</p>
              </div> -->
             
                <!--Aqui añade los comentarios de la bd-->
            </div>
            <div class="swiper-pagination"></div>
    </section>

    <!--End Testimonial-->


<!-- Incluir el footer -->
    <?php include 'footer.php'; ?>

<!-- Incluir cookies -->
    <?php include 'cookies.php'; ?>

<!-- Incluir botón Whatsapp -->
    <?php include 'whatsapp.php'; ?>

    
</body>
</html>