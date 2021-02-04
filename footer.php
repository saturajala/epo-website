<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EPO_website
 */

$facebook_url           = get_field('facebook_url');

?>


<!-- ******************** FOOTER ******************* -->
<footer class="main-footer">
      <div class="container">


				<?php
               /*  get_template_part( 'template-parts/footer/footer', 'widgets' ); */
 
				wp_nav_menu( array( 'theme_location' => 'footer-menu',
									'menu_class'     => 'col-lg-3 mb-5 mb-lg-0',
				) );
				
                ?>
				
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-center text-lg-left">

              <p class="copyrights-text mb-3 mb-lg-0">&copy; <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'epo-website' ), 'epo-website', '<a href="http://underscores.me/">Satu Rajala</a>' );
				?>
		
            </div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="list-inline social mb-0">
                <li class="list-inline-item"><a href="<?php echo $facebook_url; ?>" class="social-link"><i class="fa fa-facebook"></i></a><a href="#" class="social-link"><i class="fa fa-twitter"></i></a><a href="#" class="social-link"><i class="fa fa-youtube-play"></i></a><a href="#" class="social-link"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>


<?php wp_footer(); ?>


</body>
</html>
