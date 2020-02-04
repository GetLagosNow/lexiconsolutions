<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">


		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<h1>lexicon</h1><h1>solutions</h1>
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->


					<nav role="navigation">
					  <div id="menuToggle">
					    <!--
					    A fake / hidden checkbox is used as click reciever,
					    so you can use the :checked selector on it.
					    -->
					    <input type="checkbox" />

					    <span></span>
					    <span></span>
					    <span></span>
					    
					    <!--
					    Too bad the menu has to be inside of the button
					    but hey, it's pure CSS magic.
					    -->
					    <ul id="menu">
					      <a href="/"><li>Home</li></a>
					      <a href="/about"><li>About</li></a>
					      <a href="/job-seekers"><li>Job Seekers</li></a>
					      <a href="/find-talent"><li>Find Talent</li></a>
					      <a href="/contact-us"><li>Contact Us</li></a>
					    </ul>
					  </div>
					</nav>

					<div id="under-nav-1">
						<div id="header-tel"><a href="tel:1-503-469-6000">(503)469-6000</a></div>
						<br>
						<div id="header-add"><a target="_blank" href="https://goo.gl/maps/aBrA8z7zhDyKqcbB9">605 SW Poplar Ln<br>Portland, OR 97225</a></div>
					</div>

			</header>

			
			<!-- /header -->
