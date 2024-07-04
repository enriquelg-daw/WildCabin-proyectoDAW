<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/index.js" defer></script>   
    <link rel="stylesheet" href="styles/style.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/logop.jpg">
    <title>Wild Cabin - Garden Pool</title>
</head>
<body>
    <!-- Incluir Navbar -->
        <?php include 'navbar.php'; ?>

    <!--casas-->
    <div class="row flex container">
        <div class="contact-content" id="model">
    <h2><a href="projects.php"><</a> GardenPool</h2>
    <p>Desde 180.000€</p>
    </div>
        
    </div>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\casa2/mod2_ext1-1024x572.webp" alt="">
        </div>
    </section>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\casa2\mod2_ext2-1024x572.webp" alt="">
        </div>
        <div id="img-container">
            <img src="img\casa2\mod2_ext3-1024x572.webp" alt="">
        </div>
    </section>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\casa2\mod2_int2-1024x603.webp" alt="">
        </div>
        <div id="img-container">
            <img src="img\casa2\mod2_int1-1024x603.webp" alt="">
        </div>
    </section>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\casa2\mod2_cocina-1024x572.webp" alt="">
        </div>
        <div id="img-container">
            <img src="img\casa2\mod2_int3.webp" alt="">
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
                <img src="img\casa2\mod02_map.jpg" alt="Planta 1">
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">
                <h2>Descripción</h2>
            </div>
            <div class="accordion-content">
                <p>Dos habitaciones:</p>
                <li>Dormitorio principal: Espacioso, con 20 m², incluye un armario empotrado y acceso directo a la terraza.</li>
                <li>Segundo dormitorio: De 12 m², ideal para invitados o como oficina en casa, con un armario empotrado.</li>
                <li>Baño completo y aseo: El baño principal cuenta con una bañera grande, ducha separada, y lavamanos doble, mientras que el aseo adicional incluye un lavabo y un inodoro.</li>
                <li>Sala de estar y comedor de planta abierta de 35 m²: Un espacio amplio y luminoso con vigas de madera expuestas, una chimenea de piedra y grandes ventanales que permiten la entrada de luz natural durante todo el día.</li>
                
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