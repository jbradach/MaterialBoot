<div class="navbar navbar-material-green-900">
 <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
    <form role="search" method="get" class="navbar-form navbar-right form-group-material-lime" action="http://example.dev/">
		<label>
			<span class="screen-reader-text">Search for:</span>
			<input type="search" class="search-field form-control" placeholder="Search ..." value="" name="s" title="Search for:" />
		</label>
    </form>
  </div>
 </div>
</div>
