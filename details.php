
<!DOCTYPE html>
<html>
<head>


	<title>q1</title>
</head >

 
</head>
<style>
table, th, td {
  border: 2px solid black;
  width:1100px;
}
a {
  color: white;
  font-weight: bold;
  font-size: 15px
}
button {
  color: white;
  background-color: orange;
  padding: 10px 10px;
  margin: 1px 0;
  border: none;
  border-radius: 25px;
  cursor: pointer;
  width: 40%; 
}


button:hover{
  background-color: green;
  color: white;
  transition-duration: 0.4s;

}
th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:purple;
  color: white;
}
tr:nth-child(even){background-color: #f2f2f2;}
 td, th {
  border: 1px solid #ddd;
  padding: 8px;
}
 tr:hover {background-color: #ddd;}
}
</style>

</style>
<body>

<Center>
  <table>
        <tr>
           <th>Enrollment No</th>
           <th>NAME</th>
           <th>AGE</th>
           <th>COURSE</th>
           <th>BRANCH</th>
           <th>CONTACT</th>
           <th>EMAIL</th>
           <th>ACTIONS</th>

        </tr><br>
 <?php
     include 'config.php';

   $sql =  "SELECT * FROM details";
   $result=mysqli_query($conn,$sql);
   while($row = mysqli_fetch_array($result))
   {
   ?>
     <tr>
      <td><?php echo $row['enroll'];?></td>
       <td> <?php echo $row['name'];?></td>
       <td> <?php echo $row['age'];?></td>
       <td><?php echo $row['course'];?></td>
       <td><?php echo $row['branch'];?></td>
       <td> <?php echo $row['contact'];?></td>
       <td> <?php echo $row['email'];?></td>
       <td><button><a href="edit.php?enroll=<?php echo ($row["enroll"]); ?>">Edit </a></button><button><a href="delete.php?enroll=<?php echo ($row["enroll"]); ?>">  delete</a></button></td>
     </tr>
    <?php
   }
 ?>
 </table>
 <button><a href="insert.html">Add new data</a></button>
</center>
</body>
</html>
