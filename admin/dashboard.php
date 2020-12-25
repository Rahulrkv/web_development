<?php
session_start();
include('../dbconnect.php');
define('TITLE','dashboard');
if (isset($_SESSION['admin'])) {
$_email=$_SESSION['admin'];
}
else{
echo "<script> location.href='../admin/login.php'</script>";
}
include('../admin/asame/header.php');
$sql="SELECT COUNT(request_id)
FROM submitrequest";
$result=$conn->query($sql);
if ($result->num_rows>0) {
  while ($row=$result->fetch_assoc()) {
$rr=implode($row);
  }
}
$sql="SELECT COUNT(request_id)
FROM workassign";
$result=$conn->query($sql);
if ($result->num_rows>0) {
  while ($row=$result->fetch_assoc()) {
$wa=implode($row);
  }
}

$sql="SELECT COUNT(emp_id)
FROM addtechnician";
$result=$conn->query($sql);
if ($result->num_rows>0) {
  while ($row=$result->fetch_assoc()) {
$nt=implode($row);
  }
}


?>

<div class="col-md-10"> <!--dashboard second column div start-->
  <div class="row text-center">  <!--dashboard second row  start-->

    <div class="col-sm-4 mt-5"> <!--dashboard second column div-1 start-->
      <div class="card  ml-5 bg-danger text-white" style="max-width:18rem;">
        <h4 class="card-header text-center mt-2">Request Receives</h4>
        <div class="card-body">
          <h4 class="card-title text-center"><?php echo $rr; ?></h4>
          <a href="requests.php" class="btn text-white ">view</a>
        </div>
      </div>
    </div><!--dashboard second column div-1 endinng-->

    <div class="col-sm-4 mt-5 "> <!--dashboard second column div-2 start-->
      <div class="card bg-info ml-5 text-white" style="max-width:18rem;">
        <h4 class="card-header text-center mt-2">work to be assign</h4>
        <div class="card-body">
          <h4 class="card-title text-center"> <?php echo $wa; ?></h4>
          <a href="workorder.php" class="btn text-white ">view</a>
        </div>
      </div>
    </div><!--dashboard second column div-2 endinng-->

    <div class="col-sm-4 mt-5"> <!--dashboard second column div-3 start-->
      <div class="card ml-5 bg-success text-white" style="max-width:18rem;">
        <h4 class="card-header text-center mt-2">No. of technicians</h4>
        <div class="card-body">
          <h4 class="card-title text-center"> <?php echo $nt; ?></h4>
          <a href="technician.php" class="btn text-white ">view</a>
        </div>
      </div>
    </div><!--dashboard second column div-3 endinng-->
  </div>  <!--dashboard second row ending-->

  <div style="position: fixed;bottom: 20px;right: 0;width: 200px;">
    <?php echo $_SESSION['admin']; ?>
</div>

  <div class="row text-center"> <!--col second and next row starting-->
  <div class="container-fluid bg-dark mt-5 ml-5 mr-5 ">
   <h5 class="text-center text-white">list of requesters</h5>
  </div> <!--col second and next row starting-->
  <div class=" col-sm-10 ml-5"> <!--table div starting-->

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Requister id</th>
          <th scope="col">Name</th>
          <th scope="col">email</th>
        </tr>
      </thead>
      <tbody>
    <?php
    $sql="SELECT * FROM thumb";
    $result=$conn->query($sql);
    if ($result->num_rows>0) {
      while ($row=$result->fetch_assoc()) {
        echo'<tr>';
        echo'<td>'.$row["r_id"].'</td>';
        echo '<td>'.$row["r_name"].'</td>';
        echo '<td>'.$row["r_email"].'</td>';
        echo '</tr>';
      }
    }
    echo '</tbody>';
?>

</table>
</div><!--table div ending-->
</div><!--col second and next row ending-->
</div><!--dashboard second column div ending-->

<?php include('../admin/asame/footer.php'); ?>
