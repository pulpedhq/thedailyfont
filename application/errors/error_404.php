<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us">
<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	
	<script type="text/javascript" src="http://use.typekit.com/ymj8obp.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/reset.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" media="all" />
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/masonry.js"></script>
	
</head>
<body>
	
	<div id="page" class='clearfix'>

		<header>

			<h1 class='tk-museo'><?php echo anchor('home', 'thedailyfont.'); ?></h1>
			<h2>A digestable daily blog about typography by Matt Harrison.</h2>

		</header>
		
			<nav>

				<ul>
					<li><?php echo anchor('home', 'Home'); ?></li>
					<li><?php echo anchor('home/about', 'About'); ?></li>
					<li><?php // echo anchor('home/archive', 'Archive'); ?></li>
					<li><?php echo anchor('home/contact', 'Contact'); ?></li>
				</ul>
			</nav>
		
		<hr />
		
		<div id="fourohfour">404 Error</div>

		<footer>

			Copyright 2010 Matt Harrison

		</footer>

		</div><!-- page -->
		<script type="text/javascript">

			$('#main').masonry({
			    singleMode: true, 
			});

			$('.date').prepend('<img src="<?php echo base_url() ;?>/images/icons/calendar_icon.png" alt=""');

		</script>
		</body>
		</html>