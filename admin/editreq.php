
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
  <h3 class="text-center">update requester details</h3>

<?php
if (isset($_REQUEST['edit'])) {
  $sql= "SELECT * FROM thumb WHERE r_id={$_REQUEST['id']}" ;
  $result=$conn->query($sql);
  $row=$result->fetch_assoc();
}
if (isset($_REQUEST['update'])) {
  if ($_REQUEST['r_id'] == "" ) {
    echo "enter data";
  }
  else {

    $rid=$_REQUEST['r_id'];
    $rname=$_REQUEST['r_name'];
    $remail=$_REQUEST['r_email'];

  $sql="UPDATE thumb SET r_email='$remail', r_name='$rname' WHERE r_id='$rid'";
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

    <label for="r_login">Requester Id</label>
    <input type="text" name="r_id"  class="form-control mb-2" readonly value="<?php if (isset($_REQUEST['id'])) { echo $row['r_id'];} if (isset($_REQUEST['r_id']))  { echo $_REQUEST['r_id'];} ?>"

    <label for="r_name">Requester name</label>
    <input type="text" name="r_name" class="form-control mb-2" value="<?php if (isset($_REQUEST['id']))  { echo $row['r_name'];} if (isset($_REQUEST['r_name']))  { echo $_REQUEST['r_name'];}  ?>"

    <label for="r_email">Requester email</label>
    <input type="text" name="r_email" class="form-control mb-2" value="<?php if (isset($_REQUEST['id']))  { echo $row['r_email'];} if (isset($_REQUEST['r_id']))  { echo $_REQUEST['r_email'];} ?>"
  </div>
  <button type="submit" name="update" class="btn btn-danger ">update</button>
</form>
</div>









<?php include('../admin/asame/footer.php');  ?>
