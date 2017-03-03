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
                    <li class="active">
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

        <!--Main content-->
     <div class="container">
     <div class="page-content-wrapper">
     <div id="wrapper">

     <!--  <div class="navbar-header">
                <button type="button" id = "service-menu-btn" class="navbar-toggle" data-toggle="collapse" data-target="#services-menu-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="nav-btn-name">Services</span>
                </button>
            </div> -->
        <!-- Sidebar -->

        <div id="sidebar-wrapper">
            
            <ul class="collapse navbar-collapse sidebar-nav" id="services-menu-collapse">
                 <h1 class="brand-name">Services</h1>
                 <hr>
                 <li>
                    <a href="#datepicker">Request Appointment</a>
                </li>

                <li>
                    <a href="#1">Pilates Circuit Group Class</a>
                </li>
                <li>
                    <a href="#2">Private and Semi-Private Classes</a>
                </li>
                <li>
                    <a href="#3">Pilates in the Workplace</a>
                </li>
                <li>
                    <a href="#4">Pilates for Seniors</a>
                </li>
                <li>
                    <a href="#5">Pilates for Athletes</a>
                </li>
                 <li>
                    <a href="#6">Pilates for Runners</a>
                </li>
            </ul>
            
        </div>
        <!-- /#sidebar-wrapper -->
            

            <div class="row">
                <div class="box">
                    <div class="col-lg-12"> 
                             <hr>
                        <h2 class="intro-text text-center">Join us
                        <strong>for one of our classes!</strong>
                         </h2>
                             <hr>
                    </div> <!--end .col-lg-12-->

                    <div class="promo col-lg-12"><a href="contact.php#contact-form">Contact Us </a> now for information about our FREE intro session. <br /> *Applies to new clients only
                    </div>

                    <!--Pilates Group Class-->

                    <div class="col-lg-12" id="1">
                         <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                         <h3>Pilates Circuit Group Class
                          <br>
                        <small>Available Mon, Tue, Wed</small>
                         </h3>
                    <p class="service-description">Blending classical Pilates principles with enhanced repetitions, this class is sure to be the most effective way to welcome Pilates into your routine!  The Pilates Circuit Class is open to a maximum of 4 people to ensure correct form and to provide individualized attention, making it suitable for all levels.  Class begins with a core warm-up to introduce you to Pilates concepts and prepare you for the full body circuit training using various Pilates equipment and small props.  Each class ends with a final stretch session to leave you feeling equally long and strong. </p>
                        <div class="class-times">
                             <li><strong>Monday</strong> 6:30pm</li>
                             <li><strong>Wednesday</strong> 7:30am</li>
                             <li><strong>Saturday</strong> 9:00am</li>
                         </div>
                         <p class="price">$15/session</p>
                         <p class ="class-duration">55 mins</p>
                         
                    <button class="btn readMore aptRequest" id="group-btn"> Secure My Spot</button>

                    <hr>


                 </div> <!--end pilte group class box-->


                 <!--Private and semi-private classes-->
                
                <div class="col-lg-12" id="2">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h3>Private and Semi-Private Lessons
                        <br>
                        <small></small>
                    </h3>
                    <p class="service-description">Description pending... Description pending... Description pending... Description pending... Description pending... Description pending... Description pending... Description pending... Description pending... </p>
                     <div class="class-times">
                             <li>Appointments only</li>
                             
                         </div>
                         <p class="price">Private lessons (One-on-One): $65 / session | $300 / 5 sessions | $550 / 10 sessions</p>

                         <p class="price">Semi-private lessons (Two people): $45 / session | $200 / 5 sessions | $350 / 10 sessions</p>

                         <p class ="class-duration">55 mins</p>
                     <button class="btn readMore aptRequest" id="private-btn">Make an appointment</button>

                    <hr>
                </div>

                <!--Pilates in the workplace-->               


                <div class="col-lg-12" id="3">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h3>Pilates in the Workplace
                        <br>
                        <small>Pilates in the Workplace</small>
                    </h3>
                    <p class="service-description">Offering Pilates Sessions around the work day (pre, mid, post) can help significantly boost overall work ethic in the community while assisting with posture and preventing injury.  Our two packages focus on the specific needs of your company and how to support your employees long term.  </p>

                    <p class = "service-description">
                    Wake-Up & Stretch Option- 30 minute Pilates-based class $5 per participant-

                    Whether your wake-up call is before work or if you need a mid day pick-me-up, this class focuses on stretching key parts of the body that tend to tighten up with overuse in the office place.  After class, employees are left feeling refreshed, loose and ready to be as productive as possible!
                    </p>
                     <div class="class-times">
                             <li>Appointment only</li>
                            
                         </div>
                         <p class="price">$5 / participant</p>
                         <p class ="class-duration">30 mins</p>
                     <hr>    
                     
                    <p class = "service-description">
                    Pilates Class Option - 50 minute Pilates-based class $10 per participant-

                    Applying aspects of the Wake-Up & Stretch Class, the Pilates Class also incorporates more traditional Pilates exercises to work the core muscles and provide a slightly more intense work out.
                    </p>
                    <div class="class-times">
                             <li>Appointmen only</li>
                         </div>
                         <p class="price">$10 / participant</p>
                         <p class ="class-duration">50 mins</p>
                    <button class="btn readMore aptRequest">Make Appointment</button>
                    <hr>
                </div>

                <!--Pilates for seniors-->

                
                <div class="col-lg-12" id="4">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h3>Pilates For Seniors
                        <br>
                        <small></small>
                    </h3>
                    <p class="service-description">Consider offering a group Pilates Class at your Communty or Retirement Center.  All that is needed are folding chairs for each participant and a certified Pilates Instructor!

                    Kelly Adorno will address the importance of body awareness in preventing falls and living pain free through everyday activities while addressing particular injuries, aches and pains of the individuals.  The focus of our class will be balance, posture, and strength.

                    </p>
                    <div class="class-times">
                             <li>Appointment Only</li>
                             
                         </div>
                         <p class="price">Pricing will vary depending on number of participants and location</p>
                         <p class ="class-duration"></p>
                     <button class="btn readMore aptRequest">Contact us for info</button>
                    <hr>
                </div>

                <!--Pilates for athletes-->

                <div class="col-lg-12" id="5">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h3>Pilates for Athletes
                        <br>
                        <small></small>
                    </h3>
                    <p class = "service-description">With Pilates training, athletes can enhance their performance in their sport while minimizing strain and injury.  The Pilates for Athletes program will focus on the muscle groups needed for each individual and also provide knowledge about safe stretching and functioning mechanics of the body.  Each session will be fifty minutes consisting of an introduction to Pilates, a workout, stretch session and an overview of additional exercises that can be performed at home or at the gym.

                    *Pricing will vary depending on number of participants and location* 

                    Contact Movement Source for additional information</p>
                     <div class="class-times">
                             <li>Appointment Only</li>
                             
                         </div>
                         <p class="price">Pricing will vary depending on number of participants and location</p>
                         <p class ="class-duration"></p>
                     <button class="btn readMore aptRequest">Contact us for info</button>
                    <hr>
                </div>

                 <!--Pilates for runners-->

                <div class="col-lg-12" id="6">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h3>Pilates for Runners
                        <br>
                        <small></small>
                    </h3>
                    <p class = "service-description">This specialized Pilates Circuit Class targets specific muscle groups catered to the runner’s needs.  Pilates helps strengthen the core, improves balance and stability to help minimize overuse, strain and injury during running making this class the ideal addition for both casual or competitive runners.  The Pilates For Runners Circuit Class is open to a maximum of 4 people to ensure correct form and to provide individualized attention. </p>
                     <div class="class-times">
                             <li>Saturdays 11:00AM</li>
                             
                         </div>
                         <p class="price">$15</p>
                         <p class ="class-duration">55 minutes</p>
                     <button class="btn readMore aptRequest">Pre-register for this class</button>
                    <hr>
                </div>
                    
                </div> <!--end .box-->
            </div> <!--end .row-->


            <div id="calendar">
                <div class="row">
                    <div class="box">
             <!--Book Appointment form-->
              <div class="form-horizontal">
               

                <!-- Form Name -->
                <legend>Request Appointment</legend>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="selectservice">Select Service</label>
                  <div class="col-md-6">
                    <select id="selectservice" name="selectservice" class="form-control">
                      <option value="1">See All Classes</option>
                      <option value="2">Group Classes</option>
                      <option value="3">Private and Semi-Private Classes</option>
                      <option value="4">Mat Class at Sweat Fitness</option>

                    </select>
                  </div>
                </div>
                    <div class="form-group">
                         <label class="col-md-3 control-label" for="selectdate">Select Date</label>
                         <div class="col-md-6">
                           
                                <div id="datepicker"></div>
                                <div id="chosenDate"></div>
                         </div>     
                       </div>  
                       <div class="form-group">
                        <label class="col-md-3 control-label" id = "timeLabel" for="selecttime"></label>

                        <div id="schedule" class="col-md-6"></div>
                  </div> 
                        <div id="selected-options" class="text-center"></div>





                       <div id="customer-info"> 
                            

                            <form role="form" id="cust-contact" method="POST">
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
                                <textarea class="form-control" rows="6" name="message" id="cust-message"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                
                                <button type="submit" id="request-appt" name="submit" class="btn readMore">Request Appointment</button>
                            </div>
                        </div>
                    </form>

                        
                  </div> 

                
         </div>
            </div> <!--end .box-->
                </div> <!--end .row-->
                    </div> <!--end #calendar-->

        </div> <!--end #wrapper-->
        </div>
        </div>

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























