<!DOCTYPE html>
<html>
<head>
    <?php
    if($this->session->userdata('user_name') == "")    
        redirect("http://php-sweteame.rhcloud.com/");
    ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
    <style>
        body {
            background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>
<body>

<h1> Computer Science Department </h1>
<h2> Applicants </h2>


<?php
	
	foreach ($applications as $row){
		foreach($row as $key => $value){
		echo "<li>".$key." => ".$value."</li>";
		}
		echo"-------------------------------------------------";
	 	echo "<br>";
	 	echo "<br>";
	}
	
?>

   



</body>

</html>
