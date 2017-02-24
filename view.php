<?php
$id = (int)$_GET['id'];
session_start();
include("session.php");
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
echo "<p id='id' class='hidden'>" . $id . "</p>";
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
    <script src="js/view-btns.js"></script>


    </head>

    <body>
        
        <div class="row header-row">
            <div class="col-sm-3 logo">
                <a href="index.php">
                <img src="./img/logo.png" width="100px"> </a>
            </div>

            <div class="col-sm-6 brand"><a href = "index.php">Movement Source</a> <span> Pilates Studio</span><span>1509 E.Passyunk Ave - Philadelphia - PA</span></div>
            <div class="col-sm-3 login">
                   <?php 
                        if(isset($_SESSION['login_user'])) {
                        echo "Welcome, " . $_SESSION['login_user']; 
                        echo "<br /><a href = 'logout.php'>Sign Out</a>";
                    }
                    else echo "<button class='contact-btn'>Contact Us</button>
            </div>"
                 ?>
            </div>
            <div class="col-sm-3 contact"> <button class="contact-btn">Contact Us</button>
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
                       
                        echo "<li><a href='welcome.php'>Appointments</a></li> " ;
                         echo "<li><a href='welcome.php'>Mail</a></li></ul>";
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
   <a href = 'welcome.php' class="btn" id="back-btn">Back to Appointments</a>
   <h2 class="text-center">Appointment Request</h2>
    <hr>

   <?php 
       $query = "SELECT * FROM apptrequests WHERE apptid=$id"; 
        $result = $conn->query($query); 
         $conn->close();
        while($row = $result->fetch_assoc()) {   //Creates a loop to loop through results

        echo "<ul class='col-sm-12 request text-center'><li><strong>Name:</strong> " . $row['name'] . "</li> <li><strong>Phone number: </strong>" . $row['phone']  . "</li> <li><strong>Email: </strong>" . $row['email'] . "</li><li><strong>Message: </strong>" . $row['message'] . "</li><li><strong>Date: </strong>" . $row['apptdate'] . "</li><li><strong>Time:</strong> " . $row['appttime'] . "</li><li><strong>Status: </strong><span id='statusAppt'></span></li> </ul>";
        echo "<p id='status' class='hidden'>" . $row['status'] . "</p>";
    }
    ?>
    
   
    <div class="col-sm-12">
        <button class="view-btns" id="confirm-btn">Confirm</button>
        <button class="view-btns" id="delete-btn">Delete</button>
        <button class="view-btns" id="contact-btn">Contact Client</button>
    </div>
    
    <div class="col-md-12">
    <div class="contact-customer">
       <form>
        <label for texarea>Message</label>
        <textarea></textarea>
        <input type="submit" name="submit" value="Send">
        </form>
    </div>
    </div>



</div>
</div>
</div>


<script type="text/javascript">
 // function that checks if this particulr record has been already confirmed by the site admin and display the button text approprietly
        function isConfirmed(){
          $status = $("#status").text();
          if($status == 1){
            $("#confirm-btn").addClass("confirmed");
            $("#confirm-btn").text("Unconfirm");
            $('#statusAppt').text('Confirmed');
          }
          else {
            $('#statusAppt').text('Unconfirmed');
          }
        };
        isConfirmed();
       //get the ID of this request from the previously generated by PHP field (that is hidden)
        $id = $("#id").text();

         // the "delete" button script - calls the deleteRecord function, passing it the ID of the record to be deleted (it is the record that is being displayed)
         $("#delete-btn").on( "click", function() {
              if (confirm("Are you sure you want to delete this appointment?")) {
                    deleteRecord($id);
                }
            });
        // this function uses ajax method to run delete-btn.php script to delete this record permanently. It then displays text "the record has been deleted" and hides the buttons
          function deleteRecord(id) {
                     var apptid = id;
                     var dataString = 'apptid=' + apptid;
                    $.ajax({
                    url: 'php/delete-btn.php',
                    type: 'POST',
                    data: dataString,
                    success: function() {
                       $(".request").text("This record has been deleted");
                       $(".view-btns").css("display", "none");
                     },
                    error: function(responseData){
                    
                      console.log('Ajax request not received!');
                    }
                  });
                }
         
         $("#confirm-btn").on("click", function(){
                    $(this).toggleClass("confirmed");

                    if($(this).hasClass("confirmed")){
                      confirmRecord($id, true); 
                    }
                    else {
                      confirmRecord($id, false); 
                    }

         })

                function confirmRecord(id, status) {
                     var apptid = id;
                     var status = status;
                     var dataString = 'apptid=' + apptid + '&status=' + status;
                    $.ajax({
                    url: 'php/confirm-btn.php',
                    type: 'POST',
                    data: dataString,
                    success: function() {

                      
                       if($("#confirm-btn").hasClass("confirmed")) {
                         $("#confirm-btn").text("unconfirm");
                         $('#statusAppt').text('Confirmed');
                       }
                       else {
                         $("#confirm-btn").text("confirm");
                         $('#statusAppt').text('Unconfirmed');
                      }
                     },
                    error: function(responseData){
                        
                      console.log('Ajax request not received!');
                    }
                  });
                }




     </script>   
</body>
<footer>
        <div class="container">
            <div class="row">
            <?php
             if(!isset($_SESSION['login_user'])) {
                        echo "<a href='welcome.php'>Admin Login</a>";
                    }
            ?>
            
                <div class="col-lg-12 text-center span-block">
                  <span><a href="index.php">Movement Source Pilates Studio</a></span>
                  <span>Sweat Fitness 2nd Fl - 1509 E. Passyunk Ave - Phila PA 19147</span>
                  <span>info@movementsource.com</span>
                  <span id="copy">&copy;2017 Movement Source </span>
                </div>

            </div>
        </div>
    </footer>


</html>