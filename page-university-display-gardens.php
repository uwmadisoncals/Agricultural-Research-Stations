<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */

get_header(); ?>


	<div id="main">

		<div id="primary">
		
			<div id="content" role="main">
				<header>
					<h1 class="entry-title" style="margin-bottom: 1.2em;">University Display Gardens</h1>
				</header>
				<?php $temp_query = $wp_query; ?>
					<?php query_posts('showposts=10'); ?>
					<?php while (have_posts()) : the_post(); ?>
						
						<div class="post" id="post-<?php the_ID(); ?>" style="margin-bottom: 4.3em;">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a><div style="font-size: 12px;"><?php the_date(); ?></div></h2>
					<?php the_post_thumbnail('front-page-post-thumbnail'); ?>  <?php the_excerpt(); ?>
						</div>
					<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				
			</div><!-- #content -->
			<?php get_sidebar(); ?>
			<div class="clear"></div>
			
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>