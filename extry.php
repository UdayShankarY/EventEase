
<html>
<body><?php
// Check if cdatetime is set and not empty
if (isset($_POST['cdatetime']) && !empty($_POST['cdatetime'])) {
    // Date of birth
    $dob = $e_date;

    // Current date
    $currentDateTime = $_POST['cdatetime'];

    // Calculate age difference in days
    $today = new DateTime($currentDateTime);
    $birthdate = new DateTime($dob);
    $diff = $birthdate->diff($today)->days; // Use the 'days' property instead of 'y' for difference in days

    // Output age difference in days
    echo "Age: $diff days";
} else {
    echo "Date of birth not provided.";
}
?>

</body>
</html>