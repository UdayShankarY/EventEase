<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url(whitwbg.jpg) center/cover fixed;
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
            font-family: Arial, Helvetica, sans-serif;
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
            top: 200px;
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
        td{
            color:black;
        }
    </style>
</head>
<body>
    <nav>
        <a href="#event-details">Event Details</a>
        <a href="#event-form">Event Form</a>
        <!-- Add more links as needed -->
    </nav>

    <h1 class="heading">Book Event Details</h1>

    <?php
    // Initialize $row
    $row = null;

    // Check if event_id is set in the URL
    if (isset($_GET['e_id'])) {
        // Get the event_id from the URL
        $event_id = $_GET['e_id'];

        // Connect to your database
        $con = mysql_connect("localhost", "root", "");
        mysql_select_db("ems", $con);

        // Prepare and execute a query to fetch event details using the event_id
        $query = "SELECT * FROM availevents1 WHERE e_id = '$event_id'";
        $result = mysql_query($query);

        // Check if the query was successful and if any rows were returned
        if ($result && mysql_num_rows($result) > 0) {
            // Fetch and display the event details
            $row = mysql_fetch_assoc($result);
          
        } else {
            echo "<p>Event not found</p>";
        }

        // Close the database connection
        mysql_close($con);
    } else {
        echo "<p>Event ID not provided</p>";
    }
    ?>

    <div class="container" id="event-details">
        <h2>Event Details</h2>
        <div class="hero-image">
            <div class="lables" >EVENT ID:</div><br>
                <input id="unique-id" name="evid"  type="text" readonly value="<?php echo  $row['e_id'] ; ?>"></input>
            </label><br><br>
            <div class="lables" >EVENT NAME:</div><br>
                <input id="unique-id" name="evname"  type="text" readonly value="<?php echo  $row['e_name'] ; ?>"></input>
            </label><br><br>

            <div class="lables" >EVENT TYPE:</div><br>
                <input id="unique-id" name="evtype"  type="text" readonly value="<?php echo  $row['e_type'] ; ?>" ></input>
            </label><br><br>
            <div class="lables" >EVENT PRICE:</div><br>
                <input id="unique-id" name="evprice"  type="text"  readonly value="<?php echo  $row['e_price'] ; ?>"></input>
            </label><br><br>
        
        <div class="lables" >EVENT DATE:</div><br>
                <input id="unique-id" name="evdate"  type="text" placeholder="Event Date" value="xx" ></input>
            </label><br><br>


            <div class="lables" >EVENT LOCATION:</div><br>
                <input id="unique-id" name="evloc"  type="text" placeholder="Event Location" ></input>
            </label><br><br>


            <div class="lables" >Applicant Name:</div><br>
                <input id="unique-id" name="evappname"  type="text" placeholder="Applicant Name" ></input>
            </label><br><br>
        </div>
    </div>
    </div>

    <div class="container" id="event-form">
        <h2>Event Form</h2>
        <!-- Add your event form here -->
    </div>
</body>
</html>
