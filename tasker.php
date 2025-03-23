<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Debtmate Pro Task Manager</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <style>
    :root {
      --background-color: #121212;
      --card-background: #1e1e1e;
      --text-color: #e0e0e0;
      --accent-color: #64ffda;
      --border-color: #333;
      --high-priority: #ff5555;
      --med-priority: #ffa500;
      --low-priority: #64ffda;
      --font-family: 'Poppins', sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: var(--font-family);
      background-color: var(--background-color);
      color: var(--text-color);
      line-height: 1.6;
    }

    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1rem;
      background: var(--card-background);
      border-bottom: 1px solid var(--border-color);
    }

    header .profile {
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    header .profile img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      border: 2px solid var(--accent-color);
    }

    header .profile .info {
      text-align: right;
      font-size: 0.8rem;
      line-height: 1.2;
    }

    header .timer {
      font-size: 1.2rem;
      font-weight: 600;
    }

    .container {
      width: 100%;
      margin: 2rem auto;
      padding: 0 1rem;
    }

    .columns {
      display: flex;
      gap: 1rem;
    }

    .column {
      flex: 1;
      background: var(--card-background);
      border: 1px solid var(--border-color);
      border-radius: 8px;
      padding: 1rem;
      max-height: 80vh;
      overflow-y: auto;
    }

    .column h2 {
      margin-top: 0;
      font-size: 1.3rem;
      text-align: center;
      border-bottom: 1px solid var(--border-color);
      padding-bottom: 0.5rem;
      position: relative;
    }

    .column h2::after {
      content: " •";
      font-size: 1rem;
      color: var(--accent-color);
    }

    .task-card {
      background: var(--card-background);
      padding: 1rem;
      margin-bottom: 1rem;
      border-radius: 8px;
      border: 1px solid var(--border-color);
      cursor: grab;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
      transition: transform 0.2s ease;
    }

    .task-card:active {
      cursor: grabbing;
    }

    .task-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .task-title {
      font-size: 1.1rem;
      margin: 0;
    }

    .priority-label {
      padding: 0.2rem 0.5rem;
      border-radius: 4px;
      font-size: 0.8rem;
      color: var(--background-color);
      background: var(--med-priority);
      cursor: pointer;
      position: relative;
    }

    .priority-dropdown {
      display: none;
      position: absolute;
      top: 110%;
      right: 0;
      background: var(--card-background);
      border: 1px solid var(--border-color);
      border-radius: 4px;
      z-index: 10;
    }

    .priority-dropdown div {
      padding: 0.3rem 0.5rem;
      cursor: pointer;
    }

    .priority-dropdown div:hover {
      background: var(--accent-color);
    }

    .task-desc {
      margin: 0.5rem 0;
      font-size: 0.9rem;
    }

    .btn-detail {
      padding: 0.4rem 0.8rem;
      background: var(--accent-color);
      border: none;
      border-radius: 4px;
      color: var(--background-color);
      cursor: pointer;
      font-size: 0.9rem;
      transition: background 0.3s ease;
    }

    .btn-detail:hover {
      background: #4ce1b6;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background: var(--card-background);
      padding: 1.5rem;
      border-radius: 8px;
      width: 90%;
      max-width: 500px;
      border: 1px solid var(--border-color);
    }

    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    ::-webkit-scrollbar {
      width: 10px;
      height: 10px;
    }

    ::-webkit-scrollbar-track {
      background: #1e1e1e;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #64ffda;
      border-radius: 10px;
      border: 2px solid #1e1e1e;
    }

    ::-webkit-scrollbar-thumb:hover {
      background-color: #4ce1b6;
    }

    .modal-header h3 {
      margin: 0;
    }

    .close-modal {
      cursor: pointer;
      font-size: 1.5rem;
      color: var(--accent-color);
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }

      .container {
        width: 90%;
      }

      .columns {
        flex-direction: column;
      }
    }

    .column.drag-over {
      background: #1a1a1a;
      border: 2px dashed var(--accent-color);
    }
  </style>
</head>

<body>
  <header>
    <div class="timer" id="timer">00:00:00</div>
    <div class="profile">
      <img src="user.jpg" alt="User Profile">
      <div class="info">
        <div>Mayank Chawdhari</div>
        <div style="font-size:0.75rem; color: #aaa;">Full Stack Web Developer<br>Status: Currently Working</div>
      </div>
    </div>
  </header>

  <div class="container">
    <h1 style="text-align:center; margin-bottom:1rem;">Donation Charity Website Task Manager</h1>
    <p style="text-align:center; font-size:0.9rem; color:#aaa;">
      Manage your project tasks. Drag tasks between columns to update their status. Click on the priority label to
      update it.
    </p>

    <div class="columns">

      <div class="column" id="pending" ondragover="allowDrop(event)" ondrop="dropTask(event)">
        <h2>Pending</h2>


        <div class="task-card animate__animated" draggable="true" id="task-1" data-status="pending">
          <div class="task-header">
            <h3 class="task-title"> 1: Database & API Setup</h3>
            <div class="priority-label" onclick="togglePriorityDropdown(this)">Medium
              <div class="priority-dropdown">
                <div onclick="setPriority(this, 'High')">High</div>
                <div onclick="setPriority(this, 'Medium')">Medium</div>
                <div onclick="setPriority(this, 'Low')">Low</div>
              </div>
            </div>
          </div>
          <p class="task-desc">
            Create MySQL tables for users, charities, donations, admin logs, etc., and develop API endpoints for
            real-time data integration.
          </p>
          <button class="btn-detail"
            onclick="openModal(' 1: Database & API Setup', 'Implement database schema and build API endpoints for data updates.')">View
            Details</button>
        </div>


        <div class="task-card animate__animated" draggable="true" id="task-2" data-status="pending">
          <div class="task-header">
            <h3 class="task-title"> 2: User Authentication & Registration</h3>
            <div class="priority-label" onclick="togglePriorityDropdown(this)">Medium
              <div class="priority-dropdown">
                <div onclick="setPriority(this, 'High')">High</div>
                <div onclick="setPriority(this, 'Medium')">Medium</div>
                <div onclick="setPriority(this, 'Low')">Low</div>
              </div>
            </div>
          </div>
          <p class="task-desc">
            Develop secure login and registration forms with validations, including admin login for managing the system.
          </p>
          <button class="btn-detail"
            onclick="openModal(' 2: User Authentication & Registration', 'Implement front-end forms and back-end APIs for authentication.')">View
            Details</button>
        </div>


        <div class="task-card animate__animated" draggable="true" id="task-3" data-status="pending">
          <div class="task-header">
            <h3 class="task-title"> 3: Navigation & UI Development</h3>
            <div class="priority-label" onclick="togglePriorityDropdown(this)">Medium
              <div class="priority-dropdown">
                <div onclick="setPriority(this, 'High')">High</div>
                <div onclick="setPriority(this, 'Medium')">Medium</div>
                <div onclick="setPriority(this, 'Low')">Low</div>
              </div>
            </div>
          </div>
          <p class="task-desc">
            Build a responsive navigation bar and overall UI framework for all pages (Home, Contact, Credits, Support,
            etc.).
          </p>
          <button class="btn-detail"
            onclick="openModal(' 3: Navigation & UI Development', 'Design and implement the main navigation and layout for the site.')">View
            Details</button>
        </div>


        <div class="task-card animate__animated" draggable="true" id="task-4" data-status="pending">
          <div class="task-header">
            <h3 class="task-title"> 4: Charity System Setup</h3>
            <div class="priority-label" onclick="togglePriorityDropdown(this)">Medium
              <div class="priority-dropdown">
                <div onclick="setPriority(this, 'High')">High</div>
                <div onclick="setPriority(this, 'Medium')">Medium</div>
                <div onclick="setPriority(this, 'Low')">Low</div>
              </div>
            </div>
          </div>
          <p class="task-desc">
            Develop charity listing and detailed pages, showcasing each charity’s mission, description, and donation
            options.
          </p>
          <button class="btn-detail"
            onclick="openModal(' 4: Charity System Setup', 'Implement charity listings and detailed charity pages with a Pay Now feature.')">View
            Details</button>
        </div>


        <div class="task-card animate__animated" draggable="true" id="task-5" data-status="pending">
          <div class="task-header">
            <h3 class="task-title"> 5: Donation System Implementation</h3>
            <div class="priority-label" onclick="togglePriorityDropdown(this)">Medium
              <div class="priority-dropdown">
                <div onclick="setPriority(this, 'High')">High</div>
                <div onclick="setPriority(this, 'Medium')">Medium</div>
                <div onclick="setPriority(this, 'Low')">Low</div>
              </div>
            </div>
          </div>
          <p class="task-desc">
            Build forms for food and money donations. Integrate payment gateway(s) and include auto-filled payment
            fields.
          </p>
          <button class="btn-detail"
            onclick="openModal(' 5: Donation System Implementation', 'Create donation forms and integrate payment methods (QR, Card, PayPal).')">View
            Details</button>
        </div>


        <div class="task-card animate__animated" draggable="true" id="task-6" data-status="pending">
          <div class="task-header">
            <h3 class="task-title"> 6: Admin Panel Setup</h3>
            <div class="priority-label" onclick="togglePriorityDropdown(this)">Medium
              <div class="priority-dropdown">
                <div onclick="setPriority(this, 'High')">High</div>
                <div onclick="setPriority(this, 'Medium')">Medium</div>
                <div onclick="setPriority(this, 'Low')">Low</div>
              </div>
            </div>
          </div>
          <p class="task-desc">
            Develop an admin interface for managing users, charities, and donations. Include functionalities for
            adding/removing donation types and tracking queries.
          </p>
          <button class="btn-detail"
            onclick="openModal(' 6: Admin Panel Setup', 'Design and implement an admin panel with complete management capabilities.')">View
            Details</button>
        </div>


        <div class="task-card animate__animated" draggable="true" id="task-7" data-status="pending">
          <div class="task-header">
            <h3 class="task-title"> 7: Backend & FTP Integration</h3>
            <div class="priority-label" onclick="togglePriorityDropdown(this)">Medium
              <div class="priority-dropdown">
                <div onclick="setPriority(this, 'High')">High</div>
                <div onclick="setPriority(this, 'Medium')">Medium</div>
                <div onclick="setPriority(this, 'Low')">Low</div>
              </div>
            </div>
          </div>
          <p class="task-desc">
            Set up backend APIs for data handling and configure FTP/hosting controls for website on/off/restart
            functionality.
          </p>
          <button class="btn-detail"
            onclick="openModal(' 7: Backend & FTP Integration', 'Implement backend API endpoints and configure FTP access for deployment.')">View
            Details</button>
        </div>


        <div class="task-card animate__animated" draggable="true" id="task-8" data-status="pending">
          <div class="task-header">
            <h3 class="task-title"> 8: Additional Pages Development</h3>
            <div class="priority-label" onclick="togglePriorityDropdown(this)">Medium
              <div class="priority-dropdown">
                <div onclick="setPriority(this, 'High')">High</div>
                <div onclick="setPriority(this, 'Medium')">Medium</div>
                <div onclick="setPriority(this, 'Low')">Low</div>
              </div>
            </div>
          </div>
          <p class="task-desc">
            Build the Credits, Contact Info, and Query pages. Ensure these pages pull dynamic data from the backend.
          </p>
          <button class="btn-detail"
            onclick="openModal(' 8: Additional Pages Development', 'Develop supplementary pages for Credits, Contact, and Query functionalities.')">View
            Details</button>
        </div>


        <div class="task-card animate__animated" draggable="true" id="task-9" data-status="pending">
          <div class="task-header">
            <h3 class="task-title"> 9: Testing, Debugging & Deployment</h3>
            <div class="priority-label" onclick="togglePriorityDropdown(this)">Medium
              <div class="priority-dropdown">
                <div onclick="setPriority(this, 'High')">High</div>
                <div onclick="setPriority(this, 'Medium')">Medium</div>
                <div onclick="setPriority(this, 'Low')">Low</div>
              </div>
            </div>
          </div>
          <p class="task-desc">
            Perform unit, integration, and user acceptance tests. Debug issues and finalize documentation before
            deployment.
          </p>
          <button class="btn-detail"
            onclick="openModal(' 9: Testing, Debugging & Deployment', 'Conduct thorough testing and deploy the website.')">View
            Details</button>
        </div>
      </div>


      <div class="column" id="in-progress" ondragover="allowDrop(event)" ondrop="dropTask(event)">
        <h2>In Progress</h2>
      </div>


      <div class="column" id="completed" ondragover="allowDrop(event)" ondrop="dropTask(event)">
        <h2>Completed</h2>
      </div>
    </div>
  </div>


  <div class="modal" id="detailModal">
    <div class="modal-content">
      <div class="modal-header">
        <h3 id="modalTitle">Task Details</h3>
        <span class="close-modal" onclick="closeModal()">&times;</span>
      </div>
      <p id="modalDesc"></p>
      <button class="btn-detail" onclick="updateTaskStatus()">Update Status</button>
    </div>
  </div>
  <script>
    const timerElement = document.getElementById('timer');
    let startTime = sessionStorage.getItem('startTime');
    if (!startTime) {
      startTime = new Date().getTime();
      sessionStorage.setItem('startTime', startTime);
    }
    function updateTimer() {
      let now = new Date().getTime();
      let elapsed = now - startTime;
      let hours = Math.floor((elapsed % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      let minutes = Math.floor((elapsed % (1000 * 60 * 60)) / (1000 * 60));
      let seconds = Math.floor((elapsed % (1000 * 60)) / 1000);
      timerElement.textContent =
        (hours < 10 ? "0" + hours : hours) + ":" +
        (minutes < 10 ? "0" + minutes : minutes) + ":" +
        (seconds < 10 ? "0" + seconds : seconds);
    }
    setInterval(updateTimer, 1000);

    let dragged;
    document.querySelectorAll('.task-card').forEach(card => {
      card.addEventListener('dragstart', (e) => {
        dragged = card;
        setTimeout(() => { card.style.display = "none"; }, 0);
      });
      card.addEventListener('dragend', (e) => {
        setTimeout(() => { card.style.display = "block"; }, 0);
      });
    });
    function allowDrop(e) {
      e.preventDefault();
      e.currentTarget.classList.add("drag-over");
    }
    function dropTask(e) {
      e.preventDefault();
      e.currentTarget.classList.remove("drag-over");
      e.currentTarget.appendChild(dragged);
      let newStatus = e.currentTarget.id;
      dragged.setAttribute("data-status", newStatus);
      dragged.classList.add("animate__fadeIn");
      setTimeout(() => dragged.classList.remove("animate__fadeIn"), 500);
    }

    let currentTaskCard = null;
    function openModal(title, desc) {
      document.getElementById("modalTitle").textContent = title;
      document.getElementById("modalDesc").textContent = desc;
      document.getElementById("detailModal").style.display = "flex";
      currentTaskCard = event.target.closest('.task-card');
    }
    function closeModal() {
      document.getElementById("detailModal").style.display = "none";
    }
    function updateTaskStatus() {
      if (currentTaskCard) {
        let currentStatus = currentTaskCard.getAttribute("data-status");
        let targetColumnId = "";
        if (currentStatus === "pending") {
          targetColumnId = "in-progress";
        } else if (currentStatus === "in-progress") {
          targetColumnId = "completed";
        }
        if (targetColumnId !== "") {
          document.getElementById(targetColumnId).appendChild(currentTaskCard);
          currentTaskCard.setAttribute("data-status", targetColumnId);
          currentTaskCard.classList.add("animate__fadeIn");
          setTimeout(() => currentTaskCard.classList.remove("animate__fadeIn"), 500);
        }
      }
      closeModal();
    }

    function togglePriorityDropdown(labelElement) {
      let dropdown = labelElement.querySelector(".priority-dropdown");
      dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
    }
    function setPriority(optionElement, value) {
      let label = optionElement.closest(".priority-label");
      label.textContent = value;
      if (value === "High") {
        label.style.background = "var(--high-priority)";
      } else if (value === "Medium") {
        label.style.background = "var(--med-priority)";
      } else {
        label.style.background = "var(--low-priority)";
      }
      label.querySelector(".priority-dropdown").style.display = "none";
    }
  </script>
</body>

</html>