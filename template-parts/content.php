<article class="blog-post">

	<div class="row">

		<div class="post-container col-md-8 order-md-1 order-sm-1">

			<?php

			if( is_singular() ) :
				the_title( '<h3 class="lead-title">','</h3>' );
			else :
				the_title( '<h3 class="lead-title"><a href="'.esc_url(get_permalink()).'" rel="bookmark">','</a></h3>' );
			endif;

			if( 'post' === get_post_type() )
			?>

			<div class="post-meta">
				<div class="posted-left">
					Posted on <?php koyocreative_posted_on(); ?> by <?php koyocreative_posted_by(); ?>
				</div>

				<div class="posted-left">
					Posted in: <a href="#">wordpress, </a><a href="#">templates</a>
				</div>
			</div>

			<div class="post-content">+

				<?php is_single() ? the_content() : the_excerpt(); ?>

			</div>

			<div class="post-footer">

				<?php

				if( !is_single() ) :
				?>

				<div class="posted-left">
					<a href="<?php the_permalink(); ?>" class="ghost-btn">Continue Reading</a>
				</div>

				<?php
				endif;
				?>


			</div>

		</div>

		<div class="featured-image col-md-4 col-sm-12 order-md-2 order-sm-0">
			<?php koyocreative_post_thumbnail(); ?>
		</div>

	</div><!-- .row -->

</article><!-- .blog-post -->
