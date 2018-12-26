<?php
$colu = $_GET['coln'];
$user = $_GET['uid'];
$con=new mysqli("localhost","root","","itfaculty");
  $sql="select * from register where userid='".$user."'";
  $result=$con->query($sql);
while($row= $result->fetch_assoc()) {
   echo"<input type='text' value='".$row[$colu]."' disabled>";
}
$con->close();
?>