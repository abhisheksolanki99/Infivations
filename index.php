<?php
include './assets/mail_send.php';
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_database = "infivations";
$connection = new mysqli($db_host, $db_user, $db_pass, $db_database) or die("Error in Connection of Database");

if ($_POST) {
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $email = $_POST["contact_email"];
    $subject = $_POST["contact_subject"];
    $message = $_POST["message"];
    $insert = "insert into inquiry (FirstName,LastName,Email,Subject,Message) values('{$firstname}','{$lastname}','{$email}','{$subject}','{$message}')";
    $query = mysqli_query($connection, $insert);
    if (!$query) {
        echo "Data Not Inserted";
    }
    mymailsend($firstname, $lastname, $email, $subject, $message);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include './assets/header_script.php'; ?>
    </head>
    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div id="loader">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="lading"></div>
            </div>
        </div><!-- /#preloader -->
        <!-- Preloader End-->
        <!-- Main Menu -->
        <div id="main-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <!-- responsive navigation -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button> <!-- /.navbar-toggle -->
            </div> <!-- /.navbar-header -->
            <nav class="collapse navbar-collapse">
                <!-- Main navigation -->
                <ul id="headernavigation" class="nav navbar-nav">
                    <li class="active"><a href="#page-top">Home</a></li>	
                    <li><a href="#about">Services</a></li>	
                    <!--<li><a href="#subscribe">Subscribe</a></li>-->	
                    <li><a href="#contact">Contact</a></li>		
                </ul> <!-- /.nav .navbar-nav -->
            </nav> <!-- /.navbar-collapse  -->
        </div><!-- /#main-menu -->
        <!-- Main Menu End -->
        <!-- Page Top Section -->
        <section id="page-top" class="section-style" data-background-image="images/background/page-top.jpg">
            <div class="pattern height-resize">
                <div class="container">
                    <h1 class="site-title">
                        Infivations
                    </h1><!-- /.site-title -->
                    <h3 class="section-name">
                        <span>
                            We Are
                        </span>
                    </h3><!-- /.section-name -->
                    <h2 class="section-title">
                        Coming Soon
                    </h2><!-- /.Section-title  -->
                    <div id="time_countdown" class="time-count-container">
                        <div class="col-sm-3">
                            <div class="time-box">
                                <div class="time-box-inner dash days_dash animated" data-animation="rollIn" data-animation-delay="300">
                                    <span class="time-number">
                                        <span class="digit">0</span>
                                        <span class="digit">0</span>
                                    </span>
                                    <span class="time-name">Days</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="time-box">
                                <div class="time-box-inner dash hours_dash animated" data-animation="rollIn" data-animation-delay="600">
                                    <span class="time-number">
                                        <span class="digit">0</span>
                                        <span class="digit">0</span>	
                                    </span>
                                    <span class="time-name">Hours</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="time-box">
                                <div class="time-box-inner dash minutes_dash animated" data-animation="rollIn" data-animation-delay="900">
                                    <span class="time-number">
                                        <span class="digit">0</span>
                                        <span class="digit">0</span>
                                        <span class="digit">0</span>
                                    </span>
                                    <span class="time-name">Minutes</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="time-box">
                                <div class="time-box-inner dash seconds_dash animated" data-animation="rollIn" data-animation-delay="1200">
                                    <span class="time-number">
                                        <span class="digit">0</span>
                                        <span class="digit">0</span>
                                    </span>
                                    <span class="time-name">Seconds</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.time-count-container -->
                    <p class="time-until">
                        <span>Time Until Launch</span>
                    </p><!-- /.time-until -->
                    <div class="next-section">
                        <a class="go-to-about"><span></span></a>
                    </div><!-- /.next-section -->
                </div><!-- /.container -->
            </div><!-- /.pattern -->		
        </section><!-- /#page-top -->
        <!-- Page Top Section  End -->
        <!-- About Us Section -->
        <section id="about" class="section-style" data-background-image="images/background/about-us.jpg">
            <div class="pattern height-resize"> 
                <div class="container">
                    <h3 class="section-name">
                        <span>
                            Services
                        </span>
                    </h3><!-- /.section-name -->
                    <h2 class="section-title">
                        We Are dedicated
                    </h2><!-- /.Section-title  -->
                    <div class="team-container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="team-member">
                                    <figure>
                                        <img width="100%" height="100%" src="images/services/cross-platform-development.png" alt="Team Member">
                                        <figcaption>
                                            <p class="member-name">Cross Platform<br/> Development</p>
                                        </figcaption>
                                    </figure>
                                </div><!-- /.team-member -->
                            </div><!-- /.col-sm-4 -->
                            <div class="col-sm-3">
                                <div class="team-member">
                                    <figure>
                                        <img width="100%" height="100%" src="images/services/cross-platform-development.png" alt="Team Member">
                                        <figcaption>
                                            <p class="member-name">
                                                Mobile App<br/>Development
                                            </p><!-- /.member-name -->
                                        </figcaption>
                                    </figure>
                                </div><!-- /.team-member -->
                            </div><!-- /.col-sm-4 -->
                            <div class="col-sm-3">
                                <div class="team-member">
                                    <figure>
                                        <img width="100%" height="100%" src="images/services/cross-platform-development.png" alt="Team Member">
                                        <figcaption>
                                            <p class="member-name">
                                                Desktop App<br/>Development
                                            </p><!-- /.member-name -->
                                        </figcaption>
                                    </figure>
                                </div><!-- /.team-member -->
                            </div><!-- /.col-sm-4 -->
                            <div class="col-sm-3">
                                <div class="team-member">
                                    <figure>
                                        <img width="100%" height="100%" src="images/services/cross-platform-development.png" alt="Team Member">
                                        <figcaption>
                                            <p class="member-name">
                                                Website Development
                                            </p><!-- /.member-name -->
                                        </figcaption>
                                    </figure>                       
                                </div><!-- /.team-member -->
                            </div><!-- /.col-sm-4 -->
                        </div><!-- /.row -->
                    </div><!-- /.team-container -->
                    <div class="next-section">
                        <a class="go-to-subscribe"><span></span></a>
                    </div><!-- /.next-section -->
                </div><!-- /.container -->
            </div><!-- /.pattern -->
        </section><!-- /#about -->
        <!-- About Us Section End -->
        <!-- Contact Section -->
        <section id="contact" class="section-style" data-background-image="images/background/contact.jpg">
            <div class="pattern height-resize">
                <div class="container">
                    <h3 class="section-name">
                        <span>
                            Contact
                        </span>
                    </h3><!-- /.section-name -->
                    <h2 class="section-title">
                        Get in Touch 
                    </h2><!-- /.Section-title  -->
                    <form id="contact-form" method="post" role="form" class="clearfix">
                        <div class="contact-box-hide">
                            <div class="col-sm-6">
                                <input type="text"  class="form-control" id="first_name" name="first_name" required placeholder="First Name">
                                <span class="first-name-error"></span>
                            </div>
                            <div class="col-sm-6">
                                <input type="text"  class="form-control" id="last_name" name="last_name" required placeholder="Last Name">
                                <span class="last-name-error"></span>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control"  id="contact_email" name="contact_email" required placeholder="Email Address">
                                <span class="contact-email-error"></span>
                            </div>
                            <div class="col-sm-6">
                                <input type="text"  class="form-control" id="subject" name="contact_subject" required placeholder="Subject">
                                <span class="contact-subject-error"></span>
                            </div>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="message" name="message" required placeholder="Message"></textarea>
                                <span class="contact-message-error"></span>
                            </div>
                            <div class="col-sm-2">
                                <button id="contact-submit" class="btn custom-btn col-xs-12" type="submit" name="submit"><i class="fa fa-rocket"></i></button>
                                <span id="contact-loading" class="btn custom-btn col-xs-12"> <i class="fa fa-refresh fa-spin"></i> </span>
                            </div>
                        </div><!-- /.contact-box-hide -->
                        <div class="contact-message"></div>
                    </form><!-- /#contact-form -->
                    <div class="next-section">
                        <a class="go-to-page-top"><span></span></a>
                    </div><!-- /.next-section -->
                </div><!-- /.container -->
            </div><!-- /.pattern -->
        </section><!-- /#contact -->
        <!-- Contact Section End -->
        <!-- Footer Section -->
        <footer id="footer-section">
            <p class="copyright">
                &copy; Infivations 2017-2018, All Rights Reserved. Designed by & Developed by Infivations
            </p>
        </footer>
        <!-- Footer Section End -->
        <?php
        include './assets/color_palette.php';
        include './assets/footer_script.php';
        ?>
    </body>
</html>
