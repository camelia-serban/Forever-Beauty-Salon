<?php
session_start();
include('dbconnection.php');
include('access.php');

if(isset($_SESSION['myid']))
{
    unset($_SESSION['myid']);
}

if(isset($_SESSION['myfirstname']))
{
    unset($_SESSION['myfirstname']);
}

if(isset($_SESSION['myemail']))
{
    unset($_SESSION['myemail']);
}

session_destroy();
header("Location: login.php");
die;

?>