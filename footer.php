<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package koyocreative
 */

?>

	<div class="container">
		<div class="footer-container">
			<div class="row">

				<div class="footer-content posted-left col-md-6 col-sm-12 justify-content-start">
					<span><strong>Blogich |</strong> Powered by <a href="//wordpress.org">wordpress</a></span>

					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'koyocreative' )); ?>"></a>
					<?php
						/* Translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__('Proudly powered by %s', 'koyocreative'), 'WordPress' );
					 ?>
				</div>

				<div class="footer-content posted-right col-md-6 col-sm-12 justify-content-end">

					<nav class="navbar navbar-expand footer-navigation">
						<div class="navbar-nav">

							<?php

								wp_nav_menu( array(
									'theme_location'	=> 'menu-2',
									'menu_id'			=> 'secondary-menu',
									'menu_class'		=> 'navbar-nav nav',
									'depth'				=> 1,
									'fallback_cb'		=> 'Wp_Navwalker::fallback',
									'walker'			=> new Wp_Navwalker(),
								) );



							 ?>


						</div>
					</nav>

				</div>

			</div>
		</div>
	</div>

	<div class="footer-underline"></div>

	<?php wp_footer(); ?>
</body>
</html>
