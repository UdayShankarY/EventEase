<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "ems");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if file was uploaded without errors
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); // Get the image data
        $sql = "INSERT INTO availevents1 (e_image) VALUES ('$image')"; // Insert image data into the database
        if ($conn->query($sql) === TRUE) {
            echo "Image uploaded successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading image.";
    }

    $conn->close();
}
?>
