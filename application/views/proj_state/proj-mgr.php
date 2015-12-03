

								<div class="row">
									
									<div class="col-sm-8">
										<h4>
									<i class="icon-edit purple"></i>
									<a href="#modal-form" role="button" class="purple" data-toggle="modal">团队排期</a>
								</h4>
										<table class="table-bordered col-sm-12 ">
											<tr class="text-center">
												<th class="text-center">姓 名</th>
												<th class="text-center">任 务</th>
												<th class="text-center">截止时间</th>
												
											</tr>
											<tr class="text-center">
												<td class="text-center">陈求才</td>
												<td class="text-center">啦啦啦啦</td>
												<td class="text-center">2015/12/23</th>
												
											</tr>
											<tr class="text-center">
												<td class="text-center">陈求才</td>
												<td class="text-center">啦啦啦啦</td>
												<td class="text-center">2015/12/23</th>
												
											</tr>
											
										</table>
									</div>
									<div class="col-sm-8">
										<h4>
											<i class="icon-group minimized purple"></i>
											<a href="#modal-form" role="button" class="purple" data-toggle="modal">团队名称</a>
										</h4>
										<div>
											<input type="text" class="col-sm-12" disabled="disabled" placeholder="小卖部">
										</div>
									</div>
									<div class="col-sm-8">
										<h4>
									<i class="icon-compass minimized purple"></i>
									<a href="#modal-form" role="button" class="purple" data-toggle="modal">源码地址 </a>
								</h4>
										<div>
											<input type="url" class="col-sm-12" disabled="disabled" placeholder="woan@github.com">
										</div>
									</div>

									<div class="col-xs-12">
										<br />
										<span class="btn btn-info btn-sm" id="checked-success">审核通过</span>
										<span class="btn btn-info btn-sm" id="checked-failed">审核不通过</span>
									</div>
									
								</div>
								<!-- /.main-content -->

							</div>
							<!-- /.main-container -->

							<!-- basic scripts -->

							<script src="<?php echo $base;?>js/jquery-2.0.3.min.js"></script>


							<script src="<?php echo $base;?>js/bootstrap.min.js"></script>
							<script src="<?php echo $base;?>js/typeahead-bs2.min.js"></script>

							<!-- page specific plugin scripts -->


							<script src="<?php echo $base;?>js/jquery-ui-1.10.3.custom.min.js"></script>
							<script src="<?php echo $base;?>js/jquery.ui.touch-punch.min.js"></script>
							<script src="<?php echo $base;?>js/chosen.jquery.min.js"></script>
							<script src="<?php echo $base;?>js/jquery.slimscroll.min.js"></script>
							<script src="<?php echo $base;?>js/jquery.easy-pie-chart.min.js"></script>
							<script src="<?php echo $base;?>js/jquery.sparkline.min.js"></script>
							<script src="<?php echo $base;?>js/flot/jquery.flot.min.js"></script>
							<script src="<?php echo $base;?>js/flot/jquery.flot.pie.min.js"></script>
							<script src="<?php echo $base;?>js/flot/jquery.flot.resize.min.js"></script>

							<!-- ace scripts -->

							<script src="<?php echo $base;?>js/ace-elements.min.js"></script>
							<script src="<?php echo $base;?>js/ace.min.js"></script>

							<!-- inline scripts related to this page -->
							<script src="<?php echo $base;?>js/date-time/bootstrap-datepicker.min.js"></script>
							<script src="<?php echo $base;?>js/date-time/moment.min.js"></script>
							<script src="<?php echo $base;?>js/jquery.maskedinput.min.js"></script>
							<script>
								$(function() {
									$('#checked-success').on('click', function() {
										var res=confirm("确定通过?")
										if (res) {
											$(this).parent().html('<br/><div class="alert alert-success"><strong><i class="icon-bullhorn"></i> 审核已通过</strong></div>');
										}
									});
									$('#checked-failed').on('click', function() {
										var res=prompt("请给出理由：")
										if (res) {
											{$(this).parent().html('<br/><div class="alert alert-success"><strong><i class="icon-bullhorn"></i> 审核未通过</strong><div class="text"><br />理由如下：'+res+'</div></div>');}
										}
										else{
											var blank=confirm("请填写不通过理由！")
											
										}
									});
								});
							</script>
