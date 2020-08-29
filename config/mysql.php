<?php 
    require_once(dirname(__DIR__) . '/config/config.php');
    
    # Connect to database
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    # Check connection
    if($connection === false)
        die("Something went wrong with mysql! Could not connect. " . mysqli_connect_error());