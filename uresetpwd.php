<?php
  session_start();

  if (!isset($_SESSION["uname"])){
    header('Location: index.html#popup');
  }

?>
<html>
<head>
	<link rel="shortcut icon" type="image/png" href="svec.png">
<title>IT Faculty</title>
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
	<div style='background: steelblue;height:300px;padding:100px;margin-top:200px;'>
		<form action="uresetpwd.php" method="post" align='center'>
		<input type="text" name="t1" placeholder="User Id"><br><br>
		Date of Joining:<br>
		<input type="Date" name="t2" ><br><br>
		<input type="password" name="t3" placeholder="Enter new password"><br><br>
		<input type="submit" name="submit">
	</form>
	</div>
	
</body>
</html>

<?php
	$con=new mysqli("localhost","root","","itfaculty");
	if(isset($_POST['submit'])){
	$r=$_POST['t1'];
	$db=$_POST['t2'];
	$np=$_POST['t3'];
	$sql="update register set passwd='$np' where userid='$r' and doj='$db'";
	if($con->query($sql)===TRUE)
	{
		echo "<script>alert('password has been reset successfully');</script>";
	}
	else
	{
		echo "<script>alert('Given userid or Date of Joining Not Matched');</script>";
	}
}

?>