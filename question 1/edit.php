

<!DOCTYPE html>
<html>
<head>
<title>Welcome to insert details</title>
<link rel="stylesheet" href="st.css">
</head>

<body>
<?php

$enroll = $_GET['enroll'];

if (!empty($enroll)){ 
include 'config.php';

  $sql =  "SELECT * FROM details where enroll=$enroll";
   $result=mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result);
   if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
 }
 ?>
<form action="update.php?enroll=<?php echo $enroll; ?>" method="POST">

   <label for="uenroll"><b>Name</b></label>
   <input type="text" value="<?php echo $row['enroll']; ?>" name="uenroll" required id="idenroll"><br>

   
   <label for="uname"><b>Name</b></label>
   <input type="text" value="<?php echo $row['name']; ?>" name="uname" required id="idname"><br>
     
     <label for="uage"><b>Age</b></label>
     <input type="Age" value="<?php echo $row['age']; ?>" name="uage" required id="idage"><br>

     <label for="ucourse"><b>Name</b></label>
   <input type="text" value="<?php echo $row['course']; ?>" name="ucourse" required id="idcourse"><br>

   <label for="ubranch"><b>Branch</b></label>
   <input type="text" value="<?php echo $row['branch']; ?>" name="ubranch" required id="idbranch"><br>

    <label for="uncontact"><b>Contact</b></label>
    <input type="number" value="<?php echo $row['contact']; ?>" name="ucontact" required id="idcontact"><br>

     <label for="uemail"><b>Email</b></label>
    <input type="email" value="<?php echo $row['email']; ?>" name="uemail" required id="idemail"><br>

    <center><button type="submit"  id="btn">Submit</button></center>
    
</form>
</body>
</html>