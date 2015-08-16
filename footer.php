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

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'materialboot' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'materialboot' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'materialboot' ), 'materialboot', '<a href="https://jamesbradach.com" rel="designer">James Bradach</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
            jQuery(function($){(function(){

                var $button = $("").click(function(){
                    var index =  $('.bs-component').index( $(this).parent() );
                    //$.get(window.location.href, function(data){
                    //    var html = $(data).find('.bs-component').eq(index).html();
                    //    html = cleanSource(html);
                    //    $("#source-modal pre").text(html);
                    //    $("#source-modal").modal();
                    //})

                });

                $('.bs-component [data-toggle="popover"]').popover();
                $('.bs-component [data-toggle="tooltip"]').tooltip();

                $(".bs-component").hover(function(){
                    $(this).append($button);
                    $button.show();
                }, function(){
                    $button.hide();
                });

                $(".icons-material .icon").each(function() {
                    $(this).after("<br><br><code>" + $(this).attr("class").replace("icon ", "") + "</code>");
                });

            })();});

        </script>
        <script>
            jQuery(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                jQuery.material.init();
            });
        </script>

</body>
</html>
