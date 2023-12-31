<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link href="../css/service.css" rel="stylesheet">
</head>
<body class="Service-body">
  <header class="top-bar">
    <a href="../html/HomepageSP.php">
     <img class="logo" src="../Images/circle solutions_logo_02.png" alt="logo" />
    </a>
    <nav>
      <div class="nav-bar left">
        <a class="effectHov" href="../html/ServiceSpanish.php"><b>Servicios</b></a>
        <a class="effectHov" href="../html/Noticiaslight.php"><b>Noticias</b></a>
        <a class="effectHov" href="../html/AboutUs - Spanish.php"><b>Sobre nosotros</b></a>
      </div>
      <div class="nav-bar right">
        <a href="../html/ContactPageSpanish.php" class="contact-button">Contáctamos</a>
        <div class="language-menu">
          <img class="icon" src="../Images/internet.png" alt="language" />
        </a>
        <ul class="lang">
          <li>
            <img src="../Images/english.png" alt="eng" />
            <a href="../html/service.php">English</a>
          </li>
          <li>
            <img src="../Images/spanish.png" alt="sp" />
            <a href="../html/ServiceSpanish.php">Spanish</a>
          </li>
        </ul>
        </div>
        <a href="../html/ServiceSpanishDM.php">
          <img class="icon" src="../Images/dark-mode.png" alt="dark-mode" />
        </a>
      </div>
    </nav>
  </header>
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
  <main>
    <div class="Service-main">
      <div class="Workspace">
        <img class="image" src="../Images/product-image1.jpg" alt="Image"> 
        <h3>Espacio de trabajo circular</h3>
        <ul>
          <li>Gestión de aplicaciones</li>
          <li>Comunicación e información</li>
          <li>Gestión de documentos</li>
        </ul>
        <a href="../html/Product_page_light_mode2 - Spanish.php">
          <div class="Learn-more-button1">Aprende más</div></a>
      </div>
      <div class="D.O.T.S.">
        <img class="image" src="../Images/product-image2.jpg" alt="Image">
        <h3>Puntos circulares</h3>
        <ul>
          <li>Comunicaciones internacionales</li>
          <li>Conéctate y participa</li>
          <li>Conocimiento administrativo</li>
          <li>Analizar y optimizar</li>
        </ul>
        <a href="../html/Product_page_light_mode1 - Spanish.php">
          <div class="Learn-more-button2">Aprende más</div></a>
      </div>
    </div>
  </main>
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
        errorMessage.innerText = "Por favor, introduce una dirección de correo electrónico válida.";
      } else {
        errorMessage.innerText = "¡Gracias por suscribirse!";
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