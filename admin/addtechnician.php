<?php
define('TITLE','requester');
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

<?php
if (isset($_REQUEST['submit'])) {
$emp_name=$_REQUEST['emp_Name'];
// echo $rq_name."<br>";
$emp_address=$_REQUEST['emp_Address'];
$emp_email=$_REQUEST['emp_Email'];
$emp_phone=$_REQUEST['emp_Phone'];
$emp_password=$_REQUEST['emp_Password'];

$sql="SELECT emp_email FROM addtechnician WHERE emp_email='".$_REQUEST['emp_Email']."'";
$result=$conn->query($sql);
if ($result->num_rows==1) {
    $regsms='<div class="alert alert-warning mt-2" role="alert">
    email alresdy regoistred!!</div>';
}
else {
 $sql="INSERT INTO addtechnician(emp_name,emp_address,emp_email,emp_phone,emp_password) VALUES
('$emp_name','$emp_address','$emp_email','$emp_phone','$emp_password')";
$conn->query($sql);
$regsms='<div class="alert alert-primary mt-5" role="alert">
successfully added acount
</div>';
 }
}
?>
<div class="container mt-6" id="reg">
<h2 class="text-center mt-5">Add technician</h2>
<div class="row mt-2 mb-5">
  <div class="col-md-6 offset-md-3">
    <form action="" method="post" class="shadow-lg p-4" >

      <fieldset class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="emp_Name" placeholder="Enter Your Name" required="required">
      </fieldset>

      <fieldset class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" name="emp_Address" placeholder="Enter Your address" required="required">
      </fieldset>

      <fieldset class="form-group">
        <label for="email1" class="font-weight-bold">Email address</label>
        <input type="email" class="form-control" id="email1"name="emp_Email" placeholder="Enter email" Required="Required">
        <small class="text-muted">We'll never share your email with anyone else.</small>
      </fieldset>

      <fieldset class="form-group">
        <label for="phone">phone</label>
        <input type="text" class="form-control" name="emp_Phone" placeholder="Enter Your Phone" required="required">
      </fieldset>

      <fieldset class="form-group">
        <label for="password1" class="font-weight-bold">Password</label>
        <input type="password" class="form-control" id="password1" name="emp_Password"  placeholder="Password" Required="required">
      </fieldset>

      <button class="btn btn-danger btn-block shadow-sm font-weight-bold text-uppercase" type="submit" name="submit">sign up</button>
      <?php if (isset($regsms)) {
      echo $regsms;
      } ?>
    </form>
  </div>
 </div>
</div>
<?php include('../admin/asame/footer.php');  ?>
