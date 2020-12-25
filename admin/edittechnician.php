<?php
define('TITLE','requesteredit');
session_start();
if ($_SESSION['admin']) {
  $rEmail=$_SESSION['admin'];
}
else{
  echo "<script>location.href='login.php'</script>";
}
include('../dbconnect.php');

include('../admin/asame/header.php');

?>

<!-- start 2nd column -->
<div class="col-sm-7 mt-5 mx-3 jumbotron">
  <h3 class="text-center">update technician details</h3>

<?php
if (isset($_REQUEST['edit'])) {
  $sql= "SELECT * FROM addtechnician WHERE emp_id={$_REQUEST['id']}" ;
  $result=$conn->query($sql);
  $row=$result->fetch_assoc();
}
if (isset($_REQUEST['update'])) {
  if ($_REQUEST['emp_id'] == "" ) {
    echo "enter data";
  }
  else {

    $emp_id=$_REQUEST['emp_id'];
    $emp_name=$_REQUEST['emp_name'];
    $emp_address=$_REQUEST['emp_address'];
    $emp_email=$_REQUEST['emp_email'];
    $emp_phone=$_REQUEST['emp_phone'];

  $sql="UPDATE addtechnician SET emp_name='$emp_name',emp_address='$emp_address',emp_email='$emp_email',emp_phone='$emp_phone' WHERE emp_id='$emp_id'";
  $result=$conn->query($sql);
  if ($result==TRUE) {
echo '<script>window.alert("record updated successfully")</script>';
  }
  else {
    echo "error in update data";
  }
  }
}
 ?>
<form class="" action="" method="post">
  <div class="form-group">

    <label for="r_login">technician Id</label>
    <input type="text" name="emp_id"  class="form-control mb-2" readonly value="<?php if (isset($_REQUEST['id'])) { echo $row['emp_id'];} if (isset($_REQUEST['emp_id']))  { echo $_REQUEST['emp_id'];} ?>"

    <label for="r_name">technician name</label>
    <input type="text" name="emp_name" class="form-control mb-2" value="<?php if (isset($_REQUEST['id']))  { echo $row['emp_name'];} if (isset($_REQUEST['emp_name']))  { echo $_REQUEST['emp_name'];}  ?>"

    <label for="r_email">technician address</label>
    <input type="text" name="emp_address" class="form-control mb-2" value="<?php if (isset($_REQUEST['id']))  { echo $row['emp_address'];} if (isset($_REQUEST['emp_address']))  { echo $_REQUEST['emp_address'];} ?>"
    </div>
    <label for="r_email">technician email</label>
    <input type="text" name="emp_email" class="form-control mb-2" value="<?php if (isset($_REQUEST['id']))  { echo $row['emp_email'];} if (isset($_REQUEST['emp_email']))  { echo $_REQUEST['emp_email'];} ?>"
  </div>

    <label for="r_email">technician phone</label>
    <input type="text" name="emp_phone" class="form-control mb-2" value="<?php if (isset($_REQUEST['id']))  { echo $row['emp_phone'];} if (isset($_REQUEST['emp_phone']))  { echo $_REQUEST['emp_phone'];} ?>"
  </div>
  <button type="submit" name="update" class="btn btn-danger ">update</button>
</form>
</div>









<?php include('../admin/asame/footer.php');  ?>
