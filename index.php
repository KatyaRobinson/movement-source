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
            <!-- <div class="col-sm-3 contact"> 

            <button class="contact-btn">Contact Us</button>
            </div> -->
             
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
                    <li class="active">
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

        <!-- top box with slideshow and intro text-->
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <span class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </span>
                        <span class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </span>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Movement Source</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>
                            <strong>Pilates Studio</strong>
                        </small>
                    </h2>
                </div>

                    <div class="row">
                        <div class = "col-md-3"></div>
                        <div class = "col-md-6 text-center">
                            <span class="main-text"> East Passyunk Square's newest addition
                            Tucked away on the 2nd floor of Sweat Fitness
                            Offering Pilates private & small group lessons
                            on Mat, Reformer, or Tower system </span>
                        </div> 
                        <div class = "col-md-3"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">                   
                         <a href="services.php#calendar"> <button class="btn apptBtn" value="Request Appointment">Request Appointment</button></a>
                       </div>
                    </div>

            </div> <!-- box end-->
        </div>

        <!-- Middle box - services bubbles-->
        <div class="row">
            <!-- Bubble One-->
            <div class="box">
                <div class="col-md-4 col-sm-12"> 
                    <div class="service-box">
                        
                    </div>
                    <div class="service-info text-center">
                        <span>Group Pilates Circuit Class</span>
                        Blending classical Pilates principles with enhanced repetitions, this class is sure to be the most effective way to welcome Pilates into your routine
                    </div>
                    <button class="btn readMore">Join Us!</button>
                </div> 
              <!-- Bubble Two-->
                <div class="col-md-4 col-sm-12"> 
                    <div class="service-box">
                    </div>
                    <div class="service-info text-center">
                        <span>Private and Semi-Private Classes</span>
                        More detailed description of the service or other page of the website
                    </div>
                    <button class="btn readMore">Learn More</button>
                </div>
                  <!-- Bubble Three-->
                <div class="col-md-4 col-sm-12"> 
                    <div class="service-box">
                    </div>
                    <div class="service-info text-center">
                        <span>We Bring Pilates To You!</span>
                       Offering Pilates Sessions around the work day (pre, mid, post) can help significantly boost overall work ethic in the community while assisting with posture and preventing injury
                    </div>
                    <button class="btn readMore">See Options</button>
                </div>
                 
                
            </div>
        </div>
        
        
        <!-- recent publication box -->
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"> Thank you for the shout out 
                        <strong>Philly Magazine and Be Well Philly</strong>
                    </h2>
                    <hr>
                </div>

                <a href="http://www.phillymag.com/be-well-philly/2016/11/15/fitness-openings-philadelphia-2/#FZ1U0fQukHJc3uF9.01" target="_blank">
                <div class="col-sm-3 col-xs-12" id="publication-img"></div> </a>
                <div class="col-sm-9 col-xs-12">
                     <blockquote><i>Hey, South Philly friends! In case you missed it, you just got a tiny new Pilates studio. Movement Source, helmed by Pilates instructor Kelly Adorno, is tucked away on the second floor of SWEAT Fitness, offering individual and small group Pilates classes, covering mat work, along with reformer and tower work.</i></blockquote>
                </div>
                    <a href="http://www.phillymag.com/be-well-philly/2016/11/15/fitness-openings-philadelphia-2/#FZ1U0fQukHJc3uF9.01" target="_blank">
                   <button class="btn readMore">Read Article</button></a>
                
            </div>
        </div>

        <div class="row">
            <div class="box">
                 <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"> What is
                        <strong>Pilates?</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img id="quote-img" src="img/pilatesQuote.jpg" alt="Joseph Pilates Quote" width="100%">
                </div>
                <div class="col-md-6">
                    <p>Pilates was developed by Joseph Pilates and brought to America in the late 1920’s and was originally called “Contrology.”  Traditional Pilates is a specific series of exercises performed on the Pilates Equipment and Pilates Mat to find equal amounts of stretch and strength in the body.  Exercises are executed in a precise form and alignment to uphold the ideas of control and efficiency.  The Pilates method focuses on mind - body balance that can be utilized during a Pilates session and throughout all aspects of life to enhance any activity.  Practiced regularly, Pilates can improve posture, strength, flexibility and stability.</p>
                </div>
                  <a href="http://www.pilates.com/BBAPP/V/pilates/index.php" target="_blanc"><button class="btn readMore">Read more on pilates.com</button></a>
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
