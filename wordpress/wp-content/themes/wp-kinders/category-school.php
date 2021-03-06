<?php get_header(); ?>
    </header>



    <section class="kindergarten">
      <div class="container">
        <div class="row">
          <div class="section-tittle">
            <h1><?php if( is_category() )
                  $cat1_name = get_queried_object()->name;
                  $cat1_id = get_queried_object()->term_id;
                  echo $cat1_name ?>
              <div class="section-tittle__decoration"><span></span></div>
              <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
            </h1>
          </div><!-- end section-tittle -->
        </div>
      </div>
    </section><!-- end section.kindergarten -->




    <section class="kindergarten-slider-nav--wrapper">
      <div class="container">
        <div class="row">
          <div class="kindergarten-slider-nav">

    <?php
     $args = array(
             'cat' => $cat1_id,
             'post_type' => 'post',
             'posts_per_page' => 99, //Количество постов в блоке ПОЛЕЗНЫЕ СТАТЬИ

             );
    query_posts($args); ?>

          <?php if (have_posts()): while (have_posts()) : the_post(); ?>


                  <div class="kindergarten-slider-nav__block">
                    <div class="kindergarten-slider-nav__img">
                      <?php $image = get_field('logo');

                      if( !empty($image) ): ?>

                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                      <?php endif; ?>
                    </div>
                    <h4 class="kindergarten-slider-nav__name lato-i"><?php the_title(); ?></h4>
                    <p class="kindergarten-slider-nav__old lato-i"><?php the_field('age'); ?></p>
                  </div><!-- end kindergarten-slider-nav__block -->

          <?php endwhile;  ?>
<?php wp_reset_query(); ?>
          <?php endif; ?>

          </div><!-- end kindergarten-slider-nav -->
        </div>
      </div>
    </section><!-- end kindergarten-slider-nav--wrapper -->


    <section class="kindergarten-slider--wrap">

          <div class="kindergarten-slider">
    <?php
     $args = array(
             'cat' => $cat1_id, //ID Рубрики
             'post_type' => 'post',
             'posts_per_page' => 99, //Количество постов в блоке ПОЛЕЗНЫЕ СТАТЬИ

             );
    query_posts($args); ?>

          <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <div class="kindergarten-slider__block">
      <div class="container">
        <div class="row">
            <?php if( have_rows('comand_group') ): ?>
              <div class="col-md-6 kindergarten-slider__block--left">

                <div class="tab-content">


                  <?php $i = 1; ?>
                  <?php while ( have_rows('comand_group') ) : the_row(); ?>
                    <?php $k = 1; ?>
                    <?php while(has_sub_field('personal_card')): ?>


                      <?php if (($i == 1) && ($k == 1)) {
                        $active_class = 'in active';
                      } else {
                        $active_class = '';
                        }?>


                      <div class="tab-pane fade <?php echo $active_class; ?>" id="band<?php echo $post_id; ?>-teacher<?php echo $k; ?>">
                        <div class="band-teacher__top">
                          <div class="band-teacher__img">

                            <?php $image = get_sub_field('sub_img');
                            if( !empty($image) ): ?>
                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>

                          </div>
                          <div class="band-teacher__name">
                            <h2><?php the_sub_field('sub_name'); ?></h2>
                            <p><?php the_sub_field('sub_specialty'); ?></p>
                          </div>
                        </div><!-- end band-teacher__top -->

                        <div class="band-teacher__text lato-i">
                          <p><?php the_sub_field('sub_desc'); ?></p>
                        </div><!-- end band-teacher__text -->

                      </div><!-- end band-teacher -->

                        <?php $k++; ?>
                      <?php endwhile; ?>
                      <?php $i++; ?>
                    <?php  endwhile; ?>

                </div><!-- end tab-content -->
              </div><!-- end kindergarten-slider__block--left -->

            <?php endif; ?>



              <div class="col-md-6 kindergarten-slider__block--right">
                <h2>НАША КОМАНДА «<?php the_title(); ?>»</h2>
            <?php if( have_rows('comand_group') ): ?>
                <ul class="nav nav-tabs nav-tabs--kindergarten">

                  <?php $m = 1; ?>
                  <?php while ( have_rows('comand_group') ) : the_row(); ?>
                    <?php if ($m == 2) {
                        $color_class = 'helpers-tittle';
                      } else {
                        $color_class = 'teachers-tittle';
                        }?>
                  <h3 class="<?php echo $color_class; ?>"><?php the_sub_field('title'); ?></h3>
                  <div class="clearfix"></div>

                    <?php $n = 1; ?>
                    <?php while(has_sub_field('personal_card')): ?>

                      <?php if (($n == 1) && ($m == 1)) {
                        $active_class2 = 'active';
                      } else {
                        $active_class2 = '';
                        }?>

                  <li class="<?php echo $active_class2; ?>">
                    <a href="#band<?php echo $post_id; ?>-teacher<?php echo $n; ?>" data-toggle="tab">
                            <?php $image = get_sub_field('sub_img');
                            if( !empty($image) ): ?>
                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>

                      <p><?php the_sub_field('sub_name'); ?></p>
                    </a>
                  </li>
                  <?php $n++; ?>

                      <?php endwhile; ?>
<div class="clearfix"></div>
                      <?php $m++; ?>
                    <?php  endwhile; ?>
                </ul>
            <?php endif; ?>



              </div><!-- end kindergarten-slider__block--right -->
        </div>
      </div>
              <div class="clearfix"></div>

<?php the_content(); ?>

 <div class="clearfix"></div>

              <section class="kindergarten-studios">
                <div class="container">
                  <div class="row">
                    <div class="block-tittle block-tittle--nodecor">
                      <h2>СТУДИИ
                        <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
                      </h2>
                      <div class="kindergarten-studios__type lato-i">
                        <p><span class="yellow"></span>Студии, уже включенные в стоимость обучения</p>
                        <p><span class="green"></span>Студии, оплачиваемые дополнительно</p>
                      </div>
                    </div><!-- end block-tittle -->

                    <div class="section-body">
                      <div class="kindergarten-studios">

                      <?php $posts = get_field('studios', $post_id);

                        if( $posts ): ?>

                          <?php foreach( $posts as $post): ?>
                            <?php setup_postdata($post); ?>

                            <?php if( get_field('free') ) {
                              $btn_class = 'green';
                              $btn_text = "ПО ЖЕЛАНИЮ";
                              }  else {
                              $btn_class = 'yellow';
                              $btn_text = "БЕСПЛАТНО";

                              }?>

                            <div class="kindergarten-studios__block <?php echo $btn_class; ?>">
                              <a href="<?php echo get_permalink(); ?>">
                                <div class="kindergarten-studios__img">
                                  <?php if ( has_post_thumbnail()) :
                                    the_post_thumbnail('medium');
                                  else: ?>
                                    <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                                  <?php endif; ?>
                                </div>
                                <h3><?php the_title(); ?></h3>
                                <h4><?php echo $btn_text; ?></h4>
                              </a>
                            </div><!-- end kindergarten-studios-slider__block -->
                          <?php endforeach; ?>

                          <?php wp_reset_postdata(); ?>
                        <?php endif; ?>



                        <div class="clearfix"></div>
                      </div><!-- end kindergarten-studios-slider -->
                    </div><!-- end section-body -->
                  </div>
                </div>

                <div class="kindergarten-studios-more">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-8">
                        <p>СТОИМОСТЬ ДОПОЛНИТЕЛЬНЫХ ЗАНЯТИЙ - <b>ОТ 3 ДО 25 ЕВРО</b></p>
                      </div>
                      <div class="col-md-4">
                        <div class="btn-more-wrap">
                          <a href="#" class="btn btn-more">
                            <i class="ic ic-bee"></i>
                            ПОДРОБНЕЕ О ЦЕНАХ
                            <i class="ic ic-bee"></i>
                          </a>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div><!-- end kindergarten-studios-more -->

              </section><!-- end kindergarten-studios -->



              <section class="kindergarten-gallery-wrap">
                <div class="container ">
                  <div class="row">
                    <div class="block-tittle block-tittle--nodecor">
                      <h2>ФОТОГАЛЕРЕЯ<div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div></h2>

                      <?php $posts = get_field('gallery', $post_id); if( $posts ): ?>

                          <select name="select-gallery" data-id="<?php echo $post_id; ?>" id="select-gallery-<?php echo $post_id; ?>" class="class-select-gallery">

                            <?php $l = 1; foreach( $posts as $post): ?>
                              <?php setup_postdata($post); ?>
                                <option value="<?php echo $l; ?>"><?php the_title(); ?></option>
                              <?php $l++; endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                          </select>

                        <?php endif; ?>

                    </div><!-- end block-tittle -->


                    <?php $posts = get_field('gallery', $post_id); if( $posts ): ?>
                      <div class="section-body">

                        <?php $j = 1; foreach( $posts as $post): ?>
                          <?php setup_postdata($post); ?>

                          <?php if ($j == 1) {
                            $active_class3 = 'active';
                          } else {
                            $active_class3 = '';
                          }?>

                          <div data-slide="<?php echo $j; ?>" class="kindergarten-gallery kindergarten-gallery-<?php echo $post_id; ?>-<?php echo $j; ?>  kindergarten-gallery<?php echo $j; ?> arrows-orange" data-slide="<?php echo $j; ?>">

                            <?php $images = get_field('single_gallery'); if( $images ): ?>

                                <?php foreach( $images as $image ): ?>
                                  <div class="kindergarten-gallery__block">
                                    <a href="<?php echo $image['url']; ?>" data-toggle="lightbox" data-gallery="example-gallery" tabindex="0">
                                      <img class="img-fluid" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    </a>
                                  </div><!-- end kindergarten-gallery__block -->
                                <?php endforeach; ?>

                            <?php endif; ?>

                          </div><!-- end kindergarten-gallery -->

                        <?php $j++; endforeach; ?>
                        <?php wp_reset_postdata(); ?>

                      </div><!-- end section-body -->
                    <?php endif; ?>

                  </div>
                </div>
              </section><!-- end kindergarten-gallery-wrap -->





              <section class="kindergarten-video-wrap">
                <div class="container">
                  <div class="row">
                    <div class="block-tittle block-tittle--nodecor">
                      <h2>ВИДЕОГАЛЕРЕЯ
                        <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
                      </h2>
                    </div><!-- end block-tittle -->

                    <div class="section-body">

                      <div class="kindergarten-video arrows-orange">

                        <?php $posts = get_field('videos', $post_id);

                        if( $posts ): ?>
                          <?php foreach( $posts as $post): ?>
                            <?php setup_postdata($post); ?>

                              <div class="kindergarten-video__block">
                                <div class="kindergarten-video__bg">
                                  <a href="<?php echo get_permalink(); ?>">
                                    <?php if ( has_post_thumbnail()) :
                                      the_post_thumbnail('medium');
                                    else: ?>
                                      <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                                    <?php endif; ?>
                                    <i class="ic ic-play_v"></i>
                                  </a>
                                </div><!--  end kindergarten-video__bg -->

                                <div class="kindergarten-video__descr">
                                  <h3><?php the_title(); ?></h3>
                                  <p class="lato-i"><?php wpeExcerpt('wpeExcerpt40'); ?></p>
                                  <span><?php the_time('j F Y'); ?></span>
                                </div><!-- end kindergarten-video__descr -->

                                <div class="clearfix"></div>

                              </div><!-- end kindergarten-video__block -->
                          <?php endforeach; ?>

                          <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                      </div><!-- end kindergarten-video -->
                    </div><!-- end section-body -->
                  </div>
                </div>
              </section><!-- end kindergarten-video-wrap -->
            </div><!-- end kindergarten-slider__block -->

          <?php endwhile;  ?>

          <?php endif; ?>
          </div><!-- end kindergarten-slider -->

    </section><!-- end kindergarten-slider--wrap -->




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
