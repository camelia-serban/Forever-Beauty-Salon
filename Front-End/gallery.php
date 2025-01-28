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

    <link rel="stylesheet" href="gallery_style.css" type="text/css">
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
            <input type="checkbox" id="btn" />


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


    <div class="wrapper">
        <div class="max-width">
            <section>
                <div class="items">
                    <span class="item active" data-name="all">All</span>
                    <span class="item" data-name="makeup">MakeUp</span>
                    <span class="item" data-name="hair">Hair</span>
                    <span class="item" data-name="nails">Nails</span>
                    <span class="item" data-name="facials">Facials</span>
                    <span class="item" data-name="body">Body</span>
                </div>            
            </section>
        

            <!--filter images-->
            <div class="gallery">
                <div class="image" data-name="all"><span><img src="Images/salon_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="all"><span><img src="Images/salon2_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="all"><span><img src="Images/salon3_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="all"><span><img src="Images/salon4_gallery.jpg" alt=""></span></div>
                
                <div class="image" data-name="makeup"><span><img src="Images/makeup_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="makeup"><span><img src="Images/makeup2_gallery.jpg" alt=""></span></div>
                
                <div class="image" data-name="all"><span><img src="Images/beautyTreatments2_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="makeup"><span><img src="Images/makeup4_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="makeup"><span><img src="Images/makeup5_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="makeup"><span><img src="Images/makeup6_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="hair"><span><img src="Images/hair_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="hair"><span><img src="Images/hair2_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="hair"><span><img src="Images/hair3_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="nails"><span><img src="Images/nails_gallery.jpg" alt=""></span></div>
                
                <div class="image" data-name="nails"><span><img src="Images/nails3_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="nails"><span><img src="Images/nails4_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="nails"><span><img src="Images/nails2_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="all"><span><img src="Images/beautyTreatments_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="makeup"><span><img src="Images/makeup3_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="body"><span><img src="Images/bodyTreatments2_gallery.jpg" alt=""></span></div>
                
                <div class="image" data-name="hair"><span><img src="Images/hair4_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="facials"><span><img src="Images/facialTreatments4_gallery.jpg" alt=""></span></div>
                
                <div class="image" data-name="facials"><span><img src="Images/facialTreatments2_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="facials"><span><img src="Images/facialTreatments3_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="facials"><span><img src="Images/facialTreatments_gallery.jpg" alt=""></span></div>
                
                <div class="image" data-name="body"><span><img src="Images/bodyTreatments_gallery.jpg" alt=""></span></div>
                <div class="image" data-name="nails"><span><img src="Images/nails5_gallery.jpg" alt=""></span></div>
                
                
            </div>            
        </div>
    </div>

    <div class="preview-box">
        <div class="details">
            <span class="title">Image Category: <p>Not defined</p></span>
            <span class="icon fas fa-times"></span>
        </div>
        <div class="image-box">
                <img src="" alt="">
        </div>
    </div>

    <div class="shadow">

    </div>


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

    <script src="gallery.js"></script>
</body>

</html>