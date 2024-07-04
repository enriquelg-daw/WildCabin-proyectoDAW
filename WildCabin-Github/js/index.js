// Navbar
function toggleMenu() {
    const toggleMenu = document.querySelector('.toggleMenu');
    const navigation = document.querySelector('.navigation');
    toggleMenu.classList.toggle('active');
    navigation.classList.toggle('active');
}
// End Navbar

//Slider
var swiper = new Swiper(".testimonial-slider", {
    slidesPerView: 1,
    spaceBetween: 15,
    autoplay: {
        delay: 5500,
        disableOnInteraction: false,
      },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      800: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 15,
      },
    },
  });
//End Slider


//Testimonial
document.addEventListener("DOMContentLoaded", function() {
  // Realizar una solicitud AJAX para obtener los perfiles desde PHP
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          // Parsear la respuesta JSON
          var perfiles = JSON.parse(this.responseText);

          // Localizar el div con la clase "swiper-wrapper"
          var swiperWrapper = document.querySelector(".swiper-wrapper");

          // Verificar si se encontró el div
          if (swiperWrapper) {
              // Iterar sobre cada perfil y agregarlos al div "swiper-wrapper"
              perfiles.forEach(function(perfil) {
                  // Crear un nuevo div swiper-slide
                  var swiperSlide = document.createElement("div");
                  swiperSlide.classList.add("swiper-slide");

                  // Construir el contenido HTML del perfil
                  swiperSlide.innerHTML = '<div class="profile row">' +
                      '<svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="24" height="24" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.9999 6C9.79077 6 7.99991 7.79086 7.99991 10C7.99991 12.2091 9.79077 14 11.9999 14C14.209 14 15.9999 12.2091 15.9999 10C15.9999 7.79086 14.209 6 11.9999 6ZM17.1115 15.9974C17.8693 16.4854 17.8323 17.5491 17.1422 18.1288C15.7517 19.2966 13.9581 20 12.0001 20C10.0551 20 8.27215 19.3059 6.88556 18.1518C6.18931 17.5723 6.15242 16.5032 6.91351 16.012C7.15044 15.8591 7.40846 15.7251 7.68849 15.6097C8.81516 15.1452 10.2542 15 12 15C13.7546 15 15.2018 15.1359 16.3314 15.5954C16.6136 15.7102 16.8734 15.8441 17.1115 15.9974Z" fill="#323232"/></svg>' +
                      '<div>' +
                      '<h4 id="nombre">' + perfil.nombre + '</h4>' +
                      '<p id="ubicacion">' + perfil.ubicacion + '</p>' +
                      '</div>' +
                      '</div>' +
                      '<p id="comentario">' + perfil.comentario + '</p>';

                  // Agregar el nuevo div swiper-slide al div swiper-wrapper
                  swiperWrapper.appendChild(swiperSlide);
              });
          } else {
              console.error("No se encontró ningún div con la clase 'swiper-wrapper'");
          }
      }
  };
  xhttp.open("GET", "conecction/procesar.php", true);
  xhttp.send();
});

//End Testimonial

//Cookies
const cookieBox = document.querySelector(".wrapper"),
  buttons = document.querySelectorAll(".button");

const executeCodes = () => {
  //if cookie contains codinglab it will be returned and below of this code will not run
  if (document.cookie.includes("codinglab")) return;
  cookieBox.classList.add("show");

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      cookieBox.classList.remove("show");

      //if button has acceptBtn id
      if (button.id == "acceptBtn") {
        //set cookies for 1 month. 60 = 1 min, 60 = 1 hours, 24 = 1 day, 30 = 30 days
        document.cookie = "cookieBy= codinglab; max-age=" + 60 * 60 * 24 * 30;
      }
    });
  });
};

  //executeCodes function will be called on webpage load
  window.addEventListener("load", executeCodes);
//End Cookies



