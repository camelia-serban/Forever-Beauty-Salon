<?php
session_start();
 
include "access.php";
include "dbconnection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="contact_style.css" type="text/css">
    <script src="https://kit.fontawesome.com/5b7ad2b792.js" crossorigin="anonymous"></script>


    <title>Forever Beauty Salon</title>
    
</head>

<body>
    <nav> 
        <div class="max-width">      
        <span><a href="home.php" class="fas fa-spa">Forever Beauty Salon</a></span>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
         <input type="checkbox" id="btn"/>
        
        
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Services</a>
                <ul>
                    <li><a href="hair.php">Hair</a></li>
                    <li><a href="makeup.php">Makeup</a></li>
                    <li><a href="nails.php">Nails</a></li>
                    <li><a href="facialTreatments.php">Facial Treatments</a></li>
                    <li><a href="bodyTreatments.php">Body Treatments</a></li>
                 </ul>
            </li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="prices.php">Prices</a></li>
            <li><a href="testimonials.php">Testimonials</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#">My Account</a>
                    <ul>
                        
                        <?php
                            if(isset($_SESSION["myid"]))
                            {
                                if(isset($_SESSION['mytype']) && $_SESSION['mytype'] == "admin")
                                {
                                    echo "<li><a href='adminDashboard.php'>Admin Panel</a></li>";
                                }
                                if(isset($_SESSION['mytype']) && $_SESSION['mytype'] == "client")
                                {
                                    echo "<li><a href='clientDashboard.php'>My profile</a></li>";
                                    echo "<li><a href='makeAppointmentForm.php'>Make Appointment</a></li>";
                                }
                                if(isset($_SESSION['mytype']) && $_SESSION['mytype'] == "receptionist")
                                {
                                    echo "<li><a href='receptionistDashboard.php'>Receptionist Panel</a></li>";
                                }
                                if(isset($_SESSION['mytype']) && $_SESSION['mytype'] == "employee_facial_treatment")
                                {
                                    echo "<li><a href='facialTreatmentDashboard.php'>My Panel</a></li>";
                                }
                                if(isset($_SESSION['mytype']) && $_SESSION['mytype'] == "employee_body_treatment")
                                {
                                    echo "<li><a href='bodyTreatmentDashboard.php'>My Panel</a></li>";
                                }
                                if(isset($_SESSION['mytype']) && $_SESSION['mytype'] == "employee_nails")
                                {
                                    echo "<li><a href='nailsDashboard.php'>My Panel</a></li>";
                                }
                                if(isset($_SESSION['mytype']) && $_SESSION['mytype'] == "employee_hair")
                                {
                                    echo "<li><a href='hairDashboard.php'>My Panel</a></li>";
                                }
                                if(isset($_SESSION['mytype']) && $_SESSION['mytype'] == "employee_makeup")
                                {
                                    echo "<li><a href='makeupDashboard.php'>My Panel</a></li>";
                                }
                                echo "<li><a href='logout.php'>Logout</a></li>";
                            }
                            else{
                                echo "<li><a href='makeAppointment.php'>Make Appointment</a></li>";
                                echo "<li><a href='login.php'>Login</a></li>";
                                echo "<li><a href='signup.php'>Sign Up</a></li>";
                            }
                        ?>            
                     
                    </ul>
                </li>
        </ul>
    </div>
    </nav>


    <section class="contact-wrap" id="contact">
        <div class="max-width">
            <div class="contact-in">
                <h1>Contact Info</h1>
                <h2><i class="fa fa-phone-alt" aria-hidden="true"></i>Phone</h2>
                <p>+40-760576071</p>
                <h2><i class="fa fa-envelope" aria-hidden="true"></i>Email</h2>
                <p>chloe.thompson@gmail.com</p>
                <h2><i class="fa fa-map-marker-alt" aria-hidden="true"></i>Address</h2>
                <p>Bucharest, Romania</p>
                <ul>
                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div class="contact-in" >
               <h1>Programme</h1>
               <h2><i class="far fa-calendar-alt" aria-hidden="true"></i>Monday-Friday</h2>
               <p class="far fa-clock"> 09AM to 08PM</p>>
               <h2><i class="far fa-calendar-alt" aria-hidden="true"></i>Saturday</h2>
               <p><i class="far fa-clock"> 09AM to 03PM</i></p>
               <h2><i class="far fa-calendar-alt" aria-hidden="true"></i>Sunday</h2>
               <p><i class="fas fa-clock"> Closed</i></p>
            </div>

            <div class="contact-in" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d364645.02496430546!2d25.8151416694235!3d44.437484960468794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f93abf3cad4f%3A0xac0632e37c9ca628!2sBucharest!5e0!3m2!1sen!2sro!4v1623678684027!5m2!1sen!2sro"
                 width="100%" height="auto" style="border:0;" allowfullscreen="" ></iframe>
            </div>
            
        </div>
    </section>

   
    <footer>
        <div class="footer_container">
            <div class="section about_us">
                <h2>Forever Beauty Salon</h2>
                <div class="content">
                    <p>You can find us here</p>
                    <div class="social">
                        <a href="https://www.facebook.com/"><span class="fab fa-facebook-f"></span></a>
                        <a href="https://www.instagram.com/"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>   
            
            <div class="section address">
                <h2>Contact Us</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">Bucharest, Romania</span>
                    </div>
                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">+40-760576071</span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">chloe.thompson@gmail.com</span>
                    </div>
                </div>
            </div>

            <div class="section programme">
                <h2>Programme</h2>
                <div class="content">
                    <div class="week">
                        <span class="far fa-calendar-alt"></span>
                        <span class="text">Monday-Friday</span>
                        <span class="far fa-clock"></span>
                        <span class="text">09AM to 08PM</span>
                    </div>
                    <div class="week-end1">
                        <span class="far fa-calendar-alt"></span>
                        <span class="text">Saturday</span>
                        <span class="far fa-clock"></span>
                        <span class="text">09AM to 3PM</span>
                    </div>
                    <div class="week-end2">
                        <span class="far fa-calendar-alt"></span>
                        <span class="text">Sunday</span>
                        <span class="fas fa-clock"></span>
                        <span class="text">Closed</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom">
            <center>
                <span class="far fa-copyright">2024 All rights reserved.</span>
            </center>
        </div>
    </footer>
    
</body>

</html>