<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
            margin-left: 2.5%;
        }
        .section1 {
            position: absolute;
            top:1000px;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background for content */
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Adding shadow for depth */
            margin-left: 2.5%;
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
            height: 350px;
            width:660px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            top: 200px;
            left:280px;
            margin-bottom: 20px;
            opacity: 0.8;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            width: 1100px;
            font-size:20px;
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
        td{
            height:7px;
            width:200px;
        }   
      
    </style>
</head>
<body>
    <div class="heading">
        EVENT MANAGEMENT SYSTEM
    </div>
    <nav>
        <a href="usercancelevent.html"><i class="fa-solid fa-arrow-left"></i>BACK</a>
        <a href="user.html"><i class="fa-solid fa-house"></i></i>HOME</a>
       
       
    </nav>
    
    <div class="container">
        <div class="hero-image">
            <div class="hero-text">
                <html>
<head>
</head>
<body>


<h2> Cancel Event By ID</h2>
<br>
<br>
<?php

    $id=$_POST['evid'];
    $name=$_POST['evname'];

    $type=$_POST['evtype'];

    $price=$_POST['evprice'];

    $target_file='image';

	$con=mysql_connect("localhost","root","");
	mysql_select_db("ems",$con);
	mysql_query("delete from u_event where e_id='$id'");

    mysql_query("INSERT INTO availevents1 values('$id','$name','$type','$price','$target_file')");


?>
<div class="css">
<?php
                   
                        echo "Records on id : $id deleted...!<br><br><br><br><br>";
                        echo "<script>alert('Records deleted...!');</script>";  
                    
                    ?>


            </div>
        </div>

      
      
        
    </div>
</body>
</html>
