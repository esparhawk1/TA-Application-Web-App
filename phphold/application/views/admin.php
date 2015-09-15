<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    if($this->session->userdata('user_name') == "")    
        redirect("http://php-sweteame.rhcloud.com/");
    ?>
    <link rel="shortcut icon" href="../../favicon.ico" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../../bootstrap/css/countdown.css" rel="stylesheet">
    <script type="text/javascript" src="../../bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="../../bootstrap/js/countdown.js"></script>
    <script src="../../bootstrap/js/freelancer.js"></script>
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

    <title>Admin Homepage</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../bootstrap/css/heroic-features.css" rel="stylesheet">
    <link href="../../bootstrap/css/freelancer.css" rel="stylesheet">


    <link href="../../bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .anno
        {
            width:450px;
            height: 34px;

        }
    </style>
</head>

<body>

    <!-- Navigation -->

<section class="success" style="color:black;">
    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron">
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
            <h2>     Time left to assign TA</h2>
        </div>
</div>
<hr>
<hr>
            <div class = "row">
            <?php
            echo form_open('Admin_controller/announcement');
            $data = array(
                'name' => 'announcement',
                'class' => 'form_control anno',
                'placeholder' => 'Make an announcement here',
                );
            echo form_input($data);
            $data2 = array(
                'name' => 'Post',
                'value' => 'Post',
                'class' => 'btn btn-primary',
                );
            echo form_submit($data2);
            echo form_close();
            ?>
        </div>
            <hr>

            <!-- Title -->
            <div class="row">
                    <h3>Dashboard</h3>
            </div>
            <hr>
            <!-- /.row -->

            <!-- Page Features -->
            <div class="row text-center">

                <div class="col-md-4 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <img src="../../bootstrap/img/ta_app.png" alt="">
                        <div class="caption">
                            <h3>View Application Form</h3>
                            <p>Submit a TA/PLA application for review.</p>
                            <p>
                                <?php echo form_open("Admin_controller/view_form1");?>
                                <input class="btn btn-primary btn-large" type="submit" name="view" value="View" />
                                <?php echo form_close();?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <img src="../../bootstrap/img/create_course.png"  alt="">
                        <div class="caption">
                            <br>
                            <br>
                            <br>
                            <h3>Create Course </h3>
                            <p>Create a course. </p>
                            <p>
                                <?php echo form_open("Admin_controller/create_course");?>
                                <input class="btn btn-primary btn-large" type="submit" name="view" value="Create" />
                                <?php echo form_close();?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <img src="../../bootstrap/img/assign_score.png"  alt="">
                        <div class="caption">
                            <br>
                            <br>
                            <br>
                            <h3>Assign TA/PLA or Enter Score</h3>
                            <p>Assign them here </p>
                            <p>
                                <?php echo form_open("Admin_controller/assign_ta");?>
                                <input class="btn btn-primary btn-large" type="submit" name="view" value="Assign" />
                                <?php echo form_close();?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <hr>
        </header>
    </section>



        <!-- Footer -->
        <footer class ="text-center">
            <div class="footer-above row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Team E | TA Web Application 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

</body>

</html>
