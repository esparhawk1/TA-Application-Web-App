<html>
<head>
    <?php
    if($this->session->userdata('user_name') == "")    
        redirect("http://php-sweteame.rhcloud.com/");
    ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
	    <link href="../../bootstrap/css/heroic-features.css" rel="stylesheet">

    <style>
        body {
            background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            padding-top: 70px;
        }
        .box
        {
            background-color: white;
            margin-top: 50px;

        }
        .table
        {
        	position: relative;
        	top: 20px;
        	bottom: 20px;
        }
        .big
        {
        	font-size: 18px;
        	color:blue;
        }
    </style>
</head>
<body>
<div class = "container ">
	        <header class="jumbotron hero-spacer">

<?php 
	if ($app_course == "")
	echo "There is no applicant for this course";
	else
	{
	foreach ($app_course as $item):
		echo "<table class = 'table table-bordered'>";
	 	foreach($item as $key => $value):
	 		// if($key == "appID")
	 		// 	$user = $value;
			// echo "<li>".$key." => ".$value."</li>";
			if(($key == "appID") || ($key == "postition") || ($key == "username"))
			{}
			else{
			echo "<tr>";
			echo "<td class = 'big'>".$key."</td>";
			echo "<td>".$value."</td>";
			echo "</tr>";
			}
			if($key == 'appID')
				$hidden_appID = $value;
			if($key == 'username')
				$hidden_username = $value;
			if($key == 'courseID')
				$hidden_coursename = $value;
	 	endforeach;
	 	echo form_open('Admin_controller/enter_score');
	 	// echo form_input('user',$user);
	 	echo "<tr class = 'success'><td><strong>Enter Score</strong> ";
	 	echo form_input('score','')."</td>";
	 	// echo "Assign this applicant be TA"
	 	// echo form_input('assign','');
	 	echo form_hidden('appID',$hidden_appID);
	 	$data = array(
	 		'name' => 'submit',
	 		'value' => 'submit',
	 		'class' => 'btn btn-primary',
	 		'onclick' => 'feedback1()',);
	 	echo "<td>".form_submit($data)."</td></tr>";
	 	echo form_close();
	 	echo form_open('Admin_controller/assign_ta_to_this_course');
	 	echo "<tr class = 'success'><td><strong>Assign this applicant be TA </strong></td>";
	 	echo form_hidden('username',$hidden_username);
	 	echo form_hidden('coursename',$hidden_coursename);
	 	$data = array(
	 		'name' => 'submit',
	 		'value' => 'assign',
	 		'class' => 'btn btn-primary',
	 		'onclick' => 'feedback2()',
	 		);
	 	echo "<td>".form_submit($data)."</td></tr>";
	 	echo form_close();
	 	echo "</table>";
	 endforeach;
	}
?>
	                    <script>
                    function feedback1()
                    {
                        alert("The score has been submitted!");
                    }
                     function feedback2()
                    {
                        alert("You have assigned this person to be TA");
                    }
                    </script>
</div>
</body>
</html>