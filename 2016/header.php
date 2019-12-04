<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav id="main-nav" class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
  <div class="container container-menu">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="menu-bars"><i class="fa fa-bars" aria-hidden="true"></i></span>
  </button>
  <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
    <img src="<?= get_template_directory_uri() ?>/test/logo_verein.svg" width="30" height="30" alt="">
  </a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <?php
      wp_nav_menu( array(
        'theme_location'    => 'navbar',
        'container'         => false,
        'menu_class'        => '',
        'fallback_cb'       => '__return_false',
        'items_wrap'        => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
        'depth'             => 2,
        'walker'            => new b4st_walker_nav_menu()
      ) );
    ?>
    <?php get_template_part('navbar-search'); ?>
  </div>
  </div>
</nav>
