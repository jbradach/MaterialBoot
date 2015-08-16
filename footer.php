<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Material Boot
 */

?>

	</div><!-- #content -->
<div class="container-fluid">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'materialboot' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'materialboot' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'materialboot' ), 'materialboot', '<a href="https://jamesbradach.com" rel="designer">James Bradach</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div>
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
$(document).ready(function() {

	// Bootstrap menus open on hover
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	}); // hover

});
</script>
<script>
            jQuery(function($){(function(){

                var $button = $("").click(function(){
                    var index =  $('.bs-component').index( $(this).parent() );
                });

                $('.bs-component [data-toggle="popover"]').popover();
                $('.bs-component [data-toggle="tooltip"]').tooltip();

                $(".bs-component").hover(function(){
                    $(this).append($button);
                    $button.show();
                }, function(){
                    $button.hide();
                });

/*                $(".icons-material .icon").each(function() {
                    $(this).after("<br><br><code>" + $(this).attr("class").replace("icon ", "") + "</code>");
                });*/

            })();});

        </script>
        <script>
            $(document).ready(function() {
                $.material.init();
            });
        </script>
</body>
</html>
