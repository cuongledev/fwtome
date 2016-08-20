<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Mobile Demo</title>

	<!-- Load CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."tmp/public/";?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."tmp/public/";?>css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."tmp/public/";?>css/bootstrap.offcanvas.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."tmp/public/";?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."tmp/public/";?>css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url()."tmp/public/";?>css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url()."tmp/public/";?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."tmp/public/";?>css/style.min.css">

</head>

<body>

	<?php require_once "header.php"; ?>



	<?php
	require_once DIR_MODULES . $_web['uri']['mod'] . "/view/" . $this->_fileView . ".php";
	 ?>

	<?php require_once "footer.php"; ?>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."tmp/public/";?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."tmp/public/";?>js/bootstrap.offcanvas.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."tmp/public/";?>js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."tmp/public/";?>js/script.js"></script>
	

</body>
</html>

