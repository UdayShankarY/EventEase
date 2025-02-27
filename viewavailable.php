<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
       img {
        position:relative;
           width: 450px; /* Adjust image width as needed */
           height: 300px; /* Maintain aspect ratio */
       }
       .event-container {
           display: flex;
           flex-wrap: wrap;
       }
       .event {
           width: 700px; /* Adjust width and margins as needed */
           margin: 10px;
           margin-left: 20px;

           border: 1px solid red;
           border-radius: 12px;
           overflow: hidden;
           background: #fff;
           box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
           display: flex;
           padding:12px;
       }
       .event-content {
           flex: 1;
           padding: 20px;
       }
       .event-details {
           margin-bottom: 20px;
       }
       .event-image {
           flex: 1;
           display: flex;
           justify-content: center;
           align-items: center;
       }
       .readonly{
            width: 200px;
            height:30px;
            color:black;
        }
        .lables{
            text-align:left;
            color:black;
        }
       
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
            background:  #072947;
            color: #ffffff;
            font-size: 35px;
            text-align: center;
            margin: 0;
            font-family:'Times New Roman';
        }
        
        .heading:hover {
                 
            font-size: 36px;
            transition:  0.7s ;

            
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
            border-radius: 7px;
            padding: 20px 27px;
            transition: 0.4s;
        }

     

        a {
            text-decoration: none;
            color:black;
        }
       
        button{
            background-color:red;
            color: white;
            width: 150px;
            height: 40px;
            border-radius:2px;
            font-size:  18px;



        } 
        button:hover{
            background-color:yellow;
            color: black;
            width: 155px;
            height: 45px;
            font-size: 20px;
            transition:0.7s;
            border-radius:5px;

        }
        
       

    </style>
</head>
<body>
    <div class="heading">
 EVENT MANAGEMENT SYSTEM
    </div>
    <nav>
        <a href="user.html"><i class="fa-solid fa-arrow-left"></i>BACK</a>
    </nav>
    
    <div class="container">
        <div class="hero-image">
            <div class="hero-text">
            


<br>
<br>
<div class='event-container'> <!-- Container to hold all events -->
<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "ems");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the database
$sql = "SELECT * FROM availevents1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='event'>"; // Start event container

        echo "<div class='event-content'>"; // Start event content
        echo "<div class='event-details'>";
        echo "<div class='label'>Event ID:</div>";
        echo "<input type='text' class='readonly' value='" . $row["e_id"]. "' readonly><br><br>";
        echo "<div class='label'>Event Name:</div>";
        echo "<input type='text'  class='readonly' value='" . $row["e_name"]. "' readonly><br><br>";
        echo "<div class='label'>Event Type:</div>";
        echo "<input type='text'  class='readonly' value='" . $row["e_type"]. "' readonly><br><br>";
        echo "<div class='label'>Price:</div>";
        echo "<input type='text'  class='readonly' value='" . $row["e_price"]. "' readonly><br><br>";

        echo "<a href='" . $row["e_image"] . "' target='_blank'>View Image</a><br><br>";

        echo "<button><a href='bookeventsview.php?event_id=" . $row["e_id"] . "' target='_blank'>Book Event</a></button><br><br>"; // Modified link
        echo "</div>"; // End event details

        echo "</div>"; // End event content

        echo "<div class='event-image'>";
        echo "<img  src='" . $row["e_image"] . "' alt='Event Image'>";
        echo "</div>"; // End event image

        echo "</div>"; // End event container
} 
}

else {
    echo "0 results";
}

echo "</div>"; // End event-container

// Close connection
mysqli_close($conn);
?>
</div>
</div>
</div>
</div>
</body>
</html>
