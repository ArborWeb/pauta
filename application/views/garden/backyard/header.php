<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Pauta - Gardem 1.1 | Pauta Module</title>
	</head>
	<body>
		<div id="theme-wrapper">
			<header class="navbar" id="header-navbar">
				<!-- header menu -->
				<div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs" style="display: contents;">
					<ul class="nav navbar-nav pull-left">
						<li>
							<a href="<?php echo base_url('welcome') ?>">Dashboard</a>
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
					<ul class="nav navbar-nav pull-right">
						<li><a style="cursor: initial;"><div id="time_display"></div></a></li>
						<li class="dropdown profile-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo $user->photo ?>" alt="">
								<span class="hidden-xs"><?php echo $user->name ?></span> <b class="caret"></b>
							</a>
							<ul class="dropdown-menu dropdown-menu-right">
								<li><a href="https://arborweb.com.br/db"><i class="fa fa-address-book"></i>Cadastros</a></li>
								<li><a href="https://arborweb.com.br/pauta"><i class="fa fa-check"></i>Pauta</a></li>
								<li><a href="https://arborweb.com.br/financial"><i class="fa fa-dollar-sign"></i>Financeiro</a></li>
								<li><a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-power-off"></i>Logout</a></li>
							</ul>
						</li>
						<li class="hidden-xxs">
							<a class="btn" href="<?php echo base_url('login/logout') ?>">
								<i class="fa fa-power-off"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- end header menu -->
			</header>