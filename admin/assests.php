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



<!-- statr 2nd column -->
<div class="col-sm-9 col-md-10 mt-5 text-center">
  <p class="bg-dark text-white p-2">Products/Parts Details</p>
  <?php
   $sql= "SELECT * FROM assests" ;
   $result=$conn->query($sql);

     if ($result->num_rows>0) {
       echo '<table class="table">';
      echo '<thead>';
      echo  '<tr>';
      echo'<th>Product_id </th>';
      echo'<th> Product_name</th>' ;
      echo'<th>dop</th>';
      echo'<th>available</th>';
      echo'<th>total </th>';
      echo'<th>original cost each</th>' ;
        echo'<th>selling cost each</th>' ;
          echo'<th>Action</th>' ;
      echo  '</tr>';
      echo '</thead>';

     while ($row=$result->fetch_assoc()) {
     echo '<tbody class="table">';
     echo  '<tr>';
     echo'<td>'.$row['product_id'].'</td>';
     echo'<td>'.$row['product_name'].'</td>';
     echo'<td>'.$row['date_of_purchase'].'</td>';
     echo'<td>'.$row['available'].'</td>';
     echo'<td>'.$row['total'].'</td>';
     echo'<td>'.$row['original_cost_each'].'</td>';
     echo'<td>'.$row['selling_cost_each'].'</td>';
     echo '<td>';
     echo '<div class="row">';
     echo '<div class="col-sm-4 ">';
     echo '<form action="editassests.php" method="POST">';
     echo '<input type="hidden" name="id" value='.$row['product_id'].'>';
     echo '<button type="submit" class="btn btn-primary " name="edit" value="edit"><i class=" fas fa-pen"></i></button>';
     echo '</form> ';
     echo '</div>';
     echo '<div class="col-sm-4">';
     echo '<form action="" method="POST">';
     echo '<input type="hidden" name="id" value='.$row['product_id'].'>';
     echo '<button type="delete" class="btn btn-danger " name="delete" value='.$row['product_id'].'><i class=" fas fa-trash"></i></button>';
     echo '</form> ';
     echo '</div>';

     echo '<div class="col-sm-4">';
     echo '<form action="sellproduct.php" method="POST">';
     echo '<input type="hidden" name="id" value='.$row['product_id'].'>';
     echo '<button type="submit" class="btn btn-warning " name="purchase" value='.$row['product_id'].'><i class=" fas fa-handshake"></i></button>';
     echo '</form> ';
     echo '</div>';
     echo '</div>';

     echo '</div>';


     }
     echo '</td>';
     echo  '</tr>';
     echo '</tbody>';
     echo'</table>';

   }
   else {
     echo "no any assests available";
   }

   if (isset($_REQUEST['delete'])) {
     $sql="DELETE FROM `assests` WHERE product_id={$_REQUEST['id']}" ;
     $result=$conn->query($sql);
     if ($result==TRUE) {
       echo '<script>location.href="assests.php"</script>';
     }
     else {
       echo '<div class="alert alert-primary" role="alert"> error in delete assests</div>';
     }
   }
   ?>
</div>
<!-- end 2nd colum -->
<!-- 2nd row start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 d-flex justify-content-end">
      <a href="addassests.php"><i class="fa fa-plus fa-2x mx-5 my-5" aria-hidden="true"></i></a>

    </div>
</div>

</div>
<!-- 2nd row end -->

<?php
include('../admin/asame/footer.php');

 ?>
