					<div id="content-wrapper">
						<div class="row">
							<div class="col-lg-12">
								<div class="row">
									<div class="col-lg-12">
										<div id="content-header" class="clearfix">
											<div class="pull-left">
												<ol class="breadcrumb">
													<li><a href="<?php echo base_url() ?>"><span>Dashboard</span></a></li>
													<li class="active"><span>Adicionar PIT</span></li>
												</ol>
												<h1>Adicionar Pedido de Trabalho</h1>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<form action="<?php echo base_url('setters/set_pit') ?>" method="post">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="main-box clearfix">
												<header class="main-box-header">
													<h2>PIT</h2>
												</header>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label>Clientes</label>
														<select name="client" class="form-control" id="clients">
														<option value=""></option>
															<?php foreach ($clients as $key => $value): ?>
																<option value="<?php echo $value->id ?>"><?php echo $value->name ?></option> 
															<?php endforeach ?>
														</select>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label for="start">Data</label>
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															<input value="<?php echo date('d/m/Y') ?>" name="start" type="text" class="form-control" id="start">
														</div>
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label for="title">Título</label>
														<input type="text" class="form-control" id="title" name="title">
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label for="description">Descrição</label>
														<textarea name="description" class="form-control" id="description" rows="6"></textarea>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label>Campanha</label>
														<select name="campaing" class="form-control" id="campaings">
														<option value=""></option>
															<?php foreach ($campaings as $key => $value): ?>
																<option value="<?php echo $value->id ?>"><?php echo $value->title ?></option> 
															<?php endforeach ?>
														</select>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label for="prize">Prazo</label>
														<div class="input-group" data-date-format="dd-mm-yyyy">
															<input name="prize" type="text" class="form-control" id="prize" readonly="">
															<span class="input-group-addon"><i class="fa fa-th"></i></span>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label>Situação</label>
														<select name="situation" class="form-control" id="campaings">
																<option value="6r">Em Andamento</option> 
															<?php foreach ($situations as $key => $value): ?>
																<option value="<?php echo $value->id ?>"><?php echo $value->title ?></option> 
															<?php endforeach ?>
														</select>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="form-group col-md-12">
														<label for="user">Usuário</label>
														<input name="user" class="form-control" id="user" type="text" value="<?php echo 'Guilherme' ?>">
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