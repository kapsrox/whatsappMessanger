<?php
date_default_timezone_set('Asia/Kolkata');
require 'core/init.php';
$general->logged_out_protect();
$username 	= htmlentities($user['admin_name']);
define('MyConst', true);

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Admin | User Manager</title>
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
<script type="text/javascript">
          function sum()
          {
             var num1 = document.myform.charges.value;
             var sum = parseInt(num1);
             document.getElementById('add').value = sum;
          }
        </script>
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
				
				<li class="last active">
					<a href="manager.php">
						<i class="fa fa-cogs"></i>
						<span class="title">
							User Manager
						</span>
                        <span class="selected">
						</span>
					</a>
				</li>
                
                <li>
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
								User Manager
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
									 Add New User
								</a>
							</li>
							<li>
								<a href="#tab_1" data-toggle="tab">
									 Free Users Details
								</a>
							</li>
							<li>
								<a href="#tab_2" data-toggle="tab">
									 Silver Users Details
								</a>
							</li>
							<li>
								<a href="#tab_3" data-toggle="tab">
									 Gold Users Details
								</a>
							</li>
							<li>
								<a href="#tab_4" data-toggle="tab">
									 Platinum Users Details
								</a>
							</li>
                            <li>
								<a href="#tab_5" data-toggle="tab">
									 Recent Updates
								</a>
							</li>
							
                            <li>
								<a href="#tab_6" data-toggle="tab">
									 Invoice
								</a>
							</li>
                            <li>
								<a href="#tab_7" data-toggle="tab">
											Create Sub Admin
								</a>
							</li>
                            <li>
								<a href="#tab_8" data-toggle="tab">
											Change Admin's Password
								</a>
							</li>
							<li>
								<a href="#tab_9" data-toggle="tab">
								Sub Admin's list
								</a>
							</li>

							
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>User Account
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
                                        <form action="register.php" id="form_sample_1" class="form-horizontal" method="post">
                                            <div class="form-body">
                                                <div class="alert alert-danger display-hide">
												
                                                    <button class="close" data-close="alert"></button>
                                                    You have some form errors. Please check below.
                                                </div>
                                                <?php
                                                    if(isset($_GET['msg']))
                                                    {
                                                    ?>
                                                <div class="alert alert-success">
                                                    <button class="close" data-close="alert"></button>
                                                    <?php
                                                    
                                                        echo $_GET['msg'];
                                                    ?>
                                                    
                                                </div>
                                                <?php
												}
												?>
                                                 <?php
                                                    if(isset($_GET['err']))
                                                    {
                                                    ?>
                                                <div class="alert alert-danger">
                                                    <button class="close" data-close="alert"></button>
                                                    <?php
                                                    
                                                        echo $_GET['err'];
                                                    ?>
                                                    
                                                </div>
                                                <?php
												}
												?>
                                                
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Plans
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <?php $cat = $admin->get_plancat(); ?>
                                                        <select class="form-control" name="category">
                                                            <option value="">Select...</option>
                                                            <?php
                                                            foreach($cat as $result)
                                                            {
                                                            ?>
                                                            
                                                            <option value="<?php echo $result['client_cat_id'];?>">
                                                            <?php echo ucfirst($result['client_cat_name']); ?>
                                                            </option>
                                                            <?php
                                                            }
                                                            ?>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Person Name
                                                    <!--<span class="required">
                                                         *
                                                    </span>-->
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="name" data-required="1" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Email
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input name="email" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Password
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        
                                                                <input type="password" class="form-control" name="password" id="register_password">
                                                                
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Re-type Password
                                                        <span class="required">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        
                                                            
                                                            <input type="password" class="form-control" name="rpassword">
                                                             
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Company Name
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="companyName" data-required="1" class="form-control"/>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Contact Number 1
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input name="number_1" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                              
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Contact Number 2
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input name="number_2" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group last">
                                                    <label class="control-label col-md-3">City
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input name="city" type="text" class="form-control"/>
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
											<i class="fa fa-reorder"></i>Free Users Account Details
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
										
										$lists = $admin->get_all_registerd_details();
										
										$i = 1;
                            			
							
									  ?>
                                        
										<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
								</th>
								<th>
									 Username
								</th>
								<th>
									 Email
								</th>
								<th>
									 Company Name
								</th>
								
                                <th>
                                	Joined
								</th>
							
		<th>
                                	Approval 
							</th>
				
		
                                <th>
                                	Contact Number
                                </th>
								
					 <th>
                                	Company Info
                                </th>
								                                <th>
										Person Name
                                </th>
								
                                <th>
                                	Person Type
                                </th>
                                <th>
                                	Person City
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
								if($list['client_cat_id'] == 1)
								{
							?>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 <?php echo $list['user_name']; ?>
								</td>
								<td>
									<a href="mailto:<?php echo $list['user_email'];?>">
										 <?php echo $list['user_email']; ?>
									</a>
								</td>
								<td>
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
                                         
                                     <?php
									}
									?>    
									
								</td>
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
                                <td>
								<?php echo @$list['city']; ?>
                              
                                </td>
								
								<td>
								
								
                                <a href="user_edit_info.php?id=<?php echo $list['user_id'];?>" data-sfid='"<?php echo $list['user_id'];?>"' role="button" class="btn green edit" data-toggle="modal">
											 Edit Details
										</a>
                                </td>
                                <td>
								<a href="user_delete.php?id=<?php echo $list['user_id'];?>" class="btn green alert1">Delete</a>
						
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
                            
<div class="tab-pane" id="tab_2">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Silver Users Account Details
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
										<table class="table table-striped table-bordered table-hover" id="sample_4">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_4 .checkboxes"/>
								</th>
								<th>
									 Username
								</th>
								<th>
									 Email
								</th>
								<th>
									 Company Name
								</th>
								
                                <th>
                                	Joined
								</th>
	<th>
                               								
								
								 	Approval 
								
                                </th>
								<th>
                                	Contact Number
                                </th>
                                <th>
                                	Extra Details
                                </th>
								                 <th>
										Person Name
                                </th>
								
                                <th>
                                	Person Type
                                </th>
								
                                <th>
                                city
                                </th>
								<th>
                                	Edit Details
                                </th>
                                <th>
                                	Delete Users
                                </th>
                               </tr>
							</thead>
							<tbody>
                             <?php
							//$lists = $users->get_users();
                            		$lists = $admin->get_all_registerd_details();
								
							foreach($lists as $list)
							{
								if($list['client_cat_id'] == 2)
								{
							?>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 <?php echo $list['user_name']; ?>
								</td>
								<td>
									<a href="mailto:<?php echo $list['user_email'];?>">
										 <?php echo $list['user_email']; ?>
									</a>
								</td>
								<td>
									 <?php echo $list['user_comp_name']; ?>
								</td>
								<td class="center">
									 <?php echo date('d-m-Y',$list['user_time']); ?>
								</td>
								<td>
     										
	                          
                                	<?php
                                	if($list['admin_confirmed'] == 0)
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
                                         
                                         
									<?php
									}

								?>
								</td>
                                <td>
                                <?php echo $list['user_number']; ?>
                                </td>
                                <td>
                                	<?php
									$user_id = $list['user_id'];
									$user_comp = $admin->count_company($user_id);
									$img = $admin->count_info_images($list['user_id']);
									if($user_comp == true && $img == 5)
									{
								?>
                                <a class="disabling" style="color:#CCC;" href="user_info_gl.php?id=<?php echo $list['user_id'];?>&plan_id=<?php echo $list['client_cat_id']; ?>">Add Details</a>
                                <?php
									}else {
								?>
										<a href="user_info_silver.php?id=<?php echo $list['user_id'];?>&plan_id=<?php echo $list['client_cat_id']; ?>">Add Details</a>
								<?php
									}
								?>
                                </td>
								
								                 <td>
										<?php echo @$list['person_name'];?>
                                </td>
								
                                <td>
										<?php echo @$list['person_type'];?>
                                </td>
                                <td>
										<?php echo @$list['city'];?>
                                </td>
	                           <td>
     							<a href="user_edit_sil.php?id=<?php echo $list['user_id'];?>" data-sfid='"<?php echo $list['user_id'];?>"' role="button" class="btn green edit" data-toggle="modal">
											 Edit Details
										</a>
                                </td>
								
								
                                <td>
								
								<a href="user_delete.php?id=<?php echo $list['user_id'];?>" class="btn green alert1">Delete</a>
								</td>
                                
							</tr>
							<?php
								}
								//}
							}
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
											<i class="fa fa-reorder"></i>Gold Users Account Details
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
										
										$lists = $admin->get_all_registerd_details();
										
										$i = 1;
                            			
									  ?>
                                        
										<table class="table table-striped table-bordered table-hover" id="sample_gl">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_gl .checkboxes"/>
								</th>
								<th>
									 Username
								</th>
								<th>
									 Email
								</th>
								<th>
									 Company Name
								</th>
								
                                <th>
                                	Joined
								</th>
							
		<th>
                                	Approval 
							</th>
				
		
                                <th>
                                	Contact Number
                                </th>
								
								<th>	
                                	Company Info
                                </th>
								<th>
										Person Name
                                </th>
								
                                <th>
                                	Person Type
                                </th>
								<th>
                                	Person City
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
								if($list['client_cat_id'] == 3)
								{
							?>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 <?php echo $list['user_name']; ?>
								</td>
								<td>
									<a href="mailto:<?php echo $list['user_email'];?>">
										 <?php echo $list['user_email']; ?>
									</a>
								</td>
								<td>
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
									if($user_comp == true && $img==5 && $pdf == 1 && ($logo['info_logo']!= 'images/nologo.png'))
									{
								?>
                                <a class="disabling" style="color:#CCC;" href="user_info.php?id=<?php echo $list['user_id'];?>&plan_id=<?php echo $list['client_cat_id']; ?>">Add Details</a>
                                <?php
									}else {
								?>
										<a href="user_info_gl.php?id=<?php echo $list['user_id'];?>&plan_id=<?php echo $list['client_cat_id']; ?>">Add Details</a>
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
                                <td>
								<?php echo @$list['city']; ?>
                              
                                </td>
								
								<td>
                               
								
                                <a href="user_edit_gl.php?id=<?php echo $list['user_id'];?>" data-sfid='"<?php echo $list['user_id'];?>"' role="button" class="btn green edit" data-toggle="modal">
											 Edit Details
										</a>
										</td>
                                <td>
								<a href="user_delete.php?id=<?php echo $list['user_id'];?>" class="btn green alert1">Delete</a>
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
                            <div class="tab-pane" id="tab_4">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Platinum Users Account Details
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
										<table class="table table-striped table-bordered table-hover" id="sample_6">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_6 .checkboxes"/>
								</th>
								<th>
									 Username
								</th>
								<th>
									 Email
								</th>
								<th>
									 Company Name
								</th>
								
                                <th>
                                	Joined
								</th>
									<th>
                                	Approval 
								</th>
							
                                <th>
                                	Contact Number
                                </th>
								
                                <th>
                                	Company Info
                                </th>
                                <th>
										Person Name
                                </th>
								
                                <th>
                                	Person Type
                                </th>
                                <th>
                                	Person city
                                </th>
                                
								<th>
                                	Edit Details
                                </th>
                                <th>
                                	Delete Users
                                </th>
                              
							</tr>
							</thead>
							<tbody>
                            <?php
							//$lists = $users->get_users();
                            		$lists = $admin->get_all_registerd_details();
								
							foreach($lists as $list)
							{
								if($list['client_cat_id'] == 4)
								{
							?>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 <?php echo $list['user_name']; ?>
								</td>
								<td>
									<a href="mailto:<?php echo $list['user_email'];?>">
										 <?php echo $list['user_email']; ?>
									</a>
								</td>
								<td>
									 <?php echo $list['user_comp_name']; ?>
								</td>
								<td class="center">
									 <?php echo date('d-m-Y',$list['user_time']); ?>
								</td>
								<td>
                               		
								
                                	<?php
                                	if($list['admin_confirmed'] == 0)
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
                                         
                                         
									<?php
									}

									?>
									</td>
                                <td>
                                <?php echo $list['user_number']; ?>
                                </td>
                                <td>
                                	<?php
									$user_id = $list['user_id'];
									$user_comp = $admin->count_company($user_id);
									$img = $admin->count_info_images($list['user_id']);
									$pdf = $admin->count_info_pdf($list['user_id']);
									$logo = $admin->logo($list['user_id']);
									if($user_comp == true && $img==5 && $pdf == 1 && ($logo['info_logo']!= 'images/nologo.png'))
									{
										
								?>
                                <a class="disabling" style="color:#CCC;" href="user_info_platinum.php?id=<?php echo $list['user_id'];?>&plan_id=<?php echo $list['client_cat_id']; ?>">Add Details</a>
                                <?php
									}else {
										
								?>
										<a href="user_info_platinum.php?id=<?php echo $list['user_id'];?>&plan_id=<?php echo $list['client_cat_id']; ?>">Add Details</a>
								<?php
									}
								?>
                                </td>
								                 <td>

										<?php echo @$list['person_name'];?>
										</td>
								
                                <td>

										<?php echo @$list['person_type'];?>               
										</td>
                                <td>

										<?php echo @$list['city'];?>
										</td>
<td>								
                                
                                <a href="user_edit_pl.php?id=<?php echo $list['user_id'];?>" data-sfid='"<?php echo $list['user_id'];?>"' role="button" class="btn green edit" data-toggle="modal">
											 Edit Details
										</a>

			   </td>
                                <td>
                                
								<a href="user_delete.php?id=<?php echo $list['user_id'];?>" class="btn green alert1">Delete</a>
</td>
								</tr>
							<?php
								}
							}
							?>
							</tbody>
							</table>
										<!-- END FORM-->
									</div>
								</div>
							</div>
                            
                            <div class="tab-pane" id="tab_5">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Recent Updates
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
                                        <form action="updates_recent.php" id="form_sample_8" class="form-horizontal" method="post">
                                            <div class="form-body">
                                                <div class="alert alert-danger display-hide">
                                                    <button class="close" data-close="alert"></button>
                                                    You have some form errors. Please check below.
                                                </div>
                                                <?php
                                                    if(isset($_GET['msg']))
                                                    {
                                                    ?>
                                                <div class="alert alert-success">
                                                    <button class="close" data-close="alert"></button>
                                                    <?php
                                                    
                                                        echo $_GET['msg'];
                                                    ?>
                                                    
                                                </div>
                                                <?php
												}
												?>
                                                
                                                
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">User
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <?php $users = $users->get_usersbyclient(); ?>
                                                        <select class="form-control" name="user">
                                                            <option value="">Select...</option>
                                                            <?php
                                                            foreach($users as $user)
                                                            {
                                                            ?>
                                                            
                                                            <option value="<?php echo $user['user_id'];?>">
                                                            <?php echo ucfirst($user['user_comp_name']); ?>
                                                            </option>
                                                            <?php
                                                            }
                                                            ?>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group last">
                                                    <label class="control-label col-md-3">Updates
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <textarea class="form-control" rows="2" name="updates" data-error-container="#editor_error"></textarea>
                                                    <div id="editor_error">
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
								
								
								
								
							</div> <!-- end tab5! -->
							      <div class="tab-pane" id="tab_6">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Invoice
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
                                        <form name="myform" action="invoice.php" id="form_sample_8" class="form-horizontal" method="post">
                                            <div class="form-body">
                 <div class="row hidden-print">
				<div class="col-md-12">
                                                			<!-- BEGIN PAGE CONTENT-->
			<div class="invoice">

               
               <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-7  invoice-logo-space"><img src="assets/img/invoice/smp_logo.png" alt="" height="100px"/></div>
                        <div class="col-md-4">
                                            <table>
                     <tr>
                      <td>Contract No.</td><td>&nbsp;&nbsp;</td>
                      <td><input class="form-control" type="text" name="contract_no" data-required="1"  />
                      <div style="margin-top:5px;"></div>
                      </td>
                      
                     </tr>
                     
                     <tr>
                      <td>City Name</td><td></td>
                      <td><input class="form-control" type="text" name="city_name" data-required="1" >
                       <div style="margin-top:5px;"></div>
                      </td>
                     </tr>
                    
                     <tr>
                      <td>Date</td><td></td>
                      <td><input class="form-control" type="text" name="contract_date" data-required="1" /></td>
                     </tr>
                    </table>
                    </div>
                      </div>
					</div>
				</div>  
                
                
                <hr/>
                <div class="row ">
					<div class="col-xs-12" align="center">
						(Contract cum Receipt Form)
					</div>
				</div>
				<br><br>
               <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-2"> Company Name </div>
                        <div class="col-md-5"><input type="text" name="company_name" data-required="1" class="form-control" /></div>
                        <div class="col-md-5"></div>
                      </div>
					</div>
				</div>  
               <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-2"> Contact Person 01 </div>
                        <div class="col-md-5"><input type="text" name="contact_person" data-required="1" class="form-control" /></div>
                        <div class="col-md-5"></div>
                      </div>
					</div>
				</div>
               <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-2"> Designation </div>
                        <div class="col-md-5"><input type="text" name="designation" data-required="1" class="form-control" /></div>
                        <div class="col-md-5"></div>
                      </div>
					</div>
				</div>
               <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-2"> Contact Person 02 </div>
                        <div class="col-md-5"><input type="text" name="contact_person2" data-required="1" class="form-control"/></div>
                        <div class="col-md-5"></div>
                      </div>
					</div>
				</div>
               <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-2"> Designation </div>
                        <div class="col-md-5"><input type="text" name="designation2" data-required="1" class="form-control"/></div>
                        <div class="col-md-5"></div>
                      </div>
					</div>
				</div>
               <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-2"> Address </div>
                        <div class="col-md-5"> <textarea  name="address" class="form-control" ></textarea></div>
                        <div class="col-md-5"></div>
                      </div>
					</div>
				</div>  
               <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-2"> City </div>
                        <div class="col-md-5"><input type="text" name="city" data-required="1" class="form-control" /></div>
                        <div class="col-md-1"></div>
                        <div class="col-md-1"> Pincode </div>
                        <div class="col-md-3"><input type="text" name="pincode" data-required="1" class="form-control" /></div>
                      </div>
					</div>
				</div> 
               <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-2"> State </div>
                        <div class="col-md-5"><input type="text" name="state" data-required="1" class="form-control" /></div>
                        <div class="col-md-5"></div>
                      </div>
					</div>
				</div> 
               <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-2"> Telephone 01 </div>
                        <div class="col-md-5"><input type="text" name="telephone1" data-required="1" class="form-control" /></div>
                        <div class="col-md-1"></div>
                        <div class="col-md-1"> Fax </div>
                        <div class="col-md-3"><input type="text" name="fax" data-required="1" class="form-control"/></div>
                      </div>
					</div>
				</div> 
                <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-2"> Telephone 02 </div>
                        <div class="col-md-5"><input type="text" name="telephone2" data-required="1" class="form-control"/></div>
                        <div class="col-md-5"></div>
                      </div>
					</div>
				</div> 
               <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-2"> E-mail </div>
                        <div class="col-md-5"><input type="email" name="email" data-required="1" class="form-control" /></div>
                        <div class="col-md-5"></div>
                      </div>
					</div>
				</div> 
               <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-2"> Website </div>
                        <div class="col-md-5"><input type="text" name="website" data-required="1" class="form-control"/></div>
                        <div class="col-md-5"></div>
                      </div>
					</div>
				</div>                
               <div class="row "><br><br>
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-2"> Company Details </div>
                        <div class="col-md-10"></div>
                      </div>
					</div>
				</div>  
               <div class="row">
					<div class="col-xs-12" align="left">
					 <div class="form-group">
                        <div class="col-md-1"> </div>
                        <div class="col-md-1"> Type </div>
                        <div class="col-md-5"><select class="form-control" name="company_type" >
                                                   <option value="">Select...</option>
                                                   <option value="Proprietership">Proprietership</option>
                                                   <option value="Partnership">Partnership</option>
                                                   <option value="Pvt.Ltd.">Pvt.Ltd.</option>
                                                   <option value="Public Ltd.">Public Ltd.</option>
                                                   <option value="ProfessionalAssociation">Professional Association</option>
                                                   <option value="NPO+NGO">NPO/NGO</option>
                                                   <option value="others">Others</option>
                                                   
                                                   </select>
                                                   </div>
                        <div class="col-md-5"></div>
                      </div>
					</div>
				</div>  
               <div class="row "><br><br>
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-2"> Billing/Payment Details </div>
                        <div class="col-md-5"></div>
                        <div class="col-md-5"></div>
                      </div>
					</div>
				</div>  
                
      	
        
                 <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-1"></div>
                        <div class="col-md-2"> Type </div>
                        <div class="col-md-3"><select class="form-control" name="billing_type" >
                                                   <option value="">Select...</option>
                                                   <option value="New">New</option>
                                                   <option value="Renewal">Renewal</option>
                                                   </select></div>
                      </div>
					</div>
				</div> 
                 <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-1"></div>
                        <div class="col-md-2"> Plan </div>
                        <div class="col-md-3">
                        <select class="form-control" name="plan" >
                                                   <option value=""></option>
                                                   <option value="Starter">Starter</option>
                                                   <option value="Basic">Basic</option>
                                                   <option value="Sliver">Sliver</option>
                                                   <option value="Gold">Gold</option>
                                                   <option value="Platinum">Platinum</option>
                                                   <option value="Banner Ad A">Banner Ad A</option>
                                                   <option value="Banner Ad B">Banner Ad B</option>
                                                   <option value="BannerAdC">Banner Ad C</option>
                                                   <option value="StarterPlusB">Starter Plus B</option>
                                                   <option value="StarterPlusC">Starter Plus C</option>
                                                   <option value="BasicPlusB">Basic Plus B</option>
                                                   <option value="BasicPlusC">Basic Plus C</option>
                                                   <option value="SliverPlusB">Sliver Plus B</option>
                                                   <option value="GoldPlusB">Gold Plus B</option>
												 <option value="GoldPlusC">Gold Plus C</option>
												   <option value="PlatinumPlusB">Platinum Plus B</option>
												   <option value="PlatinumPlusC">Platinum Plus C</option>
                                                   </select>
									</div>
                      </div>
					</div>
				</div>
                 <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-1"></div>
                        <div class="col-md-2"> Charges </div>
                        <div class="col-md-3"> <input type="text" name="charges" id="charges_txt" onKeyPress="return isNumber(event)" data-required="1" class="form-control" /> </div>
                      </div>
					</div>
				</div>
                 <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-1"></div>
                        <div class="col-md-2"> V.A.S.(Value Added Services) </div>
                        <div class="col-md-3">
							<select class="form-control" name="vas" >
                                                   <option value=""></option>
                                                   <option value="Social media optimization">Social media optimization</option>
                                                   <option value=" Pay Per Click;"> Pay Per Click</option>
                                                   <option value="PLC">P.L.C</option>
                                                   <option value="e-mail marketing">e-mail marketing</option>
                              </select>
						</div>
                      </div>
					</div>
				</div>
                 <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-1"></div>
                        <div class="col-md-2">V.A.S. Charges </div>
                        <div class="col-md-3"> <input type="text" name="vas_charges" id="vas_charges_txt" onKeyPress="return isNumber(event)" data-required="1" class="form-control" /> </div>
                      </div>
					</div>
				</div>
                 <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-1"></div>
                        <div class="col-md-2"> Payment Mode </div>
                        <div class="col-md-3"><select class="form-control" name="payment_mode" onBlur="cal_total()"/>
                                                   <option value=""></option>
                                                   <option value="Cash">Cash</option>
                                                   <option value="Cheque">Cheque</option>
                                                   </select> </div>  
                      </div>
					</div>
				</div>                
                 <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-1"></div>
                        <div class="col-md-2"> Total </div>
                        <div class="col-md-3"> <input type="text" name="total" id="tot_txt" data-required="1" class="form-control" onClick="sum()" readonly/> </div>
                      </div>
					</div>
				</div>  
                
			
               <div class="row "><br><br><br>
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-8"></div>
                        <div class="col-md-2">Total Contract Value Rs.</div>
                        <div class="col-md-2"> <input type="text" name="total_value" id="tot_val__txt" data-required="1" class="form-control" readonly/></div>
                      </div>
					</div>
				</div> 
              <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-8"></div>
                        <div class="col-md-2">Service Tax@12.36%</div>
                        <div class="col-md-2"> <input type="text" name="service_tax" id="service_tax" data-required="1" class="form-control" readonly/></div>
                      </div>
					</div>
				</div> 
              <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-4">Executive Name/Associate Name<input type="text" name="executive_name" data-required="1" class="form-control"/></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-2">Total Amount Received Rs.</div>
                        <div class="col-md-2"><input type="text" name="total_amount" id="total_amount" data-required="1" class="form-control" readonly/></div>
                      </div>
					</div>
				</div>  
              <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">(THE ABOVE CHARGE IS FOR A PERIOD OF 1 YEAR)</div>
                      </div>
					</div>
				</div>                 
               <div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-1">Code</div>
                        <div class="col-md-3"><input type="text" name="code" data-required="1" class="form-control"/></div>
                        <div class="col-md-8"></div>
                      </div>
					</div>
				</div>                 
                
                  <div class="row "><br><br>
					<div class="col-md-12">
					 <div class="form-group">
                        
                        <div class="col-md-4 pull-right"><img src="assets/img/invoice/smp_sign.png" alt="" /></div>
                      </div>
					</div>
				</div>               
                	
				<div class="row ">
					<div class="col-xs-12" align="left">
					 <div class="form-group" >
                        <div class="col-md-9"></div>
                        <div class="col-md-2" align="center">Authorised Signature</div>
                      </div>
					</div>
				</div> 
                
                
                
 				<div class="row ">
					<div class="col-xs-12" align="left">
                       <b>Note :-</b> This receipt has been issued against your payment and your confirmation on the terms & conditions for registration on  searchmypage.in
					</div>
				</div> 
                
                
                
                
			 </div>	
			<!-- END PAGE CONTENT-->
             </div></div>                              </div>
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

	

							
								
							</div> <!-- end tab6! -->
							
							      <div class="tab-pane" id="tab_7">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Admin Account
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
                                        <form action="register_sub_admin.php" id="form_sample_9" class="form-horizontal" method="post">
                                            <div class="form-body">
                                                <div class="alert alert-danger display-hide">
                                                    <button class="close" data-close="alert"></button>
                                                    You have some form errors. Please check below.
                                                </div>
                                                <?php
                                                    if(isset($_GET['msg']))
                                                    {
                                                    ?>
                                                <div class="alert alert-success">
                                                    <button class="close" data-close="alert"></button>
                                                    <?php
                                                    
                                                        echo $_GET['msg'];
                                                    ?>
                                                    
                                                </div>
                                                <?php
												}
												?>
                                                
                                                
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Person Name
                                                    <!--<span class="required">
                                                         *
                                                    </span>-->
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="name" data-required="1" class="form-control"/>
                                                    </div>
                                                </div>
        										<div class="form-group">
                                                    <label class="col-md-3 control-label">Password
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        
                                                                <input type="password" class="form-control" name="password" id="register_sub_password">
                                                                
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Re-type Password
                                                        <span class="required">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        
                                                            
                                                            <input type="password" class="form-control" name="rpassword">
                                                             
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group last">
                                                    <label class="control-label col-md-3">City
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input name="city" type="text" class="form-control"/>
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
                            
							
							      <div class="tab-pane" id="tab_8">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Admin Account
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
                                        <form action="up_admin_pass.php" id="form_sample_7" class="form-horizontal" method="post">
                                            <div class="form-body">
                                                <div class="alert alert-danger display-hide">
                                                    <button class="close" data-close="alert"></button>
                                                    You have some form errors. Please check below.
                                                </div>
                                                <?php
                                                    if(isset($_GET['msg']))
                                                    {
                                                    ?>
                                                <div class="alert alert-success">
                                                    <button class="close" data-close="alert"></button>
                                                    <?php
                                                    
                                                        echo $_GET['msg'];
                                                    ?>
                                                    
                                                </div>
                                                <?php
												}
												?>
                                                
                                                
        									        <div class="form-group">
                                                    <label class="col-md-3 control-label">Enter New Password
                                                        <span class="required">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="password" class="form-control" name="password" id="register_admin_password">
                                                             
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Re Enter New Password
                                                        <span class="required">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        
                                                            
                                                            <input type="password" class="form-control" name="rpassword">
                                                             
                                                        
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

                           <div class="tab-pane" id="tab_9">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Sub Admin's Detail
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
										
										$lists = $admin->get_sub_admin();
										
										$i = 1;
                            			
							
									  ?>
                                        
										<table class="table table-striped table-bordered table-hover" id="sample_subad">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_subad .checkboxes"/>
								</th>
								<th>
									  Admin Name
								</th>
		<th>
                               City
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
									 <?php echo $list['admin_name']; ?>
								</td>
								<td>
										 <?php echo $list['city']; ?>
								</td>
							
								<td>
                                <a href="change_password.php?id=<?php echo $list['id'];?>" role="button" class="btn green edit">
											Edit Details
										</a>
                                </td>
                                <td>
								<a href="admin_delete.php?id=<?php echo $list['id'];?>" class="btn green alert1">Delete</a>
						
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
                            
						</div>
                        
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
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

<script>
	function cal_total(){
		 var charge = parseInt(document.getElementById('charges_txt').value);
		 var vas = parseInt(document.getElementById('vas_charges_txt').value);
		 //alert(vas+charge);
		document.getElementById('tot_val__txt').value =  charge+vas;
		document.getElementById('tot_txt').value =  charge+vas;
		total = charge+vas;
		service_tax = total * 12.36/100;
		document.getElementById('service_tax').value= service_tax;
		document.getElementById('total_amount').value= service_tax + total;
		
	}
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>