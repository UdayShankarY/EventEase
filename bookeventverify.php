<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url(ev3.jpg) center/cover fixed;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        nav {
            background-color: rgba(0, 0, 0, 0.8);
            overflow: hidden;
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
            border-radius: 0 0 10px 10px;
            opacity: 1;
        }

        .heading {
            padding: 20px 0;
            background: #072947;
            color: #ffffff;
            font-size: 30px;
            text-align: center;
            margin: 0;
            font-family: 'times new roman';
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
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .invoice {
            border: 1px solid #ccc;
            padding: 20px;
            width: 100%;
            margin: auto;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .invoice h3 {
            color: #4CAF50;
            text-align: center;
            margin-bottom: 20px;
        }

        .details table {
            width: 100%;
            border-collapse: collapse;
        }

        .details td,
        .details th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .details tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .details tr:hover {
            background-color: #ddd;
        }

        .btn-print {
            text-align: center;
            margin-top: 20px;
        }

        .btn-print button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-print button:hover {
            background-color: red;
        }

        .hero-image {
            position: relative;
            top: 50px;
            padding: 20px;
            border: 1px solid #ccc;
            padding: 20px;
            width: 60%;
        }

        .hero-text {
            top: 40%;
            background:white;
            height:120px;
        }
    </style>
</head>
<body>
<div class="heading">
    EVENT MANAGEMENT SYSTEM
</div>
<nav>
    <a href="user.html"><i class="fa-solid fa-house"> </i>HOME</a>
</nav>

<center>
    <div class="hero-image">
        <div class="hero-text">
            <?php
       $e_id = $_POST['evid'];
       $e_name = $_POST['evname'];
       $e_type = $_POST['evtype'];
       $e_price = $_POST['evprice'];
       $e_loc = $_POST['evloc'];
       $c_name = $_POST['costname'];
       $c_mono = $_POST['costmobileno'];
       $c_add = $_POST['costadd'];
       $e_date = $_POST['evdate'];
       $c_dis = $_POST['evdis'];
       $booked_date_time = $_POST['bookeddatetime'];
      
      // Establish database connection
      $con = mysqli_connect("localhost", "root", "", "ems");
      
      // Check if connection was successful
      if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
      }
      
      // Perform SQL query
      $query = "SELECT * FROM regi_conven WHERE e_date = '$e_date'";
      $result = mysqli_query($con, $query);
      
      // Check if query was executed successfully
      if (!$result) {
          echo "Error executing query: " . mysqli_error($con);
      } else {
          // Check if there are any rows returned
          if (mysqli_num_rows($result) > 0) {
              // Handle case where there are existing events on the selected date
              echo "<br><br><br><div class='msg'>Sorry....!, this hall is already booked on the selected date.</div>";
          } else {
              // Proceed with inserting the new event
              mysqli_query($con, "INSERT INTO u_event VALUES ('$e_id','$e_name','$e_type','$e_price','$e_loc','$c_name','$c_mono','$c_add','$e_date','$c_dis','$booked_date_time')");
              echo "<center><div class='invoice'>
              <h3>New Event Booked Successfully......!</h3><br><br>
              <h2>INVOICE</h2>
              <div class='details'>
                  <table border=1>
                      <tr>
                          <td><strong>Event ID</strong></td>
                          <td>$e_id</td>
                      </tr>
                      <tr>
                          <td><strong>Event Name</strong></td>
                          <td>$e_name</td>
                      </tr>
                      <tr>
                          <td><strong>Event Type</strong></td>
                          <td>$e_type</td>
                      </tr>
                      <tr>
                          <td><strong>Event Price</strong></td>
                          <td>$e_price</td>
                      </tr>
                      <tr>
                          <td><strong>Event Location</strong></td>
                          <td>$e_loc</td>
                      </tr>
                      <tr>
                          <td><strong>Customer name</strong></td>
                          <td>$c_name</td>
                      </tr>
                      <tr>
                          <td><strong>Customer Mobile No</strong></td>
                          <td>$c_mono</td>
                      </tr>
                      <tr>
                          <td><strong>Customer Address</strong></td>
                          <td>$c_add</td>
                      </tr>
                    
                      <tr>
                          <td><strong>Event Date</strong></td>
                          <td>$e_date</td>
                      </tr>
                      <tr>
                          <td><strong>Customer Description</strong></td>
                          <td>$c_dis</td>
                      </tr>
                      <tr>
                          <td><strong>Event Booked on</strong></td>
                          <td>$booked_date_time</td>
                      </tr>
                  </table>
              </div>
              <div class='btn-print'>
             <center> <button onclick='window.print()'>Print</button></center>
          </center>
             </div>
          </div>
          ";
      
      
          }
      }
      
      // Close database connection
      mysqli_close($con);
      ?>            
        </div>
    </div>
</center>
</body>
</html>
