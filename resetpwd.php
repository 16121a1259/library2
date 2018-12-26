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
		input[type="submit"]{
			height: 30px;
			width: 170px;
		}
	</style>
</head>
<body>
	<div style='background: steelblue;margin: 400px;height:300px;padding: 100px;margin-top: 200px;'>
		<form action="resetpwd.php" method="post" align='center'>
		<input type="text" name="t1" placeholder="Roll number"><br><br>
		<input type="submit" name="submit">
	</form>
	</div>
	
</body>
</html>

<?php
	$con=new mysqli("localhost","root","","mydb");
	if(isset($_POST['submit'])){
	$r=$_POST['t1'];
	$sql="update register set passwd='demo123' where userid='".$r."'";
	if($con->query($sql)){
		echo "<script>alert('password has been reset successfully');</script>";
	}
}

?>