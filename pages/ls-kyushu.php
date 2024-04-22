<?php 
require '../lib/functions.php';
require '../page_parts/header.php';
?>
  <main class="main mainLsSingle">
    <section class="main-heading mainLsSingle-heading">
      <div class="mainLsSingle-heading__MV">
        <div class="mainLsSingle-heading__MV-img mainLsSingle-heading__MV-img_pc" style="width:100%;background-image: url(assets/images/ls-single/kyushu/1-1-KeyVisual_pc.png)"></div>
        <div class="mainLsSingle-heading__MV-img mainLsSingle-heading__MV-img_sp" style="width:100%;background-image: url(assets/images/ls-single/kyushu/1-1_750x1334.png);height: 700px;"></div>
      </div>
      
      <div class="mainLsSingle-heading__title">
        <h1 class="mainLsSingle-heading__title-heading"><?php the_lang_word('ls-single-kyushu_2');?></h1>
      </div> <!-- /.mainLsSingle-heading__title -->
    </section> <!-- /.mainLsSingle-heading -->
    <section class="mainLsSingle-banners">
      <div class="mainLsSingle-banners__container">
        <ul class="mainLsSingle-banners__list">
          <li class="mainLsSingle-banners__item mainLsSingle-banners__item-appstore d-inline-block">
            <a href="https://itunes.apple.com<?php the_apple_url_prefix();?>/app/japan-local-city-card/id1258059133?mt=8" target="_blank" class="mainLsSingle-banners__link" onclick="gtag('event', 'click', {'event_category': 'link','event_label': 'kyushu_appstore'});"><img src="assets/images/ls-single/appstore.png" class="mainLsSingle-banners__img"></a>
          </li>
          <li class="mainLsSingle-banners__item mainLsSingle-banners__item-googleplay d-inline-block">
            <a href="https://play.google.com/store/apps/details?id=jp.neoscorp.Kumamoto.Inbound&hl=<?php the_lang();?>" target="_blank" class="mainLsSingle-banners__link" onclick="gtag('event', 'click', {'event_category': 'link','event_label': 'kyushu_googleplay'});"><img src="assets/images/ls-single/googleplay.png" class="mainLsSingle-banners__img"></a>
          </li>
        </ul>
      </div> <!-- /.mainLsSingle-banners__container -->
    </section> <!-- /.mainLsSingle-banners -->

    
    <section class="mainLsSingle-areaCharacteristic">
      <h2 class="mainLsSingle-areaCharacteristic__heading"><?php the_lang_word('ls_8');?></h2>
      <p class="mainLsSingle-areaCharacteristic__desc"><?php the_lang_word(('ls-single-kyushu_3'));?></p>
    </section> <!-- /.mainLsSingle-areaCharacteristic -->

    <section class="mainLsSingle-serviceCharacteristic">
      <h2 class="mainLsSingle-areaCharacteristic__heading"><?php the_lang_word('ls_10');?></h2>
      <img src="assets/images/ls-single/kyushu/3-1_1020x320.png" class="mainLsSingle-serviceCharacteristic__img">
      <p class="mainLsSingle-serviceCharacteristic__desc"><?php the_lang_word('ls-single-kyushu_4');?></p>
    </section> <!-- /.mainLsSingle-serviceCharacteristic -->

    <section class="mainLsSingle-serviceContent">
      <div class="mainLsSingle-serviceContent__service d-lg-flex">
        <div class="mainLsSingle-serviceContent__service-img">
          <img src="assets/images/ls-single/kyushu/4-1_610x290.png" class="">
        </div> <!-- /.mainLsSingle-serviceContent__service-img -->
        <div class="mainLsSingle-serviceContent__service-content">
          <h3 class="mainLsSingle-serviceContent__service-content__heading"><?php the_lang_word('ls-single-kyushu_5');?></h3>
          <p class="mainLsSingle-serviceContent__service-content__desc"><?php the_lang_word('ls-single-kyushu_6');?></p>
        </div> <!-- /.mainLsSingle-serviceContent__service-content -->
      </div> <!-- /.mainLsSingle-serviceContent__service-->
      <div class="mainLsSingle-serviceContent__service d-lg-flex reverseOrder">
        <div class="mainLsSingle-serviceContent__service-img">
          <img src="assets/images/ls-single/kyushu/4-2_610x290.png" class="">
        </div> <!-- /.mainLsSingle-serviceContent__service-img -->
        <div class="mainLsSingle-serviceContent__service-content">
          <h3 class="mainLsSingle-serviceContent__service-content__heading"><?php the_lang_word('ls-single-kyushu_7');?></h3>
          <p class="mainLsSingle-serviceContent__service-content__desc"><?php the_lang_word('ls-single-kyushu_8');?></p>
        </div> <!-- /.mainLsSingle-serviceContent__service-content -->
      </div> <!-- /.mainLsSingle-serviceContent__service-->
      <div class="mainLsSingle-serviceContent__service d-lg-flex">
        <div class="mainLsSingle-serviceContent__service-img">
          <img src="assets/images/ls-single/kyushu/4-3_610x290.png" class="">
        </div> <!-- /.mainLsSingle-serviceContent__service-img -->
        <div class="mainLsSingle-serviceContent__service-content">
          <h3 class="mainLsSingle-serviceContent__service-content__heading"><?php the_lang_word('ls-single-kyushu_9');?></h3>
          <p class="mainLsSingle-serviceContent__service-content__desc"><?php the_lang_word('ls-single-kyushu_10');?></p>
        </div> <!-- /.mainLsSingle-serviceContent__service-content -->
      </div> <!-- /.mainLsSingle-serviceContent__service-->
    </section> <!-- /.mainLsSingle-serviceContent -->

    <?php require '../page_parts/topics.php';?>
  </main>

<?php require '../page_parts/footer.php' ?>