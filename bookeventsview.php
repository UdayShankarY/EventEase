<!DOCTYPE html>
<html lang="en">
<head>
    <script>
    function validateForm() {
        var customerName = document.forms["bookingForm"]["costname"].value;
        var mobileNumber = document.forms["bookingForm"]["costmobileno"].value;
        
        // Regular expressions for validation
        var nameRegex = /^[a-zA-Z\s]+$/;
        var mobileRegex = /^\d{10}$/;

        // Check if customer name contains only alphabets
        if (!nameRegex.test(customerName)) {
            alert("Customer name should contain alphabets only.");
            return false;
        }

        // Check if mobile number is a 10-digit number
        if (!mobileRegex.test(mobileNumber)) {
            alert("Mobile number should be a 10-digit number.");
            return false;
        }

        return true;
    }
</script>
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
            font-size: 35px;
            text-align: center;
            margin: 0;
            font-family:'Times New Roman';
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
            height: 1200px;
            width: 80%;
            background:black;
            opacity:0.7;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            top: 700px;
            left:480px;
            margin: auto; /* Center the table horizontally */
            border-radius: 10px; /* Add rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
            transform:translate(-50%,-50%);
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            width: 100%;
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
        input {
    width: 80%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 5px;
    background-color: #f8f8f8;
    transition: border-color 0.3s;
}

input:focus {
    outline: none;
    border-color: black;
}

input[type="submit"]{
    width:120px;
    height:50px;    
}

.lables{
    color:white;
    position:absolute;
    left:10%;
}
h3{
    color:white;
}
textarea{
    width: 80%;
    transition: border-color 0.3s;
    height:100px;
    border: 1px solid black;
}
.sbt{
    width:30px;
    height:20px;
    color:yellow;
    background:blue;
}

    </style>
</head>
<body>
    <h1 class="heading">EVENT MANAGEMENT SYSTEM </h1>

    
    <nav>
        <a href="user.html"><i class="fa-solid fa-arrow-left"></i>BACK</a>
       
    </nav>
    <?php
    // Connect to your database
    $con = mysqli_connect("localhost", "root", "", "ems");

    // Function to generate a unique ID
    function generateUniqueId() {
        return mt_rand(1000, 9999); // Generates a random number between 100000000 and 999999999
    }

    // Check if event_id is set in the URL
    if (isset($_GET['event_id'])) {
        // Get the event_id from the URL
        $event_id = $_GET['event_id'];

        // Prepare and execute a query to fetch event details using the event_id
        $query = "SELECT * FROM availevents1 WHERE e_id = '$event_id'";
        $records = mysqli_query($con, $query);

        // Check if the query was successful and if any rows were returned
        if ($records && mysqli_num_rows($records) > 0) {


            $row = mysqli_fetch_assoc($records);

            // Access the e_name column from the $row array
          


            // Check if the event ID exists in the u_event table
            $con1 = mysqli_connect("localhost", "root", "", "ems");
            $query1 = "SELECT * FROM u_event WHERE e_id = '$event_id'";
            $records1 = mysqli_query($con1, $query1);

            // Check if any rows were returned
            if ($records1 && mysqli_num_rows($records1) > 0) {
                // ID already exists in the u_event table, generate a new random ID
                $new_id = generateUniqueId();
                // Set the new ID to the event_id variable
                $event_id = $new_id;
            } else {
                // ID does not exist in the u_event table, keep the same ID
                $event_id = $event_id;
            }

            mysqli_close($con1);

        } else {
            echo "<p>Event not found</p>";
        }
    } else {
        echo '<p>Event ID not provided</p>';
    }
?>


    <div class="container">
        <div class="hero-image">
        <form method="post" action="bookeventverify.php" name="bookingForm" onsubmit="return validateForm()">
        <div class="hero-text">
        <h3>BOOK EVENT</h3><br>

            <div class="lables" >EVENT ID:</div><br><br>
            <input type="text" name="evid" value="<?php echo $event_id; ?>" readonly>
            </label><br><br>

            <div class="lables" >EVENT NAME:</div><br>
            <input name="evname" type="text" readonly value="<?php echo isset($row['e_name']) ? $row['e_name'] : ''; ?>">
            </label><br><br>

            <div class="lables" >EVENT TYPE:</div><br>
                <input id="unique-id" name="evtype"  type="text" readonly value="<?php echo isset($row['e_type']) ? $row['e_type'] : ''; ?>" ></input>
            </label><br><br>

            <div class="lables" >EVENT PRICE:</div><br>
                <input id="unique-id" name="evprice"  type="text"  readonly value="<?php echo isset($row['e_price']) ? $row['e_price'] : ''; ?>"></input>
            </label><br><br>

            <div class="lables" >EVENT LOCATION:</div><br>
                <input id="unique-id" name="evloc" required  type="text" placeholder="Event Location" ></input>
            </label><br><br>

            <div class="lables" >Customer Name:</div><br>
                <input id="unique-id" name="costname" required type="text" placeholder="Applicant Name" ></input>
            </label><br><br>

            <div class="lables" >Customer Mobile.No:</div><br>
                <input id="unique-id" name="costmobileno" required type="text" placeholder=" mobile no" ></input>
            </label><br><br>

            <div class="lables" >Customer Address:</div><br>
                <input id="unique-id" name="costadd" required type="text" placeholder=" Address " ></input>
            </label><br><br>

            <div class="lables">EVENT DATE:</div><br>
<input id="evdate" name="evdate" required type="date" placeholder="Event Date"></input>
</label><br><br>

<script>
    // Get today's date
    var today = new Date();

    // Format the date
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
    var yyyy = today.getFullYear();

    // Set the minimum date in the format YYYY-MM-DD
    var minDate = yyyy + '-' + mm + '-' + dd;

    // Set the minimum date for the input field
    document.getElementById("evdate").setAttribute("min", minDate);
</script>





<div class="lables" >EVENT Description:</div><br>

                <textarea  name="evdis" required  type="text" placeholder=" Event Description" ></textarea>
            </label><br><br>


            <div class="lables">Current Date and Time:</div><br>
    <input type="text" id="dateTimeTextBox" name="bookeddatetime" required readonly> <br>

    <script>
        // Get current date and time
        var currentDateTime = new Date();

        // Format the date and time
        var formattedDateTime = currentDateTime.getFullYear() + '-' +
                                ('0' + (currentDateTime.getMonth() + 1)).slice(-2) + '-' +
                                ('0' + currentDateTime.getDate()).slice(-2) + ' ' +
                                ('0' + currentDateTime.getHours()).slice(-2) + ':' +
                                ('0' + currentDateTime.getMinutes()).slice(-2) + ':' +
                                ('0' + currentDateTime.getSeconds()).slice(-2);

        // Set the value of the text box to the formatted date and time
        document.getElementById("dateTimeTextBox").value = formattedDateTime;
    </script>




            <input  class="sbt" name="submit" value="Book Event"  type="submit"  ></input>



          







</div>

</div>
        </div>
    </div>
</body>
</html>
