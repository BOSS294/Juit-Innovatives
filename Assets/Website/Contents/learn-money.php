<head>
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <style>
    .learn-money {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
      color: #ffffff;
    }

    .learn-money h2 {
      font-family: 'Oswald', sans-serif;
      color: #ff9800;
      text-align: left;
      margin-bottom: 0.5rem;
    }
    .learn-money h2.main-header {
      font-size: 3.5rem;
      margin-bottom: 1rem;
      margin-top: 8%;
      
    }
    .learn-money p {
      text-align: left;
      line-height: 1.6;
      margin-bottom: 2rem;
    }

    /* Section wrappers */
    .learn-money .section {
      margin-bottom: 4rem;
    }

    /* Cards Grid */
    .learn-money .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 1.5rem;
      perspective: 1000px;
    }

    .learn-money .card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 0.75rem;
      padding: 1.5rem;
      display: flex;
      flex-direction: column;
      gap: 1rem;
      transform-style: preserve-3d;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .learn-money .card:hover {
      transform: rotateY(5deg) rotateX(3deg) translateZ(10px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    .learn-money .card .card-header {
      display: flex;
      align-items: center;
      font-family: 'Oswald', sans-serif;
      color: #ff9800;
      font-size: 1.25rem;
      gap: 0.5rem;
      transform: translateZ(30px);
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
    }
    .learn-money .card .card-header i.material-icons {
      font-size: 1.6rem;
    }
    .learn-money .card p {
      font-size: 0.95rem;
      color: #ddd;
      margin: 0;
    }

    /* Table Styles */
    .learn-money .donation-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
    }
    .learn-money .donation-table th,
    .learn-money .donation-table td {
      padding: 0.75rem 1rem;
      border: 1px solid rgba(255,255,255,0.1);
      text-align: left;
      font-size: 0.95rem;
    }
    .learn-money .donation-table th {
      background: rgba(255, 152, 0, 0.2);
      color: #ff9800;
      font-family: 'Oswald', sans-serif;
    }
    .learn-money .donation-table tbody tr:nth-child(even) {
      background: rgba(255,255,255,0.05);
    }

    /* Amount Column - Bold and Green */
    .learn-money .donation-table td:nth-child(4) {
      font-weight: bold;
      color: #4caf50;
    }

    /* CTA Button */
    .cta-button {
      display: inline-block;
      padding: 15px 30px;
      border: 2px solid #ff9800;
      border-radius: 50px;
      background: transparent;
      color: #ff9800;
      font-family: 'Oswald', sans-serif;
      font-size: 1.2rem;
      text-decoration: none;
      text-align: center;
      transition: background 0.3s ease, transform 0.2s ease;
      margin-top: 2rem;
    }
    .cta-button:hover {
      background: #ff9800;
      color: #000;
      transform: scale(1.05);
    }

    /* Responsive tweaks */
    @media (max-width: 768px) {
      .learn-money {
        padding: 1rem;
      }
      .learn-money .card {
        padding: 1rem;
      }
    }
  </style>
</head>

<body>

<div class="learn-money">
  <!-- Page Heading & Intro -->
  <h2 class="main-header">Learn More About Money Donation</h2>
  <p>Discover how your financial contributions can drive real change. In this page, you’ll find reasons to give, why Juit Innovatives is the right partner, and a record of past donations to inspire your generosity.</p>

  <!-- Section 1: Why you should donate money ?? -->
  <div class="section" id="why-donate-money">
    <h2>Why You Should Donate Money?</h2>
    <p>Your monetary support enables scalable impact across education, healthcare, disaster relief, and more. Here are key reasons to contribute:</p>
    <div class="cards">
      <div class="card" data-aos="fade-up">
        <div class="card-header">
          <i class="material-icons">school</i>
          Education Support
        </div>
        <p>Fund scholarships, build classrooms, and provide learning materials so every child can access quality education.</p>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="50">
        <div class="card-header">
          <i class="material-icons">local_hospital</i>
          Healthcare Aid
        </div>
        <p>Help cover medical expenses, support clinics, and purchase vital medicines for underserved communities.</p>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="100">
        <div class="card-header">
          <i class="material-icons">emoji_people</i>
          Community Development
        </div>
        <p>Enhance local infrastructure, water projects, and livelihood programs to build stronger, self-reliant communities.</p>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="150">
        <div class="card-header">
          <i class="material-icons">public</i>
          Disaster Relief
        </div>
        <p>Provide immediate financial relief to victims of natural disasters, ensuring shelter, food, and medical care.</p>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="200">
        <div class="card-header">
          <i class="material-icons">eco</i>
          Environmental Conservation
        </div>
        <p>Support reforestation, clean energy initiatives, and wildlife protection to safeguard our planet’s future.</p>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="250">
        <div class="card-header">
          <i class="material-icons">volunteer_activism</i>
          Emergency Aid
        </div>
        <p>Your funds can rapidly mobilize aid kits, temporary shelters, and essential supplies in crises.</p>
      </div>
    </div>
  </div>

  <!-- Section 2: Why donate to us ?? -->
  <div class="section" id="why-donate-to-us">
    <h2>Why Donate to Us?</h2>
    <p>Juit Innovatives ensures your donations go further through transparency, accountability, and on-the-ground partnerships:</p>
    <div class="cards">
      <div class="card" data-aos="fade-up">
        <div class="card-header">
          <i class="material-icons">verified</i>
          Verified Partners
        </div>
        <p>We work only with NGOs and community groups vetted for integrity and impact.</p>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="50">
        <div class="card-header">
          <i class="material-icons">track_changes</i>
          Real-time Tracking
        </div>
        <p>Get updates on how your money is being used via detailed progress reports and photos.</p>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="100">
        <div class="card-header">
          <i class="material-icons">account_balance_wallet</i>
          Low Overheads
        </div>
        <p>We keep administrative costs below 5%, maximizing the impact of every rupee donated.</p>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="150">
        <div class="card-header">
          <i class="material-icons">support</i>
          Dedicated Support
        </div>
        <p>Our donor support team is available 24/7 to answer questions and provide assistance.</p>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="200">
        <div class="card-header">
          <i class="material-icons">insights</i>
          Impact Analytics
        </div>
        <p>We provide data-driven insights to measure social returns on your donations.</p>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="250">
        <div class="card-header">
          <i class="material-icons">emoji_events</i>
          Proven Results
        </div>
        <p>Over 10,000 beneficiaries served and ₹5 Crore deployed across projects in the last year.</p>
      </div>
    </div>
  </div>

  <!-- Section 3: Recent Money Donations -->
  <div class="section" id="donation-list">
    <h2>Recent Money Donations</h2>
    <table class="donation-table">
      <thead>
        <tr>
          <th>S.No</th>
          <th>Donated By</th>
          <th>Donated On</th>
          <th>Amount Donated (INR)</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Aarav Patel</td><td>2025-05-03</td><td>₹5,000</td></tr>
        <tr><td>2</td><td>Priya Singh</td><td>2025-05-05</td><td>₹10,000</td></tr>
        <tr><td>3</td><td>Rohan Mehta</td><td>2025-05-06</td><td>₹7,500</td></tr>
        <tr><td>4</td><td>Shreya Rao</td><td>2025-05-07</td><td>₹12,000</td></tr>
        <tr><td>5</td><td>Vikram Joshi</td><td>2025-05-08</td><td>₹8,000</td></tr>
        <tr><td>6</td><td>Neha Gupta</td><td>2025-05-09</td><td>₹15,000</td></tr>
        <tr><td>7</td><td>Aditya Nair</td><td>2025-05-10</td><td>₹9,500</td></tr>
        <tr><td>8</td><td>Kavita Desai</td><td>2025-05-11</td><td>₹20,000</td></tr>
      </tbody>
    </table>
    <!-- CTA Button -->
    <a href="https://juitinitiatives.online/donate" class="cta-button" data-aos="fade-up" data-aos-delay="300">Donate Money Now</a>
  </div>
</div>


  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,      // animate only once
        mirror: false    // do not animate elements on scroll up
      });
    });
  </script>
</body>
