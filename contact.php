<?php
session_start();
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

<!--Google Maps API key issued on 02/20/2017: AIzaSyDtBQU-u-YJVSyve5-iEWbAjNBjDPsakzk -->
        <!-- form validator script-->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
     <script type = "text/javascript" src="js/form-validator.js"></script>
     <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>


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
                    <li class="active">
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
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Stop by for a 
                        <strong>visit</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                        <div id="map"></div>

                        <script>
                                function initMap() {
                                  var uluru = {lat: 39.930596, lng: -75.162175};
                                  var map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 19,
                                    center: uluru
                                  });
                                  var marker = new google.maps.Marker({
                                    position: uluru,
                                    map: map
                                  });
                                }  
                         </script>
                        
                        <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtBQU-u-YJVSyve5-iEWbAjNBjDPsakzk&callback=initMap">
                        </script>
                </div>
                
                <div class="col-md-4">
                    <p>Email:
                        <strong><a href="mailto:name@example.com">info@movementsource.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>1509 E. Passyunk Ave
                            <br>Philadelphia, PA</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    
                    <form role="form" id="contact-form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" name="phone" id="phone">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6" name="message" id="message"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" name="submit" class="btn readMore">Submit</button>
                            </div>
                        </div>
                    </form>
                    <p class = "message-sent"> </p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

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
