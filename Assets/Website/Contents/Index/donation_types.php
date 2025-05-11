<!--
  Donation Types Section & Popups for Juit Innovatives

  Version: 1.0.0
  Last Updated: 2025-03-23

  Description:
  This module implements the Donation Types section for the Juit Innovatives homepage.
  It displays three 3D-styled donation cards (Food, Money, Cloth) centered on the page, each featuring an image, a bold title in a modern rare font, a detailed description (ensuring uniform length), and two action buttons ("Donate ..." and "Learn More").
  
  When a user clicks on a "Donate" button, a themed modal popup opens. The popup includes:
    • A header with a title (in a bold, modern font) and a close icon at the top right.
    • Donation-specific input fields with accompanying Google Material icons centered inside the input boxes.
  
  For Food Donation:
    - Input: "What do you want to donate?" with a placeholder and an icon.
    - Input: "How many persons do you want to feed?" with a placeholder and an icon.
    - A large textarea for extra notes (with character count 0/500).
  
  For Cloth Donation:
    - Input: "How many clothes do you want to donate?" with a placeholder and an icon.
    - Dropdown: "Do you want to donate old clothes or new clothes?" with selectable options.
    - A textarea for extra notes, similar to food donation.
  
  For Money Donation:
    - Input: "Amount in INR" with a placeholder and an icon.
    - A set of three payment method tabs (Debit Card, Credit Card, UPI) with Debit Card selected by default.
      * For Debit/Credit Card: Standard input fields for card number, expiry, and CVV.
      * For UPI: A QR code placeholder is displayed on the left along with inputs for Transaction ID, Transacted Amount, Transaction Date & Time, and a selectable UPI App (Google Pay, PhonePe, Paytm, BharatPe).

  Animations:
    - Donation cards load with a modern fade-in and slide-up animation.
    - Modal popups animate on open (slide down and fade in) and close.
    - Buttons have an interactive hover and slight scale effect.

  Usage:
  1. Place the following markup and script in your page. (The page background is black and already styled elsewhere.)
  2. The section header (with a centered big bold heading and descriptive text) appears at the top of the donation section.
  3. Clicking a "Donate" button opens the respective donation popup with the appropriate fields.
  
  Note:
  - Ensure that Google Material Icons are loaded via the provided link.
-->

<head>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    .donation-header {
      text-align: center;
      margin: 40px 0 20px;
    }
    .donation-header h1 {
      font-family: 'Oswald', sans-serif;
      font-size: 3rem;
      font-weight: 700;
      color: #fff;
      margin-bottom: 10px;
    }
    .donation-header p {
      font-family: 'Roboto', sans-serif;
      font-size: 1.2rem;
      color: #ccc;
      margin: 0;
    }
    .donation-types {
      width: 90%;
      max-width: 1200px;
      margin: 20px auto;
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }
    .donation-card {
      background: rgba(50, 50, 50, 0.95);
      border: 1px solid rgba(255, 255, 255, 0.15);
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.8);
      width: 300px;
      padding: 20px;
      text-align: center;
      transition: transform 0.3s ease;
      animation: fadeInUp 1s ease;
    }
    .donation-card:hover {
      transform: translateY(-8px);
    }
    .donation-card img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 15px;
    }
    .donation-card h3 {
      font-family: 'Oswald', sans-serif;
      font-size: 1.8rem;
      margin-bottom: 10px;
      color: #ff9800;
    }
    .donation-card p {
      font-family: 'Roboto', sans-serif;
      font-size: 1rem;
      color: #ccc;
      margin-bottom: 20px;
      min-height: 80px;
    }
    .payment-form .input-group  { 
        width: 90%;
    }
    .donation-card .btn-group {
      display: flex;
      justify-content: center;
      gap: 10px;
    }
    .donation-card button {
      padding: 10px 15px;
      border: 2px solid #fff;
      border-radius: 50px;
      background: transparent;
      color: #fff;
      text-transform: uppercase;
      font-family: 'Roboto', sans-serif;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }
    .donation-card button:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: scale(1.05);
    }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.85);
      justify-content: center;
      align-items: center;
      z-index: 10000;
      animation: fadeIn 0.5s ease;
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    .modal-content {
      background: rgba(50,50,50,0.98);
      padding: 20px;
      border-radius: 10px;
      width: 90%;
      max-width: 600px;
      position: relative;
      animation: slideDown 0.5s ease;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.9);
    }
    @keyframes slideDown {
      from { transform: translateY(-20px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }
    .modal-header h3 {
      font-family: 'Oswald', sans-serif;
      font-size: 1.8rem;
      margin: 0;
      color: #ff9800;
    }
    .modal-close {
      cursor: pointer;
      font-size: 1.5rem;
      color: #fff;
    }
    .modal-body {
      font-family: 'Roboto', sans-serif;
      color: #ccc;
      font-size: 1rem;
      margin-bottom: 15px;
    }
    .modal-body .input-group {
        margin-bottom: 15px;
        position: relative;
        display: block;
    }
    .modal-body .input-group label {
        display: block;
        margin-bottom: 5px;
        font-size: 0.9rem;
        color: #ddd;
        text-align: left;
    }
    .modal-body .input-group i {
        position: absolute;
        top: 65%;
        left: 10px;
        transform: translateY(-50%);
        font-size: 1.2rem;
        color: #fff;
    }
    .modal-body .input-group input,
    .modal-body .input-group textarea,
    .modal-body .input-group select {
        width: 90%;
        padding: 10px 10px 10px 40px; 
        border: 1px solid #555;
        border-radius: 5px;
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
        font-size: 1rem;
    }
    .modal-body .input-group input::placeholder,
    .modal-body .input-group textarea::placeholder {
        color: #aaa;
    }
    .modal-body textarea {
        resize: vertical;
        height: 80px;
    }
    .modal-footer {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
    }
    .modal-footer button {
      padding: 10px 15px;
      border: 2px solid #fff;
      border-radius: 50px;
      background: transparent;
      color: #fff;
      text-transform: uppercase;
      font-family: 'Roboto', sans-serif;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }
    .modal-footer button:hover {
      background: rgba(255,255,255,0.2);
      transform: scale(1.05);
    }
    .payment-tab {
    padding: 10px 15px;
    border: 2px solid #fff;
    border-radius: 50px;
    background: transparent;
    color: #fff;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
    }
    .payment-tab:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: scale(1.05);
    }
    .payment-tab.active {
    background: rgba(255, 255, 255, 0.3);
    transform: scale(1.05);
    }
    select {
    width: 90%;
    padding: 10px 15px;
    border: 1px solid #555;
    border-radius: 5px;
    background: rgba(255, 255, 255, 0.1);
    color: #fff;
    font-size: 1rem;
    transition: background 0.3s ease, border-color 0.3s ease;
    }
    select:focus {
    outline: none;
    background: rgba(255, 255, 255, 0.2);
    border-color: #fff;
    }

    @keyframes fadeInPaymentTab {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
    }
    .payment-tab {
    animation: fadeInPaymentTab 0.5s ease forwards;
    }

  </style>
</head>
<body>
  <div class="donation-header">
    <h1>Make a Difference Today</h1>
    <p>Your contribution can change lives. Choose your donation type and help support local charities with food, money, or clothes.</p>
  </div>

  <div class="donation-types">
    <div class="donation-card" data-type="food">
      <img src="https://juitinitiatives.online/Images/food_donation.jpg" alt="Food Donation">
      <h3>Food Donation</h3>
      <p>
        Help feed those in need by donating surplus food to local charities. Every donation ensures nutritious meals reach vulnerable communities.
      </p>
      <div class="btn-group">
        <button class="donate-btn">Donate Food</button>
        <button class="learn-btn">Learn More</button>
      </div>
    </div>
    <div class="donation-card" data-type="money">
      <img src="https://juitinitiatives.online/Images/cloth_donation.jpg" alt="Money Donation">
      <h3>Money Donation</h3>
      <p>
        Support local charities financially through secure, transparent donations. Your contribution funds essential services and community programs for those in need.
      </p>
      <div class="btn-group">
        <button class="donate-btn">Donate Money</button>
        <button class="learn-btn">Learn More</button>
      </div>
    </div>
    <div class="donation-card" data-type="cloth">
      <img src="https://juitinitiatives.online/Images/money_donation.jpg" alt="Cloth Donation">
      <h3>Cloth Donation</h3>
      <p>
        Donate new or gently used clothes to support community welfare. Your generous contributions provide warmth and comfort while empowering local initiatives.
      </p>
      <div class="btn-group">
        <button class="donate-btn">Donate Cloth</button>
        <button class="learn-btn">Learn More</button>
      </div>
    </div>
  </div>

<script>

  document.querySelectorAll('.donation-card .donate-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      const type = this.closest('.donation-card').getAttribute('data-type');
      if (type === 'food') {
        window.location.href = "donate-food";
      } else if (type === 'money') {
        window.location.href = "donate_money";
      } else if (type === 'cloth') {
        window.location.href = "donate_cloth";
      }
    });
  });

  document.querySelectorAll('.donation-card .learn-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      const type = this.closest('.donation-card').getAttribute('data-type');
      if (type === 'food') {
        window.location.href = "learn_food";
      } else if (type === 'money') {
        window.location.href = "learn_money";
      } else if (type === 'cloth') {
        window.location.href = "learn_cloth";
      }
    });
  });
</script>
