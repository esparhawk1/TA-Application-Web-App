

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    if($this->session->userdata('user_name') == "")    
        redirect("http://php-sweteame.rhcloud.com/");
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">    <link href="../../bootstrap/css/countdown.css" rel="stylesheet">
    <script type="text/javascript" src="../../bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="../../bootstrap/js/countdown.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
        
            $("#countdown").countdown({
                date: "20 may 2015 0:00:00", // add the countdown's end date (i.e. 3 november 2012 12:00:00)
                format: "on" // on (03:07:52) | off (3:7:52) - two_digits set to ON maintains layout consistency
            },
            
            function() { 
                
                // the code here will run when the countdown ends
                alert("done!") 
 
            });
        });
    </script>



    <title>TA Applicant Manager</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../bootstrap/css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .box
        {
            background-color: white;

        }
    </style>

</head>

<body>

    <!-- Navigation -->
   

    <!-- Page Content -->
    <section class="success" style="color:black;">
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer box">
        <div class = "row">
            <div class="col-sm-6">
            <ul id="countdown">
        <li>
            <span class="days">00</span>
            <p class="timeRefDays">days</p>
        </li>
        <li>
            <span class="hours">00</span>
            <p class="timeRefHours">hours</p>
        </li>
        <li>
            <span class="minutes">00</span>
            <p class="timeRefMinutes">minutes</p>
        </li>
        <li>
            <span class="seconds">00</span>
            <p class="timeRefSeconds">seconds</p>
        </li>
    </ul>
</div>
    <div class="col-sm-6">
    <h2>   Time left to apply</h2>
</div>
</div>
				<!-- Centered the name maybe for a cleaner look? Just an opinion. -->
                <div class="row">
                    <hr>
                </div>
           <div class="row">
            <hr>
            <p> This is where you can apply for TA or PLA position and view information on the application process.</p>
            <p>You have been assigned to: <?php echo "No assigned course"; ?></p>
        </div>
            <br>
            <hr>
            <br>
            <!-- Title -->
            <div class="row">
                <div class="col-lg-12">
                    <h3>Applicant Dashboard</h3>
                </div>

            </div>
            <!-- /.row -->

            <!-- Page Features -->
            <div class="row text-center">

                <div class="col-sm-12 hero-feature">
                    <div class="thumbnail">
                        <img src="../../bootstrap/img/applicant-icon.png" alt="">
                        <div class="caption">
                            <h3>Apply for a TA/PLA position</h3>
                            <p>Submit an TA/PLA application for review.</p>
                            <p>
                                <a href="<?php echo site_url("Form_controller");?>"class="btn btn-primary">Apply</a>
                            </p>
                        </div>
                    </div>
                </div>



               

            </div>
        </header>
    </section>

        <!-- Footer -->
        <footer class="text-center">
            <div class="footer-above row">
                <div class="col-lg-12">
                    <p style = "color:white">Copyright &copy; Team E | TA Web Application 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->


</body>

</html>
