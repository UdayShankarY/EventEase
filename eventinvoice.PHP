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
            height: 535px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            top: 150px;
            margin-bottom: 20px;
            opacity: 0.8    ;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 2); 
            width: 880px;
            left: 200px;
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
    </style>
</head>
<body>

<?php

// Get form data
$payment_type = $_POST["payment_type"];
$amount = $_POST["amount"];
    $e_id=$_POST['evid'];
	$e_name=$_POST['evname'];
	$e_type=$_POST['evtype'];
	$e_location=$_POST['evlocation'];
	$e_capacity=$_POST['evcapacity'];
    $e_stdate=$_POST['st-date'];
    $e_eddate=$_POST['en-date'];






// Validate data (you can add more validation as needed)
if (!is_numeric($amount) || $amount <= 0) {
    die("Invalid amount. Please enter a valid amount.");
}

// Process payment (mock implementation)
// Here you would typically integrate with a payment gateway API
// and handle the payment process based on the selected payment type

// Generate invoice
$invoice_date = date('Y-m-d H:i:s'); // Get current date and time

?>

<html>
<body>

<div class="heading">
        
        INVOICE
 
    </div>

    <nav>
    <a href="newevent.html"><i class="fa-light fa-backward"></i>BACK</a>

    <a href="event.html"><i class="fa-solid fa-house"></i>HOME</a>
        <a href="adminlogin.html"><i class="fa-solid fa-phone"></i> </i>CONTACT US</a>
        <a href="userlogin.html"> <i class="fa-solid fa-screwdriver"></i></i>SERVICES</a>
       
    </nav>

<div class="container">
        <div class="hero-image">
            <div class="hero-text">

            <h2>INVOICE</h2>
<br>
            
    <div class="lables"> Event Id / Invoice Id:</div>
    <input type="text" name="evid" readonly value="<?php echo $e_id; ?>">
    <br><br>
    <div class="lables"> Invoice Date:</div>
    <input type="text" name="evname" readonly value="<?php echo $invoice_date; ?>">
    <br><br>
    <div class="lables"> Payment Type:</div>
    <input type="text" name="evtype" readonly value="<?php echo $payment_type; ?>">
    <br><br>
    <div class="lables"> Amount Paid:</div>
    <input type="text" name="evlocation" readonly value="<?php echo $amount; ?>">
    <br>
    <h3><br> New Event Added Successfully....!</h3>
    <?php
    echo "<script>alert('Event Added Successfully from ID $e_id ');</script>";  
    ?>
</div>
</div>
</div>

</body>
</html>


<?php
$con=mysql_connect("localhost","root","");
	mysql_select_db("ems",$con);
	mysql_query("insert into event values('$e_id','$e_name','$e_type','$e_location','$e_capacity','$e_stdate','$e_eddate')");
  
    
	
   
?>  



</body>
</html>