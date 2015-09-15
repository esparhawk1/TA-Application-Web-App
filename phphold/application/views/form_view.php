
<!--
* Created by PhpStorm.
* User: ahpb75_sprint1
* Date: 4/2/15
* Time: 6:53 PM -->
<DOCTYPE! HTML>

<head>
        <?php
    if($this->session->userdata('user_name') == "")    
        redirect("http://php-sweteame.rhcloud.com/");
    ?>
    <title>TA/PLA Application Form</title>

    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-theme.css"/>
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-theme.min.css"/>
     <!-- Custom CSS -->
    <link href="../../bootstrap/css/heroic-features.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script>
 /*  jQuery ready function. Specify a function to execute when the DOM is fully loaded.  */
$(document).ready(
  /* This is the function that will get executed after the DOM is fully loaded */
  function () {
    $( ".datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
  }
);
</script>

</head>

<style>

    input {
        max-width: 75%;
    }
    .required {
        color: red;
        font-weight: bold;
    }
</style>

<body>

<center>
    <h1>Computer Science Department<br/></h1>
    <h2>Graduate Teaching Assistant Application<br/></h2>
</center>

<div class="container">
<hr/>
<div class="span5">

<?php
$attributes = array('class' => 'form-horizontal', 'id' => '');
echo form_open('Form_controller', $attributes); ?>



<div class="form-group">
    <span class="required"><?php echo form_error('First_Name'); ?></span>
    <label for="First_Name">First Name <span class="required">*</span></label>
    <input id="First_Name" type="text" name="First_Name" class="form-control" placeholder="John" value="<?php echo set_value('fname'); ?>"  />
    
</div>

<div class="form-group">
     <span class="required"><?php echo form_error('Last_Name'); ?></span>
    <label for="Last_Name">Last Name <span class="required">*</span></label>
    <input id="Last_Name" type="text" name="Last_Name" class="form-control" placeholder="Doe" value="<?php echo set_value('lname'); ?>"  />
    
</div>

<div class="form-group">
    <span class="required"><?php echo form_error('studentID'); ?></span>
    <label for="studentID">Student ID <span class="required">*</span></label>
    <input id="studentID" type="text" name="studentID" class="form-control" placeholder="12345678" value="<?php echo set_value('studentID'); ?>"  />
    
</div>

<div class="form-inline">
     <span class="required"><?php echo form_error('position'); ?></span>
    <label for="position">TA or PLA <span class="required">*</span></label>
    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <label for="position" class="radio">
        <input id="position" name="position" type="radio" class="form-control" value="TA" <?php echo $this->form_validation->set_radio('position', 'TA'); ?> />
        TA
    </label>
    <label for="position" class="radio">
        <input id="position" name="position" type="radio" class="form-control" value="PLA" <?php echo $this->form_validation->set_radio('position', 'PLA'); ?> />
        PLA
    </label>
   
</div>


<div class="form-group">
     <span class="required"><?php echo form_error('GPA'); ?></span>
    <label for="GPA">GPA <span class="required">*</span></label>
    <input id="GPA" type="text" name="GPA" class="form-control" placeholder="4.0" value="<?php echo set_value('GPA'); ?>"  />
    
</div>
<div class="form-group">
    <span class="required"><?php echo form_error('program_level'); ?></span>
    <label for="program_level">If undergraduate, indicate program and level (ex. CS BA jr.)</label>
    <input id="program_level" class="form-control" type="text" placeholder="CS BS sr." name="program_level" maxlength="15" value="<?php echo set_value('program_level'); ?>"  />
    
</div>
<div class="form-inline">
      <span class="required"><?php echo form_error('graduate_program'); ?></span>
    <label for="graduate_program" class="control-label">MS or PhD (if graduate)</label>
    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <label for="graduate_program" class="radio">
        <input id="graduate_program" class="form-control" name="graduate_program" type="radio" value="MS" <?php echo $this->form_validation->set_radio('graduate_program', 'MS'); ?> />
        MS
    </label>
    <label for="graduate_program" class="radio">
        <input id="graduate_program" class="form-control" name="graduate_program" type="radio" value="PhD" <?php echo $this->form_validation->set_radio('graduate_program', 'PhD'); ?> />
        PhD
    </label>
   
</div>


<div class="form-group">
     <span class="required"><?php echo form_error('advisor'); ?></span>
    <label for="advisor" class="control-label">Advisors Name<span class="required">*</span></label>
    <input id="advisor" class="form-control" type="text" name="advisor" maxlength="30" value="<?php echo set_value('advisor'); ?>"  />
   
</div>

<div class="form-group">
     <span class="required"><?php echo form_error('phone'); ?></span>
    <label for="phone" class="control-label">Phone Number (no spaces)<span class="required">*</span></label>
    <input id="phone" class="form-control" type="text" placeholder="1234567890" name="phone" maxlength="11" value="<?php echo set_value('phone'); ?>"  />
</div>
<div class="form-group">
    <span class="required"><?php echo form_error('email'); ?></span>
    <label for="email" class="control-label">Email<span class="required">*</span></label>

    <input id="email" class="form-control" type="text" placeholder="email@mail.missouri.edu" name="email" maxlength="30" value="<?php echo set_value('email'); ?>"  />
    

</div>
<div class="form-group">
     <span class="required"><?php echo form_error('gradDate'); ?></span>
    <label for="gradDate" class="control-label">Graduation Date (YYYY-MM-DD)<span class="required">*</span></label>
    <input class="datepicker form-control"  type="text" placeholder="YEAR-MONTH-DAY" name="gradDate"  value="<?php echo set_value('gradDate'); ?>"  />

   
</div>

<div class="form-group">
    <label for="courseID" class="control-label">Course you would like to teach (must have taken previously):</label>
    <?php
    $option = array();
    foreach ($courses as $row){
        foreach($row as $key => $value){
            $option[$value] = $value;
        }
        //echo "<li>".$key." => ".$value."</li>";
        // echo "=======================";
        // echo "<br>";
        // echo "<br>";
    }
            echo form_dropdown('courseID',$option);

    ?>
    <label for="grade" class="control-label">Grade Received:<span class="required">*</span></label>
    <?php
    $option = array(
        'A' => 'A',
        'A-' => 'A-',
        'B+' => 'B+',
        'B' => 'B',
        'B-' => 'B-',
        'C+' => 'C+',
        'C' => 'C',
        );
    echo form_dropdown('grade',$option);
    ?>
   <!--  <select name="grade">
        <option value="<?php echo set_value('A'); ?>">A</option>
        <option value="<?php echo set_value('A-'); ?>">A-</option>
        <option value="<?php echo set_value('B+'); ?>">B+</option>
        <option value="<?php echo set_value('B'); ?>">B</option>
        <option value="<?php echo set_value('B-'); ?>">B-</option>
        <option value="<?php echo set_value('C+'); ?>">C+</option>
        <option value="<?php echo set_value('C'); ?>">C</option>
        <option value="<?php echo set_value('C-'); ?>">C-</option>
    </select> -->
</div>




<div class="form-group">
    <span class="required"><?php echo form_error('optScore'); ?></span>
    <label for="optScore" class="control-label">SPEAK/OPT Score</label>
    <input id="optScore" placeholder="5" class="form-control" type="text" name="optScore" maxlength="2" value="<?php echo set_value('optScore'); ?>"  />

    

</div>
<div class="form-group">
    <span class="required"><?php echo form_error('optWhen'); ?></span>
    <label for="optWhen" class="control-label">Date of last OPT test (YYYY-MM-DD)</label>
    <input id="optWhen" class="datepicker form-control" type="text" name="optWhen"  placeholder="YEAR-MONTH-DAY" value="<?php echo set_value('optWhen'); ?>"  />
    
</div>
<div class="form-inline">
    <span class="required"><?php echo form_error('GATO'); ?></span>
    <label for="GATO">Participated in GATO<span class="required">*</span> &nbsp;</label>
    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <label for="GATO" class="radio">
        <input id="GATO" name="GATO" type="radio" class="form-control" value="1" <?php echo $this->form_validation->set_radio('GATO', '1'); ?> />
        Requirement Met
    </label>
    <label for="GATO" class="radio">
        <input id="GATO" name="GATO" type="radio" class="form-control" value="0" <?php echo $this->form_validation->set_radio('GATO', '0'); ?> />
        Will Attend in Aug/Jan
    </label>
    
</div>

<div class="form-inline">
    <span class="required"><?php echo form_error('SPEAK'); ?></span>
    <label for="SPEAK">Taken SPEAK Test <span class="required">*</span>&nbsp;</label>

    <label for="SPEAK" class="radio">
        <input id="SPEAK" name="SPEAK" type="radio" class="form-control" value="1" <?php echo $this->form_validation->set_radio('SPEAK', '1'); ?> />
        Requirement Met
    </label>
    <label for="SPEAK" class="radio">
        <input id="SPEAK" name="SPEAK" type="radio" class="form-control" value="0" <?php echo $this->form_validation->set_radio('SPEAK', '0'); ?> />
        Not Met (Enter Date Below)
    </label>
    

</div>

<div class="form-group">
    <span class="required"><?php echo form_error('SPEAKdate'); ?></span>
    <label for="SPEAKdate" class="control-label">SPEAK Assigned Date (YYYY-MM-DD)</label>

    <input id="SPEAKdate" class="datepicker form-control" type="text" name="SPEAKdate" placeholder="YEAR-MONTH-DAY"  value="<?php echo set_value('SPEAKdate'); ?>"  />
    

</div>

<div class="form-inline">
    <span class="required"><?php echo form_error('ONITA'); ?></span>
    <label for="ONITA" class="control-label">ONITA requirement (international students)</label>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <label for="ONITA" class="radio">
        <input id="ONITA" name="ONITA" type="radio" class="form-control" value="1" <?php echo $this->form_validation->set_radio('ONITA', '1'); ?> />
        Requirement Met
    </label>
    <label for="ONITA" class="radio">
        <input id="ONITA" name="ONITA" type="radio" class="form-control" value="0" <?php echo $this->form_validation->set_radio('ONITA', '0'); ?> />
        Will Attend in Aug/Jan
    </label>
    

</div>
<div class="form-group">
      <span class="required"><?php echo form_error('ONITA_date'); ?></span>
    <label for="ONITA_date" class="control-label">ONITA Assigned Date</label>

    <input id="ONITA_date" class="datepicker form-control" type="text" name="ONITA_date" placeholder="YEAR-MONTH-DAY"  value="<?php echo set_value('ONITA_date'); ?>"  />
  

</div>





<div class="form-group">
    <label></label>
    <hr/>

    <center><?php echo form_submit( 'submit', 'Submit'); ?></center>

</div>
<?php echo form_close(); ?>
</div>
</div>


</body>