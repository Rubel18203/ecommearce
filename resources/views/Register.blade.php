<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 500px;
      margin: 50px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .form-title {
      margin-bottom: 20px;
      font-size: 1.5rem;
      font-weight: bold;
      text-align: center;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
    .register-link {
      text-align: center;
      margin-top: 20px;
    }
    .register-link a {
      color: #007bff;
    }
  </style>
</head>
<body>

  <div class="container">
  
    <div class="form-container">
      <h2 class="form-title">Login</h2>
      <form action="{{url('/users') }}" method="POST">
    
             @csrf
        <div class="mb-3">
          <label for="text" class="form-label">Name</label>
          <input type="text" class="form-control" name='name' id="name" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Email address</label>
          <input type="text" class="form-control" name='email' id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Password</label>
          <input type="text" class="form-control" name='password' id="password" placeholder="Enter your password" required>
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">mobile</label>
          <input type="text" class="form-control" name='mobile' id="mobile" placeholder="Enter your password" required>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="rememberMe">
          <label class="form-check-label" for="rememberMe">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
      <div class="register-link">
        <p>Don't have an account? <a href="register.html">Register here</a></p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
