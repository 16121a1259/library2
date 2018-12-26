<?php
if(isset($_POST['submit']))
{
	
	$u=$_POST['t1'];
	$r=$_POST['t2'];
	$p=$_POST['t3'];
	$dob=$_POST['t4'];
	$sn=$_POST['t5'];
	$gn=$_POST['t6'];
	$ad=$_POST['t7'];
	$br=$_POST['t8'];
	$con=new mysqli("localhost","root","","mydb");
	$sql="select * from register where userid='$u'";
	$result=$con->query($sql);
	if($result->num_rows>=1)
	{
		echo "<h3><b style='color:green'>You have already registered.<a href='index.html#popup'>Login Here</a></b></h3>";
	}
	else{
	$sql="insert into register (userid,rollno,passwd,dob,sname,gender,degree,branch,status) values ('$u','$r','$p','$dob','$sn','$gn','$ad','$br','pending')";
	if($con->query($sql)===true)
	{
		echo "<h3><b style='color:green'>You have successfully registered...wait for approval<a href='index.html#popup'>Login Here</a></b></h3>";
	}
	else
	{
		echo "Error: ".$sql."<br>".$con->error;
	}
	$con->close();
        }
}
?>