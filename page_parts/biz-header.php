<?php require 'response_header.php';?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php get_title(); ?> - withJorge</title>
  <link rel="icon" type="image/png" href="/assets/images/favicon.png">

  <!-- Local Service Slider -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.3/tiny-slider.css">
  <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.3/min/tiny-slider.helper.ie8.js"></script><![endif]-->

  <link rel='stylesheet' href='/assets/css/bootstrap.min.css' type='text/css' media='all' />
  <link rel='stylesheet' href='/assets/css/style.css?v=1.2' type='text/css' media='all' />
  <link rel='stylesheet' href='/assets/css/font-awesome.min.css' type='text/css' media='all' />
  <link href="/assets/lib/lightbox/css/lightbox.css" rel="stylesheet">
  <script type='text/javascript' src='/assets/js/jquery.js'></script>
  <script type='text/javascript' src='/assets/js/bootstrap.min.js'></script>
  <script type='text/javascript' src='/assets/js/jquery.easing.min.js'></script>
  <script type='text/javascript' src='/assets/js/jquery.smoothscroll.min.js'></script>
  <script type='text/javascript' src='/assets/js/imageMapResizer.min.js'></script>
  <script type='text/javascript' src='/assets/js/change_lang.js'></script>
  <script type='text/javascript' src='/assets/js/recognition.js'></script>
  <script type='text/javascript' src='/assets/lib/lightbox/js/lightbox.js'></script>
  
  <!-- Local Service Slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.3/min/tiny-slider.js"></script>
  <script type='text/javascript' src='/assets/js/main.js?v=1.0'></script>
  <?php if (isset($_SESSION['allow_cookies']['google'])) :?>
    <?php require '../page_parts/google_tag_manager.php';?>
  <?php endif;?>
</head>
<body>
  <?php require 'cookie_modal.php';?>

  <header class="header header-wh" id="header">
    <div class="header-container l-container" id="top">
      <a class="header-logo header-logo__mobile" href="/biz-index?lang=<?php echo get_lang();?>"><img class="header-logo__image" src="/assets/images/logo-mobile.png" alt="withjorge" width="150px"></a>
      <a class="header-logo header-logo__desktop" href="/biz-index?lang=<?php echo get_lang();?>"><img class="header-logo__image" src="/assets/images/logo.png" alt="withjorge" width="150px"></a>
      <div class="header-language">
        <img src="/assets/images/header/language.png" class="header-language__img">
        <ul id="header-language__list" class="header-language__list">
          <li class="header-language__item" value=""><span class="header-language__selected"><?php get_selected_lang_name();?></span></li>
          <li class="header-language__item" value=""><a href="/<?php echo str_replace(array('.php', '/'), array('', ''), $_SERVER['SCRIPT_NAME']); ?>" class="header-language__link"><?php the_lang_word('ja');?></a></li>
          <li class="header-language__item" value=""><a href="/<?php echo str_replace(array('.php', '/'),  array('', ''), $_SERVER['SCRIPT_NAME']); ?>?lang=en" class="header-language__link"><?php the_lang_word('en');?></a></li>
          <li class="header-language__item" value=""><a href="/<?php echo str_replace(array('.php', '/'), array('', ''), $_SERVER['SCRIPT_NAME']); ?>?lang=zh-cn" class="header-language__link"><?php the_lang_word('zh-cn');?></a></li>
          <li class="header-language__item" value=""><a href="/<?php echo str_replace(array('.php', '/'), array('', ''), $_SERVER['SCRIPT_NAME']); ?>?lang=zh-tw" class="header-language__link"><?php the_lang_word('zh-tw');?></a></li>
          <li class="header-language__item" value=""><a href="/<?php echo str_replace(array('.php', '/'), array('', ''), $_SERVER['SCRIPT_NAME']); ?>?lang=ko" class="header-language__link"><?php the_lang_word('ko');?></a></li>
        </ul>
      </div>

      <nav class="header-menu">
        <ul class="header-menu__list">
          <li class="header-menu__item header-menu__item-business"><a class="header-menu__link header-menu__link-business" href="/?lang=<?php echo get_lang();?>"><?php  the_lang_word('common_1');?></a></li>
        </ul>

      </nav>
      
    </div>
  </header>

