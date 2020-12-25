<?php
session_start();
define('TITLE','requests');
include('../dbconnect.php');
include('../admin/asame/header.php');
if (isset($_SESSION['admin'])) {
$_email=$_SESSION['admin'];

}
else{
echo "<script> location.href='../admin/login.php'</script>";
}
?>

<!-- start 2nd column -->
<div class="col-sm-4 d-print-none">
<?php
$sql="SELECT request_id,request_info,request_des,request_date FROM submitrequest";
$result=$conn->query($sql);
if ($result->num_rows>0) {
  while ($row=$result->fetch_assoc()) {

    echo '<div class="card mt-5 mx-5">';

    echo '<div class="card-header">';
    echo '<h5>Request ID:'.$row['request_id'].'</h5>';
    echo '</div>';

    echo '<div class="card-body">';
    echo '<strong>Request info:</strong>'.$row['request_info'].'<br>';
    echo '<strong>Request des:</strong>'.$row['request_des'].'<br>';
    echo '<strong>Request date:</strong>'.$row['request_date'].'<br>';


    echo'<div>';
    echo '<form action="" method="post">';

    echo '<input type="hidden" name="id" value='.$row['request_id'].'>';
    echo '<input type="submit" name="view" class="btn btn-primary float-right ml-4 mt-1" value="view">';
    echo '<input type="submit" name="reset" class="btn btn-danger float-right mt-1" value="delete">';

    echo '</form>';
    echo '</div>';

    echo'</div>';
    echo '</div>';


  }
}
 ?>
</div>
<!-- end 2nd column -->
<!-- starting 3rd column -->

<!-- start 2nd column -->
<?php
if (isset($_REQUEST['view'])) {
$sql="SELECT * FROM submitrequest WHERE request_id={$_REQUEST['id']}";
$result=$conn->query($sql);
if ($result->num_rows>0) {
$row=$result->fetch_assoc();
}
}
if (isset($_REQUEST['reset'])) {
$sql="DELETE FROM submitrequest WHERE request_id={$_REQUEST['id']} ";
$result=$conn->query($sql);
if ($result==TRUE) {
  echo "<script>location.href='../admin/requests.php'</script>";
}
}
?>

<div class="col-sm-6  my-5 jumbotron" ed="bgy"  style="height: 1010px;">
<form  action="" method="post">
  <h5 class="text-dark text-center mb-4">Assign work order Request</h5>
  <div  class="form-group">
      <label for="request id">Request ID:</label>
      <input type="text" name="request_id" value="<?php  if (isset($_REQUEST['id'])) { echo $_REQUEST['id'];
      } if(isset($_REQUEST['request_id'])) {echo  $_REQUEST['request_id'];}?>" class="form-control mb-4" readonly>

        <label for="info"> Request Info</label>
        <input type="text" name="info" value="<?php  if (isset($_REQUEST['id'])) {
          echo $row['request_info'];
      } if (isset($_REQUEST['info'])) { echo $_REQUEST['info'];
      }?>" class="form-control mb-4" readonly >

        <label for="descrption">Description</label>
        <input type="text" name="des" value="<?php if (isset($_REQUEST['id'])) { echo $row['request_des'];
        }  if (isset($_REQUEST['des'])) { echo $_REQUEST['des'];
        }?>" class="form-control mb-4"readonly>

        <label for="name">Name</label>
        <input type="text" name="name" value=" <?php  if (isset($_REQUEST['id'])) { echo $row['request_name'];
        } if (isset($_REQUEST['name'])) { echo $_REQUEST['name'];
        }?>" class="form-control mb-4" readonly>

    <div class="row"><!-- address row -->
      <div class="col-sm-6">
        <label for="address line 1">Address line 1</label>
        <input type="text" name="add1" value="<?php if(isset($_REQUEST['id'])) {echo  $row['request_add1'];}if(isset($_REQUEST['add1'])) {echo  $_REQUEST['add1'];} ?>" class="form-control mb-4" readonly>
      </div>
      <div class="col-sm-6">
        <label for="address line 2">Address line 2</label>
        <input type="text" name="add2" value="<?php  if (isset($_REQUEST['id'])) { echo $row['request_add2'];
        } if(isset($_REQUEST['add2'])) {echo  $_REQUEST['add2'];}?>" class="form-control mb-4" readonly>
      </div>
    </div>

    <div class="row"> <!-- zip code row -->
      <div class="col-sm-5">
        <label for="city">city</label>
        <input type="text" name="city" value="<?php  if (isset($_REQUEST['id'])) { echo $row['request_city'];
        } if(isset($_REQUEST['city'])) {echo  $_REQUEST['city'];}?>" class="form-control mb-4" readonly>
      </div>

      <div class="col-sm-4">
        <label for="state">state</label>
        <input type="text" name="state" value="<?php  if (isset($_REQUEST['id'])) { echo $row['request_state'];
        }if(isset($_REQUEST['state'])) {echo  $_REQUEST['state'];}?>" class="form-control mb-4" readonly>
      </div>

      <div class="col-sm-3">
        <label for="zip code">zip code</label>
        <input type="text" name="zip" value="<?php  if (isset($_REQUEST['id'])) { echo $row['request_zip'];
        } if(isset($_REQUEST['zip'])) {echo  $_REQUEST['zip'];}?>" class="form-control mb-4" readonly>
      </div>
    </div>

    <div class="row"><!-- mobile row -->
     <div class="col-sm-8">
       <label for="email">Email id</label>
       <input type="email" name="email" value="<?php  if (isset($_REQUEST['id'])) { echo $row['request_email'];
       } if(isset($_REQUEST['email'])) {echo  $_REQUEST['email'];}?>" class="form-control mb-4" readonly>
     </div>

     <div class="col-sm-4">
       <label for="<phoneeesse></phone>">phone</label>
       <input type="tel" name="phone"  value="<?php  if (isset($_REQUEST['id'])) { echo $row['request_mobile'];
       } if(isset($_REQUEST['phone'])) {echo  $_REQUEST['phone'];}?>" class="form-control mb-4" readonly>
     </div>
 </div>  <!--end mobile row-->
 <!-- strat of technician and date column -->
 <div class="row">


 <div class="col-sm-8">
   <label for="assigntechnician">Aggign techni.</label>
   <input type="text" name="assigntechnician" value="<?php  if (isset($_REQUEST['assigntechnician'])) { echo $_REQUEST['assigntechnician'];
   }?>" class="form-control mb-4" required>
 </div>

<div class="col-sm-4">
 <label for="date">Date</label>
 <input type="date" name="date" value="<?php  if (isset($_REQUEST['date'])) { echo $_REQUEST['date'];
 }?>" class="form-control mb-4" required>
</div>
 </div>

    <button type="submit" class="btn btn-primary col-sm-10 rt1 d-print-none" name="assign" value="submit ">submit</button>
    <a href="requests.php"class=" btn btn-secondary col-sm-1 rt d-print-none">reset</a>
<!-- ending 3rd column -->

<?php
if (isset($_REQUEST['assign'])) {

$req_id=$_REQUEST['request_id'];
$req_des=$_REQUEST['des'];  //always use longtext to avoid error in insert into database
$req_info=$_REQUEST['info'];        // always use longtext to avoid the inserting of data in db
$req_name=$_REQUEST['name'];
$req_add1=$_REQUEST['add1'];
$req_add2=$_REQUEST['add2'];
$req_city=$_REQUEST['city'];
$req_state=$_REQUEST['state'];
$req_zip=$_REQUEST['zip'];
$req_email=$_REQUEST['email'];
$req_phone=$_REQUEST['phone'];        //always use bigint to avoid the erro as only int  give >>out of range value for column  1
$req_assigntechnician=$_REQUEST['assigntechnician'];
$req_date=$_REQUEST['date'];      //make sure that the date is selected in database table to avoid>>Data Truncated For Column row 1

$sql="INSERT INTO `workassign`(`request_id`, `request_info`, `request_des`, `request_name`, `request_add1`, `request_add2`, `request_city`, `request_state`, `request_zip`, `request_email`, `request_phone`, `request_assigntechnician`, `request_date`)
  VALUES ('$req_id','$req_info','$req_des','$req_name','$req_add1','$req_add2','$req_city','$req_state','$req_zip','$req_email','$req_phone','$req_assigntechnician','$req_date')";
  $result=$conn->query($sql);
   if ($result==TRUE) {
     echo '<div class="alert alert-primary mt-1 d-print-none" role="alert">work assign ..</div>';
   }

   else {
     echo '<script>window.alert("work aggign error!!")</script>';;
   }


   echo '
    <input type="submit"class="btn btn-danger d-print-none" name="button" onclick="window.print() " value="print">
   ';
}



 ?>





<?php
include('../admin/asame/footer.php');
 ?>
