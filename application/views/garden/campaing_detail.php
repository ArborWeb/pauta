
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
								<div class="col-lg-6">
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
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<form id="set_interaction" method="post">
										<div class="main-box clearfix">
											<header class="main-box-header">
												<h2>Interação</h2>
											</header>
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<div class="form-group col-md-12">
													<label for="prize">Prazo</label>
													<div class="input-group" data-date-format="dd-mm-yyyy">
														<input name="prize" type="text" class="form-control" id="date" readonly="">
														<span class="input-group-addon"><i class="fa fa-th"></i></span>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<div class="form-group col-md-12">
													<label for="user">Usuário</label>
													<input name="user" class="form-control" id="user" type="text" value="<?php echo 'Guilherme' ?>">
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="form-group col-md-12">
													<label for="title">Título</label>
													<input required type="text" class="form-control" id="title" name="title">
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="form-group">
													<div class="col-lg-10">
														<input required class="btn btn-success" id="submit" onclick="set_interaction(<?php echo $campaing->id ?>)" type="button" value="Adicionar Interação">
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="form-group">
												</div>
											</div>

										</div>
									</form>
								</div>
								<div style="clear:both"></div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="main-box clearfix">
										<header class="main-box-header">
											<h2>Interações</h2>
										</header>

										<div class="main-box-body clearfix">
											<div class="table-responsive">
												<table class="table user-list table-hover">
													<thead>
														<tr>
															<th><span>Título</span></th>
															<th><span>data</span></th>
															<th></th>
														</tr>
													</thead>
													<tbody id="tbody">
														<?php foreach ($interactions as $key => $value): ?>
															<tr>
																<td><?php echo $value->title ?></td>
																<td><?php echo pit_date($value->date).' | '.pit_days($value->date) ?></td>
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