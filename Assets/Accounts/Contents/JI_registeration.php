<head>

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    .JI_register {
      width: 1200px;
      margin: 130px auto;
      padding: 2rem;
      background: rgba(50, 50, 50, 0.9);
      border: 1px solid #444;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.7);
      backdrop-filter: blur(5px);
      color: #fff;
      font-family: 'Roboto', sans-serif;
      animation: slideIn 1s ease-out;
      display: flex;
      gap: 2rem;
    }

    @keyframes slideIn {
      from {
        transform: translateY(-50px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .register-left {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 1rem;
    }

    .register-left .nav-logo-2 {
      font-family: 'Playfair Display', serif;
      font-size: 1.8rem;
      font-weight: 700;
      letter-spacing: 1px;
      color: #fff;
      margin-bottom: 10px;
    }

    .register-left h2 {
      font-size: 2.2rem;
      font-weight: 700;
      text-align: left;
      margin-bottom: 1rem;
      color: #ff9800;
    }

    .register-left p.desc {
      font-size: 1rem;
      color: #ccc;
      text-align: left;
      line-height: 1.4;
      margin: 0;
    }

    .register-right {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 1rem;
    }

    .right-heading {
      font-size: 2.2rem;
      font-weight: 700;
      text-align: left;
      margin-bottom: 1rem;
    }

    .right-heading .create {
      color: #4caf50;
    }

    .right-heading .account {
      color: #03a9f4;
    }

    .register-right form {
      width: 100%;
    }

    .register-right label {
      display: block;
      margin-bottom: 0.3rem;
      font-size: 0.95rem;
    }

    .row {
      display: flex;
      gap: 1rem;
      margin-bottom: 1rem;
    }

    .row .field {
      flex: 1;
    }

    .register-right input[type="text"],
    .register-right input[type="email"],
    .register-right input[type="password"] {
      width: 90%;
      padding: 0.7rem 1rem;
      border: 1px solid #555;
      border-radius: 5px;
      background: rgba(255, 255, 255, 0.1);
      color: #fff;
      font-size: 1rem;
    }

    .register-right input::placeholder {
      color: #aaa;
    }

    .register-right input[type="password"] {
      -webkit-text-security: '*';
    }

    .password-container {
      position: relative;
    }

    .password-container .toggle-password {
      position: absolute;
      top: 50%;
      right: 0.7rem;
      transform: translateY(-50%);
      cursor: pointer;
      color: #aaa;
      font-size: 1.2rem;
      user-select: none;
    }

    .register-right button {
      width: 100%;
      padding: 0.9rem;
      border: none;
      border-radius: 5px;
      background-color: #fff;
      color: #000;
      font-size: 1rem;
      font-weight: 700;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.1s ease;
      margin-top: 1rem;
    }

    .register-right button:hover {
      background-color: #e6e6e6;
    }

    .register-right button:active {
      transform: scale(0.98);
    }

    .login-redirect {
      margin-top: 1rem;
      font-size: 0.95rem;
      text-align: center;
    }

    .login-redirect a {
      color: #03a9f4;
      text-decoration: none;
      font-weight: 700;
    }

    .login-redirect a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="JI_register">

    <div class="register-left">
      <div class="nav-logo-2">JUIT INNOVATIVES</div>
      <h2>Join Us Today</h2>
      <p class="desc">
        Juit Innovatives is a transparent charity platform dedicated to connecting donors with local charities for food,
        money, and clothes donations. Our mission is to provide secure, open, and effective management of charitable
        contributions, ensuring complete transparency and maximum impact. Become a member and help us build a better
        world.
      </p>
    </div>

    <div class="register-right">
      <h2 class="right-heading">
        <span class="create">Create</span> <span class="account">Account</span>
      </h2>
      <form>

        <div class="row">
          <div class="field">
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" placeholder="John" required>
          </div>
          <div class="field">
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" placeholder="Doe" required>
          </div>
        </div>

        <div class="row">
          <div class="field">
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" placeholder="+1 234 567 890" required>
          </div>
          <div class="field">
            <label for="reg-email">Email ID</label>
            <input type="email" id="reg-email" placeholder="example@domain.com" required>
          </div>
        </div>

        <div class="row">
          <div class="field" style="flex: 1;">
            <label for="address">Address</label>
            <input type="text" id="address" placeholder="e.g., 123 Main St, City, Country" required>
          </div>
        </div>

        <div class="row">
          <div class="field">
            <label for="reg-password">Password</label>
            <div class="password-container">
              <input type="password" id="reg-password" placeholder="Enter password" required>
              <span class="toggle-password" onclick="toggleRegPassword('reg-password', this)">
                <i class="material-icons">visibility</i>
              </span>
            </div>
          </div>
          <div class="field">
            <label for="confirm-password">Confirm Password</label>
            <div class="password-container">
              <input type="password" id="confirm-password" placeholder="Confirm password" required>
              <span class="toggle-password" onclick="toggleRegPassword('confirm-password', this)">
                <i class="material-icons">visibility</i>
              </span>
            </div>
          </div>
        </div>
        <button type="submit">Register</button>
      </form>
      <div class="login-redirect">
        Already have an account? <a href="https://juitinitiatives.online/login">Login now</a>
      </div>
    </div>
  </div>
  
  <script>
    function toggleRegPassword(fieldId, toggleElement) {
      var pwdInput = document.getElementById(fieldId);
      var toggleIcon = toggleElement.querySelector("i");
      if (pwdInput.type === "password") {
        pwdInput.type = "text";
        toggleIcon.textContent = "visibility_off";
      } else {
        pwdInput.type = "password";
        toggleIcon.textContent = "visibility";
      }
    }
  const form = document.querySelector('.register-right form');
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(form);
    
    fetch('../Processors/register-endpoint.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      showToast(data.message, data.status);
      if(data.status === 'success') {
        form.reset();
      }
    })
    .catch(error => {
      console.error('Error:', error);
      showToast('An unexpected error occurred. Please try again.', 'error');
    });
  });
  </script>
</body>