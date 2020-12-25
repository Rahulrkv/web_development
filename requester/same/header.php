<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
    <title> <?php echo TITLE; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">

    <!-- main css -->
      <link rel="stylesheet" type="text/css" href="style.css">





  </head>

  <body>
  <!--top navbar -->
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0  shadow" >
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php"><h4>osms</h4></a>

</nav>
 <!--end top navbar-->

  <!-- container -->
  <div class="container-fluid" style="margin-top:25px;">
    <div class="row"> <!--start row -->

      <div class="col-md-2 sidebar py-5 d-print-none" id="bgf"> <!-- sidebar 1st column-->
        <div class="sidebar-sticky div3">
          <ul class="nav flex-column">
             <h4 class="text-primary  text-center mb-4">Dashboard</h4>

            <li class="nav-item"><a class="nav-link dl <?php echo (basename($_SERVER['PHP_SELF']) == "requesterprofile.php")?"active":"";?>" href="requesterprofile.php"><i class="fas fa-user mr-2"></i>Profile</a></li>

            <li class="nav-item"><a class="nav-link dl <?php echo (basename($_SERVER['PHP_SELF']) == "submitrequest.php")?"active":"";?>" href="submitrequest.php"><i class="fab fa-accessible-icon mr-2"></i>Submit Request</a></li>

            <li class="nav-item"><a class="nav-link dl <?php echo (basename($_SERVER['PHP_SELF']) == "status.php")?"active":"";?>" href="status.php"><i class="fas fa-stream mr-2"></i>Service Status</a></li>

            <li class="nav-item"><a class="nav-link dl <?php echo (basename($_SERVER['PHP_SELF']) == "changepassword.php")?"active":"";?>" href="changepassword.php"><i class=" fas fa-key mr-2"></i>Change Password</a></li>

            <li class="nav-item"><a class="nav-link dl <?php echo (basename($_SERVER['PHP_SELF']) == "logout.php")?"active":"";?>" href="logout.php"><i class="fas fa-sign-in-alt mr-2 "></i>Logout</a></li>
          </ul>
        </div>
      </div> <!-- end side bar -->



    <!-- </div>  end row
  </div> end container -->





















  <!-- <script>
  // Add active class to the current button (highlight it)
  var header = document.getElementById("myDIV");
  var btns = header.getElementsByClassName("dl");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
    });
  }
  </script> -->




    <!-- Boostrap JavaScript -->
    <!-- <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script> -->

  <!-- </body>
</html> -->
