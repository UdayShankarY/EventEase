<html>
<head>
<style>

        body {
            margin: 0;
            padding: 0;
            background: url(ev3.jpg) center/cover fixed;
            font-family: Arial, sans-serif; /* Change font for better readability */
            overflow-x: hidden; /* Prevent horizontal scrolling */

        }

        nav {
            background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent background for navigation */
            overflow: hidden;
            position: sticky;
            top: 0;
            z-index: 1000; /* Ensure navigation stays above other content */
            width: 100%;
            border-radius: 0 0 10px 10px; /* Rounded corners at the bottom */
            opacity: 1;
        }

        .heading {
            padding: 20px 0;
            background: #072947;
            color: #ffffff;
            font-size: 30px;
            text-align: center;
            margin: 0;
            font-family:Arial, Helvetica, sans-serif;
        }

        nav a {
            display: inline-block;
            color: #ffffff;
            text-align: center;
            padding: 20px 25px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Semi-transparent background on hover */
            border-radius: 5px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .section {
            position: absolute;
            top:790px;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background for content */
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Adding shadow for depth */
        }
        .section1 {
            position: absolute;
            top:1000px;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background for content */
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Adding shadow for depth */
        }

        .section h2 {
            color: #021626;
        }

        .section p {
            color: #333333;
            line-height: 1.6;
        }

        .hero-image {
            background-image: url('bl.jpg');
            height: 400px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            top: 200px;
            margin-bottom: 20px;
            opacity: 0.8;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .hero-text h1 {
            font-size: 50px;
            margin: 0;
        }

        .hero-text p {
            font-size: 24px;
            margin: 10px 0 0;
        }

        .btn {
            background-color: #501a0d;
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #040b0e;
        }
    </style>


</head>
<body>

<div class="heading">
        
        EVENT MANAGEMENT SYSTEM
 
    </div>
    <nav>
        <a href="index.html"><i class="fa-solid fa-house"> </i>HOME</a>
        <a href="adminlogin.html"><i class="fa-solid fa-address-book"> </i>ADMIN</a>
        <a href="userlogin.html"> <i class="fa-solid fa-address-book"></i>USER</a>
        <a href="gallery.html">GALLERY</a>
        <a href="#">DISPLAY EVENTS</a>
        <a href="#">LOGIN</a>
    </nav>
    
    <div class="container">
        <div class="hero-image">
            <div class="hero-text">
                <h1>Welcome to our Event Management System</h1>
                <p>Plan, organize, and manage your events seamlessly</p>
                <br>
                <button class="getstarted"><a class="getstarted" href="userregi.html">Get Started</a></button>
            </div>
        </div>

        <div class="section">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor ut nisi in luctus. Donec finibus consectetur justo, eu sodales tortor sodales vitae.</p>
        </div>

        <div class="section1">
            <h2>Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor ut nisi in luctus. Donec finibus consectetur justo, eu sodales tortor sodales vitae.</p>
        </div>
        
    </div>
    <center>
<?php
    $e_id=$_POST['evid'];
	$e_name=$_POST['evname'];
	$e_type=$_POST['evtype'];
	$e_location=$_POST['evlocation'];
	$e_capacity=$_POST['evcapacity'];
    $e_stdate=$_POST['st-date'];
    $e_eddate=$_POST['en-date'];



	$con=mysql_connect("localhost","root","");
	mysql_select_db("ems",$con);
	mysql_query("insert into event values('$e_id','$e_name','$e_type','$e_location','$e_capacity','$e_stdate','$e_eddate')");

	echo"<h3><br><br> New Event Added Successfully....!</h3>";
?>
<br><br>
<a href="event.html">back</a>
</center>
</body>
</html>