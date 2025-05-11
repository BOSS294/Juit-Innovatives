<head>
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <style>
    .about-us {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
      color: #fff;
      font-family: sans-serif;
    }
    .about-us h1 {
      font-family: 'Oswald', sans-serif;
      font-size: 3rem;
      color: #ff9800;
      margin-bottom: 1rem;
      text-align: left;
      transition: transform .3s ease;
    }
    .about-us h1:hover {
      transform: rotateY(10deg) rotateX(5deg);
    }
    .about-us p.intro {
      text-align: left;
      line-height: 1.6;
      margin-bottom: 2rem;
    }

    /* Section wrapper */
    .about-us .section {
      margin-bottom: 4rem;
    }

    /* Cards grid */
    .about-us .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 1.5rem;
      perspective: 1000px;
    }
    .about-us .card {
      background: rgba(255,255,255,0.05);
      border-radius: .75rem;
      padding: 1.5rem;
      display: flex;
      flex-direction: column;
      gap: 1rem;
      transform-style: preserve-3d;
      transition: transform .3s ease, box-shadow .3s ease;
    }
    .about-us .card:hover {
      transform: rotateY(5deg) rotateX(3deg) translateZ(10px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.4);
    }
    .about-us .card .card-header {
      display: flex;
      align-items: center;
      font-family: 'Oswald', sans-serif;
      color: #ff9800;
      font-size: 1.25rem;
      gap: .5rem;
      transform: translateZ(30px);
      text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
    }
    .about-us .card .card-header i.material-icons { font-size: 1.6rem; }
    .about-us .card p { color: #ddd; margin: 0; }

    /* CTA button */
    .about-us .card .cta-button {
      margin-top: auto;
      align-self: flex-start;
      padding: .75rem 1.5rem;
      border: 2px solid #ff9800;
      border-radius: 50px;
      background: transparent;
      color: #ff9800;
      font-family: 'Oswald', sans-serif;
      text-decoration: none;
      transition: background .3s ease, transform .2s ease;
    }
    .about-us .card .cta-button:hover {
      background: #ff9800;
      color: #000;
      transform: scale(1.05);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .about-us { padding: 1rem; }
      .about-us h1 { font-size: 2.5rem; }
    }
  </style>
</head>
<body>
<div class="about-us">
  <!-- Header & Introduction -->
  <h1 data-aos="fade-down">About Juit Donations</h1>
  <p class="intro" data-aos="fade-up">Juit Donations is committed to empowering communities through transparent, impactful giving. From food to books, clothes to monetary aid, our mission is to connect donors with causes in need, ensuring every contribution creates real, measurable change.</p>

  <!-- About Paragraph -->
  <div class="section" data-aos="fade-right">
    <p>Founded on principles of trust and accountability, Juit Donations brings together a passionate team of professionals dedicated to making charitable giving accessible and efficient. We leverage technology and local partnerships to streamline the collection, distribution, and reporting of donations, fostering a culture of generosity across regions.</p>
  </div>

  <!-- Why Needed -->
  <div class="section" id="why-needed">
    <h2 data-aos="fade-left">Why It’s Needed in Society?</h2>
    <div class="cards">
      <div class="card" data-aos="zoom-in">
        <div class="card-header"><i class="material-icons">public</i>Community Support</div>
        <p>Strengthens social bonds by caring for vulnerable groups.</p>
      </div>
      <!-- 5 more cards similarly -->
      <div class="card" data-aos="zoom-in" data-aos-delay="50">
        <div class="card-header"><i class="material-icons">restaurant</i>Hunger Relief</div>
        <p>Addresses food insecurity with timely meal distributions.</p>
      </div>
      <div class="card" data-aos="zoom-in" data-aos-delay="100">
        <div class="card-header"><i class="material-icons">school</i>Education Aid</div>
        <p>Ensures access to learning materials for underprivileged students.</p>
      </div>
      <div class="card" data-aos="zoom-in" data-aos-delay="150">
        <div class="card-header"><i class="material-icons">home</i>Disaster Support</div>
        <p>Provides rapid relief in emergencies to rebuild lives.</p>
      </div>
      <div class="card" data-aos="zoom-in" data-aos-delay="200">
        <div class="card-header"><i class="material-icons">favorite</i>Healthcare Access</div>
        <p>Funds medical treatments and preventative care in remote areas.</p>
      </div>
      <div class="card" data-aos="zoom-in" data-aos-delay="250">
        <div class="card-header"><i class="material-icons">eco</i>Environmental Impact</div>
        <p>Supports sustainability through waste reduction and green projects.</p>
      </div>
    </div>
  </div>

  <!-- Why We Are the Best -->
  <div class="section" id="why-best">
    <h2 data-aos="fade-right">Why We Are the Best?</h2>
    <div class="cards">
      <div class="card" data-aos="flip-left">
        <div class="card-header"><i class="material-icons">verified</i>Verified Partners</div>
        <p>Collaborate with vetted NGOs to ensure integrity.</p>
      </div>
      <!-- 5 more cards similarly -->
      <div class="card" data-aos="flip-left" data-aos-delay="50">
        <div class="card-header"><i class="material-icons">track_changes</i>Transparent Reporting</div>
        <p>Real-time updates on how donations are utilized.</p>
      </div>
      <div class="card" data-aos="flip-left" data-aos-delay="100">
        <div class="card-header"><i class="material-icons">account_balance</i>Low Overheads</div>
        <p>Minimize administrative costs to maximize impact.</p>
      </div>
      <div class="card" data-aos="flip-left" data-aos-delay="150">
        <div class="card-header"><i class="material-icons">support</i>Dedicated Support</div>
        <p>24/7 donor assistance for any queries.</p>
      </div>
      <div class="card" data-aos="flip-left" data-aos-delay="200">
        <div class="card-header"><i class="material-icons">insights</i>Data Analytics</div>
        <p>Measure social returns with detailed analytics.</p>
      </div>
      <div class="card" data-aos="flip-left" data-aos-delay="250">
        <div class="card-header"><i class="material-icons">emoji_events</i>Proven Impact</div>
        <p>Countless lives improved through our projects.</p>
      </div>
    </div>
  </div>

  <!-- All Donation Types -->
  <div class="section" id="donation-types">
    <h2 data-aos="fade-left">Our Donation Categories</h2>
    <div class="cards">
      <div class="card" data-aos="fade-up">
        <div class="card-header"><i class="material-icons">local_dining</i>Food Donation</div>
        <p>Provide meals and groceries to those who need it most.</p>
        <a href="/donate-food" class="cta-button">Donate Food Now</a>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="50">
        <div class="card-header"><i class="material-icons">attach_money</i>Money Donation</div>
        <p>Support causes financially to drive scalable change.</p>
        <a href="/donate-money" class="cta-button">Donate Money Now</a>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="100">
        <div class="card-header"><i class="material-icons">checkroom</i>Cloth Donation</div>
        <p>Share clothing to bring warmth and dignity.</p>
        <a href="/donate-clothes" class="cta-button">Donate Clothes Now</a>
      </div>
    </div>
  </div>
</div>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    AOS.init({ duration: 800, easing: 'ease-in-out', once: true, mirror: false });
  });
</script>
</body>
