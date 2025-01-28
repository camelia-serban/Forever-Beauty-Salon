<?php


function access($type)
{
    if(isset($_SESSION["ACCESS"]) && !$_SESSION["ACCESS"][$type])
    {
        header("Location: denied.php");
        die;
    }
}


$_SESSION["ACCESS"]["ADMIN"] = isset($_SESSION['mytype']) && $_SESSION['mytype'] == "admin";
$_SESSION["ACCESS"]["RECEPTIONIST"] = isset($_SESSION['mytype']) && $_SESSION['mytype'] == "receptionist";
$_SESSION["ACCESS"]["CLIENT"] = isset($_SESSION['mytype']) && $_SESSION['mytype'] == "client";
$_SESSION["ACCESS"]["ANG_NAILS"] = isset($_SESSION['mytype']) && $_SESSION['mytype'] == "employee_nails";
$_SESSION["ACCESS"]["ANG_MAKEUP"] = isset($_SESSION['mytype']) && $_SESSION['mytype'] == "employee_makeup";
$_SESSION["ACCESS"]["ANG_FACIAL_TREATMENT"] = isset($_SESSION['mytype']) && $_SESSION['mytype'] == "employee_facial_treatment";
$_SESSION["ACCESS"]["ANG_BODY_TREATMENT"] = isset($_SESSION['mytype']) && $_SESSION['mytype'] == "employee_body_treatment";
$_SESSION["ACCESS"]["ANG_HAIR"] = isset($_SESSION['mytype']) && $_SESSION['mytype'] == "employee_hair";


