<?php
session_start();
?>
<!--
  Adaptive Navigation Bar for Juit Innovatives (Logged-in Variation)

  Version: 1.0.2
  Last Updated: 2025-03-23

  Description:
  This module implements an adaptive, animated navigation bar for Juit Innovatives.
  On desktop, the nav bar displays the logo (with a shining effect) on the left and nav links on the right.
  The nav links include: HOME, FORM, ABOUT US, LOGIN (or user icon if logged in), and an "OTHERS" dropdown containing:
    - Support
    - Credits
    - Application
  On mobile devices, there are two nav bars:
    - A top nav bar with a smaller logo on the left and a hamburger menu on the right that toggles a dropdown containing extra nav links.
    - A bottom nav bar displaying: HOME, FORM, ABOUT US, and LOGIN (or the user icon if logged in) with active background highlighting.
  The user icon (profile picture) is shown if the user is logged in (session active) and does not affect the alignment of other links.
  The user icon does not receive active link styling in the bottom nav bar.
  
  Usage:
  1. Include the provided Google Fonts and Material Icons links in the <head>.
  2. Place the markup below within the <body>.
  3. The PHP conditionals check for a logged-in user (via $_SESSION['user']) and display the user icon instead of the LOGIN link.
  4. The CSS and JavaScript handle adaptive behavior, animations, and active state tracking.
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
      font-family: 'Playfair Display', serif;
      font-size: 1.6rem;
      font-weight: 700;
      letter-spacing: 1px;
      color: #fff;
      position: relative;
      overflow: hidden;
    }
    .nav-logo::before {
      content: "";
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: linear-gradient(45deg, transparent 40%, rgba(255,255,255,0.4) 50%, transparent 60%);
      transform: translateX(-100%) translateY(-100%) rotate(0deg);
      animation: shineMove 3s infinite;
    }
    @keyframes shineMove {
      from { transform: translateX(-150%) translateY(-150%) rotate(0deg); }
      to { transform: translateX(150%) translateY(150%) rotate(0deg); }
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
    .dropdown { position: relative; }
    .dropdown-content {
      display: none;
      position: absolute;
      top: calc(100% + 10px);
      left: 0;
      background-color: rgba(20,20,20,0.95);
      border: 1px solid #333;
      border-radius: 4px;
      padding: 0.5rem;
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
      padding: 0.5rem 0;
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
    .user-icon {
      display: inline-block;
      width: 25px;
      height: 23px;
      border-radius: 50%;
      overflow: hidden;
      border: 2px solid #4caf50;
      box-shadow: 0 0 8px #4caf50;
      transition: transform 0.3s ease;
    }
    .user-icon img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .user-icon:hover {
      transform: scale(1.1);
    }
    .bottom-nav .user-icon {
      display: inline-block;
      width: 25px;
      height: 23px;
      border-radius: 50%;
      overflow: hidden;
      border: 2px solid #4caf50;
      box-shadow: 0 0 8px #4caf50;
      transition: transform 0.3s ease;
    }
    .bottom-nav .user-icon img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .bottom-nav .user-icon:hover {
      transform: scale(1.1);
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
    ::-webkit-scrollbar {
      width: 8px;
      height: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #1a1a1a;
      border-radius: 10px;
    }
    ::-webkit-scrollbar-thumb {
      background: #4caf50;
      border-radius: 10px;
      border: 2px solid #1a1a1a;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #66bb6a;
    }
    * {
      scrollbar-width: thin;
      scrollbar-color: #4caf50 #1a1a1a;
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
        <a href="#" class="nav-link" data-page="others">OTHERS</a>
        <div class="dropdown-content">
          <a href="https://juitinitiatives.online/support" class="nav-link" data-page="support">Support</a>
          <a href="https://juitinitiatives.online/credits" class="nav-link" data-page="credits">Credits</a>
          <a href="https://juitinitiatives.online/application" class="nav-link" data-page="application">Application</a>
        </div>
      </div>
      <a href="https://juitinitiatives.online/about-us" class="nav-link" data-page="about">ABOUT US</a>
      <?php if (isset($_SESSION['user'])) { ?>
        <a href="https://juitinitiatives.online/dashboard" class="nav-link" data-page="dashboard">DASHBOARD</a>

      <?php } else { ?>
        <a href="https://juitinitiatives.online/login" class="nav-link" data-page="login">LOGIN</a>
      <?php } ?>
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
    <a href="https://juitinitiatives.online/about-us" class="nav-link" data-page="about">ABOUT US</a>
    <?php if (isset($_SESSION['user'])) { ?>
      <a href="https://juitinitiatives.online/dashboard" class="nav-link" data-page="dashboard">DASHBOARD</a>

    <?php } else { ?>
      <a href="https://juitinitiatives.online/login" class="nav-link" data-page="login">LOGIN</a>
    <?php } ?>
  </div>

  <script>
    const navLinks = document.querySelectorAll('.nav-link:not(.user-icon)');
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
      mobileDropdown.style.display = (window.getComputedStyle(mobileDropdown).display === 'none') ? 'block' : 'none';
    });
  </script>
</body>
