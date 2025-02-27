<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url(loginimg.jpg) center/cover fixed;
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
            font-family: Courier;
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
            left: 180px;
            top:1000px;
            width:70%;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background for content */
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Adding shadow for depth */
        }
        .section1 {
            position: absolute;
            left: 180px;
            top:1200px;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background for content */
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 10px;
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
            height: 520px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            top: 200px;
            width: 750px;
            left:260px;
            margin-bottom: 20px;
            opacity: 0.8;
            border-radius:15px;
        }
        .hero-image:hover {
           
            height: 540px;
            transition:0.8s;
           
            width: 770px;
          
            border-radius:20px;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 30px;
        }

        .hero-text h1 {
            font-size: 50px;
            margin: 0;
        }

        .hero-text p {
            font-size: 24px;
            margin: 10px 0 0;
        }

        

        .btn:hover {
            background-color: #040b0e;
        }
        .login-container {
            width: 600px;
            margin: auto;
            margin-top: 100px;
            padding: 20px;
            background-image:url("bl.jpg");
            opacity: 0.9;
            border-radius: 20px;
            height: 380px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .login-container h2 {
            text-align: center;
            color: white;   
            font-family:Arial, Helvetica, sans-serif;
        }

        .login-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            margin-top: 20px;
            border: 1px solid black(0.2, 5, 0.2, 0.1);
            border-radius: 10px;
            margin-left: -5px;
            height: 25px;
        }
        .login-form  {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            margin-top: 20px;
            border: 1px solid black(0.2, 5, 0.2, 0.1);
            border-radius: 10px;
            margin-left: -5px;
            height: 25px;
        }

         .button {
            width: 180px;
            height:40px;
            padding: 10px;
            background:blue ;
            border-radius: 10px;
            cursor: pointer;
            margin-left: 15px;
            margin-top: 30px;
            color:white;
            font-size:18spx;
        }
        .button:hover {
            width: 200px;
            height:50px;
            transition:0.8s;
            border-radius: 13px;
           background:red;
        }

        .login-form button:hover {
            
            background-color: #df1616;
        }
        .lables{
            text-align:left;
            color: #ffffff;
        }
        input{
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            margin-top: 20px;
            border: 1px solid black(0.2, 5, 0.2, 0.1);
            border-radius: 10px;
            margin-left: -5px;
            height: 25px;
        }
      
      
    </style>
</head>
<body>
    
    <div class="heading">
        EVENT MANAGEMENT SYSTEM
    </div>
    <nav>
    <a href="index.html"><i class="fa-solid fa-house"></i>HOME</a>
        <a href="#"><i class="fa-solid fa-user-tie"></i>ADMIN</a>
        <a href="#"><i class="fa-solid fa-question"></i>ABOUT</a>
        <a href="#"><i class="fa-solid fa-phone"></i>CONTACT US</a>
        
    </nav>
    
    <?php
// Check if username and password are submitted
if(isset($_POST['username']) && isset($_POST['password'])) {
    // Sanitize user input
    $u_name = htmlspecialchars($_POST['username']);
    $u_pass = htmlspecialchars($_POST['password']);

    // Validate credentials
    if ($u_name === "qwert" && $u_pass === "zxcv") {
        echo "<script>alert('Login successful');</script>";
        echo "<script>window.location.href='reigisterbefore.html';</script>";
        exit; // Make sure to exit after redirection
    } else {
        echo "<script>alert('Invalid username or password');</script>";
        echo "<script>window.location.href='adminlogin.html';</script>";
        exit; // Make sure to exit after redirection
    }
}
?>

     
</form>
</div>
    </div>
 
    

        <div class="section">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor ut nisi in luctus. Donec finibus consectetur justo, eu sodales tortor sodales vitae.</p>
        </div>

        <div class="section1">
            <h2>Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor ut nisi in luctus. Donec finibus consectetur justo, eu sodales tortor sodales vitae.</p>
        </div>
        
    </div>

</body>
</html>
