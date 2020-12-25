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
  <p class="bg-dark text-white p-2">technician</p>
  <?php
   $sql= "SELECT * FROM addtechnician" ;
   $result=$conn->query($sql);

     if ($result->num_rows>0) {
       echo '<table class="table">';
      echo '<thead>';
      echo  '<tr>';
      echo'<th>emp_id </th>';
      echo'<th> emp_name</th>' ;
      echo'<th>emp_address</th>';
      echo'<th>emp_email</th>';
      echo'<th>emp_phone </th>';
      echo'<th>Action</th>' ;
      echo  '</tr>';
      echo '</thead>';

     while ($row=$result->fetch_assoc()) {
     echo '<tbody class="table">';
     echo  '<tr>';
     echo'<td>'.$row['emp_id'].'</td>';
     echo'<td>'.$row['emp_name'].'</td>';
     echo'<td>'.$row['emp_address'].'</td>';
     echo'<td>'.$row['emp_email'].'</td>';
     echo'<td>'.$row['emp_phone'].'</td>';
     echo '<td>';
     echo '<div class="row">';
     echo '<div class="col-sm-5 ">';
     echo '<form action="edittechnician.php" method="POST">';
     echo '<input type="hidden" name="id" value='.$row['emp_id'].'>';
     echo '<button type="submit" class="btn btn-primary " name="edit" value="edit"><i class=" fas fa-pen"></i></button>';
     echo '</form> ';
     echo '</div>';
     echo '<div class="col-sm-5">';
     echo '<form action="" method="POST">';
     echo '<input type="hidden" name="id" value='.$row['emp_id'].'>';
     echo '<button type="delete" class="btn btn-danger " name="delete" value='.$row['emp_id'].'><i class=" fas fa-trash"></i></button>';
     echo '</form> ';
     echo '</div>';
     echo '</div>';
     }
     echo '</td>';
     echo  '</tr>';
     echo '</tbody>';
     echo'</table>';

   }
   else {
     echo "no any technician to work";
   }

   if (isset($_REQUEST['delete'])) {
     $sql="DELETE FROM `addtechnician` WHERE emp_id={$_REQUEST['id']}" ;
     $result=$conn->query($sql);
     if ($result==TRUE) {
       echo '<script>location.href="technician.php"</script>';
     }
     else {
       echo '<div class="alert alert-primary" role="alert"> error in delete work assign</div>';
     }
   }
   ?>
</div>
<!-- end 2nd colum -->
<!-- 2nd row start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 d-flex justify-content-end">
      <a href="addtechnician.php"><i class="fa fa-user-plus fa-2x mx-5 my-5" aria-hidden="true"></i></a>

    </div>
</div>

</div>
<!-- 2nd row end -->

<?php
include('../admin/asame/footer.php');

 ?>
