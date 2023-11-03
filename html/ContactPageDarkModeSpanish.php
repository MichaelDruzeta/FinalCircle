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
      <a href="HomedarkSP.html">
        <img
          class="logo"
          src="../Images/circle solutions_logo_02.png"
          alt="logo"
        />
      </a>
      <nav>
        <div class="nav-bar left">
          <a href="ServiceSpanishDM.html"><b>Servicios</b></a>
          <a href="Noticiasdark.html"><b>Noticias</b></a>
          <a href="AboutUsDark - Spanish.html"><b>Sobre nosotros</b></a>
        </div>
        <div class="nav-bar right">
          <a href="ContactPageDarkModeSpanish.php" class="contact-button"
            ><b></b>Contáctenos</a
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
            echo '<p class="fail">*Please fill in all fields</p>';
          }else{
            echo '<p class="success">Sent successfully</p>';
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

    <footer>
      <p class="copyrightH">
        Copyright &copy; 2023 Circle Solutions Inc. Todos los derechos
        reservados.
      </p>
    </footer>
  </body>
</html>
