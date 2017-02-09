<?php /* Template Name: Contacts */ get_header(); ?>
    </header>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section <?php post_class(); ?>>
      <div class="container">
        <div class="row">
          <?php edit_post_link(); ?>
          <div class="section-tittle">
            <h1><?php the_title(); ?>
              <div class="section-tittle__decoration"><span></span></div>
              <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
            </h1>
          </div><!-- end section-tittle -->
        </div>
      </div><!-- end container -->

      <div id="map"></div>
      <div class="container">
        <div class="row">
          <div class="section-boby">
            <div class="col-md-5 contacts-left-wrap">
              <div class="contacts-left">
                <?php the_content(); ?>
              </div>
            </div><!-- end contacts-left-wrap -->

            <div class="col-md-7 contacts-right-wrap">
              <div class="contacts-right">
                <div class="block-tittle block-tittle--lg">
                  <h2>ОСТАВИТЬ СООБЩЕНИЕ</h2>
                  <div class="section-tittle__decoration section-tittle__decoration--right"></div>
                </div><!-- end block-tittle -->

                <div class="contacts-form"><?php echo do_shortcode( ' [contact-form-7 id="125" title="ОСТАВИТЬ СООБЩЕНИЕ"] ' ); ?></div>
              </div>
            </div><!-- end contacts-right-wrap -->

            <div class="clearfix"></div>
          </div><!-- end section-boby -->

        </div>
      </div>

    </section><!-- end section.<?php post_class(); ?> -->


  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>
  <?php endif; ?>

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
