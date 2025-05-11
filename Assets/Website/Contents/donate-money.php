
<head>

  <!-- Google fonts & icons & GSAP -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
  <style>
    .donate-money { max-width:1200px; margin:0 auto; padding:40px 20px; font-family:'Montserrat'; color:#fff; }
    .donate-money h2 { font-family:'Oswald'; color:#ff9800; font-size:3rem; margin-bottom:5px; }
    .donate-money p.intro { font-size:1.2rem; color:#ccc; margin-bottom:30px; }

    .dm-main { display:flex; gap:40px; flex-wrap:wrap; margin-bottom:60px; }
    .dm-main .left, .dm-main .right { flex:1; min-width:300px; background:rgba(30,30,30,0.9); border:1px solid #333; border-radius:10px; padding:20px; box-shadow:0 4px 15px rgba(0,0,0,0.7); }

    .section-heading { font-family:'Oswald'; color:#ff9800; font-size:2rem; margin-bottom:8px; }
    .section-desc { font-size:1rem; color:#ccc; margin-bottom:20px; }

    /* locker with handle */
    .locker-container { position:relative; width:500px; height:200px; margin:0 auto 20px; }
    .locker-body { width:100%; height:100%; border:2px solid #333; border-radius:10px;  overflow:hidden; }
    .locker-face { position:absolute; top:40%; left:20%; font-size:2.2rem; font-weight:bold; }
    .raised { color:#0f0; } .needed { color:#f00; }

    .progress-text { text-align:center; font-size:1.8rem; color:#ccc; margin-top:10px; }
    .progress-text .raised { color:#0f0; font-weight:bold; }
    .progress-text .needed { color:#f00; font-weight:bold; }

    .donation-form { display:flex; flex-direction:column; gap:20px; }
    .input-group { position:relative; }
    .input-group label { display:block; margin-bottom:5px; font-size:0.9rem; color:#ccc; }
    .input-group .material-icons { position:absolute; top:75%; left:10px; transform:translateY(-65%); color:#ff9800; }
    .input-group input, .input-group select { width:90%; padding:10px 10px 10px 36px; border:1px solid #555; border-radius:4px; background:rgba(20,20,20,0.9); color:#fff; transition:border-color .3s,box-shadow .3s; }
    .input-group input:focus, .input-group select:focus { border-color:#ff9800; box-shadow:0 0 8px rgba(255,152,0,.6); outline:none; }
    .chip-group { display:flex; gap:10px; padding:5px; }
    .chip { padding:6px 12px; background:rgba(50,50,50,0.9); border:1px solid #555; border-radius:20px; cursor:pointer; transition:background .3s,border-color .3s; }
    .chip.selected { background:#ff9800; border-color:#ff9800; color:#111; }
    .row { display:flex; gap:20px; }
    .row .input-group { flex:1; }
    .upi-section { display:flex; gap:30px; align-items:center; }
    .qr-frame { width:150px; height:150px; background:#222; display:flex; align-items:center; justify-content:center; border:2px solid #333; border-radius:10px; }
    .qr-frame img { max-width:100%; max-height:100%; }

    .donate-btn { align-self:center; border:2px solid #ff9800; color:#ff9800; padding:12px 24px; border-radius:50px; background:transparent; cursor:pointer; transition:background .3s,transform .3s; }
    .donate-btn:hover { background:rgba(255,152,0,.2); transform:scale(1.05); }

    /* —— How it works —— */
    .how-it-works { margin-top: 60px; }
    .how-it-works h3 {
      font-family: 'Oswald';
      font-size: 2.5rem;
      color: #ff9800;
      margin-bottom: 8px;
    }
    .how-it-works p.desc { font-size: 1rem; color: #ccc; margin-bottom: 20px; }
    .cards-grid { display: grid; grid-template-columns: repeat(auto-fit,minmax(260px,1fr)); gap: 20px; }
    .how-card {
      background: rgba(30,30,30,0.9);
      border: 1px solid #333;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.7);
      transition: transform .3s;
    }
    .how-card:hover { transform: perspective(600px) rotateX(8deg) rotateY(-8deg); }
    .how-card .icon-title { display: flex; align-items: center; margin-bottom: 10px; }
    .how-card .material-icons { color: #ff9800; margin-right: 8px; }
    .how-card h4 { font-family: 'Oswald'; font-size: 1.3rem; color: #ff9800; margin: 0; }
    .how-card p { font-size: 0.9rem; color: #ccc; margin: 8px 0 0; }
  </style>
</head>
<body>
  <div class="donate-money">
    <h2>Money Donation Drive</h2>
    <p class="intro">Support our cause—every rupee you donate helps bring positive change.</p>

    <div class="dm-main">
      <div class="left">
        <div class="section-heading">Donation Progress</div>
        <div class="section-desc">Animated safe unlocking to reveal funds.</div>
        <div class="locker-container">
        <div class="locker-body" id="lockerBody">
            <div class="locker-face" id="raisedAmt"><span class="raised" id="count">₹0</span> / ₹50,000</div>
        </div>
        </div>

        <div class="progress-text">Raised <span class="raised">₹10,000</span> of ₹50,000. Need <span class="needed">₹40,000</span> more.</div>
      </div>

      <div class="right">
        <div class="section-heading">Make a Donation</div>
        <div class="section-desc">Select amount & method with smooth transitions.</div>
        <form class="donation-form">
          <div class="input-group">
            <label for="amount">Amount (INR)*</label>
            <span class="material-icons">attach_money</span>
            <input type="number" id="amount" placeholder="e.g. 1000, 5000" required />
          </div>
          <div class="input-group">
            <label>Payment Method*</label>
            <div class="chip-group" tabindex="0">
              <div class="chip selected" data-method="debit">Debit Card</div>
              <div class="chip" data-method="credit">Credit Card</div>
              <div class="chip" data-method="upi">UPI</div>
            </div>
          </div>
          <div class="card-fields">
            <div class="input-group">
              <label for="card-number">Card Number*</label>
              <span class="material-icons">credit_card</span>
              <input type="text" id="card-number" placeholder="1234 5678 9012 3456" />
            </div>
            <div class="row">
              <div class="input-group">
                <label for="expiry">Expiry Date*</label>
                <span class="material-icons">event</span>
                <input type="text" id="expiry" placeholder="MM/YY" />
              </div>
              <div class="input-group">
                <label for="cvv">CVV*</label>
                <span class="material-icons">lock</span>
                <input type="password" id="cvv" placeholder="123" />
              </div>
            </div>
          </div>
          <div class="upi-section" style="display:none;">
            <div class="qr-frame"><img src="https://via.placeholder.com/150" alt="UPI QR Code"></div>
            <div>
              <div class="input-group">
                <label for="txn-id">Transaction ID*</label>
                <span class="material-icons">receipt</span>
                <input type="text" id="txn-id" placeholder="ABC123DEF" />
              </div>
              <div class="input-group">
                <label for="txn-amt">Amount*</label>
                <span class="material-icons">attach_money</span>
                <input type="number" id="txn-amt" placeholder="₹1000" />
              </div>
              <div class="input-group">
                <label for="txn-datetime">Date & Time*</label>
                <span class="material-icons">schedule</span>
                <input type="datetime-local" id="txn-datetime" />
              </div>
              <div class="input-group">
                <label for="upi-app">UPI App*</label>
                <span class="material-icons">smartphone</span>
                <input type="text" id="upi-app" placeholder="PhonePe, GPay..." />
              </div>
            </div>
          </div>
          <button type="button" class="donate-btn">Donate Now</button>
        </form>
      </div>
    </div>
    <!-- How Money Donation Works -->
    <section class="how-it-works">
      <h3>How Money Donation Works</h3>
      <p class="desc">Our 6-step process ensures your contribution reaches those in need.</p>
      <div class="cards-grid">
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">payment</span><h4>1. You Donate</h4></div>
          <p>Select an amount and payment method.</p>
        </div>
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">verified_user</span><h4>2. We Verify</h4></div>
          <p>Transaction is securely verified.</p>
        </div>
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">account_balance</span><h4>3. We Transfer</h4></div>
          <p>Funds are transferred to our charity account.</p>
        </div>
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">local_shipping</span><h4>4. We Allocate</h4></div>
          <p>Money allocated to critical programs.</p>
        </div>
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">emoji_people</span><h4>5. We Serve</h4></div>
          <p>Programs deliver impact on ground.</p>
        </div>
        <div class="how-card">
          <div class="icon-title"><span class="material-icons">thumb_up</span><h4>6. Feedback</h4></div>
          <p>Receive reports and success stories.</p>
        </div>
      </div>
    </section>
</div>


  <script>
    const targetAmount = 10000;
    const duration = 15; 
    const countEl = document.getElementById('count');

    let current = { value: 0 };
    gsap.to(current, {
      value: targetAmount,
      duration: duration,
      ease: "power1.out",
      onUpdate: () => {
        countEl.textContent = '₹' + Math.floor(current.value).toLocaleString();
      }
    });

    document.querySelectorAll('.chip').forEach(chip => chip.addEventListener('click', () => {
      document.querySelectorAll('.chip').forEach(c => c.classList.remove('selected'));
      chip.classList.add('selected');
      const isUpi = chip.dataset.method === 'upi';
      gsap.to('.card-fields', { height: isUpi ? 0 : 'auto', opacity: isUpi ? 0 : 1, duration: 0.4 });
      gsap.to('.upi-section', { height: isUpi ? 'auto' : 0, opacity: isUpi ? 1 : 0, duration: 0.4 });
    }));
  </script>
</body>
