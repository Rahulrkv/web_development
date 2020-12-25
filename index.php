<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="rahul" content="sms">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
  <!-- main css -->
    <link rel="stylesheet" href="style.css">
    <title>online work</title>
  </head>
  <body>
    <!-- nav bar  -->

    <div class="container-fluid uppers">
      <div class="row ">
        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
          <form class="form-inline justify-content-end form">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="background-color:#563d7c;">
        <a href="index.php" class="navbar-brand"><i class="fab fa-canadian-maple-leaf"></i> </a>
        <button type="button" class="navbar-toggler" name="button" data-toggle="collapse" data-target="#myMeny">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myMeny">
            <span class="navbar-text hi">instant job!!</span>
            <ul class="navbar-nav ml-auto pl-5 custom-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link ">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="#services" class="nav-link">SERVICES</a>
                    </li>
                <li class="nav-item">
                    <a href="#reg" class="nav-link">REGISTRATION</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>    <!-- nav end -->
<!-- jumbotron header start -->
<header class="jumbotron header-img" style="background-image :url(image/6.jpg);margin-top: 1px;">
<div class="mymedia">
  <h1 class="text-uppercase text-success font-weight-bold ">welcome to osms</h1>
  <p class="font-italic text-warning" style="font-size:30px; color:black; ">work make perfect</p>

  <a href="login.php" class="btn btn-primary mr-5 mt-15" id="login">login</a>
  <a href="#reg" class="btn btn-danger mr-5 mt-15">signup</a>

</div>
</header>
<!-- end jum header  -->
<!-- intro start -->
<div class="container">
  <div class="jumbotron">
    <h1 class="text-center">OSMS</h1>
    <p>Lorem ipsum dolor sit amet,
      consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut
      labore et dolore magna aliqua. Ut enim
       ad minim veniam, quis nostrud exercitation
       ullamco laboris nisi ut aliquip ex ea commodo
       consequat. Duis aute irure dolor in reprehenderit
       in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui of
       ficia deserunt mollit anim id est laborum.</p>
  </div>
</div>

<!-- start services section -->
<div class="container border-bottom" id="services" >
  <h4 class=text-center>our services</h4>
  <div class="row">

    <div class="col-sm-4 text-center">
     <a href="#"><i class="fas fa-tv fa-7x mb-4 text-success text-center"></i></a>
    <h5>Electronoic Appliances</h5>
    </div>

    <div class="col-sm-4 text-center">
      <a href="#"><i class="fas fa-sliders-h fa-7x mb-4 text-primary text-center"></i></a>
      <h5>Section Maintenance</h5>
    </div>

    <div class="col-sm-4 text-center">
      <a href="#"><i class="fas fa-tv fa-7x mb-4 text-info text-center"></i></a>
      <h5>Fault Repair</h5>
    </div>
  </div>
</div>
<!-- end service section -->
<!-- user start -->
   <div class="jumbotron bg-danger mt-5">
     <div class="container">
      <h2 class="text-center text-white mb-5" id="happy">HAPPY CUSTOMERS</h2>
<div class="row">

  <div class="col-lg-3 col-sm-6">
    <div class="card shodow-lg mb-2">
      <div class="card-body">
        <img class="img-fluid"src="image/d.png"alt="" style="border-radius:100">
        <h4 class="card-title text-center mt-2">Sandhya Rathi</h4>
        <p class="card-text text-center"> EXECUTIVE MANAGER</p>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-sm-6">
    <div class="card shodow-lg mb-2">
      <div class="card-body">
        <img class="img-fluid"src="image/g.png"alt="" style="border-radius:100">
        <h4 class="card-title text-center mt-2">Priya singh</h4>
        <p class="card-text text-center">SENIOR ASSISTANT</p>
      </div>
  </div>
</div>

  <div class="col-lg-3 col-sm-6">
    <div class="card shodow-lg mb-2">
      <div class="card-body">
        <img class="img-fluid"src="image/b.png"alt="" style="border-radius:100">
        <h4 class="card-title text-center mt-2">Paurl patel</h4>
        <p class="card-text text-center">PROJECT LEADER</p>
      </div>
  </div>
</div>

  <div class="col-lg-3 col-sm-6">
    <div class="card shodow-lg mb-2">
      <div class="card-body">
        <img class="img-fluid"src="image/e.png"alt="" style="border-radius:100">
        <h4 class="card-title text-center mt-2">Preeti singh</h4>
        <p class="card-text text-center">SENIOR PROJECT DIRECTOR</p>
      </div>
    </div>
  </div>

     </div>
   </div>
 </div>
<!-- user done -->

<!-- start registration form -->
<?php
include_once('registration.php');
 ?>




<!-- meet -->
<div class="container" id="contact">
  <h2 class=text-center>About us</h2>
  <div class="row">
    <div class="col-sm-8">
      <form method="post" action="index.php">

        <fieldset class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="m_name" required="required">
          <small class="text-muted">We'll never share your name with anyone else.</small>
        </fieldset>
        <fieldset class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" name="m_email" id="value" placeholder="Enter subject" required="required">
        </fieldset>
        <textarea class="form-control" name="m_message" placeholder="please review us!!" rows=2 cols=10 maxlength=250 required
        value="<? php if (isset($mss)) { echo $mss;}?>">
        </textarea>

        <button type="submit" name="m_submit" class="btn btn-primary mt-2">send</button>


      </br>
      </br>
    </br>
  </br>
</form>
</div>

<?php
include_once('dbconnect.php');

if (isset($_REQUEST['m_submit'])) {
$ms_name=$_REQUEST['m_name'];
// echo $rq_name."<br>";
$ms_email=$_REQUEST['m_email'];
$ms_message=$_REQUEST['m_message'];
// echo $ms_name."<br>";
// echo $ms_message."<br>";



$sql="INSERT INTO rating(m_name,m_email,m_message) VALUES
('$ms_name','$ms_email','$ms_message')";
$result=$conn->query($sql);
}

if (isset($_REQUEST['m_submit'])) {
  $mss='<div class="alert alert-warning mt-2" role="alert">
    email alresdy regoistred!!</div>';
}
 ?>

<div class="col-md-4 text-center">
  <strong>Headquarter</strong><br>
  <address class="">
    512,New Area ,city-Tilouthu oppsoite main bazar
    Dist-Rohtas State-Bihar
    pincode:821312
    phone:7621012054</br>
    <a href="#">www.osms.com</a>
  </address>
  <strong>franchise</strong>
  <address class="">
    52,main road ,city-indripuri oppsoite
    indripuri police station
    Dist-Rohtas State-Bihar
    pincode:821308</br>
    phone:65264214054</br>
    <a href="#">www.osms.com</a>
  </address>
</div>
</div>
</div>


<footer class="container-fluid bg-dark mb-10">
<div class="container">
  <div class="row py-3">
    <div class="col-md-6">
      <span class="mr-2 text-white font-weight-bold">Follow us:</span>
      <a href="https://www.facebook.com/" target="_blank" class="mr-2"><i class="fab fa-facebook"></i></a>
      <a href="https://www.twitter.com/" target="_blank" class="mr-2"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
    <div class="col-md-6">

    <small style="margin-left:200px; color:red;">designed by Rk infotech &copy; 2020  <a href="admin/login.php"><small style="margin-left:20px;" > Admin Login</small> </a>
</small>

    </div>
  </div>

</div>





</footer>





    <!-- Boostrap JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
  </body>
</html>
