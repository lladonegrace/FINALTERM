<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Explore modern harvesting practices reshaping traditional rice farming in the Philippines. Learn about the impact on socio-economic development, crop yield, and technological advancements.">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Modern Harvesting Practices to Reshape the Philippines' Traditional Rice Farming">
  <meta property="og:description" content="Explore modern harvesting practices reshaping traditional rice farming in the Philippines. Learn about the impact on socio-economic development, crop yield, and technological advancements.">
  <meta property="og:image" content="images/farmers.jpg">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/styles.css">
  <link rel="icon" type="image/x-icon" href="images/logo.ico">
  <title>Modern Harvesting Practices to Reshape the Philippines' Traditional Rice Farming</title>
  <!-- Add Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

<?php
if(isset($_SESSION['email'])){
  $email = $_SESSION['email'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
  $user = mysqli_fetch_array($query);
}
?>

<!-- HEADER -->
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-green">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo.png" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about-us.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="content.php">Content</a>
        </li>
      </ul>
      <!-- Search bar -->
      <form class="form-inline my-2 my-lg-0 mr-2">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success btn-outline-white" type="submit">
        <img src="images/maglass.ico" alt="search">
        </button>
      </form>
      <!-- Profile icon -->
      <ul class="navbar-nav">
        <?php if(isset($user)): ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle menu-icon"></i> <?php echo htmlspecialchars($user['name']); ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="profile.php">Profile</a>
            <a class="dropdown-item" href="account-settings.php">Account Settings</a>
            <a class="dropdown-item" href="signup.php">Log Out</a>
          </div>
        </li>
        <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log In</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>
</header>

<!-- CONTENT -->
<div class="intro">
  <img src="images/farmers.jpg" alt="MARCA">
  <div class="intro-content">
    <h1>Welcome to Modern Harvesting Practices Reshaping <br> Traditional Rice Farming in the Philippines</h1>
    <p>Discover how modern harvesting practices are transforming traditional<br> rice farming in the Philippines, revolutionizing efficiency and sustainability.</p>
    <a class="read-more" href="content.php">Read More</a>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <p>Follow us on social media:</p>
  <p>
    <a href="https://www.facebook.com/YourFacebookPage" target="_blank"><img src="images/fb.ico" alt="Facebook Icon"></a>
    <a href="https://www.instagram.com/YourInstagramHandle" target="_blank"><img src="images/instagram.ico" alt="Instagram Icon"></a>
    <a href="https://twitter.com/YourTwitterHandle" target="_blank"><img src="images/twitter.ico" alt="Twitter Icon"></a>
  </p>
  <p>&copy; 2024 MARCA Agriculture. All rights reserved.</p>
</footer>

<!-- Bootstrap JS and jQuery (Optional for Bootstrap dropdowns and other features) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

/* Grace Ann B. Lladone
   Althea M. Casimiro
   Irricca G. Balin
   Marijoy S. Novora

</body>
</html>
