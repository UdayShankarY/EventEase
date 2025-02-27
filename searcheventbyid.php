<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
       body {
            margin: 0;
            padding: 0;
            background: url(EV1.jpg) center/cover fixed;
            font-family: Arial, sans-serif;
            overflow-x: hidden; /* Prevent horizontal scrolling */

        }

        nav {
            background-color: rgba(0, 0, 0, 0.8);
            overflow: hidden;
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
            border-radius: 0 0 10px 10px;
            opacity: 1;
        }

        .heading {
            padding: 20px 0;
            background: #072947;
            color: #ffffff;
            font-size: 30px;
            text-align: center;
            margin: 0;
            font-family: 'times new roman';
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
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            width: 100%;
        }

        .hero-image {
            height: 2000px;
            width: 80%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            top: 80px;
            margin: auto; /* Center the table horizontally */
            border-radius: 10px; /* Add rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 9%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            width: 100%;
        }

        h3 {
            text-align: center;
            color: white;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 100%;
            background-color: #fff; /* Set background color */
            border-radius: 10px; /* Add rounded corners */
        }

        th, td {
            padding: 15px; /* Increase padding */
            text-align: center; /* Center align text */
            border: 1px solid #ddd;
        }

        th {
            background-color: #072947;
            color: white;
        }

        td img {
            max-width: 100px;
            max-height: 100px;
            display: block;
            margin: auto;
            cursor: pointer; /* Add pointer cursor to indicate clickable */
        }

        a {
            color: black;
        }

        td {
            color: black;
        }

        table {
            border: 2px solid black; /* Add border */
        }
          
tr:hover {
    background-color: lightpink; /* Change background color on hover */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Add shadow on hover */
}
      
    </style>
</head>
<body>
    <div class="heading">
        EVENT MANAGEMENT SYSTEM
    </div>
    <nav>
        <a href="searcheventbyid.html"><i class="fa-solid fa-arrow-left"></i>BACK</a>
        <a href="searchuserevents.html"><i class="fa-solid fa-house"></i></i>HOME</a>
       
       
    </nav>
    
    <div class="container">
        <div class="hero-image">
            <div class="hero-text">
                <html>
<head>
</head>
<body>


<h3> Search By ID</h3>
<br>
<?php

    $id=$_POST['evid'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("ems",$con);
	$records=mysql_query("select * from availevents1 where e_id='$id'");
?>
               
               <table border=1>
<div class="css">
<?php
               echo"<tr width=10px><th >EVENT ID</th><th>EVENT NAME </th><th>EVENT TYPE</th><th>EVENT Price</th><th>EVENT Image</th>";

	while($row=mysql_fetch_array($records))
{
    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td><a href='" . $row["e_image"] . "' target='_blank'>View Image</a></td><br><br>";
}
                    ?>


            </div>
        </div>

      
      
        
    </div>
</body>
</html>
