<!DOCTYPE html>
<html lang="en-es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/Newspagelight.css" rel="stylesheet" type="text/css" />
    <title>Noticias</title>
  </head>
  <body>
    <header class="top-bar">
      <a href="HomepageSP.php">
        <img
          class="logo"
          src="../Images/circle solutions_logo_02.png"
          alt="logo"
        />
      </a>
      <nav>
        <div class="nav-bar left">
          <a href="ServiceSpanish.php"><b>Servicios</b></a>
          <a href="#"><b>Noticias</b></a>
          <a href="AboutUs - Spanish.php"><b>Sobre nosotros</b></a>
        </div>
        <div class="nav-bar right">
          <a href="ContactPageSpanish.php" class="contact-button"><b>Contáctamos</b></a>
          <div class="language-menu">
            <a href="#">
              <img class="icon" src="../Images/internet.png" alt="language" />
            </a>
            <!-- LANGUAGE SELECTION BLOCK -->
            <ul class="lang">
              <li>
                <img src="../Images/english.png" alt="eng" />
                <a href="Newspage.php">Inglés</a>
              </li>
              <li>
                <img src="../Images/spanish.png" alt="sp" />
                <a href="#">Español</a>
              </li>
            </ul>
          </div>
          <a href="NewspageDarkMode.php">
            <img class="icon" src="../Images\dark-mode.png" alt="dark-mode" />
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
    <!--NEWSPAGE-->
    <div class="main">
      <article class="mini">
        <div class="blogimg">
          <img
            src="../Images/Blog-intro.jpg"
            style="width: 14rem"
            ;
            style="height: 14rem"
          />
        </div>
        <div class="textarticle">
          <div class="title">
            <p>Nuestro nuevo producto!</p>
            <p></p>
          </div>

          <div class="text">
            <p lang="es">
              Orgulloso de ser socio de Shopify, WooCommerce y socio de
              producción integral de grandes actores de la industria del
              comercio electrónico. No nos limitamos a construir su tienda web,
              configuramos toda su arquitectura digital. Orgulloso de haber
              configurado toda su arquitectura digital.
            </p>
            <p></p>
          </div>

          <div class="button">
            <a href="ReadMoreSpanish.php"><h3 lang="es">Leer más</h3></a>
          </div>
        </div>
      </article>
      <article class="maxi">
        <div class="blogimg-maxi">
          <img src="../Images/blogg.webp" style="width: 28rem; height: 20rem" />
        </div>
        <div class="textarticle-maxi">
          <div class="title-maxi">
            <p lang="es">¿Sabías qué tan efectivo...?</p>
            <p></p>
          </div>

          <div class="text-maxi">
            <p lang="es">
              Orgulloso de ser socio de Shopify, WooCommerce y socio de
              producción integral de grandes actores de la industria del
              comercio electrónico. No nos limitamos a construir su tienda web,
              configuramos toda su arquitectura digital. Orgulloso de haber
              configurado toda su arquitectura digital. Content care e in romana
              chiar nu stiu ce sa adaug da lasa sa fie ceva content ca nu stiu
              ce.
            </p>

            <p></p>
          </div>

          <div class="button-maxi">
            <a href="ReadMoreSpanish.php"><h3 lang="es">Leer más</h3></a>
          </div>
        </div>
      </article>
      <article class="mini2">
        <div class="blogimg">
          <img
            src="../Images/Blog-intro.jpg"
            style="width: 14rem"
            ;
            style="height: 14rem"
          />
        </div>
        <div class="textarticle">
          <div class="title">
            <p>Nuestro nuevo producto!</p>
            <p></p>
          </div>

          <div class="text">
            <p lang="es">
              Orgulloso de ser socio de Shopify, WooCommerce y socio de
              producción integral de grandes actores de la industria del
              comercio electrónico. No nos limitamos a construir su tienda web,
              configuramos toda su arquitectura digital. Orgulloso de haber
              configurado toda su arquitectura digital.
            </p>
            <p></p>
          </div>

          <div class="button">
            <a href="ReadMoreSpanish.php"><h3 lang="es">Leer más</h3></a>
          </div>
        </div>
      </article>
      <article class="mini3">
        <div class="blogimg">
          <img
            src="../Images/Blog-intro.jpg"
            style="width: 14rem"
            ;
            style="height: 14rem"
          />
        </div>
        <div class="textarticle">
          <div class="title">
            <p>Nuestro nuevo producto!</p>
            <p></p>
          </div>

          <div class="text">
            <p lang="es">
              Orgulloso de ser socio de Shopify, WooCommerce y socio de
              producción integral de grandes actores de la industria del
              comercio electrónico. No nos limitamos a construir su tienda web,
              configuramos toda su arquitectura digital. Orgulloso de haber
              configurado toda su arquitectura digital.
            </p>
            <p></p>
          </div>

          <div class="button">
            <a href="ReadMoreSpanish.php"><h3 lang="es">Leer más</h3></a>
          </div>
        </div>
      </article>
      <article class="mini4">
        <div class="blogimg">
          <img
            src="../Images/Blog-intro.jpg"
            style="width: 14rem"
            ;
            style="height: 14rem"
          />
        </div>
        <div class="textarticle">
          <div class="title">
            <p>Nuestro nuevo producto!</p>
            <p></p>
          </div>

          <div class="text">
            <p lang="es">
              Orgulloso de ser socio de Shopify, WooCommerce y socio de
              producción integral de grandes actores de la industria del
              comercio electrónico. No nos limitamos a construir su tienda web,
              configuramos toda su arquitectura digital. Orgulloso de haber
              configurado toda su arquitectura digital.
            </p>
            <p></p>
          </div>

          <div class="button">
            <a href="ReadMoreSpanish.php"><h3 lang="es">Leer más</h3></a>
          </div>
        </div>
      </article>
      <article class="mini5">
        <div class="blogimg">
          <img
            src="../Images/Blog-intro.jpg"
            style="width: 14rem"
            ;
            style="height: 14rem"
          />
        </div>
        <div class="textarticle">
          <div class="title">
            <p>Nuestro nuevo producto!</p>
            <p></p>
          </div>

          <div class="text">
            <p lang="es">
              Orgulloso de ser socio de Shopify, WooCommerce y socio de
              producción integral de grandes actores de la industria del
              comercio electrónico. No nos limitamos a construir su tienda web,
              configuramos toda su arquitectura digital. Orgulloso de haber
              configurado toda su arquitectura digital.
            </p>
            <p></p>
          </div>

          <div class="button">
            <a href="ReadMoreSpanish.php"><h3 lang="es">Leer más</h3></a>
          </div>
        </div>
      </article>
      <article class="mini6">
        <div class="blogimg">
          <img
            src="../Images\Blog-intro.jpg"
            style="width: 14rem"
            ;
            style="height: 14rem"
          />
        </div>
        <div class="textarticle">
          <div class="title">
            <p>Nuestro nuevo producto!</p>
            <p></p>
          </div>

          <div class="text">
            <p lang="es">
              Orgulloso de ser socio de Shopify, WooCommerce y socio de
              producción integral de grandes actores de la industria del
              comercio electrónico. No nos limitamos a construir su tienda web,
              configuramos toda su arquitectura digital. Orgulloso de haber
              configurado toda su arquitectura digital.
            </p>
            <p></p>
          </div>

          <div class="button">
            <a href="ReadMoreSpanish.php"><h3 lang="es">Leer más</h3></a>
          </div>
        </div>
      </article>
      <article class="maxi2">
        <div class="blogimg-maxi">
          <img src="../Images/blogg.webp" style="width: 28rem; height: 20rem" />
        </div>
        <div class="textarticle-maxi">
          <div class="title-maxi">
            <p lang="es">¿Sabías qué tan efectivo...?</p>
            <p></p>
          </div>

          <div class="text-maxi">
            <p lang="es">
              Orgulloso de ser socio de Shopify, WooCommerce y socio de
              producción integral de grandes actores de la industria del
              comercio electrónico. No nos limitamos a construir su tienda web,
              configuramos toda su arquitectura digital. Orgulloso de haber
              configurado toda su arquitectura digital. Content care e in romana
              chiar nu stiu ce sa adaug da lasa sa fie ceva content ca nu stiu
              ce.
            </p>

            <p></p>
          </div>

          <div class="button-maxi">
            <a href="ReadMoreSpanish.php"><h3 lang="es">Leer más</h3></a>
          </div>
        </div>
      </article>
    </div>
    <footer class="Newspage-footer">
      <h3 class="follow" lang="es">Síguenos en</h3>
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
