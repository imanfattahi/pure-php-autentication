<?php
    require(dirname(__DIR__) . '/includes/header.php');
    # logic of this page is in follwong controller file
    require_once(dirname(__DIR__) . '/controllers/auth/login_controller.php');
?>

    <h5 class="card-title">Login page</h5>
    <p class="card-text">
        Fill following fields and click on Login button    
    </p>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
            <span class="help-block"><?php echo $email_err; ?></span>
        </div>    
        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
            <span class="help-block"><?php echo $password_err; ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
    </form>

    <br>
    <br>
    <a href="<?php url('/'); ?>" class="btn btn-outline-primary">
        Home
    </a>
    <a href="<?php url('/auth/register.php'); ?>" class="btn btn-outline-primary">
        Sign up
    </a>

<?php
    require(dirname(__DIR__) . '/includes/footer.php');
?>
