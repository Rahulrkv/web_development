<?php
session_start();
if ($_SESSION['user']) {
  $rEmail=$_SESSION['user'];
}
else{
  echo "<script>location.href='login.php'</script>";
}
define('TITLE' , 'servise status');
include('dbconnect.php');
include('requester/same/header.php');
?>

<!-- start 2nd column -->
<div class="col-sm-6 mt-5 ml-5">
  <form class="d-inline" action="" method="post">

    <div class="form-group ">
      <label for="checkid" class=" d-print-none">Enter Request Id:</label>
      <input  class="form-control  d-print-none" type="number" name="checkid" value="">
      <button type="submit" class="  d-print-none btn btn-primary mt-2  " name="search">search</button>
      <?php
      $mgs='<div class="alert alert-danger" role="alert">please enter some data</div>';
       ?>

<?php if (isset($_REQUEST['search'])) {
  if ($_REQUEST['checkid'] =="") {if (isset($mgs)) {echo $mgs;}}
  else {
$sql="SELECT * FROM workassign WHERE request_id={$_REQUEST['checkid']}";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

  if ($_REQUEST['checkid'] == $row['request_id'] ) {
?>

<h4 class="text-center mt-">Assigned work details</h4>

<table class="table table-bordered table-striped">
  <tbody>
    <tr>
      <td>request ID:</td>
      <td><?php if (isset($row['request_id']))
       {echo $row['request_id'];}?>
      </td>
    </tr>
    <tr>
      <td>requester name:</td>
      <td><?php if (isset($row['request_name']))
       {echo $row['request_name'];}?>
      </td>
    </tr>
    <tr>
      <td>request info:</td>
      <td><?php if (isset($row['request_info']))
       {echo $row['request_info'];}?>
      </td>
    </tr>
    <tr>
      <td>request des:</td>
      <td><?php if (isset($row['request_des']))
       {echo $row['request_des'];}?>
      </td>
    </tr>

    <tr>
      <td>requester add1:</td>
      <td><?php if (isset($row['request_add1']))
       {echo $row['request_add1'];}?>
      </td>
    </tr>
    <tr>
      <td>requester add2:</td>
      <td><?php if (isset($row['request_add2']))
       {echo $row['request_add2'];}?>
      </td>
    </tr>
    <tr>
      <td>requester city:</td>
      <td><?php if (isset($row['request_city']))
       {echo $row['request_city'];}?>
      </td>
    </tr>
    <tr>
      <td>requester state:</td>
      <td><?php if (isset($row['request_state']))
       {echo $row['request_state'];}?>
      </td>
    </tr>

    <tr>
      <td>requester zip:</td>
      <td><?php if (isset($row['request_zip']))
       {echo $row['request_zip'];}?>
      </td>
    </tr>
    <tr>
      <td>requester email:</td>
      <td><?php if (isset($row['request_email']))
       {echo $row['request_email'];}?>
      </td>
    </tr>
    <tr>
      <td>requester mobile:</td>
      <td><?php if (isset($row['request_phone']))
       {echo $row['request_phone'];}?>
      </td>
    </tr>
    <tr>
      <td>work on:</td>
      <td><?php if (isset($row['request_date']))
       {echo $row['request_date'];}?>
      </td>
    </tr>
    <tr>
      <td>techinician name:</td>
      <td><?php if (isset($row['request_assigntechnician']))
       {echo $row['request_assigntechnician'];}?>
      </td>
    </tr>
    </tbody>
</table>
<div class="text-center">
  <form class="d-print-none" action="" method="post">
    <input type="submit"  class="btn btn-danger  d-print-none"name="" value="print" onClick=window.print()>
    <input type="submit"  class="btn btn-dark ml-4  d-print-none" name="" value="close" onclick="location.reload()">
 </form>
</div>
<?php
    }
else {
  echo '<div class="alert alert-danger mt-5" role="alert">Your Request is Still pending</div>';
     }

   }
 }
 ?>

    </div>
  </form>

</div>
<!-- 2nd  column stop -->
  <?php include('requester/same/footer.php') ?>
