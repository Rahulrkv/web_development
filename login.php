
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
    <title>login</title>
  </head>
  <body>

    <?php
include_once('dbconnect.php');

//session and login form.......
 session_start();

if (!isset($_SESSION['user'])) {   //if session will not set then login and set


if (isset($_REQUEST['submit'])) {
  $user=$_REQUEST['user_email'];
  $password=$_REQUEST['user_password'];

  $sql="SELECT `r_email`, `r_password` FROM `thumb` WHERE r_email='".$_REQUEST['user_email']."' AND r_password='".$_REQUEST['user_password']."'";
$result=$conn->query($sql);
if ($result->num_rows==1){
$_SESSION['user']=$user;
echo "<script> location.href='requesterprofile.php';</script>";

}
else{
  $fail='<div class="alert alert-danger mt-5 role=alert">
  Login userid or password wrong
  </div>';
}
}
}
else {        // if successfully set session then it will redirectly login to requister.php page for all tabs while session end
 echo "<script> location.href='requesterprofile.php';</script>";
}


?>


<div class="text-center mt-5">
<a href="index.php"><i class="fas fa-home fa-2x"></i></a>
</div>

<div class="text-center mt-5" style="font-size:30px;">
<i class="fab fa-accusoft"></i>
<span>Online Maintenance Manangement System</span>
</div>

<div class="row mt-2">
  <div class="col-md-6 offset-md-3">


  <form method="post" action="" class="shadow-lg p-4">
    <fieldset class="form-group">

      <label for="email">Email address</label>
      <input type="email" class="form-control" id="login_email" name="user_email" placeholder="Enter email">
      <small class="text-muted">We'll never share your email with anyone else.</small>
    </fieldset>

    <fieldset class="form-group">
      <label>Password</label>
      <input type="password" class="form-control"  name="user_password" id="password" placeholder="Password">
    </fieldset>

    <button type="submit" name="submit" class="btn btn-primary font-weight-bold text-uppercase btn-block">Submit</button>

    <?php
    if (isset($fail)) {
      echo $fail; }   ?>
  </form>


</div>

</div>
</div>









<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/all.min.js"></script>


  </body>
</html>
