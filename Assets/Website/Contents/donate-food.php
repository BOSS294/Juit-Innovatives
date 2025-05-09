<head>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <style>
    /* —— Layout & Typography —— */
    .food-donation { max-width:1200px; margin:0 auto; padding:40px 20px; font-family:'Montserrat'; color:#fff; position: relative; }
    .food-donation h2 { font-family:'Oswald'; color:#ff9800; font-size:3rem; margin-bottom:10px; }
    .food-donation p.intro { font-size:1.2rem; color:#ccc; margin-bottom:30px; }


    /* Main sections layout: align items at start */
    .fd-main { display:flex; gap:40px; flex-wrap:wrap; margin-bottom:60px; align-items:flex-start; }
    .fd-main .left, .fd-main .right { flex:1; min-width:300px; }
    .section-heading { font-family:'Oswald'; color:#ff9800; font-size:2rem; margin:0 0 8px; }
    .section-desc { font-size:1rem; color:#ccc; margin:0 0 20px; }

    .donation-box { background:rgba(50,50,50,.9); border:1px solid #333; border-radius:10px; padding:20px; box-shadow:0 4px 15px rgba(0,0,0,.7); }

    /* —— Circular Progress —— */
    .progress-container { position: relative; width:200px; height:200px; margin:0 auto 50px; }
    .progress-container svg { transform: rotate(-90deg); width:100%; height:100%; }
    .progress-container circle { fill:none; stroke-width:14; }
    .progress-bg { stroke:red; stroke-dasharray:565; } /* circumference = 2πr, r=90 → ~565 */
    .progress-bar { stroke:limegreen; stroke-dasharray:0 565; transition: stroke-dasharray 1.5s ease; }

    .donation-count { position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); font-size:2.9rem; font-weight:bold; margin:0; }
    .donation-count .given { color:red; }
    .donation-count .separator { color:#fff; font-size:1.9rem; }
    .donation-count .goal  { color:limegreen; font-size: 2.5rem!important; }

    .donation-progress-text { text-align:center; font-size:1.8rem; color:#ccc; margin-top:10px; }
    .donation-progress-text .colored { color:red; font-weight:bold; }
    .donation-progress-text .colored:hover { text-decoration:underline; cursor:pointer; }
    .donation-form { display:flex; flex-direction:column; }
    .donation-form label { margin-top:15px; margin-bottom:5px; font-size:0.9rem; color:#ccc; }
    .donation-form input, .donation-form textarea {
      width:95%; padding:10px; border:1px solid #555; border-radius:4px; background:#111; color:#fff;
      transition: border-color .3s, box-shadow .3s;
      font-size:1rem;
    }
    .donation-form input:focus, .donation-form textarea:focus {
      border-color:#ff9800; box-shadow:0 0 8px rgba(255,152,0,.6); outline:none;
    }
    .donate-btn {
      margin-top:20px; padding:12px 24px; border:2px solid #ff9800; border-radius:50px; background:transparent;
      color:#ff9800; text-transform:uppercase; cursor:pointer; transition: background .3s, transform .3s;
      animation: pulse 2s infinite;
    }
    .donate-btn:hover { background:rgba(255,152,0,.2); transform:scale(1.05); }

    @keyframes pulse {
      0%,100% { box-shadow:0 0 0 rgba(255,152,0,0); }
      50% { box-shadow:0 0 10px rgba(255,152,0,0.7); }
    }

    /* —— How It Works —— */
    .how-it-works { margin-bottom:60px; }
    .how-it-works h3 { font-family:'Oswald'; font-size:2.5rem; color:#ff9800; margin-bottom:8px; }
    .how-it-works p.desc { font-size:1rem; color:#ccc; margin-bottom:20px; }
    .cards-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); gap:20px; }
    .how-card { background:rgba(50,50,50,.9); border:1px solid #333; border-radius:10px; padding:20px; box-shadow:0 4px 15px rgba(0,0,0,.7); transition: transform .3s; }
    .how-card:hover { transform: perspective(600px) rotateX(8deg) rotateY(-8deg); }
    .how-card .icon-title { display:flex; align-items:center; margin-bottom:10px; }
    .how-card .material-icons { color:#ff9800; margin-right:8px; }
    .how-card h4 { font-family:'Oswald'; font-size:1.3rem; color:#ff9800; margin:0; }
    .how-card p { font-size:0.9rem; color:#ccc; margin:8px 0 0; }


  </style>
</head>

<body>

  <div class="food-donation">
    <h2>Food Donation Drive</h2>
    <p class="intro">Join hands to feed the hungry. Every meal you donate brings hope and relief.</p>

    <div class="fd-main">
      <div class="left donation-box">
        <h3 class="section-heading">Donation Progress</h3>
        <p class="section-desc">Track how many meals we've collected versus our target.</p>
        <div class="progress-container">
          <svg>
            <circle class="progress-bg" cx="100" cy="100" r="90"/>
            <circle class="progress-bar" cx="100" cy="100" r="90"/>
          </svg>
          <div class="donation-count">
            <span class="given">10</span><span class="separator">/</span><span class="goal">500</span>
          </div>
        </div>
        <div class="donation-progress-text">We still have to feed <strong class="colored">490</strong> hungry people!</div>
      </div>

      <div class="right donation-box donation-form">
        <h3 class="section-heading">Make a Donation</h3>
        <p class="section-desc">Your contribution helps feed families in need.</p>
        <label for="item">What to donate?*</label>
        <input type="text" id="item" placeholder="e.g. Rice, Vegetables" required>
        <label for="persons">Number of people?*</label>
        <input type="number" id="persons" placeholder="e.g. 50, 100" required>
        <label for="notes">Extra Notes (optional)</label>
        <textarea id="notes" rows="3" maxlength="500" placeholder="Any special instructions..."></textarea>
        <button class="donate-btn">Donate Now</button>
      </div>
    </div>

    <section class="how-it-works">
      <h3>How Food Donation Works</h3>
      <p class="desc">Our 6-step process turns your generosity into actual meals.</p>
      <div class="cards-grid">
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">food_bank</span><h4>1. You Donate</h4></div>
          <p>Select items and quantities you wish to contribute.</p>
        </div>
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">inventory</span><h4>2. We Collect</h4></div>
          <p>Volunteers pick up your donations safely.</p>
        </div>
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">kitchen</span><h4>3. We Cook</h4></div>
          <p>Meals are prepared under hygienic conditions.</p>
        </div>
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">local_shipping</span><h4>4. We Deliver</h4></div>
          <p>Fresh meals reach shelters and families promptly.</p>
        </div>
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">emoji_people</span><h4>5. Community</h4></div>
          <p>Your gift restores dignity and hope.</p>
        </div>
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">thumb_up</span><h4>6. Feedback</h4></div>
          <p>Receive impact reports and success stories.</p>
        </div>
      </div>
    </section>

  </div>

  <script>
 
    window.addEventListener('load', () => {
      const bar = document.querySelector('.progress-bar');
      const percent = 10/500;
      const circumference = 2 * Math.PI * 90;

      bar.style.strokeDasharray = `0 ${circumference}`;
      setTimeout(() => {
        const dash = percent * circumference;
        bar.style.strokeDasharray = `${dash} ${circumference - dash}`;
      }, 100);
    });
  </script>
</body>
