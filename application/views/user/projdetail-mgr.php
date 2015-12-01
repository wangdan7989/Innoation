

								<div class="col-xs-12">
									<br />
									<span class="btn btn-info btn-sm" id="checked-success">审核通过</span>
									<span class="btn btn-info btn-sm" id="checked-failed">审核不通过</span>
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

				<script src="<?php echo $base."/js/bootstrap.min.js";?>"></script>
				<script src="<?php echo $base."/js/typeahead-bs2.min.js";?>"></script>

				<!-- page specific plugin scripts -->

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
			            $("button.btn").on("click", function() {
			            	var res = confirm("确定通过审核？");
			            	if (res) {
			            		
			            	}
			            });
			            $('#checked-success').on('click', function() {
							var res=confirm("确定通过?");
							var ele = $(this);
							if (res) {
								$.ajax({
									'url':"<?php echo base_url();?>index.php/user/checked/projchecked/ok/<?php echo $projdata[0]['p_id'];?>",
									'type':'GET',
									success:function(result,st){
										if (result == 1) {
											ele.parent().html('<br/><br></br><div class="alert alert-success"><strong><i class="icon-bullhorn"></i> 审核已通过</strong></div>');
										}
										
									}
									
									
								})
								
							}
						});
						$('#checked-failed').on('click', function() {
							var res=prompt("请给出理由：")
							var ele=$(this);
							if (res) {
								$.ajax({
									'url':"<?php echo base_url();?>index.php/user/checked/projchecked/no/<?php echo $projdata[0]['p_id'];?>",
									'type':"POST",
									'data':{'reason':res},
									success:function(result,st){
										if(result==1){
											ele.parent().html('<br/><div class="alert alert-success"><strong><i class="icon-bullhorn"></i> 审核未通过</strong><div class="text"><br />理由如下：'+res+'</div></div>');
										}
										
									}
								})
							}
							else{
								
								var blank=confirm("请填写不通过理由！")
								
								
							}
						});
		            });
				</script>
