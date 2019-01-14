<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<?php wp_head(); ?>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i|Open+Sans:300,300i,400,400i,700,800" rel="stylesheet">
		</head>
			
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
			
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php // get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<header class="header" role="banner">

					<div class="top">
						<ul class="menu align-center">
						  <li><h1><a href=<?php echo get_home_url(); ?>><?php bloginfo('name'); ?></a></h1></li>
						</ul>
					</div>

					<div class="social-icones" width="200">
						<ul class="menu align-right">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a data-toggle="exampleModal5" aria-controls="exampleModal5"><i class="fas fa-search"></i></a></li>
								<div class="tiny reveal" id="exampleModal5" data-reveal>
									<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
										<label>
											<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'jointswp' ) ?></span>
											<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>" />
										</label>
										<input type="submit" class="search-submit button" value="<?php echo esc_attr_x( 'Search', 'jointswp' ) ?>" /> <!--ajoute le bouton dans le modal-->
									</form>
      							<button class="close-button" data-close aria-label="Close reveal" type="button">
      								<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</ul>

					</div>

					<div class="nav">
					<ul id="menu-menu" class="menu align-center">
						<?php wp_nav_menu();?>
					</ul>
					</div>
					<hr>



				</header> <!-- end .header -->