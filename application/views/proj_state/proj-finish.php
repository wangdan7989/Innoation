

								<div class="space-20"></div>
								<div class="alert alert-success">
									
									<strong>
										<i class="icon-bullhorn"></i>
										 该项目已完成！
									</strong>

									
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

				<script src="<?php echo $base."/js/jquery-2.0.3.min.js";?>"></script>

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
