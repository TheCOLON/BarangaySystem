<!DOCTYPE html>
<html>
<head>
  <title>ImbaMIS.org</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
  <header>
    <nav>
         <img src="images/landing2.png" alt="BIMS Logo" class="logo">
         <h1 class="logo-text">BARANGAY IMBATUG</h1>
    </nav>
  </header>

  <div class = "home-header">
    <ul>
      <li><a href="#home">HOME</a></li>
        <li class="dropdown">
          <a href="#officials" class="dropdown-btn">OFFICIALS <span class="dropdown-icon">&#9662;</span></a>
          <div class="dropdown-content">
            <!-- Dropdown content goes here -->
            <a href="#officials">Current Officials</a>
            <a href="#">Officials term 2010-2018</a>
            <a href="">Officials term 2000-2017</a>
          </div>
        </li>
        <li><a href="http://127.0.0.1:8000/ordinance">ORDINANCE</a></li>
        <li><a href="http://127.0.0.1:8000/accomplishment">ACCOMPLISHMENTS</a></li>
        <li><a href="#" onclick="showLoginPopup()">LOGIN</a></li>
    </ul>
</div>

  <div class="about-container">
  <section id="home">
  <div class="about-content">
    <div class="about-image">
      <img src="images\landing1.jpg" alt="About Image">
    </div>
    <div class="about-description">
      <h2>About Us</h2>
      <p>   The Barangay Information Management System (BIMS) is a comprehensive system designed to streamline the operations and information management of barangays. It provides efficient tools for managing resident records, issuing certificates, monitoring incidents, and facilitating communication within the barangay community.</p>
      <p> Advancements in artificial intelligence have revolutionized various industries, leading to significant transformations in the way we live and work. From healthcare to transportation, AI has played a pivotal role in enhancing efficiency and improving outcomes. Machine learning algorithms have become adept at analyzing massive amounts of data, enabling personalized recommendations, accurate predictions, and automated decision-making. Additionally, natural language processing (NLP) techniques have made significant progress in understanding and generating human-like text, powering virtual assistants and chatbots that can interact with users in a more intuitive and conversational manner. As AI continues to evolve, it holds immense potential to tackle complex challenges and drive innovation across diverse sectors, shaping a future where intelligent machines augment human capabilities and enable new possibilities."</p>
      <button onclick="window.location.href = 'http://127.0.0.1:8000/about';">Show More</button>
    </div>
  </div>
</section>
</div>

<div class="officials-container">
  <section id="officials">
    <div class="officials-content">
      <h3>ELECTED OFFICIALS</h3>
      {{-- first card --}}
      <div class="card" style="background-image: url('images/v.png');">
        <h2 class="card-title">Gelbes E. Vergara</h2>
        <p class="card-body">Barangay Captain</p>
        {{-- <img src="images/v.png" alt="Gelbes E. Vergara Image"> --}}
      </div>
    </div>

      {{-- second line card --}}
    <div class = "secondline-container">
      <div class="card" style="background-image: url('images/id3.png');">
        <h2 class="card-title"> Annabelle M.Maputol</h2>
        <p class="card-body">Kagawad</p>
      </div>

      <div class="card" style="background-image: url('images/id1.png');">
        <h2 class="card-title">Marifel L. Palma</h2>
        <p class="card-body">Kagawad</p>
      </div>
    
      <div class="card"  style="background-image: url('images/id2.png');">
        <h2 class="card-title"> Rosa S. Rapirap</h2>
        <p class="card-body">Kagawad</p>
      </div>
      <div class="card"  style="background-image: url('images/id3.png');">
        <h2 class="card-title">Marjorie C. Jaraula</h2>
        <p class="card-body">Kagawad</p>
      </div>
    </div>
    {{-- 3 line card --}}
    <div class = "linethree-container">
      <div class="card"  style="background-image: url('images/id4.png');">
        <h2 class="card-title">Mardine Y. Evangelista</h2>
        <p class="card-body">Kagawad</p>
      </div>
      <div class="card"  style="background-image: url('images/id1.png');">
        <h2 class="card-title">Marlo A.Ligan</h2>
        <p class="card-body">Kagawad</p>
      </div>
    
      <div class="card"  style="background-image: url('images/id2.png');">
        <h2 class="card-title">Mark Anthony A.Botes</h2>
        <p class="card-body">Kagawad</p>
      </div>
      <div class="card"  style="background-image: url('images/cha.png');">
        <h2 class="card-title"> Francis A. Beja</h2>
        <p class="card-body">SK Chairman</p>
      </div>
    </div>

  {{-- line 4 --}}
  <div class = "linefive-container">
    <div class="card" style="background-image: url('images/leejongsuk.png');">
      <h2 class="card-title">Jeson A. Ministerio</h2>
      <p class="card-body">Secretary</p>
    </div>
    <div class="card" >
      <h2 class="card-title">Card Title</h2>
      <p class="card-body">This is the body of the card.</p>
    </div>
    </div>
  </section>
</div>

<div class="emergency-container">
  <div class="nationwide">
    <img src="images/911.jpg" alt="nationwide number">
  </div>
    <div class = "hotline ">
      <img src="images/hotline 2.jpg" alt="nationwide number">
    </div>
     
</div>

<div class="map-container">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8887.436161222584!2d124.67789923794898!3d8.315389431150335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ff9aaadfbbf1cf%3A0x7f6dfbe7423106aa!2sImbatug%20Barangay%20Hall!5e0!3m2!1sen!2sph!4v1689297596639!5m2!1sen!2sph" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
</div>
  </div>

  <div class="facebook-container">
    <h1><span class="arrow-symbol">&#10148;</span>Like and Visit us on Facebook</h1>
    <iframe class="facebook-iframe" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2FImbatug16&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="650" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
  </div>

  <div class = "open-hours-card">
    <h3 class="opening-hours-heading">Opening Hours</h3>
    <ul>
      <li>Monday - Friday: 8am - 5pm</li>
      <li>Saturday - Sunday: Closed</li>
    </ul>
  </div>


  <div class="login-popup" id="loginPopup">
    <div class="login-popup-content">
      <span class="close-btn" onclick="hideLoginPopup()">X</span>
       <img src="images/logo1.png" alt="Logo" class="login-logo">
      <h2>Login</h2>
      <div class="login-input">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="login-input">
        <i class="fas fa-eye-slash toggle-password"></i>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button class="login-button">Login</button> 
    </div>
  </div>

  {{-- <div class="login-pop up" id="loginPopup"></div>
    <div class="popup" id="popup">
        <span class="close-btn" onclick="hideLoginPopup()">X</span>
        <div class="logo-container">
          <img src="images/logo1.png" alt="Logo" class="login-logo">
            <span>Login</span>
        </div>

        <div class="login-input">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="login-input">
          <i class="fas fa-eye-slash toggle-password"></i>
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button class="login-button">Login</button>

        
    </div> --}}


  <footer>
    <div class="logo-container">
      <img src="images/logo1.png" alt="Logo 1">
      <img src="images/logo2.png" alt="Logo 2">
      <img src="images/logo3.png" alt="Logo 3">
    </div>
    <p>&copy; 2023 Official  website of Barangay Imbatug. </p>
    <p>All rights reserved.</p>
  </footer>

  <script>
    // Toggle the visibility of the dropdown menu
    document.addEventListener("DOMContentLoaded", function() {
      const dropdownBtns = document.querySelectorAll(".dropdown-btn");
      dropdownBtns.forEach(function(btn) {
        btn.addEventListener("click", function() {
          this.nextElementSibling.classList.toggle("show");
        });
      });
    });


    function showLoginPopup() {
      const loginPopup = document.getElementById('loginPopup');
      loginPopup.style.display = 'flex';
    }

    // Hide login popup
    function hideLoginPopup() {
      const loginPopup = document.getElementById('loginPopup');
      loginPopup.style.display = 'none';
    }


    // login

      // Move the label to the top when the input field is clicked
    const inputFields = document.querySelectorAll('.login-input input');
    inputFields.forEach((input) => {
      input.addEventListener('focus', (e) => {
        const label = e.target.previousElementSibling;
        label.style.top = '-15px';
        label.style.fontSize = '15px';
        label.style.color = '#4CAF50';
        label.style.left = '10px'
      });

      input.addEventListener('blur', (e) => {
        const label = e.target.previousElementSibling;
        if (e.target.value === '') {
          label.style.top = '50%';
          label.style.fontSize = '';
          label.style.color = '#777';
        }
      });
    });


    // password
    const togglePassword = document.querySelector('.toggle-password');
  const passwordInput = document.querySelector('#password');

  togglePassword.addEventListener('click', function () {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    togglePassword.classList.toggle('fa-eye-slash');
    togglePassword.classList.toggle('fa-eye');
  });

  function closeLoginPopup() {
  var loginPopup = document.getElementById("loginPopup");
  loginPopup.style.display = "none";
}
  </script>
</body>
</html>
