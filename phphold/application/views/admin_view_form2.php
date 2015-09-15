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
        	bottom: -20px;
        }
        .fix
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
	if ($application == "")
	echo "There is no application for this applicant";
	else
	{
		$counter = 1;
	foreach ($application as $item):
        foreach ($item as $key => $value) {
            if($key == "courseID")
		echo "<h3> This is application form for courseID:  </h3><h3 style='color=blue;'>".$value."</h3>";
        }
		echo "<table class = 'table table-bordered'>";
	 	foreach($item as $key => $value):
            if(($key == "appID") || ($key == "position") || ($key == "username"))
            {}
            else
            {
	 		echo "<tr>";
			echo "<td class ='fix'>".$key."</td>";
			echo "<td>".$value."</td>";
			echo "</tr>";
            }
	 	endforeach;
	 	$counter = $counter + 1;
	 	echo "</table>";
	 endforeach;
	}
?>
</header>
</div>
</body>
</html>