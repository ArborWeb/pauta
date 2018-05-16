<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Pauta - Garden System of a Down</title>
	</head>
	<body>
		<div id="theme-wrapper">
			<header class="navbar" id="header-navbar">
				<!-- header menu -->
<div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
					<ul class="nav navbar-nav pull-left">
						<li>
							<a href="<?php echo base_url() ?>">Dashboard</a>
						</li>
						<li class="dropdown hidden-xs">
							<a class="btn dropdown-toggle" data-toggle="dropdown">
								PITs
								<i class="fa fa-caret-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li class="item">
									<a href="<?php echo base_url('welcome/index_open_pits') ?>">
										Abertas
									</a>
								</li>
								<li class="item">
									<a href="<?php echo base_url('welcome/index_close_pits') ?>">
										Fechadas
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown hidden-xs">
							<a class="btn dropdown-toggle" data-toggle="dropdown">
								Campanhas
								<i class="fa fa-caret-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li class="item">
									<a href="<?php echo base_url('welcome/index_open_campaings') ?>">
										Abertas
									</a>
								</li>
								<li class="item">
									<a href="<?php echo base_url('welcome/index_close_campaings') ?>">
										Fechadas
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- end header menu -->
			</header>