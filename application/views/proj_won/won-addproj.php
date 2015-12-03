
		

				

	

				
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
							<li class="active">申报项目</li>
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
								申报项目
								<small>
									<i class="icon-double-angle-right"></i>
									详细信息
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form" action="<?php echo site_url();?>project_application/project_post"  method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 项目名称 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  name="p_name" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 项目类别 </label>																	
										<div class="col-sm-9">
											<select class="col-xs-10 col-sm-5" id="form-field-select-3" name="type">
												
												<option value="Competition">竞赛</option>
												<option value="Teachers' Research">教师科研</option>
												<option value="Personal Interests">个人兴趣自拟</option>
												<option value="External Cooperation">外部合作</option>															
											</select>
										</div>
										
										
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 项目性质 </label>

										<div class="col-sm-9">
											<select class="col-xs-10 col-sm-5" id="form-field-select-3" name="property" >												
												<option value="Outsourcing">外包项目</option>
												<option value="University project">校级立项</option>
												<option value="Other">其他</option>															
											</select>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">报酬形式</label>

										<div class="col-sm-9">
											<select class="col-xs-10 col-sm-5" id="form-field-select-3" name="reward_method">
												
												<option value="Funds">资金</option>
												<option value="Equipment">设备</option>
												<option value="Unpaid">无报酬</option>															
											</select>
										</div>
									</div>
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">现金额度</label>

										<div class="col-sm-4">

											<div class="help-block" id="input-span-slider" ></div>
											
										</div>
										<div class="col-sm-1 clearfix1 " name="fund">
												<input type="hidden" name="fund" value="0" id="fund">
												<div id="fund-sum">0</div>
										</div>

									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">项目需求介绍</label>

										<div class="col-sm-9">
											<textarea class="col-xs-10 col-sm-6" id="form-field-8" placeholder="详细描述……" name="description"></textarea>
										</div>
									</div>
 			
									

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1">立项截止时间</label>

										<div class="col-sm-4">
											<div class="input-group">
												<input class="form-control date-picker" name="project_deadline" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" />
												<span class="input-group-addon">
													<i class="icon-calendar bigger-110"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="id-date-range-picker-1">项目起止时间</label>
										<div class="col-xs-8 col-sm-4">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="icon-calendar bigger-110"></i>
												</span>
												<input class="form-control" type="text" name="time" id="id-date-range-picker-1" />
											</div>
										</div>
									
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 联系咨询方式 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  name="contact_way" class="col-xs-10 col-sm-6" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 人数限制（竞赛类请填0） </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  name="max_member" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>


									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button" onclick="this.form.submit()">
								
												确定
											</button>
											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												
												重置
											</button>
										</div>
									</div>

								</form>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->


			</div><!-- /.main-container-inner -->

		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		

		<!-- <![endif]-->


		<script src="<?php echo $base;?>js/bootstrap.min.js"></script>
		
		<script src="<?php echo $base;?>js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="<?php echo $base;?>js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo $base;?>js/date-time/moment.min.js"></script>

		<script src="<?php echo $base;?>js/date-time/daterangepicker.min.js"></script>

		<!--[if lte IE 8]>
		  <script src="assetsjs/excanvas.min.js"></script>
		<![endif]-->
	
		<script src="<?php echo $base;?>js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo $base;?>js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo $base;?>js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo $base;?>js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo $base;?>js/jquery.sparkline.min.js"></script>
		<script src="<?php echo $base;?>js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo $base;?>js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo $base;?>js/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo $base;?>js/chosen.jquery.min.js"></script>
		
		<!-- ace scripts -->

		<script src="<?php echo $base;?>js/ace-elements.min.js"></script>
		<script src="<?php echo $base;?>js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script>
			$(".chosen-select").chosen();	 
	    </script>

		<script type="text/javascript">
			$(function() {
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 5000,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);						
						$("#fund").val(val);
						$("#fund-sum").html(val);
					}
				});
				$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
			});	
		</script>
		




