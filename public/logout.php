<!-- 
-- Student Name: Johny Ramos
-- Course: T054 - Computer System Management
-- Module: Web Application
-- Lecturer: Robert Smith
-->

<?php 
    // session_start();
    // session_destroy();
    // header("location:login.php");
    // exit;

    require_once ('../src/session.php');
    $session = new session();
    $session -> forgetSession();
?>

