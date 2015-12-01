
				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try {
								ace.settings.check('breadcrumbs', 'fixed')
							} catch (e) {}
						</script>

						<ul class="breadcrumb">
							<li>
								<a href="#">立项审核</a>
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
						<div class="user-profile row">
							<div class="col-xs-12 col-sm-3 center">
								<div>
									<span class="profile-picture">
										<img class="editable img-responsive"  src="<?php echo $base."/images/gallery/image-1.jpg";?>" />
									</span>

									<div class="space-4"></div>

									<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
										<div class="inline position-relative">
											<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
												<i class="icon-circle-arrow-down bigger-130 white"></i> &nbsp;
												<span class="white">项目介绍</span>
											</a>
										</div>
									</div>
								</div>

								<div class="space-6"></div>

								<div class="profile-contact-info">
									<div class="profile-contact-links align-left">
									
									<?php echo $projdata[0]['description'];?>
									
									</div>

								</div>
							</div>

							<div class="col-xs-12 col-sm-9">

								<div class="space-12"></div>

								<div class="profile-user-info profile-user-info-striped">
								
									<div class="profile-info-row">
										<div class="profile-info-name">项目名称 </div>

										<div class="profile-info-value">
											<span class="editable" id="proj_name">	<?php echo $projdata[0]['p_name'];?></span>
										</div>
									</div>

									<div class="profile-info-row">
										<div class="profile-info-name"> 项目类别 </div>

										<div class="profile-info-value">
											<span class="editable" id="category">	<?php echo $projdata[0]['type'];?></span>
										</div>
									</div>

									<div class="profile-info-row">
										<div class="profile-info-name"> 项目性质 </div>

										<div class="profile-info-value">
											<span class="editable" id="properties">	<?php echo $projdata[0]['property'];?></span>
										</div>
									</div>
									<div class="profile-info-row">
										<div class="profile-info-name"> 经费额度 </div>

										<div class="profile-info-value">
											<span class="editable" id="limit"><?php echo $projdata[0]['fund'];?></span>
										</div>
									</div>
									<div class="profile-info-row">
										<div class="profile-info-name"> 立项截止时间 </div>

										<div class="profile-info-value">
											<span class="editable" id="deadline"><?php echo $projdata[0]['project_deadline'];?> </span>
										</div>
									</div>

									<div class="profile-info-row">
										<div class="profile-info-name"> 项目时间范围 </div>

										<div class="profile-info-value">
											<span class="editable" id="time_range">	<?php echo $projdata[0]['start_time']."~".$projdata[0]['finish_time'];?></span>
										</div>
									</div>
									<div class="profile-info-row">
										<div class="profile-info-name"> 报名人数限制 </div>

										<div class="profile-info-value">
											<span class="editable" id="number"><?php echo $projdata[0]['max_member'];?></span>
										</div>
									</div>
									<div class="profile-info-row">
										<div class="profile-info-name"> 联系咨询方式 </div>

										<div class="profile-info-value">
											<span class="editable" id="contact_line"><?php echo $projdata[0]['contact_way'];?></span>
										</div>
									</div>
								</div>