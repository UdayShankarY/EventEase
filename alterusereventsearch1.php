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
        }    </style>
</head>
<body>
<div class="heading">
    EVENT MANAGEMENT SYSTEM
</div>
<nav>
    <a href="user.html"><i class="fa-solid fa-house"> </i>HOME</a>
</nav>

<center>
    <div class="container">
        <div class="hero-image">
            <div class="hero-text">
                <?php
                $e_id = $_POST['evid'];
                $e_name = $_POST['evname'];
                $e_type = $_POST['evtype'];
                $e_price = $_POST['evprice'];
                $e_loc = $_POST['evloc'];
                $c_name = $_POST['costname'];
                $c_mono = $_POST['costmobileno'];
                $c_add = $_POST['costadd'];
                $e_date = $_POST['evdate'];
                $c_dis = $_POST['evdis'];

                // Connect to the database
      // Establish database connection
$con = mysqli_connect("localhost", "root", "", "ems");

// Check if connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "UPDATE u_event SET e_name='$e_name', e_type='$e_type', e_price='$e_price', e_loc='$e_loc', c_name='$c_name', c_mono='$c_mono', c_add='$c_add', c_date='$e_date', c_dis='$c_dis' WHERE e_id='$e_id'";
if (mysqli_query($con, $sql)) {
    echo "<h3><br><br>Event Updated Successfully...! <br>ID: $e_id.<br>Date: $e_date.<br>Location: $e_loc</h3>";
} else {
    echo "Error updating record: " . mysqli_error($con);
}



// Close database connection
mysqli_close($con);

                ?>
                <br>
                <a href="user.html"><i class="fa-solid fa-house"> </i>HOME</a>
            </div>
        </div>
    </div>
</center>
</body>
</html>
