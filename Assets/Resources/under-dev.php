<head>
  <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    .under-dev {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      background-color: #000;
      padding: 20px;
      animation: fadeIn 1s ease-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .under-dev h1 {
      font-family: 'Bungee', cursive;
      font-size: 4rem;
      color: #ff9800;
      margin-bottom: 20px;
      animation: bounceIn 1.5s ease-out;
    }
    @keyframes bounceIn {
      0% { transform: scale(0.3); opacity: 0; }
      50% { transform: scale(1.05); opacity: 1; }
      70% { transform: scale(0.9); }
      100% { transform: scale(1); }
    }
    .under-dev p {
      font-family: 'Roboto', sans-serif;
      font-size: 1.2rem;
      color: #ccc;
      margin-bottom: 40px;
      max-width: 600px;
    }
    .under-dev .go-home {
      display: inline-block;
      padding: 12px 30px;
      border: 2px solid #fff;
      border-radius: 50px;
      text-transform: uppercase;
      font-family: 'Roboto', sans-serif;
      font-size: 1rem;
      color: #fff;
      text-decoration: none;
      transition: background 0.3s ease, transform 0.3s ease;
    }
    .under-dev .go-home:hover {
      background: rgba(255,255,255,0.2);
      transform: scale(1.05);
    }
    .under-dev .footer-text {
      position: fixed;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      font-family: 'Roboto', sans-serif;
      font-size: 1rem;
      color: #ccc;
    }
  </style>
</head>
<body>
  <div class="under-dev">
    <h1>Oops! Under Development</h1>
    <p>Our developer is busy conjuring up magic behind the scenes. This page is still under construction, so please check back soon. Meanwhile, why not head back home and discover what wonders await?</p>
    <a href="https://juitinitiatives.online" class="go-home">Go to Home</a>
    <div class="footer-text">Keep calm and wait for awesomeness!</div>
  </div>
</body>
