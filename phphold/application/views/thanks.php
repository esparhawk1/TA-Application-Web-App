<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="../../bootstrap/css/login.css" rel="stylesheet">
    <link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Registration Success</title>
</head>
<body>
<div class="container">

    <div class="row" id="pwd-container">
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <section class="login-form" role="login">
                <center>
                    <h3>Successfully Registered</h3>
                    <img src="../../bootstrap/img/mu_logo.png" class="img-responsive" alt="" />
                </center>

                <a href="<?php echo site_url("welcome/home");?>"><input type="button" name="return" value="Login Now" class="btn btn-lg btn-primary btn-block" /></a>
            </section>
        </div>

        <div class="col-md-4"></div>


    </div>

</body>
</html>