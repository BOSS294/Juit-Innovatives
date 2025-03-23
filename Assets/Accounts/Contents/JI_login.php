<head>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    .JI_login {
      width: 800px;
      margin: 180px auto;
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
     .nav-logo-2 {
      position: relative;
      font-family: 'Playfair Display', serif;
      font-size: 1.8rem;
      font-weight: 700;
      letter-spacing: 1px;
      color: #fff;
      overflow: hidden;
      margin-bottom: 10px;
    }
    @keyframes slideIn {
      from { transform: translateY(-50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    .login-left {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 1rem;
    }
    .login-left h2 {
      font-size: 2.2rem;
      font-weight: 700;
      text-align: left;
      margin-bottom: 1rem;
      color: #ff9800;
    }
    .login-left p.desc {
      font-size: 1rem;
      color: #ccc;
      text-align: left;
      line-height: 1.4;
      margin: 0;
    }
    .login-right {
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
    .right-heading .welcome {
      color: #e91e63; 
    }
    .right-heading .back {
      color: #03a9f4; 
    }
    .login-right form {
      width: 100%;
    }
    .login-right label {
      display: block;
      margin-bottom: 0.3rem;
      font-size: 0.95rem;
    }
    .login-right input[type="email"],
    .login-right input[type="password"],
    .login-right input[type="text"] {
      width: 90%;
      padding: 0.7rem 3rem 0.7rem 0.7rem; 
      margin-bottom: 1rem;
      border: 1px solid #555;
      border-radius: 5px;
      background: rgba(255, 255, 255, 0.1);
      color: #fff;
      font-size: 1rem;
    }
    .login-right input[type="email"]::placeholder,
    .login-right input[type="password"]::placeholder,
    .login-right input[type="text"]::placeholder {
      color: #aaa;
    }
    .login-right input[type="password"] {
      -webkit-text-security: '*';
    }
    .password-container {
      position: relative;
    }
    .password-container .toggle-password {
      position: absolute;
      top: 39%;
      right: 0.1rem;
      transform: translateY(-50%);
      cursor: pointer;
      color: #aaa;
      font-size: 1.2rem;
      user-select: none;
    }
    .login-right button {
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
      margin-left: 10px;
    }
    .login-right button:hover {
      background-color: #e6e6e6;
    }
    .login-right button:active {
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
  <div class="JI_login">
    <div class="login-left">
    <div class="nav-logo-2">JUIT INNOVATIVES</div>
      <p class="desc">
        Juit Innovatives is a transparent charity platform dedicated to connecting donors with local charities for food, money, and clothes donations. Our mission is to provide secure, open, and effective management of charitable contributions, ensuring complete transparency and maximum impact. Join us to make a difference and contribute to building a better world.
      </p>
    </div>
    <div class="login-right">
      <h2 class="right-heading">
        <span class="welcome">Welcome</span> <span class="back">Back</span>
      </h2>
      <form>
        <label for="email">Email ID</label>
        <input type="email" id="email" placeholder="Enter your email" required>
        
        <label for="password">Password</label>
        <div class="password-container">
          <input type="password" id="password" placeholder="Enter your password" required>
          <span class="toggle-password" onclick="togglePassword()">
            <i class="material-icons">visibility</i>
          </span>
        </div>
        
        <button type="submit">Login</button>
      </form>
      <div class="login-redirect">
        Don't have an account? <a href="">Register now</a>
      </div>
    </div>
  </div>

  <script>
    function togglePassword() {
      var pwdInput = document.getElementById("password");
      var toggleIcon = document.querySelector(".toggle-password i");
      if (pwdInput.type === "password") {
        pwdInput.type = "text";
        toggleIcon.textContent = "visibility_off";
      } else {
        pwdInput.type = "password";
        toggleIcon.textContent = "visibility";
      }
    }


  document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('../Processors/login-endpoint.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      showToast(data.message, data.status);
      if (data.status === 'success') {
        window.location.href = 'dashboard.html';
      }
    })
    .catch(error => {
      console.error('Error:', error);
      showToast('An unexpected error occurred. Please try again.', 'error');
    });
  });
 
  </script>
</body>
