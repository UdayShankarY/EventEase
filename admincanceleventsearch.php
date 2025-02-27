<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url(EV1.jpg) center/cover fixed;
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
            font-size: 45px;
            text-align: center;
            margin: 0;
            font-family:'Times New Roman', Times, serif;
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
            background:#040b0e;
            height: 500px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            top: 130px;
            margin-bottom: 20px;
            opacity: 0.8    ;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 2); 
            width: 990px;
            left: 120px;
        }

        .hero-text {
            text-align: left;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size:20px;
            width:90%;
           
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
        input,select{
            height:40px;
            width: 500px;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .lables{
            text-align:left;
        }
        .newevent{
            text-align: left;
        }
        .submit{
            width: 100px;
           
        }
        .submit{
            background:blue;
            color: white;
            width: 135px;
            height: 40px;
            position:absolute;
            left:380px;

        }
        .submit:hover{
            background:red;

            width:80px;
            width: 140px;
            height: 45px;
            transition:0.7s;
            color:white;
        }
    </style>
</head>
<body>
    <div class="heading">
        EVENT MANAGEMENT SYSTEM
    </div>
    <nav>
        <a href="admincancelevent.html"><i class="fa-solid fa-arrow-left"></i>BACK</a>
        <a href="event.html"><i class="fa-solid fa-house"></i></i>HOME</a>
       
       
    </nav>
    
    <div class="container">
        <div class="hero-image">
            <div class="hero-text">
                <html>
<head>
</head>
<body>


<h2><i class="fa-solid fa-trash"></i> Cancel Event By ID</h2>
<br>

<form method="post" action="admincancelevent.php">
<?php

    $id=$_POST['evid'];

    
	$con=mysql_connect("localhost","root","");
	mysql_select_db("ems",$con);
	$records=mysql_query("select * from availevents1 where e_id='$id'");
?>
<div class="css">
    ID :
<input type="text" readonly name="evid" value="<?php echo $id; ?>"><br>
<?php
                    if($row=mysql_fetch_array($records)) {
                        echo "<table border=1>";
                        echo "<tr width=10px><th>EVENT ID</th><th>EVENT NAME</th><th>EVENT TYPE</th><th>EVENT PRICE</th><th>EVENT IMAGE</th>";
                        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td>";
                        while($row=mysql_fetch_array($records)) {
                            echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td>";
                        }
                        echo "</table>"; ?>

<br><br>
                        <input type="submit" class="submit" value="Cancel Event">


<?php
                       
                    } else {
                        echo "Records not found......!   on id : $id<br><br>";
                        echo "<script>alert('Records not Found....!');</script>";  
                    }
                    ?>

                </form>
            </div>
        </div>

      
      
        
    </div>
</body>
</html>
