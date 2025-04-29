<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Irrigation Systems - LandViz</title>
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
    }

    .main p {
      line-height: 1.7;
      font-size: 16px;
      color: #333;
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

    .form-container {
      margin-bottom: 30px;
      display: none; 
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 1000;
      width: 400px;
    }

    .form-container h2 {
      color: #1d572e;
      font-size: 24px;
      margin-bottom: 20px;
      font-weight: 600;
    }

    .form-group {
      margin-bottom: 20px;
      display: flex;
      flex-direction: column;
    }

    .form-group label {
      font-weight: 500;
      color: #333;
      margin-bottom: 8px;
      font-size: 16px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 95%;
      padding: 12px;
      margin-top: 5px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 14px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      border-color: #1d572e;
      box-shadow: 0 0 8px rgba(29, 87, 46, 0.2);
      outline: none;
    }

    .form-group button {
      background-color: #1d572e;
      color: white;
      padding: 12px 24px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .form-group button:hover {
      background-color: #2e642d;
      transform: translateY(-2px);
    }

    .form-group button:active {
      background-color: #1c4f2b;
      transform: translateY(1px);
    }

    .close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 20px;
      color: #777;
      cursor: pointer;
    }

    .close-btn:hover {
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table, th, td {
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

    .toggle-button {
      background-color: #1d572e;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      margin-bottom: 20px;
    }

    .toggle-button:hover {
      background-color: #2e642d;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <div class="sidebar-content">
      <h2>🚜 PlotPilot</h2>

      <div class="nav-section">
        <h4>Main</h4>
        <a href="dashboard" class="nav-link"><i>🏠</i><span>Dashboard</span></a>
        <a href="landhold" class="nav-link"><i>📍</i><span>Land Holdings</span></a>
        <a href="irrigation" class="nav-link active"><i>💧</i><span>Irrigation</span></a>
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
    <h1>Irrigation Systems</h1>
    <p>Provide details about irrigation systems in your region for analysis.</p>

    <!-- Button to Toggle Form -->
    <button class="toggle-button" onclick="toggleForm()">Add Irrigation Data</button>
    <a href="{{ route('irrigation.export') }}" class="btn btn-primary">Export CSV</a>

    <form method="GET" action="{{ route('irrigation.index') }}" style="margin-top: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap; align-items: flex-end;">
  <div class="form-group" style="flex: 1 1 250px;">
    <label for="filter_locality">Filter by Locality</label>
    <input type="text" name="locality" id="filter_locality" value="{{ request('locality') }}" placeholder="Enter locality" style="width: 100%; padding: 10px; box-sizing: border-box;">
  </div>
  <div class="form-group" style="flex: 1 1 250px;">
    <label for="filter_source">Filter by Source</label>
    <input type="text" name="source" id="filter_source" value="{{ request('source') }}" placeholder="Enter source" style="width: 100%; padding: 10px; box-sizing: border-box;">
  </div>
  <div class="form-group" style="flex: 0 0 auto; display: flex; align-items: flex-end;">
    <button type="submit" style="padding: 10px 20px; background-color: #1d572e; color: white; border: none; border-radius: 6px; cursor: pointer;">Filter</button>
  </div>
</form>



    <div class="form-container" id="irrigationForm">
      <span class="close-btn" onclick="closeForm()">×</span>
      <h2>Irrigation Form</h2>
      <form action="{{ route('irrigation.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="locality">Locality Address</label>
          <input type="text" id="locality" name="locality" required>
        </div>
        <div class="form-group">
          <label for="source">Irrigation Source</label>
          <input type="text" id="source" name="source" required>
        </div>
        <div class="form-group">
          <label for="area">Irrigated Area (hectares)</label>
          <input type="number" id="area" name="area" required>
        </div>
        <div class="form-group">
          <label for="system">Irrigation System Type</label>
          <input type="text" id="system" name="system" required>
        </div>
        <div class="form-group">
          <button type="submit">Add Irrigation Data</button>
        </div>
      </form>
    </div>

    <!-- Display Table with Sample Data -->
    <table>
      <thead>
        <tr>
          <th>Locality Address</th>
          <th>Irrigation Source</th>
          <th>Irrigated Area (hectares)</th>
          <th>Irrigation System Type</th>
        </tr>
      </thead>
      <tbody>
        @foreach($irrigations as $irrigation)
          <tr>
            <td>{{ $irrigation->locality }}</td>
            <td>{{ $irrigation->source }}</td>
            <td>{{ $irrigation->area }}</td>
            <td>{{ $irrigation->system }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div style="height: 100px; background: white;"></div>
  </div>

  <script>
    function toggleForm() {
      var formContainer = document.getElementById('irrigationForm');
      formContainer.style.display = (formContainer.style.display === 'none' || formContainer.style.display === '') ? 'block' : 'none';
    }

    function closeForm() {
      var formContainer = document.getElementById('irrigationForm');
      formContainer.style.display = 'none';
    }
  </script>

</body>
</html>
