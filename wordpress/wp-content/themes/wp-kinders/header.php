<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<!-- HTML-код модального окна -->
    <div id="callbackModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!-- Заголовок модального окна -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Заказать звонок</h4>
          </div>
          <!-- Основное содержимое модального окна -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">

                <?php echo do_shortcode( '[contact-form-7 id="465" title="Заказать звонок"]' ); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


      <div class="wrapper">
        <header class="header">
          <div class="container">
            <div class="row">
             <div class="h-top">
              <div class="col-xs-6 col-sm-4 h-logo">
                <?php if ( is_front_page() && is_home() ){ } else { ?>
                  <a href="<?php echo home_url(); ?>">
                    <?php  } ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>">
                    <?php if ( is_front_page() && is_home() ){
                    } else { ?>
                  </a>
                <?php } ?>

              </div><!-- end h-logo -->


              <div class="col-sm-8 h-contacts">
                <?php if( have_rows('address', 5 ) ): ?>
                  <?php while ( have_rows('address', 5 ) ) : the_row(); ?>
                    <div class="h-contacts__block">
                      <p><i class="ic ic-sun"></i><span><?php the_sub_field('text'); ?></span></p>
                      <a href="<?php the_sub_field('link'); ?>" class="link-map">смотреть на карте</a>
                    </div><!-- end h-contacts__block -->
                  <?php  endwhile; ?>
                <?php endif; ?>


                <?php if( have_rows('phone', 5 ) ): ?>

                  <div class="h-contacts__block h-contacts__block--phone">
                    <p><i class="ic ic-bell"></i>
                      <?php while ( have_rows('phone', 5 ) ) : the_row(); ?>
                        <?php the_sub_field('number'); ?>
                      <?php  endwhile; ?>
                    </p>
                  </div>

                <?php endif; ?>

                <!-- end h-contacts__block -->
                <div class="h-contacts__block h-contacts__block--call">
                 <div id="callback_modal_button" data-target="#callbackModal" data-toggle="modal" class="btn btn-call">Заказать звонок</div>
               </div>
               <!-- end h-contacts__block -->
               <div class="clearfix"></div>
             </div>
             <!-- end h-contacts -->
             <div class="clearfix"></div>
           </div>
           <!-- end h-top -->
           <div class="h-menu">
            <div class="hamburger hamburger--elastic">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
              <i class="ic ic-bee"></i>
            </div>
            <!-- end hamburger -->
            <ul class="h-menu__list">
<?php wpeHeadNav(); ?>
              <div class="clearfix"></div>
              <div class="h-menu__icon">
                <div class="h-menu__icon-inner">
                  <i class="ic ic-bee"></i>
                </div>
              </div>
              <div class="h-menu__icon h-menu__icon--right">
                <div class="h-menu__icon-inner">
                  <i class="ic ic-bee"></i>
                </div>
              </div>
            </ul>
          </div>
          <!-- end h-menu -->
        </div>
      </div>
      <!-- end container -->
