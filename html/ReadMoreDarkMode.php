<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/ReadMoreDarkMode.css" type="text/css" />
    <title>Read More Page</title>
  </head>
  <body>
    <header>
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
            ><b>Contact Us</b></a
          >
          <div class="language-menu">
            <a href="#">
              <img class="icon" src="../Images/internet.png" alt="language" />
            </a>
            <!-- LANGUAGE SELECTION BLOCK -->
            <ul class="lang">
              <li>
                <img src="../Images/english.png" alt="eng" />
                <a href="ReadMoreDarkMode.php">English</a>
              </li>
              <li>
                <img src="../Images/spanish.png" alt="sp" />
                <a href="ReadMoreSpanishDarlMode.php">Spanish</a>
              </li>
            </ul>
          </div>
          <a href="ReadMore.php">
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
      <img
        class="product-img"
        src="../Images/Blog-intro.jpg"
        alt="product-image"
      />
      <div class="product">
        <h1 class="product-header">Our new Product!</h1>
        <p class="product-description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus aliquid
          reprehenderit quibusdam qui, numquam adipisci officia, quia ad sint
          perspiciatis cumque, dolores illo. Nesciunt magnam rem quos
          exercitationem aliquid quaerat. Lorem ipsum dolor sit amet
          consectetur, adipisicing elit. Pariatur inventore veritatis enim sint
          repudiandae perferendis! Accusamus blanditiis eius delectus soluta!
          Molestias quibusdam in accusamus labore ipsa distinctio sint nisi
          reprehenderit. Lorem ipsum dolor sit amet consectetur adipisicing
          elit. Debitis ipsam labore sunt quisquam quia aperiam, assumenda
          asperiores perspiciatis tempore a accusantium expedita mollitia
          maiores suscipit neque exercitationem dignissimos nam eum. Lorem ipsum
          dolor sit, amet consectetur adipisicing elit. Dolorum culpa placeat,
          minus hic obcaecati modi debitis nostrum voluptas. Ullam aspernatur
          impedit quam neque quibusdam quis velit modi odit, suscipit dolores.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore aut
          libero harum, repellendus vero tempora natus quo repudiandae nisi ea!
          Odit sequi deserunt molestiae ipsum voluptatum. Explicabo laudantium
          recusandae in! Lorem ipsum dolor sit amet consectetur, adipisicing
          elit. Blanditiis velit, recusandae, doloribus sequi, nihil quo quam
          minus quibusdam harum quod distinctio!
        </p>
      </div>
    </main>

    <footer>
      <h3 class="follow">Follow us on</h3>
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
