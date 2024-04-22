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
  <link rel='stylesheet' href='/assets/css/style.css?v=1.3' type='text/css' media='all' />
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
  <script type='text/javascript' src='/assets/js/main.js?v=1.2'></script>
  <?php if (isset($_SESSION['allow_cookies']['google'])) :?>
    <?php require 'google_tag_manager.php';?>
  <?php endif;?>
</head>
<body>