<?php
if(isset($_POST['submit']))
{
	$u=$_POST['t1'];
	$p=$_POST['t3'];
	$fn=$_POST['t4'];
	$doj=$_POST['t5'];
	$qua=$_POST['t6'];
	$des=$_POST['t7'];
	$mob=$_POST['t8'];
	$mail=$_POST['t9'];
	$con=new mysqli("localhost","root","","itfaculty");
	$sql="select * from register where userid='$u'";
	$result=$con->query($sql);
	if($result->num_rows>=1)
	{
		echo "<body style='background:#ccc;'><h3 style='display:flex;justify-content:center;margin-top:200px;'><b style='color:green'>You have already registered.<a href='index.html#popup'>Login Here</a></b></h3></body>";
	}
	else{
	$sql="insert into register (userid,passwd,fname,doj,qual,des,mob,mail) values ('$u','$p','$fn','$doj','$qua','$des','$mob','$mail')";
	if($con->query($sql)===true)
	{
		echo "<body style='background:#ccc;'><h3 style='display:flex;justify-content:center;margin-top:200px;'><b style='color:green'>You have successfully registered<a href='index.html#popup'>Login Here</a></b></h3></body>";
	}
	else
	{
		echo "Error: ".$sql."<br>".$con->error;
	}
	$con->close();
        }
}
?>