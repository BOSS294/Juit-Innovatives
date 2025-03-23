<!--
  Dashboard Page for Juit Innovatives

  Version: 1.0.0
  Last Updated: 2025-03-23

  Description:
  This module creates the dashboard page where the user sees their profile and details.
  The page has a full-width (max 1800px) container split into two columns:
    • Left Column: Displays the user's profile picture in a circular, green-highlighted container with a shining animation.
      On hover over the profile picture, a popup appears to let the user change their profile photo. The popup includes a title,
      a description (on the left), a close icon (on the right), and a dotted square (with a plus sign) that allows file selection
      (via drag & drop or clicking to open the file explorer).
    • Right Column: Shows user details including First Name + Last Name, Phone and Email (side by side), and Address below.
      At the bottom of the right column, a container (square) prompts the user to "Start Donating Now" with a tagline and a "Donate Now" button.
      Below the user details, there are control buttons (Change Password, Change Address, Change Phone, Log Out) that open respective popups.
      Each popup has a header (with a title and a close icon on the right), input fields prefilled with actual data, and a change or confirmation button.
      The Log Out button triggers a confirmation popup with options "Confirm Logout" and "No, don't".
  
  Usage:
  1. Assume that user data is stored in session (e.g., $_SESSION['user'] contains firstName, lastName, phone, email, address, etc.).
  2. Include this markup and script in your dashboard page.
  3. The CSS and JavaScript handle layout, animations, and popup interactions.
-->
<head>

  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    .dashboard-container {
      max-width: 1800px;
      margin: 60px auto;
      display: flex;
      gap: 40px;
      padding: 40px;
    }
    .profile-column {
      flex: 1;
      max-width: 250px;
      text-align: center;
      position: relative;
    }
    .profile-pic {
      width: 250px;
      height: 250px;
      border-radius: 50%;
      border: 5px solid #4caf50;
      margin: 0 auto 20px;
      cursor: pointer;
      animation: pulseShine 3s infinite;
    }
    @keyframes pulseShine {
      0%, 100% { box-shadow: 0 0 15px #4caf50; }
      50% { box-shadow: 0 0 30px #4caf50; }
    }
    .profile-pic-popup {
      display: none;
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(20,20,20,0.95);
      border: 1px dashed #fff;
      border-radius: 10px;
      padding: 20px;
      width: 300px;
      z-index: 1100;
      text-align: left;
    }
    .profile-pic-popup h4 {
      margin: 0 0 10px;
      font-family: 'Oswald', sans-serif;
      font-size: 1.5rem;
      color: #ff9800;
    }
    .profile-pic-popup .close-popup {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
      font-size: 1.5rem;
    }
    .profile-pic-popup .upload-area {
      border: 2px dotted #fff;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      cursor: pointer;
      margin-top: 20px;
    }
    .profile-pic-popup .upload-area:hover {
      background-color: rgba(255,255,255,0.1);
    }
    .details-column {
      flex: 2;
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }
    .user-info-container {
      flex: 2;
      background: rgba(50,50,50,0.9);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 10px 25px rgba(23,23,23,0.8);
    }
    .user-info {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-bottom: 20px;
    }
    .user-info .info-group {
      flex: 1;
      min-width: 200px;
    }
    .info-group label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }
    .info-group span {
      font-size: 1rem;
    }
    .control-buttons {
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
      margin-top: 20px;
    }
    .control-buttons button {
      padding: 10px 20px;
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
    .donate-container {
      flex: 1;
      background: rgba(50,50,50,0.95);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 10px 25px rgba(23,23,23,0.8);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .donate-container h3 {
      font-family: 'Oswald', sans-serif;
      font-size: 2rem;
      margin-bottom: 10px;
      color: #ff9800;
    }
    .donate-container p {
      font-family: 'Roboto', sans-serif;
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
      text-transform: uppercase;
      font-family: 'Roboto', sans-serif;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }
    .donate-container button:hover {
      background: rgba(255,255,255,0.2);
      transform: scale(1.05);
    }
    /* Modal Popup Base Styles */
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
      background: rgba(50,50,50,0.95);
      padding: 20px;
      border-radius: 10px;
      width: 90%;
      max-width: 600px;
      position: relative;
      animation: slideDown 0.5s ease;
      box-shadow: 0 10px 30px rgba(0,0,0,0.9);
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
      background: rgba(255,255,255,0.1);
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
  </style>
</head>
<body>
  <div class="dashboard-container">
    <div class="profile-column">
    <div class="profile-pic" onclick="openProfilePicPopup()" style="background-image: url('<?php echo $_SESSION['user']['userProfile'] ?? 'https://juitinitiatives.online/Images/user.jpg'; ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
        <div class="profile-pic-popup" id="profilePicPopup">
            <h4>Change Profile Photo</h4>
            <span class="close-popup" onclick="closeProfilePicPopup()">&times;</span>
            <p>Upload an image (500 x 500 px, less than 2MB)</p>
            <div class="upload-area" onclick="document.getElementById('profileUpload').click()">
            <i class="material-icons" style="font-size: 3rem;">add</i>
            </div>
            <input type="file" id="profileUpload" accept="image/*" style="display:none" onchange="handleProfileUpload(event)">
        </div>
        </div>

    <div class="details-column">
      <div style="display: flex; gap: 20px; flex-wrap: wrap;">
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
              <span><?php echo $_SESSION['user']['address'] ?? '123 Main St, City, Country'; ?> </span>
              
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
          <button onclick="openDonationPopup() ">Donate Now</button>
        </div>
      </div>
    </div>
  </div>

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
 function openProfilePicPopup() {
  document.getElementById('profilePicPopup').style.display = 'block';
 }
 function closeProfilePicPopup() {
   document.getElementById('profilePicPopup').style.display = 'none';
 }
 function handleProfileUpload(event) {
   const file = event.target.files[0];
   if(file) {
     closeProfilePicPopup();
     showToast("Under Development", "info");
   }
 }
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
       showToast("Logging out...", "info");
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
       showToast("Password changed (Under Development).", "info");
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
       showToast("Address changed (Under Development).", "info");
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
       showToast("Phone number changed (Under Development).", "info");
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
