<?php
   include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Movement Source Pilates Studio Website">
    <meta name="author" content="Katya Gurina-Robinson">

    <title>Movement Source Admin Page</title>
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

        

    </head>
   
   <body>

        <div class="row header-row">
            <div class="col-sm-3 logo">
                <a href="index.html">
                <img src="./img/logo.png" width="100px"> </a>
            </div>

            <div class="col-sm-6 brand"><a href = "index.html">Movement Source</a> <span> Pilates Studio</span><span>1509 E.Passyunk Ave - Philadelphia - PA</span></div>
            <div class="col-sm-3 login">
            <?php echo "Welcome, " . $login_session;  ?>
            <br /> <a href = "logout.php">Sign Out</a>
            
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
                <a class="navbar-brand" href="index.html">Movement Source</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <span id="nav-logo">
                        <a href="index.html">
                        <img src="./img/logo.png"> </a>
                    </span>
                    <li>
                        <a href="index.html">Website</a>
                    </li>
                    <li class="active">
                        <a href="welcome.php">Appointments</a>
                    </li>
                    <li>
                        <a href="#">Schedule</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            </div> <!--end .container-->
    </nav>
	<div class="container">
	<div class="row">
   <div class="box">
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
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

		echo "<table class='appts-table'>"; // start a table tag in the HTML

		while($row = $result->fetch_assoc()) {   //Creates a loop to loop through results
		echo "<tr><td>" . $row['name'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['email'] . "</td><td>" . $row['message'] . "</td><td>" . $row['apptdate'] . "</td><td>" . $row['appttime'] . "</td></tr>";  //$row['index'] the index here is a field name
		}

		echo "</table>"; //Close the table in HTML



		$conn->close();
		
		?>
</div>
</div>
</div>
   </body>
   
</html>