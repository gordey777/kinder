<?php /* Template Name: Partners */ get_header(); ?>
    </header>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    </header>
    <section <?php post_class(); ?>>
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

          <?php if( have_rows('partners') ): ?>

            <?php while ( have_rows('partners') ) : the_row(); ?>
              <div class="col-sm-3 col-md-3 mb-30">
                <a class="partner-link" href="<?php the_sub_field('link'); ?>">
                  <?php $image = get_sub_field('img');
                    if( !empty($image) ): ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </a>
                <p class="part-p">
                  <?php the_sub_field('text'); ?>
                </p>
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

<?php get_footer(); ?>
