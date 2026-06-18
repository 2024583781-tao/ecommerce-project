<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" conttent="This is new Project 1 for Web Programming Subject">
  <meta name="keywords" content="HTML,CSS,Bootstrap,Web Programming">

<title>Chart of Sales</title>
  <title>Sales Chart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

   <style>
    .summary-card {
      text-align: center;
      padding: 20px;
      border-radius: 10px;
      background-color: #ffffff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .summary-card h5 {
      margin-bottom: 10px;
      font-weight: bold;
    }
    .summary-card p {
      font-size: 1.5rem;
      font-weight: bold;
    }
  </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
 
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Order</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Home</a></li>
            <li><a class="dropdown-item" href="#">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Product</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white disabled" aria-disabled="true">Log out</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


  <h3 class="title mt-4 text-center"> “Welcome to Cynthia Ecommerce — Your Fashion & Lifestyle Store”
     <i class="fas fa-store"></i></h3>

 
<div class="container mt-5"> 
  <div class="row g-3">
    <div class="col-md-3">
     <div class="summary-card">
          <h5>Total Products</h5>
          <p class="fs-4 fw-bold">120</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="summary-card">
        <h5>Total Orders</h5>
          <p class="fs-4 fw-bold">85</p>
        </div>
      </div>
      <div class="col-md-3">
      <div class="summary-card">
        <h5>Total Customers</h5>
          <p class="fs-4 fw-bold">230</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="summary-card">
          <h5>Revenue</h5>
          <p class="fs-4 fw-bold text-success">RM 15,500</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <h4 class="text-center mb-3">Sales Overview</h4>
    <canvas id="salesChart"></canvas>
  </div>

  <script>
  const ctx = document.getElementById('salesChart');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['January', 'February', 'March', 'April'], 
      datasets: [{
        label: 'Sales (RM)',
        data: [500, 750, 400, 900], 
        backgroundColor: '#308148' 
      }]
    },
    options: {
      scales: {
        y: { beginAtZero: true } 
      }
    }
  });
</script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
   
  
   <footer class="text-center mt-2">
        <p>© 2026 Cynthia Ecommerce. All rights reserved.</p>
    </footer> 
</body>
</html>
 