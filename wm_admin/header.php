<?php 
if(!defined('MyConst')) {
   
   header('Location:index.php');
}else {
	$news = $users->get_new_users();
	$counts = $users->count_new_user();
?>
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="index.html">
			<img src="assets/img/logo.png" alt="logo" class="img-responsive"/>
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="assets/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			
			<!-- END NOTIFICATION DROPDOWN -->
            
            <li class="dropdown" id="header_inbox_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="fa fa-envelope"></i>
					<?php
						
						if($counts == 0)
                    	{
							
						}else{
					
					?>
                    <span class="badge">
                     <?php
						
							echo $counts;
					?>
					</span>
                    <?php
                    	}
					
					?>	
				</a>
				<ul class="dropdown-menu extended inbox">
					<li>
						<p>
							 You have <?php echo $counts;?> new messages
						</p>
					</li>
					<li>
                    	<?php //$counts = 1; ?>
						<ul class="dropdown-menu-list scroller"  style="height:<?php if($counts== 0){ echo '0px'; }elseif($counts > 0) {echo '250px;';} ?>">
                        	<?php foreach($news as $new): ?>
							<li>
                            <?php $new['new_id'];?>
								<a href="new_status.php?id=<?php echo $new['new_id'];?>">
									<span class="photo">
										<img src="./assets/img/avatar2.jpg" alt=""/>
									</span>
									<span class="subject">
										<span class="from">
											 <?php echo $new['new_name']; ?>
										</span>
										<span class="time">
                                        
											 <?php
											$timestamp =$new['new_time'];
											 $timer = $admin->RelativeTime($timestamp);
											 echo $timer;
											 ?>
										</span>
									</span>
									<span class="message">
										 New User Created of <?php echo $new['client_cat_name']; ?> Plan
									</span>
								</a>
							</li>
                            <?php
							endforeach;
							?>
							
						</ul>
					</li>
					
				</ul>
			</li>
			
            <!-- BEGIN INBOX DROPDOWN -->
			
			<!-- END INBOX DROPDOWN -->
			<!-- BEGIN TODO DROPDOWN -->
			
			<!-- END TODO DROPDOWN -->
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="assets/img/avatar1_small.jpg"/>
					<span class="username">
						 <?php echo $username; ?>
					</span>
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					
					<li>
						<a href="logout.php">
							<i class="fa fa-key"></i> Log Out
						</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<?php
}
?>