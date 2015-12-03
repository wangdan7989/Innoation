

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<a href="#">项目管理</a>
							</li>

							<li>
								<a href="#">项目申报</a>
							</li>
							<li class="active">审核发布</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>
					<div class="page-content">
						<div class="page-header">
							<h1>
								审核发布
								<small>
									<i class="icon-double-angle-right"></i>
									详细信息
								</small>
							</h1>
						</div><!-- /.page-header -->
						<div class="col-sm-12">
							<div class="tabbable">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active">
										<a data-toggle="tab" href="#set">
											立项阶段
											<span class="badge badge-danger">4</span>
										</a>
									</li>

									<li>
										<a data-toggle="tab" href="#check">
											审核阶段
											<span class="badge badge-danger">4</span>
										</a>
									</li>

									
								</ul>

								<div class="tab-content">
									<div id="set" class="tab-pane in active">
										<div class="table-header">
											申请立项的项目
										</div>
										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>项目名称</th>
														<th>团队名称</th>
														<th class="hidden-480">项目类型</th>

														
														<th class="hidden-480">项目经费</th>
														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															最近更新
														</th>
														<th>项目负责人</th>
													</tr>
												</thead>

												<tbody>
												<?php 
													if(count($pro_data,1)>0){
														
														for($i=0;$i<count($pro_data);$i++){
												?>
													<tr>
		

														<td>
															<a href="<?php if(strcasecmp($_SESSION['identity'],"administrator")==0){
																				echo site_url()."/Show_project/administrator_show_projectstate/".$pro_data[$i]['p_id'];
																			}
																			if(strcasecmp($_SESSION['identity'],"student")==0){
																				echo site_url()."/Show_project/show_projectstate/".$pro_data[$i]['p_id'];
																			}
																?>"><?php echo $pro_data[$i]['p_name'];?></a>
														</td>
														<td><?php echo $pro_data[$i]['team_name']?></td>
														<td class="hidden-480"><?php echo $pro_data[$i]['type'];?></td>
														<td><?php echo $pro_data[$i]['fund'];?></td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
												<?php 
													}
														}
												?>
													
												</tbody>
											</table>
										</div>

									</div>

									<div id="check" class="tab-pane">
										
										<div class="table-header">
											未审核的项目
										</div>
										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>项目名称</th>
														<th>项目类型</th>
														<th class="hidden-480">项目经费</th>
														<th>人数限制</th>
														<th>																								立项截止时间
														</th>
														<th class="hidden-480">项目创建者</th>
														
													</tr>
												</thead>

												<tbody>
												<?php 
							
													if(count($post_data)>0){
														for($i=0;$i<count($post_data);$i++){
													
													?>
													<tr>
														

														<td>
															<a href="<?php 
															if(strcasecmp($_SESSION['identity'],"administrator")==0){
																				echo site_url()."/Show_project/administrator_show_projectstate/".$post_data[$i]['p_id'];
																			}
																			if(strcasecmp($_SESSION['identity'],"student")==0){
																				echo site_url()."/Show_project/show_projectstate/".$post_data[$i]['p_id'];
																			}
															?>"><?php echo $post_data[$i]['p_name'];?></a>
														</td>
														<td><?php echo $post_data[$i]['type']?></td>
														<td class="hidden-480"><?php echo $post_data[$i]['fund']?></td>
														<td><?php echo $post_data[$i]['max_member']?></td>

														<td class="hidden-480">
															<span class="label label-sm label-warning"><?php echo $post_data[$i]['project_deadline']?></span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
													<?php
													}
														}
													?>
								
												</tbody>
											</table>
										</div>

									</div>
								</div>
							</div>
						</div><!-- /span -->
					</div>
				</div><!-- /.main-content -->



		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		
		<!-- <![endif]-->


		<script src="<?php echo $base."/js/bootstrap.min.js";?>"></script>
		<script src="<?php echo $base."/js/typeahead-bs2.min.js";?>"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="<?php echo $base."/js/jquery-ui-1.10.3.custom.min.js";?>"></script>
		<script src="<?php echo $base."/js/jquery.ui.touch-punch.min.js";?>"></script>
		<script src="<?php echo $base."/js/jquery.slimscroll.min.js";?>"></script>
		<script src="<?php echo $base."/js/jquery.easy-pie-chart.min.js";?>"></script>
		<script src="<?php echo $base."/js/jquery.sparkline.min.js";?>"></script>
		<script src="<?php echo $base."/js/flot/jquery.flot.min.js";?>"></script>
		<script src="<?php echo $base."/js/flot/jquery.flot.pie.min.js";?>"></script>
		<script src="<?php echo $base."/js/flot/jquery.flot.resize.min.js";?>"></script>

		<!-- ace scripts -->

		<script src="<?php echo $base."/js/ace-elements.min.js";?>"></script>
		<script src="<?php echo $base."/js/ace.min.js";?>"></script>

		<!-- inline scripts related to this page -->


