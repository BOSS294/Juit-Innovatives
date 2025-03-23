<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Juit Innovatives - Login</title>

  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Montserrat:wght@500&display=swap"
    rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #000;
      font-family: 'Montserrat', sans-serif;
      color: #fff;
    }


    nav {
      position: fixed;
      top: 20px;
      left: 50%;
      transform: translateX(-50%);
      background-color: rgba(20, 20, 20, 0.9);
      border: 1px solid #333;
      border-radius: 8px;
      padding: 0.5rem 1rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 90%;
      max-width: 1000px;
      z-index: 1000;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
      animation: fadeInDown 0.8s ease-out;
      overflow: hidden;
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

    .nav-link:hover,
    .nav-link.active {
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


    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translate(-50%, -20px);
      }

      to {
        opacity: 1;
        transform: translate(-50%, 0);
      }
    }
  </style>
</head>

<body>
  <nav>
    <div class="nav-logo">JUIT INNOVATIVES</div>
    <div class="nav-links">
      <a href="index.html" class="nav-link" data-page="home">HOME</a>
      <a href="contact.html" class="nav-link" data-page="contact">CONTACT</a>
      <a href="credits.html" class="nav-link" data-page="credits">CREDITS</a>
      <a href="support.html" class="nav-link" data-page="support">SUPPORT</a>
      <a href="login.html" class="nav-link" data-page="login">LOGIN</a>
    </div>
  </nav>

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
      link.addEventListener('click', function () {
        sessionStorage.setItem('activePage', this.dataset.page);
      });
    });
  </script>
</body>