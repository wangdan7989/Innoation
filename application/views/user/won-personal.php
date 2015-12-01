
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
								<a href="#">项目执行</a>
							</li>
							<li class="active">个人主页</li>
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
								个人主页
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
										<a data-toggle="tab" href="#join">
											参与的项目请求
											<span class="badge badge-danger">4</span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#found">
											创建的项目请求
											<span class="badge badge-danger">4</span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#proj-apply">
											立项申请
											<span class="badge badge-danger">4</span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#innovation">
											创新项目
											<span class="badge badge-danger">4</span>
										</a>
									</li>
									
								</ul>

								<div class="tab-content">
									<div id="join" class="tab-pane in active">
										<div class="table-header">
										参与的项目请求 
										</div>
										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>项目名称</th>
														<th>团队名称</th>
														<th>项目经费</th>
														<th class="hidden-480">请求创建者</th>

														<th class="hidden-480">
															<i class="icon-time "></i>
															最近更新
														</th>
														<th>
															项目状态
														</th>
													</tr>
												</thead>
											
												<tbody>
												<?php 
											 if(count($takepartdata)!=0){
												 for($i=0;$i<count($takepartdata);$i++){
												
											?>
													<tr>
														<td>
															<a href="<?php echo base_url().'index.php/user/show_projectstate/'.$takepartdata[$i]['p_id'];?>"><?php echo $takepartdata[$i]['p_name'];?></a>
														</td>
														<td>
															<a href="#"><?php echo $takepartdata[$i]['team_name'];?></a>
														</td>
														<td><?php echo $takepartdata[$i]['fund'];?></td>
														<td class="hidden-480"><?php echo $takepartdata[$i]['u_id'];?></td>
														<td>Feb 12</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
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
									<div id="found" class="tab-pane ">
										<div class="table-header">
										建立的项目请求*注意:项目信息填写完后会以草稿形式保存，在提交审核之前可以进行修改，
										若要提交,请进入项目页面点击提交审核，审核通过后将不能再次编辑
										</div>
										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>项目名称</th>
														<th>项目经费</th>
														<th class="hidden-480">请求创建者</th>

														<th class="hidden-480">
															<i class="icon-time "></i>
															最近更新
														</th>
														<th>项目状态</th>
														<th>团队名称</th>
													</tr>
												</thead>

												<tbody>
													<?php 
											 if(count($createdata)!=0){
												 for($i=0;$i<count($createdata);$i++){
												
											?>
													<tr>
														<td>
															<a href="<?php echo base_url().'index.php/user/show_projectstate/'.$createdata[$i]['p_id'];?>"><?php echo $createdata[$i]['p_name']?></a>
														</td>
														<td>
															<a href="#"><?php echo $createdata[$i]['fund']?></a>
														</td>
														<td><?php echo $createdata[$i]['u_id']?></td>
														<td class="hidden-480">3,330</td>
														<td><?php echo $createdata[$i]['state']?></td>

														<td class="hidden-480">
															<span class="label label-sm label-warning"><?php echo $createdata[$i]['team_name']?></span>
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

									<div id="proj-apply" class="tab-pane ">
										<div class="table-header">
										立项申请 
										</div>
										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>项目名称</th>
														<th>团队名称</th>
														<th>项目类型</th>
														<th class="hidden-480">项目负责人</th>
														<th class="hidden-480">
															<i class="icon-time "></i>
															最近更新
														</th>
														<th>项目状态</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td>
															<a href="#">app.com</a>
														</td>
														<td>
															<a href="#">app.com</a>
														</td>
														<td>$45</td>
														<td class="hidden-480">3,330</td>
														<td>Feb 12</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>

													</tr>
													<tr>
														<td>
															<a href="#">app.com</a>
														</td>
														<td>
															<a href="#">app.com</a>
														</td>
														<td>$45</td>
														<td class="hidden-480">3,330</td>
														<td>Feb 12</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>

													</tr>
													<tr>
														<td>
															<a href="#">app.com</a>
														</td>
														<td>
															<a href="#">app.com</a>
														</td>
														<td>$45</td>
														<td class="hidden-480">3,330</td>
														<td>Feb 12</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>

													</tr>
													<tr>
														<td>
															<a href="#">app.com</a>
														</td>
														<td>
															<a href="#">app.com</a>
														</td>
														<td>$45</td>
														<td class="hidden-480">3,330</td>
														<td>Feb 12</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>
													</tr>	
												</tbody>
											</table>
										</div>
									</div>

				                    <div id="innovation" class="tab-pane">
										<div class="table-header">
										创新项目 
										</div>
										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>项目名称</th>
														<th>团队名称</th>
														<th>项目类型</th>
														<th>项目经费</th>
														<th>起止时间</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td>
															<a href="#">app.com</a>
														</td>
														<td>$45</td>
														<td class="hidden-480">3,330</td>
														<td>Feb 12</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>

													</tr>
													<tr>
														
														<td>
															<a href="#">app.com</a>
														</td>
														<td>$45</td>
														<td class="hidden-480">3,330</td>
														<td>Feb 12</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>

													</tr>
													<tr>
														
														<td>
															<a href="#">app.com</a>
														</td>
														<td>$45</td>
														<td class="hidden-480">3,330</td>
														<td>Feb 12</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>

													</tr>
													<tr>
														
														<td>
															<a href="#">app.com</a>
														</td>
														<td>$45</td>
														<td class="hidden-480">3,330</td>
														<td>Feb 12</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>
													</tr>	
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

		<script src=" "></script>

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



