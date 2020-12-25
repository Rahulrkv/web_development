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
  <p class="bg-dark text-white p-2">Requesters</p>
  <?php
   $sql= "SELECT * FROM thumb" ;
   $result=$conn->query($sql);

     if ($result->num_rows>0) {
       echo '<table class="table">';
      echo '<thead>';
      echo  '<tr>';
      echo'<th>Request Id </th>';
      echo'<th> name</th>' ;
      echo'<th> eamil</th>';
      echo'<th> to do</th>';
      echo  '</tr>';
      echo '</thead>';

     while ($row=$result->fetch_assoc()) {
     echo '<tbody class="table">';
     echo  '<tr>';
     echo'<td>'.$row['r_id'].'</td>';
     echo'<td>'.$row['r_name'].'</td>';
     echo'<td>'.$row['r_email'].'</td>';
     echo '<td>';
     echo '<form action="editreq.php" method="POST">';
     echo '<input type="hidden" name="id" value='.$row['r_id'].'>';
     echo '<button type="submit" class="btn btn-primary" name="edit" value="edit"><i class=" fas fa-pen"></i></button>';
     echo '</form> ';
     }
     echo '</td>';
     echo  '</tr>';
     echo '</tbody>';
     echo'</table>';

   }
   ?>
</div>
<!-- end 2nd colum -->
<!-- 2nd row start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 d-flex justify-content-end">
      <a href="newrequester.php"><i class="fa fa-user-plus fa-2x mx-5 my-5" aria-hidden="true"></i></a>

    </div>
</div>

</div>
<!-- 2nd row end -->
<?php include('../admin/asame/footer.php');  ?>
