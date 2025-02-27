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
             background-image: url('bl.jpg');
             height: 400px;
             background-position: center;
             background-repeat: no-repeat;
             background-size: cover;
             position: relative;
             top: 200px;
             margin-bottom: 20px;
             opacity: 0.8;
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
    EVENT MANAGEMENT SYSTEM
</div>
<nav>
<a href="event.html"><i class="fa-solid fa-arrow-left"></i>BACK</a>
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
    $e_id = mysqli_real_escape_string($conn, $_POST['evid']);
    $e_name = mysqli_real_escape_string($conn, $_POST['evname']);
    $e_price = mysqli_real_escape_string($conn, $_POST['evprice']);
    
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
            $sql = "UPDATE availevents1 SET e_name='$e_name', e_price='$e_price', e_image='$target_file' WHERE e_id='$e_id'";
            if (mysqli_query($conn, $sql)) {
                echo "<div class='msg'>Event details updated successfully.</div>";
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