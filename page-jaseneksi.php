<?php
/**
 * Template Name: Jaseneksi
 * 
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package EPO_website
 */

//Advanced Custom Fields

get_header();
?> 

<main id="primary" class="site-main">
        <!-- Hero Section-->
        <section class="hero">
            <div class="container text-center">
                <!-- breadcrumb-->
                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html" class="animsition-link">Home</a></li>
                        <li aria-current="page" class="breadcrumb-item active">FAQ </li>
                    </ol>
                </nav>
                <h1 class="hero-heading">Frequently asked questions</h1>
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
        </section>

   <!-- Contact Section-->
   <section>
    <div class="container">
      <header class="section-header">
        <h2 class="mb-2">Fill out the form</h2>
        <p class="lead">Please submit your information and we will follow up with you as soon as possible.</p>
      </header>
      <div class="row align-items-center mt-5">
        <div class="col-lg-7">
          <form action="#" class="contact-form text-left">
            <div class="form-group mb-4">
              <label>Name<sup class="text-primary">&#10033;</sup></label>
              <input type="text" name="name" placeholder="e.g. John Smith" class="form-control">
            </div>
            <div class="form-group mb-4">
              <label>Company Email<sup class="text-primary">&#10033;</sup></label>
              <input type="text" name="email" placeholder="name@company.com" class="form-control">
            </div>
            <div class="form-group mb-4">
              <label>Subject<sup class="text-primary">&#10033;</sup></label>
              <input type="text" name="subject" placeholder="Briefly describe your question" class="form-control">
            </div>
            <div class="form-group mb-4">
              <label>Now let's hear the details<sup class="text-primary">&#10033;</sup></label>
              <textarea name="message" placeholder="Let us know what you need" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send message" class="btn btn-primary">
            </div>
          </form>
        </div>
        <div class="col-lg-5 contact-details mt-5 mt-lg-0">
          <div class="box">
            <div class="icon d-flex align-items-end"><img src="img/placeholder.svg" alt="" class="img-fluid"></div>
            <h5>Address</h5>
            <p class="text-small font-weight-light">13/25 New Avenue, New Heaven, 45Y 73J, England, Great Britain</p>
          </div>
          <div class="box">
            <div class="icon d-flex align-items-end"><img src="img/technology.svg" alt="" class="img-fluid"></div>
            <h5>Call center</h5>
            <p class="text-small font-weight-light">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communicatio</p><strong class="text-muted">+33 555 444 333</strong>
          </div>
          <div class="box">
            <div class="icon d-flex align-items-end"><img src="img/multimedia.svg" alt="" class="img-fluid"></div>
            <h5>Electronic support</h5>
            <p class="text-small font-weight-light">Please feel free to write an email to us or to use our electronic ticketing system.</p>
            <ul class="text-left">
              <li><a href="mailto:info@fakeemail.com" class="text-small">info@fakeemail.com</a></li>
              <li><a href="#" class="text-small">Ticketio - our ticketing support platform </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  
</main><!-- #main -->

<?php
get_footer();
?>