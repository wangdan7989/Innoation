

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
							<li class="active">报名参加</li>
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
								报名参加
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

									
								</ul>

								<div class="tab-content">
									<div id="set" class="tab-pane in active">
										<div class="table-header">
										火热报名中......
										</div>
										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>项目名称</th>
														<th>项目类型</th>
														<th class="hidden-480">人数限制</th>

														<th class="hidden-480">已报数目</th>
														<th>
															负责人
														</th>
													</tr>
												</thead>

												<tbody>
												<?php 
												if(count($data)>0){
														for($i=0;$i<count($data);$i++){
															
												?>
													<tr>
														<td>
															<a href="<?php echo base_url()."/index.php/user/show_projectstate/".$data[$i]['p_id'];?>"><?php echo $data[$i]['p_name'];?></a>
														</td>
														<td><?php echo $data[$i]['type'];?></td>
														<td class="hidden-480"><?php echo $data[$i]['max_member'];?></td>
														<td><?php echo $data[$i]['have_member'];?></td>

														<td class="hidden-480">
															<span class="label label-sm label-warning"><?php echo $data[$i]['created_by'];?></span>
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
							</div>
						</div><!-- /span -->
					</div>
				</div><!-- /.main-content -->



		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="<?php echo $base;?>js/jquery2.1.1jquery.min.js"></script>

		<!-- <![endif]-->


		<script src="<?php echo $base."js/bootstrap.min.js";?>"></script>
		<script src="<?php echo $base."js/typeahead-bs2.min.js";?>"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="<?php echo $base."js/jquery-ui-1.10.3.custom.min.js";?>"></script>
		<script src="<?php echo $base."js/jquery.ui.touch-punch.min.js";?>"></script>
		<script src="<?php echo $base."js/jquery.slimscroll.min.js";?>"></script>
		<script src="<?php echo $base."js/jquery.easy-pie-chart.min.js";?>"></script>
		<script src="<?php echo $base."js/jquery.sparkline.min.js";?>"></script>
		<script src="<?php echo $base."js/flot/jquery.flot.min.js";?>"></script>
		<script src="<?php echo $base."js/flot/jquery.flot.pie.min.js";?>"></script>
		<script src="<?php echo $base."js/flot/jquery.flot.resize.min.js";?>"></script>

		<!-- ace scripts -->

		<script src="<?php echo $base."js/ace-elements.min.js";?>"></script>
		<script src="<?php echo $base."js/ace.min.js";?>"></script>

		<!-- inline scripts related to this page -->


