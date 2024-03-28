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

$FName =$_POST['FName'];
$LName =$_POST['LName'];
$PHONE =$_POST['PHONE'];
$EMAIL =$_POST['EMAIL'];
$DOB =$_POST['DOB'];
$GRNDER =$_POST['GRNDER'];
$STATE =$_POST['STATE'];
$CITY =$_POST['CITY'];
$PINCODE =$_POST['PINCODE'];
$COUNTRY =$_POST['COUNTRY'];
$MESSAGE =$_POST['MESSAGE'];
$sql = "INSERT INTO `registration`.`registration` (`FName`, `LName`, `PHONE`, `EMAIL`, `DOB`, `GRNDER`, `STATE`, `CITY`, `PINCODE`, `COUNTRY`, `MESSAGE`) VALUES('$FName', '$LName', '$PHONE', '$EMAIL', '$DOB', '$GRNDER', '$STATE', '$CITY', '$PINCODE', '$COUNTRY', '$MESSAGE');";
if($con->query($sql) == true){
    echo "SUCCESSFULLY REGISTRATED";
    $insert = true;
}
else{
    echo "error:$sql <br> $con->error";
}
$con->close();
}
?>




<!DOCTYPE>
<html>
<head>
<meta name="viewport" content="with=device-width, initial scale=1.0">
<title>East West College of Engineering</title>
<link rel="stylesheet" href="registration.css">
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
    <div class="course-col" style="background-color:white;"><a href="#" style=" color: black;">Announcement</a></div>
    <div class="course-col" style="background-color:white;"><a href="LOGIN.html" style=" color: black;">Teachers</a></div>
    <div class="course-col" style="background-color:white;"><a href="ADM_1.html" style=" color: black;">Admissions</a></div>
    <div class="course-col" style="background-color:white;"><a href="LOGIN.html" style=" color: black;">student</a></div>
    <div class="course-col" style="background-color:white;"><a href="easyreg.html" style=" color: black;">EASY REGISTRATION</a></div>
    <div class="course-col" style="background-color:white;"><a href="LOGIN.html" style=" color: black;">Feed back</a></div>
    <div class="course-col" style="background-color:white;"><a href="CONTACT.php" style=" color: black;">Contact</a></div>
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
<!--------till------->
<div class="reg" style="background-color: #ffe287; width: 100%; height: 40px; text-align: center; margin-top: 10px;"
<h7 style=" margin-top: 20px;"> Registration</h7>
</div>
<div class="login">
    <table STYLE=" cellspacing=2; align=center; cellpadding=8; border=0;">
        <tr>
            <td style="align=right;">Enter Name :</td>
            <td><input type="text" placeholder="Enter user here" id="t1" class="tb" /></td>
        </tr>
        <tr>
            <td style="align=right;">Enter Email ID :</td>
            <td><input type="text" placeholder="Enter Email ID here" id="t2" class="tb" /></td>
        </tr>
        <tr>
            <td style="align=right;">Enter Username :</td>
            <td><input type="text" placeholder="Enter Username here" id="t3" class="tb" /></td>
        </tr>
        <tr>
            <td style="align=right;">Enter Password :</td>
            <td><input type="password" placeholder="Enter Password here" id="t4" class="tb" /></td>
        </tr>
        <tr>
            <td style="align=right;">Confirm Password :</td>
            <td><input type="password" placeholder="Enter Password here" id="t5" class="tb" /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="reset" value="Clear Form" onclick="clearFunc()" id="res" class="btn" />
                <input type="submit" value="Create Account" class="btn" onclick="registration()" /></td>
        </tr>
    </table>
    <h>
        Already have the Account ? <a href="LOGIN.html">Sign in</a>
    </h>
</div>
<!-- create account box ending here.. -->
</div>
<!--------till------->      
<!--------edits can be done in b/w👆------->
<!------About college------->
<section >
			<h1>QUICK ACCESS</h1>
				<div class="row" style="    background-color: rgb(220,220,217);">
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




    function registration()
    {

        var name= document.getElementById("t1").value;
        var email= document.getElementById("t2").value;
        var uname= document.getElementById("t3").value;
        var pwd= document.getElementById("t4").value;
        var cpwd= document.getElementById("t5").value;

        //email id expression code
        var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
        var letters = /^[A-Za-z]+$/;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(name=='')
        {
            alert('Please enter your name');
        }
        else if(!letters.test(name))
        {
            alert('Name field required only alphabet characters');
        }
        else if(email=='')
        {
            alert('Please enter your user email id');
        }
        else if (!filter.test(email))
        {
            alert('Invalid email');
        }
        else if(uname=='')
        {
            alert('Please enter the user name.');
        }
        else if(!letters.test(uname))
        {
            alert('User name field required only alphabet characters');
        }
        else if(pwd=='')
        {
            alert('Please enter Password');
        }
        else if(cpwd=='')
        {
            alert('Enter Confirm Password');
        }
        else if(!pwd_expression.test(pwd))
        {
            alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
        }
        else if(pwd != cpwd)
        {
            alert ('Password not Matched');
        }
        else if(document.getElementById("t5").value.length < 6)
        {
            alert ('Password minimum length is 6');
        }
        else if(document.getElementById("t5").value.length > 12)
        {
            alert ('Password max length is 12');
        }
        else
        {
            alert('Thank You for Login & You are Redirecting to Campuslife Website');
            // Redirecting to other page or webste code.
            window.location = "http://www.campuslife.co.in";
        }
    }
    function clearFunc()
    {
        document.getElementById("t1").value="";
        document.getElementById("t2").value="";
        document.getElementById("t3").value="";
        document.getElementById("t4").value="";
        document.getElementById("t5").value="";
    }


</script>
</body>
</html>
