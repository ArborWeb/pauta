					<div id="content-wrapper">
						<div class="row">
							<div class="col-lg-12">
								<div class="row">
									<div class="col-lg-12">
										<div id="content-header" class="clearfix">
											<div class="pull-left">
												<ol class="breadcrumb">
													<li><a href="<?php echo base_url() ?>"><span>Dashboard</span></a></li>
													<li class="active"><span>Editar Campanha</span></li>
												</ol>
												<h1>Editar Campanha</h1>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<form action="<?php echo base_url('editters/edit_campaing') ?>" method="post">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="main-box clearfix">
												<header class="main-box-header">
													<h2>Campanha</h2>
												</header>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label>Clientes</label>
														<select name="client" class="form-control" id="clients">
															<?php foreach ($clients as $key => $value): ?>
																<option <?php echo ($campaing->client_id === $value->name) ? 'selected' : '' ; ?> value="<?php echo $value->id ?>"><?php echo $value->name ?></option> 
															<?php endforeach ?>
														</select>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label for="start">Data</label>
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															<input value="<?php echo pit_date($campaing->start) ?>" name="start" type="text" class="form-control" id="start">
														</div>
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label for="title">Título</label>
														<input type="text" class="form-control" id="title" value="<?php echo $campaing->title ?>" name="title">
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label for="description">Descrição</label>
														<textarea name="description" class="form-control" id="description" rows="6"><?php echo $campaing->description ?></textarea>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label for="prize">Prazo</label>
														<div class="input-group" data-date-format="dd-mm-yyyy">
															<input value="<?php echo pit_date($campaing->stop) ?>" name="prize" type="text" class="form-control" id="prize" readonly="">
															<span class="input-group-addon"><i class="fa fa-th"></i></span>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label>Situação</label>
														<select name="situation" class="form-control" id="campaings">
															<?php foreach ($situations as $key => $value): ?>
																<option <?php echo ($campaing->situation_id === $value->title) ? 'selected' : '' ; ?> value="<?php echo $value->id ?>"><?php echo $value->title ?></option> 
															<?php endforeach ?>
														</select>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label for="user">Usuário</label>
														<input name="user" class="form-control" id="user" type="text" value="<?php echo $campaing->user_id ?>">
														<input name="id" class="form-control" id="id" type="hidden" value="<?php echo $campaing->id ?>">
													</div>
												</div>
											</div>
										</div>
										<!--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="main-box clearfix">
												<header class="main-box-header">
													<h2>Tarefas</h2>
													<button type="submit" class="btn btn-success">Adicionar Tarefa</button>
												</header>
												<div class="task_model">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="form-group col-md-12">
															<label for="title">Título</label>
															<input type="text" class="form-control" id="title" name="title">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="form-group col-md-12">
															<label for="prize">Prazo</label>
															<div class="input-group" data-date-format="dd-mm-yyyy">
																<input type="text" class="form-control" id="prize" readonly="">
																<span class="input-group-addon"><i class="fa fa-th"></i></span>
															</div>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="form-group col-md-12">
															<label>Situação</label>
															<select class="form-control" id="campaings">
																	<option value="Em Andamento">Em Andamento</option> 
																<?php foreach ($situations as $key => $value): ?>
																	<option value="<?php echo $value->id ?>"><?php echo $value->title ?></option> 
																<?php endforeach ?>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>-->
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="form-group">
												<div class="col-lg-10">
													<button type="submit" class="btn btn-success">Criar Pedido</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>