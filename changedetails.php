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
<br>
</form>
</body>
</html>
<?php
	$con=new mysqli("localhost","root","","itfaculty");
	$sql="select * from regsubjects where ";
	$result=$con->query($sql);
	echo "<div style='display:flex;justify-content:center;'>";
	echo "<form action='changedetails.php'>";
	echo "<table border=1 style='border:1px solid black;width:50%; border-collapse: collapse;text-align:center;' >";
	if($result->num_rows>0)
	{
	                while($row= $result->fetch_assoc()) {
                    echo "<tr><td  style='padding:10px;'>"."<input type='text' name='t1' value='".$row['userid']."'></td><td>"."<input type='text' name='t2' value='".$row['fname']."'></td><td>".$row['des']."</td>";
					echo "<td style='background: steelblue;'>";
					echo "<input type='submit' name='submit' value='edit'>";
					echo "</td></tr>";
    }
	}
	if(isset($_GET['submit']))
	{
		$id1=$_GET['t1'];
		$id2=$_GET['t2'];
		$con->query("update register SET userid='".$id1."' where fname='$id2'");
		echo "inserted";
	}
	echo "</table></div>";
?>