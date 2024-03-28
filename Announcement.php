<!DOCTYPE html>
<!-- saved from url=(0052)file:///E:/Xampp/htdocs/My_project/Announcement.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="with=device-width, initial scale=1.0">
    <title>EWCE</title>
    <link rel="stylesheet" href="w.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500;1,600;1,800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" herf="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
</head>
<body><section class="naviga">
    <nav >
        <img src="./EWCE_files/logo.png">
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hidemenu()"></i>
        </div>
    </nav>
</section>

<section class="header">
    <nav>
        <div class="nav-links" id="navLinks">

            <ul class="nav-links-ul">
                <li><a href="Education.html">HOME</a></li>
                <li><a href="ABOUT.html">ABOUT</a></li>
                <li><a href="PLACEMENT.html">PLACEMENT</a></li>
                <li><a href="ACADAMICS.html">ACADAMICS</a></li>
                <li><a href="GALLERY.html">GALLERY</a></li>

                <!-----<li><a href="LOGIN.html">LOGIN</a></li>---->

                <li class="sidevar">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style=" color: black;">×</a>
                        <div class="course-col" style="background-color:white;"><a href="Announcement.html" style=" color: black;">Announcement</a></div>
                        <div class="course-col" style="background-color:white;"><a href="LOGIN.php" style=" color: black;">Teachers</a></div>
                        <div class="course-col" style="background-color:white;"><a href="ADM_1.php" style=" color: black;">Admissions</a></div>
                        <div class="course-col" style="background-color:white;"><a href="LOGIN.php" style=" color: black;">Student</a></div>
                        <div class="course-col" style="background-color:white;"><a href="feedback.php" style=" color: black;">Feedback</a></div>
                        <div class="course-col" style="background-color:white;"><a href="CONTACT.php" style=" color: black;">Contact</a></div>
                        <div class="course-col" style="background-color:white;"><a href="   LOGIN.php" style=" color: black;">LOGIN</a></div>
                        <div class="course-col" style="background-color:white;"><a href="main.php" style=" color: black;">LogOut</a></div>

                    </div>
                    <div id="main">
                        <span style="font-size:20px; position: static; right: 12px; top: 4px;cursor:pointer" onclick="openNav()">☰</span>
                    </div>
                </li>


            </ul>
        </div>
    </nav>
</section>
<!--------edits can be done in b/w   👇 ------->
<section>
<div>
    <h> <div class="course-col" style="text-align:center; background:rgba(201,201,131,0.65); padding-top:8px; padding-bottom:8px">
        <h>Search According to Date: </h><input type="date" name="counselling" id="TDate" placeholder="Date" required=""></div>
        <p></p><div class="course-col" style="text-align: center;margin-top: 0px;">
            No data Announcement found
        </div><p></p>
    </h>
</div>
</section>


<!--------edits can be done in b/w     👆 ------->
<!------About college------->
<section class="about">
    <h1>QUICK ACCESS</h1>
    <div class="row">
        <div class="about-col">
            <h2> Cources We offers</h2><h2>
                <p>Computer Science &amp; Engineering<br>
                    Electronics &amp; Communication Engineering<br>
                    Aeronautical Engineering<br>
                    Agriculture Engineering<br>
                    Mechanical Engineering<br>
                    Basic Science &amp; Humanities  </p>
        </h2></div>
        <div class="about-col">
            <h2>Pages</h2><h2>
                <p>Principal's Desk<br>
                    About Us<br>
                    Portfolio<br>
                    Admissions<br>
                    Contact Us  </p>
        </h2></div>

        <div class="about-col">
            <h2>  East West College of Engineering</h2><h2>
                <p>CA Site No. 13, 13th A Main Road,<br>
                    Sector A, Major Akshay Kumar Road,<br>
                    Yelahanka New Town, Bengaluru-560064.<br>
                    ☎️080 28566115/116<br>
                    📞+91 9844671611<br>
                    ✉️principal.ewce@gmail.com <br></p>
        </h2></div>
        <div class="about-col">
            <h3><b>Links</b></h3><h3>
                <p1>
                    <img src="./EWCE_files/play.png"><br>
                    <img src="./EWCE_files/apple.jpeg" height="50" width="150"><br>
                    <img src="./EWCE_files/web.png" height="50" width="150">
                </p1>
        </h3></div>
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
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
</script>


</body></html>