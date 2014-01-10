<html>

<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,700' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<h1><?php echo get_bloginfo('name') ?><small><?php echo get_bloginfo('description'); ?></small></h1>
			<nav>
				<ul id="nav-list">
				<?php
					// Home link
					$home_link = home_url();
					echo "<li class='nav_bar_item nav_bar_divisor'></li>";
					echo "<li class='nav_bar_item'><a href='$home_link'>Home</a></li>";
					echo "<li class='nav_bar_item nav_bar_divisor'></li>";
					$pages = get_pages();
				 	foreach ($pages as $page) {
				 	 	echo "<li class='nav_bar_item'>
				 	 			<a href='$page->guid'>$page->post_title</a></li>";
				 	 } 
				 ?>
				</ul>
			</nav>
		</div>

</html>