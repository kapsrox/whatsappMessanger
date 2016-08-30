<?php 
require 'core/init.php';

if(!isset($_SESSION)) { session_start(); }
$general->logged_out_protect();
$username 	= htmlentities($user['admin_name']);
define('MyConst', true);
?>
<?php $id=$_REQUEST['id'];?>
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
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">

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
.disabledTab{
    pointer-events: none;
}
table.mceLayout, textarea.tinyMCE {
    width: 100% !important;
}

.note-desktop {
    display: none;
}

/* make the toolbar wrap */
.mceToolbar td {
	display:table-row;
	float: left;
}
.mceToolbar td:nth-of-type(11){
	clear: left;
}

@media only screen and (min-width: 600px) {
    table.mceLayout, textarea.richEditor {
       width: 100% !important;
    }
    
    .note-desktop {
        display: block;
    }
    .note-mobile {
        display: none;
    }
    
    /* remove the toolbar wrap */
    .mceToolbar td {
	    display:table-cell;
	    float: none;
    }
    mceToolbar td:nth-of-type(11){
	    clear: none;
    }
}
</style>

<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="uploadifive/jquery.uploadifive-v1.0.js" type="text/javascript"></script>
<script>
function showCat(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","get_sub.php?q="+str,true);
xmlhttp.send();
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
				
				<li class="active">
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
							<a href="manager.php">
								User Manager
                                <i class="fa fa-angle-right"></i>
							</a>
						</li>
                        
                        <li>
							<a href="">
								Platinum User
                                
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
									 Edit User
								</a>
							</li>
                            <?php
							$id = $_GET['id'];
							$kk = $admin->count_company($id);
							$file = $admin->count_pdf($id);
							$img = $admin->count_info_images($id);
							if($kk === false)
							{
							?>
							<li class="disabled disabledTab">
								<a href="#tab_1" data-toggle="tab">
									 Platinum Users Additional Details
								</a>
							</li>
                            <?php
							}elseif($kk === true){
							?>
                            <li>
								<a href="#tab_1" data-toggle="tab">
									 Platinum Users Additional Details
								</a>
							</li>
                            <?php
							}
							?>
							<?php
							if($img == 0)
							{
							?>
                            <li class="disabled disabledTab">
								<a href="#tab_2" data-toggle="tab">
									 Platinum Users Slider Images
								</a>
							</li>
                            <?php
							}else
							{
							?>
                            <li>
								<a href="#tab_2" data-toggle="tab">
									 Platinum Users Slider Images
								</a>
							</li>
                            <?php
							}
							?>
                            <?php
                            if($file == false)
                            {
                            ?>
                            <li class="disabled disabledTab">
								<a href="#tab_3" data-toggle="tab">
									 Platinum Users PDF/PPT
								</a>
							</li>
							<?php
							}elseif($file == true) {
							?>
							<li>
								<a href="#tab_3" data-toggle="tab">
									 Platinum Users PDF/PPT
								</a>
							</li>
							<?php
							}
							?>
						
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
                                        <form action="update_user.php?id=<?php echo $_GET['id']; ?>" id="form_sample_1" class="form-horizontal" method="post">
                                        <?php  $id = $_GET['id']; 
										$rows = $admin->get_cat_id($id);  ?>
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
                                                    <label class="control-label col-md-3">Plans
                                                    <!--<span class="required">
                                                         *
                                                    </span>-->
                                                    </label>
                                                    <div class="col-md-4">
                                                    
                                                    <input type="text" style="display:none;" name="client_cat" data-required="1" class="form-control" value="<?php echo $rows['client_cat_id'];?>"/>
                                                    
                                                        <input disabled type="text" name="cat_client" data-required="1" class="form-control" value="<?php echo $rows['client_cat_name'];?>"/>
                                                    
                                                    </div>
                                                </div>
                                                <?php
												$id = $_GET['id'];
												$basics = $users->userdata($id);
												//foreach($basics as $basic):
												
												?>
                                                
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Person Name
                                                    <!--<span class="required">
                                                         *
                                                    </span>-->
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="username" data-required="1" class="form-control" value="<?php echo $basics['user_name'];?>"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Email
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input name="email" type="text" class="form-control" value="<?php echo $basics['user_email'];?>"/>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Company Name
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="companyName" data-required="1" class="form-control" value="<?php echo $basics['user_comp_name'];?>"/>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Contact Number
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input name="number" type="text" class="form-control" value="<?php echo $basics['user_number'];?>"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Contact Number 2 
                                                   </label>
                                                    <div class="col-md-4">
                                                        <input name="number2" type="text" class="form-control" value="<?php echo $basics['user_number2'];?>"/>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group last">
                                                    <label class="control-label col-md-3">City
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input name="city" type="text" class="form-control" value="<?php echo $basics['city'];?>"/>
                                                    </div>
                                                </div>
                                                <?php
												//endforeach;
												?>
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
							<?php
												
												$modals = $admin->get_all_registerd_modal($id);
												$cat_sub = $admin->get_id_info_cat_sub($id);
												$cat_sub = $admin->get_com($id);
													
													
												?>
                            
                           <div class="tab-pane" id="tab_1">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Edit Additional Info
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
                                        <form action="update_plans.php?id=<?php echo $_GET['id'];?>" id="form_sample_6" class="form-horizontal" method="post">
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
                                                    <label class="control-label col-md-3">Categories
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <?php
														
															$cats = $admin->get_all_info_cat_sub(); 
															$caty = explode(',',$cat_sub['cat_id']);
															
														?>   
														<select class="form-control" name="category_multiple[]" id="cat_multiple" multiple onChange="subcategory_get(this.value)">
                                                              <?php foreach($cats as $value){ 
    $selected = in_array($value['cat_id'], $caty) ? ' selected="selected" ' : ''; 
    ?>
    <option value="<?php echo $value['cat_id'];?>" <?php echo $selected;?> > <?php echo $value['cat_name'];?> </option>
    <?php
}
    ?> 
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div id="txtHint">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Sub Categories
                                                    
                                                    </label>
                                                    <div class="col-md-4">
                                                       <select class="form-control" multiple name="subcategory_multiple[]" id="subcategory_multiple"> 
                                                       <?php		
                                                                    $val = explode(',',$cat_sub['subc_id']);
																
																
																
																foreach($val as $v):
																	
																	$subs = $admin->findsub($v);?>
                                                                    <optgroup label="<?php echo $subs['cat_name'];?>">
                                                                    <option selected value="<?php echo $subs['subc_id'];?>"><?php echo $subs['subc_name'];?></option>
                                                                    </optgroup>
																	
																<?php endforeach;
																?>   
                                                         </select>            
                                                    </div>
                                                </div>
                                               </div>
                                                
                                                <input style="display:none;" type="text" name="id" value="<?php echo  $_GET['id'];?>" id="uid">
                                                
                                   <div class="form-group">
                                                    <label class="control-label col-md-3">Website Url
                                                    
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="url"  class="form-control"  value="<?php echo $cat_sub['info_url']; ?>"/>
                                                    </div>
                                   </div>         	
                                                
                                   <div class="form-group">
                                                    <label class="control-label col-md-3">Youtube Video Url
                                                    
                                                    </label>
                                                    <div class="col-md-4">
                                                    
                                                        <textarea id="video_string_input" class="form-control" name="tube"><?php echo $cat_sub['info_tube']; ?> </textarea>
                                                        <div class="btn-group btn-group-xs btn-group-solid">
										
									
                                                        <button id="video_string_button" class="btn green" type="button">Validate</button>
                                                    	</div>
                                                    </div>
                                   </div>
                                   
                                   <div class="form-group">
										<label class="control-label col-md-3">Information
										
										</label>
										<div class="col-md-9">
											<textarea class="form-control" id="elm1" name="information"  rows="6"><?php echo $cat_sub['info_information']; ?></textarea>
											<div id="editor2_error">
											</div>
										</div>
									</div>         	
                                   
                                                
                                   <div class="form-group">
										<label class="control-label col-md-3">Edit Product Desc
										
										</label>
										<div class="col-md-9">
											<textarea class="form-control" id="elm2" name="prod_desc"  rows="6"><?php echo $cat_sub['info_prod_desc']; ?></textarea>
											<div id="editor4_error">
											</div>
										</div>
									</div>
                                    
                                   
                                   <div class="form-group">
										<label class="control-label col-md-3">Additional Information
										
										</label>
										<div class="col-md-9">
											<textarea class="form-control" id="elm3" name="additional_information"  rows="6"><?php echo $cat_sub['info_aditional']; ?></textarea>
											<div id="editor2_error">
											</div>
										</div>
									</div>         	
                                    
 												
									<div class="form-group">
                                         <label class="control-label col-md-3">Company Location
                                                    
                                         </label>
                                         <div class="col-md-4">
                                                        <input type="text" name="info_location" placeholder="Insert Your Company Map Location" class="form-control" value="<?php echo $cat_sub['info_location'];?>"/>
                                         <label style="color:red;font-size:14px;"><span>Note :- Copy Only Src code Without Height & Width From Embed Code From Google Map</span></label>           
                                         </div>
                                                
                                    </div>

                                    <div class="form-group last">
										<label class="control-label col-md-3"> Address
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-9">
											<textarea class="form-control"  name="address" cols="90"  rows="6" data-error-container="#editor2_error"><?php echo $cat_sub['info_address']; ?></textarea>
											<div id="editor2_error">
											</div>
										</div>
										
									</div>
                                    
									  <div class="form-group">
                                                    <label class="control-label col-md-3">Landmark
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input name="info_landmark" type="text" class="form-control" value="<?php echo $cat_sub['info_landmark'];?>" />
                                                    </div>
                                                </div>
                                    
									<?php ?>
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
								
								
								
								
							</div><!-- End tab1 -->
                            
                            <div class="tab-pane" id="tab_2">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Slider Image Details
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
										
										$lists = $admin->get_info_img($id);
										$i = 1;
                            			
							
									  ?>
                                        
										<table class="table table-striped table-bordered table-hover" id="sample_7">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_7 .checkboxes"/>
								</th>
								<th>
									 Slider Images
								</th>
								
                                <th>
                                	Edit 
                                </th>
                                <th>
                                	Delete
                                </th>
                               
							</tr>
							</thead>
							<tbody>
                            <?php
								
							foreach($lists as $list):
								if($list['plan_id'] == 4)
								{
							?>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 <img src="../users_img/<?php echo $list['info_img']; ?>" width="100" height="100" />
								</td>
								
                                <td>
                                <a href="edit_img_pl.php?id=<?php echo $list['user_id'];?>&plan_id=<?php echo $list['plan_id'];?>&info_id=<?php echo $list['info_slide_id']; ?>" data-sfid='"<?php echo $list['user_id'];?>"' role="button" class="btn green edit" data-toggle="modal">
											 Edit Image
										</a>
                                </td>
                                <td><a href="delete_img.php?id=<?php echo $list['info_slide_id'];?>" class="btn green alert1">Delete</a></td>
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
							</div><!-- End tab2 -->
                            
                             <div class="tab-pane" id="tab_3">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Edit PDF/PPT Details
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
										
										$lists = $admin->get_info_pdf($id);
										$i = 1;
                            			
							
									  ?>
                                        
										<table class="table table-striped table-bordered table-hover" id="sample_ed_pdf">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_ed_pdf .checkboxes"/>
								</th>
								<th>
									 Slider Images
								</th>
								
                                <th>
                                	Edit 
                                </th>
                                <th>
                                	Delete
                                </th>
                               
							</tr>
							</thead>
							<tbody>
                            <?php
							foreach($lists as $list):	
							
							
								if($list['plan_id'] == 4)
								{
							?>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 <?php echo $list['info_pdf']; ?>
								</td>
								
                                <td>
                                <a href="edit_pdf_pl.php?id=<?php echo $list['info_pdf_id'];?>&plan_id=<?php echo $list['plan_id'];?>&info_id=<?php echo $list['info_pdf_id']; ?>" data-sfid='"<?php echo $list['user_id'];?>"' role="button" class="btn green edit" data-toggle="modal">
											 Edit PDF/PPT
										</a>
                                </td>
                                <td><a href="delete_pdf.php?id=<?php echo $list['info_pdf_id'];?>" class="btn green alert1">Delete</a></td>
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
							</div><!-- End tab3 -->
                           
                            
							
							
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
<script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.limit-1.2.source.js"></script>
<script src="assets/plugins/jquery-idle-timeout/jquery.idletimeout.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-idle-timeout/jquery.idletimer.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-markdown/lib/markdown.js"></script>
<script type="text/javascript" src="assets/plugins/tinymce_1/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootbox/bootbox.min.js"></script>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/core/app.js"></script>
<script src="assets/scripts/custom/form-validation.js"></script>
<script src="assets/scripts/custom/table-managed.js"></script>
<script src="assets/scripts/custom/ui-idletimeout.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.timers-1.0.0.js"></script>

<script type="text/javascript">
		$(function() {
			$('#file_upload1').uploadifive({
				'auto'         : false,
				'formData'     : {'userid': $("#uid1").val() },
				'fileType'     : 'image/',
				'queueID'      : 'queue1',
				'uploadScript' : '../admin/img_logo.php',
				'onUploadComplete' : function(file, data) {
					console.log(data);
				}
			});
		});
	</script>
    
<script type="text/javascript">
		$(function() {
			$('#file_upload2').uploadifive({
				'auto'         : false,
				'formData'     : {'userid': $("#uid3").val(), 'plan_id': $("#uid2").val() },
				'queueID'      : 'queue2',
				'uploadScript' : '../admin/uploadify_demo.php',
				'uploadLimit'  : 1,
				'fileType'     : 'application',
				'fileTypeExts' : '*.pdf; *.ppt',
				
				'onUploadComplete' : function(file, data) {
					console.log(data);
				}
			});
		});
	</script>
<script type="text/javascript">

//tinyMCE.init({
//    mode : "exact",
//	editor_selector: "tinyMCE",
//    theme : "advanced",
//	elements : "elm1",
//    theme_advanced_toolbar_location : "top",
//    theme_advanced_toolbar_align : "left",
//	theme_advanced_resizing : "true",
//	theme_advanced_resize_horizontal : "true",
//    theme_advanced_buttons1 : 
//      "formatselect, bold, italic, underline, separator, " + 
//	  "justifyleft, justifycenter, justifyright, indent, outdent, separator, " + 
//	  "bullist, numlist, separator, link, unlink, separator, undo, redo,image",
//	theme_advanced_buttons2 : "",
//	theme_advanced_buttons3 : "",
//	plugins : "maxchars",
// 	max_chars : 300,
//	 max_chars_indicator : "information",
//	 setup : function(ed) {
// ed.onKeyUp.add(function(ed, e) {
// 
////manually setting our max character limit
// tinymax = 300;
// var strip = (tinyMCE.activeEditor.getContent()).replace(/(<([^>]+)>)/ig,"");
// tinylen = strip.length;
// htmlcount = "You have entered: " + tinylen + " characters";
// 
////if the user has exceeded the max turn the path bar red.
// if (tinylen>tinymax){
// htmlcount = "<span style='font-weight:bold; color: #f00; !important!'> You have exceeded the limit </span>"
// }
// tinymce.DOM.setHTML(tinymce.DOM.get(tinyMCE.activeEditor.id + '_path_row'), htmlcount);
// });
// }
//	
//	
//	
//});



tinyMCE.init({
    mode : "exact",
	editor_selector: "tinyMCE",
    theme : "modern",
	elements : "elm1, elm2,elm3",
    theme_advanced_toolbar_location : "top",
    theme_advanced_toolbar_align : "left",
	theme_advanced_resizing : "true",
	theme_advanced_resize_horizontal : "true",
    theme_advanced_buttons1 : 
      "formatselect, bold, italic, underline, separator, " + 
	  "justifyleft, justifycenter, justifyright, indent, outdent, separator, " + 
	  "bullist, numlist, separator, link, unlink, separator, undo, redo,image",
	theme_advanced_buttons2 : "",
	theme_advanced_buttons3 : ""
	
	
	
	
});


</script>

<script>
jQuery(document).ready(function() {    
   // initiate layout and plugins
   App.init();
   FormValidation.init();
   TableManaged.init();
   UIIdleTimeout.init();
   
   
   //$('a.edit').click(function(){
//var sfid = $(this).data('sfid');
//$('#mysfid').val(sfid);
//$('#mycompany').val(company);
//$('#mydealerclass').val(dealerclass);
//});

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
		function subcategory_get(){
			var ids = '';
			for(x=0; x<=document.getElementById("cat_multiple").options.length-1; x++){
				if(document.getElementById("cat_multiple").options[x].selected){
					ids += document.getElementById("cat_multiple").options[x].value+", ";
				}
			}
		console.log(ids);
			var xmlhttp;
			if( window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
					console.log(xmlhttp.responseText);
					document.getElementById("subcategory_multiple").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("POST", "subcategory.php", true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.send("ids = "+ids);
		}
	</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>