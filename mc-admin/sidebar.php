<div class="logo">
	<a href="/">
		<img src="images/logo.png" alt="Logo" title="Logo" width="85%"/>
	</a>
</div>
<ul id="menu">
	<a href="index.php"><li class="first-li"><i class="fas fa-eye icon-css"></i><?php echo $lang["dashboards"];?></li></a>
	<div class="dropdown">
	  	<button class="btn" type="button" data-toggle="dropdown">
	   		<i class="fas fa-chart-line icon-css"></i><?php echo $lang["analysis"];?>
	  	</button>
	  	<div class="dropdown-menu">
	    	<!--<a href="data-buy-sell.php" class="dropdown-item"><?php echo $lang["data-buy-sell"];?></a>-->
	    	<a href="data-user.php" class="dropdown-item"><?php echo $lang["data-user"];?></a>
	    	<a href="data-subs.php" class="dropdown-item"><?php echo $lang["data-subs"];?></a>
	    	<!--<a href="data-live-support.php" class="dropdown-item"><?php echo $lang["data-live-support"];?></a>-->
	  	</div>
	</div>
	<!--<div class="dropdown">
	  	<button class="btn" type="button" data-toggle="dropdown">
	    	<i class="fas fa-question-circle icon-css"></i><?php echo $lang["live-support"];?>
	  	</button>
	  	<div class="dropdown-menu">
	    	<a href="live-support.php" class="dropdown-item"><?php echo $lang["live-support"];?></a>
	    	<a href="live-support-bot.php" class="dropdown-item"><?php echo $lang["live-support-bot"];?></a>
	    	<a href="live-support-customize.php" class="dropdown-item"><?php echo $lang["live-support-customize"];?></a>
	  	</div>
	</div>-->
	<a href="about-us.php"><li><i class="fa fa-info icon-css" aria-hidden="true"></i><?php echo $lang["about-us"];?></li></a>
	<div class="dropdown">
	  	<button class="btn" type="button" data-toggle="dropdown">
	    	<i class="fa fa-envelope-o icon-css" aria-hidden="true"></i><?php echo $lang["email"];?>
	  	</button>
	  	<div class="dropdown-menu">
	    	<a href="send-email.php" class="dropdown-item"><?php echo $lang["send-email"];?></a>
			<a href="email-settings.php" class="dropdown-item"><?php echo $lang["email-settings"];?></a>
	  	</div>
	</div>
	<!--<a href="theme-settings.php"><li><i class="fas fa-cog icon-css"></i><?php echo $lang["theme-settings"];?></li></a>-->
	<a href="seo-settings.php"><li><i class="fas fa-space-shuttle icon-css"></i><?php echo $lang["seo-settings"];?></li></a>
	<!--<a href="security-settings.php"><li><i class="fas fa-unlock-alt icon-css"></i><?php echo $lang["security-settings"];?></li></a>-->
	<a href="settings.php"><li><i class="fas fa-cogs icon-css"></i><?php echo $lang["settings"];?></li></a>
	<a href="operations/exit.php"><li><i class="fas fa-sign-out-alt icon-css"></i><?php echo $lang["exit"];?></li></a>
</ul>