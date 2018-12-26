<?php
   session_start();
   if (!isset($_SESSION["aname"])){
    header('Location: index.html#popup1');
  }
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" href="svec.png">
<title>IT Faculty</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  var $item = 0,
    $itemNo = $(".hero figure").length;
  function transitionSlide() {
    $item++;
    if ($item > $itemNo - 1) {
      $item = 0;
    }
    $(".hero figure").removeClass("on");
    $(".hero figure")
      .eq($item)
      .addClass("on");
  }
  var $autoTransition = setInterval(transitionSlide, 3500);

  $(".hero figure").click(function() {
    clearInterval($autoTransition);
    $item = $(this).index();
    $(".hero figure").removeClass("on");
    $(".hero figure")
      .eq($item)
      .addClass("on");
    $autoTransition = setInterval(transitionSlide, 3500);
  });
});
</script>
<script>
 $(document).ready(function() {
  $('#dropdown-content a').click(function(e) {
   e.preventDefault();
   $('#contentdisp').load($(this).attr('href'));
  });
 });
</script>
<style>
.resetpwd{
    position:absolute;
    top:15px;
    right:200px;
    width:100;
    height:50;
    background-color:yellow;
    color:red;
    text-align:center;
    margin-left:100;
    font-size:16px;
	text-decoration:none;
}
.contentdisp{
	height:400px;
	width:100%;
	border-width:2px;
	position:absolute;
	top:120px;
}
body {margin:0;font-family:Arial}

.sai{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}


.nav-item {
  background-color: whitesmoke;
  border-radius: 70%;
  height: 70px;
  line-height: 70px;
  position: relative;
  
  
}
.nav-icon {
  font-size: 16px !important;
  line-height: 70px;
  margin: auto;
  text-align: center;
  border-radius: 50%;
  width:250%;
  position: relative;

}
@import url(https://fonts.googleapis.com/css?family=Roboto:300);
@import url("font-awesome.min.css");
@import url("icofont.css");
@import url("plugins/animate.css");
@import url("plugins/chosen.min.css");
@import url("plugins/slick.css");
/*=========*/
/* IMPORTS */
/*=========*/
@import url("plugins/meanmenu.min.css");
@import url("plugins/chosen.min.css");
@import url("plugins/jquery-ui.min.css");
@import url("shortcode/default.css");

/*======*/
/* BASE */
/*======*/
* {
    margin: 0;
    padding: 0px;
    box-sizing: border-box;
  }
@import url(http://weloveiconfonts.com/api/?family=zocial);
* {
    margin: 0;
    padding: 0;
}
@font-face {
    font-family: 'zocial', sans-serif;
}
[data-icon]:before {
    font-family: 'zocial';
    content: attr(data-icon);
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: 'Verdana', sans-serif;
}
.copyright {
    color: #778888;
    margin-top: 5px;
}

@media screen and (max-width: 1000px){
    .links, .social, .copyright{
        float:none;
        text-align:center;
    }
    .social {
        position:relative;
        margin:10px 0;
        
    }
    .links li {
        display:inline-block;
        float:none;
    }
    .bar {
        position:relative;
    }
    .bar-wrap {
        margin-bottom:0;
    }
}
@media screen and (max-width: 835px)  {
    footer > ul li {
        float:none;
        width:auto;
    }
}
@media screen and (max-width: 768px)  {
    .links li {
        margin-right:5px;
    }
}
.as  {
            margin-left: 120px;
            margin-top: 20px;
    
        } 
        .as1
        {
            float:right;
            margin-right: 50px;
            margin-top:10px;
        }
        ol li{
            display:inline;
        }

.menu {
    margin: 12px 26px 12px 26px;
}
  ul {
    list-style-type: none;
     box-sizing: border-box;
    /* CRITICAL gives space to grouped elements in the navbar */
    /* also gains the capability to be centered using text-align in parent */
    display: inline-block;
    /* CRITICAL removes inline's whitespace */
    /* also tandem with child li font-size: explicit */
    font-size: 62px;
  }


@-webkit-keyframes infoIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

@keyframes infoIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@-webkit-keyframes infoOut {
  0% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
  }
}
@keyframes infoOut {
  0% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
  }
}
#hero {
  width: 100%;
  display: block;
  overflow: hidden;
  position: relative;
  height:65vh;
}
#hero:before {
  display: block;
  content: "";
  padding-top: 50%;
}
.hero {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  overflow: hidden;
  margin: 0;
  padding: 0;
  font-family: "Open Sans", sans-serif;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
.hero figure {
  margin: 0;
  padding: 0;
  width: 10%;
  height: 100%;
  position: relative;
  -ms-flex-preferred-size: 10%;
  flex-basis: 10%;
  -webkit-transition: 0.8s linear;
  -o-transition: 0.8s linear;
  transition: 0.8s linear;
  -webkit-filter: saturate(25%);
  filter: saturate(25%);
}
.hero figure:not(.on):hover {
  cursor: pointer;
}
.hero figure img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
}
.hero figure.on {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  -webkit-transition: 0.8s linear;
  -o-transition: 0.8s linear;
  transition: 0.8s linear;
  z-index: 20;
  -webkit-filter: saturate(100%);
  filter: saturate(100%);
}
.hero figure div {
  -webkit-animation: infoOut;
  animation: infoOut;
}

.hero figure.on div {
  position: absolute;
  bottom: 20%;
  left: 5%;
  right: 5%;
  padding: 20px 50px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  color: #fff;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.9);
  -webkit-animation: infoIn 1.2s;
  animation: infoIn 1.2s;
}
.hero figure.on div h2 {
  font-size: 3em;
  width: 100%;
  padding-bottom: 20px;
  border-bottom: 1px solid #00ff00;
  margin-bottom: 10px;
}
.hero figure.on div p {
  font-size: 1.7em;
  width: 100%;
  margin-bottom: 8%;
}
.hero figure.on div a {
  color: #fff;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 0.8em;
  font-weight: 600;
  transition: 0.3s ease;
}
.hero figure.on div a:after {
  content: "\f054";
  font-family: "FontAwesome";
  margin-left: 5px;
  display: inline-block;
  color: #00ff00;
  transition: 0.3s ease;
}
.hero figure.on div a:hover::after {
  transform: translateX(3px);
  transition: 0.3s ease;
}
.hero figure.on div a:hover {
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.9), 0 2px 3px rgba(0, 0, 0, 0.7);
  transition: 0.3s ease;
}
@media screen and (max-width: 800px) {
  .hero {
    font-size: 1.3vw;
  }
  .hero figure.on div {
    padding: 20px;
  }
#hero {
  width: 100%;
  display: block;
  overflow: hidden;
  position: relative;
  height:50%;
 
}
}

@media screen and (max-width: 600px) {
  .hero {
    font-size: 1.8vw;
  }
  .hero figure.on div {
    bottom: 5%;
    left: 0;
    right: 0;
    width: auto;

  }
  .sai img{
    margin-left:40%;
} 

}
.topnav {
  overflow: hidden;
  background-color: #ffa500; 
}

.topnav a {
  float:left ;
  color: black;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;
  font-size: 14px;
}
.topnav .icon {
  display: none;
}
.dropdown {
    float: left;
    z-index:15;
    overflow:hidden;
}
.dropdown .dropbtn {
    font-size: 14px;    
    border: none;
    outline: none;
    color: black;
      z-index:15;
    padding: 14px 16px;
    position:relative;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown .dropbtn .dropbtn1 {
    font-size: 16px;    
    border: none;
    outline: none;
    color: black;
      z-index:15;
    padding: 14px 16px;
    position:relative;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffa500;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index:15;}
.dropdown-content a {
    float: none;
    color: black;
      z-index:-1;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    cursor:pointer;
}
.dropbtn1:hover  .dropdown-content1 {
    display:block;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #6666ff;
  color: white;
  text-decoration:underline;
}

.dropdown-content a:hover {
    background-color: #ff6666;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}

@media screen and (max-width: 800px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
    margin-left:30px;
  }
}




.centralout {
  width: 100%;
  background-color: black;
  border-radius:100%;
}

.buttonout img {
  width: 25px;
  float: left;
}

.logout {
  font-size: .8em;
  position: absolute;
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
  top:15px;
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

</style>
</head>
<body>
  
<form action="out.php" method="post">
  <button class="buttonout" name="newid">
   <img src="images/12.png" style="display: inline;">
   <div class="logout"> Logout </div>
  </button>
</form>

    <header>
        
<br>
<div style="margin-left:250;width:350;height:35;text-align: center;">
Welcome <span style="color:blue;font-size:18"><?php

echo $_SESSION["aname"] 
?>
</span>
</div>
<?php
$con=new mysqli("localhost","root","","itfaculty");
  $sql="select count(userid) from register where status='pending' ";
  if($result=$con->query($sql))
  {
    $row=$result->fetch_assoc();
        echo "<div style='position:absolute;top:15px;width:100;height:50;background-color:yellow;color:red;text-align:center;margin-left:100px;font-size:20px;'> Requests<br>"."<a href='showdetails.php'>".$row['count(userid)']."</a></div>";
    }
?>	
<br>
<div class="topnav" id="myTopnav" style="margin-left:0%;margin-right:0%;">
  <a href="main.php" class="active">Home</a>
   <div class="dropdown">
    <button class="dropbtn">Subjects
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="dropdown-content">
     <a style="margin-left:15%" href="subjects/entersubjects.php">Enter Subjects</a>
    </div>
    </div>
  <div class="dropdown">
    <button class="dropbtn">Results
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a style="margin-left:15%"  href="results/enterresults.php"  target="_blank">Enter Subjectwise Results</a>
	 <a style="margin-left:15%"  href="results/enteroverallresults.php"  target="_blank">Enter yearwise Results</a>
    <a style="margin-left:15%"  href="results/viewoverallresults.php"  target="_blank">view yearwise Results</a>
	<a style="margin-left:15%"  href="results/editsubresults.php"  target="_blank">Edit Subjectwise Results</a>
	<a style="margin-left:15%" href="subjects/editregsubjects.php" target="_blank">Edit Registered Subject</a>
	</div>
    </div>
<div class="dropdown">
    <button class="dropbtn">Feedback
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a style="margin-left:15%"  href="feedback/enterfeedback.php"  target="_blank">Enter Feedback</a>
    <a style="margin-left:15%"  href="feedback/viewfeedback.php"  target="_blank">View Feedback</a>
	<a style="margin-left:15%"  href="feedback/editfeedback.php"  target="_blank">Edit Feedback</a>
	</div>
    </div>
	<div class="dropdown">
    <button class="dropbtn">Workshops
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a style="margin-left:15%"  href="enterresults.php"  target="_blank">View Workshops Attended</a>
	 <a style="margin-left:15%"  href="enteroverallresults.php"  target="_blank">View Workshops Conducted</a>
	</div>
    </div>
	<div class="dropdown">
    <button class="dropbtn">Research
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a style="margin-left:15%"  href="enterresults.php"  target="_blank">View Journals Academic Year Wise</a>
	 <a style="margin-left:15%"  href="enteroverallresults.php"  target="_blank">View Conferences Academic Year Wise</a>
    <a style="margin-left:15%"  href="viewoverallresults.php"  target="_blank">View Interactions With Outside</a>
	</div>
    </div>
	<div class="dropdown">
    <button class="dropbtn">Counselling
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a style="margin-left:15%"  href="enterresults.php"  target="_blank">View Faculty Wise Counseling Details</a>
	 <a style="margin-left:15%"  href="enteroverallresults.php"  target="_blank">View Mid Marks</a>
    <a style="margin-left:15%"  href="viewoverallresults.php"  target="_blank">View External Marks</a>
	</div>
    </div>
	<div class="dropdown">
    <button class="dropbtn">Department Progress
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a style="margin-left:15%"  href="enterresults.php"  target="_blank">View One Week/15 Days Progress</a>
	</div>
    </div>
  <a href="resetpwd.php">Faculty Password Reset</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<div class='contentdisp' id='contentdisp'>
</div>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
   <div class='resetpwd'>
    <a href="aresetpwd.php" style="text-decoration:none;font-size:10pt;">Change password</a>
  </div>
  </body>
</html>















