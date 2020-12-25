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


<!-- start 2nd column -->
<div class="col-sm-8 mt-5 mx-5 jumbotron">
  <h3 class="text-center">customer bill</h3>

<?php
if (isset($_REQUEST['purchase'])) {
  $sql= "SELECT * FROM assests WHERE product_id={$_REQUEST['id']}" ;
  $result=$conn->query($sql);
  $row=$result->fetch_assoc();
}

if (isset($_REQUEST['issue'])) {

      $product_id=$_REQUEST['product_id'];
      $product_name=$_REQUEST['product_name'];
      $available=$_REQUEST['available'];
      $sellingcosteach=$_REQUEST['selling_cost_each'];
      $customer_name=$_REQUEST['customer_name'];
      $customer_address=$_REQUEST['customer_address'];
      $quantity=$_REQUEST['quantity'];
      $total_price=$_REQUEST['total_price'];
      $dop=$_REQUEST['date_of_purchase'];
      if (isset($_REQUEST['issue'])) {
        if ($_REQUEST['product_id'] == "" ) {
          echo "enter data";
        }

      else
        {

$sql="INSERT INTO purchase(product_id,product_name,available,selling_cost_each,customer_name,customer_address,quantity,total_price,date_of_purchase)
  VALUES('$product_id','$product_name','$available','$sellingcosteach','$customer_name','$customer_address','$quantity','$total_price','$dop')";
  $result=$conn->query($sql);
if ($result==TRUE) {

echo '<script>window.alert("one item sold")</script>';
$print='<input type="submit" class="btn btn-danger mt-5 d-print-none" name="print" value="print" onclick="window.print()">';
}
}
}
else {
  echo "error in selling";
}}


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
         <input type="text"class="form-control" name="product_name" readonly required="required" value="<?php if (isset($_REQUEST['id'])) { echo $row['product_name'];} if (isset($_REQUEST['product_name']))  { echo $_REQUEST['product_name'];} ?>">
       </fieldset>

       <fieldset class="form-group">
       <label for="available">available</label>
       <input type="available" class="form-control" id="available" readonly name="available" placeholder="Enter availability" Required="Required" value="<?php if (isset($_REQUEST['id'])) { echo $row['available'];} if (isset($_REQUEST['available']))  { echo $_REQUEST['available'];} ?>">
       </fieldset>

       <fieldset class="form-group">
       <label for="selling_cost_each">selling cost each</label>
       <input type="text" class="form-control" readonly id="selling_cost_each" name="selling_cost_each"  placeholder="original cost of product" Required="required" value="<?php if (isset($_REQUEST['id'])) { echo $row['selling_cost_each'];} if (isset($_REQUEST['selling_cost_each']))  { echo $_REQUEST['selling_cost_each'];} ?>">
       </fieldset>

       <fieldset class="form-group">
       <label for="customer_name">customer name</label>
       <input type="text" class="form-control" name="customer_name" placeholder="enter your name"  required="required">
       </fieldset>

       <fieldset class="form-group">
       <label for="customer_address">customer address</label>
       <input type="text" class="form-control" name="customer_address" placeholder="enter tour address" required="required" value="">
       </fieldset>

       <fieldset class="form-group">
         <label for="quantity">quantity</label>
         <input type="text" class="form-control" name="quantity" placeholder="Enter total products" required="required" value="">
       </fieldset>

       <fieldset class="form-group">
       <label for="total_price">total price</label>
       <input type="text" class="form-control" name="total_price"  required="required" value="">
       </fieldset>

       <fieldset class="form-group">
       <label for="date_of_purchase">date of purcahse</label>
       <input type="date" class="form-control" name="date_of_purchase"  required="required" value="">
       </fieldset>

       <button class="btn btn-warning btn-block shadow-sm font-weight-bold text-uppercase d-print-none" type="submit" name="issue">sell product</button>
      <a href="assests.php" class="btn btn-danger btn-block shadow-sm font-weight-bold  d-print-none text-uppercase" type="submit" name="close"> close</a>

      <?php if (isset($print)) {
      echo $print;
      } ?>
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
