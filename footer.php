<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div class="ieFooter">
		<div class="inner">
			<div id="pre-footer">
			<div class="linksContainer">
			<h3>Resources</h3>
        	<ul id="quick_links">
            	<li class="quick_links_list">
                	<?php wp_nav_menu( array( 'theme_location' => 'footer1' ) ); ?>
       	      </li>
            	<li class="quick_links_list">
                	<?php wp_nav_menu( array( 'theme_location' => 'footer2' ) ); ?>
            </li>

            </ul>
            <div class="clearfix"></div>
			</div>

			<div class="linksContainer right">
				<h3>Contact Us</h3>
				<p>The headquarters for the Agricultural Research Stations is located in Arlington, Wisconsin on the Arlington Agricultural Research Station.</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d23228.783397495863!2d-89.35199800012208!3d43.30174121135559!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDPCsDE4JzEwLjIiTiA4OcKwMjAnNDMuMCJX!5e0!3m2!1sen!2sus!4v1402603950041" width="400" height="200" frameborder="0" style="border:0"></iframe>
				<p class="address">Agricultural Research Station Headquarters | N695 Hopkins Rd | Arlington WI 53911 | 608.846.3750 | <a href="mailto:ars@cals.wisc.edu">ars@cals.wisc.edu</a></p>
			</div>
			<div class="clearfix"></div>
        </div>

        <div class="copyright">
        	<img src="<?php echo get_template_directory_uri(); ?>/images/footercrest2.png" alt="University of Wisconsin Madison" align="center" />
        	<div>&copy;Copyright 2014 The Board of Regents of the University of Wisconsin System <a href="http://wisc.edu">University of Wisconsin-Madison</a></div>



        </div>

        <div class="socialRef">
			<a href="https://twitter.com/UWMadisonCALS" title="Follow Us on Twitter" class="twitter">Twitter</a>
			<a href="http://www.flickr.com/photos/uwmadisoncals/" title="View our photostream" class="flickr">Flickr</a>
			<a href="http://www.linkedin.com/groups?gid=5062996" class="linkedin">LinkedIn</a>
			<a href="http://www.youtube.com/user/UWMadisonCALS" title="Our latest videos" class="youtube">Youtube</a>
			<a href="https://www.facebook.com/UWMadisonCALS" title="Like us on Facebook" class="facebook">Facebook</a>

		</div>
			<div class="clearfix"></div>
        </div>


			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with four columns of widgets.
				 */

					get_sidebar( 'footer' );
			?>
		</div>
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/min/master.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>


</body>
</html>
