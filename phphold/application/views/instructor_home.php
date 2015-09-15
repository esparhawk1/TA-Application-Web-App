<!DOCTYPE HTML>
<html>
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
    <meta name="author" content="">
    <title> Instructor Home </title>

<!-- Bootstrap Core CSS -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../bootstrap/css/heroic-features.css" rel="stylesheet">
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

<section class="success" style="color:black;">
	<div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            

            <div class="row">
                <div class="col-lg-12">
                    <h3>Instructor Dashboard</h3>
                </div>
            </div>

            <div class="row text-center">

                <div class="col-md-6 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <img src="../../bootstrap/img/ta_app.png" alt="">
                        <div class="caption">
                            <h3>View Applicants </h3>
                            <p>View submitted applications</p>
                            <p>
                                <?php echo form_open("Instructor_controller/view_form1");?>
                                <input class="btn btn-primary btn-large" type="submit" name="view" value="View" />
                                <?php echo form_close();?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <img src="../../bootstrap/img/search.png" alt="" width="262px" height="203px">
                        <div class="caption">
                            <h3>Search Applicants By Course</h3>
                            <p>This is where you can search for an applicant</p>
                           
                            <?php
                    $data=array('selection');
                  echo form_open('Instructor_controller/get_app',$data);
                echo"<span> Choose a course to view it's applicants </span> ";
                echo " <select name = 'course'> ";
                foreach ($courses as $row){
                    foreach($row as $key => $value){
                        echo "<option value =".$value.">".$value."</option>";
                    }

                }
                echo "</select>";
                $data['selection']=$this->input->post('course');
                echo form_submit('course_submit','submit');
                ?>
                        <!--
                            <p>
                                <a href="<?php echo site_url("Instructor_controller/loadpage");?>" class="btn btn-primary">View</a>
                            </p> -->
                        </div>
                    </div>
                </div>





<!--Make a button to call loadpage(), loadpage will then call the instructor_choose view and also pass it the array for your drop down box-->
           <!--     <?php/*
		$data=array('selection');
                  echo form_open('Instructor_controller/get_app',$data);
               echo"<span> Choose a course to view it's applicants </span> ";
                echo " <select name = 'course'> ";
                foreach ($courses as $row){
                    foreach($row as $key => $value){
                        echo "<option value =".$value.">".$value."</option>";
                    }


              
      
                    //echo "<li>".$key." => ".$value."</li>";
                    // echo "=======================";
                    // echo "<br>";
                    // echo "<br>";
                }
                echo "</select>";
		$data['selection']=$this->input->post('course');
                echo form_submit('course_submit','submit');
            */    ?> -->
            </div>

                <!--


                <button onclick="location.href ='Instructor_controller/show_app';" id = "applicant_button"> View Applicants</button>

                Wanted to use JS but have to link it correctly with code ignighter
                <button id = "applicant_button" >View Applicant</button>
                <script type = "text/javascript">
                    document.getElementById("applicant_button").onclick = function(){
                        location.href = "Instructor_controller/show_app";
                    }

                use this instead.
                    form open -- just have a submit button to call back to the controller to load the function/different view. Similar to log in the login view and register view
                </script> -->


               <hr />
        </header>
    </section> 

   <footer class ="text-center">
            <div class="footer-above row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Team E | TA Web Application 2015</p>
                </div>
            </div>
        </footer>
    
</div>
     



 <script src="../../bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
