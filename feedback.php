<?php
$insert = false;
if( isset($_POST['NAME']) || isset($_POST['MESSAGE']) ){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("connection to this data base failed due to" .  mysqli_conect_error());
    		}
    echo "success connecting to the db";
    $NAME = $_POST['NAME'];
    $STAR = $_POST['STAR'];
    $MESSAGE = $_POST['MESSAGE'];
    $sql = "INSERT INTO  `contact`.`feedb` ( `NAME`, `STAR`, `MESSAGE`)  VALUES( '$NAME', '$STAR', '$MESSAGE');";
    if($con->query($sql) == true) {
       						 echo " successfully inserted";
        						$insert = true;
  					  }
    else{
     		echo "error:$sql $con->error";
    	}
    $con->close();
}
?>







<!doctype html>
<head>
    <meta name="viewport" content="with=device-width, initial scale=1.0">
    <title>EWCE</title>
    <link rel="stylesheet" href="ABOUT.css">
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
                <!-----<li><a href="LOGIN.html">LOGIN</a></li>---->

                <li class="sidevar" >
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style=" color: black;">&times;</a>
                        <div class="course-col" style="background-color:white;"><a href="Announcement.php" style=" color: black;">Announcement</a></div>
                        <div class="course-col" style="background-color:white;"><a href="LOGIN.php" style=" color: black;">Teachers</a></div>
                        <div class="course-col" style="background-color:white;"><a href="LOGIN.php" style=" color: black;">student</a></div>
                        <div class="course-col" style="background-color:white;"><a href="easyreg.php" style=" color: black;">EASY REGISTRATION</a></div>
                        <div class="course-col" style="background-color:white;"><a href="search.php" style=" color: black;">Search</a></div>
                        <div class="course-col" style="background-color:white;"><a href="feedback.php" style=" color: black;">Feed back</a></div>
                        <div class="course-col" style="background-color:white;"><a href="CONTACT.php" style=" color: black;">Contact</a></div>
                        <div class="course-col" style="background-color:white;"><a href="main.php" style=" color: black;">LogOut</a></div>
                    </div>
                    <div id="main">
                        <span style="font-size:20px; position: fixed; right: 12px; top: 4px;cursor:pointer; color: white;" onclick="openNav()">&#9776;</span>
                    </div>
                </li>


            </ul>
        </div>
    </nav>
</section>
<!--------edits can be done in b/w   👇 ------->


<section><div class="row" style="background: white">
    <div>
    <img src="images/logo.png" style="width: 400px; margin-left: 60px; margin-top: 40px; margin-bottom: 20px;">
</div>
    <div  class="fed" style="margin-right: 250px; margin-top: 40px;">
        <h4>FEEDBACK</h4>
        <input  name="NAME" id="NAME" placeholder="Enter Name" style="width: 300px; margin-top: 10px; margin-bottom: 15px; height: 30px;"><br>

        <label for="STAR" style="width:300px;" >RATING:</label>
        <select name="STAR" id="STAR" style="width:240px;">
            <option value="select">SELECT STARS</option>
            <option value="1">&#9733;</option>
            <option value="2">&#9733;&#9733;</option>
            <option value="3">&#9733;&#9733;&#9733;</option>
            <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
            <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
        </select><br>
        <textarea name="MESSAGE" id="MESSAGE"  placeholder="Enter Message" style="width: 300px;height: 200px; margin-top: 20px;"></textarea><br>
        <button class="btn" style="width: 137px; height: 25px;" >Submit</button>

    </div>

</div>

</section>


<!--------edits can be done in b/w     👆 ------->
<!------About college------->
<section class="about">
    <h1>QUICK ACCESS</h1>
    <div class="row">
        <div class="about-col">
            <h2> Cources We offers<h2/>
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
    const navLinks = document.getElementById("navLinks");

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