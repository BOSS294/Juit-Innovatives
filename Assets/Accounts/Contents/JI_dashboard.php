<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - JUIT Innovatives</title>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    /* Global Styles */
    body {
      background: #000;
      color: #fff;
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
    }
    /* Dashboard Container */
    .dashboard-container {
      max-width: 1800px;
      margin: 60px auto;
      padding: 40px;
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
    }
    /* Details Column - Remove BG and use border */
    .details-column {
      flex: 1 1 100%;
      background: transparent;
      border: 2px solid #ff9800;
      border-radius: 10px;
      padding: 30px;
      /* Optional: Remove shadow if preferred */
      box-shadow: none;
    }
    /* Profile Section Header */
    .profile-header {
      border-bottom: 2px solid #ff9800;
      margin-bottom: 30px;
      padding-bottom: 15px;
      text-align: center;
    }
    .profile-header .greeting {
      font-size: 1.5rem;
      margin-bottom: 10px;
      color: #ff9800;
    }
    .profile-header h1 {
      font-family: 'Oswald', sans-serif;
      font-size: 2.8rem;
      margin: 0;
      color: #fff;
    }
    .profile-header .profile-subtitle {
      font-size: 1.2rem;
      color: #aaa;
      margin-top: 5px;
    }
    /* User Information */
    .user-info-container {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      margin-bottom: 30px;
    }
    .user-info {
      flex: 1 1 300px;
      background: transparent;
      border: 1px solid #ff9800;
      border-radius: 10px;
      padding: 20px;
      /* Optional shadow removed */
      box-shadow: none;
    }
    .info-group {
      margin-bottom: 15px;
    }
    .info-group label {
      display: block;
      font-weight: bold;
      color: #ff9800;
      margin-bottom: 5px;
    }
    .info-group span {
      font-size: 1rem;
      color: #ddd;
    }
    /* Control Buttons */
    .control-buttons {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      margin-top: 20px;
      justify-content: center!important;
    }
    .control-buttons button {
      padding: 12px 25px;
      border: 2px solid #fff;
      border-radius: 50px;
      background: transparent;
      color: #fff;
      font-family: 'Roboto', sans-serif;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }
    .control-buttons button:hover {
      background: rgba(255,255,255,0.2);
      transform: scale(1.05);
    }
    /* Donate Section */
    .donate-container {
      background: transparent;
      border: 2px solid #ff9800;
      border-radius: 10px;
      padding: 30px;
      text-align: center;
      box-shadow: none;
      margin-top: 30px;
    }
    .donate-container h3 {
      font-family: 'Oswald', sans-serif;
      font-size: 2rem;
      color: #ff9800;
      margin-bottom: 15px;
    }
    .donate-container p {
      font-size: 1rem;
      color: #ccc;
      margin-bottom: 20px;
    }
    .donate-container button {
      padding: 12px 25px;
      border: 2px solid #fff;
      border-radius: 50px;
      background: transparent;
      color: #fff;
      font-family: 'Roboto', sans-serif;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }
    .donate-container button:hover {
      background: rgba(255,255,255,0.2);
      transform: scale(1.05);
    }
    /* Modal Popup Styles */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.8);
      justify-content: center;
      align-items: center;
      z-index: 1200;
      animation: fadeIn 0.5s ease;
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    .modal-content {
      background: transparent;
      border: 2px solid #ff9800;
      padding: 30px;
      border-radius: 10px;
      width: 90%;
      max-width: 600px;
      position: relative;
      animation: slideDown 0.5s ease;
      box-shadow: none;
    }
    @keyframes slideDown {
      from { transform: translateY(-20px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
    .modal-header h3 {
      font-family: 'Oswald', sans-serif;
      font-size: 1.8rem;
      color: #ff9800;
      margin: 0;
    }
    .modal-close {
      cursor: pointer;
      font-size: 1.5rem;
      color: #fff;
    }
    .modal-body {
      font-size: 1rem;
      color: #ccc;
      font-family: 'Roboto', sans-serif;
      margin-bottom: 20px;
    }
    .modal-body .input-group {
      margin-bottom: 15px;
      position: relative;
    }
    .modal-body .input-group label {
      display: block;
      margin-bottom: 5px;
      font-size: 0.9rem;
      color: #ddd;
    }
    .modal-body .input-group i {
      position: absolute;
      top: 50%;
      left: 10px;
      transform: translateY(-50%);
      font-size: 1.2rem;
      color: #fff;
    }
    .modal-body .input-group input,
    .modal-body .input-group textarea,
    .modal-body .input-group select {
      width: 100%;
      padding: 10px 10px 10px 40px;
      border: 1px solid #555;
      border-radius: 5px;
      background: transparent;
      color: #fff;
      font-size: 1rem;
    }
    .modal-footer {
      display: flex;
      justify-content: flex-end;
      gap: 15px;
    }
    .modal-footer button {
      padding: 10px 20px;
      border: 2px solid #fff;
      border-radius: 50px;
      background: transparent;
      color: #fff;
      font-family: 'Roboto', sans-serif;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }
    .modal-footer button:hover {
      background: rgba(255,255,255,0.2);
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="dashboard-container">
    <div class="details-column">
      <div class="profile-header">
        <p class="greeting">Hello, <?php echo $_SESSION['user']['firstName'] ?? 'John'; ?>!</p>
        <h1><?php echo $_SESSION['user']['firstName'] ?? 'John'; ?> <?php echo $_SESSION['user']['lastName'] ?? 'Doe'; ?></h1>
        <p class="profile-subtitle">Welcome to your dashboard</p>
      </div>
      <div class="user-info-container">
        <div class="user-info">
          <div class="info-group">
            <label>First Name:</label>
            <span><?php echo $_SESSION['user']['firstName'] ?? 'John'; ?></span>
          </div>
          <div class="info-group">
            <label>Last Name:</label>
            <span><?php echo $_SESSION['user']['lastName'] ?? 'Doe'; ?></span>
          </div>
        </div>
        <div class="user-info">
          <div class="info-group">
            <label>Phone:</label>
            <span><?php echo $_SESSION['user']['phone'] ?? '+1 234 567 890'; ?></span>
          </div>
          <div class="info-group">
            <label>Email:</label>
            <span><?php echo $_SESSION['user']['email'] ?? 'example@domain.com'; ?></span>
          </div>
        </div>
        <div class="user-info">
          <div class="info-group" style="width: 100%;">
            <label>Address:</label>
            <span><?php echo $_SESSION['user']['address'] ?? '123 Main St, City, Country'; ?></span>
          </div>
        </div>
        <div class="control-buttons">
          <button onclick="openControlPopup('password')">Change Password</button>
          <button onclick="openControlPopup('address')">Change Address</button>
          <button onclick="openControlPopup('phone')">Change Phone</button>
          <button onclick="openControlPopup('logout')">Log Out</button>
        </div>
      </div>
      <div class="donate-container">
        <h3>Start Donating Now</h3>
        <p>Every contribution helps build a better community. Click below to donate and make a difference!</p>
        <button onclick="openDonationPopup()">Donate Now</button>
      </div>
    </div>
  </div>
  
  <!-- Modal Popup -->
  <div class="modal" id="actionModal">
    <div class="modal-content">
      <div class="modal-header">
        <h3 id="modalTitle">Title</h3>
        <span class="modal-close" onclick="closeActionModal()">&times;</span>
      </div>
      <div class="modal-body" id="modalBody">
      </div>
      <div class="modal-footer">
        <button id="modalActionBtn">Change</button>
        <button onclick="closeActionModal()">Cancel</button>
      </div>
    </div>
  </div>
  
  <script>
    function openDonationPopup() {
      window.location.href = 'https://juitinitiatives.online';
    }
    function openControlPopup(type) {
      const modal = document.getElementById('actionModal');
      const modalTitle = document.getElementById('modalTitle');
      const modalBody = document.getElementById('modalBody');
      const modalActionBtn = document.getElementById('modalActionBtn');
      if (type === 'logout') {
        modalTitle.textContent = "Confirm Logout";
        modalBody.innerHTML = "<p>Are you sure you want to log out?</p>";
        modalActionBtn.textContent = "Confirm Logout";
        modalActionBtn.onclick = function() { 
          alert("Logging out...");
          closeActionModal();
        };
      } else if (type === 'password') {
        modalTitle.textContent = "Change Password";
        modalBody.innerHTML = `
          <div class="input-group">
            <label for="current-password"><i class="material-icons">lock</i> Current Password</label>
            <input type="password" id="current-password" placeholder="Current Password">
          </div>
          <div class="input-group">
            <label for="new-password"><i class="material-icons">lock_open</i> New Password</label>
            <input type="password" id="new-password" placeholder="New Password">
          </div>
          <div class="input-group">
            <label for="confirm-new-password"><i class="material-icons">lock</i> Confirm New Password</label>
            <input type="password" id="confirm-new-password" placeholder="Confirm New Password">
          </div>
        `;
        modalActionBtn.textContent = "Change Password";
        modalActionBtn.onclick = function() { 
          alert("Password changed (Under Development).");
          closeActionModal();
        };
      } else if (type === 'address') {
        modalTitle.textContent = "Change Address";
        modalBody.innerHTML = `
          <div class="input-group">
            <label for="new-address"><i class="material-icons">home</i> New Address</label>
            <input type="text" id="new-address" placeholder="Enter new address" value="<?php echo $_SESSION['user']['address'] ?? ''; ?>">
          </div>
        `;
        modalActionBtn.textContent = "Change Address";
        modalActionBtn.onclick = function() { 
          alert("Address changed (Under Development).");
          closeActionModal();
        };
      } else if (type === 'phone') {
        modalTitle.textContent = "Change Phone";
        modalBody.innerHTML = `
          <div class="input-group">
            <label for="new-phone"><i class="material-icons">phone</i> New Phone Number</label>
            <input type="text" id="new-phone" placeholder="Enter new phone number" value="<?php echo $_SESSION['user']['phone'] ?? ''; ?>">
          </div>
        `;
        modalActionBtn.textContent = "Change Phone";
        modalActionBtn.onclick = function() { 
          alert("Phone number changed (Under Development).");
          closeActionModal();
        };
      }
      modal.style.display = 'flex';
    }
    function closeActionModal() {
      document.getElementById('actionModal').style.display = 'none';
    }
  </script>
</body>
</html>
