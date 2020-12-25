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
<h4 class="text-black mt-4 bg-dark text-white text-center mb-4">work report</h4>

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

  $sql="SELECT * FROM workassign WHERE request_date BETWEEN '$from' AND '$to'" ;
  $result=$conn->query($sql);
  if ($result->num_rows>0) {

      echo '<table class="table " id="mytable">';
      echo '<thead>';
      echo '<tr>';
      echo '<th scope="col">Requester number</th>';
      echo '<th scope="col">Requester Id</th>';
      echo '<th scope="col">Requester info</th>';
      //echo '<th scope="col">Requester des</th>';
      echo '<th scope="col">Requester name</th>';
      echo '<th scope="col">Requester add1</th>';
      //echo '<th scope="col">Requester add2</th>';
      //echo '<th scope="col">Requester city</th>';
      echo '<th scope="col">Requester state</th>';
      echo '<th scope="col">Requester zip</th>';
      //echo '<th scope="col">Requester email</th>';
      echo '<th scope="col">Requester phone</th>';
      echo '<th scope="col">Assign technician</th>';
      echo '<th scope="col">Assign Date</th>';
      echo '</tr>';
      echo '</thead>';


      while ($row=$result->fetch_assoc()) {
        echo '<tbody class="table">';
        echo '<tr>';
        echo '<td>'.$row['request_number'].'</td>';
        echo '<td>'.$row['request_id'].'</td>';
        echo '<td>'.$row['request_info'].'</td>';
        //echo '<td>'.$row['request_des'].'</td>';
        echo '<td>'.$row['request_name'].'</td>';
        //echo '<td>'.$row['request_add1'].'</td>';
        echo '<td>'.$row['request_add2'].'</td>';
        //echo '<td>'.$row['request_city'].'</td>';
        echo '<td>'.$row['request_state'].'</td>';
        echo '<td>'.$row['request_zip'].'</td>';
        //echo '<td>'.$row['request_email'].'</td>';
        echo '<td>'.$row['request_phone'].'</td>';
        echo '<td>'.$row['request_date'].'</td>';
        echo '<td>'.$row['request_assigntechnician'].'</td>';
        echo '<td>';
        echo '</td>';
        echo'</tr>';
        echo '<tbody>';



      }

      echo'</table>';
      echo '<div class="col-sm-12">';
        echo '<button type="submit" name="print" class="btn btn-primary d-print-none" onclick="window.print()">print</button>';
          echo '  </div>';

}
    else {
      echo '<script>window.alert(" no any work for assign")</script>';
    }
  }
}
 ?>
</div>

<?php
include('../admin/asame/footer.php');
 ?>
