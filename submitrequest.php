<?php
define('TITLE' ,'submit requester');
include('requester/same/header.php');
include('dbconnect.php');

session_start();
if ($_SESSION['user']) {
  $rEmail=$_SESSION['user'];

}
else{

}
?>
<?php

if (isset($_REQUEST['submit'])) {
$r_info=$_REQUEST['info'];
$r_des=$_REQUEST['des'];
$r_name=$_REQUEST['name'];
$r_add1=$_REQUEST['add1'];
$r_add2=$_REQUEST['add2'];
$r_city=$_REQUEST['city'];
$r_state=$_REQUEST['state'];
$r_zip=$_REQUEST['zip'];
$r_email=$_REQUEST['email'];
$r_phone=$_REQUEST['phone'];
$r_date=$_REQUEST['date'];


$sql="INSERT INTO `submitrequest`(`request_info`, `request_des`, `request_name`, `request_add1`, `request_add2`, `request_city`, `request_state`, `request_zip`, `request_email`, `request_mobile`, `request_date`) VALUES
('$r_info','$r_des','$r_name','$r_add1','$r_add2','$r_city','$r_state','$r_zip','$r_email','$r_phone','$r_date')";
$result=$conn->query($sql);
if ($result==TRUE) {

$follow=mysqli_insert_id($conn);
$_SESSION['genid']=$follow;
  $mgs="<div class='alert alert-primary col-md-6  mt-5  d-print-none' role='alert' autofocus> request added successfully</div>";
  echo "<script>location.href='printservice.php'</script>";
}
else {
  $mgs="<div class='alert alert-danger col-md-6  mt-5' role='alert'> request not submitted</div>";

}
}
 ?>



<div class="col-md-8 mx-5 my-5" id="bgy">
<form  action="" method="POST" id="myForm">
  <div  class="form-group">

        <label for="info"> Request Info</label>
        <input type="text" name="info" value="<?php  if (isset($_REQUEST['info'])) { echo $_REQUEST['info'];
        }?>" autofocus class="form-control mb-4" placeholder="write product and damage type" required >

        <label for="descrption">Description</label>
        <input type="text" name="des" value="<?php if (isset($_REQUEST['des'])) { echo $_REQUEST['des'];
        } ?>" class="form-control mb-4" placeholder="wirte details of damage" required>

        <label for="name">Name</label>
        <input type="text" name="name" value=" <?php  if (isset($_REQUEST['name'])) { echo $_REQUEST['name'];
        }?>" class="form-control mb-4" placeholder="Name of requesters" required>

    <div class="row"><!-- address row -->
      <div class="col-sm-6">
        <label for="address line 1">Address line 1</label>
        <input type="text" name="add1" value="<?php if(isset($_REQUEST['add1'])) {echo  $_REQUEST['add1'];} ?>" class="form-control mb-4" required>
      </div>
      <div class="col-sm-6">
        <label for="address line 2">Address line 2</label>
        <input type="text" name="add2" value="<?php  if (isset($_REQUEST['add2'])) { echo $_REQUEST['add2'];
        }?>" class="form-control mb-4">
      </div>
    </div>

    <div class="row"> <!-- zip code row -->
      <div class="col-sm-5">
        <label for="city">city</label>
        <input type="text" name="city" value="<?php  if (isset($_REQUEST['city'])) { echo $_REQUEST['city'];
        }?>" class="form-control mb-4" required>
      </div>

      <div class="col-sm-4">
        <label for="state">state</label>
        <input type="text" name="state" value="<?php  if (isset($_REQUEST['state'])) { echo $_REQUEST['state'];
        }?>" class="form-control mb-4" required>
      </div>

      <div class="col-sm-3">
        <label for="zip code">zip code</label>
        <input type="text" name="zip" value="<?php  if (isset($_REQUEST['zip'])) { echo $_REQUEST['zip'];
        }?>" class="form-control mb-4" required>
      </div>
    </div>

    <div class="row"><!-- mobile row -->
     <div class="col-sm-5">
       <label for="email">Email id</label>
       <input type="email" name="email" value="<?php  if (isset($_REQUEST['email'])) { echo $_REQUEST['email'];
       }?>" class="form-control mb-4" required>
     </div>

     <div class="col-sm-4">
       <label for="<phoneeesse></phone>">phone</label>
       <input type="tel" name="phone"  value="<?php  if (isset($_REQUEST['phone'])) { echo $_REQUEST['phone'];
       }?>" class="form-control mb-4" required>
     </div>

     <div class="col-sm-3">
       <label for="date">Date</label>
       <input type="date" name="date" value="<?php  if (isset($_REQUEST['date'])) { echo $_REQUEST['date'];
       }?>" class="form-control mb-4" required>
     </div>
   </div>  <!--end mobile row-->
<input type="submit" name="submit" value="submit" class=" btn btn-primary col-sm-10 d-print-none mr-4" onclick="javascript:location.href='printservice.php'">

  <a href="submitrequest.php"class=" btn btn-secondary col-sm-1 d-print-none">reset</a>

      <?php if (isset($mgs)) {
        echo $mgs;

      } ?>
  </div>
</form>
</div>




<?php include('requester/same/footer.php') ?>
