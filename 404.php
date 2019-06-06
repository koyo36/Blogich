<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package koyocreative
 */

get_header();
?>


<div class="container-fluid">
		<div class="main-content">

			<div class="row">
				<div class="notfound-page col-md-12">
					
					<div class="notfound-content">
						
						<h1 class="lead-title">
							404
						</h1>

						<h2 class="h2 lead-title">
							<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'koyocreative' ); ?>
						</h2>

						<p class="lead-p">
							<?php esc_html_e( 'It looks like nothing was found at this location.', 'koyocreative' ); ?>
							Go back to <a href="<?php echo home_url('/'); ?>">homepage.</a>
						</p>



					</div>
				</div>
			</div>

		</div><!-- .main-content -->
	</div><!-- .container-fluid -->




<?php
get_sidebar();
get_footer();