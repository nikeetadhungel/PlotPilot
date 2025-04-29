<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Farming Tools - LandViz</title>
  <style>
    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      height: 100vh;
      overflow: hidden;
    }

    .sidebar {
      width: 250px;
      background: #f9f9f9;
      border-right: 1px solid #ddd;
      display: flex;
      flex-direction: column;
      position: fixed;
      height: 100vh;
      top: 0;
      left: 0;
      padding: 20px;
    }

    .sidebar-content {
      flex-grow: 1;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
    }

    .sidebar h2 {
      font-size: 20px;
      color: #1d572e;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
    }

    .nav-section {
      margin-bottom: 20px;
    }

    .nav-section h4 {
      margin: 10px 0;
      color: #777;
      font-size: 13px;
      text-transform: uppercase;
    }

    .nav-link {
      display: flex;
      align-items: center;
      padding: 8px 10px;
      text-decoration: none;
      color: #333;
      border-radius: 6px;
      font-size: 14px;
    }

    .nav-link i {
      margin-right: 10px;
    }

    .nav-link:hover, .nav-link.active {
      background-color: #e5f2e9;
      color: #1d572e;
    }

    .bottom-links {
      margin-top: 180px;
      padding-top: 20px;
      border-top: 1px solid #ddd;
    }

    .main {
      margin-left: 280px;
      flex: 1;
      background-color: #f5f5f5;
      height: 100vh;
      overflow-y: auto;
      padding: 20px;
    }

    .header {
      background: linear-gradient(to right, #2e642d, #3c8132);
      color: white;
      padding: 40px 20px;
      text-align: center;
      border-radius: 8px;
    }

    .tool-section {
      margin-top: 30px;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .tool-card {
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      flex: 1;
      min-width: 220px;
      text-align: center;
    }

    .tool-card img {
      max-width: 100%;
      height: 120px;
      object-fit: contain;
      margin-bottom: 15px;
    }

    .tool-card h3 {
      font-size: 18px;
      margin-bottom: 10px;
      color: #2e642d;
    }

    .tool-card p {
      font-size: 14px;
      color: #555;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="sidebar-content">
      <h2>🚜 PlotPilot</h2>

      <div class="nav-section">
        <h4>Main</h4>
        <a href="dashboard" class="nav-link"><i>🏠</i><span>Dashboard</span></a>
        <a href="landhold" class="nav-link"><i>📍</i><span>Land Holdings</span></a>
        <a href="irrigation" class="nav-link"><i>💧</i><span>Irrigation</span></a>
        <a href="cropping" class="nav-link"><i>🌾</i><span>Cropping Patterns</span></a>
        <a href="welldepth" class="nav-link"><i>🕳️</i><span>Well Depths</span></a>
      </div>

      <div class="nav-section">
        <h4>Resources</h4>
        <a href="agriculture" class="nav-link"><i>📊</i><span>Agricultural Data</span></a>
        <a href="farming" class="nav-link active"><i>🚜</i><span>Farming Tools</span></a>
      </div>

      <div class="bottom-links">
        <a href="profile" class="nav-link "><i>👤</i><span>Profile</span></a>
        <a href="about" class="nav-link"><i>ℹ️</i><span>About</span></a>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main">
    <div class="header">
      <h1>Farming Tools</h1>
      <p>Explore essential tools that boost agricultural productivity and efficiency.</p>
    </div>

    <div class="tool-section">
  <div class="tool-card">
    <img src="{{ asset('images/tractor.jpg') }}" alt="Tractor">
    <h3>Tractor</h3>
    <p>Powerful farming vehicle used for plowing, tilling, and planting fields efficiently.</p>
  </div>
  <div class="tool-card">
    <img src="{{ asset('images/seeddrill.jpg') }}" alt="Seed Drill">
    <h3>Seed Drill</h3>
    <p>Ensures uniform seed distribution and depth, improving germination rates and crop yields.</p>
  </div>
  <div class="tool-card">
    <img src="{{ asset('images/pump.jpg') }}" alt="Irrigation Pump">
    <h3>Irrigation Pump</h3>
    <p>Delivers water to fields through efficient irrigation systems for consistent crop hydration.</p>
  </div>
</div>

  </div>

</body>
</html>
