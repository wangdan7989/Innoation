

								<div class="space-20"></div>
								<div class="alert alert-success">
									
									<strong>
										<i class="icon-bullhorn"></i>
										 恭喜您审核已通过!  
									</strong>

									
								</div>


								<div class="tabbable">
									<ul class="nav nav-tabs" id="myTab">
										<li class="active">
											<a data-toggle="tab" href="#">
											报名情况
											<span class="badge badge-danger">3</span>
										</a>
										</li>
									</ul>

									<div class="tab-content">
										<div id="request" class="tab-pane in active">
											<div class="table-responsive">
												<table id="sample-table-2" class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th>姓名</th>
															<th>学号</th>
															<th>联系方式</th>
															<th>处理方式</th>
														</tr>
													</thead>
													<tbody>
													<?php for($i=0;$i<count($signdata);$i++){
																
													?>
														<tr>
															<td><?php echo $signdata[$i]['u_name'];?></td>
															<td><?php echo $signdata[$i]['studentId'];?></td>
															<td><?php echo $signdata[$i]['phone_number'];?></td>
											    			<td>
																&nbsp;&nbsp;&nbsp;
																<i class="icon-ok"></i>
																&nbsp;&nbsp;&nbsp;
																<i class="icon-remove"></i>
															</td>
														</tr>
													<?php
														}
													?>
														
													</tbody>
												</table>
												<div class="col-xs-12">
													<br />
													<br></br>
													<a href="<?php echo base_url()."index.php/user/show_schedule";?>">
													<span class="btn btn-info btn-sm" id="checked-failed">上传排期</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.main-content -->

				</div>
				<!-- /.main-container -->
				
				<!-- basic scripts -->

				<!--[if !IE]> -->
               
				<script src=" "></script>

				<!-- <![endif]-->

				<script src="<?php echo $base."/js/bootstrap.min.js";?>"></script>
				<script src="<?php echo $base."/js/typeahead-bs2.min.js";?>"></script>

				<!-- page specific plugin scripts -->

				<!--[if lte IE 8]>
		  <script src="<?php echo $base."/js/excanvas.min.js";?>"></script>
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
				<script>
				    $(function() {
			            $(".icon-remove").on("click", function() {
			            	var res = confirm("确定删除？");
			            	if (res) {
			            		$(this).parent().parent().remove();
			            	}
			            });
			            $(".icon-ok").on("click", function() {
				            $(this).parent().html('<span class="label label-success arrowed-right">已通过</span>');
			            });
		            });
				</script>
