<head>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
  <style>
    .why-donate {
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px 20px;
      text-align: center;
    }
    .why-donate h1 {
      font-family: 'Oswald', sans-serif;
      font-size: 3rem;
      color: #ff9800;
      margin-bottom: 20px;
    }
    .why-donate p.description {
      font-family: 'Roboto', sans-serif;
      font-size: 1.2rem;
      color: #ccc;
      margin: 0 auto 40px;
      max-width: 800px;
    }
    .reason-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      margin-bottom: 40px;
    }
    .reason-card {
      background: rgba(50, 50, 50, 0.9);
      border: 1px solid rgba(255,255,255,0.15);
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 8px 20px rgba(0,0,0,0.7);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .reason-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.9);
    }
    .reason-card .icon {
      font-size: 3rem;
      margin-bottom: 10px;
      color: #4caf50;
    }
    .reason-card .title {
      font-family: 'Oswald', sans-serif;
      font-size: 1.5rem;
      font-weight: bold;
      color: #ff9800;
      margin-bottom: 10px;
      transition: text-shadow 0.3s ease, transform 0.3s ease;
    }
    .reason-card:hover .title {
      transform: perspective(500px) rotateX(5deg);
    }
    .reason-card .content {
      font-family: 'Roboto', sans-serif;
      font-size: 1rem;
      color: #ccc;
    }
    .cta-buttons {
      display: flex;
      justify-content: center;
      gap: 30px;
      margin-top: 40px;
    }
    .cta-buttons a {
      display: inline-block;
      padding: 15px 30px;
      border: 2px solid #fff;
      border-radius: 50px;
      background: transparent;
      color: #fff;
      text-transform: uppercase;
      font-family: 'Roboto', sans-serif;
      font-size: 1.1rem;
      letter-spacing: 1px;
      transition: background 0.3s ease, transform 0.3s ease;
      text-decoration: none;
    }
    .cta-buttons a:hover {
      background: rgba(255,255,255,0.2);
      transform: scale(1.05);
    }
    @media (max-width: 600px) {
      .reason-cards {
        grid-template-columns: repeat(2, 1fr);
      }
    }
  </style>
</head>
<body>
  <div class="why-donate">
    <h1>Why Donate with Us?</h1>
    <p class="description">
      At Juit Innovatives, we believe in creating lasting change through transparent charity.
      Here are eight compelling reasons why your donation matters and how it makes a difference.
    </p>
    <div class="reason-cards">
      <div class="reason-card" data-aos="fade-up" data-aos-delay="100">
        <div class="icon material-icons">volunteer_activism</div>
        <div class="title">Empower Communities</div>
        <div class="content">
          Your donations empower local communities by providing essential resources, fostering independence, and uplifting lives.
        </div>
      </div>
      <div class="reason-card" data-aos="fade-up" data-aos-delay="200">
        <div class="icon material-icons">verified_user</div>
        <div class="title">Transparency & Trust</div>
        <div class="content">
          Every donation is tracked openly, ensuring full accountability and building trust with our donors.
        </div>
      </div>
      <div class="reason-card" data-aos="fade-up" data-aos-delay="300">
        <div class="icon material-icons">accessibility_new</div>
        <div class="title">Inclusive Impact</div>
        <div class="content">
          We reach the most vulnerable by directing resources where they are needed most, making a tangible impact.
        </div>
      </div>
      <div class="reason-card" data-aos="fade-up" data-aos-delay="400">
        <div class="icon material-icons">eco</div>
        <div class="title">Sustainable Growth</div>
        <div class="content">
          Donations contribute to long-term sustainable development, enabling community programs to flourish.
        </div>
      </div>
      <div class="reason-card" data-aos="fade-up" data-aos-delay="500">
        <div class="icon material-icons">trending_up</div>
        <div class="title">Innovative Solutions</div>
        <div class="content">
          We leverage cutting-edge technology to streamline donations, ensuring efficient use of resources.
        </div>
      </div>
      <div class="reason-card" data-aos="fade-up" data-aos-delay="600">
        <div class="icon material-icons">emoji_events</div>
        <div class="title">Rewarding Experience</div>
        <div class="content">
          Experience the joy of giving; every contribution builds a better future and brings a smile to someone’s face.
        </div>
      </div>
      <div class="reason-card" data-aos="fade-up" data-aos-delay="700">
        <div class="icon material-icons">people</div>
        <div class="title">Community Engagement</div>
        <div class="content">
          Our platform unites diverse communities, fostering collaboration and support among donors and recipients.
        </div>
      </div>
      <div class="reason-card" data-aos="fade-up" data-aos-delay="800">
        <div class="icon material-icons">speed</div>
        <div class="title">Efficient Resource Management</div>
        <div class="content">
          We ensure every donation is allocated effectively, maximizing the impact of your contribution.
        </div>
      </div>
    </div>
    <div class="cta-buttons" data-aos="fade-up" data-aos-delay="900">
      <a href="https://juitinitiatives.online/register">Register Now</a>
      <a href="https://juitinitiatives.online/login">Login Now</a>
    </div>
  </div>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true
    });
  </script>
</body>
