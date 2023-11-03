<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacts Page</title>
    <link rel="stylesheet" href="../css/Contact.css" type="text/css" />
  </head>
  <body>
    <header class="top-bar">
      <a href="Homepage.html">
        <img
          class="logo"
          src="../Images/circle solutions_logo_01.png"
          alt="logo"
        />
      </a>
      <nav>
        <div class="nav-bar left">
          <a href="service.html"><b>Services</b></a>
          <a href="Newspage.html"><b>News</b></a>
          <a href="AboutUs.html"><b>About Us</b></a>
        </div>
        <div class="nav-bar right">
          <a href="ContactPage.php" class="contact-button"
            ><b></b>Contact Us</a
          >
          <div class="language-menu">
            <a href="#">
              <img class="icon" src="../Images/internet.png" alt="language" />
            </a>
            <!-- LANGUAGE SELECTION BLOCK -->
            <ul class="lang">
              <li>
                <img src="../Images/english.png" alt="eng" />
                <a href="ContactPage.php">English</a>
              </li>
              <li>
                <img src="../Images/spanish.png" alt="sp" />
                <a href="ContactPageSpanish.php">Spanish</a>
              </li>
            </ul>
          </div>
          <a href="ContactPageDarkMode.php">
            <img class="icon" src="../Images/dark-mode.png" alt="dark-mode" />
          </a>
        </div>
      </nav>
    </header>

    <main>
      <h1 class="title">
        Are you ready to take your business to the next level?
      </h1>
      <form action="ContactPage.php" method="POST">
        <div class="input">
          <input type="text" name="name" placeholder="Name"  />
          <input type="email" name="email" placeholder="Email"  />
          <input type="tel" name="phone" placeholder="Phone number"  />
          <input type="submit" name="submit" value="Send" class="submit"  />
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
        Copyright &copy; 2023 Circle Solutions Inc. All rights reserved.
      </p>
    </footer>
  </body>
</html>