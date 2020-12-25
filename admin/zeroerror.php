<?php
include('../dbconnect.php');

?>
<div class="col-sm-6  my-5 jumbotron" ed="bgy"  style="height: 950px;">
<form  action="" method="post">
  <h5 class="text-dark text-center mb-4">Assign work order Request</h5>
  <div  class="form-group">
      <label for="request id">Request ID:</label>
      <input type="text" name="request_id" value="2" class="form-control mb-4" readonly>

        <label for="info"> Request Info</label>
        <input type="text" name="info" value="infor jkasfjksdbcfd  sdjksabkjcabsjkcasbc" class="form-control mb-4" readonly >

        <label for="descrption">Description</label>
        <input type="text" name="des" value="des" class="form-control mb-4"readonly>

        <label for="name">Name</label>
        <input type="text" name="name" value=" raju" class="form-control mb-4" readonly>

    <div class="row"><!-- address row -->
      <div class="col-sm-6">
        <label for="address line 1">Address line 1</label>
        <input type="text" name="add1" value="add1" class="form-control mb-4" readonly>
      </div>
      <div class="col-sm-6">
        <label for="address line 2">Address line 2</label>
        <input type="text" name="add2" value="add2" class="form-control mb-4" readonly>
      </div>
    </div>

    <div class="row"> <!-- zip code row -->
      <div class="col-sm-5">
        <label for="city">city</label>
        <input type="text" name="city" value="vadodara" class="form-control mb-4" readonly>
      </div>

      <div class="col-sm-4">
        <label for="state">state</label>
        <input type="text" name="state" value="bihar" class="form-control mb-4" readonly>
      </div>

      <div class="col-sm-3">
        <label for="zip code">zip code</label>
        <input type="text" name="zip" value="123456" class="form-control mb-4" readonly>
      </div>
    </div>

    <div class="row"><!-- mobile row -->
     <div class="col-sm-8">
       <label for="email">Email id</label>
       <input type="email" name="email" value="e@gmail.com" class="form-control mb-4" readonly>
     </div>

     <div class="col-sm-4">
       <label for="<phoneeesse></phone>">phone</label>
       <input type="tel" name="phone"  value="9471258468" class="form-control mb-4" readonly>
     </div>
 </div>  <!--end mobile row-->
 <!-- strat of technician and date column -->
 <div class="row">


 <div class="col-sm-8">
   <label for="assigntechnician">Aggign techni.</label>
   <input type="text" name="assigntechnician" value="rr" class="form-control mb-4" required>
 </div>

<div class="col-sm-4">
 <label for="date">Date</label>
 <input type="date" name="date" value="<?php  if (isset($_REQUEST['date'])) { echo $_REQUEST['date'];
 }?>" class="form-control mb-4" required>
</div>
 </div>

    <button type="submit" class="btn btn-primary col-sm-10 rt1 d-print-none" name="ak" value="submit ">submit</button>
    <a href="requests.php"class=" btn btn-secondary col-sm-1 rt d-print-none">reset</a>
<!-- ending 3rd column -->

<?php
if (isset($_REQUEST['ak'])) {

$req_id=$_REQUEST['request_id'];
$req_info=$_REQUEST['info'];
$req_des=$_REQUEST['des'];
$req_name=$_REQUEST['name'];
$req_add=$_REQUEST['add1'];
$req_adds=$_REQUEST['add2'];
$req_city=$_REQUEST['city'];
$req_state=$_REQUEST['state'];
$req_zip=$_REQUEST['zip'];
$req_email=$_REQUEST['email'];
$req_phone=$_REQUEST['phone'];
$req_assigntechnician=$_REQUEST['assigntechnician'];
$req_date=$_REQUEST['date'];




if (isset($_REQUEST['issue'])) {



if (!$conn -> query("INSERT INTO assests(product_id,product_name,available,selling_cost_each,customer_name,customer_address,quantity,total_price,date_of_purchase)
  VALUES('$product_id','$product_name','$available','$sellingcosteach','$customer_name','$customer_address','$quantity','$total_price','$dop')"))
  {

    echo("Error description: " . $conn-> error);
  }
else{
     echo "work assign .........";
}
}
}

 ?>
