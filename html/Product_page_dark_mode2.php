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
      <a href="Homedark.php">
        <img class="logo" src="../Images/circle solutions_logo_02.png" alt="logo" />
      </a>
      <nav>
        <div class="nav-bar left">
          <a href="ServiceDarkMode.php">Services</a>
          <a href="NewspageDarkMode.php">News</a>
          <a href="AboutUsDark.php">About Us</a>
        </div>
        <div class="nav-bar right">
          <a href="ContactPageDarkMode.php" class="contact-button">Contact Us</a>
          <div class="language-menu">
            <a href="#">
              <img class="icon" src="../Images/internet.png" alt="language" />
            </a>
            <!-- LANGUAGE SELECTION BLOCK -->
            <ul class="lang">
              <li>
                <img src="../Images/english.png" alt="eng" />
                <a href="#">English</a>
              </li>
              <li>
                <img src="../Images/spanish.png" alt="sp" />
                <a href="Product_page_dark_mode2 - Spanish.php">Spanish</a>
              </li>
            </ul>
          </div>
          <a href="Product_page_light_mode2.php">
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
          <h4>App management</h4>
          <p>Create a workplace in minutes. We also want to make work easy for workplace administrators. We make it possible to create a role- and conditions-based workplace that combines all your current and future technologies within one workplace</p>
        </li>
        <li>
          <h4>Communication and information</h4>
          <p>Display information from applications directly in Circle Workspace. At a glance, see all your unread emails, appointments, news, recently edited documents and more.</p>
        </li>
        <li>
          <h4>Document management</h4>
          <p>Bring all documents together in one online workplace. So you can work online and offline from any device. The documents app bundles and brings structure to Office 365, the fileserver, OneDrive and SharePoint.</p>
        </li>
      </ul>
    </section>

    <section class="price">
      <div class="price-box">
        <hr class="line">
        <h2>Pricing</h2>
        <hr class="line">
      </div>

  
      <ul class="options">
      <li>
        <h3>140€/mo.</h3>
        <p>1-50 users</p>
      </li>
      <li>
        <h3>760€/mo.</h3>
        <p>51-500 users</p>
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
