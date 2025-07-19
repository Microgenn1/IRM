<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		<?php echo $_SESSION['HotelName']; ?>
	</title>
	<?php
	header("Pragma-directive: no-cache");
	header("Cache-directive: no-cache");
	header("Cache-control: no-cache");
	header("Pragma: no-cache");
	header("Expires: 0");
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="<?php echo scs_url ?>css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo scs_url ?>css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo scs_url ?>css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo scs_url ?>css/icon.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo scs_url ?>css/font.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo scs_url ?>css/app.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo scs_url ?>ui/jquery-ui.css" type="text/css" />
	<?php

	include 'app/theme.php';

	?>
	<style>
		.header-md .navbar-nav>li>a:hover {
			color: #fff !important;
			background: var(--secondary-bg-color);
		}
	</style>
</head>

<body>