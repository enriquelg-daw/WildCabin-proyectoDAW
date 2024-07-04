<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/index.js" defer></script>   
    <link rel="stylesheet" href="styles/style.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/logop.jpg">
    <title>Wild Cabin - Duna</title>
</head>
<body>
    <!-- Incluir Navbar -->
        <?php include 'navbar.php'; ?>

    <!--casas-->
    <div class="row flex container">
        <div class="contact-content" id="model">
    <h2><a href="projects.php"><</a> Duna</h2>
    <p>Desde 210.000€</p>
    </div>
        
    </div>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\casa3-Duna\web-ext1-duna.webp" alt="">
        </div>
    </section>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\casa3-Duna\web-ext2-duna.webp" alt="">
        </div>
        <div id="img-container">
            <img src="img\casa3-Duna\web-salon-duna.webp" alt="">
        </div>
    </section>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\casa3-Duna\web-salon2-duna.webp" alt="">
        </div>
        <div id="img-container">
            <img src="img\casa3-Duna\web-bano1-duna.webp" alt="">
        </div>
    </section>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\casa3-Duna\web-dorm1-duna.webp" alt="">
        </div>
        <div id="img-container">
            <img src="img\casa3-Duna\web-dorm2-duna.webp" alt="">
        </div>
    </section>
    <!--End casas-->

  <!--acordion-->
  <div class="accordion">
        <div class="accordion-item">
            <div class="accordion-header">
                <h2>Planta baja</h2>
            </div>
            <div class="accordion-content" id="img-floor">
                <img src="img\casa3-Duna\DUNA-map.jpg" alt="Planta baja">
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">
                <h2>Descripción</h2>
            </div>
            <div class="accordion-content">
                <p>Cuatro habitaciones de lujo:</p>
                <li>Suite principal: De 25 m², un vestidor grande y un baño en suite con bañera de hidromasaje y ducha de efecto lluvia.</li>
                <li>Segunda habitación: De 18 m², con baño en suite y vistas al jardín.</li>
                <li>Tercera habitación: De 15 m², ideal para huéspedes, con armario empotrado y acceso a un balcón privado.</li>
                <li>Tres baños completos y un aseo: Los baños están diseñados con acabados de lujo, duchas de vidrio, y accesorios de alta calidad, mientras que el aseo adicional está ubicado cerca de la entrada para mayor comodidad.</li>
                <li>Terraza con piscina infinita de 4x8 metros: Una terraza de 32 m² con una piscina infinita que ofrece vistas espectaculares al mar, además de una zona de comedor al aire libre y tumbonas.</li>
            </div>
        </div>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
    const headers = document.querySelectorAll('.accordion-header');

    headers.forEach(header => {
        header.addEventListener('click', function() {
            const content = this.nextElementSibling;

            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                document.querySelectorAll('.accordion-content').forEach(item => {
                    item.style.maxHeight = null;
                });
                content.style.maxHeight = content.scrollHeight + 'px';
            }
        });
    });
});

    </script>
<!--End acordion-->



<!-- Incluir el footer -->
    <?php include 'footer.php'; ?>

<!-- Incluir cookies -->
    <?php include 'cookies.php'; ?>

<!-- Incluir botón Whatsapp -->
    <?php include 'whatsapp.php'; ?>

    
</body>
</html>