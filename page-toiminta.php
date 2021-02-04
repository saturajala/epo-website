<?php
/**
 * Template Name: Toiminta
 * 
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package EPO_website
 */

//Advanced Custom Fields
$toiminta_infoteksti        = get_field('toiminta_infoteksti');
$toiminta_tekstiosio        = get_field('toiminta_tekstiosio');

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
          <?php if( !empty($toiminta_infoteksti) ) : ?> 
            <div class="row">
                <div class="col-lg-8 mx-auto">
                  <p class="lead text-muted"><?php echo $toiminta_infoteksti; ?></p>
                </div>
              </div>
          <?php endif; ?>

            </div>
          </section>

<!--           <section>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <p class="lead text-muted mb-5"><strong>Pellentesque habitant </strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae </code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.  <a href="#">Donec non enim  </a> in turpis pulvinar facilisis. Ut felis.</p>
                  <h2 class="mb-3">Header Level 2</h2>
                  <ol class="mb-5 text-left"> 
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    <li>Aliquam tincidunt mauris eu risus.</li>
                  </ol>
                  <blockquote class="blockquote mb-5 text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</blockquote>
                  <h3 class="mb-5">Header Level 3</h3>
                  <p class="mb-5">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                  <ul class="mb-4 text-left">
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    <li>Aliquam tincidunt mauris eu risus.</li>
                  </ul>
                  <p><img src="img/blog1.jpg" alt="..." class="img-fluid"></p>
                  <p class="mt-5">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                </div>
              </div>
            </div>
          </section> -->

          <section>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">

                  <?php echo $toiminta_tekstiosio; ?>

                </div>
              </div>
            </div>
          </section>

	</main><!-- #main -->

<?php
get_footer();
?>