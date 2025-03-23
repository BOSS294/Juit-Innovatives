<!--
  Hero Section - Dynamic Content Rotator for Juit Innovatives

  Version: 1.0.0
  Last Updated: 2025-03-23

  Description:
  This module implements the Hero Section for the Juit Innovatives homepage, where users can donate food, money, or clothes.
  The section is centered on the page and includes a large, premium heading, a descriptive paragraph, and a "Donate Now" button.
  The content (heading and description) rotates every 5 seconds with smooth fade-in and slide-up animations, giving the section a modern, eye-catching look.
  The design uses "Oswald" for the heading and "Roboto" for the description to deliver a unique premium style.
  The call-to-action button is styled as a white outline capsule button that stands out against the dark background.
  

  The heroContent array holds the dynamic content objects. Each object has 'heading' and 'description' properties.
-->
<head>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:wght@400&display=swap" rel="stylesheet">
  <style>
    .hero-section {
      width: 90%;
      padding: 100px 40px;
      text-align: center;
      position: relative;
      margin: 120px auto;
      border: 2px solid rgba(255, 255, 255, 0.1);
      border-radius: 100px;
      box-shadow: 0 10px 25px rgba(23, 23, 23, 0.8);
    }
    .hero-heading {
      font-size: 4rem;
      font-family: 'Oswald', sans-serif;
      font-weight: 800;
      color: #fff;
      margin-bottom: 20px;
      margin-top: -5%;
      opacity: 0;
      transition: opacity 1s ease-in-out, transform 1s ease-in-out;
    }
    .hero-description {
      font-size: 1.25rem;
      font-family: 'Roboto', sans-serif;
      color: #ddd;
      margin: 0 auto 40px;
      max-width: 800px;
      line-height: 1.5;
      opacity: 0;
      transition: opacity 1s ease-in-out, transform 1s ease-in-out;
    }
    .hero-button {
      font-size: 1.2rem;
      padding: 12px 30px;
      border: 2px solid #fff;
      border-radius: 50px;
      background: transparent;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 1px;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.3s ease, opacity 1s ease;
      opacity: 0;
    }
    .hero-button:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: scale(1.05);
    }
    .active {
      opacity: 1;
      transform: translateY(0);
    }
    .animate {
      transform: translateY(30px);
    }
  </style>
</head>
<body>
  <div class="hero-section">
    <h1 class="hero-heading animate"></h1>
    <p class="hero-description animate"></p>
    <button class="hero-button animate">Donate Now</button>
  </div>

  <script>
    const heroContent = [
      {
        heading: "Empower Local Charities",
        description: "We offer food, money, and clothes to locally registered charities. Every donation is transparently managed and open-source."
      },
      {
        heading: "Support Community Welfare",
        description: "Your generosity helps provide essential supplies to charities. Experience a modern, transparent way to give back."
      },
      {
        heading: "Your Donation Matters",
        description: "Join us to make a lasting impact. Every contribution of food, money, or clothes makes a real difference in our community."
      },
      {
        heading: "Transparency in Giving",
        description: "Our platform ensures every donation is tracked openly. Help build a better future with secure and effective charity management."
      }
    ];

    let currentIndex = 0;
    const headingEl = document.querySelector('.hero-heading');
    const descriptionEl = document.querySelector('.hero-description');
    const buttonEl = document.querySelector('.hero-button');

    function updateHeroContent() {
      const content = heroContent[currentIndex];
      headingEl.classList.remove('active');
      descriptionEl.classList.remove('active');
      buttonEl.classList.remove('active');

      setTimeout(() => {
        headingEl.textContent = content.heading;
        descriptionEl.textContent = content.description;
        headingEl.classList.add('active');
        descriptionEl.classList.add('active');
        buttonEl.classList.add('active');
      }, 500);
      
      currentIndex = (currentIndex + 1) % heroContent.length;
    }

    updateHeroContent();
    setInterval(updateHeroContent, 5000);
  </script>
</body>
