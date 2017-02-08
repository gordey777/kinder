<section class="studios">
  <div class="container">
    <div class="row">
      <div class="section-tittle">
        <h1><?php if( is_category() )
                  echo get_queried_object()->name; ?>
              <div class="section-tittle__decoration"><span></span></div>
              <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
            </h1>
      </div><!-- end section-tittle -->

      <div class="section-body">

        <div class="col-xs-12 col-md-3 studios-nav-wrap">
          <div class="studios-nav">
            <div class="studios-nav--inner">
              <h3 class="studios-nav__tittle">ВСЕ СТУДИИ</h3>
              <div class="studios-nav__block">
                <h3>СТУДИИ ДЛЯ САДА:</h3>
                  <?php wpeKGNav() ?>


              </div>
              <!-- end studios-nav__block -->
              <div class="studios-nav__block">
                <h3>СТУДИИ ДЛЯ ШКОЛЫ:</h3>
                <?php wpeSchoolNav() ?>
              </div><!-- end studios-nav__block -->
            </div>
          </div>
        </div><!-- end studios-nav-wrap -->

        <div class="col-xs-12 col-md-9 studios-main-wrap">
          <div class="studios-main">

              <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <?php

                if( get_field('free') ) {
                  $btn_class = 'btn-yellow';
                  $btn_text = "ПО ЖЕЛАНИЮ";
                  }  else {
                  $btn_class = 'btn-yellow';
                  $btn_text = "БЕСПЛАТНО";

                  }?>

                <div class="studios-main__block">
                  <div class="col-sm-3 studios-main__img-wrap">
                    <div class="studios-main__descr-top studios-main__descr-top--img">
                      <h1><?php the_title(); ?></h1>

                      <a href="<?php echo get_permalink(); ?>" class="btn btn-yellow"><?php echo $btn_text; ?></a>
                    </div>
                    <div class="studios-main__img">
                      <?php if ( has_post_thumbnail()) :
                        the_post_thumbnail('medium');
                      else: ?>
                        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                      <?php endif; ?>
                    </div>
                  </div><!-- end studios-main__img-wrap -->

                  <div class="col-sm-9 studios-main__descr-wrap">
                    <div class="studios-main__descr">
                      <div class="studios-main__descr-top">
                        <h1><?php the_title(); ?></h1>
                        <a href="<?php echo get_permalink(); ?>" class="btn btn-yellow"><?php echo $btn_text; ?></a>
                      </div>
                      <p class="studios-main__descr-text lato-i"><?php wpeExcerpt('wpeExcerpt40'); ?></p>
                      <div class="studios-main__descr-bot">
                        <span><i class="ic ic-butterfly"></i><?php the_field('age'); ?></span>
                        <span><i class="ic ic-bell"></i><?php the_field('sessions'); ?></span>
                        <span><i class="ic ic-school_bell"></i><?php the_field('duration'); ?></span>
                      </div>
                    </div>
                  </div><!-- end studios-main__descr-wrap -->
                  <div class="clearfix"></div>
                </div><!-- end studios-main__block -->

              <?php endwhile; else: ?>
                <div>

                  <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

                </div><!-- /article -->
              <?php endif; ?>

              <?php get_template_part('pagination'); ?>

          </div>
        </div><!-- end studios-main-wrap -->
        <div class="clearfix"></div>
      </div><!-- end section-body -->
    </div>
  </div>
</section><!-- end section.studios -->






