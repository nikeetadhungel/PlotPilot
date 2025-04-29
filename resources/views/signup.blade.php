<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LandViz - Sign Up</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      margin: 0;
      background: #f0f4f8;
      color: #1e2a38;
    }

    .container {
      max-width: 500px;
      margin: 50px auto;
      padding: 40px;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    }

    .form-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-header h1 {
      font-size: 2rem;
      margin: 0;
      color: #1e2a38;
    }

    .form-header p {
      font-size: 1rem;
      color: #5a6e87;
    }

    form input {
      width: 100%;
      padding: 14px;
      margin-bottom: 20px;
      border: 1px solid #d1dce5;
      border-radius: 8px;
      font-size: 1rem;
    }

    form input:focus {
      border-color: #4caf50;
      outline: none;
      box-shadow: 0 0 0 2px rgba(76, 175, 80, 0.2);
    }

    .btn-submit {
      background-color: #4caf50;
      color: white;
      padding: 14px;
      width: 100%;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .btn-submit:hover {
      background-color: #43a047;
    }

    .footer-text {
      text-align: center;
      font-size: 0.9rem;
      color: #7b8a97;
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="form-header">
      <h1>Join TerraLens</h1>
      <p>Optimize your land projects with precision-driven tools</p>
    </div>

    <form action="/signup" method="POST">
    @csrf
      <input type="text" name="fullname" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

      <button class="btn-submit" type="submit">Sign Up</button>
    </form>

    <div class="footer-text">
      Already have an account? <a href="login" style="color:#4caf50; text-decoration: none;">Log in</a>
    </div>
  </div>

</body>
</html>
