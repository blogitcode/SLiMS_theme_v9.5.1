<?php
# @Author:garidinh <user>

?>
<div class="libms-header-logo">
		<div class="container">
			<?php
					if(isset($sysconf['logo_image']) && $sysconf['logo_image'] != '' && file_exists('images/default/'.$sysconf['logo_image'])){
						echo '<center><img class="h-13 w-15" src="images/default/'.$sysconf['logo_image'].'"></center>';
					} else {
						  echo '<img class="h-8 w-8" src="'.assets('images/logo.png').'">';
					}
			?>
			
		</div>
		</div>	

