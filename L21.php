<?php 
// PHP Logic (top pe hona best practice hai)
$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email  = $_POST['email'];
    $pass = $_POST['pass'];

    // Simple validation
    if(!empty($email) && !empty($pass)){
        $message = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS!</strong> Your email '.$email.' has been submitted successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
    } else {
        $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Please fill all fields.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Lecture 21</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Lecture 21</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">

        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Videos</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Games
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Free Fire</a></li>
            <li><a class="dropdown-item" href="#">BGMI</a></li>
          </ul>
        </li>

      </ul>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search">
        <button class="btn btn-outline-light">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Alert Message -->
<div class="container mt-3">
  <?php echo $message; ?>
</div>

<!-- Form -->
<div class="container mt-4">
  <h2>Enter your Email & Password</h2>

  <form action="" method="post">
    <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" name="pass" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>