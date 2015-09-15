<!DOCTYPE html>
<html>
<head>
	    <?php
    if($this->session->userdata('user_name') == "")    
        redirect("http://php-sweteame.rhcloud.com/");
    ?>
<meta charset=UTF-8>
<div align = "center">
<title>Welcome to apply TA/PLA</title>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
</head>
<body>
	<div align = "center">
		<h1>The time is passed</h1>
</div>
</form>
</body>
</html>