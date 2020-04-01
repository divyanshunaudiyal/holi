
	<?php
$uenroll = $_POST['uenroll'];
$ubranch = $_POST['ubranch'];
$ucourse = $_POST['ucourse'];
$uname = $_POST['uname'];
$uage = $_POST['uage'];
$ucontact = $_POST['ucontact'];
$uemail = $_POST['uemail'];

if (!empty($uname) || !empty($uage) ||  !empty($ucontact)  || !empty($uemail)|| !empty($uenroll)|| !empty($ubranch)|| !empty($ucourse)) {
include 'config.php';

  $sql="INSERT INTO details(enroll,name,age,course,branch,contact,email)values ('$uenroll','$uname','$uage','$ucourse','$ubranch','$ucontact','$uemail')";
  if($conn->query($sql)){
    header("location:details.php");
  }
  else
  {
    echo "data insertion fail";
  }
  }
 else {
 echo "All field are required";
}


 ?>

