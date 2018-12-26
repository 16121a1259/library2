<?php

   session_start();
   if (!isset($_SESSION["aname"])){
    header('Location: index.html#popup1');
  }

?>
<html>
<head>
	<link rel="shortcut icon" type="image/png" href="svec.png">
<title>SVEC | Central Library</title>
	<style type="text/css">
		body{
			background: #ccc;
			color: blue;
		}
		input[type="text"]{
			height: 40px;
			width: 300px;
		}
		input[type="password"]{
			height: 40px;
			width: 300px;
		}
		input[type="date"]{
			height: 40px;
			width: 300px;
		}
		input[type="submit"]{
			height: 30px;
			width: 170px;
		}
		input[type=date]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    display: none;
}
	</style>
</head>
<body>
	<div style='background: steelblue;margin: 400px;height:300px;padding: 100px;margin-top: 200px;'>
		<form action="aresetpwd.php" method="post" align='center'>
		<input type="password" name="t3" placeholder="Enter new password"><br><br>
		<input type="submit" name="submit">
	</form>
	</div>
	
</body>
</html>

<?php
	$con=new mysqli("localhost","root","","itfaculty");
	if(isset($_POST['submit'])){
	$np=$_POST['t3'];
	$sql="update adminregister set password='$np' where adminid='admin'";
	if($con->query($sql)){
		echo "<script>alert('password has been reset successfully');</script>";
	}
}

?>