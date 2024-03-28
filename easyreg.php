<!doctype html>
<head>
    <meta name="viewport" content="with=device-width, initial scale=1.0">
    <title>EWCE</title>
    <link rel="stylesheet" href="easyreg.css">
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
                        <span style="font-size:20px; position: fixed; right: 12px; top: 4px;cursor:pointer" onclick="openNav()">&#9776;</span>
                    </div>
                </li>


            </ul>
        </div>
    </nav>
</section>
<!--------edits can be done in b/w   👇 ------->

<h8 style="margin-left: 600px; font-size: 25px; padding-top: 20px;">STUDENT REGISTRATION FORM</h8>
<table style="margin-left: 400px; margin-top: 30px;   width: 50%;
    height: 800px; ">

    <!----- First Name ---------------------------------------------------------->
    <tr>
        <td>FIRST NAME</td>
        <td><input type="text" name="First_Name" maxlength="30">
            (max 30 characters a-z and A-Z)
        </td>
    </tr>

    <!----- Last Name ---------------------------------------------------------->
    <tr>
        <td>LAST NAME</td>
        <td><input type="text" name="Last_Name" maxlength="30">
            (max 30 characters a-z and A-Z)
        </td>
    </tr>

    <!----- Date Of Birth -------------------------------------------------------->
    <tr>
        <td>DATE OF BIRTH</td>

        <td>
               <input type="date" id="DOB" name="trip-start" value="2018-07-22" style="margin-right:250px;">
        </td>
    </tr>

    <!----- Email Id ---------------------------------------------------------->
    <tr>
        <td>EMAIL ID</td>
        <td><input type="text" name="Email_Id" maxlength="100" style="margin-right:220px;" ></td>
    </tr>

    <!----- Mobile Number ---------------------------------------------------------->
    <tr>
        <td>MOBILE NUMBER</td>
        <td>
            <input type="text" name="Mobile_Number" maxlength="10" >
            <h7 style="margin-right:100px;">(10 digit number)</h7>
        </td>
    </tr>

    <!----- Gender ----------------------------------------------------------->
    <tr>
        <td>GENDER</td>
        <td>
            Male <input type="radio" name="Gender" value="Male" >
            Female <input type="radio" name="Gender" value="Female" style="margin-right:220px;" >
        </td>
    </tr>

    <!----- Address ---------------------------------------------------------->
    <tr>
        <td>ADDRESS <br /><br /><br /></td>
        <td><textarea name="Address" rows="4" cols="30" style="margin-right:160px;"></textarea></td>
    </tr>

    <!----- City ---------------------------------------------------------->
    <tr>
        <td>CITY</td>
        <td><input type="text" name="City" maxlength="30" >
            (max 30 characters a-z and A-Z)
        </td>
    </tr>

    <!----- Pin Code ---------------------------------------------------------->
    <tr>
        <td>PIN CODE</td>
        <td><input type="text" name="Pin_Code" maxlength="6">
            <h7 style="margin-right:110px;">(6 digit number)<h7>
        </td>
    </tr>

    <!----- State ---------------------------------------------------------->
    <tr>
        <td>STATE</td>
        <td><input type="text" name="State" maxlength="30">
            (max 30 characters a-z and A-Z)
        </td>
    </tr>

    <!----- Country ---------------------------------------------------------->
    <tr>
        <td>COUNTRY</td>
        <td><input type="text" name="Country" value="India" readonly="readonly"  style="margin-Right:216px; padding-left:10px;"></td>
    </tr>

    <!----- Hobbies ---------------------------------------------------------->

    <tr>
        <td>HOBBIES <br ><br ><br ></td>

        <td>
           <input type="text" name="Hobbies" value="HOBBIES" readonly="readonly"  style="margin-Right:216px; padding-left:10px;">

        </td>
    </tr>

    <!----- Qualification---------------------------------------------------------->
    <tr>
        <td>QUALIFICATION <br><br><br><br><br><br><br></td>

        <td>
            <table style="height: 180px;width: 80%;">

                <tr>
                    <td align="center"><b>Sl.No.</b></td>
                    <td align="center"><b>Exam</b></td>
                    <td align="center"><b>Board</b></td>
                    <td align="center"><b>Percentage</b></td>
                    <td align="center"><b>Year of Passing</b></td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Class X</td>
                    <td><input type="text" name="ClassX_Board" maxlength="30" ></td>
                    <td><input type="text" name="ClassX_Percentage" maxlength="30" ></td>
                    <td><input type="text" name="ClassX_YrOfPassing" maxlength="30" ></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Class XII</td>
                    <td><input type="text" name="ClassXII_Board" maxlength="30" ></td>
                    <td><input type="text" name="ClassXII_Percentage" maxlength="30" ></td>
                    <td><input type="text" name="ClassXII_YrOfPassing" maxlength="30" ></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Graduation</td>
                    <td><input type="text" name="Graduation_Board" maxlength="30" ></td>
                    <td><input type="text" name="Graduation_Percentage" maxlength="30" ></td>
                    <td><input type="text" name="Graduation_YrOfPassing" maxlength="30" ></td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Masters</td>
                    <td><input type="text" name="Masters_Board" maxlength="30" ></td>
                    <td><input type="text" name="Masters_Percentage" maxlength="30" ></td>
                    <td><input type="text" name="Masters_YrOfPassing" maxlength="30" ></td>
                </tr>
            </table>

        </td>
    </tr>

    <!----- Course ---------------------------------------------------------->
    <tr>
        <td>COURSES<br />APPLIED FOR</td>
        <td>
            BE.CSE
            <input type="radio" name="Course_BCA" value="BCA">
            BE.AE
            <input type="radio" name="Course_BCom" value="B.Com">
            B.ECE
            <input type="radio" name="Course_BSc" value="B.Sc">
            B.AG
            <input type="radio" name="Course_BA" value="B.A">
            B.ME
            <input type="radio" name="Course_BA" value="B.A">
        </td>
    </tr>

    <!----- Submit and Reset ------------------------------------------------->
    <tr>
        <td colspan="2" align="center">
            <input type="submit" value="Submit" style="width: 100px; height: 30px;">
            <input type="reset" value="Reset" style="width: 100px; height: 30px;">
        </td>
    </tr>
</table>



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