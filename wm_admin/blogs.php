<?php 
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
<title>Admin | Content Manager</title>
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
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
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
.disabling {
   pointer-events: none;
   cursor: default;
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
<?php include_once('header.php'); ?>
<?php $img = $admin->count_info_images($id); ?>
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
				
				<li>
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
                
                <li class="active">
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
						<li class="active">
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
					Admin <small>Content Area</small>
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
							</a>
                            <i class="fa fa-angle-right"></i>
						</li>
                        
                        <li>
							<a href="">
								User Info
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
									 Add Info
								</a>
							</li>
                             <li>
								<a href="#tab_1" data-toggle="tab">
									View Blog Details
								</a>
							</li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Add Blog's
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
										
                                        
                                       
                                        <form action="insert_blog.php?id=<?php echo $user_id; ?>" id="form_sample_6" class="form-horizontal" method="post" enctype="multipart/form-data">
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
                                                    <label class="control-label col-md-3">Subject
                                                    <span class="required">
											 			*
													</span>
                                                    
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="subject"  class="form-control" />
                                                    </div>
                                                </div>
                                                
                                      <div class="form-group">
										<label class="control-label col-md-3">Blog's Image</label>
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
								
                                                
                                   <div class="form-group last">
										<label class="control-label col-md-3">Blog Description
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-9">
											<textarea class="form-control" id="elm1" name="information"  rows="6" data-error-container="#editor3_error" ></textarea>
										<div id="editor3_error">
											</div>	
										</div>
									</div>
                                    
                                    
                                            </div>
                                            <div class="form-actions fluid">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <input type="submit" name="submit" value="Submit" class="btn green" id="submit" disabled>
                                                    <button type="button" class="btn default">Cancel</button>
                                                </div>
                                            </div>
                                        </form><!-- END FORM-->
                                      

									</div>
								</div>
							</div><!-- End tab0 -->
                            
                            <div class="tab-pane" id="tab_1">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Blogs List
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
										
										$lists = $admin->get_blogs();
										
										$i = 1;
                            			
							
									  ?>
                                        
										<table class="table table-striped table-bordered table-hover" id="sample_8">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_8 .checkboxes"/>
								</th>
								<th>
									 Blog Title
								</th>
								<th>
									 Blog Image
								</th>
								<th>
									 Blog Description
								</th>
								
                                <th>
                                	Blog Date
                                </th>
                                <th>
                                	Blog Status
                                </th>
                                
                                <th>
                                	Edit Blog Details
                                </th>
                                <th>
                                	Delete Blog
                                </th>
                               
							</tr>
							</thead>
							<tbody>
                            <?php
								
								foreach($lists as $list):
								
							?>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 <?php echo $list['blogs_sub']; ?>
								</td>
								<td>
									<img src="../users_img/<?php echo $list['blogs_img']; ?>" width="100" height="100" />
								</td>
								<td>
									 <?php echo $list['blogs_desc']; ?>
								</td>
								<td class="center">
									 <?php echo date('d-m-Y',$list['blogs_timestamp']); ?>
								</td>
								
                                
								<td>
                               
                                <?php	if($list['admin_confirmed'] == 0)
									{
									?>
									<span class="label label-sm label-warning">
										 <a href="status_blog.php?id=<?php echo $list['blogs_id']; ?>&status=<?php echo $list['admin_confirmed']; ?>">De-activate</a>
									</span>
                                    <?php
									}elseif($list['admin_confirmed'] == 1){
									?>
										 <a href="status_blog.php?id=<?php echo $list['blogs_id']; ?>&status=<?php echo $list['admin_confirmed'];?>"><span class="label label-sm label-success">
										 Approved
									</span></a>
                                         
                                     <?php
									}
									?>    
									
								</td>
                                <td>
                                <a href="edit_blogs.php?id=<?php echo $list['blogs_id'];?>" data-sfid='"<?php echo $list['blogs_id'];?>"' role="button" class="btn green edit" data-toggle="modal">
											 Edit Details
										</a>
                                </td>
                                <td><a href="user_delete.php?id=<?php echo $list['blogs_id'];?>" class="btn green alert1">Delete</a></td>
							</tr>
							<?php
							
							
								endforeach;
                            
							
							?>
							</tbody>
							</table>
                            
                            
                            
										<!-- END FORM-->
									</div>
								</div>
							</div> <!---  End #tab1   -->
                                   
							
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
<script type="text/javascript" src="assets/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
<script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.limit-1.2.source.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-markdown/lib/markdown.js"></script>
<script type="text/javascript" src="assets/plugins/tinymce_1/js/tinymce/tinymce.min.js"></script>
<script src="assets/plugins/jquery-idle-timeout/jquery.idletimeout.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-idle-timeout/jquery.idletimer.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/jquery.timers-1.0.0.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/core/app.js"></script>
<script src="assets/scripts/custom/form-validation.js"></script>
<script src="assets/scripts/custom/table-managed.js"></script>
<script src="assets/scripts/custom/ui-idletimeout.js"></script>

<!-- END PAGE LEVEL SCRIPTS -->

<script>
jQuery(document).ready(function() {    
   // initiate layout and plugins
   App.init();
   FormValidation.init();
   TableManaged.init();
   UIIdleTimeout.init();
});
</script>

<script>
$('#img').change(function() {
      if($(this).val()) {
        $('#submit').attr('disabled', false);
      } else {
        $('#submit').attr('disabled', true);
      }
    });
</script>

<script type="text/javascript">

tinyMCE.init({
    mode : "exact",
	editor_selector: "tinyMCE",
    theme : "modern",
	elements : "elm1, elm2",
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
<!-- Thanks to http://shawndelano.com/extract-and-validate-youtube-or-vimeo-id/ -->

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
