<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css"/>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/my.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
  		$('.slider').slick({
    		autoplay: true,
    		appendArrows: $('.navs'),
    		nextArrow: '<button type="button" class="slick-next"><img src="/wp-content/themes/blankslate/images/next-arrow.png"></button>',
    		prevArrow: '<button type="button" class="slick-prev"><img src="/wp-content/themes/blankslate/images/prev-arrow.png"></button>',
  		});
	});
</script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header" role="banner">
	<section id="branding">
		<div class="wrapper">
			<div class="logo">
				<a href="/"><img src="<?php bloginfo('stylesheet_directory') ;?>/images/logo.png"></a>
			</div>
		</div>
		<nav id="menu" role="navigation">
			<div class="wrapper">
				<div class="menu-left">
					<?php wp_nav_menu( array( 'theme_location' => 'main-left' ) ); ?>
				</div>
				<div class="menu-right">
					<?php wp_nav_menu( array( 'theme_location' => 'main-right' ) ); ?>
				</div>
			</div>
		</nav>
	</section>
	<section id="branding-mobile">
		<div class="wrapper">
			<div class="logo">
				<a href="#"><img src="<?php bloginfo('stylesheet_directory') ;?>/images/logomob.png"></a>
			</div>
			<div class="mob-nav">
				<a class="toggle-nav" href="#">☰</a>
			</div>
		</div>
		<nav id="menu" role="navigation">
			<div class="wrapper">
				<div class="menu-mob">
					<?php wp_nav_menu( array( 'theme_location' => 'main-mob' ) ); ?>
				</div>
			</div>
		</nav>
	</section>
</header>
<div id="container">