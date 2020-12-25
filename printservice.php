<?php
define('TITLE' ,'submit requester');
include('requester/same/header.php');
include('dbconnect.php');

session_start();
if ($_SESSION['user']) {
  $rEmail=$_SESSION['user'];
}
else{
  echo "<script>location.href='login.php'</script>";
}
?>
<div class="col-sm-10 ">

<?php
echo $_SESSION['genid'];
  $sql="SELECT * FROM submitrequest WHERE request_id={$_SESSION['genid']}";
  $result=$conn->query($sql);
  if ($result->num_rows==1) {
  $row=$result->fetch_assoc();

    echo '<table class="table table-warning">';
    echo '<thead class="text-center thead-light">';
    echo '<tr>';
    echo '<th scope="col">Requester Id</th>';
    echo '<th scope="col">Requester info</th>';
    echo '<th scope="col" style="table-layout: fixed; width: 200px;">Requester des</th>';
    echo '<th scope="col">Requester name</th>';
    echo '<th scope="col">Requester address</th>';
    echo '<th scope="col">Requester city</th>';
    echo '<th scope="col">Requester mobile</th>';
    echo '<th scope="col">Requester date</th>';
    echo '<th scope="col" class="d-print-none">Action</th>';
    echo '</tr>';
    echo '</thead>';

    echo'<tbody>';
      echo '<tr>';
      echo '<td>'.$row['request_id'].'</td>';
      echo '<td>'.$row['request_info'].'</td>';
      echo '<td>'.$row['request_des'].'</td>';
      echo '<td>'.$row['request_name'].'</td>';
      echo '<td>'.$row['request_add1'].'</td>';
      echo '<td>'.$row['request_city'].'</td>';
      echo '<td>'.$row['request_mobile'].'</td>';
      echo '<td>'.$row['request_date'].'</td>';
      echo '<td>';
      echo'<form class="" action="" method="">';
      echo '<div class=" row">';
      echo '<div class="col-sm-4 ">';
      echo '<button type="button" class="btn btn-warning d-print-none mr-2" value="print" style="display:inline"; onClick=window.print()>print</button>';
      echo '</div>';



      echo '<div class="col-sm-4 ">';
      echo '<a href="submitrequest.php"><button type="button " style="display:inline"; class="d-print-none btn btn-dark ml-4" value=""> close</button></a>';
      echo '</div>';
      echo '</div>';
      echo '</form>';

      echo '</td>';
      echo'</tr>';

    echo '<tbody>';
    echo '</table>';
  }
  else {
    echo '<script>window.alert(" no any request submit")</script>';
}
?>


</div>
<?php include('requester/same/footer.php') ?>
