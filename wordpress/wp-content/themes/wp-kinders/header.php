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

              </div>
              <!-- end h-logo -->
              <div class="col-sm-8 h-contacts">
                <div class="h-contacts__block">
                  <p><i class="ic ic-sun"></i><span>ул. Некрасова 31</span></p>
                  <a href="#" class="link-map">смотреть на карте</a>
                </div>
                <!-- end h-contacts__block -->
                <div class="h-contacts__block h-contacts__block--phone">
                  <p><i class="ic ic-bell"></i>
                    <span><small>+375 (29)</small> 506-47-07</span>
                    <span><small>+375 (29)</small> 730-42-22</span>
                  </p>
                </div>
                <!-- end h-contacts__block -->
                <div class="h-contacts__block h-contacts__block--call">
                 <a href="#" class="btn btn-call">Заказать звонок</a>
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
