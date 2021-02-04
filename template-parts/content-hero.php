<?php 
//Custom Fields 
//(id pulled from, name, single item or not)
$prelaunch_price        = get_post_meta( 14, 'prelaunch_price', true );
$toiminta_url           = get_post_meta( 14, 'toiminta_url', true );
$hero_button_text       = get_post_meta( 14, 'hero_button_text', true );
//use echo -> echo $prelaunch_price 
?>

    <!-- ========================== HERO ============================= -->

    <section class="hero bg-gray">
      <div class="container mb-5">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h1 class="hero-heading mb-0"><?php bloginfo('name');?></h1>
            <div class="row">
              <div class="col-lg-10">
                <p class="lead text-muted mt-4 mb-4"><?php bloginfo('description');?></p>
              </div>
            </div>

            <a href="<?php echo $toiminta_url; ?>" class="btn btn-primary homebtn"><?php echo $hero_button_text; ?></a>

          </div>
          <div class="col-lg-6"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/salmiakki2.png" alt="..."
              class="hero-image img-fluid d-none d-lg-block"></div>
        </div>
      </div>
    </section>