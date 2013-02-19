<?php
/**
 * Template Name: Page_V3
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header(); ?>
	<div class="siteInfo">
	<?php the_post_thumbnail(); ?>
	<div class="container blue">
		<div class="grid-4">
		<a href="http://www.rappahannock.edu" class="noBorder"><img src="<?php bloginfo('template_directory'); ?>/images/rccLogo-white.png" alt="Rappahannock Community College Logo" id="logo" class="logo"></a>
	</div>
	<div class="grid-8">
		<h1 class="entry-title"><?php echo bloginfo('name'); ?></h1>
		<p class="site-description"><?php echo bloginfo('description'); ?></p>
	</div>
</div>
</div>
		<div id="mainContainer" class="container mainContainer page_v3">
			<div class="pageHeader">
				<?php profmg_breadcrumb(); ?>
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