<?php

   session_start();
   if (!isset($_SESSION["aname"])){
    header('Location: index.html#popup1');
  }
?>
<html>
<head>
	<link rel="shortcut icon" type="image/png" href="svec.png">
<title>IT Faculty</title>
	<style>
		
.buttonout img {
  width: 25px;
  float: left;
}

.logout {
  font-size: .8em;
  position: relative;
  right: -18px;
  bottom: -2px;
  overflow: hidden;
  letter-spacing: 3px;
  opacity: 0;
  transition: opacity .45s;
  -webkit-transition: opacity .35s;
  
}

.buttonout {
  border-radius: 100%;
  text-decoration: none;
  position:fixed;
  top:70px;
  right:30px;
  padding: 12px;
  margin: 15px;
  color: #eee;
  width: 50px;
  height: 45px;
  background-color: #eee;
  transition: width .35s;
  -webkit-transition: width .35s;
  overflow: hidden;
  cursor: pointer;
  z-index: 100;
  border: none;
}

.buttonout:hover {
  width: 150px;
  border-radius: 5%;
  background-color:  #ffa500;
  color: #eee;
}

.buttonout:hover .logout{
  opacity: 1;
   font-size: 20px;
}


.buttonout {
  text-decoration: none;
}

.logo{
	margin-left: 20px;
	margin-top: 50px;
}
.appr:link,.appr:visited{
	text-decoration: none;
	
	color: white;


}
body{
	background: #ccc;
}


	</style>
</head>
<body>

	<div class='logo'>
		<img src="svec.png">
	</div>
	<form action="out.php" method="post">

   
  <button class="buttonout" name="newid">
   <img src="images/12.png" style="display: inline;">
   <div class="logout"> Logout </div>
  </button>
  <br>
<div style="margin-left:250;width:350;height:35;text-align: center;">
Welcome <span style="color:blue;font-size:18"><?php

echo $_SESSION["aname"] 
?>
</span>
</div>
<br>
</form>
</body>
</html>
<?php
	$con=new mysqli("localhost","root","","itfaculty");
	$sql="select * from register where status='pending' ";
	$result=$con->query($sql);
	echo "<div style='display:flex;justify-content:center;'>";
	echo "<table border=1 style='border:1px solid black;width:50%; border-collapse: collapse;text-align:center;' >";
	if($result->num_rows>0)
	{
	                while($row= $result->fetch_assoc()) {
                    echo "<tr><td  style='padding:10px;'>".$row['userid']."</td><td>".$row['fname']."</td><td>".$row['des']."</td>";
					echo "<td style='background: steelblue;'>";
					echo "<a class='appr' href='showdetails.php?id=".$row['userid']."'".">";
					echo "approve";
					echo "</a>";
					echo "</td></tr>";
    }
	}
	if(isset($_GET['id']))
	{
		$id1=$_GET['id'];
		$con->query("update register SET status='approved' where userid='$id1' ");
		echo "<script>alert('approved'.$id1);</script>";
		header('Location: showdetails.php');
	}
	echo "</table></div>";
?>