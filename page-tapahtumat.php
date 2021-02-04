<?php
/**
 * Template Name: Tapahtumat
 * 
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package EPO_website
 */

//Advanced Custom Fields
$tapahtumat_infoteksti        = get_field('tapahtumat_infoteksti');
$tapahtumat_tekstiosio        = get_field('tapahtumat_tekstiosio');

$id_frontpage = get_option('page_on_front');

get_header();
?>

<main id="primary" class="site-main">

<!-- Hero Section-->
<section class="hero">
<div class="container text-center">
<nav aria-label="breadcrumb" class="d-flex justify-content-center">
  <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>" class="animsition-link"><?php echo get_the_title($id_frontpage); ?></a></li>
          <li aria-current="page" class="breadcrumb-item active"><?php echo get_the_title(); ?></li>
  </ol>
</nav>
<h1><?php echo get_the_title(); ?></h1>

<!-- if user added text -->
<?php if( !empty($tapahtumat_infoteksti) ) : ?> 
            <div class="row">
                <div class="col-lg-8 mx-auto">
                  <p class="lead text-muted"><?php echo $tapahtumat_infoteksti; ?></p>
                </div>
              </div>
          <?php endif; ?>

            </div>
          </section>

          <section>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">

                  <?php echo $tapahtumat_tekstiosio; ?>

                  <?php /* if ( get_field('tapahtumat_tekstiosio') ) {
        	          echo do_shortcode( get_field('tapahtumat_tekstiosio'));
                  }; */ ?>

                  <?php
                    /* echo do_shortcode('[smartslider3 slider="2"]'); */
                  ?>





                </div>
              </div>
            </div>
          </section>

</main><!-- #main -->

<?php
get_footer();
?>