<article class="featured-post blog-post">


						

							<div class="featured-image col-md-12">
								<?php koyocreative_post_thumbnail(); ?>
							</div>

							<div class="post-container col-md-12">
								
								
								<?php

								if( is_singular() ) :
									the_title( '<h1 class="lead-title">','</h1>' );
								else :
									the_title( '<h1 class="lead-title"><a href="'.esc_url(get_permalink()).'" rel="bookmark">','</a></h1>' );
								endif;

								if( 'post' === get_post_type() )
								?>
								
								<div class="post-meta">
									<div class="posted-left">
										Posted on <?php koyocreative_posted_on(); ?> by <?php koyocreative_posted_by(); ?>
									</div>

									<div class="posted-right">
										Posted in: <a href="#">wordpress, </a><a href="#">templates</a>
									</div>
								</div>

								<div class="post-content">
									<?php the_content(); ?>
								</div>

								<div class="post-footer">

									<?php

									if( !is_singular() ) :
									?>

									<div class="posted-left">
										<a href="<?php the_permalink(); ?>" class="ghost-btn">Continue Reading</a>
									</div>

									<?php
									endif;
									?>


								</div>

							</div>
								
							

						</div><!-- .row -->

					</article><!-- .blog-post -->						
