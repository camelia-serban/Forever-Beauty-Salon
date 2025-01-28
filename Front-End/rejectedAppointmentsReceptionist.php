<?php
session_start();
error_reporting(0);
include('dbconnection.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="allAppointments_style.css" type="text/css">
    <script src="https://kit.fontawesome.com/5b7ad2b792.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

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
                            }else{
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

    <br>
    <br>
    <br>
    <br>

        
    <section class="dashboard" id="dashboard">
            <div class="max-width">
                <!--sidebar-->
                <div id="sidebar">
                    <a href="receptionistDashboard.php" class="brand"><i class='bx bxs-bookmarks icon'></i>Receptionist Panel</a>
                    <ul class="side-menu">
                        <li><a href="receptionistDashboard.php" class="active"><i class='bx bxs-dashboard icon'></i>Dashboard</a></li>
                        <li class="divider">Management</li>
                        <li>
                            <a href="#"><i class='bx bxs-info-circle icon'></i>Appointments<i class='bx bx-chevron-right icon-right icon'></i></a>
                            <ul class="side-dropdown">
                                <li><a href="allAppointmentsReceptionist.php">All appointments</a></li>
                                <li><a href="newAppointmentsReceptionist.php">New appointments</a></li>
                                <li><a href="acceptedAppointmentsReceptionist.php">Accepted appointments</a></li>
                                <li><a href="rejectedAppointmentsReceptionist.php">Rejected appointments</a></li>
                            </ul>
                        </li>
                        
                        <li class="divider">Account</li>
                        <li><a href="myProfileReceptionist.php"><i class='bx bx-user-circle icon'></i></i>My profile</a></li>
                        
                    </ul>
                </div>

                <!--All Appointments content-->
                <div id="content">
                    <main>
                        <div class="details">
                            <div class="allAppointments">
                                <div class="cardHeader">
                                    <h2>Rejected Appointments</h2>
                                </div>
                            
                        
                                <table>
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <td>First Name</td>
                                            <td>Last Name</td>
                                            <td>Email</td>
                                            <td>Service</td>
                                            <td>Date</td>
                                            <td>Time</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $ret=mysqli_query($con, "select * from appointments where status='rejected'");
                                        $cnt=1;
                                        while($row=mysqli_fetch_array($ret)) {
                                            ?>

                                            <tr>
                                                <td scope="row"><?php echo $cnt;?></td>
                                                <td><?php echo $row['first_name'];?></td>
                                                <td><?php echo $row['last_name'];?></td>
                                                <td><?php echo $row['email'];?></td>
                                                <td><?php echo $row['service'];?></td>
                                                <td><?php echo $row['appointment_date'];?></td>
                                                <td><?php echo $row['appointment_time'];?></td>
                                                <td><?php echo $row['status'];?></td>
                                            </tr>
                                            <?php 
                                            $cnt=$cnt+1;
                                        }?>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </main>
                </div> 
                 
            </div>
                              
        </section>   


    
    <script src="panelsDashboard.js"></script>
</body>

</html>

