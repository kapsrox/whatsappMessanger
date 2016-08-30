<?php
require 'core/init.php';
$news = $users->get_new_users();
	$counts = $users->count_new_user();

?>

<script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script>
$(function(){
    $('.scroller').slimScroll({
		
		
        
    });
})
</script>
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
						<ul class="dropdown-menu-list scroller" style="height:<?php if($counts ==0){ echo ''; }elseif($counts > 0) {echo '250px';} ?>" >
                        	<?php foreach($news as $new): ?>
							<li>
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
			