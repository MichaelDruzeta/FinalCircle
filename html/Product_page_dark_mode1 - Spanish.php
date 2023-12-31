<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/circleS_product_dark_mode1.css" href="text/css">
    <title>Circle Solution</title>
  </head>
  <body>

    <header class="top-bar">
      <a href="HomedarkSP.php">
       <img class="logo" src="../Images/circle solutions_logo_02.png" alt="logo" />
      </a>
      <nav>
        <div class="nav-bar left">
          <a href="ServiceSpanishDM.php">Servicios</a>
          <a href="Noticiasdark.php">Noticias</a>
          <a href="AboutUsDark - Spanish.php">Sombre Nosotros</a>
        </div>
        <div class="nav-bar right">
          <a href="ContactPageDarkModeSpanish.php" class="contact-button">Contáctenos</a>
          <div class="language-menu">
            <a href="#">
              <img class="icon" src="../Images/internet.png" alt="language" />
            </a>
            <!-- LANGUAGE SELECTION BLOCK -->
            <ul class="lang">
              <li>
                <img src="../Images/english.png" alt="eng" />
                <a href="Product_page_dark_mode1.php">Inglés</a>
              </li>
              <li>
                <img src="../Images/spanish.png" alt="sp" />
                <a href="#">Español</a>
              </li>
            </ul>
          </div>
          <a href="Product_page_light_mode1 - Spanish.php">
            <img class="icon" src="../Images/dark-mode.png" alt="dark-mode" />
          </a>
          </a>
        </div>
      </nav>
    </header>

    <!-- CONTENT ABOUT THE PRODUCT -->
    <main>
      
      <img  src="../Images/product-image1.jpg"" alt="CircleWorkspace" class="img">
      <section class="info-description info-description2">
      <h1>Circle D.O.T.S.</h1>

      <ul>
        <li>
          <h4>Comunicación interna</h4>
          <p>Mantener a todo el mundo informado, no importa el cambio, las cosas cambian, sobre todo en el mundo actual. Mantener a todo el mundo en la misma página es un reto para las empresas globales. Circle D.O.T.S. facilita la selección y distribución de noticias a las personas adecuadas, el análisis del impacto y la optimización del mensaje. ¿El resultado? Todo el mundo llega a su destino.</p>
        </li>
        <li>
          <h4>Conectar y participar</h4>
          <p>Conecte a sus colegas e involucre a las comunidades. Si la gente no se conoce, no puede confiar en los demás. Si los equipos no saben lo que hacen, no pueden ayudarse mutuamente. Circle D.O.T.S. conecta equipos y personas de forma orgánica, permitiéndoles crear canales y páginas en torno a proyectos, intereses o iniciativas sociales. Se acabaron las caras desconocidas, aunque estés totalmente a distancia.</p>
        </li>
        <li>
          <h4>Gestión del conocimiento</h4>
          <p>Cuando la gente dice "me encanta mi trabajo", no se refiere a las 7,6 horas semanales que pasa intentando encontrar la información que necesita para hacer su trabajo. Circle D.O.T.S. reúne todos sus recursos, aplicaciones y conocimientos dispares en un único lugar de fácil estructuración y búsqueda.</p>
        </li>
        <li>
          <h4>Analizar y optimizar</h4>
          <p>Para mejorar el entorno de trabajo, lo que se puede medir, se puede mejorar. Circle D.O.T.S. le ayuda a pasar de una mentalidad de "enviar y olvidar" a otra de "analizar y optimizar", lo que facilita la experimentación y la evaluación basadas en datos. ¿El arma secreta? El panel de control de Analytics más sencillo del mundo.</p>
        </li>
      </ul>
    </section>

    <section class="price price2">
      <div class="price-box">
        <hr class="line">
        <h2>Precios</h2>
        <hr class="line">
      </div>

  
      <ul class="options">
      <li>
        <h3>180€ / mes</h3>
        <p>1-50 usuarios</p>
      </li>
      <li>
        <h3>799€ / mes</h3>
        <p>51-500 usuarios</p>
      </li>
    </ul>
    
    </section>
    </main>

 <!-- POPUP SIGN-UP  -->
 <section class="popup">
  <div class="popup-content">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
      stroke-width="1.5"
      stroke="currentColor"
      class="close"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M6 18L18 6M6 6l12 12"
      />
    </svg>

    <h1 class="signUp-title">Suscríbase a nuestro boletín !</h1>
    <p class="singUp-additional">
      Recibirás únicamente notificaciones sobre nuestra actividad y productos.
    </p>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" class="signUp-form" id="signupForm">
<input class="email" type="email" placeholder="El email" id="emailInput" />
<input class="submit" type="submit" value="Registrarse" />
<div id="error-message"></div>
    </form>
  </div>
</section>


    <footer class="Newspage-footer">
      <h3 class="follow">Síguenos en</h3>
      <aside class="ReadMore-footer-content">
        <section class="social-block">
          <img src="../Images/image 16.png" alt="instagram" class="social-img" />
          <div class="social">
            <h6 class="social-name">Instagram :</h6>
            <p class="social-id">@circleSolutions</p>
          </div>
        </section>
        <section class="social-block">
          <img src="../Images/image 18.png" alt="facebook" class="social-img" />
          <div class="social">
            <h6 class="social-name">Facebook :</h6>
            <p class="social-id">@circleSolutions</p>
          </div>
        </section>
        <section class="social-block">
          <img src="../Images/image 19.png" alt="x" class="social-img" />
          <div class="social">
            <h6 class="social-name">X :</h6>
            <p class="social-id">@circleSolutions</p>
          </div>
        </section>

        <button id="openPopup">Suscríbase a nuestro boletín !</button>
      </aside>

      <p class="copyright">
        Copyright &copy; 2023 Circle Solutions Inc. Todos los derechos reservados.
      </p>
    </footer>
    <script>
  const popup = document.querySelector(".popup");
  const closePopup = document.querySelector(".close");
  const openPopupButton = document.getElementById("openPopup");

  openPopupButton.addEventListener("click", function() {
    popup.style.display = "block";
  });

  closePopup.addEventListener("click", function() {
    popup.style.display = "none";
  });

  const signupForm = document.getElementById("signupForm");
  const emailInput = document.getElementById("emailInput");
  const errorMessage = document.getElementById("error-message");

  signupForm.addEventListener("submit", function(event) {
    event.preventDefault(); 

    const email = emailInput.value;
    if (!isValidEmail(email)) {
      errorMessage.innerText = "Please enter a valid email address.";
    } else {
      errorMessage.innerText = "Thank you for subscribing!";
      emailInput.value = ""; 
    }
  });

  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
</script>
  </body>
</html>
