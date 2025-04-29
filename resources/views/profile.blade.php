<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LandViz - Profile</title>
  <link rel="stylesheet" href="dashboard.css">
</head>
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
  
    .nav-link:hover,
    .nav-link.active {
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
  
    .profile-info {
      margin-top: 30px;
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
      position: relative;
    }
  
    .logout-btn {
      position: absolute;
      top: 20px;
      right: 20px;
      background: #e74c3c;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
      transition: background 0.2s;
    }
  
    .logout-btn:hover {
      background: #c0392b;
    }
  
    .profile-info h3 {
      color: #1d572e;
      font-size: 24px;
      border-bottom: 1px solid #eee;
      padding-bottom: 15px;
      margin-bottom: 30px;
    }
  
    .info-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px 40px;
    }
  
    .info-item {
      background: #f8f8f8;
      padding: 12px 16px;
      border-radius: 8px;
      border: 1px solid #eee;
    }
  
    .info-label {
      font-weight: 600;
      color: #444;
      margin-bottom: 6px;
      display: block;
      font-size: 14px;
    }
  
    .info-value {
      font-size: 15px;
      color: #666;
    }
  </style>
  
  
<body>

  <!-- Sidebar (Same as dashboard) -->
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
        <a href="farming" class="nav-link"><i>🚜</i><span>Farming Tools</span></a>
      </div>

      <div class="bottom-links">
        <a href="profile" class="nav-link active"><i>👤</i><span>Profile</span></a>
        <a href="about" class="nav-link"><i>ℹ️</i><span>About</span></a>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main">
    <div class="header">
      <h1>Profile</h1>
    </div>
  
    <div class="profile-info">
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-btn">Logout</button>
      </form>
      <h3>User Details</h3>
  
      <div class="info-grid">
        <div class="info-item">
          <span class="info-label">Full Name</span>
          <span class="info-value">{{ Auth::user()->fullname }}</span>
        </div>
        <div class="info-item">
          <span class="info-label">Email</span>
          <span class="info-value">{{ Auth::user()->email }}</span>
        </div>
      </div>
    </div>
  </div>
  

</body>
</html>
