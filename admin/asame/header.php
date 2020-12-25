<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
    <title> <?php echo TITLE; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">

    <!-- main css -->
      <link rel="stylesheet" type="text/css" href="../style.css">





  </head>

  <body>
  <!--top navbar -->
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0  shadow d-print-none" >
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../index.php"><h4>osms</h4></a>

</nav>
 <!--end top navbar-->

  <!-- container -->
  <div class="container-fluid " style="margin-top:25px;">
    <div class="row"> <!--start row -->

      <div class="col-md-2 sidebar py-5 d-print-none" id="bgf"> <!-- sidebar 1st column-->
        <div class="sidebar-sticky div3">
          <ul class="nav flex-column">


            <li class="nav-item"><a class="nav-link dl <?php echo (basename($_SERVER['PHP_SELF']) == "dashboard.php")?"active":"";?>" href="dashboard.php"><i class="fas fa-clipboard-list mr-2"></i>Dashboard</a></li>

            <li class="nav-item"><a class="nav-link dl <?php echo (basename($_SERVER['PHP_SELF']) == "workorder.php")?"active":"";?>" href="workorder.php"><i class="fab fa-accessible-icon mr-2"></i>Work order</a></li>

            <li class="nav-item"><a class="nav-link dl <?php echo (basename($_SERVER['PHP_SELF']) == "requests.php")?"active":"";?>" href="requests"><i class="fas fa-tasks mr-2"></i>Requests</a></li>

            <li class="nav-item"><a class="nav-link dl <?php echo (basename($_SERVER['PHP_SELF']) == "assests.php")?"active":"";?>" href="assests.php"><i class=" fas fa-shopping-cart mr-2"></i>assests</a></li>

            <li class="nav-item"><a class="nav-link dl <?php echo (basename($_SERVER['PHP_SELF']) == "technician.php")?"active":"";?>" href="technician.php"><i class="fas fa-male mr-2 "></i> technician</a></li>

            <li class="nav-item"><a class="nav-link dl <?php echo (basename($_SERVER['PHP_SELF']) == "requester.php")?"active":"";?>" href="requester.php"><i class="fas fa-user mr-2"></i>Requester</a></li>

            <li class="nav-item"><a class="nav-link dl <?php echo (basename($_SERVER['PHP_SELF']) == "sellreport.php")?"active":"";?>" href="sellreport.php"><i class="fab fa-sellsy mr-2"></i>Sell Report</a></li>

            <li class="nav-item"><a class="nav-link dl <?php echo (basename($_SERVER['PHP_SELF']) == "workreport.php")?"active":"";?>" href="workreport.php"><i class="fas fa-tools mr-2"></i>work report</a></li>

            <li class="nav-item"><a class="nav-link dl <?php echo (basename($_SERVER['PHP_SELF']) == "changepassword.php")?"active":"";?>" href="changepassword.php"><i class=" fas fa-key mr-2"></i>Change Password</a></li>

            <li class="nav-item"><a class="nav-link dl <?php echo (basename($_SERVER['PHP_SELF']) == "logout.php")?"active":"";?>" href="logout.php"><i class="fas fa-sign-out-alt mr-2 "></i>Logout</a></li>

          </ul>
        </div>
      </div> <!-- end side bar -->

    <!-- </div>  end row
  </div> end container -->
