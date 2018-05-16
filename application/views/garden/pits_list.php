<div id="content-wrapper">
					<div class="row" style="opacity: 1;">
						<div class="col-lg-12">
							
							<div class="row">
								<div class="col-lg-12">
									<ol class="breadcrumb">
										<li><a href="<?php echo base_url() ?>">Dashboard</a></li>
										<li class="active"><span>Todas as PITs</span></li>
									</ol>
									
									<h1>Pedido de Trabalho</h1>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2 class="pull-left">PITs</h2>
											<div class="filter-block pull-right">
												<a href="<?php echo base_url('welcome/index_set_pits') ?>" class="btn btn-primary pull-left">
													<i class="fa fa-plus-circle fa-lg"> Adicionar</i>
												</a>
											</div>
										</header>
										
										<div class="main-box-body clearfix">
											<div class="table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th>PIT</th>
															<th>Cliente | Título</th>
															<th>Situação</th>
															<th>Prazo</th>
															<th>&nbsp;</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach ($pits as $key => $value): ?>
															<tr>
																<td>
																	<?php echo '#AW'.$value->id ?>
																</td>
																<td>
																	<strong><?php echo $value->client_id ?></strong><br>
																	<?php echo $value->title ?>
																</td>
																<td>
																	<?php echo $value->situation_id ?>
																</td>
																<td>
																	<span class="label <?php echo get_situation_box($value->stop) ?>"><?php echo pit_date($value->stop) ?></span> | 
																			<?php echo pit_days($value->stop) ?>
																</td>
																<td style="width: 15%;">
																	<a href="<?php echo base_url('welcome/index_get_pit/'.$value->id) ?>" class="table-link">
																		<span class="fa-stack">
																			<i class="fa fa-square fa-stack-2x"></i>
																			<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
																		</span>
																	</a>
																	<a href="<?php echo base_url('welcome/index_edit_pit/'.$value->id) ?>" class="table-link">
																		<span class="fa-stack">
																			<i class="fa fa-square fa-stack-2x"></i>
																			<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
																		</span>
																	</a>
																	<a href="<?php echo base_url('deleters/del_pit/'.$value->id) ?>" class="table-link danger">
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