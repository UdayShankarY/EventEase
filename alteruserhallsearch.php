<html>
    <head>
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
            font-size: 35px;
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
            top:300px;
            left:300px;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background for content */
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Adding shadow for depth */
        }
        .section1 {
            position: absolute;
            top:50px;
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
            position: absolute;
            top:300px;
            left:350px;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background for content */
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Adding shadow for depth */
            width:800px;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 49%;
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

        .submit {
            background-color: #501a0d;
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit:hover {
            background-color: #040b0e;
        }
        input,select{
            height:40px;
            width: 800px;
            margin-bottom: 20px;
            border-radius: 10px;
            align:left;
        }
        .lables{
            text-align:left;
            margin-left:5px;
           
        }
        .newevent{
            text-align: left;
        }
        .submit{
            width: 130px;
           
        }
        .preview{
            text-align: left;
        }
        h3
        {
            text-align: center;
            color:white;
        }
        .msg{
            color:white;
            position:relative;
            left:750px;
        }
    </style>
</head>
    <body> <div class="heading">
        EVENT MANAGEMENT SYSTEM
    </div>
    <nav>
    <a href="conventional.html"><i class="fa-solid fa-house"></i>&nbsp;HOME</a>
        
        
    </nav>
<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "ems");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $evid = mysqli_real_escape_string($conn, $_POST['evid']);
    
    // Query to retrieve event details by ID
    $sql = "SELECT * FROM regi_conven WHERE c_id='$evid'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Event found, display form to alter details
        $row = mysqli_fetch_assoc($result);
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <!-- Include necessary CSS and font-awesome -->
        </head>
        <body>
            <div class="container">
                <div class="hero-image">
                    <h2>Alter Hall</h2>
                    <form method="post" action="alteruserhallsearch1.php" enctype="multipart/form-data">
                    <div class="lables" >HALL ID:</div><br>
                <input id="unique-id" name="cid"  type="text" readonly value="<?php echo isset($row['c_id']) ? $row['c_id'] : ''; ?>"></input>
            </label><br><br>
            <div class="lables" >HALL NAME:</div><br>
                <input id="unique-id" name="cname"  type="text" readonly value="<?php echo isset($row['c_name']) ? $row['c_name'] : ''; ?>"></input>
            </label><br><br>

            <div class="lables" >HALL TYPE:</div><br>
                <input id="unique-id" name="ctype"  type="text" readonly value="<?php echo isset($row['c_type']) ? $row['c_type'] : ''; ?>" ></input>
            </label><br><br>
            <div class="lables" >HALL PRICE:</div><br>
                <input id="unique-id" name="cprice"  type="text"  readonly value="<?php echo isset($row['c_price']) ? $row['c_price'] : ''; ?>"></input>
            </label><br><br>

           

            <div class="lables" >HALL LOCATION:</div><br>
                <input id="unique-id" name="cloc"  type="text" readonly placeholder="Event Location" value="<?php echo isset($row['c_location']) ? $row['c_location'] : ''; ?>"></input>
            </label><br><br>

            <div class="lables" >HALL CAPACITY:</div><br>
                <input id="unique-id" name="ccapacity"  type="text" readonly placeholder="Event Location" value="<?php echo isset($row['c_capacity']) ? $row['c_capacity'] : ''; ?>"></input>
            </label><br><br>



            <div class="lables" >CUST Name:</div><br>
                <input id="unique-id" name="costname"  type="text" placeholder="Applicant Name" value="<?php echo isset($row['cu_name']) ? $row['cu_name'] : ''; ?>"></input>
            </label><br><br>

            <div class="lables" >CUST Mobile.No:</div><br>
                <input id="unique-id" name="costmobileno"  type="text" placeholder=" mobile no" value="<?php echo isset($row['cu_mono']) ? $row['cu_mono'] : ''; ?>"></input>
            </label><br><br>

            <div class="lables" >CUST Address:</div><br>
                <input id="unique-id" name="costadd"  type="text" placeholder=" Address " value="<?php echo isset($row['cu_add']) ? $row['cu_add'] : ''; ?>" ></input>
            </label><br><br>

            <div class="lables" >EVENT DATE:</div><br>
                <input id="unique-id" name="edate"  type="date" placeholder="Event Date" value="<?php echo isset($row['e_date']) ? $row['e_date'] : ''; ?>"></input>
            </label><br><br>

            <div class="lables" >EVENT DISCRIPTION:</div><br>
                <input id="unique-id" name="dis"  type="text" placeholder="Event Dis" value="<?php echo isset($row['c_dis']) ? $row['c_dis'] : ''; ?>"></input>
            </label><br><br>
                        
            <div class="lables">booked Date and Time:</label>
            <input type="text" id="currentDateTime" name="bdatetime" required value="<?php echo isset($row['cur_date_time']) ? $row['cur_date_time'] : ''; ?>" readonly>
                       
            <input type='submit'></input>
                    </form>
                </div>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "<div class='msg'>No records found for the provided Event ID.</div>";
    }
}

// Close connection
mysqli_close($conn);
?>
</body>
</html>







