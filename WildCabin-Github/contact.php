<!DOCTYPE html>
<html lang="en">
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
    <title>Wild Cabin - Contacto</title>
</head>
<body>
    <!-- Incluir Navbar -->
        <?php include 'navbar.php'; ?>

   

   <!--Map-->
   <section class="join container">
    <div class="heading">
        <h2>contacto</h2>
        <p>Wildcabin Houses S.L.</p>
        <p><svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
<path d="M9.3,19.7C8.5,18.9,2,12.2,2,8c0-4.4,3.6-8,8-8s8,3.6,8,8c0,4.2-6.5,10.9-7.3,11.7C10.3,20.1,9.7,20.1,9.3,19.7z M10,2
	C6.7,2,4,4.7,4,8c0,2.5,3.8,7.2,6,9.5c2.2-2.3,6-7,6-9.5C16,4.7,13.3,2,10,2z"/>
<circle cx="10" cy="8" r="2"/>
</svg> P.I. Pla de la Vallonga, Avenida Europa,3
03006 - Alicante (Spain)</p>

<p> +34 965 965 965</p>
    </div>
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d414.39668418289034!2d-0.4958328246413841!3d38.34650848019777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd623651dc56271b%3A0x44d1541559a417c5!2sIG%20Formaci%C3%B3n!5e0!3m2!1ses!2ses!4v1714329970014!5m2!1ses!2ses" 
            width="600" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"></iframe>
    </div>
    
    
</section> 
<section class="cards2 column grid container">

<div class="heading">
        <h2>Presupuesto</h2>
        <p id="p-budgets">¡Proyectos de vivienda de acuerdo a las necesidades del cliente!</p>
        <p id="p-budgets">Elija un proyecto que le guste o trabajemos juntos para crear un modelo único solo para usted.</p>
        <p id="p-budgets">¡Póngase en contacto y hagamos realidad sus sueños juntos!</p>
        <div id="p-budgets">
            <img src="img\Casa4-Amish\amish-living2.webp" alt="">
        </div>
    </div>
    <script>
        function handleSubmit(event) {
            event.preventDefault();
            
            const formData = new FormData(event.target);

            fetch('conecction/submit.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(result => {
                alert(result);
                event.target.reset();
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
    <div class="form-container container">
    <div class="heading">
        <h4>Enviar una solicitud</h4>
    </div>
        <form onsubmit="handleSubmit(event)" id="budgets">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="telefono">Teléfono:</label>
            <input type="number" id="telefono" name="telefono" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="provincia">Provincia:</label>
            <input type="text" id="provincia" name="provincia" required>

            
            <label for="presupuesto">¿Cuál es tu presupuesto total?</label>
            <input type="number" id="presupuesto" name="presupuesto" step="0.01" required>
            
            <label for="parcela">¿Dispone de parcela?</label>
            <select id="parcela" name="parcela" required>
                <option value="SI">SI</option>
                <option value="NO">NO</option>
            </select>

            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="comentario" rows="4" cols="50"></textarea>

            <div class="checkbox-container">
                <input type="checkbox" id="acepto" name="acepto" required>
                <label for="acepto">Acepto la <a href="politicaPrivacidad.php"> Política de Privacidad</a> y condiciones de uso</label>
            </div>
            
            <button id="btn" type="submit">Solicitar Información</button>
            
        </form>
    </div>
</section>

    
<!--End Map-->

<!-- Incluir el footer -->
    <?php include 'footer.php'; ?>

<!-- Incluir cookies -->
    <?php include 'cookies.php'; ?>

<!-- Incluir botón Whatsapp -->
    <?php include 'whatsapp.php'; ?>

</body>
</html>