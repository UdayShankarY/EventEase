<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Details</title>

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
    <h3>Event Details</h3>
    </div>
    <?php
    // Check if eventId is set and is a valid integer
    if (isset($_GET['eventId']) && ctype_digit($_GET['eventId'])) {
        $eventId = $_GET['eventId'];
        $con = mysql_connect("localhost", "root", "");
        if (!$con) {
            die("Error: Could not connect to the database. " . mysql_error());
        }
        mysql_select_db("ems", $con);
        $eventId = mysql_real_escape_string($eventId);
        $result = mysql_query("SELECT * FROM availevents1 WHERE e_id = $eventId");
        if (!$result) {
            die("Error in SQL query: " . mysql_error());
        }
        if ($row = mysql_fetch_array($result)) {
            ?>
            <form>
                Event ID: <input type="text" value="<?php echo htmlspecialchars($row[0]); ?>"><br>
                Event Name: <input type="text" value="<?php echo htmlspecialchars($row[1]); ?>"><br>
                Event Type: <input type="text" value="<?php echo htmlspecialchars($row[2]); ?>"><br>
                Event Price: <input type="text" value="<?php echo htmlspecialchars($row[3]); ?>"><br>
                Event Image: <input type="text" value="<?php echo htmlspecialchars($row[4]); ?>"><br>
            </form>
            <?php
        } else {
            echo "No records found for Event ID: $eventId";
        }
        mysql_close($con);
    } else {
        echo "Invalid or missing Event ID in the URL";
    }
    ?>
</body>
</html>