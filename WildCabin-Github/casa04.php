<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/index.js" defer></script>   
    <link rel="stylesheet" href="styles/style.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/logop.jpg">
    <title>Wild Cabin - Amish</title>
</head>
<body>
    <!-- Incluir Navbar -->
        <?php include 'navbar.php'; ?>

    <!--casas-->
    <div class="row flex container">
        <div class="contact-content" id="model">
    <h2><a href="projects.php"><</a> Amish</h2>
    <p>Desde 330.000€</p>
    </div>
        
    </div>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\Casa4-Amish\amish-master-bedroom.webp" alt="">
        </div>
    </section>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\Casa4-Amish\amish-kitchen2.webp" alt="">
        </div>
        <div id="img-container">
            <img src="img\Casa4-Amish\amish-ext1.webp" alt="">
        </div>
    </section>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\Casa4-Amish\amish-kitchen1.webp" alt="">
        </div>
        <div id="img-container">
            <img src="img\Casa4-Amish\amish-bedroom1.webp" alt="">
        </div>
    </section>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\Casa4-Amish\amish-living1.webp" alt="">
        </div>
        <div id="img-container">
            <img src="img\Casa4-Amish\amish-bathroom1.webp" alt="">
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
                <img src="img\Casa4-Amish\amish-plantabaja.jpg" alt="Planta baja">
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">
                <h2>Planta alta</h2>
            </div>
            <div class="accordion-content" id="img-floor">
                <img src="img\Casa4-Amish\amish-plantaalta.jpg" alt="Planta baja">
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">
                <h2>Descripción</h2>
            </div>
            <div class="accordion-content">
                <li>Estructura A-Frame</li>
                <li>Cuatro Dormitorios</li>
                <li>Dos baños completos</li>
                <li>Cocina completa</li>
                <li>Comedor y sala de estar</li>
                <li>Chimenea de gas</li>
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