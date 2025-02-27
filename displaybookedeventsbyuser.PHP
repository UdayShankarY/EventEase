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
            font-family: 'Times New Roman', Times, serif;
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
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            top: 150px;
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
        width: 190px;
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
        table:border{
            color:black;
        }    </style>
</head>
<body>
<div class="heading">
    EVENT MANAGEMENT SYSTEM
</div>
<nav>
<a href="event.html"><i class="fa-solid fa-arrow-left"></i>BACK</a>
<a href="index.html"><i class="fa-solid fa-house"></i>HOME</a>

</nav>
<div class="container">
    <div class="hero-image">
        <div class="hero-text">
            <h3>BOOKED EVENTS</h3>
            <div class="css">
                <?php
                // Establish connection to the database
                $con = mysqli_connect("localhost", "root", "", "ems");

                // Check if connection was successful
                if (!$con) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Fetch records from the database
                $records = mysqli_query($con, "SELECT * FROM u_event");

                // Check if records were fetched successfully
                if ($records && mysqli_num_rows($records) > 0) {
                    echo "<table border=2>";
                    echo "<tr>";
                    echo "<th>EVENT ID</th>";
                    echo "<th>EVENT NAME</th>";
                    echo "<th>EVENT TYPE</th>";
                    echo "<th>EVENT PRICE</th>";
                    echo "<th>EVENT PLACE</th>";
                    echo "<th>CUSTOMER NAME</th>";
                    echo "<th>CUSTOMER MOBILE NO</th>";
                    echo "<th>CUSTOMER ADDRESS</th>";
                    echo "<th>EVENT DATE</th>";
                    echo "<th>EVENT DESCRIPTION</th>";
                    echo "</tr>";

                    // Loop through the fetched records and display them
                    while ($row = mysqli_fetch_array($records)) {
                        echo "<tr>";
                        echo "<td>" . $row[0] . "</td>"; // EVENT ID
                        echo "<td>" . $row[1] . "</td>"; // EVENT NAME
                        echo "<td>" . $row[2] . "</td>"; // EVENT TYPE
                        echo "<td>" . $row[3] . "</td>"; // EVENT PRICE
                        echo "<td>" . $row[4] . "</td>"; // EVENT PLACE
                        echo "<td>" . $row[5] . "</td>"; // CUSTOMER NAME
                        echo "<td>" . $row[6] . "</td>"; // CUSTOMER MOBILE NO
                        echo "<td>" . $row[7] . "</td>"; // CUSTOMER ADDRESS
                        echo "<td>" . $row[8] . "</td>"; // EVENT DATE
                        echo "<td>" . $row[9] . "</td>"; // EVENT DESCRIPTION
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>No events booked.</p>";
                }

                // Close the database connection
                mysqli_close($con);
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
