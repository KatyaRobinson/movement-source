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
                    <li class="active">
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
                       
                        echo "<li><a href='appointments.php'>Appointments</a></li> " ;
                         echo "<li><a href='appointments.php'>Mail</a></li></ul>";
                    }
                 ?>
                </ul>

                 
            </div>

            <!-- /.navbar-collapse -->
            </div> <!--end .container-->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box box-sepia">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Kelly Adorno: 
                        <strong>Owner, Pilates Instructor, Optimist</strong>
                    </h2>
                    <hr>
                </div>
                    <div class="col-sm-8">
                        <p>Kelly Adorno is from the Delaware County area and received her Bachelor of Fine Arts degree in Dance from Temple University with a minor in Business Management.  Since completing Body Precision Inc.’s comprehensive Teacher Program, Ms. Adorno has been continuing her education through workshops, reading professional articles and
                        online seminars.</p>
                        
                        <p>Growing up as a dancer, Pilates has complimented Kelly's training in a way that no other movement form could.  In between teaching her clients, Kelly can be found at the local coffee shop, shopping for fitness clothes, or attending a Pilates workshop.  Constant curiosity keeps her striving for new approaches to traditional exercises in order to mold each session for the individual.   Kelly's teaching technique combines moving, learning, sweating, and laughing. She is fascinated with the amount of healing the Pilates system can provide and loves sharing her experiences and making new discoveries with her clients.</p>

                    </div>
                     <div class="col-sm-4 kelly-img">
                        <img class="img-responsive img-border-left" src="img/kelly.jpg" alt="Kelly Adorno picture">
                    </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- client testimony-->
        <div class="row">
            <div class="box rounded-box">
                <blockquote>
                     "I am awe-inspired by Kelly's motivation to push me, challenge me, and to motivate me more than any one person in my life.  She is passionate about her profession and it shows in her desire to learn more about her clients, her profession and me personally.  She asks me how I feel, how I'm doing since our last session,  how was my weekend and what do I want to work on today.  Kelly is a true gift in my life."
                </blockquote>
                
                    <span>Jacqyln Diamond</span>
                    <span>Client from 2013-present</span>
                
            </div>
        </div>
        <!-- Kelly's experience and credentials-->
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">kelly knows 
                        <strong>her stuff</strong>
                    </h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img-responsive" src="img/kelly-jump.jpg" alt="Kelly Jumping in the air" width="100%">
                    </div>
                    <div class="col-sm-8 text-main">
                        <ul>
                            <li>Pilates Comprehensive Training: <span>Body Precision, 2012</span></li>
                            <li>Continuing Education Training with: 
<span>Irene Dowd, Cara Reeser, Jeremy Laverdure and Ellie Herman</span></li>
                            <li>Over seven years of teaching Pilates</li>
                            <li>Over ten years of teaching dance</li>
                            <li class="list">Clientele consists of:
                                    <span>Individuals with injuries (with Physician approval)</span>
                                    <span>Individuals without injuries</span>
                                    <span>Seniors</span>
                                    <span>Pre/Post Natal</span>
                                    <span>Athletes</span>
                                    <span>Dancers</span>
                            </li>
                        </ul>
                    </div>
                     <div class="col-sm-12">                   
                         <a href="services.php#calendar"> <button class="btn apptBtn" value="Request Appointment">Request Appointment</button></a>
                       </div>
                </div>  
                
            </div>

        </div>  

    </div>

    

    </div>
    <!-- /.container -->
 <div id="arrow"> &uarr;</div>
        </div> <!-- /.container -->
    </div> <!--end .container-->
    <div class="arrow">&uarr;</div>
</body>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 admin">
                    <?php
                     if(!isset($_SESSION['login_user'])) {
                                echo "<a href='appointments.php'>Admin Login</a>";
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