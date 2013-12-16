<?php
/*
	Document	:	app_header.php
	Created		:	10/12/2013	1.04PM
	Author 		:	chegzcol

*/

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<base href="<?php echo base_url(); ?>" />
		
		<link href="img/icon.jpg" rel="icon" type="image/x-icon" /> <!--favicon -->
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<!--story za google maps -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script> <!-- getting the free google API key -->
		<script src="js/googlemaps/googlemaps.js"  ></script> <!--usable javascript functions -->
		
		<link href="css/googlemaps/googlemaps.css" rel="stylesheet" type="text/css" > <!-- external css to google maps -->
		
		
		<!-- End of google maps -->

		<!-- Stylesheets -->
		<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="css/styler/style.css" rel="stylesheet">
		<link href="css/styler/font-awesome.min.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

  	<body cz-shortcut-listen="true">
	<header>
  			<div class="container-fluid">
  				<div id="branding" class="pull-left">
  					<?php echo anchor('landing','<h1 class="light no-margin">Findahome.co.ke</h1>'); ?>
  				</div>
				<div id="menu" class="pull-right">
					<?php 
						//top right corner menus
						
						echo  anchor('landing','Home'); echo ' | ';
						echo  anchor('blog','Blog');	echo ' | ';
						echo  anchor('signup','Signup');	echo ' | ';
						echo  anchor('login','Login');	echo ' | ';
						echo  anchor('contactus','Contact Us');	echo ' | ';
						echo  anchor('admin','admin');	echo ' | ';
						echo  anchor('submit_property','Submit Property');
					?>
				</div>
  				<button type="button" class="btn btn-flat btn-navbar-mobile pull-right hidden-desktop" data-toggle="collapse" data-target=".sidebar-left">
		            <span class="icon-reorder"></span>
		        </button>
  			</div>
  		</header>