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

        .table
        {
        	position: relative;
        	top: 20px;
        	bottom: 20px;
        }
    </style>

</head>
<body>
	<div class = "container">
        <header class="jumbotron hero-spacer">
<table class = "table table-bordered">
	<tr class = "warning">
		<td>CourseID</td>
		<td>TA</td>
		<td>CourseName</td>
		<td>View</td>
	</tr>
<?php $counter = 0;$sb;foreach ($course as $item):?>
<?php 
	if ($counter%3 == 0)
	{
		echo "<tr>";
	echo "<td> ".$item."</td>";
	$sb = $item;
	}
	else if ($counter%3 == 1)
	{
		echo "<td>".$item."</td>";
	}
	else{
		echo"<td>";
		echo $item."</td>";
	echo form_open('Admin_controller/assign_ta_to_course');
	echo form_hidden('courseID',$sb);
		echo"<td>";
		$data = array(
			'name' => 'submit',
			'value' => 'View this Course Applicant',
			'class' => 'btn btn-primary',
			);
	echo form_submit($data);
		echo"</td>";
	echo form_close();
		echo"</tr>";
	}
	$counter = $counter + 1;
	?>
<?php endforeach;?>
</table>
</header>
</div>
</body>
</html>

