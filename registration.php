
<?php
include_once('dbconnect.php');

if (isset($_REQUEST['submit'])) {
$rq_name=$_REQUEST['r_Name'];
// echo $rq_name."<br>";
$rq_email=$_REQUEST['r_Email'];
$rq_password=$_REQUEST['r_Password'];
// echo $rq_password."<br>";


$sql="SELECT r_email FROM thumb WHERE r_email='".$_REQUEST['r_Email']."'";
$result=$conn->query($sql);

if ($result->num_rows==1) {
  $regsms='<div class="alert alert-warning mt-2" role="alert">
    email alresdy regoistred!!</div>';
}
else {
// $sql="INSEsRT INTO requister (r_name,r_email,r_password) VALUES ('$rq_name','$rq_email','$rq_password')";
$sql="INSERT INTO thumb(r_name,r_email,r_password) VALUES
('$rq_name','$rq_email','$rq_password')";
$conn->query($sql);
$regsms='<div class="alert alert-primary mt-5" role="alert">
successfully added acount
</div>';
}
}
 ?>


<div class="container mt-6" id="reg">
<h2 class="text-center mt-5">Create an account</h2>
<div class="row mt-2 mb-5">
  <div class="col-md-6 offset-md-3">
    <form action="" method="post" class="shadow-lg p-4" >

      <fieldset class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="r_Name" placeholder="Enter Your Name" required="required">
      </fieldset>

      <fieldset class="form-group">
        <label for="email1" class="font-weight-bold">Email address</label>
        <input type="email" class="form-control" id="email1"name="r_Email" placeholder="Enter email" Required="Required">
        <small class="text-muted">We'll never share your email with anyone else.</small>
      </fieldset>

      <fieldset class="form-group">
        <label for="password1" class="font-weight-bold">Password</label>
        <input type="password" class="form-control" id="password1" name="r_Password"  placeholder="Password" Required="required">
      </fieldset>

      <button class="btn btn-danger btn-block shadow-sm font-weight-bold text-uppercase" type="submit" name="submit">sign up</button>
      <?php if (isset($regsms)) {
      echo $regsms;
      } ?>

    </form>

  </div>

</div>

</div>

<!-- end000 -->
