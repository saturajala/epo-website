<?php
/**
 * Template Name: Home Page
 * 
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package EPO_website
 */

//Advanced Custom Fields
$etuudet_1_kuva         = get_field('etuudet_1_kuva');
$etuudet_2_kuva         = get_field('etuudet_2_kuva');
$etuudet_3_kuva         = get_field('etuudet_3_kuva');

$etuudet_1_otsikko      = get_field('etuudet_1_otsikko');
$etuudet_2_otsikko      = get_field('etuudet_2_otsikko');
$etuudet_3_otsikko      = get_field('etuudet_3_otsikko');

$etuudet_1_teksti       = get_field('etuudet_1_teksti');
$etuudet_2_teksti       = get_field('etuudet_2_teksti');
$etuudet_3_teksti       = get_field('etuudet_3_teksti');

$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body  = get_field('features_section_body');

$facebook_url           = get_field('facebook_url');

get_header();
?>

	<main id="primary" class="site-main">

    <!-- ========================== HERO ============================= -->

<?php get_template_part('template-parts/content', 'hero'); ?>

    <!-- ========================== TOIMINTA LYHYESTI / MIKÄ ON EPO ============================= -->

    <section class="about-epo">
      <div class="container">

        <div class="text-center">
          <h2>Mikä EPO on?</h2>
          <div class="row">
            <div class="col-lg-9 mx-auto">
              <p class="lead text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                eiusmod tempor incididunt ut labore.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. eiusmod tempor incididunt ut
                labore.</p>
              <a href="toiminta.html" class="btn btn-primary homebtn">Lue lisää toiminnasta!</a>
            </div>
          </div>
        </div>


      </div>
    </section>

    <!-- ******************** Miksi liittyä / Etuudet ******************* -->
    <section class="blogposts grey-bg">
      <div class="container">
        <div class="text-center mt-5">
          <h2>Miksi liittyä?</h2>
          <div class="row">
            <div class="col-lg-4">
              <div class="box text-center">

              <!-- if user uploaded an image -->
              <?php if( !empty($etuudet_1_kuva) ) : ?>

                <div class="icon d-flex align-items-end"><img src="<?php echo $etuudet_1_kuva['url']; ?>" alt="<?php echo $etuudet_1_kuva['alt']; ?>" class="img-fluid">
                </div>

              <?php endif; ?>

                <h3 class="h4"><?php echo $etuudet_1_otsikko; ?></h3>
                <p class="text-small font-weight-light"><?php echo $etuudet_1_teksti; ?>
                </p>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="box text-center">

                <!-- if user uploaded an image -->
              <?php if( !empty($etuudet_2_kuva) ) : ?>

              <div class="icon d-flex align-items-end"><img src="<?php echo $etuudet_2_kuva['url']; ?>" alt="<?php echo $etuudet_2_kuva['alt']; ?>" class="img-fluid">
              </div>

              <?php endif; ?>

                <h3 class="h4"><?php echo $etuudet_2_otsikko; ?></h3>
                <p class="text-small font-weight-light"><?php echo $etuudet_2_teksti; ?>
                </p>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="box text-center">

              <!-- if user uploaded an image -->
              <?php if( !empty($etuudet_3_kuva) ) : ?>

                <div class="icon d-flex align-items-end"><img src="<?php echo $etuudet_3_kuva['url']; ?>" alt="<?php echo $etuudet_3_kuva['alt']; ?>" class="img-fluid">
                </div>

                <?php endif; ?>

                <h3 class="h4"><?php echo $etuudet_3_otsikko; ?></h3>
                <p class="text-small font-weight-light"><?php echo $etuudet_3_teksti; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- ************** TAPAHTUMAT ********************* -->

    <section id="project-features">
      <div class="container text-center mt-5">
        <div class="text-center mt-5">
            <h2>Tietotteita ja tapahtumia</h2>
            <div class="row">
              <div class="col-sm-4 box text-center">
                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/monitor.svg" alt="Design">
                <h3>Testi 1</h3>
                <p class="lead divider-subtitle mt-2 text-muted">Pellentesque sed leo facilisis, eleifend justo sit amet, pellentesque sapien.</p>
              </div>

              <div class="col-sm-4 box text-center">
                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/monitor.svg" alt="Code">
                <h3>Testi 2</h3>
                <p class="lead divider-subtitle mt-2 text-muted">Pellentesque sed leo facilisis, eleifend justo sit amet, pellentesque sapien.</p>
              </div>

              <div class="col-sm-4 box text-center">
                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/monitor.svg" alt="Code">
                <h3>Testi 3</h3>
                <p class="lead divider-subtitle mt-2 text-muted">Pellentesque sed leo facilisis, eleifend justo sit amet, pellentesque sapien.</p>
              </div>
            </div><a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </section>

        <!-- ******************** FEATURES ******************** -->
        <section class="bg-gray">
      <div class="container">
        <div class="text-center">
        <div class="col-lg-2"><img src="<?php echo $features_section_image['url']?>" alt="" class="client-image img-fluid"></div>
          <h2><?php echo $features_section_title; ?></h2>

          <!-- if user added text -->
          <?php if( !empty($features_section_body) ) : ?>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="lead text-muted mt-2"><?php echo $features_section_body; ?></p>
            </div>
          </div>
          <?php endif; ?>

        </div>
        <div class="clients mt-5">
          <div class="row">

          <?php $loop = new WP_Query( array( 'post_type' => 'epo_feature',
          'orderby' => 'post_id', 'order' => 'ASC') );
          ?>

          <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

          <div class="col-lg-2"><img src="/assets/img/<?php the_field('epo_feature_icon'); ?>" alt="" class="client-image img-fluid"><p class="text-center"><?php the_title(); ?></p></div>

          <?php endwhile; wp_reset_query(); ?>

            <!-- <div class="col-lg-2"><img src="/assets/img/client-1.svg" alt="" class="client-image img-fluid"><p class="text-center">some text</p></div>
            <div class="col-lg-2"><img src="/assets/img/client-2.svg" alt="" class="client-image img-fluid"><p class="text-center">some text</p></div>
            <div class="col-lg-2"><img src="/assets/img/client-3.svg" alt="" class="client-image img-fluid"><p class="text-center">some text</p></div>
            <div class="col-lg-2"><img src="/assets/img/client-4.svg" alt="" class="client-image img-fluid"><p class="text-center">some text</p></div>
            <div class="col-lg-2"><img src="/assets/img/client-5.svg" alt="" class="client-image img-fluid"><p class="text-center">some text</p></div>
            <div class="col-lg-2"><img src="/assets/img/client-6.svg" alt="" class="client-image img-fluid"><p class="text-center">some text</p></div> -->

          </div>
        </div>
      </div>
    </section>

        <!-- ******************** BLOG POSTS / TIEDOTTEITA ******************* -->
        <section class="blogposts grey-bg">
      <div class="container">
        <div class="text-center mt-5">
          <h2>Ajankohtaista</h2>
          <div class="row">

          <?php
          $the_query = new WP_Query( 'posts_per_page_3' );
          ?>

          <?php 
          while ($the_query -> have_posts()) : $the_query -> the_post();
          ?>

            <div class="col-lg-4">
              <div class="box text-center">
                <div class="thumbnail-blogpost align-items-end"><?php the_post_thumbnail('thumbnail'); ?>
                </div>
                <h3 class="h4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="text-small font-weight-light"><?php the_excerpt(__('(more…)')) ?>
                </p>
              </div>
            </div>

          <?php endwhile; wp_reset_query(); ?>

<!--             <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/target.svg" alt="..." class="img-fluid">
                </div>
                <h3 class="h4">Print</h3>
                <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/chat.svg" alt="..." class="img-fluid">
                </div>
                <h3 class="h4">SEO and SEM</h3>
                <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.
                </p>
              </div>
            </div> -->

          </div>
        </div>
    </section>

        <!-- ******************** SOCIAL MEDIA / FACEBOOK AND INSTAGRAM ******************* -->
        <section class="social-media">
          <div class="container">
            <div class="text-center mt-5">
              <div class="row">
                <div class="col-lg-6">
                  <h2>Facebook</h2>
                  <div class="box text-center">
                    <div class="icon d-flex align-items-end"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/monitor.svg" alt="..." class="img-fluid">
                    </div>
                    <h3 class="h4">Web desgin</h3>
                    <p class="text-small font-weight-light">Pellentesque sed leo facilisis, eleifend justo sit amet, pellentesque sapien.
                    </p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <h2>Instagram</h2>
                  <div class="box text-center">
                    <div class="icon d-flex align-items-end"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/target.svg" alt="..." class="img-fluid">
                    </div>
                    <h3 class="h4">Print</h3>
                    <p class="text-small font-weight-light">Pellentesque sed leo facilisis, eleifend justo sit amet, pellentesque sapien.
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </section>

	</main><!-- #main -->

<?php
get_footer();
?>