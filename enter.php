<?php
if(isset($_POST['submit']))
{
  $prog=$_POST['prog'];
  $dept=$_POST['dept'];
  $year=$_POST['year'];
  $sem=$_POST['sem'];
  $reg=$_POST['reg'];
  $sub=$_POST['sub'];
  $con=new mysqli("localhost","root","","itfaculty");
  $sql="insert into subjects (program,department,year,sem,regulation,subject) values ('$prog','$dept','$year','$sem','$reg','$sub')";
  if($con->query($sql)===true)
	{
		echo "<body style='background:#ccc;'><h3 style='display:flex;justify-content:center;margin-top:200px;'><b style='color:green'>You have successfully Entered</b></h3></body>";
	}
	else
	{
		echo "Error: ".$sql."<br>".$con->error;
	}
  $con->close();
}
?>