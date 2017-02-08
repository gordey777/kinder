
      <section class="f-top">
        <div class="container">
          <div class="row">


            <?php if( have_rows('parent_club_footer', 5 ) ): ?>
              <div class="col-md-4 f-top__block f-top__block--parents">
                <h2>Родительский клуб</h2>
                <div class="f-top__parents">
                  <div class="f-top__parents-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/parents-img.jpg" alt="parents">
                  </div>

                  <?php while ( have_rows('parent_club_footer', 5 ) ) : the_row(); ?>
                    <div class="f-top__parents-text">
                      <h3><?php the_sub_field('title'); ?></h3>
                      <p class="lato-i"><?php the_sub_field('text'); ?></p>
                      <a href="<?php the_sub_field('link'); ?>" class="btn btn-contur">подробнее</a>
                    </div>
                  <?php  endwhile; ?>

                  <div class="clearfix"></div>
                </div>
              </div><!-- end f-top__block -->
            <?php endif; ?>

            <div class="col-sm-6 col-md-5 f-top__block f-top__block--gallery">
              <h2>Фотогалерея</h2>
              <a href="<?php echo get_category_link(4); //ID Категории Фотогалерея ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/f-img2.jpg" alt="img2"></a>
            </div><!-- end f-top__block -->


            <?php if( have_rows('question', 5 ) ): ?>

              <div class="col-sm-6 col-md-3 f-top__block f-top__block--question">
                <h2>Вопрос-ответ</h2>
                <div class="question-slider-wrap">
                  <i class="ic ic-star"></i>
                  <div class="question-slider">

                    <?php while ( have_rows('question', 5 ) ) : the_row(); ?>
                      <div class="question-slider__block">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <p class="lato-i"><?php the_sub_field('text'); ?></p>
                      </div><!-- end question-slider__block -->

                    <?php  endwhile; ?>

                  </div><!-- end question-slider -->
                </div><!-- end question-slider-wrap -->
              </div><!-- end f-top__block -->
            <?php endif; ?>

            <div class="clearfix"></div>
          </div>
        </div>
      </section><!-- end f-top -->

<!-- БЛОК ПАРТНЕРЫ -->
      <?php if( have_rows('partners', 5 ) ): ?>
          <section class="partners">
            <div class="container">
              <div class="row">
                <div class="block-tittle">
                  <h2>Наши партнеры
                    <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
                  </h2>
                </div><!-- end block-tittle -->

                  <div class="partners-slider">


                    <?php while ( have_rows('partners', 5 ) ) : the_row(); ?>

                      <div class="partners-slider__block">
                        <a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('title'); ?>">
                          <?php $image = get_sub_field('img');
                          if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                          <?php endif; ?>
                        </a>
                      </div><!-- end partners-slider__block -->

                    <?php  endwhile; ?>


                  </div><!-- end partners__slider -->
              </div>
            </div>
          </section><!-- end section.partners -->
        <?php endif; ?>


      <div class="f-bot">
        <div class="container">
          <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-2 f-bot__copyright">
              <p>&copy; <?php echo date("Y"); ?><?php bloginfo('name'); ?>.</p>
            </div>
            <div class="col-xs-6 col-sm-8 col-md-5 f-bot__menu">
              <?php wpeFootNav() ?>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 f-bot__info">
              <div class="f-bot__block">
                <p><i class="ic ic-cubes"></i><a href="<?php the_field('sitemap_link'); ?>">Карта сайта</a></p>
              </div>
              <div class="f-bot__block">
                <p><i class="ic ic-school_bell"></i><span>ПН-ВС: 08.00-21.00</span></p>
              </div>
              <div class="f-bot__block-socials">
                <a href="#"><i class="ic ic-in"></i></a>
                <a href="#"><i class="ic ic-vk"></i></a>
                <a href="#"><i class="ic ic-fb"></i></a>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <?php wp_footer(); ?>



  <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/ekko-lightbox.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<!--   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->
</body>
</html>







