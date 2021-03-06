<?php
session_start();
include("session.php");
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Movement Source Pilates Studio Website">
    <meta name="author" content="Katya Gurina-Robinson">

    <title>Movement Source</title>
    <!--jQuesry Link-->
     <script src="js/jquery.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

        <!-- Sidebar CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

      <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

     <!--jQuery UI-->
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Book javascript link-->
    <script type = "text/javascript" src="js/book.js"></script>
<style>
/* 
Generic Styling, for Desktops/Laptops 
*/
table { 
  width: 100%; 
  border-collapse: collapse;
  min-height: 100vh; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}
/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

    /* Force table to not be like tables anymore */
    table, thead, tbody, th, td, tr { 
        display: block; 
    }
    
    /* Hide table headers (but not display: none;, for accessibility) */
    thead tr { 
        position: absolute;
        top: -9999px;
        left: -9999px;
    }
    
    tr { border: 1px solid #ccc; }
    
    td { 
        /* Behave  like a "row" */
        border: none;
        border-bottom: 1px solid #eee; 
        position: relative;
        padding-left: 50%; 
    }
    
    td:before { 
        /* Now like a table header */
        position: absolute;
        /* Top/left values mimic padding */
        top: 6px;
        left: 6px;
        width: 45%; 
        padding-right: 10px; 
        white-space: nowrap;
    }
    
}
</style>
        

<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script> 
<script>
$(document).ready(function() 
    { 
        $("#myTable").tablesorter({sortList: [[1,0], [1,0]]}); 
    } 
); 
</script>
    </head>

    <body>

         <div class="row header-row">
            <div class="col-sm-3 logo">
                <a href="index.php">
                <img src="./img/logo.png" width="100px"> </a>
            </div>

            <div class="col-sm-6 brand"><a href = "index.php">Movement Source</a> <span> Pilates Studio</span><span>1509 E.Passyunk Ave - Philadelphia - PA</span></div>
          
            <div class="col-sm-3"> 
                <div class="contact-icons">
                    <a class="social-icon" id="pen" href="contact.php#contact-form">Contact</a>
                    <a class="social-icon" id="address" href="contact.php#map">Visit</a>
                    <a class="social-icon" id="facebook" href="https://www.facebook.com/movementsource/">Facebook</a>
                    </div>
            </div>
             
        </div>
        
        <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Movement Source</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php 
                        if(isset($_SESSION['login_user'])) {
                       
                        echo "<ul class='admin-nav'>";
                    }
                 ?>
                <ul class="nav navbar-nav">
                

                    <span id="nav-logo">
                        <a href="index.php">
                        <img src="./img/logo.png"> </a>
                    </span>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <?php 
                        if(isset($_SESSION['login_user'])) {
                       
                        echo "<li class='active'><a href='welcome.php'>Appointments</a></li> " ;
                         echo "<li><a href='mail.php'>Mail</a></li></ul>";
                    }
                 ?>
                </ul>

                 
            </div>

            <!-- /.navbar-collapse -->
            </div> <!--end .container-->
    </nav>



	<div class="container">
	<div class="row">
   <div class="box">
      <h1 class="text-center">Appointment Requests</h1>
      
		<?php 
	/*		$sql = "SELECT apptid, name, phone, email, message, apptdate, appttime FROM apptrequests";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "ID: " . $row["apptid"]. " - Name: " . $row["name"]. " Phone " . $row["phone"]. " - Email: " . $row["email"]. " - Message: " . $row["message"]. " - Date: " . $row["apptdate"]. " - Time: " . $row["appttime"].  "<br>";
		    }
		} else {
		    echo "0 results";
		}*/

		$query = "SELECT * FROM apptrequests"; //You don't need a ; like you do in SQL
		$result = $conn->query($query);




        $conn->close();
       

        // start table
         echo "<table id='myTable' class='tablesorter'>
            <thead>
                <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                </tr>
            </thead>
            <tbody>";

		while($row = $result->fetch_assoc()) {   //Creates a loop to loop through results
            
         
         $id = $row['apptid'];
         $apptdate = $row['apptdate'];
         $name = $row['name'];
         $appttime = $row['appttime'];
         $today = date("Y-m-d");
         //check if appointment date is in the past and if so, fade it
         if ($apptdate < $today){
            $apptdate = "<span class='faded'>" . $apptdate . "</span>";
            $appttime = "<span class='faded'>" . $appttime . "</span>";
            $name = "<span class='faded'>" . $name . "</span>";
         }
         //compose a dynamic PHP link with the appointment record id 
         $link = 'view.php?id='.$id;
         // add a class to the status class according to the value (confirmed will be displayed in green and unconfirmed - in red)
         $status = "<span class='not-confirmed'>Not confirmed</span>";
         if ($row['status'] == 1) {
            $status = "<span class='confirmed'>Confirmed</span>";
         } 
        
            // display the rest of the columns of the table
             echo   "<tr><td><a href=$link>" . $name . "</a></td>
                <td>" . $apptdate . "</td>
                <td>" . $appttime . "</td><td>"
                 . $status . "</td>
                </tr>";
           

        }

        echo  "</tbody></table>";

		
		?>
</div>
</div>
</div>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 admin">
                    <?php
                     if(!isset($_SESSION['login_user'])) {
                                echo "<a href='welcome.php'>Admin Login</a>";
                            }
                            else {
                             echo "<span>Welcome, " . $_SESSION['login_user'] . "</span>"; 
                             echo "<br /><a href = 'logout.php'>Sign Out</a>";
                            }
                    ?>

                </div>
            
                <div class="col-lg-6 text-center span-block">
                  <span><a href="index.php">Movement Source Pilates Studio</a></span>
                  <span>Sweat Fitness 2nd Fl - 1509 E. Passyunk Ave - Phila PA 19147</span>
                  <span>info@movementsource.com</span>
                  <span id="copy">&copy;2017 Movement Source </span>
                </div>

                <div class="col-sm-3"> 
                <div class="contact-icons">
                    <a class="social-icon" id="pen" href="contact.php#contact-form">Contact</a>
                    <a class="social-icon" id="address" href="contact.php#map">Visit</a>
                    <a class="social-icon" id="facebook" href="https://www.facebook.com/movementsource/">Facebook</a>
                    </div>
            </div>

            </div>
        </div>
    </footer>


</html>