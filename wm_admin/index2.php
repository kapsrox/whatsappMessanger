<?php echo getenv('OPENSHIFT_MYSQL_DB_HOST'); ?>
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
<title>Searchmypage.in - admin</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link id="clink" href="../css/style-blue.css" title="style" rel="stylesheet" type="text/css" media="screen" />

<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="../assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="../assets/plugins/select2/select2-metronic.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="../assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="../assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="../lightbox.css" type="text/css" />
<link rel="stylesheet" href="../fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<link rel="stylesheet" href="../header.css" type="text/css" />
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="../favicon.ico"/>
<style>
/*#sitename{
	font-size:2.2em;
	color:#fff;
	line-height:20px;
	margin-left:0px;
}
#logo{
	display:inline;
	margin: 0 auto;
	padding-top: 15px;
	width:60px;
	padding: 15px;
	text-align: center;

}
*/

</style>



</head>
<!-- BEGIN BODY -->
<body class="login">
<div id="bodypat">
<section id="container">

<!-- BEGIN HEADER -->
<header class="clearfix">
<!-- BEGIN LOGO -->
<a style="text-decoration:none;" id="headerlink" href="#" title="home"><img id="logo" src="../images/logo.png" alt="logo" /></a>
<!-- END LOGO -->

<!-- BEGIN NAVIGATION -->
         

<nav>
<ul id="nav" class="clearfix">


    <li><a href="index.php" style="text-decoration:none;" title="Login"><span>Back to webSite</span></a></li>
</ul>
</nav>
<!-- END NAVIGATION -->
</header>
<!-- END HEADER -->


<!-- BEGIN LOGO -->
<!--<div class="logo">
	<a href="index.html" id="sitename">
    
		<img src="assets/img/logo.png" width="50" alt=""/>Searchmypage.in
	</a>
</div>-->
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">

	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="login_auth.php" method="post">
		<h3 class="form-title">Login to your account</h3>
		<?php
		if(isset($_GET['message']))
		{
		?>
        
        <div class="alert alert-danger">
			<button class="close" data-close="alert"></button>
			<span>
				 Enter valid username or password.
			</span>
		</div>
        <?php
		}
		?>
        
        <div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
				 Enter any username and password.
			</span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" id="username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" id="password"/>
			</div>
		</div>
		<div class="form-actions">
			<label class="checkbox">
			<input type="checkbox" name="remember" value="1" id="remember_me"/> Remember me </label>
			<button type="submit" class="btn green pull-right" value="Login">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	
	<!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div style="margin-top:10px;"> </div>
<section id="page">
<?php /*?><?php include('footer.php'); ?><?php */?>
</section>
<!-- END PAGE -->



<!-- BEGIN FOOTER -->

</section>
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
	<script src="assets/plugins/respond.min.js"></script>
	<script src="assets/plugins/excanvas.min.js"></script> 
	<![endif]-->
<script src="../assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- Add fancyBox -->


<script type="text/javascript" src="../fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>

<script src="../assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../assets/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!---->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/core/app.js" type="text/javascript"></script>
<script src="assets/scripts/custom/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!--<script>
            $(function() {
 
                if (localStorage.chkbx && localStorage.chkbx != '') {
                    $('#remember_me').attr('checked', 'checked');
                    $('#username').val(localStorage.username);
                    $('#password').val(localStorage.password);
                } else {
                    $('#remember_me').removeAttr('checked');
                    $('#username').val('');
                    $('#password').val('');
                }
 
                $('#remember_me').click(function() {
 
                    if ($('#remember_me').is(':checked')) {
                        // save username and password
                        localStorage.username = $('#username').val();
                        localStorage.password = $('#password').val();
                        localStorage.chkbx = $('#remember_me').val();
                    } else {
                        localStorage.username = '';
                        localStorage.password = '';
                        localStorage.chkbx = '';
                    }
                });
            });
 
        </script>
-->

<script>

$(document).ready(function() {
 		  App.init();
		  Login.init();
	$(".fancybox").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

</script>
<!-- END JAVASCRIPTS -->
