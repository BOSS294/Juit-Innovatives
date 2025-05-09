<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <style>
    .contact-us-section {
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px 20px;
      color: #fff;
      text-align: center;
      border: 1px dotted gray;
    }
    .contact-header {
      margin-bottom: 20px;
    }
    .contact-header h1 {
      font-size: 3rem;
      margin-bottom: 10px;
      color: #ff9800;

    }
    .contact-header p {
      font-size: 1.2rem;
      max-width: 800px;
      margin: 0 auto 40px;
    }
    .contact-content {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      border: 1px dotted gray;
      padding: 20px;
    }
    .contact-left, .contact-right {
      flex: 1 1 45%;
      padding: 20px;
    }
    .contact-left {
      text-align: left;
      border-right: 1px dotted gray;
    }
    .contact-left h2, .contact-left h3 {
      margin-top: 20px;
    }
    .contact-left ul {
      list-style: none;
      padding: 0;
    }
    .contact-left li {
      margin-bottom: 10px;
    }
    .social-icons {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      margin-top: 10px;
    }
    .social-icon {
      background: #000;
      border: 1px dotted gray;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
    }
    .contact-right form {
      text-align: left;
    }
    .contact-right h2 {
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 20px;
      position: relative;
    }
    .form-group input, .form-group select, .form-group textarea {
      width: 100%;
      padding: 10px;
      background: transparent;
      border: 1px dotted gray;
      color: #fff;
      font-size: 1rem;
      outline: none;
    }
    .form-group textarea {
      resize: vertical;
      min-height: 150px;
      padding-bottom: 30px;
    }
    .char-counter {
      position: absolute;
      bottom: 5px;
      right: 10px;
      font-size: 0.8rem;
      color: #ccc;
    }
    .contact-right button {
      padding: 10px 20px;
      border: 1px dotted gray;
      background: transparent;
      color: #fff;
      cursor: pointer;
      font-size: 1rem;
      transition: background 0.3s ease;
    }
    .contact-right button:hover {
      background: rgba(255,255,255,0.1);
    }
    @media (max-width: 768px) {
      .contact-content {
        flex-direction: column;
      }
      .contact-left, .contact-right {
        flex: 1 1 100%;
        border-right: none;
        padding: 10px;
      }
      .contact-left {
        border-bottom: 1px dotted gray;
      }
    }
  </style>
</head>

<div class="contact-us-section">
  <div class="contact-header">
    <h1>Contact Us</h1>
    <p>Please reach out to us for any queries or assistance. We're here to help you make a difference.</p>
  </div>
  <div class="contact-content">
    <div class="contact-left">
      <h2>Why Contact Us</h2>
      <p>
        We are a dedicated charity committed to transparency and impactful change. Your queries help us improve and serve you better.
      </p>
      <h3>Call Us Now</h3>
      <ul class="phones">
          <!-- Phone numbers will be populated here -->
      </ul>
      <h3>Email Us</h3>
      <ul class="emails">
          <!-- Emails will be populated here -->
      </ul>

    </div>
    <div class="contact-right">
      <h2>Send Us A Message</h2>
      <form>
        <div class="form-group">
          <input type="text" placeholder="Full Name" required>
        </div>
        <div class="form-group">
          <select required>
            <option value="" disabled selected>Select Subject</option>
            <option value="donation">Donation Inquiry</option>
            <option value="volunteer">Volunteer Opportunity</option>
            <option value="general">General Query</option>
            <option value="feedback">Feedback</option>
          </select>
        </div>
        <div class="form-group">
          <textarea id="message" maxlength="500" placeholder="Write your message here..." required></textarea>
          <div class="char-counter" id="charCounter">0/500</div>
        </div>
        <div class="form-group">
          <input type="email" placeholder="Email" required>
        </div>
        <div class="form-group">
          <input type="tel" placeholder="Phone Number" required>
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>
</div>

<script>
  const textarea = document.getElementById('message');
  const counter = document.getElementById('charCounter');

  textarea.addEventListener('input', () => {
    const len = textarea.value.length;
    counter.textContent = len + '/500';
  });

  document.addEventListener('DOMContentLoaded', function(){
    fetch('https://juitinitiatives.online/Assets/Website/Processors/process_contact.php')
      .then(response => response.json())
      .then(data => {
        const phoneList = document.querySelector('.contact-left ul.phones');
        const emailList = document.querySelector('.contact-left ul.emails');
  
        if(phoneList) phoneList.innerHTML = '';
        if(emailList) emailList.innerHTML = '';
  
        data.phones.forEach(phone => {
          const li = document.createElement('li');
          li.textContent = phone.value; 
          phoneList.appendChild(li);
        });
  
        data.emails.forEach(email => {
          const li = document.createElement('li');
          li.textContent = email.value; 
          emailList.appendChild(li);
        });
  

      })
      .catch(error => console.error('Error fetching contact info:', error));
  
    const form = document.querySelector('.contact-right form');
    form.addEventListener('submit', function(e) {
      e.preventDefault();
  
      const fullName = form.querySelector('input[type="text"]').value;
      const subject = form.querySelector('select').value;
      const message = form.querySelector('textarea').value;
      const email = form.querySelector('input[type="email"]').value;
      const phone = form.querySelector('input[type="tel"]').value;
  
      const postData = { full_name: fullName, subject: subject, message: message, email: email, phone: phone };
  
      fetch('https://juitinitiatives.online/Assets/Website/Processors/process_contact.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(postData)
      })
      .then(response => response.json())
      .then(result => {
        if(result.success) {
          showToast('Message sent successfully! Reference ID: ' + result.msgid,'success');
          form.reset();
          // Reset the character counter for the message textarea
          document.getElementById('charCounter').textContent = '0/500';
        } else {
          showToast('Error sending message: ' + result.error,'error');
        }
      })
      .catch(error => console.error('Error sending message:', error));
    });
  });
  

</script>
