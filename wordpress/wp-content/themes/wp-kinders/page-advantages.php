<?php /* Template Name: Advantages */ get_header(); ?>
    </header>


<?php if( have_rows('advantages') ): ?>
    <section class="open-gallery">
      <div class="container">
        <div class="row">
          <?php edit_post_link(); ?>
          <div class="section-tittle">
            <h1><?php the_title(); ?>
              <div class="section-tittle__decoration"><span></span></div>
              <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
            </h1>
          </div><!-- end section-tittle -->


          <?php $i = 1; ?>
          <?php while ( have_rows('advantages') ) : the_row(); ?>
              <?php if ($i == 1){
                $color_button = ' ';
                } elseif ($i == 2){
                $color_button = 'reds';
                } elseif ($i ==3){
                $color_button = 'blues';
                } ?>

            <div class="btn-more-wrap a-left q<?php echo $i; ?>">
              <a href="#" class="btn btn-more curs <?php echo $color_button; ?>"><?php the_sub_field('title'); ?></a>
            </div>

            <?php while(has_sub_field('advantage')): ?>

              <div class="col-sm-3 col-md-3 mb-30 adv">
                <?php $image = get_sub_field('sub_img');
                if( !empty($image) ): ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
                <div class="advantages-block__text">
                  <h4><?php the_sub_field('sub_title'); ?></h4>
                  <p><?php the_sub_field('sub_text'); ?></p>
                </div>
              </div>

            <?php endwhile; ?>

            <div style="clear: both;"></div>

            <?php $i++; ?>
            <?php if ($i > 3) {
              $i = 1;
              } ?>
          <?php  endwhile; ?>

        </div>
      </div>
    </section>
<?php endif; ?>

    <footer>


<?php get_footer(); ?>
