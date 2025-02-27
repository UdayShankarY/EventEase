<html>
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
            background-color: rgba(255, 255, 255, 0.2); /* Semi-transparent background on hover */
            border-radius: 5px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
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
            width:60%;
            height: 400px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            top: 200px;
            margin-bottom: 20px;
            opacity: 0.8;
            left:300px;
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
        }    </style>
</head>
<body>



<div class="heading">
CONVENTIONAL HALL MANAGEMENT SYSTEM
</div>
<nav>
<a href="conven.html"><i class="fa-solid fa-arrow-left"></i>&nbsp;Back</a>
<a href="index.html"><i class="fa-solid fa-house"></i>HOME</a>
</nav>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "ems");
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Get form data
    $c_id = mysqli_real_escape_string($conn, $_POST['cid']);
    $c_name = mysqli_real_escape_string($conn, $_POST['cname']);
    $c_type = mysqli_real_escape_string($conn, $_POST['ctype']);
    $c_price = mysqli_real_escape_string($conn, $_POST['cprice']);
    $c_location = mysqli_real_escape_string($conn, $_POST['clocation']);
    $c_capacity = mysqli_real_escape_string($conn, $_POST['ccapacity']);
    
    // File upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if $uploadOk is set to 0 by an error
?>
<div class="hero-image">
<div class="hero-text ">

<?php
    if ($uploadOk == 0) {
        echo "<div class='msg'>Sorry, your file was not uploaded.</div>";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // Insert event details into the database
            $sql = "UPDATE avail_conven SET c_name='$c_name',c_type='$c_type', c_price='$c_price',c_location='$c_location',c_capacity='$c_capacity', c_image='$target_file' WHERE c_id='$c_id'";
            if (mysqli_query($conn, $sql)) {
                echo "<div class='msg'>Hall details updated successfully.</div>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "<div class='msg'>Sorry, there was an error uploading your file.</div>";
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
</div>
</div>

   
</body>
</html>