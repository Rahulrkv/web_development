<?php
define('TITLE','workorder');
session_start();
include('../dbconnect.php');
if (isset($_SESSION['admin'])) {
$_email=$_SESSION['admin'];
}
else{
echo "<script> location.href='../admin/login.php'</script>";
}
include('../admin/asame/header.php');
?>
<div class="col-sm-9 col-md-10 mt-5">
  <?php
  $sql="SELECT * FROM workassign";
  $result=$conn->query($sql);
  if ($result->num_rows>0) {
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">Request Id</th>';
    echo '<th scope="col">Request info</th>';
    echo '<th scope="col">Request name</th>';
    echo '<th scope="col">Request address</th>';
    echo '<th scope="col">Request city</th>';
    echo '<th scope="col">Request mobile</th>';
    echo '<th scope="col">Assign Date</th>';
    echo '<th scope="col">Request technician</th>';
    echo '<th scope="col">Action</th>';
    echo '</tr>';
    echo '</thead>';

    echo'<tbody>';
    while ($row=$result->fetch_assoc()) {
      echo '<tr>';
      echo '<td>'.$row['request_id'].'</td>';
      echo '<td>'.$row['request_info'].'</td>';
      echo '<td>'.$row['request_name'].'</td>';
      echo '<td>'.$row['request_add1'].'</td>';
      echo '<td>'.$row['request_city'].'</td>';
      echo '<td>'.$row['request_phone'].'</td>';
      echo '<td>'.$row['request_date'].'</td>';
      echo '<td>'.$row['request_assigntechnician'].'</td>';
      echo '<td>';

      echo '<form action="viewassignwork.php" method="POST">';
      echo '<input type="hidden" name="id" value='.$row['request_id'].'>';
      echo '<div class="row">'; //start form row

      echo '<div class="col-sm-4">';
      echo '<button class="btn btn-warning" name="view" value="view" type="submit" style="display:inline";> <i class="far fa-eye"> </i> </button>';
      echo '</div>';

      echo '<div class="col-sm-4">';
      echo '<input type="hidden" name="id" value='.$row['request_id'].'>';
      echo '<button class="btn btn-warning ml-4" name="delete" value='.$row['request_id'].' type="submit" style="display:inline";> <i class="fas  fa-trash"> </i> </button>';
      echo '</div>';
      
      echo '</div>';//start form end
      echo '</form>';





      echo '</td>';
      echo'</tr>';
    }
    echo '<tbody>';
    echo '</table>';
  }
  else {
    echo '<script>window.alert(" no any work for assign")</script>';
  }

  if (isset($_REQUEST['delete'])) {
    $sql="DELETE  FROM workassign WHERE request_id={$_REQUEST['id']}";
    $result=$conn->query($sql);
    if ($result==TRUE) {
      echo '<script>location.href="workorder.php"</script>';
    }
    else {
      echo '<div class="alert alert-primary" role="alert"> error in delete work assign</div>';
    }
  }

 ?>














</div>






<?php include('../admin/asame/footer.php'); ?>
