
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
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2><?php echo $pit->title ?> | <span class="emerald"><?php echo $pit->client_id ?></span></h2>
											<h4>Descrição:</h4>
											<div class="desc">
												<?php echo $pit->description ?>
											</div>
											<small class="gray">Usuário responsável: <span class="emerald"><?php echo $pit->user_id ?></span></small>
										</header>
										
										<div class="main-box-body clearfix">
											
											<ul id="search-results">
												<li>
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
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<form id="set_interaction" method="post">
										<div class="main-box clearfix">
											<header class="main-box-header">
												<h2>Comentar</h2>
											</header>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="form-group col-md-12">
													<label for="comment">Comentário</label>
													<textarea class="form-control" name="comment" id="comment" cols="30" rows="2"></textarea>
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="form-group">
													<div class="col-lg-10">
														<input required class="btn btn-success" id="submit" onclick="set_comment(<?php echo $pit->id ?>)" type="button" value="Adicionar Interação">
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
											<h2>Comentários</h2>
										</header>

										<div class="main-box-body clearfix">
											<div class="table-responsive">
												<table class="table user-list table-hover">
													<thead>
														<tr>
															<th><span>Descrição</span></th>
															<th><span>data</span></th>
															<th></th>
														</tr>
													</thead>
													<tbody id="tbody">
														<?php foreach ($comments as $key => $value): ?>
															<tr>
																<td><?php echo set_enters($value->comment) ?></td>
																<td><?php echo br_date($value->time) ?></td>
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