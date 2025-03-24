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
    <!-- Reason cards will be populated here -->
  </div>
  <div class="cta-buttons">
    <!-- CTA buttons will be populated here -->
  </div>
</div>

<!-- AOS Library JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });

  fetch('https://juitinitiatives.online/Assets/Website/Processors/fetch_why_donate_data.php')
    .then(response => response.json())
    .then(data => {
      const cardsContainer = document.querySelector('.reason-cards');
      const ctaContainer = document.querySelector('.cta-buttons');
      cardsContainer.innerHTML = '';
      
      data.cards.forEach(member => {
        const card = document.createElement('div');
        card.className = 'reason-card';
        card.setAttribute('data-aos', 'fade-up');
        card.setAttribute('data-aos-delay', member.aos_delay);
        card.innerHTML = `
          <div class="icon material-icons">${member.icon}</div>
          <div class="title">${member.title}</div>
          <div class="content">${member.content}</div>
        `;
        cardsContainer.appendChild(card);
      });

      if(data.cta) {
        ctaContainer.innerHTML = `
          <a href="${data.cta.button1_url}">${data.cta.button1_text}</a>
          <a href="${data.cta.button2_url}">${data.cta.button2_text}</a>
        `;
      }
      AOS.refresh(); 
    })
    .catch(error => console.error('Error fetching why donate data:', error));
</script>
</body>
