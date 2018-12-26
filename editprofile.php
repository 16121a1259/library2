<?php 
session_start();
if (!isset($_SESSION["name"])){
    header('Location: index.html#popup1');
}
?>
<html>
<head>
<link rel="stylesheet" href="formstyles.css">
<script>
	function getsubjects(str) {
		//alert(str);
		var uid=document.getElementById("t3").value;
		//alert(uid);
if(str=='des')
{
document.getElementById("t4").innerHTML="<select id='des' name='t4' required ><option value='Asst Professor'>Assistant Professor</option><option value='Asst Professor (SL)'>Assistant Professor (SL)</option><option value='Associate Professor'>Associate Professor</option><option value='Professor'>Professor</option></select>";
}
if(str=='qual')
{
document.getElementById("t4").innerHTML="<select id='qual' name='t4' required ><option value='M.Tech'>M.Tech</option><option value='M.Tech(Ph.D)'>M.Tech(Ph.D)</option><option value='Ph.D'>Ph.D</option></select>";
}
if(str=='doj')
{
document.getElementById("t4").innerHTML="<input type='date' style='width:200' name='t4'  required>";
}
if(str=='passwd')
{
document.getElementById("t4").innerHTML="<input type='password' style='width:200' name='t4'  required>";
}
if(str=='fname')
{
document.getElementById("t4").innerHTML="<input type='text' name='t4'  required>";
}
if(str=='mob')
{
document.getElementById("t4").innerHTML="<input type='text' maxlength='10' name='t4'  required>";
}
if(str=='mail')
{
document.getElementById("t4").innerHTML="<input type='email' style='width:200' name='t4'  required>";
}	
    if (str == "") {
        document.getElementById('t2').innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('t2').innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getval.php?coln="+str+"&uid="+uid,true);
        xmlhttp.send();
    }
}
</script>
</head>
</html>
<?php
$usid=$_SESSION['uname'];
	$con=new mysqli("localhost","root","","itfaculty");
	$sql="select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME='register'";
	$result=$con->query($sql);
	echo "<h1 align='center'>Edit Profile</h1>";
	echo "<form action='editprofile.php' method='post' align='center'>";
	echo "<table align='center'>";
	if($result->num_rows>0)
	{
	 echo "<tr><td class='first'>Emp Id</td>";
	 echo "<td class='second'>";
	 echo "<input type='text' id='t3' name='t3' value=$usid readonly>"."</td></tr>";
	 echo"<tr><td class='first'>Field to Change</td>";
	 echo "<td class='second'><select name='cname' id='cname' onchange='getsubjects(this.value)'>";
	 while($row=$result->fetch_assoc()) {
		 if($row['COLUMN_NAME']=='userid' || $row['COLUMN_NAME']=='status')
			 continue;
					echo "<option value='".$row['COLUMN_NAME']."'>".$row['COLUMN_NAME']."</option>";
	 }
					echo "</select></td></tr>";
	echo "<tr><td class='first'>Actual</td>";
	echo "<td class='second'><p id='t2'>";
	echo "<input type='text' name='t2' value=''/>";
	echo "</p></td></tr>";
	echo "<tr><td class='first'>To be updated as</td>";
	echo "<td class='second'><p id='t4'><input type='text' name='t4' value=''/></p></td>";
	echo "</tr></table>";
	echo "<input type='submit' value='modify' name='submit'>";
	echo "<a href='main.php'><input type='button' value='Home'></a>";
	}
	echo "</form>";
	if(isset($_POST['submit']))
	{
		$id1=$_POST['cname'];
		$id2=$_POST['t4'];
		$id3=$_POST['t3'];
		$con->query("update register SET ".$id1."='".$id2."' where userid='".$id3."'");
		echo "<h3><b style='color:green'>".$id1." updated successfully</b></h3>";
	}
?>