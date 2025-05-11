<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
      align-items: center;
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
    /* Bottom nav items: icons on top and text beneath */
    .bottom-nav-item {
      text-decoration: none;
      color: #ccc;
      font-size: 0.8rem;
      font-family: 'Lato', sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 3px;
      transition: color 0.3s;
    }
    .bottom-nav-item i.material-icons {
      font-size: 1.8rem;
    }
    .bottom-nav-item:hover, .bottom-nav-item.active {
      color: #fff;
    }
    /* For profile item in bottom nav */
    .bottom-nav-item.profile-item {
      gap: 5px;
    }
    .profile-pic {
      width: 30px;
      height: 30px;
      border: 2px solid #ff9800;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 0.8rem;
      animation: pulse 1.5s infinite;
    }
    /* Increase user menu width */
    .user-menu {
      width: 180px;
      display: none;
      position: absolute;
      right: 0;
      top: 50px;
      background-color: rgba(20,20,20,0.95);
      border: 1px solid #333;
      border-radius: 4px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
      padding: 0.9rem 0;
      z-index: 1100;
      opacity: 0;
      transform: translateY(-10px);
      transition: opacity 0.3s ease, transform 0.3s ease;
    }
    .user-menu.active {
      display: block;
      opacity: 1;
      transform: translateY(0);
    }
    .user-menu-item {
      display: flex;
      align-items: center;
      padding: 0.5rem 1rem;
      text-decoration: none;
      color: #ccc;
      transition: background 0.3s ease;
    }
    .user-menu-item i.material-icons {
      margin-right: 0.5rem;
      font-size: 1.2rem;
    }
    .user-menu-item:hover {
      background-color: rgba(255,255,255,0.1);
      color: #fff;
    }
    .user-dropdown {
      position: relative;
      display: inline-flex;
      align-items: center;
      cursor: pointer;
    }
    .user-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 30px;
      height: 30px;
      border: 2px solid #ff9800;
      border-radius: 50%;
      font-size: 1rem;
      animation: pulse 1.5s infinite;
    }
    @keyframes pulse {
      0% { box-shadow: 0 0 0 0 rgba(255,152,0,0.7); }
      70% { box-shadow: 0 0 0 10px rgba(255,152,0,0); }
      100% { box-shadow: 0 0 0 0 rgba(255,152,0,0); }
    }
    @media (max-width: 768px) {
      nav { top: 10px; padding: 0.5rem 1rem; }
      .nav-links { display: none; }
      .hamburger { display: block; }
      .mobile-dropdown { display: none; }
      .bottom-nav { display: flex; }
      .nav-logo { font-size: 1.4rem; }
      /* On mobile, hide user dropdown in top nav and use bottom nav profile item */
      .user-dropdown { display: none; }
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
      <a href="https://juitinitiatives.online/credits" class="nav-link" data-page="about">ABOUT US</a>
      <?php if (isset($_SESSION['user'])) {
            $first = $_SESSION['user']['firstName'] ?? 'John';
            $last  = $_SESSION['user']['lastName'] ?? 'Doe';
            $initials = strtoupper(substr($first, 0, 1) . substr($last, 0, 1));
      ?>
        <div class="user-dropdown">
          <div class="user-icon" id="userIcon"><?php echo $initials; ?></div>
          <div class="user-menu" id="userMenu">
            <a href="https://juitinitiatives.online/dashboard" class="user-menu-item"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
            <a href="https://juitinitiatives.online/my-donation" class="user-menu-item"><i class="material-icons">card_giftcard</i><span>My Donation</span></a>
            <a href="https://juitinitiatives.online/logout" class="user-menu-item"><i class="material-icons">logout</i><span>Logout</span></a>
          </div>
        </div>
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
    <a href="https://juitinitiatives.online" class="bottom-nav-item" data-page="home">
      <i class="material-icons">home</i>
      <span>HOME</span>
    </a>
    <a href="https://juitinitiatives.online/form" class="bottom-nav-item" data-page="form">
      <i class="material-icons">description</i>
      <span>FORM</span>
    </a>
    <a href="https://juitinitiatives.online/about-us" class="bottom-nav-item" data-page="about">
      <i class="material-icons">info</i>
      <span>ABOUT</span>
    </a>
    <?php if (isset($_SESSION['user'])): ?>
      <a href="https://juitinitiatives.online/dashboard" class="bottom-nav-item profile-item">
        <div class="profile-pic"><?php echo $initials; ?></div>
        <span><?php echo $first; ?></span>
      </a>
    <?php else: ?>
      <a href="https://juitinitiatives.online/login" class="bottom-nav-item" data-page="login">
        <i class="material-icons">login</i>
        <span>LOGIN</span>
      </a>
    <?php endif; ?>
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
    
    // Toggle "OTHERS" dropdown on click
    const othersLink = document.querySelector('.dropdown > .nav-link[data-page="others"]');
    const othersDropdown = othersLink.nextElementSibling;
    othersLink.addEventListener('click', function(e) {
      e.preventDefault();
      if (othersDropdown.style.display === 'block') {
        othersDropdown.style.opacity = 0;
        othersDropdown.style.transform = 'translateY(10px)';
        setTimeout(() => {
          othersDropdown.style.display = 'none';
        }, 300);
      } else {
        othersDropdown.style.display = 'block';
        void othersDropdown.offsetWidth;
        othersDropdown.style.opacity = 1;
        othersDropdown.style.transform = 'translateY(0)';
      }
    });
    
    // Toggle user dropdown on click
    const userIcon = document.getElementById('userIcon');
    const userMenu = document.getElementById('userMenu');
    if(userIcon) {
      userIcon.addEventListener('click', function(e) {
        e.stopPropagation(); // prevent event bubbling
        userMenu.classList.toggle('active');
      });
    }
    
    // Outside click closes any open dropdown (user menu or others dropdown)
    document.addEventListener('click', function(e) {
      if(userMenu && !userMenu.contains(e.target) && !userIcon.contains(e.target)) {
        userMenu.classList.remove('active');
      }
      if(othersDropdown && !othersDropdown.contains(e.target) && !othersLink.contains(e.target)) {
        othersDropdown.style.opacity = 0;
        othersDropdown.style.transform = 'translateY(10px)';
        setTimeout(() => {
          othersDropdown.style.display = 'none';
        }, 300);
      }
    });
  </script>
</body>
</html>
