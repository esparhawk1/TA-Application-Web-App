<!DOCTYPE html>
<html>

<head>
	    <?php
    if($this->session->userdata('user_name') == "")    
        redirect("http://php-sweteame.rhcloud.com/");
    ?>
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../bootstrap/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
	<div class = "container">
	<h2>Announcement</h2>
	<div class="row">
	<?php
	$counter = 0;
	$num;
	foreach ($ss as $key => $value) {
		switch($counter%6)
		{
			case 0 :
				echo "<div class='col-sm-12'>";
				$num = $value;
				break;
			case 1 :
				echo "".$value." <br>Post on:";
				break;
			case 2 :
				echo $value."/";
				break;
			case 3 :
				echo $value." ";
				break;
			case 4 :
				echo $value.":";
				break;
			case 5 :
				echo $value;
				if($er == 1)
				{
					echo form_open('Admin_controller/erase_announcement');
					echo form_hidden('ID',$num);
					$data = array(
						'name' => 'erase',
						'value' => 'Erase',
						'class' => 'btn btn-primary',);
					echo form_submit($data);
					echo form_close();
				}
				echo "</div>";
				break;

		}
		$counter = $counter + 1;
	}
	?>
	</div>
</div>
</header>
</body>
</html>



