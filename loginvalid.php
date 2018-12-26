<?php
session_start();
if(isset($_POST['submit']))
{
  $us=$_POST['t1'];
  $pwd=$_POST['t2'];
  $con=new mysqli("localhost","root","","itfaculty");
  $sql="select * from register where userid='$us' and passwd='$pwd' and status='approved' ";
  $result=$con->query($sql);
  if($result->num_rows==1)
  { 
      $row=$result->fetch_assoc();
      $_SESSION["name"]=$row['fname'];
      $_SESSION["uname"]=$us;
    header('Location: main.php');
  }
  else
  {
    header('Location: wrong.php');
  }
  $con->close();
}
?>