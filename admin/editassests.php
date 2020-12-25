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
<div class="col-sm-8 mt-5 mx-5 jumbotron">
  <h3 class="text-center">update assests details</h3>

<?php
if (isset($_REQUEST['edit'])) {
  $sql= "SELECT * FROM assests WHERE product_id={$_REQUEST['id']}" ;
  $result=$conn->query($sql);
  $row=$result->fetch_assoc();
}
if (isset($_REQUEST['update'])) {
  if ($_REQUEST['product_id'] == "" ) {
    echo "enter data";
  }
  else {
    $product_id=$_REQUEST['product_id'];
    $product_name=$_REQUEST['product_name'];
    $dop=$_REQUEST['date_of_purchase'];
    $available=$_REQUEST['available'];
    $total=$_REQUEST['total'];
    $originalcosteach=$_REQUEST['original_cost_each'];
    $sellingcosteach=$_REQUEST['selling_cost_each'];

  $sql="UPDATE assests SET product_name='$product_name',date_of_purchase='$dop',available='$available',original_cost_each='$originalcosteach',selling_cost_each='$sellingcosteach' WHERE product_id='$product_id'";
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
 <div class="container mt-5" id="reg">
 <h2 class="text-center mt-5"></h2>
 <div class="row mt-2 mb-5">
   <div class="col-sm-6 offset-md-3">
     <form action="" method="post" class="shadow-lg p-4" >
       <fieldset class="form-group">
       <label for="product_id">product id</label>
       <input type="text" class="form-control" name="product_id" required="required" readonly value="<?php if (isset($_REQUEST['id'])) { echo $row['product_id'];} if (isset($_REQUEST['product_id']))  { echo $_REQUEST['product_id'];} ?>">
       </fieldset>

       <fieldset class="form-group">
       <label for="product_name">product name</label>
       <input type="text" class="form-control" name="product_name"  required="required" value="<?php if (isset($_REQUEST['id'])) { echo $row['product_name'];} if (isset($_REQUEST['product_name']))  { echo $_REQUEST['product_name'];} ?>">
       </fieldset>

       <fieldset class="form-group">
       <label for="date_of_purchase">date of purcahse</label>
       <input type="date" class="form-control" name="date_of_purchase"  required="required" value="<?php if (isset($_REQUEST['id'])) { echo $row['date_of_purchase'];} if (isset($_REQUEST['date_of_purchase']))  { echo $_REQUEST['date_of_purchase'];} ?>">
       </fieldset>

       <fieldset class="form-group">
         <label for="available" class="font-weight-bold">available</label>
         <input type="available" class="form-control" id="available" name="available" placeholder="Enter availability" Required="Required" value="<?php if (isset($_REQUEST['id'])) { echo $row['available'];} if (isset($_REQUEST['available']))  { echo $_REQUEST['available'];} ?>">
       </fieldset>


       <fieldset class="form-group">
         <label for="total">Total</label>
         <input type="text" class="form-control" name="total" placeholder="Enter total products" required="required" value="<?php if (isset($_REQUEST['id'])) { echo $row['total'];} if (isset($_REQUEST['total']))  { echo $_REQUEST['total'];} ?>">
       </fieldset>



       <fieldset class="form-group">
         <label for="original_cost_each">original cost each</label>
         <input type="text" class="form-control" name="original_cost_each" placeholder="Enter orignial cost" required="required" value="<?php if (isset($_REQUEST['id'])) { echo $row['original_cost_each'];} if (isset($_REQUEST['original_cost_each']))  { echo $_REQUEST['original_cost_each'];} ?>">
       </fieldset>

       <fieldset class="form-group">
         <label for="selling_cost_each" class="font-weight-bold">selling cost each</label>
         <input type="text" class="form-control" id="selling_cost_each" name="selling_cost_each"  placeholder="original cost of product" Required="required" value="<?php if (isset($_REQUEST['id'])) { echo $row['selling_cost_each'];} if (isset($_REQUEST['selling_cost_each']))  { echo $_REQUEST['selling_cost_each'];} ?>">
       </fieldset>


       <button class="btn btn-warning btn-block shadow-sm font-weight-bold text-uppercase" type="submit" name="update">update prodcuts</button>

      <a href="assests.php" class="btn btn-danger btn-block shadow-sm font-weight-bold text-uppercase" type="submit" name="close"> close</a>

       <?php if (isset($regsms)) {
       echo $regsms;
       } ?>
     </form>
   </div>
  </div>
 </div>



<?php include('../admin/asame/footer.php');  ?>
