<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/AboutUsDark.css" type="text/css" />
    <title>Sobre Nosotros</title>
  </head>
  <body>
    <header class="top-bar">
      <a href="HomedarkSP.php">
        <img
          class="logo"
          src="../Images\circle solutions_logo_02.png"
          alt="logo"
        />
            </a
      >
      <nav>
        <div class="nav-bar leftSP">
          <a class="effectHov" href="ServiceSpanishDM.php"><b>Servicios</b></a>
          <a class="effectHov" href="Noticiasdark.php"><b>Noticias</b></a>
          <a class="effectHov" href="AboutUsDark - Spanish.php"
            ><b>Sobre Nosotros</b></a
          >
        </div>
        <div class="nav-bar right">
          <a href="ContactPageDarkModeSpanish.php" class="contact-button"
            >Contáctamos</a
          >
          <div class="language-menu">
            <a href="#">
              <img class="icon" src="../Images/internet.png" alt="language" />
            </a>
            <!-- LANGUAGE SELECTION BLOCK -->
            <ul class="lang">
              <li>
                <img src="../Images/english.png" alt="eng" />
                <a href="AboutUsDark.php">Inglés</a>
              </li>
              <li>
                <img src="../Images/spanish.png" alt="sp" />
                <a href="AboutUsDark - Spanish.php">Español</a>
              </li>
            </ul>
          </div>
          <a href="AboutUs - Spanish.php">
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
          Recibirás únicamente notificaciones sobre nuestra actividad y
          productos.
        </p>

        <form
          action="<?=$_SERVER['PHP_SELF']?>"
          method="POST"
          class="signUp-form"
          id="signupForm"
        >
          <input
            class="email"
            type="email"
            placeholder="El email"
            id="emailInput"
          />
          <input class="submit" type="submit" value="Registrarse" />
          <div id="error-message"></div>
        </form>
      </div>
    </section>

    <p class="conTitle">¿Qué hacemos?</p>

    <p class="conTxt">
      Circle Solutions es un provedor líder mundial de servicios de Internet de
      vanguardia adaptados a las diversas necesidades de las empresas
      internacionales. Con un historial probado de suministro de soluciones de
      conectividad fiables y de alta velocidad, capacitamos a las organizaciones
      para conectar sin problemas sus operaciones a través de fronteras y
      continentes. Nuestro dedicado equipo de expertos, nuestra infraestructura
      de vanguardia y nuestro compromiso con la innovación nos convierten en la
      opción preferida de las empresas que buscan servicios de Internet sólidos
      y escalables para impulsar su éxito global.
    </p>

    <p class="stattitle">Estadística</p>

    <p class="desc">Nuestras orgullosas estadísticas de la empresa</p>

    <div class="stats">
      <div class="square">
        <div class="circle">
          <i class="fa-brands fa-3x fa-products"></i>
          <p class="statNum" data-count="95">0</p>
        </div>
        <p class="bottomTxt">Porcentaje de clientes satisfechos</p>
      </div>

      <div class="square">
        <div class="circle">
          <i class="fa-brands fa-3x fa-products"></i>
          <p class="statNum" data-count="50">0</p>
        </div>
        <p class="bottomTxt">Porcentaje de los clientes devueltos</p>
      </div>

      <div class="square">
        <div class="circle">
          <i class="fa-brands fa-3x fa-products"></i>
          <p class="statNum" data-count="2">0</p>
        </div>
        <p class="bottomTxt">Porcentaje de productos devueltos</p>
      </div>

      <script src="../Javascript/NumCounter.js"></script>
    </div>

    <div class="brFaq">
      <p class="titleFaq"><b>Preguntas</b> Más Frecuentes</p>

      <div class="faqQ">
        ¿Qué es una intranet?
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="mouseIcon"
          viewBox="0 0 16 16"
        >
          <path
            d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"
          />
        </svg>
      </div>
      <div class="faqA">
        <p class="faqAtxt">
          Intranet es una red cerrada que reside en una red local. Una intranet
          actúa como un sitio web al que sólo pueden acceder los usuarios
          autorizados y suele ser utilizada por organizaciones que desean
          compartir conocimientos, comunicaciones internas e información con sus
          colegas.
        </p>
      </div>

      <div class="faqQ">
        ¿Cuál es la diferencia entre Internet y una intranet?
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="mouseIcon"
          viewBox="0 0 16 16"
        >
          <path
            d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"
          />
        </svg>
      </div>
      <div class="faqA">
        <p class="faqAtxt">
          La principal diferencia entre una intranet e Internet es que la
          primera es una red cerrada y la segunda es una red pública. En
          resumen, internet es para todos; la intranet de una empresa es para un
          grupo selecto de personas.
        </p>
      </div>

      <div class="faqQ">
        ¿Qué es una intranet y una extranet?
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="mouseIcon"
          viewBox="0 0 16 16"
        >
          <path
            d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"
          />
        </svg>
      </div>
      <div class="faqA">
        <p class="faqAtxt">
          Las aplicaciones de intranet son programas informáticos dentro de una
          intranet que brindan diversas funciones, como publicación de
          documentos, comunicación y encuestas para actividades como blogs y
          colaboración entre empleados.
        </p>
      </div>

      <div class="faqQ">
        ¿Qué son los sitios intranet?
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="mouseIcon"
          viewBox="0 0 16 16"
        >
          <path
            d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"
          />
        </svg>
      </div>
      <div class="faqA">
        <p class="faqAtxt">
          Los sitios Intranet son redes internas cerradas para que los miembros
          autorizados de una organización compartan información. Actúan como
          canal de noticias de la empresa, herramienta de comunicación interna y
          herramienta de colaboración.
        </p>
      </div>

      <div class="faqQ">
        ¿Qué son las aplicaciones de intranet?
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="mouseIcon"
          viewBox="0 0 16 16"
        >
          <path
            d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"
          />
        </svg>
      </div>
      <div class="faqA">
        <p class="faqAtxt">
          Las aplicaciones de intranet son programas dentro de una intranet que
          ofrecen funciones como publicación de documentos, comunicación y
          encuestas para actividades como blogs, colaboración entre colegas y
          retroalimentación de empleados.
        </p>
      </div>

      <div class="faqQ">
        ¿Qué es un portal de intranet?
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="mouseIcon"
          viewBox="0 0 16 16"
        >
          <path
            d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"
          />
        </svg>
      </div>
      <div class="faqA">
        <p class="faqAtxt">
          Un portal de intranet es el punto de acceso a la intranet de la
          empresa del usuario. Es en el portal de la intranet donde el usuario
          puede acceder a las aplicaciones de la intranet, así como a las
          aplicaciones externas y a la información y los conocimientos
          almacenados en la propia intranet.
        </p>
      </div>

      <div class="faqQ">
        ¿Puede funcionar una intranet sin Internet?
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="mouseIcon"
          viewBox="0 0 16 16"
        >
          <path
            d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"
          />
        </svg>
      </div>
      <div class="faqA">
        <p class="faqAtxt">
          Las antiguas intranets de empresa podían funcionar sin Internet. Pero,
          por diversas razones, la mayoría de las aplicaciones de intranet de
          las empresas se basan ahora en la nube, por lo que es necesaria una
          conexión a internet.
        </p>
      </div>

      <div class="faqQ">
        ¿Se puede acceder a una intranet a distancia?
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="mouseIcon"
          viewBox="0 0 16 16"
        >
          <path
            d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"
          />
        </svg>
      </div>
      <div class="faqA">
        <p class="faqAtxt">
          Si, La intranet es accesible desde cualquier lugar con conexión a
          Internet, lo que beneficia a organizaciones con empleados dispersos o
          en primera línea que requieren comunicación y acceso a la información
          en cualquier ubicación.
        </p>
      </div>

      <div class="faqQ">
        ¿Qué hace una intranet?
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="mouseIcon"
          viewBox="0 0 16 16"
        >
          <path
            d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"
          />
        </svg>
      </div>
      <div class="faqA">
        <p class="faqAtxt">
          El software de intranet optimiza la organización, comunicación y
          colaboración. Intranets basadas en la nube permiten la conectividad
          global, mejorando la eficiencia y la productividad en las
          organizaciones.
        </p>
      </div>
    </div>

    <footer>
      <h3 class="follow">Síguenos en</h3>
      <aside class="ReadMore-footer-content">
        <section class="social-block">
          <img
            src="../Images/image 16.png"
            alt="instagram"
            class="social-img"
          />
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
        Copyright &copy; 2023 Circle Solutions Inc. Todos los derechos
        reservados.
      </p>
    </footer>
    <script>
      const popup = document.querySelector(".popup");
      const closePopup = document.querySelector(".close");
      const openPopupButton = document.getElementById("openPopup");

      openPopupButton.addEventListener("click", function () {
        popup.style.display = "block";
      });

      closePopup.addEventListener("click", function () {
        popup.style.display = "none";
      });

      const signupForm = document.getElementById("signupForm");
      const emailInput = document.getElementById("emailInput");
      const errorMessage = document.getElementById("error-message");

      signupForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const email = emailInput.value;
        if (!isValidEmail(email)) {
          errorMessage.innerText =
            "Por favor, introduce una dirección de correo electrónico válida.";
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
