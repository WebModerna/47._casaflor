<?php
/* header.php
* @package WordPress
* @subpackage casaflor
* @since casaflor 1.0
*/

// Variables necesarias
$meta_keywords2 	= of_get_option("meta_keywords2", "");
$meta_description	= of_get_option("meta_description", "");
$logo_uploader		= of_get_option("logo_uploader", "");

?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />

<?php if (is_home() || is_search()) { ?>
	<title><?php bloginfo('name');?> | <?php bloginfo('description');?></title>
	
<?php
	/*
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo('rss2_url');?>" />
	*/
	} elseif (is_404()) { ?>
	<title><?php echo _e('Error 404');?> | <?php bloginfo('name');?></title>
<?php } else { ?>
	<title><?php the_title();?> | <?php bloginfo('name');?></title>
<?php };

	if( $meta_description )
	{
		echo '<meta name="description" content="' . $meta_description . '" />';
	}
	if( $meta_keywords2 )
	{
		echo '<meta name="keywords" content="' . $meta_keywords2 . '" />';
	}
?>
	<meta name="author" content="Equipo de WebModerna" />
	<meta name="author URL" content="http://www.webmoderna.com.ar" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-128.png" sizes="128x128" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory');?>/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/style.min.css" />

<?php if ( wp_is_mobile() == false ) { //Condicionales para IE ?>

	<!--[if IE 8]>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/html5.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/respond.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/selectivizr-min.js"></script>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/styleIE8.css" />
	<![endif]-->
<!--[if IE 9]><link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/styleIE9.css" /><![endif]-->
<!--[if gte IE 9]><style type="text/css">.gradient {filter:none !important;}</style><![endif]-->
<?php };?>
<?php wp_head();?>
</head>
<body class="gradient">
<header class="gradient">
	<div class="wrapper">
		<div class="text-left">
			<div id="logo">
				<figure>
					<h1>
						<a href="<?php bloginfo('url');?>">
							<img alt="<?php bloginfo('name');?>" src="<?php bloginfo('stylesheet_directory');?>/img/logo-mobile.png" />
						</a>
						<figcaption>
							<?php _e('Complejo', 'casaflor');?> <span class="icon-star-doble"><?php _e('CasaFlor', 'casaflor');?></span>
							<small><?php bloginfo('description');?></small>
						</figcaption>
					</h1>
				</figure>
			</div><!-- #logo -->

			<div id="search">
				<form class="hform" name="search_form" id="search_form" action="<?php bloginfo('url');?>">
					<input class="post" type="text" placeholder="<?php _e('Buscar...', 'casaflor');?>" value="<?php the_search_query();?>" name="s" id="s" />
					<button type="submit" class="post icon-search"></button>
				</form>
			</div>
		</div><!-- .text-left -->

		<div id="boton_menu">
			<button id="menu">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div><!-- #boton_menu -->

		<nav><!-- El menú de navegación en sí mismo -->
			<?php $default = array(
				'container'			=>			false,
				'depth'				=>				1,
				'menu'				=>	 'header_nav',
				'theme_location'	=>	 'header_nav',
				'items_wrap'		=>	 '<ul class="header_nav" id="header_nav">%3$s</ul>'
			);
			wp_nav_menu($default);?>
		</nav>
	</div>
