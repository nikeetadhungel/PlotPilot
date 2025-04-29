<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Agricultural Data - LandViz</title>
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
      padding: 30px;
    }

    .main h1 {
      color: #1d572e;
      font-size: 36px;
      margin-bottom: 20px;
    }

    .main p {
      line-height: 1.7;
      font-size: 18px;
      color: #333;
      margin-bottom: 20px;
    }

    .info-box {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }

    .highlight {
      color: #2e642d;
      font-weight: bold;
    }

    .important-title {
      font-size: 28px;
      color: #1d572e;
      font-weight: 600;
      margin-top: 40px;
    }

    .important-text {
      font-size: 18px;
      color: #555;
      margin-top: 15px;
    }

    .data-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .data-table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #1d572e;
      color: white;
    }

    td {
      background-color: #f9f9f9;
    }

    .info-box p {
      font-size: 16px;
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
        <a href="agriculture" class="nav-link active"><i>📊</i><span>Agricultural Data</span></a>
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
    <h1>Agricultural Data</h1>
    <p>Welcome to the Agricultural Data section where you can find detailed information about various crops, agricultural practices, and their impact on land productivity.</p>

    <div class="info-box">
      <h2 class="important-title">What is Agricultural Data?</h2>
      <p class="important-text">Agricultural data refers to information about crop types, yields, growth conditions, soil properties, climate data, and other factors affecting agricultural productivity. This data is crucial for analyzing trends, improving farming practices, and making data-driven decisions to optimize agricultural outputs.</p>
    </div>

    <div class="info-box">
      <h2 class="important-title">Key Components of Agricultural Data</h2>
      <p class="important-text">Agricultural data includes the following key components:</p>
      <ul>
        <li><strong>Crop Type:</strong> Different types of crops grown in the region such as rice, wheat, maize, cotton, etc.</li>
        <li><strong>Yield Data:</strong> The productivity of crops measured in terms of output per unit area (tons per hectare).</li>
        <li><strong>Soil Conditions:</strong> Information about soil health, pH levels, fertility, and moisture content.</li>
        <li><strong>Climate Data:</strong> Weather patterns, temperature, humidity, and rainfall that affect crop growth.</li>
        <li><strong>Pest and Disease Data:</strong> Information about pests and diseases that affect crops and their control measures.</li>
        <li><strong>Irrigation Data:</strong> Information regarding water availability and irrigation practices used in farming.</li>
      </ul>
    </div>

    <div class="info-box">
      <h2 class="important-title">How Agricultural Data Helps</h2>
      <p class="important-text">Agricultural data helps in various ways:</p>
      <ul>
        <li><strong>Improving Crop Yields:</strong> By analyzing crop performance under different conditions, farmers can adopt better practices to increase yields.</li>
        <li><strong>Predicting Crop Failures:</strong> Monitoring climate and soil conditions can help predict and prevent crop failures due to weather or pests.</li>
        <li><strong>Optimizing Resource Usage:</strong> Data-driven decisions allow farmers to use water, fertilizers, and pesticides efficiently, reducing waste and costs.</li>
        <li><strong>Supporting Government Policies:</strong> Governments can use agricultural data to create policies that support sustainable farming and food security.</li>
      </ul>
    </div>

    <div class="info-box">
      <h2 class="important-title">Sample Agricultural Data</h2>
      <table class="data-table">
        <thead>
          <tr>
            <th>Crop Type</th>
            <th>Yield (tons/hectare)</th>
            <th>Climate Conditions</th>
            <th>Irrigation Requirements</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Wheat</td>
            <td>3.2</td>
            <td>Cool temperatures, moderate rainfall</td>
            <td>Moderate irrigation</td>
          </tr>
          <tr>
            <td>Rice</td>
            <td>4.5</td>
            <td>Warm, wet climate with heavy rainfall</td>
            <td>High irrigation</td>
          </tr>
          <tr>
            <td>Maize</td>
            <td>6.0</td>
            <td>Warm weather, moderate rainfall</td>
            <td>Moderate irrigation</td>
          </tr>
          <tr>
            <td>Cotton</td>
            <td>2.5</td>
            <td>Hot, dry conditions</td>
            <td>Low irrigation</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
