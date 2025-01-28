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

    
    <link rel="stylesheet" href="bodyTreatments_style.css" type="text/css">
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


    <section class="body-treatments" id="body-treatments">
        <div class="max-width">
            <h2 class="title">Body Treatments</h2>
            <div class="bodyT-content">               
                <div class="column left">
                    <img src="Images/bodyTreatments2_gallery.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">A body treatment is a blanket term for a whole gamut of different holistic, non-medical, physical 
                        procedures aimed at helping you achieve something specific for your body or wellbeing.</p>
                    <p>Consult the <a href="prices.php">price</a> list here</p>
                </div>
            </div>
            <div class="bodyT-types">
                <p2>It's time you begin taking care of the skin on your body with the same fervor you use when your face is involved.
                    It's better to preserve your skin now than repair damaged and aged skin down the line.
                </p2>
                <p1>LED Light Therapy</p1>
                <p>Full-body light therapy bed uses a combination of infrared and near-infrared light to penetrate your skin at different 
                    depths—this helps to stimulate and enhance cell function and accelerate your body's natural healing and analgesic process.
                    It improves wound and soft tissue healing, reduces inflammation, and offers relief for both acute and chronic pain.</p>
                <p1>Radio Frequency Micro-Needling</p1>
                <p>Vivace is a radio frequency micro-needling device. It is not specifically a body treatment but can be used for a variety 
                    of body issues—such as skin tightening and stretch marks. Vivace promotes collagen stimulation and can help tighten your
                    skin wherever you feel you may need it most by combining micro-needling (which you've probably read about for your face)
                    and radio frequency. </p>
                <p1>Shea Body Butter Indulgence</p1>
                <p>This treatment begins with oil applied to the skin, which is then mixed with a salt scrub to gently polish the skin.
                    Warm towels remove the mixture, preparing the skin for our creamy signature Shea Body Butter. While you’re enveloped 
                    in this richness, your head, face and neck are massaged. The final indulgence – the remaining shea butter is massaged
                    into the skin during a full body massage, leaving skin hydrated and muscles soothed.</p>
                <p1>Forever Herbal Infusion</p1>
                <p>This service uses heat to detoxify the body and calm the mind. First, the therapist uses texturized gloves to encourage 
                    circulation and lymphatic flow, followed by a massage with an essential oil blend to further stimulate circulation. Next,
                     you’re wrapped with linens infused with aromatic herbs to aid perspiration, release impurities and ease overworked muscles. 
                     Stress melts away as you enjoy a face and scalp massage. The service concludes with massage of the feet, allowing the body 
                     to cool down gradually.</p>
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