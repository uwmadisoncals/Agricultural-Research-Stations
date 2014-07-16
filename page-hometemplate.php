<?php
/**
 * Template Name: Home Page
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

				<div class="span-50">
					<h2 class="sectionHeading first"><svg enable-background="new 0 0 32 32" height="32px" id="svg2" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" class="mapPinInner" height="32" width="32"/></g><g id="news_1_"><path d="M4,14h20v-2H4V14z M15,26h7v-2h-7V26z M15,22h9v-2h-9V22z M15,18h9v-2h-9V18z M4,26h9V16H4V26z M28,10V6H0v22c0,0,0,4,4,4   h25c0,0,3-0.062,3-4V10H28z M4,30c-2,0-2-2-2-2V8h24v20c0,0.921,0.284,1.558,0.676,2H4z"/></g></svg> Announcements</h2>

					<?php while ( have_posts() ) : the_post(); ?>
									<?php

					// check if the flexible content field has rows of data
					if( have_rows('highlight_columns') ):

							// loop through the rows of data
							while ( have_rows('highlight_columns') ) : the_row();

									if( get_row_layout() == '3_column_row' ): ?>

										<div class="row clearfix">

											<div class="span-33 dropin outlinebox">
													<h3><?php the_sub_field('column_1_title'); ?></h3>
										<?php the_sub_field('column_1'); ?>
											</div>

											<div class="span-33 dropin3 outlinebox">
												<h3><?php the_sub_field('column_2_title'); ?></h3>
										<?php the_sub_field('column_2'); ?>
											</div>

											<div class="span-33 dropin2 outlinebox">
													<h3><?php the_sub_field('column_3_title'); ?></h3>
										<?php the_sub_field('column_3'); ?>
											</div>

										</div>

									<?php endif;


									if( get_row_layout() == '2_column_row' ): ?>

										<div class="row clearfix">

											<div class="span-100 dropin outlinebox">
													<h3><?php the_sub_field('column_1_title_1'); ?></h3>
										<?php the_sub_field('column_1_text'); ?>
											</div>

											<div class="span-100 dropin3 outlinebox">
												<h3><?php the_sub_field('column_2_title_1'); ?></h3>
														<?php if(get_sub_field('column_options') == "text") { ?>
														<?php the_sub_field('column_2_text'); ?>
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

				<div class="span-50 mapGraphic">
					<h2 class="sectionHeading first"><svg enable-background="new 0 0 141.732 141.732" height="141.732px" id="Livello_1" version="1.1" viewBox="0 0 141.732 141.732" width="141.732px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_110"><path class="mapPinInner" d="M95.35,50.645c0,13.98-11.389,25.322-25.438,25.322c-14.051,0-25.438-11.342-25.438-25.322   c0-13.984,11.389-25.322,25.438-25.322C83.964,25.322,95.35,36.66,95.35,50.645 M121.743,50.645C121.743,22.674,98.966,0,70.866,0   C42.768,0,19.989,22.674,19.989,50.645c0,12.298,4.408,23.574,11.733,32.345l39.188,56.283l39.761-57.104   c1.428-1.779,2.736-3.654,3.916-5.625l0.402-0.574h-0.066C119.253,68.516,121.743,59.874,121.743,50.645"/></g><g id="Livello_1_1_"/></svg> Locations</h2>
					<div class="mapList">
						<a href="#" class="locationTrigger">Select a Location</a>
						<ul class="locationList">
							<li><a href="#">Arlington</a></li>
							<li><a href="#">Dairy Forage</a></li>
							<li><a href="#">Greenhouse</a></li>
							<li><a href="#">Hancock</a></li>
							<li><a href="#">Kemp</a></li>
							<li><a href="#">Lancaster</a></li>
							<li><a href="#">Marshfield</a></li>
							<li><a href="#">O.J. Noer</a></li>
							<li><a href="#">Peninsular</a></li>
							<li><a href="#">Rhinelander</a></li>
							<li><a href="#">Spooner</a></li>
							<li><a href="#">Administration</a></li>
							<li><a href="#">CALS Greenhouses</a></li>
							<li><a href="#">West Madison</a></li>
						</ul>
					</div>


					<div class="points">
						<a href="#" class="arlington"><span class="dot"><svg enable-background="new 0 0 141.732 141.732" height="141.732px" id="Livello_1" version="1.1" viewBox="0 0 141.732 141.732" width="141.732px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_110"><path class="mapPinInner" d="M95.35,50.645c0,13.98-11.389,25.322-25.438,25.322c-14.051,0-25.438-11.342-25.438-25.322   c0-13.984,11.389-25.322,25.438-25.322C83.964,25.322,95.35,36.66,95.35,50.645 M121.743,50.645C121.743,22.674,98.966,0,70.866,0   C42.768,0,19.989,22.674,19.989,50.645c0,12.298,4.408,23.574,11.733,32.345l39.188,56.283l39.761-57.104   c1.428-1.779,2.736-3.654,3.916-5.625l0.402-0.574h-0.066C119.253,68.516,121.743,59.874,121.743,50.645"/></g><g id="Livello_1_1_"/></svg></span>Arlington</a>
						<a href="#" class="dairyforage"><span class="dot"><svg enable-background="new 0 0 141.732 141.732" height="141.732px" id="Livello_1" version="1.1" viewBox="0 0 141.732 141.732" width="141.732px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_110"><path class="mapPinInner" d="M95.35,50.645c0,13.98-11.389,25.322-25.438,25.322c-14.051,0-25.438-11.342-25.438-25.322   c0-13.984,11.389-25.322,25.438-25.322C83.964,25.322,95.35,36.66,95.35,50.645 M121.743,50.645C121.743,22.674,98.966,0,70.866,0   C42.768,0,19.989,22.674,19.989,50.645c0,12.298,4.408,23.574,11.733,32.345l39.188,56.283l39.761-57.104   c1.428-1.779,2.736-3.654,3.916-5.625l0.402-0.574h-0.066C119.253,68.516,121.743,59.874,121.743,50.645"/></g><g id="Livello_1_1_"/></svg></span>Dairy Forage</a>

						<a href="#" class="hancock"><span class="dot"><svg enable-background="new 0 0 141.732 141.732" height="141.732px" id="Livello_1" version="1.1" viewBox="0 0 141.732 141.732" width="141.732px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_110"><path class="mapPinInner" d="M95.35,50.645c0,13.98-11.389,25.322-25.438,25.322c-14.051,0-25.438-11.342-25.438-25.322   c0-13.984,11.389-25.322,25.438-25.322C83.964,25.322,95.35,36.66,95.35,50.645 M121.743,50.645C121.743,22.674,98.966,0,70.866,0   C42.768,0,19.989,22.674,19.989,50.645c0,12.298,4.408,23.574,11.733,32.345l39.188,56.283l39.761-57.104   c1.428-1.779,2.736-3.654,3.916-5.625l0.402-0.574h-0.066C119.253,68.516,121.743,59.874,121.743,50.645"/></g><g id="Livello_1_1_"/></svg></span>Hancock</a>
						<a href="#" class="kemp"><span class="dot"><svg enable-background="new 0 0 141.732 141.732" height="141.732px" id="Livello_1" version="1.1" viewBox="0 0 141.732 141.732" width="141.732px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_110"><path class="mapPinInner" d="M95.35,50.645c0,13.98-11.389,25.322-25.438,25.322c-14.051,0-25.438-11.342-25.438-25.322   c0-13.984,11.389-25.322,25.438-25.322C83.964,25.322,95.35,36.66,95.35,50.645 M121.743,50.645C121.743,22.674,98.966,0,70.866,0   C42.768,0,19.989,22.674,19.989,50.645c0,12.298,4.408,23.574,11.733,32.345l39.188,56.283l39.761-57.104   c1.428-1.779,2.736-3.654,3.916-5.625l0.402-0.574h-0.066C119.253,68.516,121.743,59.874,121.743,50.645"/></g><g id="Livello_1_1_"/></svg></span>Kemp</a>
						<a href="#" class="lancaster"><span class="dot"><svg enable-background="new 0 0 141.732 141.732" height="141.732px" id="Livello_1" version="1.1" viewBox="0 0 141.732 141.732" width="141.732px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_110"><path class="mapPinInner" d="M95.35,50.645c0,13.98-11.389,25.322-25.438,25.322c-14.051,0-25.438-11.342-25.438-25.322   c0-13.984,11.389-25.322,25.438-25.322C83.964,25.322,95.35,36.66,95.35,50.645 M121.743,50.645C121.743,22.674,98.966,0,70.866,0   C42.768,0,19.989,22.674,19.989,50.645c0,12.298,4.408,23.574,11.733,32.345l39.188,56.283l39.761-57.104   c1.428-1.779,2.736-3.654,3.916-5.625l0.402-0.574h-0.066C119.253,68.516,121.743,59.874,121.743,50.645"/></g><g id="Livello_1_1_"/></svg></span>Lancaster</a>
						<a href="#" class="marshfield"><span class="dot"><svg enable-background="new 0 0 141.732 141.732" height="141.732px" id="Livello_1" version="1.1" viewBox="0 0 141.732 141.732" width="141.732px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_110"><path class="mapPinInner" d="M95.35,50.645c0,13.98-11.389,25.322-25.438,25.322c-14.051,0-25.438-11.342-25.438-25.322   c0-13.984,11.389-25.322,25.438-25.322C83.964,25.322,95.35,36.66,95.35,50.645 M121.743,50.645C121.743,22.674,98.966,0,70.866,0   C42.768,0,19.989,22.674,19.989,50.645c0,12.298,4.408,23.574,11.733,32.345l39.188,56.283l39.761-57.104   c1.428-1.779,2.736-3.654,3.916-5.625l0.402-0.574h-0.066C119.253,68.516,121.743,59.874,121.743,50.645"/></g><g id="Livello_1_1_"/></svg></span>Marshfield</a>
						<a href="#" class="noer"><span class="dot"><svg enable-background="new 0 0 141.732 141.732" height="141.732px" id="Livello_1" version="1.1" viewBox="0 0 141.732 141.732" width="141.732px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_110"><path class="mapPinInner" d="M95.35,50.645c0,13.98-11.389,25.322-25.438,25.322c-14.051,0-25.438-11.342-25.438-25.322   c0-13.984,11.389-25.322,25.438-25.322C83.964,25.322,95.35,36.66,95.35,50.645 M121.743,50.645C121.743,22.674,98.966,0,70.866,0   C42.768,0,19.989,22.674,19.989,50.645c0,12.298,4.408,23.574,11.733,32.345l39.188,56.283l39.761-57.104   c1.428-1.779,2.736-3.654,3.916-5.625l0.402-0.574h-0.066C119.253,68.516,121.743,59.874,121.743,50.645"/></g><g id="Livello_1_1_"/></svg></span>O.J. Noer</a>
						<a href="#" class="peninsular"><span class="dot"><svg enable-background="new 0 0 141.732 141.732" height="141.732px" id="Livello_1" version="1.1" viewBox="0 0 141.732 141.732" width="141.732px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_110"><path class="mapPinInner" d="M95.35,50.645c0,13.98-11.389,25.322-25.438,25.322c-14.051,0-25.438-11.342-25.438-25.322   c0-13.984,11.389-25.322,25.438-25.322C83.964,25.322,95.35,36.66,95.35,50.645 M121.743,50.645C121.743,22.674,98.966,0,70.866,0   C42.768,0,19.989,22.674,19.989,50.645c0,12.298,4.408,23.574,11.733,32.345l39.188,56.283l39.761-57.104   c1.428-1.779,2.736-3.654,3.916-5.625l0.402-0.574h-0.066C119.253,68.516,121.743,59.874,121.743,50.645"/></g><g id="Livello_1_1_"/></svg></span>Peninsular</a>
						<a href="#" class="rhinelander"><span class="dot"><svg enable-background="new 0 0 141.732 141.732" height="141.732px" id="Livello_1" version="1.1" viewBox="0 0 141.732 141.732" width="141.732px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_110"><path class="mapPinInner" d="M95.35,50.645c0,13.98-11.389,25.322-25.438,25.322c-14.051,0-25.438-11.342-25.438-25.322   c0-13.984,11.389-25.322,25.438-25.322C83.964,25.322,95.35,36.66,95.35,50.645 M121.743,50.645C121.743,22.674,98.966,0,70.866,0   C42.768,0,19.989,22.674,19.989,50.645c0,12.298,4.408,23.574,11.733,32.345l39.188,56.283l39.761-57.104   c1.428-1.779,2.736-3.654,3.916-5.625l0.402-0.574h-0.066C119.253,68.516,121.743,59.874,121.743,50.645"/></g><g id="Livello_1_1_"/></svg></span>Rhinelander</a>
						<a href="#" class="spooner"><span class="dot"><svg enable-background="new 0 0 141.732 141.732" height="141.732px" id="Livello_1" version="1.1" viewBox="0 0 141.732 141.732" width="141.732px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_110"><path class="mapPinInner" d="M95.35,50.645c0,13.98-11.389,25.322-25.438,25.322c-14.051,0-25.438-11.342-25.438-25.322   c0-13.984,11.389-25.322,25.438-25.322C83.964,25.322,95.35,36.66,95.35,50.645 M121.743,50.645C121.743,22.674,98.966,0,70.866,0   C42.768,0,19.989,22.674,19.989,50.645c0,12.298,4.408,23.574,11.733,32.345l39.188,56.283l39.761-57.104   c1.428-1.779,2.736-3.654,3.916-5.625l0.402-0.574h-0.066C119.253,68.516,121.743,59.874,121.743,50.645"/></g><g id="Livello_1_1_"/></svg></span>Spooner</a>
						<a href="#" class="wmadison">West Madison<span class="dot"><svg enable-background="new 0 0 141.732 141.732" height="141.732px" id="Livello_1" version="1.1" viewBox="0 0 141.732 141.732" width="141.732px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_110"><path class="mapPinInner" d="M95.35,50.645c0,13.98-11.389,25.322-25.438,25.322c-14.051,0-25.438-11.342-25.438-25.322   c0-13.984,11.389-25.322,25.438-25.322C83.964,25.322,95.35,36.66,95.35,50.645 M121.743,50.645C121.743,22.674,98.966,0,70.866,0   C42.768,0,19.989,22.674,19.989,50.645c0,12.298,4.408,23.574,11.733,32.345l39.188,56.283l39.761-57.104   c1.428-1.779,2.736-3.654,3.916-5.625l0.402-0.574h-0.066C119.253,68.516,121.743,59.874,121.743,50.645"/></g><g id="Livello_1_1_"/></svg></span></a>
						<a href="#" class="madison"><span class="dot"><svg enable-background="new 0 0 141.732 141.732" height="141.732px" id="Livello_1" version="1.1" viewBox="0 0 141.732 141.732" width="141.732px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_110"><path class="mapPinInner" d="M95.35,50.645c0,13.98-11.389,25.322-25.438,25.322c-14.051,0-25.438-11.342-25.438-25.322   c0-13.984,11.389-25.322,25.438-25.322C83.964,25.322,95.35,36.66,95.35,50.645 M121.743,50.645C121.743,22.674,98.966,0,70.866,0   C42.768,0,19.989,22.674,19.989,50.645c0,12.298,4.408,23.574,11.733,32.345l39.188,56.283l39.761-57.104   c1.428-1.779,2.736-3.654,3.916-5.625l0.402-0.574h-0.066C119.253,68.516,121.743,59.874,121.743,50.645"/></g><g id="Livello_1_1_"/></svg></span>Administration</a>
						<a href="#" class="greenhouses"><span class="dot"><svg enable-background="new 0 0 141.732 141.732" height="141.732px" id="Livello_1" version="1.1" viewBox="0 0 141.732 141.732" width="141.732px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_110"><path class="mapPinInner" d="M95.35,50.645c0,13.98-11.389,25.322-25.438,25.322c-14.051,0-25.438-11.342-25.438-25.322   c0-13.984,11.389-25.322,25.438-25.322C83.964,25.322,95.35,36.66,95.35,50.645 M121.743,50.645C121.743,22.674,98.966,0,70.866,0   C42.768,0,19.989,22.674,19.989,50.645c0,12.298,4.408,23.574,11.733,32.345l39.188,56.283l39.761-57.104   c1.428-1.779,2.736-3.654,3.916-5.625l0.402-0.574h-0.066C119.253,68.516,121.743,59.874,121.743,50.645"/></g><g id="Livello_1_1_"/></svg></span>CALS Greenhouses</a>
					</div>

					<div class="mapObject"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 586.9 629.1" enable-background="new 0 0 586.9 629.1" xml:space="preserve">
<g>
	<path class="stateGraphic" fill="#FFFFFF" d="M317.7,629.1c-105.9,0-211.8,0-317.7,0C0,419.4,0,209.8,0,0c195.6,0,391.2,0,586.9,0
		c0,209.6,0,419.4,0,629.1c-62.6,0-125.4,0-188.2,0c2.9-0.3,5.9-0.9,8.8-0.9c25.6-0.2,51.2-0.3,76.8-0.6c4.5,0,9.1-0.2,13.6-1
		c1.5-0.3,3.8-2.5,3.9-4c1-10.8,1.7-21.5,2.1-32.3c0.1-2.5-1-5.2-1.9-7.7c-1.5-4.2-3.9-8.1-5-12.4c-1.4-5.3-0.2-11.3-4.9-15.6
		c-0.6-0.6-1-2.2-0.7-2.9c4-7.6-0.7-14.9-1-22.3c-0.4-7.8-1-15.4,1.7-22.8c3.3-9,7.5-17.6,7.9-27.5c0.1-2.6,1.6-5.4,3.1-7.7
		c3.5-5.1,4.4-10.6,3.7-16.5c-0.6-5.2-1.8-10.3-2.3-15.6c-1.1-10.3,3.2-19.6,6.2-29.1c0.8-2.6,2.7-5.3,4.8-6.9
		c7.3-5.3,9.1-9.5,7.4-18.4c-0.9-4.4-2.1-9.2-1.3-13.5c2.4-14.1,3.6-28.6,12-41c0.8-1.1,1.1-2.6,1.5-3.9c3.4-9.8,5.8-20.1,14-27.7
		c2.2-2,3.5-6.1,3.4-9.1c-0.4-7.1,3.4-12.1,7.7-16.6c4.6-4.9,5.7-10.5,5.4-16.7c-0.1-2.6,0.8-4,2.8-5.9c2.2-2.2,2.2-6.5,3.2-9.8
		c-2.6-0.6-5.1-1.6-7.6-1.6c-5.8,0.1-6.3,5.5-8.5,9.3c-1.7,2.9-3.3,7.6-5.7,8.2c-6.6,1.5-7.2,6.3-8.7,11.1c-0.7,2.1-1.7,4.1-2.7,6.2
		c-3.6,7.3-7.2,14.5-11.5,23c-2.1,1-5.9,4.1-9.9,4.4c-5.7,0.4-8.6,3.6-11,7.7c-2.8,4.8-4.8,10.1-7.6,14.9c-1.7,2.8-4.3,5.1-6.7,7.4
		c-2.7,2.6-5.8,4.8-8.6,7.4c-1.1,1-1.7,2.6-2.6,4c-2.1,3.2-4.9,2.6-7.2,0.8c-2.8-2.1-0.6-3.3,1.2-4.7c0.6-0.5,0.5-2.1,0.5-3.2
		c0-2.8-1.2-6-0.2-8.3c3.1-7,6.9-13.7,10.4-20.4c1.4-2.8,4.2-5.5,4.2-8.3c0-6.3,3.1-8.4,8.5-9.8c11.3-3,11.8-4,12.8-14.7
		c0.3-3.4-0.3-5.7-3.8-7.7c-6.7-3.7-8.8-10-6.5-17.1c1.3-4.2,3.3-8.2,4.2-12.4c0.5-2.2,0-5.4-1.4-6.9c-0.9-1-4.3,0-6.4,0.6
		c-3.7,0.9-7.3,2.1-12,3.6c0.7-4.9,0.2-8.8,1.8-11.2c3.2-4.8,6.8-9,3.5-15.1c-0.2-0.3,0.1-1.1,0.4-1.5c2.3-3.5,1.8-6.9-0.1-10.4
		c-0.5-0.9,0.2-2.3,0-3.4c-0.5-2.5-0.3-5.8-1.8-7.3c-6.6-6.6-15-9.9-24.1-11.2c-5.2-0.7-5.8-1.9-3.3-6.6c0.9-1.7,0.8-4.5,0.2-6.4
		c-1.5-5.2-5.9-6.9-10.7-8.1c-5.4-1.4-10.6-3.2-16-4.6c-5.7-1.5-11.6-3.9-17.3-3.5c-6.2,0.5-11.7,0.4-17.8-1.1
		c-6.7-1.6-12.9-3.7-19-6.8c-9.3-4.8-18.8-9.4-28.8-12.3c-25.5-7.6-51.3-14.2-77-21.2c-3.5-0.9-6-2.5-7.3-6
		c-1.7-4.6-3.5-9.1-5.6-13.6c-2.9-6.2-9.3-8.8-14.9-10.5c-11.1-3.5-22.4-6-30.9-14.9c-3-3.2-7.3-3.3-9-0.2c-2.8,5.2-7.9,5.4-13,6.8
		c0.5-2.5,1.6-4.5,2.4-6.6c1-2.5,2.4-5.1,2.4-7.7c-0.1-4.5,3.1-12.2,6.9-14.1c0.8-0.4,2,0.1,4,0.3c-1.7,1.3-2.9,1.7-3.3,2.5
		c-1,1.9-1.6,3.9-2.3,5.9c2-0.1,4.4,0.5,5.9-0.4c4.6-2.9,9-6.2,13.1-9.6c0.9-0.7,1.1-3.9,0.4-4.4c-1.1-0.9-3.4-1.1-4.8-0.6
		c-2.2,0.9-4,2.6-6,4c2.1-6.1,6.2-8.8,12.3-8.8c4.5,0,5.3-3.6,5.4-6.3c0.1-3.5-3-2.9-5.6-2.4c-3.6,0.7-7.7-2.5-8.5-6.2
		c-0.3-1.5-1-2.9-1.7-5.1c-4.1,4.9-3,8.5,0.3,12.3c-3.9-0.9-7.5-2.1-9.7,2.1c-0.2,0.3-1.6,0.4-1.9,0.1c-3.5-4.3-7.7-2.1-11.1-1
		c-0.3-2.5-0.4-4.5-1-6.2c-0.1-0.3-3.7-0.1-4,0.5c-0.7,1.8-0.6,4-0.8,6.6c-2,1.8-4.6,4.4-7.5,6.6c-3.7,2.8-7.5,5-12.6,3.5
		c-1.5-0.5-3.7,0.4-5.2,1.2c-4.6,2.5-8.7,6.2-13.6,7.8c-13.1,4.5-26.3,8.4-39.6,12.1c-7,1.9-14.4,2-20.5-2.9
		c-6.3-5.1-7.6-5-12.1,1.8c-1.7,2.5-4.4,6.2-6.5,6.1c-6.1-0.2-6.5,3.3-6.9,7.5c-0.2,2.4-0.4,4.9-0.5,7.3
		c-0.7,20.1-1.4,40.3-2.2,60.4c-0.1,1.8-1.1,3.5-1.9,5.3c-2.8,6.6-10.6,4.9-15.2,9.3c-4.5,4.3-11.6,5.8-17.1,9.3
		c-3.2,2.1-6,5.3-8.1,8.5c-2.7,4-3.5,9.8-7,12.7c-6.5,5.5-8.5,12.1-8.9,19.9c-0.2,5.2,1.6,8.5,7.2,8.9c4.6,0.3,7.4,2.7,8.7,7
		c0.5,1.6,1.3,3.3,2.4,4.6c3.9,4.5,3.6,8.7,0.2,13.3c-7,9.3-10.6,19.6-8.2,31.5c0.4,1.8-1.4,4.1-2.1,6.1c-0.7,2.2-2.5,4.9-1.9,6.6
		c4.8,12.3,0.8,24.2-1.5,36.1c-0.8,3.9-0.5,6.7,2.5,9.4c4.1,3.8,8.5,7.5,12,11.8c4.8,5.9,11.1,8.9,18.1,10.9c2,0.6,4.1,0.8,6.2,1.3
		c3.8,0.9,6,2.9,7.8,6.8c1.8,3.8,5.5,7,9,9.6c2.6,1.9,6.3,2.1,9.3,3.6c8,3.9,16.2,7.3,18.7,17.6c2.2,9,7.6,16.3,15.2,22
		c3.4,2.5,6.1,5.8,9.5,8.3c2.8,2.1,5.8,4.1,9.1,5.1c17.3,5.3,23.3,20,29.5,34.6c0.3,0.8,0.2,1.7,0.2,2.6c0.7,13.3,0.8,26.6,2.3,39.8
		c0.9,8,1.3,16.9,11.3,20.7c4.4,1.7,4.2,6.2,2.5,10c-1.1,2.5-2.8,4.9-4.4,7.2c-3.7,5.5-4.8,11.5-3.9,18c0.6,4.8,0.7,9.8,1.2,14.6
		c0.1,1.5,0.6,3,1,4.5c1.9,6.5,3.6,13,5.8,19.4c1,2.9,2.3,5.9,4.3,8.1c5.8,6.3,14.1,7.5,21.8,9.3c6.9,1.6,12.5,3.5,14.7,11.3
		c2,7.4,6.8,10.6,15.4,10.5c27.9-0.3,55.7,0.5,83.6,1C311.5,628.2,314.6,628.8,317.7,629.1z M570.5,233c0.5,0.4,2.2,2.7,3.4,2.5
		c2.6-0.6,5.8-1.8,7.3-3.8c2-2.7,2.7-6.5,4-9.8c-2.5,0.4-5.1,0.8-7.6,1.2c-0.2,0-0.3,0.1-0.5,0.1C572.1,223.7,570.1,226.7,570.5,233
		z M233,15c6.9-1.7,10-6,8.9-10.7c-0.3-1.1-1.5-2.6-2.5-2.7c-1.1-0.1-3,0.8-3.3,1.8C234.8,6.9,234.1,10.5,233,15z M539.4,259.8
		c-0.5-1-1-1.9-1.5-2.9c-1.4-1.2-2.8-2.6-4.4-3.5c-0.2-0.1-2.5,2.3-2.3,2.5c1.2,1.7,2.5,3.6,4.2,4.7
		C536.1,261.1,538,260.1,539.4,259.8z M210.6,10.1c-1.4-1-2.3-1.9-3.4-2.3c-0.2-0.1-1.7,1.6-1.5,2c0.5,1.1,1.5,1.8,2.4,2.7
		C208.7,11.9,209.4,11.3,210.6,10.1z M235.8,28.8c-1.4-0.9-2.4-2-2.9-1.8c-0.9,0.3-1.6,1.4-2.4,2.2c0.7,0.6,1.5,1.7,2.1,1.7
		C233.5,30.7,234.3,29.8,235.8,28.8z"/>
	<path class="stateoutline" d="M317.7,629.1c-3.1-0.3-6.2-0.9-9.4-1c-27.9-0.5-55.7-1.3-83.6-1c-8.6,0.1-13.4-3-15.4-10.5c-2.1-7.8-7.8-9.7-14.7-11.3
		c-7.7-1.8-16.1-3-21.8-9.3c-2-2.2-3.3-5.2-4.3-8.1c-2.1-6.4-3.9-12.9-5.8-19.4c-0.4-1.5-0.9-3-1-4.5c-0.5-4.9-0.5-9.8-1.2-14.6
		c-0.9-6.6,0.2-12.5,3.9-18c1.6-2.3,3.2-4.6,4.4-7.2c1.7-3.8,1.9-8.3-2.5-10c-10-3.8-10.4-12.7-11.3-20.7
		c-1.4-13.2-1.6-26.5-2.3-39.8c0-0.9,0.1-1.8-0.2-2.6c-6.2-14.6-12.3-29.3-29.5-34.6c-3.3-1-6.3-3-9.1-5.1c-3.4-2.5-6.2-5.8-9.5-8.3
		c-7.6-5.7-13-13-15.2-22c-2.5-10.3-10.7-13.6-18.7-17.6c-3-1.5-6.7-1.7-9.3-3.6c-3.5-2.6-7.2-5.8-9-9.6c-1.8-3.8-4-5.9-7.8-6.8
		c-2-0.5-4.1-0.7-6.2-1.3c-7-1.9-13.3-4.9-18.1-10.9c-3.5-4.3-7.8-8-12-11.8c-3-2.7-3.2-5.5-2.5-9.4c2.3-11.9,6.3-23.8,1.5-36.1
		c-0.7-1.7,1.1-4.4,1.9-6.6c0.7-2.1,2.5-4.3,2.1-6.1c-2.3-11.9,1.3-22.1,8.2-31.5c3.4-4.6,3.7-8.8-0.2-13.3c-1.1-1.3-1.9-3-2.4-4.6
		c-1.4-4.4-4.2-6.7-8.7-7c-5.6-0.4-7.4-3.8-7.2-8.9c0.4-7.8,2.4-14.4,8.9-19.9c3.4-2.9,4.3-8.7,7-12.7c2.2-3.2,4.9-6.5,8.1-8.5
		c5.5-3.5,12.5-5,17.1-9.3c4.6-4.4,12.5-2.7,15.2-9.3c0.7-1.7,1.8-3.5,1.9-5.3c0.8-20.1,1.5-40.3,2.2-60.4c0.1-2.4,0.3-4.9,0.5-7.3
		c0.4-4.2,0.8-7.7,6.9-7.5c2.1,0.1,4.9-3.6,6.5-6.1c4.5-6.8,5.8-6.9,12.1-1.8c6.1,4.9,13.5,4.8,20.5,2.9
		c13.3-3.6,26.6-7.6,39.6-12.1c4.9-1.7,9-5.3,13.6-7.8c1.6-0.8,3.8-1.7,5.2-1.2c5.1,1.6,8.9-0.7,12.6-3.5c2.9-2.2,5.5-4.8,7.5-6.6
		c0.2-2.6,0.1-4.8,0.8-6.6c0.3-0.7,3.9-0.9,4-0.5c0.7,1.8,0.7,3.7,1,6.2c3.4-1.1,7.7-3.2,11.1,1c0.2,0.3,1.7,0.2,1.9-0.1
		c2.3-4.3,5.9-3,9.7-2.1c-3.4-3.8-4.4-7.4-0.3-12.3c0.8,2.2,1.4,3.7,1.7,5.1c0.8,3.7,4.8,6.8,8.5,6.2c2.5-0.5,5.7-1.1,5.6,2.4
		c-0.1,2.7-0.9,6.4-5.4,6.3c-6.1,0-10.2,2.7-12.3,8.8c2-1.4,3.8-3.1,6-4c1.4-0.5,3.7-0.3,4.8,0.6c0.7,0.5,0.4,3.7-0.4,4.4
		c-4.1,3.5-8.5,6.8-13.1,9.6c-1.5,0.9-3.9,0.3-5.9,0.4c0.7-2,1.3-4,2.3-5.9c0.4-0.8,1.6-1.2,3.3-2.5c-2-0.2-3.2-0.7-4-0.3
		c-3.8,1.9-7,9.6-6.9,14.1c0,2.5-1.4,5.2-2.4,7.7c-0.8,2.1-2,4.1-2.4,6.6c5-1.3,10.1-1.5,13-6.8c1.7-3.1,6-3,9,0.2
		c8.5,8.9,19.8,11.4,30.9,14.9c5.6,1.7,11.9,4.3,14.9,10.5c2.1,4.4,3.9,9,5.6,13.6c1.3,3.5,3.8,5.1,7.3,6
		c25.7,6.9,51.5,13.6,77,21.2c10,3,19.5,7.6,28.8,12.3c6.2,3.1,12.3,5.2,19,6.8c6.1,1.5,11.7,1.5,17.8,1.1c5.6-0.4,11.5,2,17.3,3.5
		c5.4,1.4,10.6,3.2,16,4.6c4.8,1.2,9.2,3,10.7,8.1c0.6,2,0.7,4.7-0.2,6.4c-2.5,4.6-1.9,5.8,3.3,6.6c9.1,1.3,17.5,4.6,24.1,11.2
		c1.5,1.5,1.4,4.8,1.8,7.3c0.2,1.1-0.4,2.5,0,3.4c2,3.5,2.4,6.9,0.1,10.4c-0.3,0.4-0.5,1.1-0.4,1.5c3.3,6.1-0.3,10.3-3.5,15.1
		c-1.6,2.4-1.1,6.3-1.8,11.2c4.7-1.4,8.3-2.6,12-3.6c2.2-0.5,5.5-1.5,6.4-0.6c1.4,1.5,1.9,4.7,1.4,6.9c-0.9,4.2-2.8,8.3-4.2,12.4
		c-2.3,7.1-0.1,13.4,6.5,17.1c3.5,1.9,4.1,4.2,3.8,7.7c-1,10.7-1.5,11.6-12.8,14.7c-5.4,1.5-8.6,3.5-8.5,9.8c0,2.7-2.7,5.5-4.2,8.3
		c-3.6,6.8-7.4,13.4-10.4,20.4c-1,2.3,0.1,5.5,0.2,8.3c0,1.1,0.1,2.7-0.5,3.2c-1.8,1.4-4,2.6-1.2,4.7c2.4,1.8,5.2,2.4,7.2-0.8
		c0.9-1.3,1.4-2.9,2.6-4c2.7-2.6,5.8-4.8,8.6-7.4c2.4-2.3,5-4.6,6.7-7.4c2.9-4.8,4.8-10.1,7.6-14.9c2.4-4.1,5.3-7.2,11-7.7
		c4-0.3,7.8-3.4,9.9-4.4c4.2-8.5,7.9-15.7,11.5-23c1-2,2.1-4,2.7-6.2c1.5-4.8,2.1-9.6,8.7-11.1c2.4-0.5,4-5.2,5.7-8.2
		c2.2-3.8,2.7-9.2,8.5-9.3c2.5,0,5.1,1,7.6,1.6c-1,3.4-1,7.6-3.2,9.8c-1.9,2-2.9,3.3-2.8,5.9c0.3,6.2-0.8,11.8-5.4,16.7
		c-4.3,4.5-8,9.5-7.7,16.6c0.2,3-1.2,7.1-3.4,9.1c-8.2,7.6-10.6,17.9-14,27.7c-0.5,1.3-0.8,2.8-1.5,3.9c-8.4,12.4-9.6,26.9-12,41
		c-0.7,4.3,0.5,9,1.3,13.5c1.7,8.9-0.1,13.2-7.4,18.4c-2.2,1.6-4,4.3-4.8,6.9c-3,9.5-7.3,18.7-6.2,29.1c0.6,5.2,1.7,10.4,2.3,15.6
		c0.7,5.9-0.2,11.4-3.7,16.5c-1.5,2.3-3,5.1-3.1,7.7c-0.4,9.9-4.6,18.5-7.9,27.5c-2.7,7.4-2.1,15-1.7,22.8c0.3,7.4,5,14.7,1,22.3
		c-0.4,0.7,0,2.3,0.7,2.9c4.7,4.3,3.5,10.3,4.9,15.6c1.1,4.3,3.4,8.2,5,12.4c0.9,2.5,2,5.1,1.9,7.7c-0.4,10.8-1.1,21.6-2.1,32.3
		c-0.1,1.5-2.3,3.8-3.9,4c-4.5,0.8-9.1,1-13.6,1c-25.6,0.2-51.2,0.3-76.8,0.6c-3,0-5.9,0.6-8.8,0.9
		C371.7,629.1,344.7,629.1,317.7,629.1z M502,233.3c-5.2,1.4-9.5,2.9-13.8,3.7c-3.6,0.7-7.7-0.8-7.5-4.5c0.3-4.8,2-9.9,4.6-13.9
		c2.3-3.7,3-6.3,0.9-10c-0.7-1.3-1-4.2-0.3-4.6c3.8-2.3,2.5-4.6,0.8-7.4c-0.8-1.3-1.2-3.6-0.7-4.9c1.3-2.8,0.2-4.6-2-5.6
		c-6.7-3-13.4-6.4-20.5-8.3c-6.2-1.7-9.7-4.8-7.5-9.1c3.6-6.9,1.9-10.2-5.7-12.2c-5.6-1.4-11-3.2-16.6-4.6
		c-5.7-1.4-11.9-4.4-17.2-3.3c-5.9,1.2-10.9,2.4-16-1.3c-0.4-0.3-1-0.3-1.5-0.2c-6.9,0.6-12.6-2.5-18.1-6.1
		c-9.7-6.5-20.4-10.7-31.7-13.7c-22.9-6-45.6-12.8-68.6-18.3c-10.6-2.5-17.2-7.3-19.5-18.1c-1-4.6-3.4-8.8-8.7-10.3
		c-3.8-1.1-7.6-2.2-11.1-3.8c-8.5-4-17.1-8-25.3-12.5c-3.3-1.8-5.6-1.7-8.7,0c-4.1,2.2-8.5,4.1-12.9,5.8c-1.4,0.5-3.6,0.2-4.7-0.6
		c-0.8-0.6-0.8-3-0.3-4.3c1.2-3.1,3-5.9,4.4-8.9c0.8-1.7,2-3.7,1.6-5.2c-1.3-4.9,1-8.3,3.5-12c2.1-3.2,3.5-7,4.6-10.8
		c1.2-4.2-3-6.6-5.3-6.2c-5,0.8-10.4,2.4-14.3,5.3c-5.4,4.1-10.4,7.6-17.5,6.7c-1.5-0.2-3.4,0.6-4.8,1.3c-4.5,2.4-8.5,5.8-13.2,7.4
		c-12.9,4.3-25.9,8.8-39.2,11.6c-8.8,1.8-19.2,5.2-26.2-5.1c-0.2-0.3-0.9-0.4-1.7-0.6c-0.5,0.7-1.5,1.4-1.4,2c0.4,4.1-2,6.1-5.5,7
		c-9.4,2.3-9.3,9.4-9.5,17c-0.4,19.3-1.2,38.5-2.1,57.8c-0.1,2.2-1.7,4.4-2.4,6.6c-2.6,7.6-11,6.4-16.1,10.5
		c-5.2,4.2-12.3,6-18.2,9.4c-2.3,1.3-4.1,3.7-5.6,6c-3.2,5.1-5.1,11.4-9.2,15.6c-4.4,4.6-6.2,9.5-6.6,15.4c-0.2,3.3,1,5.5,4.6,5.7
		c6.2,0.4,10.1,3.4,11.4,9.6c0.3,1.3,1.1,2.7,1.9,3.7c4.8,5.7,4.5,11.4,0.2,17.2c-6.6,9-10,18.7-7.6,30c0.4,2.1-1.6,4.7-2.3,7.2
		c-0.6,1.9-1.7,4-1.2,5.7c3.3,12.1,1.7,24-1.8,35.7c-1,3.2-0.4,5.2,2,7.3c3.9,3.5,7.9,7,11.2,11.1c4.5,5.5,10.3,8.2,16.9,9.9
		c2.2,0.6,4.5,0.9,6.7,1.5c4.5,1.1,7.4,3.6,9.2,8.3c1.2,3.2,4.5,6,7.5,8.1c2.5,1.8,6,1.9,8.8,3.3c7.5,3.9,16.2,6.7,19.3,15.8
		c3.3,9.6,7.3,18.5,15.8,24.7c3.1,2.2,5.6,5.3,8.7,7.6c2.6,2,5.5,3.9,8.6,4.9c18.3,5.7,25,21.2,31.8,36.8c0.3,0.6,0.2,1.4,0.2,2.1
		c0.7,13.4,0.9,26.9,2.2,40.3c0.7,7.6,1.3,15.8,10.5,19.4c2,0.8,4.1,4.6,3.9,6.7c-0.5,4.3-1.6,9.1-4.1,12.6
		c-8.9,12.2-3.6,24.9-1.9,37.4c0.8,5.9,3,11.8,5,17.5c1.1,3.1,2.4,7.3,4.8,8.6c6.2,3.3,13.1,5.7,19.9,7.6c7.3,2,13.4,4.3,15.7,12.7
		c1.6,5.9,5.5,8.8,12.8,8.8c30.3,0,60.6,1.3,91,1.3c56.5,0,112.9-0.5,169.4-0.8c2.4,0,4.9-0.4,7.3-0.4c3.7-0.1,5-1.6,5.1-5.5
		c0.2-7.3,1-14.6,1.8-21.9c0.5-5.2,1.5-10.1-2.8-14.7c-2.1-2.2-2.8-6-3.4-9.2c-1.1-5.7-0.5-11.9-5-16.7c-0.9-1-1.4-3.3-0.8-4.4
		c3.5-7.1-0.3-14-0.9-20.8c-1.1-12.3-0.3-23.7,5.8-34.6c1.1-1.9,1.9-4.2,2.1-6.4c1-8.4,2.6-16.5,7.3-23.9c1.7-2.6,1.6-6.8,1.4-10.2
		c-0.3-5-1.7-10-2.3-15c-1.3-10.5,3-19.9,5.6-29.7c1.3-5,3.4-8.5,7.8-11.1c5.3-3.1,6.5-6.8,5.1-13c-4.1-19.3,1.6-37,8.9-54.4
		c2.4-5.6,4.7-11.3,6.9-17c0.9-2.4-7-13.4-9.3-12.9c-2.3,0.5-4.3,2.1-6.4,3.3c-1.2,0.7-2.5,2.2-3.5,2c-5.1-1.1-6.9,2.5-8.7,5.8
		c-2.1,3.8-3.6,8-5.6,11.8c-1.3,2.6-2.6,6.3-4.8,7.2c-6.8,2.8-10.9,7.7-14.6,13.7c-2.3,3.7-6.4,3.3-9.4,1.3c-2.3-1.5-5.3-4.8-5-6.9
		c1.5-12.8,6.3-24.5,13.6-35.3c2.3-3.3,3.5-7.4,4.5-11.4c1-3.8,2.7-6.3,6.5-7.4c3.2-0.9,6.4-1.9,9.4-3.2c5.6-2.4,6.3-9.7,2-14
		c-6.3-6.2-12.3-12.6-6.9-22.8C499.5,242.7,500.4,238.1,502,233.3z M561.4,248.2c-1,0.4-1.5,0.5-1.6,0.7
		c-2.5,5.7-4.6,11.8-11.9,13.2c-0.7,0.1-1.3,1.6-1.7,2.5c-2.7,5.6-5.4,11.2-8,16.8c-1.5,3.2-3.8,6.3-4,9.6
		c-0.3,3.9,0.8,8.1,2.1,11.9c0.6,1.9,3.2,3,5,0.4c2.5-3.7,5.3-7.3,7.1-11.4c2.2-5,3.3-10.4,5.2-15.5c2.7-7.3,5.8-14.3,8.4-21.6
		C562.5,252.9,561.6,250.5,561.4,248.2z"/>
	<path class="stateoutline" d="M570.5,233c-0.4-6.3,1.6-9.3,6.6-9.8c0.2,0,0.3,0,0.5-0.1c2.5-0.4,5.1-0.8,7.6-1.2c-1.3,3.3-2,7-4,9.8
		c-1.5,2-4.7,3.3-7.3,3.8C572.7,235.8,571,233.5,570.5,233z"/>
	<path class="stateoutline" d="M233,15c1.1-4.5,1.8-8.2,3.1-11.6c0.3-0.9,2.3-1.9,3.3-1.8c1,0.1,2.2,1.6,2.5,2.7C243,9,239.9,13.3,233,15z"/>
	<path class="stateoutline" d="M539.4,259.8c-1.4,0.3-3.2,1.3-4.1,0.8c-1.7-1.1-3.1-2.9-4.2-4.7c-0.2-0.2,2.1-2.6,2.3-2.5c1.6,0.9,3,2.3,4.4,3.5
		C538.3,257.9,538.8,258.8,539.4,259.8z"/>
	<path class="stateoutline" d="M210.6,10.1c-1.2,1.2-1.9,1.8-2.6,2.4c-0.8-0.9-1.9-1.7-2.4-2.7c-0.2-0.4,1.3-2.1,1.5-2C208.3,8.2,209.2,9.1,210.6,10.1z"
		/>
	<path class="stateoutline" d="M235.8,28.8c-1.4,1-2.3,1.9-3.2,2c-0.6,0.1-1.4-1.1-2.1-1.7c0.8-0.8,1.4-1.9,2.4-2.2C233.4,26.8,234.3,27.9,235.8,28.8z"/>
	<path fill="#FFFFFF" class="statefill" d="M502,233.3c-1.6,4.8-2.5,9.4-4.6,13.3c-5.5,10.1,0.5,16.5,6.9,22.8c4.3,4.2,3.6,11.5-2,14
		c-3,1.3-6.3,2.2-9.4,3.2c-3.8,1.1-5.5,3.6-6.5,7.4c-1,3.9-2.3,8.1-4.5,11.4c-7.3,10.7-12.1,22.5-13.6,35.3c-0.3,2.1,2.8,5.4,5,6.9
		c3,2,7.1,2.4,9.4-1.3c3.7-5.9,7.8-10.9,14.6-13.7c2.2-0.9,3.4-4.6,4.8-7.2c2-3.9,3.5-8,5.6-11.8c1.8-3.3,3.6-6.9,8.7-5.8
		c1,0.2,2.3-1.3,3.5-2c2.1-1.2,4.2-2.8,6.4-3.3c2.4-0.5,10.2,10.4,9.3,12.9c-2.1,5.7-4.5,11.4-6.9,17c-7.4,17.4-13.1,35.1-8.9,54.4
		c1.3,6.2,0.1,10-5.1,13c-4.4,2.6-6.6,6.1-7.8,11.1c-2.5,9.8-6.9,19.2-5.6,29.7c0.6,5,2,10,2.3,15c0.2,3.4,0.3,7.5-1.4,10.2
		c-4.7,7.4-6.3,15.5-7.3,23.9c-0.3,2.2-1.1,4.5-2.1,6.4c-6,10.9-6.8,22.3-5.8,34.6c0.6,6.8,4.4,13.7,0.9,20.8
		c-0.6,1.1-0.1,3.5,0.8,4.4c4.5,4.8,3.9,11,5,16.7c0.6,3.2,1.3,7,3.4,9.2c4.3,4.6,3.3,9.5,2.8,14.7c-0.8,7.3-1.6,14.6-1.8,21.9
		c-0.1,3.9-1.4,5.4-5.1,5.5c-2.5,0-4.9,0.4-7.3,0.4c-56.5,0.3-112.9,0.8-169.4,0.8c-30.3,0-60.6-1.3-91-1.3
		c-7.2,0-11.2-2.9-12.8-8.8c-2.3-8.4-8.4-10.7-15.7-12.7c-6.8-1.9-13.7-4.3-19.9-7.6c-2.5-1.3-3.7-5.5-4.8-8.6
		c-2-5.7-4.2-11.5-5-17.5c-1.7-12.5-7-25.2,1.9-37.4c2.5-3.4,3.6-8.2,4.1-12.6c0.2-2.2-1.9-6-3.9-6.7c-9.2-3.6-9.8-11.8-10.5-19.4
		c-1.3-13.4-1.5-26.9-2.2-40.3c0-0.7,0.1-1.5-0.2-2.1c-6.8-15.5-13.4-31.1-31.8-36.8c-3.1-1-6-2.9-8.6-4.9c-3.1-2.3-5.6-5.4-8.7-7.6
		c-8.6-6.2-12.5-15.1-15.8-24.7c-3.1-9.1-11.8-11.9-19.3-15.8c-2.8-1.4-6.3-1.6-8.8-3.3c-3-2.1-6.3-4.9-7.5-8.1
		c-1.8-4.7-4.7-7.2-9.2-8.3c-2.2-0.5-4.5-0.9-6.7-1.5c-6.6-1.7-12.4-4.4-16.9-9.9c-3.3-4.1-7.3-7.6-11.2-11.1c-2.4-2.1-3-4.1-2-7.3
		c3.5-11.7,5-23.5,1.8-35.7c-0.4-1.7,0.7-3.8,1.2-5.7c0.7-2.4,2.8-5,2.3-7.2c-2.4-11.4,1-21.1,7.6-30c4.3-5.8,4.7-11.5-0.2-17.2
		c-0.9-1-1.6-2.4-1.9-3.7c-1.4-6.2-5.3-9.2-11.4-9.6c-3.6-0.2-4.8-2.4-4.6-5.7c0.4-5.9,2.2-10.8,6.6-15.4c4-4.2,6-10.5,9.2-15.6
		c1.4-2.3,3.3-4.7,5.6-6c6-3.4,13.1-5.1,18.2-9.4c5.1-4.2,13.5-2.9,16.1-10.5c0.8-2.2,2.3-4.4,2.4-6.6c0.9-19.3,1.7-38.5,2.1-57.8
		c0.2-7.6,0.1-14.7,9.5-17c3.5-0.8,5.9-2.8,5.5-7c-0.1-0.6,0.9-1.3,1.4-2c0.7,0.3,1.5,0.3,1.7,0.6c7,10.4,17.3,7,26.2,5.1
		c13.3-2.8,26.3-7.2,39.2-11.6c4.7-1.6,8.8-5,13.2-7.4c1.4-0.8,3.3-1.5,4.8-1.3c7.1,0.8,12.1-2.7,17.5-6.7c3.9-3,9.3-4.6,14.3-5.3
		c2.3-0.4,6.5,2,5.3,6.2c-1,3.7-2.5,7.6-4.6,10.8c-2.5,3.8-4.8,7.1-3.5,12c0.4,1.5-0.8,3.5-1.6,5.2c-1.4,3-3.2,5.8-4.4,8.9
		c-0.5,1.3-0.5,3.7,0.3,4.3c1.1,0.9,3.3,1.1,4.7,0.6c4.4-1.7,8.7-3.6,12.9-5.8c3.1-1.6,5.5-1.7,8.7,0c8.2,4.5,16.8,8.6,25.3,12.5
		c3.5,1.6,7.4,2.8,11.1,3.8c5.3,1.5,7.7,5.7,8.7,10.3c2.3,10.8,8.9,15.6,19.5,18.1c23,5.5,45.7,12.3,68.6,18.3
		c11.3,3,22,7.2,31.7,13.7c5.4,3.6,11.2,6.7,18.1,6.1c0.5,0,1.2,0,1.5,0.2c5.1,3.7,10.1,2.5,16,1.3c5.3-1.1,11.5,1.9,17.2,3.3
		c5.6,1.4,11,3.2,16.6,4.6c7.7,1.9,9.3,5.2,5.7,12.2c-2.2,4.3,1.3,7.4,7.5,9.1c7.1,1.9,13.7,5.3,20.5,8.3c2.2,1,3.3,2.7,2,5.6
		c-0.6,1.3-0.1,3.6,0.7,4.9c1.7,2.9,3,5.1-0.8,7.4c-0.6,0.4-0.4,3.3,0.3,4.6c2.1,3.7,1.5,6.3-0.9,10c-2.6,4-4.3,9.2-4.6,13.9
		c-0.2,3.7,3.9,5.1,7.5,4.5C492.5,236.2,496.8,234.8,502,233.3z"/>
	<path fill="#FFFFFF" class="statefill" d="M561.4,248.2c0.2,2.4,1.1,4.7,0.5,6.6c-2.5,7.3-5.7,14.4-8.4,21.6c-1.9,5.1-3,10.5-5.2,15.5
		c-1.8,4.1-4.6,7.7-7.1,11.4c-1.8,2.7-4.3,1.5-5-0.4c-1.3-3.8-2.4-8-2.1-11.9c0.2-3.3,2.5-6.4,4-9.6c2.6-5.6,5.3-11.2,8-16.8
		c0.4-0.9,1-2.3,1.7-2.5c7.3-1.5,9.4-7.5,11.9-13.2C559.9,248.7,560.4,248.6,561.4,248.2z"/>
</g>
</svg>
</div>
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
