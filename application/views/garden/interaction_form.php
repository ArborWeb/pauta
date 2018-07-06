					<div id="content-wrapper">
						<div class="row">
							<div class="col-lg-12">
								<div class="row">
									<div class="col-lg-12">
										<div id="content-header" class="clearfix">
											<div class="pull-left">
												<ol class="breadcrumb">
													<li><a href="<?php echo base_url() ?>"><span>Dashboard</span></a></li>
													<li class="active"><span>Adicionar Interação</span></li>
												</ol>
												<h1><?php echo '#AWC'.$campaing->id.' - '.$campaing->client_id.' | <strong>'.$campaing->title.'</strong>' ?></h1>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<form id="set_interaction" action="<?php echo base_url('setters/set_pit') ?>" method="post">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="main-box clearfix">
												<header class="main-box-header">
													<h2>Interação</h2>
												</header>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label for="date">Data</label>
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															<input required value="<?php echo date('d/m/Y') ?>" name="date" type="text" class="form-control" id="date">
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
										</div>
									</form>
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
																	<th><span>Cliente</span></th>
																	<th><span>Próxima Movimentação</span></th>
																	<th></th>
																</tr>
															</thead>
															<tbody id="tbody">
															
															</tbody>
														</table>
													</div>
												</div>
										</div>
									</div>
								</div>
							</div>
						</div>