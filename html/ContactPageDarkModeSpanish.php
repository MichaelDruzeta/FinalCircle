<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Página de contactos</title>
    <link
      rel="stylesheet"
      href="../css/ContactPageDarkMode.css"
      type="text/css"
    />
  </head>
  <body>
    <header class="top-bar">
      <a href="HomedarkSP.php">
        <img
          class="logo"
          src="../Images/circle solutions_logo_02.png"
          alt="logo"
        />
      </a>
      <nav>
        <div class="nav-bar left">
          <a href="ServiceSpanishDM.php"><b>Servicios</b></a>
          <a href="Noticiasdark.php"><b>Noticias</b></a>
          <a href="AboutUsDark - Spanish.php"><b>Sobre nosotros</b></a>
        </div>
        <div class="nav-bar right">
          <a href="ContactPageDarkModeSpanish.php" class="contact-button"
            ><b></b>Contáctamos</a
          >
          <div class="language-menu">
            <a href="#">
              <img class="icon" src="../Images/internet.png" alt="language" />
            </a>
            <!-- LANGUAGE SELECTION BLOCK -->
            <ul class="lang">
              <li>
                <img src="../Images/english.png" alt="eng" />
                <a href="ContactPageDarkMode.php">Inglés</a>
              </li>
              <li>
                <img src="../Images/spanish.png" alt="sp" />
                <a href="ContactPageDarkModeSpanish.php">Español</a>
              </li>
            </ul>
          </div>
          <a href="ContactPageSpanish.php">
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
      <h1 class="title">
        ¿Estás listo para llevar tu negocio al siguiente nivel?
      </h1>
      <form action="" method="POST">
        <div class="input">
          <input type="text" name="name" placeholder="Nombre"  />
          <input type="email" name="email" placeholder="Email"  />
          <input type="tel" name="" placeholder="Número de teléfono"  />
          <input
            type="submit"
            value="Entregar"
            name="Submit"
            class="submit"
            
          />
        </div>
        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
          $name =filter_input(INPUT_POST, "name");
          $email =filter_input(INPUT_POST, "email");
          $phone =filter_input(INPUT_POST, "phone");

          if(empty($name) && empty($email) && empty($phone)){
            echo '<p class="fail">*Por favor rellena todos los campos</p>';
          }else{
            echo '<p class="success">Enviado correctamente</p>';
          }
        }
        ?>
      </form>

      <section class="info">
        <h2>Amsterdam 01:44 AM</h2>

        <p>Gerard Doustraat 246</p>
        <p>1073XD Amsterdam</p>
        <p>amsterdam@circlesolutions.com</p>
        <p>+31 20 2101668</p>
      </section>

      <div class="location">
        <iframe
          class="map"
          frameborder="0"
          scrolling="no"
          marginheight="0"
          marginwidth="0"
          src="https://maps.google.com/maps?width=100%%26amp;height=400&amp;hl=en&amp;q=Amsterdam%201%20+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
        >
          <a href="https://www.maps.ie/population/">Find Population on Map</a>
        </iframe>
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
