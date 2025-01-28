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

    <!-- <link rel="stylesheet" href="all_style.css" type="text/css"> -->
    <link rel="stylesheet" href="about_style.css" type="text/css">
    
    <script src="https://kit.fontawesome.com/5b7ad2b792.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    
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
            <li>
                <a href="#">My Account</a>
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

    
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Our team</h2>
            <h3 class="title">-who are we-</h3>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/ceo_profile.jpg" alt="">
                        <div class="text">CEO</div>
                        <div class="text">Chloe Thompson</div>
                        <p>Founder of the beauty salon</p>
                    </div>                    
                </div>

                <div class="card">
                    <div class="box">
                        <img src="images/receptionist_profile.jpg" alt="">
                        <div class="text">Receptionist</div>
                        <div class="text">Hannah Lee</div>
                        <p>She will greet you everytime you arrive</p>
                    </div>                    
                </div>

                <div class="card">
                    <div class="box">
                        <img src="images/makeupArtist_profile.jpg" alt="">
                        <div class="text">Make-Up Artist</div>
                        <div class="text">Violet Young</div>
                        <p>Make-up transformations are her skills</p>
                    </div>                    
                </div>

                <div class="card">
                    <div class="box">
                        <img src="images/hairstylist_profile.jpg" alt="">
                        <div class="text">Hair Stylist</div>
                        <div class="text">Layla Mitchell</div>
                        <p>Hair done with meticulous attention</p>
                    </div>                    
                </div>

                <div class="card">
                    <div class="box">
                        <img src="images/nailTechnician_profile.jpg" alt="">
                        <div class="text">Nail Technician</div>
                        <div class="text">Emily Carter</div>
                        <p>The perfect nails for the perfect girl by the perfect nail technician</p>
                    </div>                    
                </div>

                <div class="card">
                    <div class="box">
                        <img src="images/specialistBeautyTreatments_profile.jpg" alt="">
                        <div class="text">Beauty Treatments Specialist</div>
                        <div class="text">Mia Lewis</div>
                        <p>Perfect choice for facial treatments</p>
                    </div>                    
                </div>

                <div class="card">
                    <div class="box">
                        <img src="images/specialistBeautyTreatments2_profile.jpg" alt="">
                        <div class="text">Beauty Treatments Specialist</div>
                        <div class="text">Isabella White</div>
                        <p>Perfect choice for body treatments</p>
                    </div>                    
                </div>
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

    <script src="about.js"></script>
</body>

</html>