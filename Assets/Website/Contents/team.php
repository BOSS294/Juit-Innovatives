<!--
  Team Credits Page for Juit Innovatives

  Version: 1.0.0
  Last Updated: 2025-03-24

  Description:
  This page displays the team members of Juit Innovatives along with their roles and contributions.
  The layout includes a centered header with a title and description, followed by a grid of team member cards.
  Each team card shows:
    - A work icon (using Material Icons)
    - The member’s name (bold, in a distinct color)
    - The member’s role (in another distinct color)
    - A short description of their contribution
  The cards are arranged three per line on larger screens and adjust responsively on mobile devices.

  Backend Integration:
  The team member data is stored in a database table (team_members) and is fetched via a PHP processor (fetch_team_members.php)
  that returns the data as JSON. JavaScript then retrieves this data and dynamically populates the team cards on the page.
  AOS (Animate On Scroll) is used to animate the cards on load for a dynamic, modern feel.

  Following the team cards, there is a "Why We Are the Best" section.
  This section contains a centered heading and description, followed by a grid of six feature cards.
  Each feature card includes:
    - An icon
    - A title with a 3D hover effect (enhanced via text-shadow and transform)
    - A brief description
  These feature cards also animate on load using AOS for a polished presentation.
-->


<head>

  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
  <style>

    .team-credits {
      max-width: 1200px;
      margin: 90px auto;
    }
    .section-header {
      text-align: center;
      margin-bottom: 40px;
    }
    .section-header h1,
    .section-header h2 {
      font-family: 'Oswald', sans-serif;
      margin-bottom: 10px;
    }
    .section-header h1 {
      font-size: 2.5rem;
    }
    .section-header h2 {
      font-size: 2rem;
      color: #ff9800;
    }
    .section-header p {
      font-size: 1.2rem;
      color: #ccc;
      margin: 0;
    }
    .team-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      margin-bottom: 60px;

    }
    .team-card {
      background: rgba(50, 50, 50, 0.9);
      border: 1px solid rgba(255,255,255,0.15);
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 8px 20px rgba(0,0,0,0.7);
      transition: transform 0.3s ease, box-shadow 0.3s ease;

    }

    .team-card .icon {
      font-size: 3rem;
      margin-bottom: 10px;
      color: #4caf50;
    }
    .team-card .member-name {
      font-size: 1.5rem;
      font-weight: bold;
      color: #ff9800;
      margin-bottom: 5px;
    }
    .team-card .member-role {
      font-size: 1.1rem;
      color: #03a9f4;
      margin-bottom: 10px;
    }
    .team-card .member-task {
      font-size: 0.95rem;
      color: #ccc;
    }
    .team-card:hover {
      transform: perspective(1000px) rotateX(5deg) rotateY(5deg);
      box-shadow: 0 12px 30px rgba(0,0,0,0.9);
    }
    .best-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }
    .best-card {
      background: rgba(50, 50, 50, 0.9);
      border: 1px solid rgba(255,255,255,0.15);
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 8px 20px rgba(0,0,0,0.7);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .best-card:hover {
      transform: perspective(1000px) rotateX(5deg) rotateY(5deg);
      box-shadow: 0 12px 30px rgba(0,0,0,0.9);
    }
    .best-card .icon {
      font-size: 3rem;
      margin-bottom: 10px;
      color: #4caf50;
    }
    .best-card .title {
      font-size: 1.5rem;
      font-weight: bold;
      color: #ff9800;
      margin-bottom: 5px;
      transition: text-shadow 0.3s ease;
    }

    .best-card .description {
      font-size: 0.95rem;
      color: #ccc;
    }
  </style>
</head>
<body>
  <div class="team-credits">
    <div class="section-header" data-aos="fade-up">
      <h1>Our Team</h1>
      <p>Meet the passionate team behind Juit Innovatives, dedicated to transforming charity with transparency and innovation.</p>
    </div>
    <div class="team-cards">
        <!-- Team cards will be dynamically populated here -->
    </div>
    <div class="section-header" data-aos="fade-up" data-aos-delay="600">
      <h2>Why We Are the Best</h2>
      <p>Our commitment to excellence, innovation, and community impact sets us apart from the rest.</p>
    </div>
    <div class="best-cards">
      <div class="best-card" data-aos="flip-left" data-aos-delay="100">
        <div class="icon material-icons">verified</div>
        <div class="title">Transparent Operations</div>
        <div class="description">Every donation is tracked openly for complete accountability and trust.</div>
      </div>
      <div class="best-card" data-aos="flip-left" data-aos-delay="150">
        <div class="icon material-icons">group</div>
        <div class="title">Community Driven</div>
        <div class="description">Built by local volunteers, our platform thrives on genuine community support.</div>
      </div>
      <div class="best-card" data-aos="flip-left" data-aos-delay="200">
        <div class="icon material-icons">insights</div>
        <div class="title">Innovative Solutions</div>
        <div class="description">We leverage modern technology to streamline donations for maximum impact.</div>
      </div>
      <div class="best-card" data-aos="flip-left" data-aos-delay="250">
        <div class="icon material-icons">thumb_up</div>
        <div class="title">User-Centric</div>
        <div class="description">Designed with users in mind, our platform ensures a seamless experience.</div>
      </div>
      <div class="best-card" data-aos="flip-left" data-aos-delay="300">
        <div class="icon material-icons">security</div>
        <div class="title">Secure & Reliable</div>
        <div class="description">Data security and reliability are our top priorities for a safe donation environment.</div>
      </div>
      <div class="best-card" data-aos="flip-left" data-aos-delay="350">
        <div class="icon material-icons">autorenew</div>
        <div class="title">Continuous Innovation</div>
        <div class="description">We constantly evolve our platform to meet emerging needs and improve service.</div>
      </div>
    </div>
  </div>

  <!-- AOS Library JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true
    });
    fetch('https://juitinitiatives.online/Assets/Website/Processors/fetch_team_members.php')
    .then(response => response.json())
    .then(data => {
      const container = document.querySelector('.team-cards');
      container.innerHTML = '';
      data.forEach((member, index) => {
        const card = document.createElement('div');
        card.className = 'team-card';
        card.setAttribute('data-aos', 'zoom-in');
        card.setAttribute('data-aos-delay', (100 * (index + 1)).toString());
        card.innerHTML = `
          <div class="icon material-icons">${member.icon}</div>
          <div class="member-name">${member.memberName}</div>
          <div class="member-role">${member.memberRole}</div>
          <div class="member-task">${member.memberTask}</div>
        `;
        container.appendChild(card);
      });
      AOS.refresh(); // Refresh AOS to animate new elements
    })
    .catch(error => console.error('Error fetching team data:', error));
  </script>
