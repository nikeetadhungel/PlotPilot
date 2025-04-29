<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* Sidebar Styling */

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

/* Main Content */
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

.about-content {
  margin-top: 30px;
  background: white;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
}

.about-content h2 {
  font-size: 22px;
  color: #1d572e;
  margin-bottom: 20px;
}

.about-content p {
  font-size: 16px;
  color: #444;
  line-height: 1.6;
}

/* Button Styling for Contact Us */
.contact-btn {
  display: inline-block;
  padding: 12px 25px;
  background-color: #2e642d;
  color: white;
  font-size: 16px;
  text-decoration: none;
  border-radius: 6px;
  margin-top: 30px;
  text-align: center;
  transition: background-color 0.3s ease;
}

.contact-btn:hover {
  background-color: #3c8132;
}


</style>
<body>

 <!-- Sidebar -->
 <div class="sidebar">
    <div class="sidebar-content">
      <h2>🚜 Land Analysis</h2>

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
        <a href="profile" class="nav-link "><i>👤</i><span>Profile</span></a>
        <a href="about" class="nav-link active"><i>ℹ️</i><span>About</span></a>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main">
    <div class="header">
      <h1>About Us</h1>
    </div>

    <div class="about-content">
      <h2>Welcome to Our Dashboard</h2>
      <p>
        This dashboard is designed to provide you with an easy-to-use and efficient management experience. Whether you're managing data, analyzing reports, or tracking key performance indicators, this tool will help streamline your tasks.
      </p>
      <p>
        We built this platform to enhance productivity, encourage collaboration, and make the decision-making process smoother and more informed.
      </p>
      <p>
        If you need any assistance, feel free to contact our support team via the contact section.
      </p>
      <a href="mailto:landviz@gmail.com" class="contact-btn">Contact Us</a>
    </div>
  </div>

</body>
</html>
