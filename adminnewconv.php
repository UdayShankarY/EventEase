<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        window.onload = function() {
            // Generate a unique ID
            var uniqueId = generateUniqueId();
            
            // Set the generated unique ID to the "unique-id" input field
            document.getElementById('unique-id').value = uniqueId;
        };
    
        // Function to generate a unique ID containing only numbers
        function generateUniqueId() {
            return Math.floor(Math.random() * 10000); // Generates a random number between 0 and 999999999
        }
    </script>
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
            background:#040b0e;
            height: 1000px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            top: 150px;
            margin-bottom: 20px;
            opacity: 0.8;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 2); 
            width: 880px;
            left: 150px;
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
        }
        input,select{
            height:40px;
            width: 800px;
            margin-bottom: 20px;
            border-radius: 10px;
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
<body>
<div class="heading">CONVENTIONAL HALL MANAGEMENT SYSTEM</div>
<nav>
<a href="conven.html"><i class="fa-solid fa-arrow-left"></i>&nbsp;Back</a>
    <a href="index.html"><i class="fa-solid fa-house"></i>HOME</a>
</nav>

<div class="container">
    <div class="hero-image">
        <div class="hero-text">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <div class="newevent">
                    <h2><i class="fa-solid fa-plus"></i> COVENTIONAL HALL</h2>
                    <br>
                    <label>
                <div class="lables" >COVENTIONAL_HALL ID:</div><br>
                    <input id="unique-id" name="cid"  type="text"  placeholder="conventional_hall ID" ></input>
            </label><br><br>
            <label>
                <div class="lables" >CONVENTIONAL HALL NAME:</div><br>
                <input type="text" name="cname" required placeholder="conventional_hall NAME" ></input>
            </label><br><br>
            <label>
                <div class="lables" >CONVENTIONAL HALL TYPE:</div><br>
                <select name="ctype" required>
                    <option>Event Type</option>
                    <option>Marraige</option>
                    <option>Enggagement</option>
                    <option>Birthday Celebrations</option>
                    <option>Competations</option>
                    <option>TownHall</option>
                    <option>Receptions</option>
                    <option>Conference</option>
                    <option>Trade Show </option>
                    <option>Job </option>
                    <option>Charity</option>
                    <option>Product Launch</option>
                    <option>Press Meet </option>
                    <option>Summit</option>
                    <option>Exibition</option>
                    <option> Career Fair</option>
                    <option> Fund Raise</option>
                    <option>  Gala </option>
                    <option> Patners Meet</option>
                    <option>Training</option>
                    <option>WorkShop</option>
                    <option>Pressmeet Rewards</option>
                    <option>Recognizations</option>
                    <option>Company celebrations</option>
                    <option>Alumni Meet</option>
                    <option>Community Networking Event</option>
                </select>
            </label><br><br>
          
           
          
            <label>
                <div class="lables" >HALL PRICE:</div><br>
                <input type="text" name="cprice" placeholder="conventional_hall Price" ></input>
            </label><br><br>
 
            <label>
                <div class="lables" >HALL LOCATION:</div><br>
                <input type="text" name="cloc" placeholder="conventional_hall Location" ></input>
            </label><br><br>

            <label>
                <div class="lables" >HALL CAPACITY:</div><br>
                <input type="text" name="ccapacity" placeholder="conventional_hall capacity" ></input>
            </label><br><br>

                    <label class="lables">UPLOAD IMAGE:</label><br>
                    <input type="file" name="fileToUpload" id="fileToUpload" required><br><br>
                    <input class="submit" type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
// Check if the form was submitted
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
    $c_location = mysqli_real_escape_string($conn, $_POST['cloc']);
    $c_capacity = mysqli_real_escape_string($conn, $_POST['ccapacity']);

    // File upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "<div class='msg'>File is an image - " . $check["mime"] . ".</div>";
            $uploadOk = 1;
        } else {
            echo "<div class='msg'>File is not an image.</div>";
            $uploadOk = 0;
        }
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 9000000) {
        echo "<div class='msg'>Sorry, your file is too large.</div>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "avif"
    ) {
        echo "<div class='msg'>Sorry, only JPG, JPEG, AVIF , PNG & GIF files are allowed.</div>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<div class='msg'>Sorry, your file was not uploaded.</div>";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<div class='msg'>The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.</div>";

            // Insert event details into the database
            $sql = "INSERT INTO avail_conven (c_id, c_name, c_type, c_price, c_location, c_capacity, c_image) 
                    VALUES ('$c_id', '$c_name', '$c_type', '$c_price', '$c_location', '$c_capacity', '$target_file')";

            if (mysqli_query($conn, $sql)) {
                echo "<div class='msg'>Event details inserted successfully.</div>";
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

</body>
</html>
