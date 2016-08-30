<?php
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
                
                <li class="">
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
			<!-- BEGIN PAGE CONTENT--> <div class="tab-pane" id="tab_1">
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
										<?php 				
										$id = $_GET['id'];
										$lists = $users->get_sub_cat($id);
										
										$i = 1;
                       
										?>
                                        <form action="update_sub.php?id=<?php echo $id;?>" id="form_sample_1" class="form-horizontal" method="post">
                                            <div class="form-body">
                                                
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Choose Category
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <?php
                                                        //$cat = $admin->get_cat(); 
                                                    //   $result = mysqli_query("SELECT * FROM categories");
                                                        ?>
                                                        <select class="form-control" name="category">
                                                        <?php

                                                        ?>
                                                            <?php
                                                 //while($row = mysqli_fetch_array($result)) 
						//	{
      															?>
                                                            	
                                                            <option value="<?php echo $lists['cat_id'];?>" "selected">
                                                            <?php echo ucfirst($lists['cat_name']); ?>
                                                            </option>
                                                            <?php
                                                         //   }
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
                                                        <input type="text" name="sub_cat_name" value="<?php echo $lists['subc_name'];?>" data-required="1" class="form-control"/>
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
                          
								
								
							</div><!-- End tab0 -->
                            
							
                            
							<!--<div class="tab-pane " id="tab_2">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Form Sample
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
										<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th>
									 Rendering engine
								</th>
								<th>
									 Browser
								</th>
								<th>
									 Platform(s)
								</th>
								<th>
									 Engine version
								</th>
								<th>
									 CSS grade
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 4.0
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 4
								</td>
								<td>
									 X
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 5.0
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 5
								</td>
								<td>
									 C
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 5.5
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 5.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 6
								</td>
								<td>
									 Win 98+
								</td>
								<td>
									 6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 7
								</td>
								<td>
									 Win XP SP2+
								</td>
								<td>
									 7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 AOL browser (AOL desktop)
								</td>
								<td>
									 Win XP
								</td>
								<td>
									 6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 1.0
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 1.5
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 2.0
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 3.0
								</td>
								<td>
									 Win 2k+ / OSX.3+
								</td>
								<td>
									 1.9
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Camino 1.0
								</td>
								<td>
									 OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Camino 1.5
								</td>
								<td>
									 OSX.3+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape 7.2
								</td>
								<td>
									 Win 95+ / Mac OS 8.6-9.2
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape Browser 8
								</td>
								<td>
									 Win 98SE+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape Navigator 9
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.0
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.1
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.2
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.2
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.3
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.3
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.4
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.4
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.5
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.6
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.7
								</td>
								<td>
									 Win 98+ / OSX.1+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.8
								</td>
								<td>
									 Win 98+ / OSX.1+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Seamonkey 1.1
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Epiphany 2.20
								</td>
								<td>
									 Gnome
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 1.2
								</td>
								<td>
									 OSX.3
								</td>
								<td>
									 125.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 1.3
								</td>
								<td>
									 OSX.3
								</td>
								<td>
									 312.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 2.0
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 419.3
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 3.0
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 522.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 OmniWeb 5.5
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 420
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 iPod Touch / iPhone
								</td>
								<td>
									 iPod
								</td>
								<td>
									 420.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 S60
								</td>
								<td>
									 S60
								</td>
								<td>
									 413
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 7.0
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 7.5
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 8.0
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 8.5
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.0
								</td>
								<td>
									 Win 95+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.2
								</td>
								<td>
									 Win 88+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.5
								</td>
								<td>
									 Win 88+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera for Wii
								</td>
								<td>
									 Wii
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Nokia N800
								</td>
								<td>
									 N800
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Nintendo DS browser
								</td>
								<td>
									 Nintendo DS
								</td>
								<td>
									 8.5
								</td>
								<td>
									 C/A<sup>1</sup>
								</td>
							</tr>
							</tbody>
							</table>
									</div>
								</div>
							</div>--> 
                            
							
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
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>