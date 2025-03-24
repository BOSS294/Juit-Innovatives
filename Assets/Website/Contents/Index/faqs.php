<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    .faqs {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 30px;
      border: 1px dotted #1a1a1a;
      border-radius: 12px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
      max-width: 1200px;
      margin: 40px auto;
    }
    /* Section Header */
    .section-header {
      width: 100%;
      text-align: center;
      margin-bottom: 30px;
    }
    .section-header h1 {
      font-size: 2.5rem;
      color: #ff9800;
      font-family: 'Oswald', sans-serif;
      margin-bottom: 10px;
    }
    .section-header p {
      font-size: 1.2rem;
      color: #ccc;
      font-family: 'Roboto', sans-serif;
      margin: 0 auto 40px;
      max-width: 800px;
    }
    /* Left Side */
    .faqs-left {
      flex: 1;
      margin-right: 20px;
    }
    .faqs-header-small {
      font-size: 1.3rem;
      color: #ff9800;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .faqs-header-large {
      font-size: 1.9rem;
      color: #ffffff;
      font-weight: 700;
      margin-bottom: 40px;
    }
    .faqs-container {
      margin-bottom: 20px;
    }
    .faq-card {
      position: relative;
      padding: 15px 15px 15px 20px;
      border: 1px solid #444;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.4);
      border-radius: 8px;
      margin-bottom: 10px;
      background-color: #2a2a2a;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .faq-card:hover {
      background-color: #333;
    }
    .faq-question {
      font-size: 16px;
      font-weight: bold;
      color: #ff9800;
    }
    .faq-answer {
      margin-top: 10px;
      font-size: 14px;
      color: #ccc;
      display: none;
      max-height: 0;
      width: 90%;
      overflow: hidden;
      transition: all 0.3s ease;
    }
    .faq-card.active .faq-answer {
      display: block;
      max-height: 200px;
    }
    .faq-icon {
      font-size: 20px;
      color: #ff9800;
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
      transition: transform 0.3s ease;
    }
    .faq-card.active .faq-icon {
      transform: rotate(45deg);
    }
    /* Buttons */
    .buttons, .cta-container {
      display: flex;
      gap: 10px;
      margin-top: 20px;
      justify-content: center;
    }
    .button {
      display: inline-block;
      padding: 10px 20px;
      border: 2px solid #fff;
      border-radius: 50px;
      background: transparent;
      color: #fff;
      text-transform: uppercase;
      font-family: 'Roboto', sans-serif;
      font-size: 1rem;
      letter-spacing: 1px;
      transition: background 0.3s ease, transform 0.3s ease;
      text-decoration: none;
    }
    .button:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: scale(1.05);
    }
    .button-orange {
      background: linear-gradient(135deg, #ff9800, #ffb74d);
      border: none;
    }
    .button-orange:hover {
      background: linear-gradient(135deg, #ffb74d, #ff9800);
    }
    .button-outline {
      background-color: transparent;
      color: #ff9800;
      border: 2px solid #ff9800;
    }
    .button-outline:hover {
      background-color: #ff9800;
      color: #fff;
    }
    /* Right Side */
    .faqs-right {
      flex: 1;
    }
    .price-guide-header {
      font-size: 27px;
      color: #ffffff;
      font-weight: bolder;
      margin-bottom: 10px;
      text-align: center;
      font-family: 'Oswald', sans-serif;
    }
    .price-guide-description {
      font-size: 17px;
      font-weight: 100;
      width: 80%;
      color: #ccc;
      margin: 0 auto 20px;
      text-align: center;
      font-family: 'Roboto', sans-serif;
    }
    /* Responsive Styles */
    @media (max-width: 1024px) {
      .faqs {
        flex-direction: column;
        padding: 20px;
      }
      .faqs-left {
        margin-right: 0;
      }
      .faqs-header-large {
        font-size: 1.6rem;
        margin-bottom: 30px;
      }
      .faqs-header-small {
        font-size: 1.1rem;
        margin-bottom: 5px;
      }
      .faq-card {
        padding: 15px;
      }
      .faq-question {
        font-size: 14px;
      }
      .faq-answer {
        font-size: 13px;
      }
      .buttons, .cta-container {
        flex-direction: column;
        gap: 15px;
      }
      .price-guide-description {
        width: 100%;
        font-size: 15px;
      }
    }
    @media (max-width: 480px) {
      .faqs {
        padding: 15px;
      }
      .faqs-header-large {
        font-size: 1.4rem;
      }
      .faqs-header-small {
        font-size: 1rem;
      }
      .faq-card {
        padding: 10px;
        font-size: 12px;
      }
      .faq-icon {
        font-size: 18px;
        right: 10px;
      }
      .faq-answer {
        font-size: 12px;
      }
      .price-guide-header {
        font-size: 22px;
      }
      .price-guide-description {
        font-size: 14px;
      }
      .button {
        font-size: 12px;
        padding: 8px 12px;
      }
    }
  </style>
</head>
<body>
  <div class="faqs" >
    <div class="section-header">
      <h1 class="faqs-header-large">Frequently Asked Questions</h1>
      <p class="description">Your questions, answered. Learn how you can make a difference with Juit Innovatives through transparent charity and innovative donation options.</p>
    </div>
    
    <div class="faqs-left">
    <div class="faqs-container">
      <!-- FAQ cards will be dynamically populated here -->
    </div>

      <div class="buttons">
        <a href="https://juitinitiatives.online/register" class="button button-orange">
          Register Now <i class="fa-solid fa-arrow-right"></i>
        </a>
        <a href="https://juitinitiatives.online/about-us" class="button button-outline">
          Learn More
        </a>
      </div>
    </div>

    <div class="faqs-right">
      <div class="price-guide-header">Support Our Mission</div>
      <div class="price-guide-description">
        At Juit Innovatives, every donation fuels change. Your contributions help us provide essential aid and empower local communities to thrive.
      </div>
      <div class="cta-container">
        <a href="https://juitinitiatives.online/register" class="button button-orange">
          Register Now
        </a>
        <a href="https://juitinitiatives.online/login" class="button button-outline">
          Donate Now
        </a>
      </div>
    </div>
  </div>

  <script>
    fetch('https://juitinitiatives.online/Assets/Website/Processors/fetch_faqs.php')
     .then(response => response.json())
     .then(data => {
       const container = document.querySelector('.faqs-container');
       container.innerHTML = '';
       data.forEach((faq, index) => {
         const card = document.createElement('div');
         card.className = 'faq-card';
         card.setAttribute('data-aos', 'fade-up');
         card.setAttribute('data-aos-delay', (100 * (index + 1)).toString());
         card.innerHTML = `
           <span class="faq-question">${faq.question}</span>
           <i class="faq-icon fa-solid fa-plus"></i>
           <div class="faq-answer">${faq.answer}</div>
         `;
         container.appendChild(card);
       });
       if (typeof AOS !== 'undefined') {
         AOS.refresh();
       }
    })
    .catch(error => console.error('Error fetching FAQs:', error));

    function toggleFaq(element) {
      const isActive = element.classList.contains('active');
      const allCards = document.querySelectorAll('.faq-card');
      allCards.forEach(card => {
        card.classList.remove('active');
        card.querySelector('.faq-answer').style.maxHeight = null;
      });
      if (!isActive) {
        element.classList.add('active');
        const answer = element.querySelector('.faq-answer');
        answer.style.maxHeight = answer.scrollHeight + "px";
      }
    }
  </script>
</body>
