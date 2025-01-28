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

    
    <link rel="stylesheet" href="hair_style.css" type="text/css">
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


    <section class="hair" id="hair">
        <div class="max-width">
            <h2 class="title">Hair</h2>
            <div class="hair-content">               
                <div class="column left">
                    <img src="Images/hair2_gallery.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">Changing your hairstyle is the easiest way to get a trendy makeover. Choosing a hairstyle that is stylish and accentuates 
                        your best facial features can transform you from an ordinary girl to a stunning diva. </p>
                    <p>Consult the <a href="prices.php">price</a> list here</p>
                </div>
            </div>
            <div class="hair-types">
                <p2>Hairstylists know every trick there is to make your hair look fantastic. But don't forget that the foundation for healthy, luscious hair 
                    begins with a shampoo and conditioner formulated for your hair type, along with a deep-conditioning treatment for weekly blasts of moisture. </p2>
                <p1>Hair Cutting</p1>
                <p>Every appointment begins with a complimentary consultation, where you and our stylist can discuss haircuts, styles and looks. We’ll then 
                    wash, cut, and style your hair using the finest hair-care products to ensure a truly one-of-a-kind finish. </p>
                <p1>Colour Services</p1>
                <p>The ultimate mode of self-expression, a professional colour service gives you total control over your hair colour, 
                    boosting your self-confidence by truly reflecting your personality.</p>
                <p3>Full Head Colour</p3>
                <p4>A full head of colour is where one colour is applied all over the head from roots to tips, using permanent colour to
                     cover grey and lift virgin hair by up to 3 levels or semi-permanent to change depth, tone and add shine to your hair.  
                     Permanent colour requires higher maintenance and upkeep compared to a Semi-Permanent or a Gloss where regrowth is less 
                     noticeable. </p4>
                <p3>Highlights</p3>
                <p4>Highlights are simply strands of hair that are lighter than your natural colour. We also offer Lowlights as a technique which involves 
                    darkening strands of hair using colours that are darker or the same depth as your natural colour to help add strength and dimension. 
                    Highlights or Lowlights can be partially or fully applied throughout the hair, from a variety of colours, from bold to natural.</p4>
                <p3>Balayage</p3>
                <p4>Balayage allows for a sun-kissed natural looking hair colour, that allows for a softer, less noticeable re-growth. The technique uses 
                    patches of light and shade to create multiple dimensions to the colour, that result in a gorgeous, salon-quality finish. It’s a
                    great method if you want to refresh your colour but don’t want to go for a bold colour overhaul.</p4>
                <p1>Hair Treatments</p1>
                <p>Each hair treatment appointment starts with a complimentary consultation, during which our stylist will explain the process,
                    and also provide some top tips on aftercare and preservation.</p>
                <p3>Chemical Straightening</p3>
                <p4>Straightening hair treatments work by breaking the hair’s disulphide bonds in order to reset the hair into a straighter shape.
                    They offer a long-lasting and effective way to transform your hair that’s ideal if you’re tired of taming unruly locks, or just want to try 
                    out a completely new look. </p4>
                <p1>Hair Styling</p1>
                <p>From the best hair products and styling tools to how-tos, we've got you covered with everything that will make your look turn heads. 
                    Our stylists will consult with you regarding the look you want to obtain.
                </p>
               
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