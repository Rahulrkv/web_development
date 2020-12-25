<?php
define('TITLE' , 'change password');
include('requester/same/header.php');
include('dbconnect.php');
session_start();
if ($_SESSION['user']) {
  $rEmail=$_SESSION['user'];
}
else{
  echo "<script>location.href='login.php'</script>";
}


// selecting data from database and
$sql="SELECT `r_email` , `r_password` FROM `thumb` WHERE r_email='$rEmail'";
$result=$conn->query($sql);
if ($result->num_rows==1) {
  $row=$result->fetch_assoc();
  $r_oldpass=$row['r_password'];
}

// store data from input to variable for matching data
if (isset($_REQUEST['passmatch']))
{
  $match=$_REQUEST['oldpass'];
 if ($match==$r_oldpass) {
   $sms='<div class="alert alert-primary xl-8 lg-8 col-sm-8 mt-8  mx-2" role="alert" style="display:inline-block;"> password successfully matched</div>';

   $sql="SELECT `r_password` FROM `thumb` WHERE r_email='$rEmail'"; //show the previous password
  $result=$conn->query($sql);
  if ($result->num_rows==1) {
  $row=$result->fetch_assoc();
  $r_uppass=$row['r_password'];
  }
}

else {
  $sms='<div class="alert alert-danger xl-10 lg-8 col-sm-8 mt-2" role="alert" style="display:inline-block;">password is not match..try again</div>';

}
  if ($_REQUEST['oldpass'] == "") {     //empty input for old password

    $sms='<div class="alert alert-danger xl-8 lg-8 col-sm-8 mt-8  mx-2" role="alert" style="display:inline-block;"> password is not empty...</div>';
 }
}
// for update pro


 if (isset($_REQUEST['updatepass'])) {

   if($_REQUEST['newpass'] == "") {
     $mgs='<div class="alert alert-danger xl-10 lg-8 col-sm-8 mt-2" role="alert" style="display:inline-block;">not be blank</div>';
   }
   if ( $new=$_REQUEST['newpass']) {



$sql= "UPDATE `thumb` SET `r_password`='$new' WHERE `r_email`='$rEmail'";
   if($conn->query($sql)){
     $mgs='<div class="alert alert-primary xl-8 lg-8 col-sm-8 ml-2 " role="alert" style="display:inline-block;">
      password is changed successfuly</div>';
   }
$sql="SELECT `r_password` FROM `thumb` WHERE r_email='$rEmail'";
   $result=$conn->query($sql);
   if ($result->num_rows==1) {
   $row=$result->fetch_assoc();
   $r_uppass=$row['r_password'];

}
}
}


  ?>
    <div class="col-sm-6"> <!-- start profile area  2nd column-->
         <form class="mt-5 mx-5 shodow-lg" action="" method="post">

           <div class="form-group">
             <label for="inputEmail">Email</label><input class="form-control" type="Email" name="rEmail"
             id="rEmail" readonly value="<?php echo $rEmail?>">
           </div>

            <div class="form-group">
              <label for="oldpassword">old password</label>
              <input  class="form-control" type="password" name="oldpass" placeholder="inter password" required
                value="<?php if (isset ($_REQUEST['passmatch'])) { if ($match==$r_oldpass) { echo $r_uppass; }}?>" placeholder="enter old password">
            </div>

            <button class="btn btn-danger my-2" type="submit" name="passmatch" required>match</button>
              <?php if (isset($sms)) { echo $sms; } ?>
<?php
if (isset($_REQUEST['passmatch'])) {

  $match=$_REQUEST['oldpass'];
if ($match==$r_oldpass) {



            echo'<div class="form-group">';
              echo'<label for="newpassword">new password</label>';
              echo'<input class="form-control" type="text"  name="newpass" placeholder="inter new password">';

            echo'</div>';

            echo'<button class="btn btn-primary mt-3 mb-2 mr-1" type="submit" name="updatepass">update</button>';
              echo'<small class="text-muted text-primary">please click on update button for update password</small>';

}
}
 if (isset($mgs)){echo $mgs;} ?>


<?php include('requester/same/footer.php'); ?>
