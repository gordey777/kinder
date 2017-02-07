  <?php get_header(); ?>
    </header>
  <?php //Если в категории САД или ШКОЛА
  if ( in_category( array( '19', '18' ) ) || post_is_in_descendant_category( array( '19', '18' ) ) ) {
      include 'single-school.php';
  }
  else { ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section class="<?php post_class(); ?>">
      <div class="container">
      <?php edit_post_link(); ?>
        <div class="row">
          <div class="section-tittle">
            <h1><?php the_title(); ?>
              <div class="section-tittle__decoration"><span></span></div>
              <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
            </h1>
          </div><!-- end section-tittle -->
        </div>
      </div><!-- end container -->

      <div class="container">
        <div class="row">
          <?php if ( in_category( 4 ) || post_is_in_descendant_category( 4 ) ) { //Если в рубрике Галерея

            $images = get_field('gallery');

            if( $images ): ?>

                    <?php foreach( $images as $image ): ?>
                      <div class="col-sm-3 col-md-3 mb-30">
                            <a class="simple-img" href="<?php echo $image['url']; ?>" data-toggle="lightbox" data-gallery="example-gallery" tabindex="0">
                                 <img class="img-fluid" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                            <p><?php echo $image['caption']; ?></p>
                      </div>
                    <?php endforeach; ?>

            <?php endif;

          }
          else { ?>

            <div class="col-md-12 mb-30">
              <?php if ( has_post_thumbnail()) :
                the_post_thumbnail('large');
              else: ?>

              <?php endif; ?>
            </div>
          <?php } ?>
          <?php the_content(); ?>

        </div>
      </div>

    </section><!-- end section.<?php post_class(); ?> -->



  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>
  <?php endif; ?>


  <?php } ?>



    <footer>
      <section class="subscribe">
        <div class="container">
          <div class="row">
            <div class="col-md-6 subscribe__block subscribe__block--tittle">
              <h1>Подпишитесь на новости</h1>
              <p>Чтобы регулярно получать свежую информацию</p>
              <div class="subscribe__arrows">
                <div class="subscribe__arrows-inner">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
            <!-- end subscribe__block -->
            <div class="col-md-6 subscribe__block">
              <div class="subscribe-form">
              <?php echo do_shortcode( ' [contact-form-7 id="122" title="Подпишитесь на новости"] ' ); ?>

              </div>
            </div>
            <!-- end subscribe__block -->
            <div class="clearfix"></div>
          </div>
        </div>
      </section><!-- end section.subscribe -->
  <?php get_footer(); ?>

