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
          <a href="AboutUsDark - Spanish.php">Sombre Nosotro</a>
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
                <a href="Product_page_dark_mode2.php">Inglés</a>
              </li>
              <li>
                <img src="../Images/spanish.png" alt="sp" />
                <a href="#">Español</a>
              </li>
            </ul>
          </div>
          <a href="Product_page_light_mode2 - Spanish.php">
            <img class="icon" src="../Images/dark-mode.png" alt="dark-mode" />
          </a>
          </a>
        </div>
      </nav>
    </header>

    <!-- CONTENT ABOUT THE PRODUCT -->
    <main>
      
      <img  src="../Images/product-image1.jpg" alt="CircleWorkspace">
      <section class="info-description">
      <h1>Circle Workspace</h1>

      <ul>
        <li>
          <h4>Gestión de aplicaciones</h4>
          <p>Cree un lugar de trabajo en cuestión de minutos. También queremos facilitar el trabajo a los administradores de puestos de trabajo. Hacemos posible la creación de un puesto de trabajo basado en funciones y condiciones que combina todas sus tecnologías actuales y futuras en un único puesto de trabajo.</p>
        </li>
        <li>
          <h4>Comunicación e información</h4>
          <p>Visualiza la información de las aplicaciones directamente en Circle Workspace. De un vistazo, vea todos sus correos electrónicos no leídos, citas, noticias, documentos editados recientemente y mucho más.</p>
        </li>
        <li>
          <h4>Gestión de documentos</h4>
          <p>Reúna todos los documentos en un único lugar de trabajo en línea. Para que puedas trabajar en línea y sin conexión desde cualquier dispositivo. La aplicación de documentos agrupa y estructura Office 365, el servidor de archivos, OneDrive y SharePoint.</p>
        </li>
      </ul>
    </section>

    <section class="price">
      <div class="price-box">
        <hr class="line">
        <h2>Precios</h2>
        <hr class="line">
      </div>

  
      <ul class="options">
      <li>
        <h3>140€ / mes</h3>
        <p>1-50 usuarios</p>
      </li>
      <li>
        <h3>760€ / mes</h3>
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
