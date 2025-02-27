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

    

         h2 {
            color: white;
        }

        .section p {
            color: #333333;
            line-height: 1.6;
        }

        .hero-image {
            position: absolute;
            top:300px;
            left:450px;
            background: black; /* Semi-transparent background for content */
            opacity:0.7;
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
            font-size: 35px;
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
            color:white;
           
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
        .textarea{
    width: 80%;
    transition: border-color 0.3s;
    height:100px;
    border: 1px solid black;
}
input[type="submit"]{
    width:120px;
    height:50px;
    background:blue;  
    color:yellow;

}
input[type="submit"]:hover{
    width:125px;
    height:55px;
    background:red;  
    color:yellow;

}
    </style>
</head>
    <body> <div class="heading">
        EVENT MANAGEMENT SYSTEM
    </div>
    <nav>
    <a href="alteruserevent.html"><i class="fa-solid fa-house"></i>&nbsp;HOME</a>
        
        
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
    $sql = "SELECT * FROM u_event WHERE e_id='$evid'";
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
                    <h2>Cancel Event</h2>
                    <form method="post" action="usercancelevent.php" enctype="multipart/form-data">
                    <div class="lables" >EVENT ID:</div><br>
                <input id="unique-id" name="evid"  type="text" readonly value="<?php echo isset($row['e_id']) ? $row['e_id'] : ''; ?>"></input>
            </label><br><br>
            <div class="lables" >EVENT NAME:</div><br>
                <input id="unique-id" name="evname"  type="text" readonly value="<?php echo isset($row['e_name']) ? $row['e_name'] : ''; ?>"></input>
            </label><br><br>

            <div class="lables" >EVENT TYPE:</div><br>
                <input id="unique-id" name="evtype"  type="text" readonly value="<?php echo isset($row['e_type']) ? $row['e_type'] : ''; ?>" ></input>
            </label><br><br>
            <div class="lables" >EVENT PRICE:</div><br>
                <input id="unique-id" name="evprice"  type="text"  readonly value="<?php echo isset($row['e_price']) ? $row['e_price'] : ''; ?>"></input>
            </label><br><br>

           

            <div class="lables" >EVENT LOCATION:</div><br>
                <input id="unique-id" name="evloc" readonly type="text" placeholder="Event Location" value="<?php echo isset($row['e_loc']) ? $row['e_loc'] : ''; ?>"></input>
            </label><br><br>

            <div class="lables" >Customer Name:</div><br>
                <input id="unique-id" name="costname" readonly type="text" placeholder="Applicant Name" value="<?php echo isset($row['c_name']) ? $row['c_name'] : ''; ?>"></input>
            </label><br><br>

            <div class="lables" >Customer Mobile.No:</div><br>
                <input id="unique-id" name="costmobileno" readonly type="text" placeholder=" mobile no" value="<?php echo isset($row['c_mono']) ? $row['c_mono'] : ''; ?>"></input>
            </label><br><br>

            <div class="lables" >Customer Address:</div><br>
                <input id="unique-id" name="costadd" readonly type="text" placeholder=" Address " value="<?php echo isset($row['c_add']) ? $row['c_add'] : ''; ?>" ></input>
            </label><br><br>

            <div class="lables" >EVENT DATE:</div><br>
                <input id="unique-id" name="evdate" readonly  type="text" placeholder="Event Date" value="<?php echo isset($row['c_date']) ? $row['c_date'] : ''; ?>"></input>
            </label><br><br>

            <div class="lables" >EVENT Description:</div><br>
                <input class="textarea" name="evdis" readonly     type="text" placeholder=" Event Description" value="<?php echo isset($row['c_dis']) ? $row['c_dis'] : ''; ?>"></input>
            </label><br><br>
                        
            <input  name="submit" value="Cancel event"  type="submit"  ></input>

                       
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







