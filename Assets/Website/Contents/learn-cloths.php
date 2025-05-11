<head>
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <style>
    .learn-clothes {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
      color: #ffffff;
    }

    .learn-clothes h2 {
      font-family: 'Oswald', sans-serif;
      color: #ff9800;
      text-align: left;
      margin-bottom: 0.5rem;
    }
    .learn-clothes h2.main-header {
      font-size: 3.5rem;
      margin-bottom: 1rem;
      margin-top: 8%;
    }

    .learn-clothes p {
      text-align: left;
      line-height: 1.6;
      margin-bottom: 2rem;
    }

    /* Section wrappers */
    .learn-clothes .section {
      margin-bottom: 4rem;
    }

    /* Cards Grid */
    .learn-clothes .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 1.5rem;
      perspective: 1000px;
    }

    .learn-clothes .card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 0.75rem;
      padding: 1.5rem;
      display: flex;
      flex-direction: column;
      gap: 1rem;
      transform-style: preserve-3d;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .learn-clothes .card:hover {
      transform: rotateY(5deg) rotateX(3deg) translateZ(10px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    .learn-clothes .card .card-header {
      display: flex;
      align-items: center;
      font-family: 'Oswald', sans-serif;
      color: #ff9800;
      font-size: 1.25rem;
      gap: 0.5rem;
      transform: translateZ(30px);
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
    }
    .learn-clothes .card .card-header i.material-icons {
      font-size: 1.6rem;
    }
    .learn-clothes .card p {
      font-size: 0.95rem;
      color: #ddd;
      margin: 0;
    }

    /* Table Styles */
    .learn-clothes .donation-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
    }
    .learn-clothes .donation-table th,
    .learn-clothes .donation-table td {
      padding: 0.75rem 1rem;
      border: 1px solid rgba(255,255,255,0.1);
      text-align: left;
      font-size: 0.95rem;
    }
    .learn-clothes .donation-table th {
      background: rgba(255, 152, 0, 0.2);
      color: #ff9800;
      font-family: 'Oswald', sans-serif;
    }
    .learn-clothes .donation-table tbody tr:nth-child(even) {
      background: rgba(255,255,255,0.05);
    }

    /* Items Column - Bold and Green */
    .learn-clothes .donation-table td:nth-child(4) {
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
      .learn-clothes {
        padding: 1rem;
      }
      .learn-clothes .card {
        padding: 1rem;
      }
    }
  </style>
</head>

<body>
  <div class="learn-clothes">
    <!-- Page Heading & Intro -->
    <h2 class="main-header">Learn More About Cloth Donation</h2>
    <p>Every garment you give can bring warmth, dignity, and hope. On this page, explore why donating clothes matters, why Juit Innovatives is your ideal partner, and see real donation records.</p>

    <!-- Section 1: Why you should donate clothes -->
    <div class="section" id="why-donate-clothes">
      <h2>Why You Should Donate Clothes?</h2>
      <p>Your unused or gently worn items can transform lives. Here are the top reasons to share your wardrobe:</p>
      <div class="cards">
        <div class="card" data-aos="fade-up">
          <div class="card-header">
            <i class="material-icons">style</i>
            Reduce Waste
          </div>
          <p>Keep textiles out of landfills and give fabrics a second life in someone else’s hands.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="50">
          <div class="card-header">
            <i class="material-icons">child_care</i>
            Help Families
          </div>
          <p>Provide clothing essentials to children and parents in need, ensuring comfort and confidence.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="100">
          <div class="card-header">
            <i class="material-icons">person</i>
            Support Job Seekers
          </div>
          <p>Donate professional attire to help job applicants make a strong first impression.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="150">
          <div class="card-header">
            <i class="material-icons">public</i>
            Community Drives
          </div>
          <p>Fuel local clothing drives that distribute garments directly within your own neighborhood.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="200">
          <div class="card-header">
            <i class="material-icons">beach_access</i>
            Seasonal Needs
          </div>
          <p>Supply warm coats in winter or light fabrics in summer to match the changing needs.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="250">
          <div class="card-header">
            <i class="material-icons">volunteer_activism</i>
            Empower Vulnerable
          </div>
          <p>Your donations support refugees, disaster victims, and other vulnerable groups.</p>
        </div>
      </div>
    </div>

    <!-- Section 2: Why donate to us -->
    <div class="section" id="why-donate-to-us">
      <h2>Why Donate to Us?</h2>
      <p>Juit Innovatives makes your clothing donations count through transparent operations and strong partnerships:</p>
      <div class="cards">
        <div class="card" data-aos="fade-up">
          <div class="card-header">
            <i class="material-icons">verified</i>
            Quality Checks
          </div>
          <p>We inspect and sort each item to ensure recipients receive only clean, wearable clothes.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="50">
          <div class="card-header">
            <i class="material-icons">local_shipping</i>
            Free Pickup
          </div>
          <p>Schedule a no-cost home pickup and we handle packing and shipping to collection centers.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="100">
          <div class="card-header">
            <i class="material-icons">account_balance_wallet</i>
            Low Overheads
          </div>
          <p>Less than 5% administrative costs—most items go directly to those who need them.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="150">
          <div class="card-header">
            <i class="material-icons">support</i>
            Ongoing Support
          </div>
          <p>Our team provides updates on distribution events and recipient stories.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="200">
          <div class="card-header">
            <i class="material-icons">insights</i>
            Impact Reports
          </div>
          <p>Receive detailed analytics on how many garments reached communities in need.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="250">
          <div class="card-header">
            <i class="material-icons">emoji_events</i>
            Proven Results
          </div>
          <p>Over 20,000 items distributed and 8,000 beneficiaries served last quarter alone.</p>
        </div>
      </div>
    </div>

    <!-- Section 3: Recent Clothes Donations -->
    <div class="section" id="donation-list">
      <h2>Recent Clothes Donations</h2>
      <table class="donation-table">
        <thead>
          <tr>
            <th>S.No</th>
            <th>Donated By</th>
            <th>Donated On</th>
            <th>Items Donated</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>1</td><td>Aarav Patel</td><td>2025-05-02</td><td>5 Jackets</td></tr>
          <tr><td>2</td><td>Priya Singh</td><td>2025-05-04</td><td>8 Shirts</td></tr>
          <tr><td>3</td><td>Rohan Mehta</td><td>2025-05-06</td><td>3 Trousers</td></tr>
          <tr><td>4</td><td>Shreya Rao</td><td>2025-05-07</td><td>10 Scarves</td></tr>
          <tr><td>5</td><td>Vikram Joshi</td><td>2025-05-08</td><td>6 Pairs of Shoes</td></tr>
          <tr><td>6</td><td>Neha Gupta</td><td>2025-05-09</td><td>4 Dresses</td></tr>
          <tr><td>7</td><td>Aditya Nair</td><td>2025-05-10</td><td>12 T-Shirts</td></tr>
          <tr><td>8</td><td>Kavita Desai</td><td>2025-05-11</td><td>7 Sweaters</td></tr>
        </tbody>
      </table>
      <!-- CTA Button -->
      <a href="https://juitinitiatives.online/donate-clothes" class="cta-button" data-aos="fade-up" data-aos-delay="300">
        Donate Clothes Now
      </a>
    </div>
  </div>

  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      });
    });
  </script>
</body>
