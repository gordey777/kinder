<?php get_header(); ?>
    </header>

    <section class="open-gallery">
      <div class="container">
        <div class="row">
          <div class="section-tittle">
            <h1><?php if( is_category() )
                  echo get_queried_object()->name; ?>
              <div class="section-tittle__decoration"><span></span></div>
              <div class="section-tittle__decoration section-tittle__decoration--right"><span></span></div>
            </h1>
          </div><!-- end section-tittle -->
          <?php if (have_posts()) { ?>

            <?php $cat_ID = 4; ?>
            <div class="galery_buttons">
            <div class="col-md-4 mb-30"></div>
              <?php   $categories = get_categories('child_of='.$cat_ID);
              $i = 1;
              foreach ($categories as $category) { ?>
                  <div class="col-md-2 mb-30">
                    <a class="tab-link" href="#tab-<?php echo $i?>" rel="bookmark">
                      <?php echo $category->cat_name; ?>
                    </a>
                  </div>
              <?php $i++;
              } ?>
            <div class="col-md-4 mb-30"></div>
            </div>
            <div style="clear: both;"></div>

            <?php $cat_ID = get_query_var('cat'); ?>
            <?php $k = 1; ?>
            <div class="galery_tabs">
              <?php   $categories = get_categories('child_of='.$cat_ID);

              foreach($categories as $category) {
                $posts = get_posts("category=".$category->term_id);?>
                <div id="tab-<?php echo $k ?>">
                <?php foreach ($posts as $post) : setup_postdata ($post); ?>

                  <div class="col-sm-3 col-md-3 mb-30">
                    <a class="simple-img list-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                      <div class="gallery-relative">
                      <div  class="img-fluid">
                        <?php if ( has_post_thumbnail()) :
                            the_post_thumbnail('medium');
                          else: ?>

                            <?php
                            $images = get_field('single_gallery');
                            $image  = $images[0];

                            if( $image ) :  ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>

                          <?php endif; ?>
                      </div>
                        <span class="gallery-name"><?php the_title(); ?></span>
                            <?php
                            $images = get_field('single_gallery');
                            $gallery_count  = count($images); ?>

                        <span class="sum-photo"><?php echo $gallery_count; ?> фото</span>
                      </div>
                      <?php wpeExcerpt('wpeExcerpt40'); ?>
                    </a>
                  </div>


                <?php endforeach; ?>
                </div>
                <?php $k++; ?>
              <?php };
              wp_reset_postdata(); ?>
            </div>

          <?php }
          else { ?>
            <div>

              <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

            </div><!-- /article -->

          <?php }; ?>
          <div style="clear: both;"></div>
          <?php get_template_part('pagination'); ?>

        </div>
      </div>
    </section>


    <footer>
<?php get_footer(); ?>
