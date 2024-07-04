<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/index.js" defer></script>   
    <link rel="stylesheet" href="styles/style.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/logop.jpg">
    <title>Wild Cabin - Montana</title>
</head>
<body>
    <!-- Incluir Navbar -->
        <?php include 'navbar.php'; ?>

    <!--casas-->
    <div class="row flex container">
        <div class="contact-content" id="model">
    <h2><a href="projects.php"><</a> Montana</h2>
    <p>Desde 260.000€</p>
    </div>
        
    </div>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\casa1\modular01-ext1-1024x603.webp" alt="">
        </div>
    </section>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\casa1\modular01-ext4-1024x603.webp" alt="">
        </div>
        <div id="img-container">
            <img src="img\casa1\modular01-ext2-1024x603.webp" alt="">
        </div>
    </section>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\casa1\modular01-int1-1024x603.webp" alt="">
        </div>
        <div id="img-container">
            <img src="img\casa1\modular01-int2-1024x603.webp." alt="">
        </div>
    </section>
    <section class="cards2 column grid container">
        <div id="img-container">
            <img src="img\casa1\modular01-int3-1024x603.webp" alt="">
        </div>
        <div id="img-container">
            <img src="img\casa1\modular01-ext3-1024x603.webp" alt="">
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
                <img src="img\casa1\modular01-map.webp" alt="Planta 1">
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">
                <h2>Descripción</h2>
            </div>
            <div class="accordion-content">
                <p>Cuatro habitaciones:</p>
                <li>Suite principal: Con 22 m², incluye un vestidor y un baño en suite con ducha de efecto lluvia y lavamanos doble.</li>
                <li>Segunda habitación: De 14 m², con armario empotrado y ventana al patio interior.</li>
                <li>Tercera habitación: De 12 m², actualmente utilizada como oficina.</li>
                <li>Cuarta habitación: De 10 m², perfecta como cuarto de juegos o estudio.</li>
                <li>Un baño completo con amplia ducha y espacio para lavadora y secadora</li>
                <li>Amplio comedor cocina acristalado de 27 m2  con entrada a la casa en el lateral derecho</li>
                <li>Espacio de cocina y sala de estar de concepto abierto de 40 m²: Equipado con electrodomésticos de alta gama, una isla central y grandes puertas de vidrio correderas que conectan con el patio interior, proporcionando una sensación de amplitud y luminosidad.</li>
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