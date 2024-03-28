<?php
$insert = false;
if( isset($_POST['NAME'])  ){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
   die("connection to this data base failed due to" .
   mysqli_connect_error());
}
   //echo "success connecting to the db";

if($con->query($sql) == true){
    echo "SUCCESSFULLY REGISTERED";
    $insert = true;
}
else{
    echo "error:$sql $con->error";
}
$con->close();
}
?>




<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="with=device-width, initial scale=1.0">
<title>EWCE</title>
<link rel="stylesheet" href="registration.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500;1,600;1,800&display=swap" rel="stylesheet">



</head>
<section class="naviga"><nav>
	<img src="images/logo.png">
<div class="nav-links" id="navLinks">
<i class="fa fa-times" onclick="hidemenu()"></i>
</div></nav>
</section>
<body>
<section class="header">
<nav>
<div class="nav-links" id="navLinks">

<ul>
<li><a href="Education.html">HOME</a></li>
<li><a href="ABOUT.html">ABOUT</a></li>
<li><a href="PLACEMENT.html">PLACEMENT</a></li>
<li><a href="ACADAMICS.html">ACADAMICS</a></li>
<li><a href="GALLERY.html">GALLERY</a></li>
<li><a href="CONTACT.php">CONTACT</a></li>
<li class="sidevar" >
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style=" color: black;">&times;</a>
    <div class="course-col1" style="background-color:white;"><a href="Announcement.php" style=" color: black;">Announcement</a></div>
    <div class="course-col1" style="background-color:white;"><a href="LOGIN.php" style=" color: black;">Teachers</a></div>
    <div class="course-col1" style="background-color:white;"><a href="LOGIN.php" style=" color: black;">student</a></div>
    <div class="course-col1" style="background-color:white;"><a href="easyreg.php" style=" color: black;">EASY REGISTRATION</a></div>
    <div class="course-col1" style="background-color:white;"><a href="search.php" style=" color: black;">Search</a></div>
    <div class="course-col1" style="background-color:white;"><a href="feedback.php" style=" color: black;">Feed back</a></div>
    <div class="course-col1" style="background-color:white;"><a href="CONTACT.php" style=" color: black;">Contact</a></div>
    <div class="course-col" style="background-color:white;"><a href="main.php" style=" color: black;">LogOut</a></div>

</div>
<div id="main" style="margin-top: -30px; width: 8px;" >
  <span style="font-size:20px; position: fixed; right: 12px; top: 4px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>
</li>


</ul>
</div>
</nav>
</section>
<!--------edits can be done in b/w👇------->
<section><div class="row" style="background: white">
    <div>
    <img src="images/logo.png" style="width: 400px; margin-left: 60px;margin-top:-60px; margin-bottom: 20px; height:300px;">
    </div>
    <div>
   <a href="LOGIN.php"><button type="button" style="background-color: white; color: black; border: 2px solid #4CAF50; width:200px;height:75px; margin-top:35px; margin-Right:80px;">LOGIN </button></a>
   <a href="registration.php"><button type="button" style="background-color: white; color: black; border: 2px solid #008CBA; width:200px;height:75px;  margin-Right:200px;">REGISTER</button></a>



    </div>
</section>
<!--------edits can be done in b/w👆------->
<!------About college------->
<section >
			<h1 style="text-align:center; background-Color: rgb(220,220,217); padding:20px;">QUICK ACCESS</h1>
				<div class="row" style="background-color: rgb(220,220,217); margin-top:-10px;">
							<div class="about-col">
  <h2> Quick Links</h2>
 <p>Computer Science & Engineering<br>
Electronics & Communication Engineering<br>
Aeronautical Engineering<br>
Agriculture Engineering<br>
Mechanical Engineering<br>
Basic Science & Humanities  </p>
							</div>
							<div class="about-col">
								<h2>Pages</h2>
 									<p>Principal's Desk<br>
										About Us<br>
										Portfolio<br>
										Admissions<br>
										Contact Us  </p>
								</div>

							<div class="about-col">
 <h2>  East West College of Engineering</h2>
 <p>CA Site No. 13, 13th A Main Road,<br>
Sector A, Major Akshay Kumar Road,<br>
Yelahanka New Town, Bengaluru-560064.<br>
 ☎️080 28566115/116<br>
📞+91 9844671611<br>
✉️principal.ewce@gmail.com </br></p>
								</div>
						<div class="about-col">
 <h3><b>Links</b></h3>
 		<p1>
			<img src="images/play.png" style="width:100px;
									  height:30px;
									padding-right:14px;	"><br>
			<img src="images/apple.jpeg" style="width:100px;
									  height:30px;
									padding-right:14px;	"><br>
			<img src="images/web.png" style="width:100px;
									  height:30px;
									padding-right:14px;	">
		</p1>
	</div>
</div>
</section>


<!------footer------->
<section class="footer">
		<div class="icons">
					<p>© 2022 EWCE 2022 All right reserved . | East West Group of Institutions, Bengaluru.. Shubham </p>
				</div>
</section>
<!--------javaScript for toggle menu------->
<script>
	var navLinks= document.getElementbyId("navLinks");
	function showMenu(){
	navLinks.style.right ="0";
}
	function hideMenu(){
 	navLinks.style.right ="-200px";
}

/* Set the width of the sidebar to 250px (show it) */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginRight = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginRight= "0";
    document.body.style.backgroundColor = "white";
}
</script>
</body>
</html>
