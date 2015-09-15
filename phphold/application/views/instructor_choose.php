<!--@Chantal - this page will have a $options array holding all the course names so you can display the drop down box, that's basically all this page needs to do. When they press the button to search please call the get_app() method and it should bring up a list of applicants associated to the right course. -->
<!DOCTYPE html>
<html>
<head lang="en">
        <?php
    if($this->session->userdata('user_name') == "")    
        redirect("http://php-sweteame.rhcloud.com/");
    ?>
    <meta charset="UTF-8">
    <link href="../../bootstrap/css/login.css" rel="stylesheet">
    <link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Search By Name</title>

</head>
<body>
<div class="container">

    <div class="row" id="pwd-container">
        <div class="col-md-4"></div>

        <div class="col-md-4">
	<section class="login-form" role="login">

                    <?php echo form_open("welcome/login");?>
                    <center>
                        <h3>Log In</h3>
                    <img src="../../bootstrap/img/mu_logo.png" class="img-responsive" alt="" />
                    </center>

                    
                     <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary btn-block" />
                <div>
                    <p>
                        <a href=<?php echo site_url("welcome/registration");?>Create account</a>
                    </p>
                </div>

                <?php echo form_close();?>

                <div class="form-links">
                    <a href="<?php echo site_url("welcome");?>">Home Page</a>
                </div>
            </section>
        </div>

        <div class="col-md-4"></div>


    </div>

</body>
</html>

<span> Choose course to see Applicants</span> 
<select> 
	<option value = "first applicant"> First Applicant </option>

</select>

 <?php


// $this->load->helper('dropdown');
 $this->load->helper('form');
echo form_open('Instructor_controller/getapp');
echo form_dropdown('dropdown_menu', $options, '0');
echo form_submit('course_submit','submit');
 ?>  



</body>

</html>
