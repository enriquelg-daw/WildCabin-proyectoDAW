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
    <title>Wild Cabin - Proyectos</title>
</head>
<body>
    <!-- Incluir Navbar -->
        <?php include 'navbar.php'; ?>

    
    <!--Project-->
    <section class="project container">
        <div class="heading">
            <h2>Modelos disponibles</h2>
            <p>Con más de una década de experiencia en la construcción de viviendas, Wild Cabin cuenta con todo lo necesario para ofrecer productos y construcción de calidad, para garantizar la satisfacción del cliente.</p>
        </div>
        <div class="proyect-cards row flex">
            <a href="casa01.php" class="p-card column">
                <div><img src="img\casa1\modular01-ext2-1024x603.webp" alt=""></div>
                <div class="p-card-content row">
                    <div>
                        <h4>Montana</h4>
                        <p>Arquitectura / Calidez</p>
                    </div>
                    <div class="row">
                        <svg width="25px" height="25px" viewBox="0 0 1024 1024" class="icon" xmlns="http://www.w3.org/2000/svg"><path fill="#000000" d="M340.864 149.312a30.592 30.592 0 000 42.752L652.736 512 340.864 831.872a30.592 30.592 0 000 42.752 29.12 29.12 0 0041.728 0L714.24 534.336a32 32 0 000-44.672L382.592 149.376a29.12 29.12 0 00-41.728 0z"/></svg>
                    </div>
                </div>
            </a>
            <a href="casa02.php" class="p-card column">
                <div><img src="img\casa2\mod2_ext1-1024x572.webp" alt=""></div>
                <div class="p-card-content row">
                    <div>
                        <h4>GardenPool</h4>
                        <p>Moderno / Eficiente</p>
                    </div>
                    <div class="row">
                        <svg width="25px" height="25px" viewBox="0 0 1024 1024" class="icon" xmlns="http://www.w3.org/2000/svg"><path fill="#000000" d="M340.864 149.312a30.592 30.592 0 000 42.752L652.736 512 340.864 831.872a30.592 30.592 0 000 42.752 29.12 29.12 0 0041.728 0L714.24 534.336a32 32 0 000-44.672L382.592 149.376a29.12 29.12 0 00-41.728 0z"/></svg>
                    </div>
                </div>
            </a>
            <a href="casa03.php" class="p-card column">
                <div><img src="img\casa3-Duna\web-ext1-duna.webp" alt=""></div>
                <div class="p-card-content row">
                    <div>
                        <h4>Duna</h4>
                        <p>Minimalista / Mediterráneo</p>
                    </div>
                    <div class="row">
                        <svg width="25px" height="25px" viewBox="0 0 1024 1024" class="icon" xmlns="http://www.w3.org/2000/svg"><path fill="#000000" d="M340.864 149.312a30.592 30.592 0 000 42.752L652.736 512 340.864 831.872a30.592 30.592 0 000 42.752 29.12 29.12 0 0041.728 0L714.24 534.336a32 32 0 000-44.672L382.592 149.376a29.12 29.12 0 00-41.728 0z"/></svg>
                    </div>
                </div>
            </a>
            <a href="casa04.php" class="p-card column">
                <div><img src="img\Casa4-Amish\amish-master-bedroom.webp" alt=""></div>
                <div class="p-card-content row">
                    <div>
                        <h4>Amish</h4>
                        <p>Diseño / Elegancia</p>
                    </div>
                    <div class="row">
                        <svg width="25px" height="25px" viewBox="0 0 1024 1024" class="icon" xmlns="http://www.w3.org/2000/svg"><path fill="#000000" d="M340.864 149.312a30.592 30.592 0 000 42.752L652.736 512 340.864 831.872a30.592 30.592 0 000 42.752 29.12 29.12 0 0041.728 0L714.24 534.336a32 32 0 000-44.672L382.592 149.376a29.12 29.12 0 00-41.728 0z"/></svg>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!--End Project-->
    <!--Numbers-->
    <section class="numbers">
        <div class="row container">
            <div>
                <div class="number">12</div>
                <p>Años de experiencia</p>
            </div>
            <div>
                <div class="number">85</div>
                <p>Projectos con éxito</p>
            </div>
            <div>
                <div class="number">14</div>
                <p>Projectos activos</p>
            </div>
            <div>
                <div class="number">96</div>
                <p>Clientes satisfechos</p>
            </div>
        </div>
    </section>

    <!--End Numbers-->
    

<!-- Comment/Form-->
<section class="join container">
    <div class="heading">
                <h2 style="font-size: 34px;">Queremos conocer tu opinión</h2>
                <p>¿nos dejas una reseña?</p>
            </div>
    <form method="post" action="conecction/procesar.php" autocomplete="off" id="column" id="subscriptionForm">
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                    <svg fill="#000000" width="50px" height="50px" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><path d="M 28.0117 27.3672 C 33.0508 27.3672 37.3867 22.8672 37.3867 17.0078 C 37.3867 11.2187 33.0274 6.9297 28.0117 6.9297 C 22.9961 6.9297 18.6367 11.3125 18.6367 17.0547 C 18.6367 22.8672 22.9961 27.3672 28.0117 27.3672 Z M 13.2930 49.0703 L 42.7305 49.0703 C 46.4101 49.0703 47.7226 48.0156 47.7226 45.9531 C 47.7226 39.9062 40.1523 31.5625 28.0117 31.5625 C 15.8477 31.5625 8.2774 39.9062 8.2774 45.9531 C 8.2774 48.0156 9.5898 49.0703 13.2930 49.0703 Z"/></svg>
                </div>
                <div class="input-container">
                    <input type="text" name="ubicacion" id="ubicacion" placeholder="Ubicación" required>
                    <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	                    width="50px" height="50px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                        <path fill="#231F20" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24
	                    C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24
	                    C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"/></svg>
                
                    </div>
                <div class="input-container">
                    <textarea name="comentario" id="comentario" cols="30" rows="10" placeholder="Comentario" required></textarea>
                    <svg fill="#000000" width="50px" height="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19,2H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1ZM12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm0-6a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V7A1,1,0,0,0,12,6Z"/></svg>
                </div>
                <div class="centrar-btn">
                <input type="submit" name="send" id="btn" id="submitButton" value="ENVIAR">
                <input type="reset" id="btn" value="BORRAR">
                </div>
            </div>
    </form>
    <script>
        document.getElementById('submitButton').addEventListener('click', function() {
            const form = document.getElementById('subscriptionForm');
            form.submit();
            form.reset();
        });
    </script>
    </section>
    <!--End Comment/Form-->


 
<!-- Incluir el footer -->
    <?php include 'footer.php'; ?>

<!-- Incluir cookies -->
    <?php include 'cookies.php'; ?>

<!-- Incluir botón Whatsapp -->
    <?php include 'whatsapp.php'; ?>

</body>
</html>