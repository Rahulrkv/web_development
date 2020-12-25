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

<!-- start 2nd column -->
<div class="col-sm-6 mt-5 ml-5">
<?php
if (isset($_REQUEST['view'])) {


$sql="SELECT * FROM workassign WHERE request_id={$_REQUEST['id']}";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
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
      <tr>
        <td>techinician name:</td>
        <td><?php if (isset($row['request_assigntechnician']))
         {echo $row['request_assigntechnician'];}?>
        </td>
      </tr>
      <tr>
        <td>techinician sign:</td>
        <td>
        </td>
      </tr>
      <td> customer sign:</td>
      <td>
      </td>
    </tr>
    </tbody>
</table>

<div class="text-center">
  <form class="d-print-none" action="" method="post">
    <input type="submit"  class="btn btn-danger mb-5  d-print-none"name="" value="print" onClick=window.print()>
    <a href="../admin/workorder.php" type="submit"  class="btn btn-dark ml-4  d-print-none mb-5" name="" value="close">close</a>
 </form>
</div>
<?php
}

 ?>


</div>











<?php include('../admin/asame/footer.php'); ?>
