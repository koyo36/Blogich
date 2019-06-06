<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package koyocreative
 */

get_header();
?>

<div class="container">
	<div class="main-content">

		<div class="row">

			<div class="single-post-wrap">

				<?php

				while( have_posts() ) :

					the_post();

						get_template_part( 'template-parts/content', 'single' );


						?>

							<div class="post-nav clearfix">
								<?php the_posts_navigation(); ?>
							</div>


						<?php

					// If the comments are open or we have at least one comment, load up the comment template.
					if( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>


			</div>

		</div>

	</div>
</div>




<?php
get_sidebar();
get_footer();
