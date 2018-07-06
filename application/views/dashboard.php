					<div id="content-wrapper">
						<div class="row">
							<div class="col-lg-12">
								<div class="row">
									<div class="col-lg-12">
										<div id="content-header" class="clearfix">
											<div class="pull-left">
												<ol class="breadcrumb">
													<li class="active"><span>Dashboard</span></li>
												</ol>
												
												<h1>Dashboard</h1>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
										<div class="main-box feed">
											<header class="main-box-header clearfix">
												<h2 class="pull-left">Anotações</h2>
											</header>
											<div class="main-box-body clearfix">
												<div class="filter-block pull-left">
													<form action="<?php echo base_url('setters/set_note') ?>" method="post">
														<div class="form-group pull-left">
															<textarea type="text" name="note" class="form-control" placeholder="Nota.."></textarea>
														</div>
														<button type="submit" class="btn btn-primary">Salvar</button>
													</form>
												</div>
												<div style="clear:both"></div>
												<ul>
													<?php foreach ($notes as $key => $value): ?>
														<li class="clearfix">
															<div>
																<?php echo $value->description ?>
																<a href="<?php echo base_url('deleters/del_note/'.$value->id) ?>" class="table-link danger pull-right">
																	<span class="fa-stack">
																		<i class="fa fa-square fa-stack-2x"></i>
																		<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
																	</span>
																</a>
															</div>
															<div>
																<strong><?php echo br_date($value->date) ?></strong>
															</div>
														</li>
													<?php endforeach ?>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
										<div class="main-box clearfix">
											<header class="main-box-header clearfix">
													<h2>
														Pedidos de Trabalho
														<a href="<?php echo base_url('welcome/index_set_pits') ?>" class="table-link pull-right">
															<span class="fa-stack">
																<i class="fa fa-square fa-stack-2x"></i>
																<i class="fa fa-plus fa-stack-1x fa-inverse"></i>
															</span>
														</a>
													</h2>
											</header>
											
											<div class="main-box-body clearfix">
												<div class="table-responsive clearfix">
													<table class="table table-hover">
														<thead>
															<tr>
																<th><span>Pit</span></th>
																<th><span>Data</span></th>
																<th><span>Title</span></th>
															</tr>
														</thead>
														<tbody>
															<?php foreach ($pits as $key => $value): ?>
																<tr>
																	<td>
																		<a href="<?php echo base_url('welcome/index_get_pit/'.$value->id) ?>">#AW<?php echo $value->id ?></a>
																	</td>
																	<td class="text-center">
																		<span class="label <?php echo get_situation_box($value->stop) ?>"><?php echo pit_date($value->stop) ?></span> | 
																			<?php echo pit_days($value->stop) ?>
																	</td>
																	<td>
																		<strong><?php echo $value->client_id ?></strong><br>
																		<?php echo $value->title ?>
																	</td>
																</tr>
															<?php endforeach ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
										<div class="row">
											<div class="main-box clearfix">
												<header class="main-box-header clearfix">
													<h2>
														Campanhas
														<a href="<?php echo base_url('welcome/index_set_Campaing') ?>" class="table-link pull-right">
															<span class="fa-stack">
																<i class="fa fa-square fa-stack-2x"></i>
																<i class="fa fa-plus fa-stack-1x fa-inverse"></i>
															</span>
														</a>
													</h2>
												</header>
												
												<div class="main-box-body clearfix">
													<div class="table-responsive">
														<table class="table user-list table-hover">
															<thead>
																<tr>
																	<th><span>Title</span></th>
																	<th><span>Próxima Movimentação</span></th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
																<?php foreach ($interactions as $key => $value): ?>
																	<tr>
																		<td>
																			<?php echo $value->title ?>
																		</td>
																		<td class="text-center">
																			<span class="label <?php echo get_situation_box($value->date) ?>"><?php echo pit_date($value->date) ?></span> | 
																			<?php echo interactions_days($value->date) ?>
																		</td>
																		<td>
																			<a href="<?php echo base_url() ?>" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-square fa-stack-2x"></i>
																					<i class="fa fa-check fa-stack-1x fa-inverse"></i>
																				</span>
																			</a>
																			<a href="<?php echo base_url('deleters/del_note/'.$value->id) ?>" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-square fa-stack-2x"></i>
																					<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																<?php endforeach ?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>