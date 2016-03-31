<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    
    <meta name="description" content="">
    <meta name="author" content="">
    
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/normalize.css") ?>
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/main.css") ?>
    
    <!-- Wordpress Templates require a style.css in theme root directory -->
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."style.css") ?>
    
    <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
    <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/vendor/modernizr-2.6.1.min.js") ?>

    <!-- Wordpress Head Items -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

    <link href="<?php echo get_template_directory_uri(); ?>/html5-boilerplate/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/html5-boilerplate/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Serif&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    <link href="<?php echo get_template_directory_uri(); ?>/html5-boilerplate/slick/slick.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/html5-boilerplate/css/ftunews.css" rel="stylesheet"/>
</head>
<body <?php body_class(); ?>>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->


    <!-- header -->
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-sm-9">
            <div class="row">
              <div class="col-md-4 header-ftunews margin-top-20px">
                FTUNEWS
              </div>
              <div class="col-md-8 margin-top-20px">
                <div class="label-trending">
                  <span class="trending-prev"><<</span> TRENDING <span class="trending-next">>></span>
                </div>
                <div class="trending-slick">
                  <div>
                    <a href="#">1.Android N is really fast and fluid, width some inevitable bugs</a>
                  </div>
                  <div>
                    <a href="#">2.Android N is really fast and fluid, width some inevitable bugs</a>
                  </div>
                  <div>
                    <a href="#">3.Android N is really fast and fluid, width some inevitable bugs</a>
                  </div>
                  <div>
                    <a href="#">4.Android N is really fast and fluid, width some inevitable bugs</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-3 margin-top-20px header-social-box text-align-right">
            <div>FOLLOW US ON</div>
            <a href="https://www.facebook.com/iloveftunews" class="fa fa-facebook btn btn-link header-social"></a>
            <a href="https://www.youtube.com/user/ftunews" class="fa fa-youtube btn btn-link header-social"></a>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default">
        <div class="container container-fluid-sm">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="#">chuyển động ftu2</a></li>
              <li><a href="#">điểm tin</a></li>
              <li><a href="#">cảm thức</a></li>
              <li><a href="#">phóng sự</a></li>
              <li><a href="#">hỗ trợ sinh viên</a></li>
              <li><a href="#">vitamin biz</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="javascript:$('#header-search-bar').slideToggle();">search</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div id="header-search-bar" class="header-search-bar">
        <input type="text" class="header-search-bar-input" placeholder="Tìm kiếm...">
      </div>
    </header>
