<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LandViz Dashboard</title>
  <style>
    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      height: 100vh;
      overflow: hidden;
    }

    /* Sidebar Styling */
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

    /* Main Content */
    .main {
      margin-left: 250px;
      flex: 1;
      background-color: #f5f5f5;
      height: 100vh;
      margin-left: 280px;
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

    .stats {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 30px;
    }

    .card {
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      flex: 1;
      min-width: 200px;
    }

    .charts {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 20px;
    }

    .chart {
      background: white;
      padding: 20px;
      border-radius: 12px;
      flex: 1;
      min-width: 300px;
      text-align: center;
    }
    .chart img {
  width: 100%;
  max-width: 300px;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
  display: block;
  margin: 0 auto;
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
        <a href="dashboard" class="nav-link active"><i>🏠</i><span>Dashboard</span></a>
        <a href="landhold" class="nav-link"><i>📍</i><span>Land Holdings</span></a>
        <a href="irrigation" class="nav-link"><i>💧</i><span>Irrigation</span></a>
        <a href="cropping" class="nav-link"><i>🌾</i><span>Cropping Patterns</span></a>
        <a href="welldepth" class="nav-link"><i>🕳️</i><span>Well Depths</span></a>
      
      </div>

      <div class="nav-section">
        <h4>Resources</h4>
        <a href="agriculture" class="nav-link"><i>📊</i><span>Agricultural Data</span></a>
        <a href="farming" class="nav-link"><i>🚜</i><span>Farming Tools</span></a>
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
      <h1>Know Your Land. Grow Your Future.</h1>
      <p>Access comprehensive agricultural insights to make informed decisions about land use, irrigation, and cropping patterns.</p>
      <button style="margin-top: 10px; background: #ffb400; border: none; padding: 10px 20px; border-radius: 8px; font-weight: bold;">Explore Data</button>
    </div>

    <div class="stats">
      <div class="card">
        <h3>Total Land Area</h3>
        <p>328.7M hectares</p>
      </div>
      <div class="card">
        <h3>Irrigated Land</h3>
        <p>68.4M hectares (20.8%)</p>
      </div>
      <div class="card">
        <h3>Crop Varieties</h3>
        <p>124 major crop types</p>
      </div>
      <div class="card">
        <h3>Avg Well Depth</h3>
        <p>48.2m (national average)</p>
      </div>
    </div>

    <div class="charts">
      <div class="chart">
        <h3>Land Holding Chart</h3>
        <img src="{{ asset('images/chart1.png') }}" alt="Bar Chart">
      </div>
      <div class="chart">
        <h3>Irrigation Sources</h3>
        <img src="{{ asset('images/chart2.png') }}" alt="Pie Chart">
      </div>
    </div>
    <div class="charts">
      <div class="chart">
        <h3>Crop Varieties</h3>
        <img src="{{ asset('images/chart3.jpg') }}" alt="Bar Chart">
      </div>
      <div class="chart">
        <h3>Well Depth</h3>
        <img src="{{ asset('images/chart4.jpg') }}" alt="Pie Chart">
      </div>
    </div>
  </div>
  


</body>
</html>