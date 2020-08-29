<?php
    require(dirname(__DIR__) . '/config/config.php');
    require(dirname(__DIR__) . '/classes/helpers.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="<?php url('/assets/package/bootstrap-4.5.2-dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php url('/assets/css/main.css'); ?>">
</head>
<body id="body">

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <img class="card-img-top" src="<?php echo url('/assets/images/php.png'); ?>" alt="Card image cap">
                    </div>
                    <div class="col-12 col-sm-6">
