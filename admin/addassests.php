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
$product_name=$_REQUEST['product_name'];
// echo $rq_name."<br>";
$dop=$_REQUEST['date_of_purchase'];
$available=$_REQUEST['available'];
$total=$_REQUEST['total'];
$originalcosteach=$_REQUEST['original_cost_each'];
$sellingcosteach=$_REQUEST['selling_cost_each'];




$sql="SELECT product_name FROM assests WHERE product_name='".$_REQUEST['product_name']."'";
$result=$conn->query($sql);
if ($result->num_rows==1) {
    $regsms='<div class="alert alert-warning mt-2" role="alert">
product alresdy regoistred!!</div>';
}
else {
 $sql="INSERT INTO assests(product_name,date_of_purchase,available,total,original_cost_each,selling_cost_each) VALUES
('$product_name','$dop','$available','$total',$originalcosteach,'$sellingcosteach')";
$conn->query($sql);
$regsms='<div class="alert alert-primary mt-5" role="alert">
successfully added products
</div>';
 }
 
}
?>
<div class="container mt-6" id="reg">
<h2 class="text-center mt-5">Add assests</h2>
<div class="row mt-2 mb-5">
  <div class="col-md-6 offset-md-3">
    <form action="" method="post" class="shadow-lg p-4" >

      <fieldset class="form-group">
      <label for="product_name">product name</label>
      <input type="text" class="form-control" name="product_name" placeholder="Enter Your product name" required="required">
      </fieldset>

      <fieldset class="form-group">
      <label for="date_of_purchase">date of purcahse</label>
      <input type="date" class="form-control" name="date_of_purchase"  required="required">
      </fieldset>

      <fieldset class="form-group">
        <label for="available" class="font-weight-bold">available</label>
        <input type="available" class="form-control" id="available" name="available" placeholder="Enter availability" Required="Required">
      </fieldset>


      <fieldset class="form-group">
        <label for="total">Total</label>
        <input type="text" class="form-control" name="total" placeholder="Enter total products" required="required">
      </fieldset>



      <fieldset class="form-group">
        <label for="original_cost_each">original cost each</label>
        <input type="text" class="form-control" name="original_cost_each" placeholder="Enter orignial cost" required="required">
      </fieldset>

      <fieldset class="form-group">
        <label for="selling_cost_each" class="font-weight-bold">selling cost each</label>
        <input type="text" class="form-control" id="selling_cost_each" name="selling_cost_each"  placeholder="original cost of product" Required="required">
      </fieldset>


      <button class="btn btn-warning btn-block shadow-sm font-weight-bold text-uppercase" type="submit" name="submit">add prodcuts</button>
      <a href="assests.php" class="btn btn-danger btn-block shadow-sm font-weight-bold text-uppercase" type="submit" name="close"> close</a>
      <?php if (isset($regsms)) {
      echo $regsms;
      } ?>
    </form>
  </div>
 </div>
</div>


<?php
include('../admin/asame/footer.php');

 ?>
