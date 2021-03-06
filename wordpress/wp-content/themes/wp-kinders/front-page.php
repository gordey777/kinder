<?php /* Template Name: Front Page */ get_header(); ?>

      <?php if( have_rows('interests', 5 ) ): ?>
        <div class="h-body">
          <img src="<?php echo get_template_directory_uri(); ?>/img/bg-main.jpg" alt="main">

          <?php $i = 1; ?>
          <?php while ( have_rows('interests', 5 ) ) : the_row(); ?>
            <div class="h-body__block h-body__block-<?php echo $i; ?>">
              <div class="h-body__icon">
                <i class="ic ic-plus"></i>
                <div class="h-body__descr">
                  <div class="h-body__descr-inner">
                    <h3><?php the_sub_field('title'); ?></h3>
                    <p class="lato-i"><?php the_sub_field('text'); ?></p>
                    <a href="<?php the_sub_field('link'); ?>">подробнее</a>
                  </div>
                </div>
              </div><!-- end h-body__icon -->
            </div><!-- end h-body__block -->
            <?php $i++; ?>
          <?php  endwhile; ?>
        </div><!-- end h-body -->
      <?php endif; ?>

    </header>

    <?php if( have_rows('direction', 5 ) ): ?>

    <!-- BOOTSTRAP MODAL -->
    <div id="enrollModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!-- Заголовок модального окна -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">ЗАПИСАТЬСЯ СЕЙЧАС</h4>
          </div>
          <!-- Основное содержимое модального окна -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">

                <?php echo do_shortcode( '[contact-form-7 id="466" title="ЗАПИСАТЬСЯ СЕЙЧАС"]' ); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      <section class="directions">
        <div class="container">
          <div class="row">
            <div class="section-tittle">
              <h1>НАШИ НАПРАВЛЕНИЯ
                <div class="section-tittle__decoration"><span></span></div>
                <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
              </h1>
            </div><!-- end section-tittle -->
            <div class="section-body section-body--directions">
              <?php $i = 1;  ?>
              <?php while ( have_rows('direction', 5 ) ) : the_row(); ?>
              <?php if ($i == 1){
                $color_block = 'blue';
                } elseif ($i == 2){
                $color_block = 'green';
                } elseif ($i ==3){
                $color_block = 'lilac';
                } ?>
                <div class="col-sm-4 directions__block-wrap">
                  <div class="directions__block directions__block--<?php echo $color_block; ?>">
                    <div class="directions__block-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/directions-img<?php echo $i; ?>.jpg" alt="directions">
                    </div>
                      <div class="directions__block-descr">
                        <div class="directions__block-tittle">
                          <h1><?php the_sub_field('title'); ?></h1>
                          <span><?php the_sub_field('age'); ?></span>
                        </div>
                        <p class="directions__block-text lato-i">
                          <?php the_sub_field('text'); ?>
                        </p>
                        <ul class="directions__block-list">

                          <?php while(has_sub_field('links')): ?>

                            <li>
                              <a href="<?php the_sub_field('sub_link'); ?>" class="link">
                                <?php the_sub_field('sub_title'); ?>
                              </a>
                            </li>

                          <?php endwhile; ?>

                        </ul>

                        <a id="enroll_modal_button" href="#enrollModal" data-toggle="modal" class="btn btn-solid directions__block-btn">
                          ЗАПИСАТЬСЯ СЕЙЧАС
                        </a>

                    </div>
                  </div>
                </div><!-- end directions__block-wrap -->
                <?php $i++; ?>
              <?php  endwhile; ?>

              <div class="clearfix"></div>
            </div><!-- end section-body -->
          </div>
        </div>
      </section><!-- end section.directions -->
    <?php endif; ?>

    <section class="metods">
      <div class="container">
        <div class="row">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <?php edit_post_link(); ?>

            <?php the_content(); ?>

          <?php endwhile; else: // If 404 page error ?>
            <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
          <?php endif; ?>

        </div>
      </div>
    </section><!-- end section.metods -->


    <?php if( have_rows('educator', 5 ) ): ?>

      <section class="teachers">
        <div class="container">
          <div class="row">
            <div class="section-tittle">
              <h1>НАШИ ВОСПИТАТЕЛИ
                <div class="section-tittle__decoration"><span></span></div>
                <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
              </h1>
            </div>
            <!-- end section-tittle -->
            <div class="teachers-body">
              <div class="col-md-8 teachers-slider-nav-wrap">
                <div class="teachers-slider-nav">

                  <?php while ( have_rows('educator', 5 ) ) : the_row(); ?>

                    <div class="teachers-slider-nav__block <?php the_sub_field('color'); ?>">
                      <div class="teachers-slider-nav__img">

                      <?php $image = get_sub_field('img');
                        if( !empty($image) ): ?>
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                      </div>
                      <h3 class="teachers-slider-nav__name"><?php the_sub_field('name'); ?></h3>
                    </div><!-- end teachers-slider-nav__block -->

                  <?php  endwhile; ?>

                </div>
              </div><!-- end teachers-slider-nav-wrap -->

              <div class="col-md-4 teachers-slider-wrap">
                <div class="teachers-slider">

                  <?php while ( have_rows('educator', 5 ) ) : the_row(); ?>

                    <div class="teachers-slider__block <?php the_sub_field('color'); ?>">
                      <h1><?php the_sub_field('name'); ?></h1>
                      <h5><?php the_sub_field('specialty'); ?></h5>
                      <p class="lato-i"><?php the_sub_field('info'); ?></p>
                    </div><!-- end teachers-slider__block -->

                  <?php  endwhile; ?>

                </div><!-- end teachers-slider -->
              </div><!-- end teachers-slider-wrap -->
              <div class="clearfix"></div>
            </div><!-- end teachers-body -->
          </div>
        </div>
      </section><!-- end section.teachers -->
    <?php endif; ?>

    <section class="news">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-7 news-block-wrap">
            <div class="news-block">
              <div class="block-tittle">
                <h2>Наши новости
                  <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
                </h2>
              </div><!-- end block-tittle -->

              <?php $posts = get_posts ("category=3&orderby=date&numberposts=10&post_status=publish"); ?>
              <?php if ($posts) : ?>
                <div class="news-slider">
                  <?php foreach ($posts as $post) : setup_postdata ($post); ?>

                     <div class="news-slider__block">
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
                    </div><!-- end news-slider__block -->
                  <?php
                    endforeach;
                    wp_reset_postdata();
                  ?>
                </div><!-- end news-slider -->
              <?php endif; ?>

            </div>
          </div><!-- end news-wrap -->
          <div class="col-sm-6 col-md-5 news-socials-wrap">
            <div class="news-socials">
              <div class="block-tittle">
                <h2>Мы в соц.сетях
                  <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
                </h2>
              </div><!-- end block-tittle -->
              <div class="news-socials__buttons">
                <a href="#" class="news-socials__fb">
                  <i class="ic ic-fb"></i>
                  <span>Facebook</span>
                  <span>4500+ подписчиков</span>
                </a>
                <a href="#" class="news-socials__vk">
                  <i class="ic ic-vk"></i>
                  <span>Вконтакте</span>
                  <span>3400+ подписчиков</span>
                </a>
                <a href="#" class="news-socials__in">
                  <i class="ic ic-in"></i>
                  <span>Instagram</span>
                  <span>1800+ подписчиков</span>
                </a>
              </div>
              <!-- end news-socials__buttons -->
            </div>
          </div>
          <!-- end news-socials-wrap -->
          <div class="clearfix"></div>
        </div>
      </div>
    </section><!-- end section.news -->

    <footer>

<?php get_footer(); ?>
