
				<div id="content-wrapper">
					<div class="row">
						<div class="col-lg-12">
							
							<div class="row">
								<div class="col-lg-12">
									<ol class="breadcrumb">
										<li><a href="<?php echo base_url() ?>">Dashboard</a></li>
										<li class="active"><span>Pedido de Trabalho #AW<?php echo $pit->id ?></span></li>
									</ol>
									
									<h1>PIT #AW<?php echo $pit->id ?></h1>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-8">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2><?php echo $pit->title ?> | <span class="emerald"><?php echo $pit->client_id ?></span></h2>
													<div class="desc">
														<?php echo $pit->description ?>
													</div>
											<small class="gray">Usuário responsável: <span class="emerald"><?php echo $pit->user_id ?></span></small>
										</header>
										
										<div class="main-box-body clearfix">
											
											<ul id="search-results">
												<li>
													<h4 class="title">Campanha: <?php echo $pit->campaing_id ?></h4>
													<h4 class="title">Início: <?php echo pit_date($pit->start) ?></h4>
													<h4 class="title">Prazo: <?php echo pit_date($pit->stop) ?></h4>
													<div class="link-title">
														<?php echo $pit->situation_id ?>
													</div>
												</li>
											</ul>
											
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>