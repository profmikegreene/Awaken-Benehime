<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header(); ?>
		

		<div id="mainContainer" class="container mainContainer">
			<div class="pageHeader">
				<img src="<?php bloginfo('template_directory'); ?>/images/rccLogo-white.png" alt="Rappahannock Community College Logo" id="logo" class="logo">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('large');
				}
				else {
					echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/default-featured-img.jpg" />';
				}

				
				profmg_breadcrumb(); ?>
			</div>
			<div id="content" class="grid-9" role="main">
				<div class="pageContent">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
			</div>
			</div><!-- #content -->
			<div class="grid-3 pageSidebar">
			<?php get_sidebar(); ?>
			</div>
		</div><!-- #mainContainer -->

<?php get_footer(); ?>