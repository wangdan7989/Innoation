
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
								<a href="#">历届项目公示</a>
							</li>
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
					
						<?php 
							for($i=0;$i<count($allprojdata);$i++){

							
						?>
						<div class="card ">
							<a href="<?php echo site_url()."/Show_project/show_projectstate/".$allprojdata[$i]['p_id'];?>">
								<img  src="<?php echo $base;?>images/gallery/image-<?php echo $allprojdata[$i]['p_id'] ?>.jpg" />
                                <h5 class="text-center bolder"><?php echo $allprojdata[$i]['p_name']?></h5> 
							</a>
							
						</div>
						<?php 
							}
							?>

							</div>
					<div class="align-center fc-border-separate">
					  <ul class="pagination">
					    <li>
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					      </a>
					    </li>
					    <li><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li><a href="#">..</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					      </a>
					    </li>
					  </ul>
						
					</div>
				</div><!-- /.main-content -->



		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->


		<!-- <![endif]-->

		 <link rel="stylesheet" href="<?php echo $base;?>css/public.css" />

		<script src="<?php echo $base;?>js/bootstrap.min.js"></script>
		<script src="<?php echo $base;?>js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="<?php echo $base;?>js/excanvas.min.js"></script>
		<![endif]-->

		<script src="<?php echo $base;?>js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo $base;?>js/jquery.ui.touch-punch.min.js"></script>
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



