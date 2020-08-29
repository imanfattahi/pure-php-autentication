<?php 
    // Initialize the session
    session_start();
    
    unset($_SESSION['is_loggedin']);
    unset($_SESSION['email']);
    unset($_SESSION['id']);
    
    // Destroy the session.
    session_destroy();
    
    // Redirect to login page
    header("location: ../");
    exit;
?>