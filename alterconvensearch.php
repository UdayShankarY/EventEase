<html>
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
            font-size: 30px;
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
    CONVENTIONAL HALL MANAGEMENT SYSTEM
    </div>
    <nav>
<a href="conven.html"><i class="fa-solid fa-arrow-left"></i>&nbsp;Back</a>
<a href="index.html"><i class="fa-solid fa-house"></i>HOME</a>
        
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
    $sql = "SELECT * FROM avail_conven WHERE c_id='$evid'";
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
                    <form method="post" action="alterconvensearch1.php" enctype="multipart/form-data">
                        HALL ID:<br> <input type="text" readonly name="cid" value="<?php echo $row['c_id']; ?>"><br><br>
                        HALL Name:<br> <input type="text" name="cname" value="<?php echo $row['c_name']; ?>"><br><br>
                        HALL Type:<br> <input type="text"  name="ctype" value="<?php echo $row['c_type']; ?>"><br><br>
                        HALL PRICE:<br> <input type="text" name="cprice" value="<?php echo $row['c_price']; ?>"><br><br>
                        HALL LOCATION:<br> <input type="text" name="clocation" value="<?php echo $row['c_location']; ?>"><br><br>

                        HALL CAPACITY:<br> <input type="text" name="ccapacity" value="<?php echo $row['c_capacity']; ?>"><br><br>

                        
                        
                        Image:<br> <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
                        <input class="submit" type="submit" value="Alter Event" name="submit">
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