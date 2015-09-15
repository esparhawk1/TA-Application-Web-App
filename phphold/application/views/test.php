<!DOCTYPE html>
<html>
<head>
<title><?php echo $user_name;?></title>
    <link href="../../bootstrap/css/countdown.css" rel="stylesheet">
	<script type="text/javascript" src="../../bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="../../bootstrap/js/countdown.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
		
			$("#countdown").countdown({
				date: "10 may 2015 0:00:00", // add the countdown's end date (i.e. 3 november 2012 12:00:00)
				format: "on" // on (03:07:52) | off (3:7:52) - two_digits set to ON maintains layout consistency
			},
			
			function() { 
				
				// the code here will run when the countdown ends
				alert("done!") 
 
			});
		});
	</script>

</head>
<body>
	<h1>#<?php echo $this->session->userdata('user_name');?></h1>
	<?php
	$query = $this->session->all_userdata();
	 foreach($query as $key => $row)
            {
                echo $key."=>".$row;
                echo "<br>";
            }
	?>



	<h1> $<?php echo $this->input->post('coursename')?></h1>
	<br>
	<h1>$<?php echo $this->input->post('username');?></h1>
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
</body>
</html>