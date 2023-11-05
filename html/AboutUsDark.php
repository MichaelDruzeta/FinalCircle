<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/AboutUsDark.css" type="text/css" />
    <title>About Us</title>
  </head>
  <body>
    <header class="top-bar">
      <a href="Homedark.php">
        <img
          class="logo"
          src="../Images\circle solutions_logo_02.png"
          alt="logo"
        />
      </a>
      <nav>
        <div class="nav-bar left">
          <a class="effectHov" href="ServiceDarkMode.php"><b>Services</b></a>
          <a class="effectHov" href="NewspageDarkMode.php"><b>News</b></a>
          <a class="effectHov" href="AboutUsDark.php"><b>About Us</b></a>
        </div>
        <div class="nav-bar right">
          <a href="ContactPageDarkMode.php" class="contact-button"
            >Contact Us</a
          >
          <div class="language-menu">
            <a href="#">
              <img class="icon" src="../Images/internet.png" alt="language" />
            </a>
            <!-- LANGUAGE SELECTION BLOCK -->
            <ul class="lang">
              <li>
                <img src="../Images/english.png" alt="eng" />
                <a href="AboutUsDark.php">English</a>
              </li>
              <li>
                <img src="../Images/spanish.png" alt="sp" />
                <a href="AboutUsDark - Spanish.php">Spanish</a>
              </li>
            </ul>
          </div>
          <a href="AboutUs.php">
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

        <h1 class="signUp-title">Sign up for Newsletter !</h1>
        <p class="singUp-additional">
          You will get only notifications about our activity and products.
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
            placeholder="Email Address"
            id="emailInput"
          />
          <input class="submit" type="submit" value="Sign In" />
          <div id="error-message"></div>
        </form>
      </div>
    </section>

    <p class="conTitle">What do we do</p>

    <p class="conTxt">
      Circle Solutions is a leading global provider of cutting-edge internet
      services tailored to meet the diverse needs of international businesses.
      With a proven track record of delivering high-speed and reliable
      connectivity solutions, we empower organizations to seamlessly connect
      their operations across borders and continents. Our dedicated team of
      experts, state-of-the-art infrastructure, and commitment to innovation
      make us the preferred choice for companies seeking robust and scalable
      internet services to drive their global success.
    </p>

    <p class="stattitle">Statistics</p>

    <p class="desc">Our proud statistics of the company</p>

    <div class="stats">
      <div class="square">
        <div class="circle">
          <i class="fa-brands fa-3x fa-happy"></i>
          <p class="statNum" data-count="95">0</p>
        </div>
        <p class="bottomTxt">Percentage of the happy customers</p>
      </div>

      <div class="square">
        <div class="circle">
          <i class="fa-brands fa-3x fa-customers"></i>
          <p class="statNum" data-count="50">0</p>
        </div>
        <p class="bottomTxt">Percentage of the returned clients</p>
      </div>

      <div class="square">
        <div class="circle">
          <i class="fa-brands fa-3x fa-products"></i>
          <p class="statNum" data-count="2">0</p>
        </div>
        <p class="bottomTxt">Percentage of returned products</p>
      </div>

      <script src="../Javascript/NumCounter.js"></script>
    </div>

    <div class="brFaq">
      <p class="titleFaq">Frequently Asked <b>Questions</b></p>

      <div class="faqQ">
        What is an intranet?
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
          Intranet means a closed network that resides on a local network. An
          intranet acts like a website that only authorized users can access and
          is generally used by organizations who wish to share knowledge,
          internal communications, and information with their colleagues.
        </p>
      </div>

      <div class="faqQ">
        What is the difference between the internet and an intranet?
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
          The main difference between an intranet and the internet is that the
          former is a closed network, and the latter is a public network. In
          short, the internet is for all; a company intranet is for a select
          group of people.
        </p>
      </div>

      <div class="faqQ">
        What is an intranet and an extranet?
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
          An intranet is a closed network designed to allow an organization to
          share information and corporate communication among its employees. An
          extranet is similar to an intranet, but allows third-party entry, so
          vendors or partners can experience full or selected access.
        </p>
      </div>

      <div class="faqQ">
        What are intranet sites?
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
          Intranet sites are closed internal networks for authorized members of
          an organization to share information. They act as a company news
          channel, an internal communications tool, and a collaboration tool.
        </p>
      </div>

      <div class="faqQ">
        What are intranet applications?
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
          Intranet applications are software within an intranet like document
          publishing, communication tools, broadcasts, etc. These applications
          allow the user to do a range of activities, for example: publish a
          blog, connect with a colleague, or run employee surveys.
        </p>
      </div>

      <div class="faqQ">
        What is an intranet portal?
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
          An intranet portal is the access point to the user’s company intranet.
          It is on the intranet portal where the user can access intranet
          applications as well as external apps, and information and knowledge
          that is stored within the intranet itself.
        </p>
      </div>

      <div class="faqQ">
        Can an intranet work without the internet?
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
          Former on-premise company intranets could operate without internet.
          But for a wide range of reasons, the majority of company intranet
          applications are now cloud-based, so an internet connection is
          necessary.
        </p>
      </div>

      <div class="faqQ">
        Can an intranet be accessed remotely?
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
          Yes, an intranet can be accessed on a range of devices, regardless of
          location – all that is required is an internet connection. This is
          ideal for any organization with dispersed or front-line employees who
          need communication tools and access to organizational information
          wherever they are.
        </p>
      </div>

      <div class="faqQ">
        What does an intranet do?
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
          Offering all types of organizational solutions, intranet software can
          improve employee engagement, aid communication, and increase
          collaboration. Modern intranets are now mostly cloud-based which
          allows global organizations to connect, share knowledge, and broadcast
          news quickly.
        </p>
      </div>
    </div>

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
