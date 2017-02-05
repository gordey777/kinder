<?php /* Template Name: Documentation */ get_header(); ?>
    </header>


<?php if( have_rows('documentation') ): ?>
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
          <?php while ( have_rows('documentation') ) : the_row(); ?>
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

            <?php while(has_sub_field('document')): ?>

                <div class="col-sm-3 col-md-3 mb-30 ">
                  <?php $file = get_sub_field('sub_file');

                    if( $file ) { ?>
                      <a class="download-doc a1" href="<?php echo $file['url']; ?>">

                        <img src="<?php echo get_template_directory_uri(); ?>/img/download.png" alt="">
                        <p><?php the_sub_field('sub_text'); ?></p>

                    </a>
                  <?php } ?>
                </div>
              <?php endwhile; ?>

              <div class="clearfix" style="height: 30px; clear: both;"></div>

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
