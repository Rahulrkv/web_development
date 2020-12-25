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
<!-- 2nd col start -->
<div class="col-sm-10 ">
<h4 class="text-black mt-4 bg-dark text-white text-center mb-4">sell report</h4>

  <form action="" method="post">
    <div class="form-group row">

    <label for="from date" class="col-sm-2 col-form-label text-center">from date</label>
    <div class="col-sm-2">
    <input type= "date" name="from_date" value="<?php if (isset($_REQUEST['from_date'])) {echo $_REQUEST['from_date'];} ?>" class="form-control">
    </div>

    <label for="to date" class="col-sm-2 col-form-label text-center ">to date</label>
    <div class="col-sm-2">
    <input type= "date" name="to_date" value="<?php if (isset($_REQUEST['to_date'])) {echo $_REQUEST['to_date'];} ?>" class="form-control">
    </div>
    <input type="submit" name="details" class="btn btn-primary ml-5 d-print-none" value="details">
  </div>
  </form>

<!-- 2nd column end -->


<?php



if (isset($_REQUEST['details'])) {
  if ($_REQUEST['from_date']==""){
    echo "enter date";
  }
else{
  $from=$_REQUEST['from_date'];
  $to=$_REQUEST['to_date'];

  $sql="SELECT * FROM purchase WHERE date_of_purchase BETWEEN '$from' AND '$to'" ;
  $result=$conn->query($sql);
  if ($result->num_rows>0) {
    echo '<table class="table mt-5">';
    echo '<thead>';
    echo  '<tr>';
    echo'<th>bill number</th>';
    echo'<th>Product_id </th>';
    echo'<th> Product_name</th>' ;
    echo'<th>available</th>';
    echo'<th>selling cost each</th>';
    echo'<th>customer name</th>';
    echo'<th>customer address</th>';
    echo'<th>quantity </th>';
    echo'<th>total cost</th>' ;
    echo'<th>date of purchase</th>' ;

    echo  '</tr>';
    echo '</thead>';


    while ($row=$result->fetch_assoc()) {
      echo '<tbody class="table">';
      echo  '<tr>';
      echo'<td>'.$row['bill_number'].'</td>';
      echo'<td>'.$row['product_id'].'</td>';
      echo'<td>'.$row['product_name'].'</td>';
      echo'<td>'.$row['available'].'</td>';
      echo'<td>'.$row['selling_cost_each'].'</td>';
      echo'<td>'.$row['customer_name'].'</td>';
      echo'<td>'.$row['customer_address'].'</td>';
      echo'<td>'.$row['quantity'].'</td>';
      echo'<td>'.$row['total_price'].'</td>';
      echo'<td>'.$row['date_of_purchase'].'</td>';
      echo  '</tr>';
      echo '</tbody>';
    }
      echo'</table>';
      echo '<div class="col-sm-12">';
        echo '<button type="submit" name="print" class="btn btn-primary d-print-none" onclick="window.print()">print</button>';
          echo '  </div>';
    }

else {
      echo "no any work done";
      }

    }

}




 ?>

</div>

<?php
include('../admin/asame/footer.php');
 ?>
