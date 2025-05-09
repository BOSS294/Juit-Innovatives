
<head>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHq6aPjXQ+6o5+3bW5oX7N1X5l5gk5E5kp5U5Q5e5h5g5K5U5Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    /* —— Footer Styles & Microanimations —— */
    footer {
      background-color: #111;
      padding: 60px 20px;
      color: #ccc;
      font-family: 'Roboto', sans-serif;
      overflow: hidden;
    }
    .footer-container {
      max-width: 1400px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 20px;
    }
    .footer-column {
      flex: 1;
      min-width: 250px;
      margin-bottom: 20px;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 0.8s forwards;
    }
    .footer-column:nth-child(1) { animation-delay: 0.2s; }
    .footer-column:nth-child(2) { animation-delay: 0.4s; }
    .footer-column:nth-child(3) { animation-delay: 0.6s; }
    .footer-column:nth-child(4) { animation-delay: 0.8s; }
    .footer-column.shift-left {
      transform: translate(-20px,20px);
    }
    @keyframes fadeInUp {
      to { opacity: 1; transform: translateY(0); }
    }
    .footer-column h3 {
      color: #ff9800;
      margin-bottom: 10px;
      font-family: 'Oswald', sans-serif;
      font-size: 1.6rem;
      position: relative;
    }
    .footer-column h3::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 50px;
      height: 3px;
      background: #ff9800;
      transition: width 0.3s ease;
    }
    .footer-column h3:hover::after {
      width: 100px;
    }
    .footer-column p,
    .footer-column a {
      color: #ccc;
      font-size: 1rem;
      text-decoration: none;
      line-height: 1.6;
      transition: color 0.3s ease;
    }
    .footer-column a:hover {
      color: #ff9800;
    }
    .nav-category {
      margin-bottom: 10px;
      font-weight: bold;
      color: #fff;
    }
    .footer-links {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .footer-links li {
      margin-bottom: 8px;
      position: relative;
    }
    .footer-links li a {
      color: #ccc;
      font-size: 0.95rem;
      padding-left: 5px;
    }
    .footer-links li a::before {
      content: '›';
      color: #ff9800;
      position: absolute;
      left: 0;
      opacity: 0;
      transform: translateX(-5px);
      transition: opacity 0.2s, transform 0.2s;
    }
    .footer-links li a:hover::before {
      opacity: 1;
      transform: translateX(0);
    }
    .social-icons {
      display: flex;
      gap: 10px;
      margin-top: 10px;
    }
    .social-icons a {
      color: #ccc;
      font-size: 1.5rem;
      transition: color 0.3s ease, transform 0.3s ease;
    }
    .social-icons a:hover {
      color: #ff9800;
      transform: scale(1.2);
    }
    .footer-bottom {
      text-align: center;
      margin-top: 30px;
      border-top: 1px solid #333;
      padding-top: 20px;
      font-size: 0.9rem;
      opacity: 0;
      animation: fadeInUp 0.8s 1s forwards;
    }
  </style>
</head>
<body>
  <footer>
    <div class="footer-container">
      <div class="footer-column shift-left">
        <h3>About Juit Innovatives</h3>
        <p>Juit Innovatives is a transparent charity platform connecting donors and local charities for food, money, and clothes donations. Our mission: lasting change through innovation, integrity, and community.</p>
      </div>

      <!-- Quick Links -->
      <div class="footer-column">
        <h3 class="nav-category">Quick Links</h3>
        <ul class="footer-links">
          <li><a href="/">Home</a></li>
          <li><a href="/about-us">About Us</a></li>
          <li><a href="/contact-us">Contact Us</a></li>
          <li><a href="/credits">Credits</a></li>
        </ul>
      </div>

      <!-- Donate -->
      <div class="footer-column">
        <h3 class="nav-category">Donate</h3>
        <ul class="footer-links">
          <li><a href="/donate-food">Donate Food</a></li>
          <li><a href="/donate-cloth">Donate Cloth</a></li>
          <li><a href="/donate-money">Donate Money</a></li>
          <li><a href="/learn-more">Learn More</a></li>
        </ul>
      </div>

      <!-- Others -->
      <div class="footer-column">
        <h3 class="nav-category">Others</h3>
        <ul class="footer-links">
          <li><a href="/our-team">Our Team</a></li>
          <li><a href="/application">Application</a></li>
          <li><a href="/form">Form</a></li>
          <li><a href="/help-support">Help & Support</a></li>
        </ul>
      </div>

      <!-- Contact & Social -->
      <div class="footer-column">
        <h3>Contact Us</h3>
        <p>Email: <a href="mailto:info@juitinitiatives.online">info@juitinitiatives.online</a></p>
        <p>Phone: <a href="tel:+1234567890">+1-234-567-890</a></p>
        <div class="social-icons">
          <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2025 Juit Innovatives. All Rights Reserved.
    </div>
  </footer>
</body>
