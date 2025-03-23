<!--
  Adaptive Navigation Bar for Juit Innovatives

  Version: 1.0.2
  Last Updated: 2025-03-23

  Description:
  This module implements an adaptive, animated navigation bar for Juit Innovatives.
  On desktop, the nav bar displays the logo (with a shining effect) on the left and nav links on the right.
  The nav links include: HOME, FORM, ABOUT US, LOGIN, and an "OTHERS" dropdown containing:
    - Support
    - Credits
    - Application
  The dropdown is designed to appear on hover, with modern styling and a slight offset below the nav bar.
  On mobile devices, there are two nav bars:
    - A top nav bar with a smaller logo on the left and a hamburger menu on the right that toggles a dropdown containing all nav links.
    - A bottom nav bar with active background highlighting for the current link, displaying: HOME, FORM, ABOUT US, and LOGIN.
  The navigation bars are animated with smooth transitions and adaptive styling for different screen sizes.
  
-->

<head>

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Montserrat:wght@500&family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #000;
      font-family: 'Montserrat', sans-serif;
      color: #fff;
      user-select: none;
    }
    nav {
      position: fixed;
      top: 20px;
      left: 50%;
      transform: translateX(-50%);
      background-color: rgba(20,20,20,0.95);
      border: 1px solid #333;
      border-radius: 8px;
      padding: 0.5rem 1rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 90%;
      max-width: 1000px;
      z-index: 1000;
      box-shadow: 0 0 10px rgba(255,255,255,0.2);
      transition: all 0.3s ease;
      overflow: visible;
    }
    .nav-logo {
      position: relative;
      font-family: 'Playfair Display', serif;
      font-size: 1.8rem;
      font-weight: 700;
      letter-spacing: 1px;
      color: #fff;
      overflow: hidden;
    }

    .nav-logo::before {
      content: "";
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: linear-gradient(45deg, transparent 40%, rgba(255, 255, 255, 0.4) 50%, transparent 60%);
      transform: translateX(-100%) translateY(-100%) rotate(0deg);
      animation: shineMove 3s infinite;
    }

    @keyframes shineMove {
      from {
        transform: translateX(-150%) translateY(-150%) rotate(0deg);
      }

      to {
        transform: translateX(150%) translateY(150%) rotate(0deg);
      }
    }
    .nav-links {
      display: flex;
      gap: 1.5rem;
    }
    .nav-link {
      text-decoration: none;
      color: #ccc;
      font-size: 1rem;
      position: relative;
      transition: color 0.3s ease;
      font-family: 'Montserrat', sans-serif;
    }
    .nav-link:hover, .nav-link.active {
      color: #fff;
    }
    .nav-link.active::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -4px;
      width: 100%;
      height: 2px;
      background-color: #fff;
      border-radius: 2px;
    }
    .dropdown {
      position: relative;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      top: calc(100% + 10px);
      left: 0;
      background-color: rgba(20,20,20,0.95);
      border: 1px solid #333;
      border-radius: 4px;
      padding: 0.9rem;
      min-width: 150px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
      transition: opacity 0.3s ease, transform 0.3s ease;
      z-index: 1100;
      transform: translateY(10px);
      opacity: 0;
    }
    .dropdown:hover .dropdown-content {
      display: block;
      transform: translateY(0);
      opacity: 1;
    }
    .dropdown-content a {
      display: block;
      padding: 0.5rem;
      text-decoration: none;
      color: #ccc;
      font-size: 0.9rem;
      transition: background 0.3s ease;
    }
    .dropdown-content a:hover {
      background-color: rgba(255,255,255,0.1);
      color: #fff;
    }
    .hamburger {
      display: none;
      font-size: 2rem;
      cursor: pointer;
    }
    .mobile-dropdown {
      display: none;
      position: absolute;
      top: 60px;
      right: 20px;
      background-color: rgba(20,20,20,0.95);
      border: 1px solid #333;
      border-radius: 8px;
      padding: 1rem;
      box-shadow: 0 0 10px rgba(255,255,255,0.2);
      z-index: 1001;
    }
    .mobile-dropdown a {
      display: block;
      padding: 0.5rem 0;
      text-decoration: none;
      color: #ccc;
    }
    .mobile-dropdown a:hover {
      color: #fff;
    }
    .bottom-nav {
      display: none;
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: rgba(20,20,20,0.95);
      border-top: 1px solid #333;
      justify-content: space-around;
      padding: 0.8rem 0;
      z-index: 1000;
    }
    .bottom-nav a {
      text-decoration: none;
      color: #ccc;
      font-size: 1rem;
      font-family: 'Lato', sans-serif;
      padding: 5px 10px;
      border-radius: 5px;
      transition: background 0.3s ease;
    }
    .bottom-nav a:hover, .bottom-nav a.active {
      color: #fff;
      background-color: rgba(255,255,255,0.1);
    }
    @media (max-width: 768px) {
      nav { top: 10px; padding: 0.5rem 1rem; }
      .nav-links { display: none; }
      .hamburger { display: block; }
      .mobile-dropdown { display: none; }
      .bottom-nav { display: flex; }
      .nav-logo { font-size: 1.4rem; }
    }
    @media (min-width: 769px) {
      .bottom-nav { display: none; }
    }
  </style>
</head>
<body>
  <nav>
    <div class="nav-logo">JUIT INNOVATIVES</div>
    <div class="nav-links">
      <a href="https://juitinitiatives.online" class="nav-link" data-page="home">HOME</a>
      <a href="https://juitinitiatives.online/form" class="nav-link" data-page="form">FORM</a>
      <div class="dropdown">
        <a href="" class="nav-link" data-page="others">OTHERS</a>
        <div class="dropdown-content">
          <a href="https://juitinitiatives.online/support" class="nav-link" data-page="support">Support</a>
          <a href="https://juitinitiatives.online/credits" class="nav-link" data-page="credits">Credits</a>
          <a href="https://juitinitiatives.online/application" class="nav-link" data-page="application">Application</a>
        </div>
      </div>
      <a href="https://juitinitiatives.online/about-us" class="nav-link" data-page="about">ABOUT US</a>
      <a href="https://juitinitiatives.online/login" class="nav-link" data-page="login">LOGIN</a>
    </div>
    <div class="hamburger" id="topHamburger">
      <i class="material-icons">menu</i>
    </div>
    <div class="mobile-dropdown" id="mobileDropdown">

      <a href="https://juitinitiatives.online/support" class="nav-link" data-page="support">Support</a>
      <a href="https://juitinitiatives.online/credits" class="nav-link" data-page="credits">Credits</a>
      <a href="https://juitinitiatives.online/application" class="nav-link" data-page="application">Application</a>
    </div>
  </nav>

  <div class="bottom-nav">
    <a href="https://juitinitiatives.online" class="nav-link" data-page="home">HOME</a>
    <a href="https://juitinitiatives.online/form" class="nav-link" data-page="form">FORM</a>
    <a href="https://juitinitiatives.online/about" class="nav-link" data-page="about">ABOUT US</a>
    <a href="https://juitinitiatives.online/register" class="nav-link" data-page="login">LOGIN</a>
  </div>

  <script>
    const navLinks = document.querySelectorAll('.nav-link');
    const activePage = sessionStorage.getItem('activePage');
    if (activePage) {
      navLinks.forEach(link => {
        if (link.dataset.page === activePage) {
          link.classList.add('active');
        } else {
          link.classList.remove('active');
        }
      });
    }
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        sessionStorage.setItem('activePage', this.dataset.page);
      });
    });

    const topHamburger = document.getElementById('topHamburger');
    const mobileDropdown = document.getElementById('mobileDropdown');
    topHamburger.addEventListener('click', function() {
      mobileDropdown.style.display = mobileDropdown.style.display === 'block' ? 'none' : 'block';
    });
  </script>
</body>
