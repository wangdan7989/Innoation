

								<div class="space-20"></div>
								<div class="alert alert-success">
									
									<strong>
										<i class="icon-bullhorn"></i>
										 正在报名中……
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
													<?php 
														for($i=0;$i<count($signdata);$i++){
															?>
														<tr>
															<td><?php echo $signdata[$i]['u_name'];?></td>
															<td><?php echo $signdata[$i]['studentId'];?></td>
															<td><?php echo $signdata[$i]['phone_number'];?></td>
											    			<td>
															
																<?php
																 
																	if(strcasecmp($signdata[$i]['state'],"passed")==0){
																		echo '<span class="label label-success arrowed-right">报名成功</span>';
																		
																	}
																	if(strcasecmp($signdata[$i]['state'],"unpassed")==0){
																		echo '<span class="label label-danger">未通过</span>';
																	}
																	if(strcasecmp($signdata[$i]['state'],"passing")==0){
																		echo '<span class="label arrowed-right">审核中</span>';
																	}
																?>
																
																
															</td>
														</tr>
														<?php
														}
													?>	
														
													</tbody>
												</table>
												<button class="btn btn-info">报  名</button>
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

				<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

				<!-- <![endif]-->

				<script src="<?php echo $base;?>/js/bootstrap.min.js"></script>
				<script src="<?php echo $base;?>/js/typeahead-bs2.min.js"></script>

				<!-- page specific plugin scripts -->

				<!--[if lte IE 8]>
		  <script src="asset/js/excanvas.min.js"></script>
		<![endif]-->

				<script src="<?php echo $base;?>/js/jquery-ui-1.10.3.custom.min.js"></script>
				<script src="<?php echo $base;?>/js/jquery.ui.touch-punch.min.js"></script>
				<script src="<?php echo $base;?>/js/jquery.slimscroll.min.js"></script>
				<script src="<?php echo $base;?>/js/jquery.easy-pie-chart.min.js"></script>
				<script src="<?php echo $base;?>/js/jquery.sparkline.min.js"></script>
				<script src="<?php echo $base;?>/js/flot/jquery.flot.min.js"></script>
				<script src="<?php echo $base;?>/js/flot/jquery.flot.pie.min.js"></script>
				<script src="<?php echo $base;?>/js/flot/jquery.flot.resize.min.js"></script>

				<!-- ace scripts -->

				<script src="<?php echo $base;?>/js/ace-elements.min.js"></script>
				<script src="<?php echo $base;?>/js/ace.min.js"></script>

				<!-- inline scripts related to this page -->
				<script>
				    $(function() {
			            $(".btn").on("click", function() {
			            	var res = confirm("确定报名？");
							var ele=$(this);
			            	if (res) {
								$.ajax({
									'url':"<?php echo base_url();?>index.php/user/registration/<?php echo $signdata[0]['u_id']."/".$signdata[0]['p_id'];?>",
									'type':"GET",
									
									success:function(result,st){
										//if(result==1){
										//	alert(result);
											//ele.parent().html('<br/><br></br><div class="alert alert-success"><strong><i class="icon-bullhorn"></i> 报名成功！</strong></div>');
											ele.parent().html('<br/><button class="btn btn-info">报名成功！</button></div>');
										//}
										
									}
								})
			            		
			            	}
			            });
			            
		            });
				</script>
				
