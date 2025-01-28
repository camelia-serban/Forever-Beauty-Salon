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

    
    <link rel="stylesheet" href="facialTreatments_style.css" type="text/css">
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


    <section class="facial-treatments" id="facial-treatments">
        <div class="max-width">
            <h2 class="title">Facial Treatments</h2>
            <div class="facials-content">               
                <div class="column left">
                    <img src="Images/facialTreatments2_gallery.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">A facial is a spa therapy and massage that leaves your skin cleaner, softer, younger, and truly transformed. </div>
                    <p>Facials can help clear clogged pores, quench parched skin and remove dead cells. They involve some massage which aids 
                        in blood circulation and lymphatic drainage.</p>
                    <p>Consult the <a href="prices.php">price</a> list here</p>
                </div>
            </div>
            <div class="facials-types">
                <p2>There are many different types of skin problems and many types of solutions. We focus on skin problems/treatments for cosmetic purposes only.</p2>
                <p1>Microdermabrasion</p1>
                <p>Microdermabrasion works to remove age spots and lighter acne scars. The procedure is one of the favorite wrinkle treatments 
                    because it is performed quickly in a facial esthetics office. The physician uses a handheld instrument to spray small
                     crystals onto the surface of the skin. The crystals exfoliate the skin layers, while using suction simultaneously to 
                     remove the dead skin cells.</p>
                <p1>Chemical Peels</p1>
                <p>Chemical peels are cosmetic treatments performed on the face, typically used as an anti-aging solution to rejuvenate the skin. 
                    Theys are used to correct skin irregularities in texture, such as fine lines, and color, such as spots caused by sun damage. 
                    These peels have varying strengths, characterized by the different kinds of acids used in the applied chemical solution. </p>
                <p1>Laser Resurfacing</p1>
                <p>Laser skin resurfacing removes the outer layers of the skin that are damaged. The laser resurfacingprocedure stimulates 
                    the production of collagen and new skin cells in the underlying layers of the skin. Laser resurfacing is now used to 
                    eliminate or reduce wrinkles and fine lines on the face and neck.</p>
                <p1>Laser Skin Rejuvenation</p1>
                <p>Laser skin treatment is an advanced wrinkle removal treatment that uses infrared light to tighten the skin without
                     surgery. The laser light delivers heat to layers beneath the skin’s surface, stimulating collagen production and
                      making the skin look tighter. </p>
                <p1>HydraFacial</p1>
                <p>HydraFacial is a medical-grade resurfacing treatment that clears out your pores, plus it hydrates your skin. The four-step 
                    treatment includes cleansing, exfoliating, extracting, and hydrating the skin with serums that are infused into pores with
                    the HydraPeel Tip, a pen-like device.</p>
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