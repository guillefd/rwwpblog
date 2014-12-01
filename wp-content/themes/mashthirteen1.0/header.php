<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="maincontainer">
 *
 * @package WordPress
 * @subpackage Mash_Thirteen
 * @since WP MashThirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link media="all" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/gcs.css" type="text">
	<!--[if lt IE 9]>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/respond.min.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<!--<link media="all" rel="stylesheet" href="<?php //echo get_stylesheet_directory_uri(); ?>/styles_new.css" type="text">
</head>-->

<body <?php body_class(); ?>>
	<?php if ( get_theme_mod( 'mashthirteen_site_format' ) != 1 ) { ?>
        <div id="page" class="hfeed site-boxed">
    <?php } else { ?>
        <div id="page" class="hfeed site">
    <?php } ?>

		<header id="masthead" class="site-header site_header_blog" role="banner">
	    	<!-- navbar RW start -->
	    	<div id="navbar" class="navbar navbar-fixed-top navbar_blog">
	    		<nav id="site-navigation" class="navigation" role="navigation">
	    			<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'mashthirteen' ); ?>"><?php _e( 'Skip to content', 'mashthirteen' ); ?></a>
	    			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
	    			<?php if ( get_theme_mod( 'mashthirteen_menusearch_visibility' ) != 1 ) { ?>
	    			<?php // get_search_form(); ?>
	    		
						<div class="gcs_container pull-right">
							<div id='cse' style='width: 100%;'>Loading</div>
								<script src='//www.google.com/jsapi' type='text/javascript'></script>
								<script type='text/javascript'>
								google.load('search', '1', {language: 'en', style: google.loader.themes.V2_DEFAULT});
								google.setOnLoadCallback(function() {
								var customSearchOptions = {};
								var orderByOptions = {};
								orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
								customSearchOptions['enableOrderBy'] = true;
								customSearchOptions['orderByOptions'] = orderByOptions;
								customSearchOptions['overlayResults'] = true;
								var customSearchControl =   new google.search.CustomSearchControl('016369008610948135852:lv4-rycswky', customSearchOptions);
								customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
								var options = new google.search.DrawOptions();
								options.setAutoComplete(true);
								customSearchControl.draw('cse', options);
								}, true);
								</script>
							</div>
						</div>

	    			<?php } ?>
	    		</nav><!-- #site-navigation -->
	    	</div>
	    	<!-- #navbar RW end -->
    		<!-- #navbar orig -->		
			<div id="navbar" class="navbar navbar-fixed-top">
				<div class="col-md-4 col-sm-4 navbar-header">				
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">	
					</a>				
				</div>
				<nav id="site-navigation" class="col-md-8 col-sm-8 pull-right navigation navbar_rw " role="navigation">
					<ul class="pull-right">
							<!-- List -->
							<li><a class="active" href="servicios-en-la-nube">Hosting Wordpress</a></li>							
							<li><a href="cloud-hosting-de-aplicaciones">Hosting Moodle</a></li>							
							<li><a href="desarrollo-de-aplicaciones-web">Web Design</a></li>	
							<li><a href="contactanos">Contact</a></li>
						</ul>
				</nav><!-- #site-navigation -->
			</div>
			<!-- #navbar -->			
		</header><!-- #masthead -->

		<div id="maincontainer" class="row">