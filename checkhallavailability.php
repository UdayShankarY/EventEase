<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Event Availability</title>
    <style>
        /* CSS styles */
        body {
            margin: 0;
            padding: 0;
            background: url(EV1.jpg) center/cover fixed;
            font-family: 'times new roman';
            overflow-x: hidden; /* Prevent horizontal scrolling */

        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #fff;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        form label {
            color: #fff;
            font-weight: bold;
        }

        form input[type="date"] {
            padding: 8px;
            border-radius: 5px;
            border: none;
        }

        form button {
            padding: 8px 20px;
            background-color: red;
            color: yellow;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        hr {
            border: none;
            border-top: 2px solid #fff;
            margin: 20px 0;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
            border-radius: 10px;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #072947;
            color: #fff;
        }

        td img {
            max-width: 100px;
            max-height: 100px;
            display: block;
            margin: auto;
            cursor: pointer;
        }

        a {
            color: black;
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


        .hero-image {
            height:60px;
            width: 40%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            top: 50px;
            margin: auto; /* Center the table horizontally */
            border-radius: 10px; /* Add rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
            background:black;
            opacity:0.8;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 15%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            width: 100%;
        }



           
tr:hover {
    background-color: lightpink; /* Change background color on hover */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Add shadow on hover */
}
    </style>
</head>
<body>
    <h1 class="heading">CONVENTIONAL HALL MANAGEMENT SYSTEM</h1>

    
<nav>
    <a href="conventional.html"><i class="fa-solid fa-arrow-left"></i>BACK</a>
</nav>
    <div class="container">

    <div class="hero-image">
    <div class="hero-text">

        <form method="POST" action="">
            <br><br><br>
            <label for="date">Select Date:</label>
            <input type="date" id="date" name="date">
            <button type="submit" name="check_availability">Check Availability</button>
        </form>
    </div>
    </div>

        <BR>

        <?php
        // PHP code
        // Database connection
        $conn = mysqli_connect("localhost", "root", "", "ems");

        // Check if form is submitted
        if (isset($_POST['check_availability'])) {
            $date = $_POST['date'];

            // Query to fetch events from availevents1 that are not booked on the specified date
            $query = "SELECT * FROM avail_conven
                      WHERE c_id NOT IN (
                          SELECT c_id FROM regi_conven WHERE e_date = '$date'
                      )";

            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                echo "<br><br><br><br><br><table>";
                echo "<tr>
                         
                        <th>HALL ID</th>
                        <th>HALL NAME</th>
                        <th>HALL TYPE</th>
                        <th>HALL PRICE</th>
                        <th>HALL LOCATION</th>

                        <th>HALL CAPACITY</th>

                        <th>HALL IMAGE</th>
                      </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td><a href='bookconvensview.php?event_id=" . $row['c_id'] . "'>" . $row['c_id'] . "</a></td>";
                    echo "<td>" . $row['c_name'] . "</td>";
                    echo "<td>" . $row['c_type'] . "</td>";
                    echo "<td>" . $row['c_price'] . ".00rs</td>";
                    echo "<td>" . $row['c_location'] . "</td>";

                    echo "<td>" . $row['c_capacity'] . "</td>";


                    echo "<td><img class='event-image' src='" . $row['c_image'] . "' alt='Event Image'></td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No events available on $date.</p>";
            }
        }
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>