<!DOCTYPE html>
<html lang="en">
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
            height: 1160px;
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
        .submit{
            background:blue;
            color: white;
            width: 135px;
            height: 40px;
            border-radius:10px;

        }
        .submit:hover{
            background:red;
            border-radius:15px;

            width:80px;
            width: 140px;
            height: 45px;
            transition:0.7s;
            color:white;
        }
    </style>
</head>
<body>
<div class="heading">
        
        PAYMENT GATEWAY
 
    </div>
    <nav>
        <a href="newevent.html"><i class="fa-light fa-backward"></i>BACK</a>
        <a href="adminlogin.html"><i class="fa-solid fa-phone"></i> </i>CONTACT US</a>
        <a href="userlogin.html"> <i class="fa-solid fa-screwdriver"></i></i>SERVICES</a>
       
    </nav>
    
    
               
          
<?php
    $e_id=$_POST['evid'];
	$e_name=$_POST['evname'];
	$e_type=$_POST['evtype'];
	$e_location=$_POST['evlocation'];
	$e_capacity=$_POST['evcapacity'];
    $e_stdate=$_POST['st-date'];
    $e_eddate=$_POST['en-date'];




?>
    
    
    <?php
    


    ?>
   
    <form action="eventinvoice.PHP" method="post">


    <div class="container">
        <div class="hero-image">
            <div class="hero-text">

            <h2>Payment Gateway</h2>

            <h3 class="preview">PREVIEW :</h3>
    <div class="lables"> event Id:</div>
    <input type="text" name="evid" readonly value="<?php echo $e_id; ?>">
    <br><br>
    <div class="lables"> event Name:</div>
    <input type="text" name="evname" readonly value="<?php echo $e_name; ?>">
    <br><br>
    <div class="lables"> event Type:</div>
    <input type="text" name="evtype" readonly value="<?php echo $e_type; ?>">
    <br><br>
    <div class="lables"> event Location:</div>
    <input type="text" name="evlocation" readonly value="<?php echo $e_location; ?>">
    <br><br>
    <div class="lables"> event Capacity:</div>
    <input type="text" name="evcapacity" readonly value="<?php echo $e_capacity; ?>">
    <br><br>
    <div class="lables"> event Start-date:</div>    
    <input type="text" name="st-date" readonly value="<?php echo $e_stdate; ?>">
    <br><br>
    <div class="lables"> event end-date:</div>    
    <input type="text" name="en-date" readonly value="<?php echo $e_eddate; ?>">
    <br><br>

        
        
        <div class="lables"> advance amount:</div>    
        <input type="text" name="amount" value="15000" readonly id="amount" required>
        <h3 class="preview">SELECT PAYMENT  :</h3>
        <br>
        <div class="lables">Payment Type:</div>
        <select name="payment_type" id="payment_type" required>
        <option value="payment_type">Payment Type</option>
            <option value="credit_card">Credit Card</option>
            <option value="debit_card">Debit Card</option>
            <option value="upi">UPI</option>
            <option value="net-banking">Net-Banking</option>
            

            <!-- Add more payment options as needed -->
        </select>

        <br><br>
        <button type="submit" name="submit" class="submit">PAY / PROCEED</button>
        
    </form>
    </div>
        </div>
    
</body>
</html>