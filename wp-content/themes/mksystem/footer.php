<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dazzling
 */
?>
                </div><!-- close .row -->
            </div><!-- close .container -->
        </div><!-- close .site-content -->

	<div id="footer-area">
		<div class="container footer-inner">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="footer_menu-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
				</div>
				<div class="footer_menu-wrapper">
					<?php mksystem_secondary_menu(); ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="footer_menu-title">
					<h4 class="text-center">Productos</h4>
				</div>
				<div class="footer_categories-wrapper">
					<?php mksystem_footer_links(); ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="footer_menu-title">
					<h4 class="text-center">Encuéntrenos</h4>
				</div>
				<div class="footer_social-wrapper">
					<?php mksystem_custom_links(); ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="footer_menu-title">
					<h4 class="text-center">Reciba nuestras promociones</h4>
				</div>
				<div class="footer_subscription-wrapper">
					<p class="text-justify">Suscríbase a nuestros boletínes de promociones mensuales...</p>
					<?php mksystem_call_for_action(); ?>
				</div>
			</div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<?php if( of_get_option('footer_social') ) dazzling_social_icons(); ?>
				<nav role="navigation" class="col-md-6" style="display: none;">
					<?php dazzling_footer_links(); ?>
				</nav>
				<div class="copyright col-md-6">
					<?php mksystem_footer_info(); ?>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>