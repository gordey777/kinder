<?php get_header(); ?>
    </header>

  <?php //Если в категории "Студии по интересах"
  if ( in_category( 8 ) || post_is_in_descendant_category( 8 ) ) {
      include 'category-studios.php';
  }
  //Если в категории САД или ШКОЛА
  elseif ( in_category( array( '19', '18' ) ) || post_is_in_descendant_category( array( '19', '18' ) ) ) {
      include 'category-school.php';
  }
  else { ?>

    <section class="open-gallery">
      <div class="container">
        <div class="row">
          <div class="section-tittle">
            <h1><?php if( is_category() )
                  echo get_queried_object()->name; ?>
              <div class="section-tittle__decoration"><span></span></div>
              <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
            </h1>
          </div><!-- end section-tittle -->

          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="col-sm-4 col-md-4 mb-30">
              <a class="simple-img list-img news-a" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <div class="gallery-relative">
                  <?php if ( has_post_thumbnail()) :
                    the_post_thumbnail('medium');
                  else: ?>
                    <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php endif; ?>
                  <span class="date-news"><?php the_time('j F Y'); ?></span>
                </div>
                <p class="title-news"><?php the_title(); ?></p>
                <?php wpeExcerpt('wpeExcerpt40'); ?>
              </a>
            </div>
          <?php endwhile; else: ?>
            <div>

              <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

            </div><!-- /article -->
          <?php endif; ?>
          <div style="clear: both;"></div>
          <?php get_template_part('pagination'); ?>

        </div>
      </div>
    </section>

  <?php } ?>


    <footer>
<?php get_footer(); ?>
