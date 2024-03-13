<!-- 
-- Student Name: Johny Ramos
-- Course: T054 - Computer System Management
-- Module: Web Application
-- Lecturer: Robert Smith
-->

<?php 
    session_start(); 

    if ($_SESSION['Active'] == false) {
        header("location:login.php"); // redict to login page is login is invalid.
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <link rel="stylesheet" href="../bootstrap-5.2.3/css/bootstrap.min.css">
    <script defer src="../bootstrap-5.2.3/js/bootstrap.bundle.min.js"></script>