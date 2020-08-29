<?php
    require('includes/header.php');
    session_start();
?>
    <h5 class="card-title">Home page</h5>
    <p class="card-text">
        This is a test project by <strong><?php echo AUTHOR; ?></strong>.
        <ol>
            <li>Pure PHP 7.4</li>
            <li>Bootstrap 4.5</li>
        </ol>
    </p>
    <br>
    <br>
    
    <?php 
        if(isset($_SESSION["is_loggedin"]) && $_SESSION["is_loggedin"] === true) {
            # User is logged in
    ?>
        <p>
            You are logged in with this email address: <strong><?php echo $_SESSION["email"]; ?></strong>
        </p>
        <a href="<?php url('/auth/logout.php'); ?>" class="btn btn-outline-warning">
            Sign out
        </a>
    <?php 
        } else {
            # User is not logged in
    ?>
    
        <p>
            Click on following buttons:
        </p>
        <a href="<?php url('/auth/register.php'); ?>" class="btn btn-outline-primary">
            Sign up
        </a>
        <a href="<?php url('/auth/login.php'); ?>" class="btn btn-outline-primary">
            Sign in
        </a>
    <?php } ?>

<?php
    require('./includes/footer.php');
?>
