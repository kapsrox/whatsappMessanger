<?php
   /*
	'host'		=> 'localhost';
	'username' 	=> 'searchmy';
	'password' 	=> 'crypt@150387';
	'dbname' 	=> 'searchmy_page_last';
  $con=mysqli_connect($host,$username,$password,$dbname) ;
  if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
                  */                               
date_default_timezone_set('Asia/Kolkata');
require 'core/init.php';
$general->logged_out_protect();
$username 	= htmlentities($user['admin_name']);
define('MyConst', true);

?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 2.0.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Admin | Category</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css"/>

<link rel="stylesheet" type="text/css" href="uploadifive/uploadifive.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2-metronic.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<style type="text/css">
.disabling {
   pointer-events: none;
   cursor: default;
}

#scrolled {
min-height:100px;
height:auto !important;
height:250px;
}
</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<?php include_once('header.php'); ?>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start ">
					<a href="dashboard.php">
						<i class="fa fa-home"></i>
						<span class="title">
							Dashboard
						</span>
					</a>
				</li>
				
				<li class="">
					<a href="manager.php">
						<i class="fa fa-cogs"></i>
						<span class="title">
							User Manager
						</span>
                        <span class="selected">
						</span>
					</a>
				</li>
                
                <li class="last active">
					<a href="category.php">
					<i class="fa fa-plus"></i>	<span class="title">
							Add
						</span>
                        <span class="selected">
						</span>
					</a>
				</li>
                
                <li>
					<a href="javascript:;">
						<i class="fa fa-shopping-cart"></i>
						<span class="title">
							Contents
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="articles.php">
								<i class="fa fa-bullhorn"></i>
								Articles
							</a>
						</li>
						<li>
							<a href="blogs.php">
								<i class="fa fa-shopping-cart"></i>
								Blogs
							</a>
						</li>
						<li>
							<a href="news.php">
								<i class="fa fa-tags"></i>
								News
							</a>
						</li>
						
					</ul>
				</li>
				
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
							 THEME COLOR
						</span>
						<ul>
							<li class="color-black current color-default" data-style="default">
							</li>
							<li class="color-blue" data-style="blue">
							</li>
							<li class="color-brown" data-style="brown">
							</li>
							<li class="color-purple" data-style="purple">
							</li>
							<li class="color-grey" data-style="grey">
							</li>
							<li class="color-white color-light" data-style="light">
							</li>
						</ul>
					</div>
					<div class="theme-option">
						<span>
							 Layout
						</span>
						<select class="layout-option form-control input-small">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Header
						</span>
						<select class="header-option form-control input-small">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Sidebar
						</span>
						<select class="sidebar-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Sidebar Position
						</span>
						<select class="sidebar-pos-option form-control input-small">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Footer
						</span>
						<select class="footer-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					User Manager <small>User Manager</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						
						<li>
							<i class="fa fa-home"></i>
							<a href="dashboard.php">
								Home
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								Category
							</a>
						</li>
                        
                        
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="tabbable tabbable-custom boxless tabbable-reversed">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_0" data-toggle="tab">
							Category
								</a>
							</li>
							<li>
								<a href="#tab_1" data-toggle="tab">
							Sub-Category
									
								</a>
							</li>
							<li>
								<a href="#tab_3" data-toggle="tab">
							View Category List
									
								</a>
							</li>
							<li>
								<a href="#tab_2" data-toggle="tab">
							view Sub Category List
									
								</a>
							</li>
							
						</ul>

						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box green">
									<div class="portlet-title">

										<div class="caption">
											<i class="fa fa-reorder"></i>Category
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
							<!-- BEGIN FORM-->
                                        <form action="add_cat.php" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
                                            <div class="form-body">
                                                
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Category Name
                                                      <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="cat_name" data-required="1" class="form-control"/>
                                                    </div>
                                               </div>

                                    <div class="form-group">
                                               	<label class="control-label col-md-3">Category Image</label>
										<div class="col-md-9">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
													<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt=""/>
												</div>
												<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
												</div>
												<div>
													<span class="btn default btn-file">
														<span class="fileinput-new">
															 Select image
														</span>
														<span class="fileinput-exists">
															 Change
														</span>
														<input type="file"  name="image" id="img">
													</span>
													<a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
														 Remove
													</a>
												</div>
											</div>
											<div class="clearfix margin-top-10">
												<span class="label label-danger">
													 NOTE!
												</span>
												 Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.
											</div>
										</div>
									</div>
								
                                            </div>
                                            <div class="form-actions fluid">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <input type="submit" name="submit" value="submit" class="btn green">
                                                    <button type="button" class="btn default">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
							<!-- END FORM-->
									</div>
								</div>
								
								
								
								
							</div><!-- End tab0 -->
							
                            
                           <div class="tab-pane" id="tab_1">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Sub Category Details
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body">
										<!-- BEGIN FORM-->
                                        <form action="add_sub.php" id="form_sample_1" class="form-horizontal" method="post">
                                            <div class="form-body">
                                                
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Choose Category
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="category">
                                                       <option value="">Select...</option>
                                                            <?php
                                                       $result = $admin->get_cat();
                                                         foreach($result as $list)
								
                                                 {
      						?>
                                                            	
                                                            <option value="<?php echo $list['cat_id'];?>">
                                                            <?php echo ucfirst($list['cat_name']); ?>
                                                            </option>
                                                            <?php
                                                            }
                                                            ?>
                                                            </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Sub Category Name
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="sub_cat_name" data-required="1" class="form-control"/>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-actions fluid">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <input type="submit" name="submit" value="submit" class="btn green">
                                                    <button type="button" class="btn default">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
							<!-- END FORM-->
									</div>
								</div>
								
							</div> 
                                
                           <div class="tab-pane" id="tab_2">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>View Category Details
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
										<div class="portlet-body">
										<!-- BEGIN FORM-->
                                      
                                      <?php
										
										$lists = $admin->get_sub_cat();
										
										$i = 1;
                            			
							
									  ?>
                                        
										<table class="table table-striped table-bordered table-hover" id="sub_cat_table">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sub_cat_table .checkboxes"/>
								</th>
								<th>
								Sub Category Name
								</th>
		<th>
                               Category Name
							</th>
							<th>
                                	Edit User Details
									</th>
									<th>
								
				  Delete Users
			                    </th>
                               
							</tr>
							</thead>
							<tbody>
                            <?php
								
								foreach($lists as $list):
								{
							?>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 <?php echo $list['subc_name']; ?>
								</td>
								<td>
										 <?php echo $list['cat_name']; ?>
								</td>
							<!--	<td>
									 <?php echo $list['user_comp_name']; ?>
								</td>
								<td class="center">
									 <?php echo date('d-m-Y',$list['user_time']); ?>
								</td>
									
								<td>
                               
                                <?php	if($list['admin_confirmed'] == 0)
									{
									?>
									<span class="label label-sm label-warning">
										 <a href="status.php?id=<?php echo $list['user_id']; ?>&status=<?php echo $list['admin_confirmed']; ?>&cat_id=<?php echo $list['client_cat_id']; ?>">De-activate</a>
									</span>
                                    <?php
									}elseif($list['admin_confirmed'] == 1){
									?>
										 <a href="status.php?id=<?php echo $list['user_id']; ?>&status=<?php echo $list['admin_confirmed']; ?>&cat_id=<?php echo $list['client_cat_id']; ?>"><span class="label label-sm label-success">
										 Approved
									</span></a>
                                         
                                         
									
								</td><?php
									}
									?>
                                <td>
                              <?php echo $list['user_number']; ?>
                                </td>
                                <td>
                                <?php
									$user_id = $list['user_id'];
									$user_comp = $admin->count_company($user_id);
									$img = $admin->count_info_images($list['user_id']);
									if($user_comp == true)
									{
								?>
                                <a class="disabling" style="color:#CCC;" href="user_info.php?id=<?php echo $list['user_id'];?>&plan_id=<?php echo $list['client_cat_id']; ?>">Add Details</a>
                                <?php
									}else {
								?>
										<a href="user_info.php?id=<?php echo $list['user_id'];?>&plan_id=<?php echo $list['client_cat_id']; ?>">Add Details</a>
								<?php
									}
								?>
                                </td>
								
													<td>
								  <?php echo @$list['person_name']; ?>
                              					
	</td>
								
                                <td>
								<?php echo @$list['person_type']; ?>
                              
                                </td>
							-->	
								<td>
                                <a href="edit_act.php?id=<?php echo $list['subc_id'];?>" role="button" class="btn green edit">
											Edit Details
										</a>
                                </td>
                                <td>
								<a href="cat_delete.php?id=<?php echo $list['subc_id'];?>" class="btn green alert1">Delete</a>
						
						  </td>
						</tr>
							<?php
							
								}
								endforeach;
                            
							
							?>
							</tbody>
							</table>
                            
                            
                            
										<!-- END FORM-->
									</div>
								
								</div>
								
							</div> 
                                
                           <div class="tab-pane" id="tab_3">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>View Category Details
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
										<div class="portlet-body">
										<!-- BEGIN FORM-->
                                      
                                      <?php
										
										$lists = $admin->get_cat();
										
										$i = 1;
                            			
							
									  ?>
                                        
										<table class="table table-striped table-bordered table-hover" id="cat_table">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#cat_table .checkboxes"/>
								</th>
								<th>
								 Category Name
								</th>
		<th>
                               Category Image
							</th>
							<th>
                                	Edit Category Details
									</th>
									<th>
								
				  Delete Category
			                    </th>
                               
							</tr>
							</thead>
							<tbody>
                            <?php
								
								foreach($lists as $list):
								{
							?>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 <?php echo ''.$list['cat_name'].''; ?>
								</td>
								<td>
										 <img src="../<?php echo $list['cat_img']; ?>" height="100px" width="100px;"/>
								</td>
							<!--	<td>
									 <?php echo $list['user_comp_name']; ?>
								</td>
								<td class="center">
									 <?php echo date('d-m-Y',$list['user_time']); ?>
								</td>
									
								<td>
                               
                                <?php	if($list['admin_confirmed'] == 0)
									{
									?>
									<span class="label label-sm label-warning">
										 <a href="status.php?id=<?php echo $list['user_id']; ?>&status=<?php echo $list['admin_confirmed']; ?>&cat_id=<?php echo $list['client_cat_id']; ?>">De-activate</a>
									</span>
                                    <?php
									}elseif($list['admin_confirmed'] == 1){
									?>
										 <a href="status.php?id=<?php echo $list['user_id']; ?>&status=<?php echo $list['admin_confirmed']; ?>&cat_id=<?php echo $list['client_cat_id']; ?>"><span class="label label-sm label-success">
										 Approved
									</span></a>
                                         
                                         
									
								</td><?php
									}
									?>
                                <td>
                              <?php echo $list['user_number']; ?>
                                </td>
                                <td>
                                <?php
									$user_id = $list['user_id'];
									$user_comp = $admin->count_company($user_id);
									$img = $admin->count_info_images($list['user_id']);
									if($user_comp == true)
									{
								?>
                                <a class="disabling" style="color:#CCC;" href="user_info.php?id=<?php echo $list['user_id'];?>&plan_id=<?php echo $list['client_cat_id']; ?>">Add Details</a>
                                <?php
									}else {
								?>
										<a href="user_info.php?id=<?php echo $list['user_id'];?>&plan_id=<?php echo $list['client_cat_id']; ?>">Add Details</a>
								<?php
									}
								?>
                                </td>
								
													<td>
								  <?php echo @$list['person_name']; ?>
                              					
	</td>
								
                                <td>
								<?php echo @$list['person_type']; ?>
                              
                                </td>
							-->	
								<td>
                                <a href="edit_main_cat.php?id=<?php echo $list['cat_id'];?>" role="button" class="btn green edit">
											Edit Details
										</a>
                                </td>
                                <td>
								<a href="cat_delete.php?id=<?php echo $list['cat_id'];?>" class="btn green alert1">Delete</a>
						
						  </td>
						</tr>
							<?php
							
								}
								endforeach;
                            
							
							?>
							</tbody>
							</table>
                            
                            
                            
										<!-- END FORM-->
									</div>
								
								</div>
								
							</div> 
                                
                            
									
                            
                    
<div class="footer">
	<div class="footer-inner">
		 2014 &copy;
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>

<script type="text/javascript" src="assets/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>

<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
<script src="assets/plugins/jquery-idle-timeout/jquery.idletimeout.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-idle-timeout/jquery.idletimer.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="assets/plugins/bootbox/bootbox.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/core/app.js"></script>
<script src="assets/scripts/custom/form-validation.js"></script>
<script src="assets/scripts/custom/table-managed.js"></script>
<script src="assets/scripts/custom/ui-idletimeout.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.timers-1.0.0.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>
//jQuery(document).ready(function() {    
//   
//   App.init();
//   FormValidation.init();
//   TableManaged.init();
//   UIIdleTimeout.init();
//   
//   $('a.edit').click(function(){
//var sfid = $(this).data('sfid');
//$('#mysfid').val(sfid);

//$('#mycompany').val(company);
//$('#mydealerclass').val(dealerclass);
//
//});
//j("#header_inbox_bar").everyTime(10000,function(i){
//			j.ajax({
//			  url: "refresh-me.php",
//			  cache: false,
//			  success: function(html){
//				j("#header_inbox_bar").html(html);
//			  }
//			})
//		});
//	
//   j('#header_inbox_bar').css({color:"red"});
//      });   
// 

jQuery(document).ready(function() {    
         App.init();
		 FormValidation.init();
         TableManaged.init();
		 UIIdleTimeout.init();
		

		  //var j = jQuery.noConflict();
	
		jQuery("#header_inbox_bar").everyTime(10000,function(i){
			jQuery.ajax({
			  url: "refresh-me.php",
			  cache: false,
			  success: function(html){
				jQuery("#header_inbox_bar").html(html);
			  }
			})
		});
	
   jQuery('#header_inbox_bar').css({color:"red"});
   
      });


</script>


<?php $admin->count_info_images($id); ?>
<script type="text/javascript">
		$(function() {
			$('#file_upload').uploadifive({
				'auto'         : false,
				
				'kk'            : <?php echo @$img['user_id']; ?>,
				'queueSizeLimit' : 5 - <?php echo @$img['user_id']; ?>,
				'fileType'     : 'image/',
				'fileTypeExts' : '*.jpg; *.png; *.jpeg',
				'uploadLimit'  : 5,
				'formData'     : {'userid': $("#uid").val(), 'plan_id': $("#uid2").val()},
				'queueID'      : 'queue',
				'uploadScript' : '../admin/uploadify_demo_img.php',
				'onUploadComplete' : function(file, data) {
					console.log(data);
				}
			});
		});
	</script>

<script type="text/javascript">
	

	//("a.alert1").click(function(e) {
//    e.preventDefault();
//    bootbox.confirm("Are you sure?", function(confirmed) {
//        console.log("Confirmed: "+confirmed);
//    });
//});
	
	
	jQuery(document).on("click", ".alert1", function(e) {
            var link = jQuery(this).attr("href"); // "get" the intended link in a var
            e.preventDefault();    
            bootbox.confirm("Are you sure?", function(result) {    
                if (result) {
                    document.location.href = link;  // if result, "set" the document location       
                }    
            });
        });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
<?php
	
?>