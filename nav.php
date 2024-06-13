<?php
$login = 0;
$admin = 0;
if(isset($_SESSION['phone']))
{
  $login = 1;
}
if(isset($_SESSION['id']))
{
  $admin = 1;
}
?> 

  <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="bootstrap.bundle.min.js"></script> -->

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background:#0a0a0a;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="admin-panel.php">
      <!-- <img src="images/logo.jpeg" alt="logo" class="img-responsive" > -->
      EnerGym
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-white">
      <li class="nav-item">
        <a class="nav-link" href="package.php">Package</a>
      </li>
      <li class="nav-item">
        <a class="nav-link login" href="member_details.php" id="member">Members</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link login" href="trainer.php" id="member">Trainer</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link login" href="payment.php" id="member">Payments</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="includes/logout.php" id="logout">LogOut</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
        <?php
        if(isset($_SESSION['user']))
        {
          echo 'Welcome '.$_SESSION['user'];
        }
       else if(isset($_SESSION['admin']))
        {
          echo 'Welcome '.$_SESSION['admin'];
        }
        else
        {
          echo '';
        }
        ?>
        </span></a>
      </li>
    </ul>
  </div>
</nav>

<script src="C:\Users\Acer\Desktop\bootstrap\js\bootstrap.bundle.min.js"></script>
</body>
</html>