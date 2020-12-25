 <?php
 define('TITLE' , 'change password');
 include('../admin/asame/header.php');
 include('../dbconnect.php');
 session_start();
 if ($_SESSION['admin']) {
   $admin_email=$_SESSION['admin'];
 }
 else{
   echo "<script>location.href='login.php'</script>";
 }


 // selecting data from database and
 $sql="SELECT `admin_email` , `admin_password` FROM `admin_login` WHERE admin_email='$admin_email'";
 $result=$conn->query($sql);
 if ($result->num_rows==1) {
   $row=$result->fetch_assoc();
   $admin_oldpass=$row['admin_password'];
 }

 // store data from input to variable for matching data
 if (isset($_REQUEST['passmatch']))
 {
   $match=$_REQUEST['oldpass'];
  if ($match==$admin_oldpass) {
    $sms='<div class="alert alert-primary xl-8 lg-8 col-sm-8 mt-8  mx-2" role="alert" style="display:inline-block;"> password successfully matched</div>';

    $sql="SELECT `admin_password` FROM `admin_login` WHERE admin_email='$admin_email'"; //show the previous password
   $result=$conn->query($sql);
   if ($result->num_rows==1) {
   $row=$result->fetch_assoc();
   $admin_uppass=$row['admin_password'];
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



 $sql= "UPDATE `admin_login` SET `admin_password`='$new' WHERE `admin_email`='$admin_email'";
    if($conn->query($sql)){
      $mgs='<div class="alert alert-primary xl-8 lg-8 col-sm-8 ml-2 " role="alert" style="display:inline-block;">
       password is changed successfuly</div>';
    }
 $sql="SELECT `admin_password` FROM `admin_login` WHERE admin_email='$admin_email'";
    $result=$conn->query($sql);
    if ($result->num_rows==1) {
    $row=$result->fetch_assoc();
    $r_uppass=$row['admin_password'];

 }
 }
 }


   ?>
     <div class="col-sm-6"> <!-- start profile area  2nd column-->
          <form class="mt-5 mx-5 shodow-lg" action="" method="post">

            <div class="form-group">
              <label for="inputEmail">Email</label><input class="form-control" type="Email" name="adminEmail"
              id="adminEmail" readonly value="<?php echo $admin_email?>">
            </div>

             <div class="form-group">
               <label for="oldpassword">old password</label>
               <input  class="form-control" type="password" name="oldpass" placeholder="inter password" required
                 value="<?php if (isset ($_REQUEST['passmatch'])) { if ($match==$admin_oldpass) { echo $admin_uppass; }}?>" placeholder="enter old password">
             </div>

             <button class="btn btn-danger my-2" type="submit" name="passmatch" required>match</button>
               <?php if (isset($sms)) { echo $sms; } ?>
               
     <?php
     if (isset($_REQUEST['passmatch'])) {

     $match=$_REQUEST['oldpass'];
     if ($match==$admin_oldpass) {



             echo'<div class="form-group">';
               echo'<label for="newpassword">new password</label>';
               echo'<input class="form-control" type="text"  name="newpass" placeholder="inter new password">';

             echo'</div>';

             echo'<button class="btn btn-primary mt-3 mb-2 mr-1" type="submit" name="updatepass">update</button>';
               echo'<small class="text-muted text-primary">please click on update button for update password</small>';

     }
     }
  if (isset($mgs)){echo $mgs;} ?>


 <?php include('../admin/asame/footer.php'); ?>
