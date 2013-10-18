<?php
//The Header for our theme.
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<!-- Linking the main stylesheet -->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/mainStyle.css" />

<!-- FONTS -->
<script type="text/javascript" src="http://use.edgefonts.net/alex-brush:n4.js"></script>
<script type="text/javascript" src="http://use.edgefonts.net/alegreya:n4,i4,n7,i7,n9,i9.js"></script>

<!-- Scalable Vector Icons from Font Awesome -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<i class="icon-reorder icon-2x" id="main-nav-trigger"></i>
	<?php
	//Including navigation
		$navSettings = array(
			'theme_location' => 'mainMenu',
			'container' => 'nav',
			'container-id' => 'main-nav',
			'menu-id' => 'main-nav-block',	
			 );
		wp_nav_menu($navSettings);
	?>