<?php
define('TITLE' , 'Request profile');
include('requester/same/header.php');
include('dbconnect.php');
session_start();
if ($_SESSION['user']) {
  $rEmail=$_SESSION['user'];
}
else{
  echo "<script>location.href='login.php'</script>";
}


$sql="SELECT `r_email` , `r_name` FROM `thumb` WHERE r_email='$rEmail'";
$result=$conn->query($sql);
if ($result->num_rows==1) {
  $row=$result->fetch_assoc();
  $r_upname=$row['r_name'];
}

if (isset($_REQUEST['nameUpdate'])) {

  if ($_REQUEST['rName'] == "") {
   $msg='<div class="alert alert-warning col-sm-5 mt-4" role="alert">Name should not be blank!!</div>';
    }

  else{
    $newName=$_REQUEST['rName'];
    $sql="UPDATE `thumb` SET `r_name`='$newName' WHERE `r_email`='$rEmail'";
  if ($conn->query($sql)==TRUE) {
    $msg='<div class="alert alert-primary col-sm-5 mt-4" role="alert">Name successfuly changed</div>';
     $sql="SELECT `r_name` FROM `thumb` WHERE r_email='$rEmail'";
$result=$conn->query($sql);
if ($result->num_rows==1) {
  $row=$result->fetch_assoc();
  $r_upname=$row['r_name'];
}
  }
  else{

$msg='<div class="alert alert-danger col-sm-5 mt-4" role="alert">unable to update name</div>';
   }
 }
}
?>
<div class="col-sm-6"> <!-- start profile area -2nd column-->
        <form class="mt-5 mx-5 shodow-lg" action="" method="post">

          <div class="form-group">
            <label for="inputEmail">Email</label><input class="form-control" type="Email" name="rEmail"
            id="rEmail" readonly value="<?php echo $rEmail?>">
          </div>

          <div class="form-group">
            <label for="rName">Name</label><input class="form-control" type="text" name="rName" id="rName" value="<?php echo $r_upname;?>">
          </div>

         <?php
         if (isset($msg)) {
            echo $msg;
          }

          ?>
          <button class="btn btn-danger" type="submit" name="nameUpdate">update</button>
        </form>
      </div>

    </div> <!-- end row-->
  </div> <!-- end container -->

<?php include('requester/same/footer.php'); ?>
