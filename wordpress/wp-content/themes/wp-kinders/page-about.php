<?php /* Template Name: About us */ get_header(); ?>
    </header>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section <?php post_class(); ?> >
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
          </div><!-- end section-body -->
        </div>
      </div><!-- end container -->
    </section><!-- end section.<?php post_class(); ?> -->


  <?php if( have_rows('advantages') ): ?>
      <section class="advantages">
        <div class="container">
          <div class="row">
            <?php while ( have_rows('advantages') ) : the_row(); ?>

              <div class="advantages-block">
                <div class="advantages-block__img">
                  <?php $image = get_sub_field('img');
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </div>
                <div class="advantages-block__text">
                  <h4><?php the_sub_field('title'); ?></h4>
                  <p><?php the_sub_field('text'); ?></p>
                </div>
              </div><!-- end advantages-block -->
            <?php  endwhile; ?>
            <div class="clearfix"></div>
          </div>
        </div>
      </section><!-- end section.advantages -->
  <?php endif; ?>

  <?php if( have_rows('press') ): ?>
    <section class="press">
      <div class="container">
        <div class="row">
          <div class="block-tittle block-tittle--lg">
            <h2>ПРЕССА О НАС
              <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
            </h2>
          </div><!-- end block-tittle -->

          <div class="section-body">
            <div class="press-slider">

              <?php while ( have_rows('press') ) : the_row(); ?>

                <div class="press-block-wrap">
                  <div class="press-block">
                    <a href="<?php the_sub_field('link'); ?>">
                      <div class="press-block__img">
                        <?php $image = get_sub_field('img');
                        if( !empty($image) ): ?>
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                      </div>
                      <p class="press-block__text lato-i"><i class="ic ic-quotes"></i>
                        <?php the_sub_field('text'); ?>
                      <i class="ic ic-quotes ic-quotes--rotate"></i></p>
                      <div class="press-block__bot">
                        <span>
                          <?php the_sub_field('title'); ?>
                        </span>
                        <span class="right">
                          <?php the_sub_field('data'); ?>
                        </span>
                      </div>
                    </a>
                  </div><!-- end press-block -->
                </div><!-- end press-block-wrap -->

              <?php  endwhile; ?>

            </div>
          </div><!-- end section-body -->
        </div>
      </div>
    </section><!-- end section.press -->
  <?php endif; ?>


  <?php if( have_rows('review', 205) ): ?>
    <section class="comments">
      <div class="container">
        <div class="row">
          <div class="block-tittle block-tittle--lg">
            <h2>ОТЗЫВЫ
              <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
            </h2>
          </div><!-- end block-tittle -->

          <div class="section-body">
            <div class="comments-slider">

              <?php while ( have_rows('review', 205) ) : the_row(); ?>

                <div class="comments-slider__block">
                  <div class="comments-slider__top">
                    <div class="comments-slider__name-wrap">
                      <div class="comments-slider__name">
                        <h1><?php the_sub_field('name'); ?></h1>
                        <p><?php the_sub_field('pearent'); ?></p>
                      </div>
                    </div>
                    <div class="comments-slider__img-wrap">
                      <div class="comments-slider__img">
                        <?php $image = get_sub_field('img');
                        if( !empty($image) ): ?>
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                      </div>
                    </div>

                    <?php if (has_sub_field('progs')) { ?>
                      <div class="comments-slider__progress-wrap">
                        <div class="comments-slider__progress">
                          <h3>Пройденные программы:</h3>

                          <?php while(has_sub_field('progs')): ?>
                            <p><i class="ic ic-apply"></i><?php the_sub_field('progs_title'); ?></p>
                          <?php endwhile; ?>

                        </div>
                      </div>
                    <?php } ?>

                    <div class="clearfix"></div>
                  </div>
                  <!-- end comments-slider__top -->
                  <div class="comments-slider__text lato-i">
                    <i class="ic ic-grey_quotes"></i>
                    <p><?php the_sub_field('text'); ?></p>
                    <i class="ic ic-grey_quotes rotate"></i>
                  </div><!-- end comments-slider__text -->
                </div><!-- end comments-slider__block -->

              <?php  endwhile; ?>

            </div><!-- end comments-slider -->
          </div><!-- end section-body -->
        </div>
      </div>
    </section><!-- end section.comments -->
  <?php endif; ?>


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

<?php get_footer(); ?>
