<?php /* Template Name: Reviews */ get_header(); ?>
    </header>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    </header>
    <section class="<?php post_class(); ?>">
      <div class="container">
        <div class="row">
          <div class="section-tittle">
            <h1><?php the_title(); ?>
              <div class="section-tittle__decoration"><span></span></div>
              <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
            </h1>
          </div><!-- end section-tittle -->
          <div class="col-md-12">
            <?php edit_post_link(); ?>
            <?php the_content(); ?>
          </div>

          <?php if( have_rows('review') ): ?>

            <?php while ( have_rows('review') ) : the_row(); ?>

              <?php //while(has_sub_field('links')): ?>
                    <?php //the_sub_field('sub_title'); ?>
              <?php //endwhile; ?>

              <div class="col-sm-12 col-md-6 mb-30 ">
                <div class="bg-rev">
                  <div class="col-sm-4 col-md-4">
                    <?php $image = get_sub_field('img');
                    if( !empty($image) ): ?>
                      <img class="rev-men" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <img class="rev-icon" src="/img/play-icon.png" alt="">
                  </div>
                  <div class="col-sm-8 col-md-8">
                    <div class="text-rev">
                      <p>"<?php the_sub_field('text'); ?>"</p>
                      <p class="autor-rev">
                        <?php the_sub_field('name'); ?>, <?php the_sub_field('pearent'); ?>
                      </p>
                      <a href="<?php the_sub_field('link'); ?>" class="link-fb">
                        Читать этот отзыв на Facebook
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            <?php  endwhile; ?>

          <?php endif; ?>
        </div>
      </div><!-- end container -->



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
