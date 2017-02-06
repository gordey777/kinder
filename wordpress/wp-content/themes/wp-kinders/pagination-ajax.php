
  <div class="col-sm-4 helpful-articles__block-wrap">
    <div class="helpful-articles__block">
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
    </div>
  </div><!-- end helpful-articles__block-wrap -->

