<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminPANEL | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()."tmp/public/";?>css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."tmp/public/";?>/css/AdminLTE.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()."tmp/public/";?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo base_url()."tmp/public/";?>plugins/timepicker/bootstrap-timepicker.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  
  <?php require_once "header.php"; ?>
  <!-- Left side column. contains the logo and sidebar -->
  
	<?php require_once "sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  	<?php
	require_once DIR_MODULES . $_web['uri']['mod'] . "/view/" . $this->_fileView . ".php";
	 ?>
  <!-- /.content-wrapper -->
	

	<?php require_once "footer.php"; ?>



 
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script type="text/javascript" src="<?php echo base_url()."tmp/public/";?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script type="text/javascript" src="<?php echo base_url()."tmp/public/";?>plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script type="text/javascript" src="<?php echo base_url()."tmp/public/";?>js/bootstrap.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script type="text/javascript" src="<?php echo base_url()."tmp/public/";?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."tmp/public/";?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script type="text/javascript" src="<?php echo base_url()."tmp/public/";?>js/dashboard.js"></script>
<script type="text/javascript" src="<?php echo base_url()."tmp/public/";?>js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url()."tmp/public/";?>js/demo.js"></script>
</body>
</html>