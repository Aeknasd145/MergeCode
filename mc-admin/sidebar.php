<div class="logo">
	<a href="/">
		<img src="images/logo.png" alt="Logo" title="Logo" width="85%"/>
	</a>
</div>
<ul id="menu">
	<a href="index.php"><li class="first-li"><i class="fas fa-eye icon-css"></i><?php echo $lang["dashboards"];?></li></a>
	<div class="dropdown">
	  	<button class="btn drp-btn" type="button" data-toggle="dropdown">
	   		<i class="fas fa-chart-line icon-css"></i><?php echo $lang["analysis"];?>
	  	</button>
	  	<div class="dropdown-menu">
	    	<!--<a href="data-buy-sell.php" class="dropdown-item"><?php echo $lang["data-buy-sell"];?></a>-->
	    	<a href="data-users.php" class="dropdown-item"><?php echo $lang["data-users"];?></a>
	    	<a href="data-subs.php" class="dropdown-item"><?php echo $lang["data-subs"];?></a>
	    	<!--<a href="data-live-support.php" class="dropdown-item"><?php echo $lang["data-live-support"];?></a>-->
	  	</div>
	</div>
	<!--<div class="dropdown">
	  	<button class="btn drp-btn" type="button" data-toggle="dropdown">
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
	  	<button class="btn drp-btn" type="button" data-toggle="dropdown">
	    	<i class="fa fa-file-text icon-css" aria-hidden="true"></i><?php echo $lang["blog"];?>
	  	</button>
	  	<div class="dropdown-menu">
	    	<a href="add-new-post.php" class="dropdown-item"><?php echo $lang["add-new-post"];?></a>
			<a href="all-comments.php" class="dropdown-item"><?php echo $lang["all-comments"];?></a>
			<a href="all-posts.php" class="dropdown-item"><?php echo $lang["all-posts"];?></a>
	  	</div>
	</div>
	<div class="dropdown">
	  	<button class="btn drp-btn" type="button" data-toggle="dropdown">
	    	<i class="fa fa-envelope-o icon-css" aria-hidden="true"></i><?php echo $lang["email"];?>
	  	</button>
	  	<div class="dropdown-menu">
	    	<a href="send-email.php" class="dropdown-item"><?php echo $lang["send-email"];?></a>
			<a href="email-settings.php" class="dropdown-item"><?php echo $lang["email-settings"];?></a>
	  	</div>
	</div>
	<div class="dropdown">
	  	<button class="btn drp-btn" type="button" data-toggle="dropdown">
	    	<i class="fas fa-cogs icon-css" aria-hidden="true"></i><?php echo $lang["settings"];?>
	  	</button>
	  	<div class="dropdown-menu">
			<!--<a href="theme-settings.php"><?php echo $lang["theme-settings"];?></a>-->
			<a href="language-settings.php" class="dropdown-item"><?php echo $lang["language-settings"];?></a>
			<a href="seo-settings.php" class="dropdown-item"><?php echo $lang["seo-settings"];?></a>
			<a href="security-settings.php" class="dropdown-item"><?php echo $lang["security-settings"];?></a>
			<a href="settings.php" class="dropdown-item"><?php echo $lang["settings"];?></a>
	  	</div>
	</div>
	<a href="operations/exit.php"><li><i class="fas fa-sign-out-alt icon-css"></i><?php echo $lang["exit"];?></li></a>
</ul>