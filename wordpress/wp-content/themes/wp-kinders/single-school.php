  <?php if (have_posts()): while (have_posts()) : the_post(); ?>


    <section class="kindergarten">
      <div class="container">
        <div class="row">
        <?php edit_post_link(); ?>
          <div class="section-tittle">
            <h1><?php the_title(); ?>
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

          </div><!-- end kindergarten-slider-nav -->
        </div>
      </div>
    </section><!-- end kindergarten-slider-nav--wrapper -->



    <section class="kindergarten-slider--wrap">

      <div class="container">
        <div class="row">
          <!-- <div class="kindergarten-slider"> -->
          <div >

            <div class="kindergarten-slider__block">

            <?php if( have_rows('comand_group') ): ?>
              <div class="col-md-6 kindergarten-slider__block--left">

                <div class="tab-content">


                  <?php $i = 1; ?>
                  <?php while ( have_rows('comand_group') ) : the_row(); ?>
                    <?php $k = 1; ?>
                    <?php while(has_sub_field('personal_card')): ?>
                      <?php if ($k == 1){
                        $active_class = ' in active';
                      } ?>
                      <div class="tab-pane fade <?php //echo $active_class; ?>" id="band<?php echo $i; ?>-teacher<?php echo $k; ?>">
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
                  <h3 class="teachers-tittle"><?php the_sub_field('title'); ?></h3>
                  <div class="clearfix"></div>

                    <?php $n = 1; ?>
                    <?php while(has_sub_field('personal_card')): ?>
                      <?php if ($n == 1){
                        $active_class2 = 'active';
                      } ?>

                  <li class="<?php //echo $active_class2; ?>">
                    <a href="#band<?php echo $m; ?>-teacher<?php echo $n; ?>" data-toggle="tab">
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

                      <?php $posts = get_field('studios');

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
                <div class="container">
                  <div class="row">
                    <div class="block-tittle block-tittle--nodecor">
                      <h2>ФОТОГАЛЕРЕЯ
                        <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
                      </h2>

                      <?php $posts = get_field('gallery');

                        if( $posts ): ?>

                          <select name="select-gallery" id="select-gallery">

                            <?php $l = 1 ?>
                            <?php foreach( $posts as $post): ?>
                              <?php setup_postdata($post); ?>

                              <option value="gallery<?php echo $l; ?>"><?php the_title(); ?></option>
                             <?php $l++; ?>
                            <?php endforeach; ?>


                            <?php wp_reset_postdata(); ?>
                          </select>
                        <?php endif; ?>

                    </div><!-- end block-tittle -->
                    <?php $posts = get_field('gallery');

                    if( $posts ): ?>

                      <div class="section-body">

                        <?php $j = 1; ?>
                        <?php foreach( $posts as $post): ?>
                          <?php setup_postdata($post); ?>
                          <?php $post_id = get_the_ID(); ?>
                          <?php if ($j == 1){
                            $active_class3 = 'active';
                          } ?>

                          <div class="kindergarten-gallery <?php echo $active_class3; ?> kindergarten-gallery<?php echo $j; ?> arrows-orange">

                            <?php $images = get_field('single_gallery');
                              if( $images ): ?>

                                <?php foreach( $images as $image ): ?>
                                  <div class="kindergarten-gallery__block">
                                    <a href="<?php echo $image['url']; ?>" data-toggle="lightbox" data-gallery="example-gallery" tabindex="0">
                                      <img class="img-fluid" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    </a>
                                  </div><!-- end kindergarten-gallery__block -->
                                <?php endforeach; ?>

                              <?php endif; ?>

                          </div><!-- end kindergarten-gallery -->
                        <?php $j++; ?>
                        <?php endforeach; ?>

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

                        <?php $posts = get_field('videos');

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

          </div><!-- end kindergarten-slider -->
        </div>
      </div>
    </section><!-- end kindergarten-slider--wrap -->

  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>
  <?php endif; ?>
