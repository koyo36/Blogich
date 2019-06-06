<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package koyocreative
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.or/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>

</head>
<body <?php body_class();?> >

	<div class="container">
		<div class="main-navigation">

			<div class="row">


				<nav class="navbar navbar-expand-md col-md-12">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php
						if( has_custom_logo() ) {
							the_custom_logo();
						} else {
							echo '<img src="'.get_template_directory_uri().'/assets/images/Blogich.png" >';
						}
					?>
					</a>


					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					    <i class="fas fa-bars fa-2x"></i>
					</button>

					<div class="collapse navbar-collapse justify-content-end" id="navbarContent">
						<?php

							wp_nav_menu( array(
								'theme_location'	=> 'menu-1',
								'menu_id'			=> 'primary-menu',
								'menu_class'		=> 'navbar-nav nav',
								'depth'				=> 2, // 1 = no dropdowns, 2 = with dropdowns
								'fallback_cb'		=> 'Wp_Navwalker::fallback',
								'walker'			=> new Wp_Navwalker(),
							) );

						?>

						<div class="main-search ">

							<div class="search-input">
								<!-- <div class="search-btn">
									<i class="fas fa-search"></i>
								</div> -->
								<form role="search" method="get" action="<?php echo esc_url( home_url('/')); ?>" class="form-inline ">
									<input type="search" placeholder="Search" aria-label="Search" class="form-control " id="<?php echo $unique_id; ?>"  value="<?php echo get_search_query(); ?>" name="s" autocomplete="off">
									<!-- <button type="submit" class="search-submit">
		                                <i class="fas fa-search"></i>
		                            </button> -->
								</form>
							</div>
						</div>


					</div>

				</nav>


			</div><!-- .row -->

		</div><!-- .main-navigation -->
	</div><!-- .container-fluid -->
