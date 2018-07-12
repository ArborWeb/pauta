<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Cube - Bootstrap Admin Template</title>
	
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/') ?>css/bootstrap/bootstrap.min.css" />
	
	<!-- RTL support - for demo only -->
	<script src="<?php echo base_url('assets/template/') ?>js/demo-rtl.js"></script>
	<!-- 
	If you need RTL support just include here RTL CSS file <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/') ?>css/libs/bootstrap-rtl.min.css" />
	And add "rtl" class to <body> element - e.g. <body class="rtl"> 
	-->
	
	<!-- libraries -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/') ?>css/libs/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/') ?>css/libs/nanoscroller.css" />

	<!-- global styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/') ?>css/compiled/theme_styles.css" />

	<!-- this page specific styles -->

	<!-- google font libraries -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>
	
	<!-- Favicon -->
	<link type="image/x-icon" href="<?php echo base_url('assets/template/') ?>favicon.png" rel="shortcut icon"/>

	<!--[if lt IE 9]>
		<script src="<?php echo base_url('assets/template/') ?>js/html5shiv.js"></script>
		<script src="<?php echo base_url('assets/template/') ?>js/respond.min.js"></script>
	<![endif]-->
</head>
<body id="login-page-full">
	<div id="login-full-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div id="login-box">
						<div id="login-box-holder">
							<div class="row">
								<div class="col-xs-12">
									<header id="login-header">
										<div id="login-logo">
											<img src="<?php echo base_url('html/img/logo.png') ?>" alt=""/>
										</div>
									</header>
									<div id="login-box-inner">
										<form method="post" role="form" action="<?php echo site_url('login/autenticar') ?>">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<input name="user" class="form-control" type="text" placeholder="User">
											</div>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-key"></i></span>
												<input name="password" type="password" class="form-control" placeholder="Password">
											</div>
											<div class="row">
												<div class="col-xs-12">
													<button type="submit" class="btn btn-success col-xs-12">Login</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- global scripts -->
	<script src="<?php echo base_url('assets/template/') ?>js/demo-skin-changer.js"></script> <!-- only for demo -->
	
	<script src="<?php echo base_url('assets/template/') ?>js/jquery.js"></script>
	<script src="<?php echo base_url('assets/template/') ?>js/bootstrap.js"></script>
	<script src="<?php echo base_url('assets/template/') ?>js/jquery.nanoscroller.min.js"></script>
	
	<script src="<?php echo base_url('assets/template/') ?>js/demo.js"></script> <!-- only for demo -->
	
	<!-- this page specific scripts -->

	
	<!-- theme scripts -->
	<script src="<?php echo base_url('assets/template/') ?>js/scripts.js"></script>
	
	<!-- this page specific inline scripts -->
	
</body>
</html>