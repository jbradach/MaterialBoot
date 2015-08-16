<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Material Boot
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
<!--  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"> -->

<?php global $page, $paged;
wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="header" class="container-fluid">
    <header id="masthead" class="container-fluid site-header" role="banner">
    <div class="navbar navbar-material-light-green-800 navbar-fixed-top ">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      </div>
      <div class="navbar-collapse collapse navbar-responsive-collapse">
        <?php wp_nav_menu( array( 'theme_location'    => 'primary',
                                  'menu_id'           => 'primary-menu',
                                  'menu_class'        => 'nav navbar-nav',
                                  'container'         => false,
                                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                  'walker'            => new wp_bootstrap_navwalker()
                                ) ); ?>
          <form role="search" method="get" id="search-form" class="navbar-form form-group-material-pink-500 navbar-left" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="search" name="s"id="search-input" class="form-control col-lg-8" placeholder="Search">
          </form><! -- navbar-form navbar-left -->

      </div><!-- navbar collapse -->
    </div><!-- navbar navar-default -->
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'materialboot' ); ?></a>
      <div class="site-branding">
        <?php if ( is_front_page() && is_home() ) : ?>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php else : ?>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php endif; ?>
        <p class="site-description"><?php bloginfo( 'description' ); ?></p>
      </div><!-- .site-branding -->
    </header><!-- #masthead -->
  </div>
  <div id="page" class="container hfeed site">
    <div id="content" class="site-content">
