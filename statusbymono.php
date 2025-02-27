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
            font-family:'times new roman';
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
        
        b{
            font-size:30px;
            color: red;
        }
        table{
            text-align:left;
            width:400px;
        }
        tr{
            height:30px;
        }
        tr:hover{
            background:yellow;
            color:red;
        }
           a{
            color:white;
        }
        .sts{
            color:yellow;
            font-size:25px;
        }
        </style>
</head>
<body>
<div class="heading">
    EVENT MANAGEMENT SYSTEM
</div>
<nav>
    <a href="checkstatus.html"><i class="fa-solid fa-arrow-left"> </i>BACK</a>
</nav>

<center>
    <div class="container">
        <div class="hero-image">
            <div class="hero-text">


    
            <?php
$c_mono = $_POST['mono'];

// Establish database connection
$con = mysqli_connect("localhost", "root", "", "ems");

// Check if connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Perform SQL query
$query = "SELECT * FROM u_event WHERE c_mono = '$c_mono'";
$result = mysqli_query($con, $query);

// Check if there is a result
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $e_id = $row['e_id']; 

    $e_date = $row['c_date']; 


    $e_name = $row['e_name']; 

    $e_type = $row['e_type']; 

    $e_price = $row['e_price']; 

    $e_loc = $row['e_loc']; 

    $c_name = $row['c_name']; 

    $c_mono = $row['c_mono'];

    $c_add = $row['c_add']; 

$currentDateTime = $_POST['cdatetime'];
?>
<?php
// Check if cdatetime is set and not empty
if (isset($_POST['cdatetime']) && !empty($_POST['cdatetime'])) {
    // Date of birth
    $dob = $e_date;

    // Current date
    $currentDateTime = $_POST['cdatetime'];

    // Convert dates to DateTime objects for comparison
    $today = new DateTime($currentDateTime);
    $birthdate = new DateTime($dob);

    // Compare the birthdate with the current date
    if ($birthdate > $today) {
        echo "<br><div class='sts'>STATUS : Event Approved.</div>";


        echo "<table border='1'><tr><th>Event ID</th><td>$e_id</td></tr>";
        echo "<tr><th>Event Date</th><td>$e_date</td></tr>";
        echo "<tr><th>Event Name</th><td>$e_name</td></tr>";
        echo "<tr><th>Event Type</th><td>$e_type</td></tr>";
        echo "<tr><th>Event Price</th><td>$e_price</td></tr>";
        echo "<tr><th>Event Location</th><td>$e_loc</td></tr>";
        echo "<tr><th>Customer Name</th><td>$c_name</td></tr>";
        echo "<tr><th>Customer Mobile No</th><td>$c_mono</td></tr>";
        echo "<tr><th>Customer Address</th><td>$c_add</td></tr>";
    } elseif ($birthdate < $today) {
        echo "<br><div class='sts'>STATUS : event ended on ($e_date).</div>";

        echo "<table border='1'><tr><th>Event ID</th><td>$e_id</td></tr>";
        echo "<tr><th>Event Date</th><td>$e_date</td></tr>";
        echo "<tr><th>Event Name</th><td>$e_name</td></tr>";
        echo "<tr><th>Event Type</th><td>$e_type</td></tr>";
        echo "<tr><th>Event Price</th><td>$e_price</td></tr>";
        echo "<tr><th>Event Location</th><td>$e_loc</td></tr>";
        echo "<tr><th>Customer Name</th><td>$c_name</td></tr>";
        echo "<tr><th>Customer Mobile No</th><td>$c_mono</td></tr>";
        echo "<tr><th>Customer Address</th><td>$c_add</td></tr>";
    } else {
        echo "<br><div class='sts'> STATUS : today event ($e_date)</div>";


        echo "<table border='1'><tr><th>Event ID</th><td>$e_id</td></tr>";
        echo "<tr><th>Event Date</th><td>$e_date</td></tr>";
        echo "<tr><th>Event Name</th><td>$e_name</td></tr>";
        echo "<tr><th>Event Type</th><td>$e_type</td></tr>";
        echo "<tr><th>Event Price</th><td>$e_price</td></tr>";
        echo "<tr><th>Event Location</th><td>$e_loc</td></tr>";
        echo "<tr><th>Customer Name</th><td>$c_name</td></tr>";
        echo "<tr><th>Customer Mobile No</th><td>$c_mono</td></tr>";
        echo "<tr><th>Customer Address</th><td>$c_add</td></tr>";
    }
} else {
    echo "Date of event not provided.";
}
                }
?>



    

                <br>
            </div>
        </div>
    </div>
</center>
</body>
</html>
