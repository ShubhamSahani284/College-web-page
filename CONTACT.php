<?php
$insert = false;
if( isset($_POST['NAME']) || isset($_POST['MESSAGE']) ){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
   
if(!$con){
   die("connection to this data base failed due to" .
   mysqli_conect_error());
}
   //echo "success conecting to the db";

$NAME = $_POST['NAME'];
$PHONE = $_POST['PHONE'];
$EMAIL = $_POST['EMAIL'];
$MESSAGE = $_POST['MESSAGE'];
$sql = "INSERT INTO `contact`.`cont` (`NAME`,`PHONE`,`EMAIL`,`MESSAGE`) VALUES('$NAME', '$PHONE', '$EMAIL', '$MESSAGE');";
 
if($con->query($sql) == true){
    echo " successfuly inserted";
    $insert = true;
}
else{
    echo "error:$sql <br> $con->error";
}
$con->close();
}
?>




<html>
<head>
<meta name="viewport" content="with=device-width, initial scale=1.0">
<title>East West College of Engineering</title>
<link rel="stylesheet" href="CONTACT.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500;1,600;1,800&display=swap" rel="stylesheet">
<link rel="stylesheet"herf="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
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
    <div class="course-col1" style="background-color:white; height: 24px;"><a href="#" style="color: white">Announcement</a></div>
    <div class="course-col1" style="background-color:white; height: 24px;"><a href="LOGIN.html" style=" color: black;">Teachers</a></div>
    <div class="course-col1" style="background-color:white; height: 24px;"><a href="ADM_1.html" style=" color: black;">Admissions</a></div>
    <div class="course-col1" style="background-color:white; height: 24px;"><a href="LOGIN.html" style=" color: black;">student</a></div>
    <div class="course-col1" style="background-color:white; height: 24px;"><a href="easyreg.html" style=" color: black;">EASY REGISTRATION</a></div>
    <div class="course-col1" style="background-color:white; height: 24px;"><a href="LOGIN.html" style=" color: black;">Feed back</a></div>
    <div class="course-col1" style="background-color:white; height: 24px;"><a href="CONTACT.php" style=" color: black;">Contact</a></div>
</div>
<div id="main">
  <span style="font-size:20px; position: fixed; right: 12px; top: 4px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>
</li>


</ul>
</div>
</nav>
</section>
<!--------edits can be done in b/w👇------->
<section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26387.877199334398!2d77.57868500053922!3d13.085049701189554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae198e7925a437%3A0xf3bea7aea3eede31!2sEast%20West%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1666196522972!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section>
	<div class="null">
		<h1> </h1>
	</div>
</section>

<section>
	<div class="sec-nul" style="background-color: #CFFED2;">
		<h1> </h1>
	</div>
</section>
<section>
	<div class="row" style="background-color: #CFFED2;">
	    <div class="col" >
		<div class="col1">
			<img src="images/call.png" class="dell"><br>
		   		<h>Call Us</h>
					<p>☎️080 28566115/116<br>
		              		📞+91 9844671611</p></div>
		<div class="col1">
			<img src="images/clock.png" class="dell"><br>
		      		<h>Open Hours</h>
		           		<p>monday-friday<br>
		              		Timing 9:00AM-4:00PM<br>
		              		 Saturday<br>
		              		 Timing 9:00AM-12:50PM</p></div>
	    	 </div>	


				<!--------contact section🤷‍️------->
			<div class="col">
					<div class="course-col" style="background-color:#FAEBEE">
						<div class="cont">
							<a href="https://formsubmit.co/el/bevali">		
							<h4 style="background-color:#FAEBEE">Contact Form</h4>
								<div class="row" style="background-color:#FAEBEE">
									<div class="col4">		</a>
										<form action="CONTACT.php" method="POST">
											<lable>Usernsame</lable>
                        						<input type="name" name="NAME" id="NAME" placeholder="Enter Name" required>
                       							<input type="phone" name="PHONE" id="PHONE" placeholder="Enter Mobile no" required>
                        						<input type="email" name="EMAIL" id="EMAIL" placeholder="Enter Email" required>
                        						<button class="btn">Submit</button>
											</div>
<!-----------<select name="container"><option>Shubham</option><option>om</option><option>Sunny</option><option>Rayyan</option></select>-------------------------------------------------------->
											<div class="col4">
												<textarea name="MESSAGE" id="MESSAGE"  placeholder="Enter Message" required></textarea>
										</div>
										</form>
									</div>
								
						</div>
					</div>
			</div>






				<!--------contact section🤷‍️🤷‍️------->
		<div class="col">
			<div class="col2">
				<img src="images/mail.png" class="dell"><br>
		      			 <h>Email Us</h>
		          			 <p>principal.ewce@gmail.com<br>
							ewce.yelahanka@gmail.com</p>
			</div>
			<div class="col2">
				<img src="images/pin.png" class="dell"><br>
		      			 <h>Address</h>
		         			  <p>CA Site No. 13, 13th A Main<br>
							 Road,Sector A, Major Akshay<br>
 							Kumar Road, Yelahanka New<br>
							 Town, Bengaluru-560064.</p></div>
			</div>
	
		
		</div>
</section>

<section>
	<div class="null">
		<h1> </h1>
	</div>
</section>



<!--------edits can be done in b/w 👆------->
<!------About college------->
<section class="about">
			<h1>QUICK ACCESS</h1>
				<div class="row">
							<div class="about-col">	
  <h2> Quick Links<h2/>	
 <p>Computer Science & Engineering<br>
Electronics & Communication Engineering<br>
Aeronautical Engineering<br>
Agriculture Engineering<br>
Mechanical Engineering<br>
Basic Science & Humanities  </p>  
							</div>
							<div class="about-col">	
								<h2>Pages<h2/>	
 									<p>Principal's Desk<br>
										About Us<br>
										Portfolio<br>
										Admissions<br>
										Contact Us  </p> 
								</div>

							<div class="about-col">	
 <h2>  East West College of Engineering<h2/>	
 <p>CA Site No. 13, 13th A Main Road,<br>
Sector A, Major Akshay Kumar Road,<br>
Yelahanka New Town, Bengaluru-560064.<br>
 ☎️080 28566115/116<br>
📞+91 9844671611<br>
✉️principal.ewce@gmail.com </br></p>
								</div>
						<div class="about-col">	
 <h3><b>Links</b><h3/>	
 		<p1>  
			<img src="images/play.png"><br>
			<img src="images/apple.jpeg" height="50" width="150"><br>
			<img src="images/web.png" height="50" width="150">
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