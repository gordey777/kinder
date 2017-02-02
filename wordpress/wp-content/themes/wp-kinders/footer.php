
    <footer>
      <section class="f-top">
        <div class="container">
          <div class="row">
            <div class="col-md-4 f-top__block f-top__block--parents">
              <h2>Родительский клуб</h2>
              <div class="f-top__parents">
                <div class="f-top__parents-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/parents-img.jpg" alt="parents">
                </div>
                <div class="f-top__parents-text">
                  <h3>Хотите быть в курсе?</h3>
                  <p class="lato-i">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adip iscing elit psum dolor sit amet. Aenean consectetur fringilla mi in mollis. Etiam </p>
                  <a href="#" class="btn btn-contur">подробнее</a>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <!-- end f-top__block -->
            <div class="col-sm-6 col-md-5 f-top__block f-top__block--gallery">
              <h2>Фотогалерея</h2>
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/f-img2.jpg" alt="img2"></a>
            </div>
            <!-- end f-top__block -->
            <div class="col-sm-6 col-md-3 f-top__block f-top__block--question">
              <h2>Вопрос-ответ</h2>
              <div class="question-slider-wrap">
                <i class="ic ic-star"></i>
                <div class="question-slider">
                  <div class="question-slider__block">
                    <h3>Есть возможность ли взять незапланированные каникулы?</h3>
                    <p class="lato-i">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adip iscing elit psum dolor sit amet. Aenean consectetur fringilla mi in mollis. Etiam eleifend sollicitudin dignissim.</p>
                  </div>
                  <!-- end question-slider__block -->
                  <div class="question-slider__block">
                    <h3>Lorem ipsum dolor sit.</h3>
                    <p class="lato-i">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adip iscing elit psum dolor sit amet. Aenean consectetur fringilla mi in mollis. Etiam eleifend sollicitudin dignissim.</p>
                  </div>
                  <!-- end question-slider__block -->
                  <div class="question-slider__block">
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <p class="lato-i">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adip iscing elit psum dolor sit amet. Aenean consectetur fringilla mi in mollis. Etiam eleifend sollicitudin dignissim.</p>
                  </div>
                  <!-- end question-slider__block -->
                </div>
                <!-- end question-slider -->
              </div>
              <!-- end question-slider-wrap -->
            </div>
            <!-- end f-top__block -->
            <div class="clearfix"></div>
          </div>
        </div>
      </section>
      <!-- end f-top -->
      <section class="partners">
        <div class="container">
          <div class="row">
            <div class="block-tittle">
              <h2>Наши партнеры
                <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
              </h2>
            </div>
            <!-- end block-tittle -->
              <div class="partners-slider">
            <?php if( have_rows('partners' ) ): ?>

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

            <?php endif; ?>
              </div><!-- end partners__slider -->
          </div>
        </div>
      </section>
      <!-- end section.partners -->
      <div class="f-bot">
        <div class="container">
          <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-2 f-bot__copyright">
              <p>&copy; <?php echo date("Y"); ?><?php bloginfo('name'); ?>.</p>
            </div>
            <div class="col-xs-6 col-sm-8 col-md-5 f-bot__menu">
              <ul>
                <li><a href="#">О наc</a></li>
                <li><a href="#">Сад</a></li>
                <li><a href="#">Школа</a></li>
                <li><a href="#">Студии по интересам</a></li>
                <li><a href="#">Родительский клуб</a></li>
                <li><a href="#">Контакты</a></li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 f-bot__info">
              <div class="f-bot__block">
                <p><i class="ic ic-cubes"></i><a href="#">Карта сайта</a></p>
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
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>







