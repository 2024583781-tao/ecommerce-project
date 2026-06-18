<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cynthia Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

  </head>

  <body id="vanta-bg">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card login-box shadow">
            <div class="card-body">
            <h1 class="title text-center">Login / Register</h1>

            <div class="row">
            <div class="col-md-6">
            <label for="Name" class="form-label text-white">NAME</label>
            <input type="text" class="form-control">

            <label for="Phone Number" class="form-label mt-2 text-white">PHONE NUMBER</label>
            <input type="text" class="form-control">
            </div>

            <div class="col-md-6">
            <label for="Email" class="form-label text-white">EMAIL</label>
            <input type="text" class="form-control">

            <label for="Password" class="form-label mt-2 text-white">Password</label>
            <input type="Password" class="form-control">

            </div>
            </div>

             <div class="text-center mt-3">
            <div class="d-flex justify-content-center align-items-center">
            <a href="dashboard.php" class="btn btn-primary mt-2">submit</a>
            </div>
             </div>
          
            <div class="text-center mt-3">
          <p class="text-white">
            Don't have an account? 
            <a href="register.php" class="text-primary fw-bold">Register now</a>
          </p>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.topology.min.js"></script>
<script>
VANTA.TOPOLOGY({
  el: "#vanta-bg",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00
})
</script>
  </body>
</html>