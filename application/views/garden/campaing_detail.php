
				<div id="content-wrapper">
					<div class="row">
						<div class="col-lg-12">
							
							<div class="row">
								<div class="col-lg-12">
									<ol class="breadcrumb">
										<li><a href="<?php echo base_url() ?>">Dashboard</a></li>
										<li class="active"><span>Pedido de Trabalho #AW<?php echo $campaing->id ?></span></li>
									</ol>
									
									<h1>campaing #AW<?php echo $campaing->id ?></h1>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-8">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2><?php echo $campaing->title ?> | <span class="emerald"><?php echo $campaing->client_id ?></span></h2>
											<br><br>
											<div class="desc">
												<?php echo $campaing->description ?>
											</div>
											<br><br>
											<small class="gray">Usuário responsável: <span class="emerald"><?php echo $campaing->user_id ?></span></small>
										</header>
										
										<div class="main-box-body clearfix">
											
											<ul id="search-results">
												<li>
													<h4 class="title">Início: <?php echo pit_date($campaing->start) ?></h4>
													<h4 class="title">Prazo: <?php echo pit_date($campaing->stop) ?></h4>
													<div class="link-title">
														<?php echo $campaing->situation_id ?>
													</div>
												</li>
											</ul>
											
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>