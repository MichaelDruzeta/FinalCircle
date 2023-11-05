<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Service page</title>
    <link href="../css/service.css" rel="stylesheet" />
  </head>
  <body class="Service-body">
    <header class="top-bar">
      <a href="../html/Homepage.php">
      <img class="logo" src="../Images/circle solutions_logo_02.png" alt="logo" />
      </a>
      <nav>
        <div class="nav-bar left">
          <a class="effectHov" href="../html/service.php"><b>Services</b></a>
          <a class="effectHov" href="../html/Newspage.php"><b>News</b></a>
          <a class="effectHov" href="../html/AboutUs.php"><b>About Us</b></a>
        </div>
        <div class="nav-bar right">
          <a href="../html/ContactPage.php" class="contact-button">Contact Us</a>
          <div class="language-menu">
            <a href="#">
              <img class="icon" src="../Images/internet.png" alt="language" />
            </a>
            <!-- LANGUAGE SELECTION BLOCK -->
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
          <a href="../html/ServiceDarkMode.php">
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
      <div class="Service-main">
        <div class="Workspace">
          <img class="image" src="../Images/product-image1.jpg" alt="Image" />
          <h3>Circle Workspace</h3>
          <ul>
            <li>App management</li>
            <li>Communication and Information</li>
            <li>Document management</li>
          </ul>
            <a href="../html/Product_page_light_mode1.php">
              <div class="Learn-more-button1">Learn more</div></a>
        </div>
        <div class="DOTS">
          <img class="image" src="../Images/product-image2.jpg" alt="Image" />
          <h3>Circle Dots</h3>
          <ul>
            <li>Internal Communications</li>
            <li>Connect and engage</li>
            <li>Knowledge Management</li>
            <li>Analyze and optimise</li>
          </ul>
            <a href="../html/Product_page_light_mode2.php">
              <div class="Learn-more-button2">Learn more</div></a>
        </div>
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
    </footer>
  </body>
</html>
