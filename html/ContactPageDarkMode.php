<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Page</title>
    <link rel="stylesheet" href="../css/ContactPageDarkMode.css" />
  </head>
  <body>
    <header class="top-bar">
      <a href="Homedark.php">
        <img
          class="logo"
          src="../Images/circle solutions_logo_02.png"
          alt="logo"
        />
      </a>
      <nav>
        <div class="nav-bar left">
          <a href="ServiceDarkMode.php"><b>Services</b></a>
          <a href="NewspageDarkMode.php"><b>News</b></a>
          <a href="AboutUsDark.php"><b>About Us</b></a>
        </div>
        <div class="nav-bar right">
          <a href="ContactPageDarkMode.php" class="contact-button"
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
                <a href="ContactPageDarkMode.php">English</a>
              </li>
              <li>
                <img src="../Images/spanish.png" alt="sp" />
                <a href="ContactPageDarkModeSpanish.php">Spanish</a>
              </li>
            </ul>
          </div>
          <a href="ContactPage.php">
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

        <h1 class="signUp-title">Sign up for Newsletter !</h1>
        <p class="singUp-additional">
          You will get only notifications about our activity and products.
        </p>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" class="signUp-form" id="signupForm">
  <input class="email" type="email" placeholder="Email Address" id="emailInput" />
  <input class="submit" type="submit" value="Sign In" />
  <div id="error-message"></div>
        </form>
      </div>
      
    </section>

    <main>
      <h1 class="title">
        Are you ready to take your business to the next level?
      </h1>
      <form action="" method="POST">
        <div class="input">
          <input type="text" name="name" placeholder="Name"  />
          <input type="email" name="email" placeholder="Email"  />
          <input type="tel" name="" placeholder="Phone number"  />
          <input type="submit" name="Submit" value="Send" class="submit"  />
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

    <footer class="Newspage-footer">
      <h3 class="follow">Follow us on</h3>
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

        <button id="openPopup">Sing up for Newsletter !</button>
      </aside>

      <p class="copyright">
        Copyright &copy; 2023 Circle Solutions Inc. All rights reserved.
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
