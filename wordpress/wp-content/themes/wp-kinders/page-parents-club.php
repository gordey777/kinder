<?php /* Template Name: Parents-Club */ get_header(); ?>
    </header>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section <?php post_class(); ?>>
      <div class="container">
        <div class="row parents-club">
          <?php edit_post_link(); ?>
          <div class="section-tittle">
            <h1><?php the_title(); ?>
              <div class="section-tittle__decoration"><span></span></div>
              <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
            </h1>
          </div><!-- end section-tittle -->
          <div class="section-body">
            <?php the_content(); ?>
            <div class="clearfix"></div>
          </div>
        </div>
      </div><!-- end container -->


    </section><!-- end section.<?php post_class(); ?> -->



  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>
  <?php endif; ?>


  <?php if( have_rows('events_calendar') ): ?>
    <section class="calendar">
      <div class="container">
        <div class="row">

          <div class="block-tittle block-tittle--lg">
            <h2>КАЛЕНДАРЬ СОБЫТИЙ
              <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
            </h2>
          </div><!-- end block-tittle -->

          <div class="section-body">
            <?php while ( have_rows('events_calendar') ) : the_row(); ?>

              <div class="calendar__month-wrap">
                <div class="calendar__month-tittle">
                  <h3 class="calendar__month"><?php the_sub_field('title'); ?></h3>
                </div>

                <?php while(has_sub_field('calendar_block')): ?>

                    <div class="col-sm-6 calendar__block">
                      <div class="calendar__block-inner">
                        <div class="calendar__date">
                          <span><?php the_sub_field('sub_day'); ?></span>
                          <p><?php the_sub_field('sub_month'); ?></p>
                        </div>
                        <div class="calendar__descr">
                          <h4 class="lato-i"><?php the_sub_field('sub_title'); ?></h4>
                          <p class="lato-i"><?php the_sub_field('sub_text'); ?></p>
                        </div>
                      </div><!-- end calendar__block-inner -->
                    </div><!-- end calendar__block -->

                  <?php endwhile; ?>

              </div><!-- end calendar__month-wrap -->

            <?php  endwhile; ?>
            <div class="clearfix"></div>
          </div><!-- end section-body -->
        </div>
      </div>
    </section><!-- end section.calendar -->

  <?php endif; ?>



<!-- Блок ПОЛЕЗНЫЕ СТАТЬИ -->
    <?php
     $args = array(
             'cat' => '7', //ID Рубрики
             'post_type' => 'post',
             'posts_per_page' => 6, //Количество постов в блоке ПОЛЕЗНЫЕ СТАТЬИ
             'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
             );
    query_posts($args); ?>

  <?php if ( have_posts() ) :  ?>
    <section class="helpful-articles">
      <div class="container">
        <div class="row">
          <div class="block-tittle block-tittle--lg">
            <h2>Полезные статьи
              <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
            </h2>
          </div><!-- end block-tittle -->
          <div class="section-body">

             <?php while ( have_posts() ) : the_post(); ?>

              <div class="col-sm-4 helpful-articles__block-wrap">
                <div class="helpful-articles__block">
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <div class="news-slider__block-img">
                      <?php if ( has_post_thumbnail()) :
                        the_post_thumbnail('medium');
                      else: ?>
                        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                      <?php endif; ?>
                    </div>
                    <div class="news-slider__block-date">
                      <span><?php the_time('j </span><p> F'); ?></p>
                    </div>
                    <div class="news-slider__block-text">
                      <h3><?php the_title(); ?></h3>
                      <p class="lato-i"><?php wpeExcerpt('wpeExcerpt40'); ?></p>
                    </div>
                  </a>
                </div>
              </div><!-- end helpful-articles__block-wrap -->

            <?php endwhile;  ?>

            <div class="clearfix"></div>

            <?php if (  $wp_query->max_num_pages > 1 ) : ?>

              <script>
                var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
              </script>
              <div class="row">
                <div class="btn-more-wrap">
                  <div id="true_loadmore"  class="btn btn-more">
                    <i class="ic ic-bee"></i>
                    ПОКАЗАТЬ БОЛЬШЕ
                    <i class="ic ic-bee"></i>
                  </div>
                </div>
              </div>
            <?php endif;
             wp_reset_query(); ?>

          </div><!-- end section-body -->
        </div>
      </div>
    </section><!-- end section.helpful-articles -->
  <?php endif; ?>

    </footer>

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
