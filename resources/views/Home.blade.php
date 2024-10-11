<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-commerce Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom CSS -->
  <style>
    /* Navbar custom styling */
    .navbar {
      background-color: #343a40;
    }
    .navbar-brand, .nav-link {
      color: #ffffff !important;
    }
    .nav-link:hover {
      color: #ffc107 !important;
    }

    /* Hero Section */
    .carousel-caption h5 {
      font-size: 3rem;
      font-weight: bold;
      color: #ffc107;
    }
    .carousel-caption p {
      font-size: 1.5rem;
      color: #fff;
    }

    /* Featured Products */
    .card {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s;
    }
    .card:hover {
      transform: scale(1.05);
    }
    .card-title {
      color: #343a40;
      font-size: 1.25rem;
      font-weight: 600;
    }
    .btn-primary {
      background-color: #ffc107;
      border: none;
    }
    .btn-primary:hover {
      background-color: #ff9f07;
    }

    /* Footer */
    footer {
      background-color: #343a40;
      color: #ffffff;
      size: 100px;
    }
    footer a {
      color: #ffc107;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">My Shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/Register')}}">Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Carousel -->
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://via.placeholder.com/1920x500" class="d-block w-100" alt="Banner 1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Best Deals</h5>
          <p>Check out the best deals on the latest products</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1920x500" class="d-block w-100" alt="Banner 2">
        <div class="carousel-caption d-none d-md-block">
          <h5>New Arrivals</h5>
          <p>Shop the latest trends in fashion and tech</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Featured Products Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Featured Products</h2>
      <div class="row">
        <!-- Product Card 1 -->
       
  <!-- Footer -->
  <footer class="bg-dark text-light text-center py-3">
    <p>&copy; 2024 My Shop. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
