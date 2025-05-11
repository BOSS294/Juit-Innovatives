<head>
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <style>
    .learn-food {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
      color: #ffffff;
    }

    .learn-food h2 {
      font-family: 'Oswald', sans-serif;
      color: #ff9800;
      text-align: left;
      margin-bottom: 0.5rem;
    }
    .learn-food h2.main-header {
      font-size: 3.5rem;
      margin-bottom: 1rem;
      margin-top: 8%;
    }

    .learn-food p {
      text-align: left;
      line-height: 1.6;
      margin-bottom: 2rem;
    }

    /* Section wrappers */
    .learn-food .section {
      margin-bottom: 4rem;
    }

    /* Cards Grid */
    .learn-food .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 1.5rem;
      perspective: 1000px;
    }

    .learn-food .card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 0.75rem;
      padding: 1.5rem;
      display: flex;
      flex-direction: column;
      gap: 1rem;
      transform-style: preserve-3d;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .learn-food .card:hover {
      transform: rotateY(5deg) rotateX(3deg) translateZ(10px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    .learn-food .card .card-header {
      display: flex;
      align-items: center;
      font-family: 'Oswald', sans-serif;
      color: #ff9800;
      font-size: 1.25rem;
      gap: 0.5rem;
      transform: translateZ(30px);
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
    }
    .learn-food .card .card-header i.material-icons {
      font-size: 1.6rem;
    }
    .learn-food .card p {
      font-size: 0.95rem;
      color: #ddd;
      margin: 0;
    }

    /* Table Styles */
    .learn-food .donation-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
    }
    .learn-food .donation-table th,
    .learn-food .donation-table td {
      padding: 0.75rem 1rem;
      border: 1px solid rgba(255,255,255,0.1);
      text-align: left;
      font-size: 0.95rem;
    }
    .learn-food .donation-table th {
      background: rgba(255, 152, 0, 0.2);
      color: #ff9800;
      font-family: 'Oswald', sans-serif;
    }
    .learn-food .donation-table tbody tr:nth-child(even) {
      background: rgba(255,255,255,0.05);
    }

    /* Items Column - Bold and Green */
    .learn-food .donation-table td:nth-child(4) {
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
      .learn-food {
        padding: 1rem;
      }
      .learn-food .card {
        padding: 1rem;
      }
    }
  </style>
</head>

<body>
  <div class="learn-food">
    <!-- Page Heading & Intro -->
    <h2 class="main-header">Learn More About Food Donation</h2>
    <p>Your surplus meals and pantry items can bring nourishment and hope. Explore why food donation matters, why Juit Innovatives is the right partner, and see recent contributions.</p>

    <!-- Section 1: Why you should donate food -->
    <div class="section" id="why-donate-food">
      <h2>Why You Should Donate Food?</h2>
      <p>Donating food addresses hunger, reduces waste, and strengthens communities. Key benefits include:</p>
      <div class="cards">
        <div class="card" data-aos="fade-up">
          <div class="card-header">
            <i class="material-icons">food_bank</i>
            Fight Hunger
          </div>
          <p>Provide nutritious meals to families and individuals experiencing food insecurity.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="50">
          <div class="card-header">
            <i class="material-icons">no_food</i>
            Reduce Waste
          </div>
          <p>Keep edible items out of landfills by redirecting surplus food to those in need.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="100">
          <div class="card-header">
            <i class="material-icons">local_dining</i>
            Support Local Shelters
          </div>
          <p>Partner with community kitchens, shelters, and food banks to distribute meals efficiently.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="150">
          <div class="card-header">
            <i class="material-icons">emoji_people</i>
            Nourish Children
          </div>
          <p>Ensure students have healthy meals for better concentration and growth.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="200">
          <div class="card-header">
            <i class="material-icons">public</i>
            Community Well-being
          </div>
          <p>Strengthen neighborhood bonds through shared resources and collective care.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="250">
          <div class="card-header">
            <i class="material-icons">eco</i>
            Environmental Impact
          </div>
          <p>Reduce greenhouse gas emissions by minimizing food waste across the supply chain.</p>
        </div>
      </div>
    </div>

    <!-- Section 2: Why donate to us -->
    <div class="section" id="why-donate-to-us">
      <h2>Why Donate to Us?</h2>
      <p>Juit Innovatives maximizes your food donations through rigorous processes and trusted partners:</p>
      <div class="cards">
        <div class="card" data-aos="fade-up">
          <div class="card-header">
            <i class="material-icons">verified</i>
            Safe Handling
          </div>
          <p>We inspect, sort, and package all items to uphold quality and safety standards.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="50">
          <div class="card-header">
            <i class="material-icons">local_shipping</i>
            Efficient Logistics
          </div>
          <p>Our refrigerated transport and volunteers ensure timely delivery to food banks.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="100">
          <div class="card-header">
            <i class="material-icons">account_balance_wallet</i>
            Low Overheads
          </div>
          <p>Less than 5% administrative costs—most of every meal reaches people who need it.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="150">
          <div class="card-header">
            <i class="material-icons">support</i>
            Ongoing Support
          </div>
          <p>Get updates on distribution events, beneficiary feedback, and impact stories.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="200">
          <div class="card-header">
            <i class="material-icons">insights</i>
            Impact Reports
          </div>
          <p>Receive data on meals served, regions covered, and waste reduction metrics.</p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="250">
          <div class="card-header">
            <i class="material-icons">emoji_events</i>
            Proven Results
          </div>
          <p>Over 50,000 meals distributed and 2,000 households reached last quarter.</p>
        </div>
      </div>
    </div>

    <!-- Section 3: Recent Food Donations -->
    <div class="section" id="donation-list">
      <h2>Recent Food Donations</h2>
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
          <tr><td>1</td><td>Aarav Patel</td><td>2025-05-01</td><td>30 Meal Packs</td></tr>
          <tr><td>2</td><td>Priya Singh</td><td>2025-05-03</td><td>20kg Rice</td></tr>
          <tr><td>3</td><td>Rohan Mehta</td><td>2025-05-05</td><td>15 Loaves of Bread</td></tr>
          <tr><td>4</td><td>Shreya Rao</td><td>2025-05-07</td><td>25 Canned Goods</td></tr>
          <tr><td>5</td><td>Vikram Joshi</td><td>2025-05-08</td><td>10kg Pulses</td></tr>
          <tr><td>6</td><td>Neha Gupta</td><td>2025-05-09</td><td>50 Bottles of Milk</td></tr>
          <tr><td>7</td><td>Aditya Nair</td><td>2025-05-10</td><td>40 Snack Boxes</td></tr>
          <tr><td>8</td><td>Kavita Desai</td><td>2025-05-11</td><td>60 Fresh Fruits</td></tr>
        </tbody>
      </table>
      <!-- CTA Button -->
      <a href="https://juitinitiatives.online/donate-food" class="cta-button" data-aos="fade-up" data-aos-delay="300">
        Donate Food Now
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
