
				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try {
								ace.settings.check('breadcrumbs', 'fixed')
							} catch (e) {}
						</script>

						<ul class="breadcrumb">
							<li>
								<a href="#">立项新增信息</a>
							</li>
						</ul>
						<!-- .breadcrumb -->
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div>
						<!-- #nav-search -->
					</div>
					<div class="page-content">
						<div class="alert alert-info">

							<strong>
								<i class="icon-bullhorn"></i>
								 项目已经申报成功！现在请继续完善立项信息
							</strong>

						</div>
						<!--
                        	作者：1043095705@qq.com
                        	时间：2015-11-21
                        	描述：insert picture
                        -->
						
						<div class="row">
							<div class="col-sm-6">
								<div class="widget-box">
									<div>

										<h4><i class="icon-upload purple">上传项目图片</i></h4>

										<span class="widget-toolbar">
										<a href="#" data-action="collapse">
											<i class="icon-chevron-up"></i>
										</a>

									
									</span>
									</div>

									<div>
										<div>
											<input multiple="" type="file" id="id-input-file-3" name="picture" />
											<label>
												<input type="checkbox" checked="checked" id="id-file-format" />
												<span class="lbl"> 仅允许图片</span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-8">
								<h4>
									<i class="icon-edit purple"></i>
									<a href="#modal-form" role="button" class="purple" data-toggle="modal">编辑团队排期</a>
								</h4>
								<table class="table-bordered col-sm-12 ">
									<tr class="text-center">
										<th class="text-center">姓 名</th>
										<th class="text-center">任 务</th>
										<th class="text-center">截止时间</th>
										<th class="text-center">操 作</th>
									</tr>
								</table>
							</div>
							<div class="col-sm-8">
								<h4>
									<i class="icon-group minimized purple"></i>
									<a href="#modal-form" role="button" class="purple" data-toggle="modal">创建队名</a>
								</h4>
								<div>
									<input type="text" class="col-sm-12" name="team_name">
								</div>
							</div>
							<div class="col-sm-8">
								<h4>
									<i class="icon-compass minimized purple"></i>
									<a href="#modal-form" role="button" class="purple" data-toggle="modal">源码地址 </a>
								</h4>
								<div>
									<input type="url" class="col-sm-12" name="address">
								</div>
							</div>
							
							<div class="col-xs-12">
								<br />
							    <input type="submit" name="submit" class="btn btn-info btn-sm" value="确定">
							</div>
							</form>
		
		
							
							<div id="modal-form" class="modal" tabindex="-1">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="blue bigger">添 加 排 期</h4>
										</div>

										<div class="modal-body overflow-visible">
											<div class="row">
												<div class="col-xs-12 col-sm-7">
													<div class="form-group">
														<label for="form-field-select-3">姓 名</label>

														<div>
															<select class="chosen-select" data-placeholder="请选择一位队员……">

																<option value="z">郑先生</option>
																<option value="m">毛志宇</option>
																<option value="l">廖晓彤</option>
																<option value="lk">李开江</option>
															</select>
														</div>
													</div>

													<div class="space-4"></div>

													<div class="form-group">
														<label for="form-field-username">任 务</label>

														<div>
															<input class="input-large" type="text" id="form-field-username" placeholder="Username" value="任务简述……" />
														</div>
													</div>

													<div class="space-4"></div>

													<div class="form-group">

														<div class="input-group padding-0">
															<label>截止时间</label>
															<input class="form-control input-mask-date" type="text" id="form-field-mask-1" />

														</div>

													</div>
												</div>
											</div>
										</div>

										<div class="modal-footer">
											<button class="btn btn-sm" data-dismiss="modal">
												<i class="icon-remove"></i> 取 消
											</button>

											<button class="btn btn-sm btn-primary" id="save-button">
												<i class="icon-ok"></i> 保存并添加
											</button>
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

					<script src="<?php echo $base;?>/js/jquery-2.0.3.min.js"></script>

					<!-- <![endif]-->

					<script src="<?php echo $base;?>/js/bootstrap.min.js"></script>
					<script src="<?php echo $base;?>/js/typeahead-bs2.min.js"></script>

					<!-- page specific plugin scripts -->

					<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

					<script src="<?php echo $base;?>/js/jquery-ui-1.10.3.custom.min.js"></script>
					<script src="<?php echo $base;?>/js/jquery.ui.touch-punch.min.js"></script>
					<script src="<?php echo $base;?>/js/chosen.jquery.min.js"></script>
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
					<script src="<?php echo $base;?>/js/date-time/bootstrap-datepicker.min.js"></script>
					<script src="<?php echo $base;?>/js/date-time/moment.min.js"></script>
					<script src="<?php echo $base;?>/js/jquery.maskedinput.min.js"></script>
					<script>
					$(function() {
						$('#save-button').on('click', function() {
								$.ajax({
									'url':"<?php echo base_url();?>index.php/user/checked/",
									'type':'POST',
									'data':{'p_id':'<?php echo $SESSION['p_id'];?>',},
									success:function(result,st){
										if (result == 1) {
											alert("ok");
										}
										
									}
									
									
								})
								
							}
						});
					</script>
					<script>
						$(function() {
							
							$('#id-input-file-3').ace_file_input({
								style: 'well',
								btn_choose: '拖拽或者点击来选择图片',
								btn_change: null,
								no_icon: 'icon-cloud-upload ',
								droppable: true,
								thumbnail: 'fit' //large | fit
									//,icon_remove:null//set null, to hide remove/reset button
									/**,before_change:function(files, dropped) {
										//Check an example below
										//or examples/file-upload.html
										return true;
									}*/
									/**,before_remove : function() {
										return true;
									}*/
									,
								preview_error: function(filename, error_code) {
									//name of the file that failed
									//error_code values
									//1 = 'FILE_LOAD_FAILED',
									//2 = 'IMAGE_LOAD_FAILED',
									//3 = 'THUMBNAIL_FAILED'
									//alert(error_code);
								}
							}).on('change', function() {
								//console.log($(this).data('ace_input_files'));
								//console.log($(this).data('ace_input_method'));
							});
							$(".chosen-select").chosen();
							$('#chosen-multiple-style').on('click', function(e) {
								var target = $(e.target).find('input[type=radio]');
								var which = parseInt(target.val());
								if (which == 2) $('#form-field-select-4').addClass('tag-input-style');
								else $('#form-field-select-4').removeClass('tag-input-style');
							});
							$('#modal-form').on('shown.bs.modal', function() {
								$(this).find('.chosen-container').each(function() {
									$(this).find('a:first-child').css('width', '210px');
									$(this).find('.chosen-drop').css('width', '210px');
									$(this).find('.chosen-search input').css('width', '200px');
								});
							})
							$('.date-picker').datepicker({
								autoclose: true
							}).next().on(ace.click_event, function() {
								$(this).prev().focus();
							});
							$.mask.definitions['~'] = '[+-]';
							$('.input-mask-date').mask('9999/99/99');
							$('#save-button').on("click", function() {
								$('#modal-form').modal("hide");
								var name = $('.chosen-single span').html();
								var task = $('#form-field-username').val();
								var time = $('#form-field-mask-1').val();
								var str = '<tr class="text-center"><td>' + name + '</td><td>' + task + '</td><td>' + time + '</td><td ><i class="icon-remove" id="data-remove"></i></td></tr>';
								$('table').append(str);
								$('#data-remove').on('click', function() {
								$(this).parent().parent().remove();
							})
							})
						});
					</script>

	