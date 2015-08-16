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
  <div id="header">
      <header id="masthead" class="site-header" role="banner">
      <nav class="navbar navbar-material-light-green-800 navbar-fixed-top shadow-z-2">
        <div class="container">
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
            <form role="search" method="get" id="search-form" class="navbar-form form-group-material-pink-500 navbar-right" action="<?php echo esc_url( home_url( '/' ) ); ?>">
              <input type="search" name="s"id="search-input" class="form-control col-lg-8" placeholder="Search">
            </form><!-- navbar-form navbar-left -->
        </div><!-- navbar collapse -->
        </div><!-- container -->
      </nav><!-- navbar navar-default -->
      <div class="container">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'materialboot' ); ?></a>
        <div class="site-branding alignright">
          <?php if ( is_front_page() && is_home() ) : ?>
            <h2 class="site-title"><strong><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></strong>
          <?php else : ?>
            <h2 class="site-title"><strong><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></strong>
          <?php endif; ?>
              <p class="small"><?php bloginfo( 'description' ); ?></p></h2>
        </div><!-- .site-branding -->
      </div><!-- container -->
    </header><!-- #masthead -->
  </div><!-- header -->
  <div id="page" class="hfeed site">
    <div id="content" class="site-content">
