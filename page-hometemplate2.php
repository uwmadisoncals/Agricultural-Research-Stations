<?php
/**
 * Template Name: Home Page - ARS Locations
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

//wp_enqueue_script( 'twentyeleven-showcase', get_template_directory_uri() . '/js/search.js', array( 'jquery' ), '2013-07-10' );

get_header(); ?>

<?php $rootpath = $_SERVER['DOCUMENT_ROOT'];?>


	<div id="main" class="homecards">

		<div id="primary">
			<div id="content" class="fullWidth" role="main">




			<div class="row clearfix mapContainer">

				<div class="span-100">
					

					<?php while ( have_posts() ) : the_post(); ?>
									<?php

					// check if the flexible content field has rows of data
					if( have_rows('highlight_columns') ):

							// loop through the rows of data
							while ( have_rows('highlight_columns') ) : the_row();

									if( get_row_layout() == '3_column_row' ): ?>

										<div class="row clearfix">

											<div class="span-33 dropin outlinebox">
													<h2 class="sectionHeading"><?php the_sub_field('column_1_title'); ?></h2>
										<div class="columnContent"><?php the_sub_field('column_1'); ?></div>
											</div>

											<div class="span-33 dropin3 outlinebox">
												<h2 class="sectionHeading"><?php the_sub_field('column_2_title'); ?></h2>
										<div class="columnContent"><?php the_sub_field('column_2'); ?></div>
											</div>

											<div class="span-33 dropin2 outlinebox">
													<h2 class="sectionHeading"><?php the_sub_field('column_3_title'); ?></h2>
										<div class="columnContent"><?php the_sub_field('column_3'); ?></div>
											</div>

										</div>

									<?php endif;


									if( get_row_layout() == '2_column_row' ): ?>

										<div class="row clearfix">

											<div class="span-50 dropin">
											
		    			
		    			
													<h2 class="sectionHeading"><?php the_sub_field('column_1_title_1'); ?></h2>
													<div class="columnContent"><?php the_sub_field('column_1_text'); ?></div>
		    			
											</div>

							<div class="span-50 dropin">
												
												<h2 class="sectionHeading"><?php the_sub_field('column_2_title_1'); ?></h2>
														<?php $coption = get_sub_field('content_options'); if($coption == "text") { ?>
														<div class="columnContent"><?php the_sub_field('column_2_text'); ?></div>
														<?php } else { ?>
														<?php			if (class_exists('EM_Events')) {
															echo EM_Events::output( array('limit'=>4,'orderby'=>'event_start_date','category'=>'5') );
														} ?>

														<?php } ?>
														
											</div>



										</div>

									<?php endif;

							endwhile;

					else :

							// no layouts found

					endif;

					?>

					<?php endwhile; // end of the loop. ?>
				</div>

				

			</div>


				<!-- CALS News Content Box -->

			<div class="spacer"></div>


			</div><!-- #content -->

			<div class="clear"></div>
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>
