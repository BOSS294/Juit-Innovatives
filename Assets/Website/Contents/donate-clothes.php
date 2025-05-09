
<head>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <style>
    /* —— Layout & Typography & Animations —— */
    .donate-clothes { 
      max-width:1200px; margin:0 auto; padding:40px 20px; 
      font-family:'Montserrat'; color:#fff; 
      animation: fadeIn 1s ease;
      text-align: left;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .donate-clothes h2 { 
      font-family:'Oswald'; color:#ff9800; font-size:3rem; margin-bottom:10px; 
      animation: slideIn 0.8s ease;
    }
    @keyframes slideIn {
      from { opacity: 0; transform: translateX(-30px); }
      to   { opacity: 1; transform: translateX(0); }
    }
    .donate-clothes p.intro { font-size:1.2rem; color:#ccc; margin-bottom:30px; }

    .cd-main { display:flex; gap:40px; flex-wrap:wrap; justify-content:center; margin-bottom:60px; align-items:flex-start; }
    .cd-main .left, .cd-main .right { flex:1; min-width:300px; animation: fadeIn 1s ease; }
    .section-heading { font-family:'Oswald'; color:#ff9800; font-size:2rem; margin:0 0 8px; }
    .section-desc { font-size:1rem; color:#ccc; margin:0 0 20px; }
    .donation-box { background:rgba(30,30,30,.9); border:1px solid #333; border-radius:10px; padding:20px; box-shadow:0 4px 15px rgba(0,0,0,.7); }

    /* —— Icons Grid & Tooltips —— */
    .icons-grid { display:grid; grid-template-columns:repeat(25,1fr); gap:4px; margin-bottom:20px; justify-content:center; }
    .icon-cloth { position: relative; font-size:18px; color:red; transition: transform .2s, color .3s; cursor: default; }
    .icon-cloth.filled { color:green; transform: scale(1.2); }
    .icon-cloth:hover { transform: scale(1.3); }
    /* Tooltip only for filled icons */
    .icon-cloth.filled:hover::after {
      content: attr(data-tooltip);
      position: absolute; bottom: 110%; left: 50%; transform: translateX(-50%);
      background: rgba(0,0,0,0.8); color: #fff; padding: 4px 8px; border-radius: 4px;
      white-space: nowrap; font-size: 0.75rem;
      pointer-events: none;
    }

    /* —— Progress Text —— */
    .donation-progress-text { 
      font-size:2.2rem; color:#ff9800; margin-top:10px; font-weight:bold;
      text-align:center;
    }
    .donation-progress-text .needed { color:red; font-size:2.5rem!important; }

    /* —— Form with Icons —— */
    .donation-form { display:flex; flex-direction:column; position: relative; }
    .input-group { position: relative; margin-bottom: 20px; text-align:left; }
    .input-group label { display:block; margin-bottom:6px; font-size:0.9rem; color:#ccc; }
    .input-group .material-icons { 
      position: absolute; top: 65%; left: 10px; transform: translateY(-50%);
      color: #ff9800;
    }
    .donation-form input, .donation-form select, .donation-form textarea {
      width:90%; padding:10px 10px 10px 36px; border:1px solid #555; border-radius:4px; 
      background:#111; color:#fff; transition: border-color .3s, box-shadow .3s; font-size:1rem;
    }
    .donation-form input::placeholder, .donation-form textarea::placeholder { color:#777; }
    .donation-form input:focus, .donation-form select:focus, .donation-form textarea:focus {
      border-color:#ff9800; box-shadow:0 0 8px rgba(255,152,0,.6); outline:none;
    }
    .donate-btn {
      margin-top:20px; padding:12px 24px; border:2px solid #ff9800; border-radius:50px; background:transparent;
      color:#ff9800; text-transform:uppercase; cursor:pointer; transition: background .3s, transform .3s;
      animation: pulse 2s infinite;
      align-self:center;
    }
    .donate-btn:hover { background:rgba(255,152,0,.2); transform:scale(1.05); }
    @keyframes pulse { 0%,100% { box-shadow:0 0 0 rgba(255,152,0,0); } 50% { box-shadow:0 0 10px rgba(255,152,0,0.7); } }

    /* —— How It Works —— */
    .how-it-works { margin-bottom:60px; animation: fadeIn 1s ease; }
    .how-it-works h3 { font-family:'Oswald'; font-size:2.5rem; color:#ff9800; margin-bottom:8px; }
    .how-it-works p.desc { font-size:1rem; color:#ccc; margin-bottom:20px; }
    .cards-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); gap:20px; }
    .how-card { background:rgba(30,30,30,.9); border:1px solid #333; border-radius:10px; padding:20px;
                box-shadow:0 4px 15px rgba(0,0,0,.7); transition: transform .3s; }
    .how-card:hover { transform: perspective(600px) rotateX(8deg) rotateY(-8deg); }
    .how-card .icon-title { display:flex; align-items:center; margin-bottom:10px; }
    .how-card .material-icons { color:#ff9800; margin-right:8px; }
    .how-card h4 { font-family:'Oswald'; font-size:1.3rem; color:#ff9800; margin:0; }
    .how-card p { font-size:0.9rem; color:#ccc; margin:8px 0 0; }
  </style>
</head>

<body>
  <div class="donate-clothes">
    <h2>Clothes Donation Drive</h2>
    <p class="intro">Give warmth and dignity—each garment you donate brings comfort to someone in need.</p>

    <div class="cd-main">
      <div class="left donation-box">
        <h3 class="section-heading">Donation Progress</h3>
        <p class="section-desc">Collected items out of our 500‑garment goal.</p>
        <div class="icons-grid"></div>
        <div class="donation-progress-text">
          We still need <span class="needed"></span> more clothes!
        </div>
      </div>

      <div class="right donation-box donation-form">
        <h3 class="section-heading">Make a Donation</h3>
        <p class="section-desc">Your gently‑used or new clothes uplift lives.</p>
        <div class="input-group">
          <label for="count">How many clothes do you want to donate?*</label>
          <span class="material-icons">batch_prediction</span>
          <input type="number" id="count" placeholder="e.g. 10, 20, 30" required>
        </div>
        <div class="input-group">
          <label for="type">What type of clothes?*</label>
          <span class="material-icons">checkroom</span>
          <select id="type" required>
            <option value="" disabled selected>Select type</option>
            <option>Old clothes</option>
            <option>New clothes</option>
          </select>
        </div>
        <div class="input-group">
          <label for="notes">Extra Notes <small>(optional, 0/500)</small></label>
          <span class="material-icons">notes</span>
          <textarea id="notes" rows="3" maxlength="500" placeholder="Any special instructions..."></textarea>
        </div>
        <p class="section-desc" style="font-size:0.8rem;font-weight:bolder; color:red; text-align:center;">
          We already have your registered address. To change it, please note the new address above.
        </p>
        <button class="donate-btn">Donate Now</button>
      </div>
    </div>

    <!-- How it works -->
    <section class="how-it-works">
      <h3>How Clothes Donation Works</h3>
      <p class="desc">Our 6‑step process turns your generosity into real impact.</p>
      <div class="cards-grid">
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">checkroom</span><h4>1. You Donate</h4></div>
          <p>Select quantity and type of garments.</p>
        </div>
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">inventory_2</span><h4>2. We Collect</h4></div>
          <p>Volunteers pick up your clothing safely.</p>
        </div>
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">cleaning_services</span><h4>3. We Clean</h4></div>
          <p>Items are laundered and inspected.</p>
        </div>
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">local_shipping</span><h4>4. We Deliver</h4></div>
          <p>Clothes reach shelters and families promptly.</p>
        </div>
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">emoji_people</span><h4>5. Community</h4></div>
          <p>Your gift restores dignity and hope.</p>
        </div>
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">thumb_up</span><h4>6. Feedback</h4></div>
          <p>Receive impact reports and thank‑you stories.</p>
        </div>
      </div>
    </section>
  </div>

  <script>
    const total = 350, donated = 100;
    const grid = document.querySelector('.icons-grid');
    const donors = ['Alice','Bob','Carol','Dave','Eve','Frank','Grace','Heidi','Ivan','Judy'];
    for (let i = 1; i <= total; i++) {
      const ic = document.createElement('span');
      ic.className = 'material-icons icon-cloth';
      ic.textContent = 'checkroom';
      if(i <= donated) {
        const name = donors[i % donors.length];
        ic.setAttribute('data-tooltip', `Donated by ${name}`);
      }
      grid.appendChild(ic);
    }
    const icons = document.querySelectorAll('.icon-cloth');
    icons.forEach((ic, idx) => {
      if (idx < donated) setTimeout(() => ic.classList.add('filled'), idx * 30);
    });
    document.querySelector('.needed').textContent = total - donated;
  </script>
</body>
</html>
