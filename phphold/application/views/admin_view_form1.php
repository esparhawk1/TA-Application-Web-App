<!DOCTYPE html>
<html>
<head>
	    <?php
    if($this->session->userdata('user_name') == "")    
        redirect("http://php-sweteame.rhcloud.com/");
    ?>
	    <link href="../../bootstrap/css/heroic-features.css" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />    
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
    </style>
</head>
<body>
<div class = "container ">
	        <header class="jumbotron hero-spacer">

<table class = "table table-bordered">
	<tr class = "warning">
		<td>Username</td>
		<td>View</td>
		<td>Make Comment</td>
		<td>Your Comment</td>
	</tr>
<?php $counter = 0;foreach ($userinfo as $item):?>
<?php 
	if ($counter%2 == 0)
	{
	echo "<tr>";
	echo form_open('Admin_controller/view_form2');
	echo "<td>".$item."</td>";
	echo form_hidden('username',$item);
	$data = array(
		'name' => 'submit',
		'value' => 'View this Applicant',
		'class' => 'btn btn-primary',);
	echo "<td>".form_submit($data)."</td>";
	echo form_close();
	echo form_open('Admin_controller/make_comment');
	echo form_hidden('username',$item);
	$data = array(
		'name' => 'submit',
		'value' => 'View and Make Comment',
		'class' => 'btn btn-info',);
	echo "<td>".form_submit($data)."</td>";
	echo form_close();
	}
	else{
	echo "<td>".$item."</td>";
	echo "</tr>";
	}
	$counter = $counter + 1;
	?>
<?php endforeach;?>
</table>
</header>
</div>
</body>
</html>



