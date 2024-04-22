<?php 
require '../lib/functions.php';
require '../page_parts/header.php';

// 個別ページはタイトルを入力してください（フッターでパンくずで使用するため）
$page_title = 'Kyoto Tourism Omotenashi Platform ～KoI Service';
?>
  <main class="main mainLsSingle">
    <section class="main-heading mainLsSingle-heading">
      <div class="mainLsSingle-heading__MV">
        <div class="mainLsSingle-heading__MV-img mainLsSingle-heading__MV-img_pc" style="width:100%;background-image: url(assets/images/ls-single/sanin/1-1-KeyVisual_pc02.jpg)"></div>
        <div class="mainLsSingle-heading__MV-img mainLsSingle-heading__MV-img_sp" style="width:100%;background-image: url(assets/images/ls-single/sanin/1-1-KeyVisual_sp.jpg);height: 700px;"></div>
      </div>
      
      <div class="mainLsSingle-heading__title">
        <h1 class="mainLsSingle-heading__title-heading"><?php the_lang_word('ls-single-sanin_2');?></h1>
      </div> <!-- /.mainLsSingle-heading__title -->
    </section> <!-- /.mainLsSingle-heading -->
    <section class="mainLsSingle-banners">
      <div class="mainLsSingle-banners__container">
        <ul class="mainLsSingle-banners__list">
          <li class="mainLsSingle-banners__item mainLsSingle-banners__item-appstore d-inline-block">
            <a href="https://itunes.apple.com<?php the_apple_url_prefix();?>/app/sanin-pass/id1263396869?mt=8" target="_blank" class="mainLsSingle-banners__link"  onclick="gtag('event', 'click', {'event_category': 'link','event_label': 'sanin_appstore'});"><img src="assets/images/ls-single/appstore.png" class="mainLsSingle-banners__img"></a>
          </li>
          <li class="mainLsSingle-banners__item mainLsSingle-banners__item-googleplay d-inline-block">
            <a href="https://play.google.com/store/apps/details?id=jp.co.com.unisys.saninpass&hl=<?php the_lang();?>" target="_blank" class="mainLsSingle-banners__link" onclick="gtag('event', 'click', {'event_category': 'link','event_label': 'sanin_googleplay'});"><img src="assets/images/ls-single/googleplay.png" class="mainLsSingle-banners__img"></a>
          </li>
        </ul>
      </div> <!-- /.mainLsSingle-banners__container -->
    </section> <!-- /.mainLsSingle-banners -->


    <section class="mainLsSingle-areaCharacteristic">
      <h2 class="mainLsSingle-areaCharacteristic__heading"><?php the_lang_word('ls_8');?></h2>
      <p class="mainLsSingle-areaCharacteristic__desc"><?php the_lang_word(('ls-single-sanin_3'));?></p>
    </section> <!-- /.mainLsSingle-areaCharacteristic -->

    <section class="mainLsSingle-serviceCharacteristic">
      <h2 class="mainLsSingle-areaCharacteristic__heading"><?php the_lang_word('ls_10');?></h2>
      <img src="assets/images/ls-single/sanin/3-1.png" class="mainLsSingle-serviceCharacteristic__img">
      <p class="mainLsSingle-serviceCharacteristic__desc"><?php the_lang_word('ls-single-sanin_4');?></p>
    </section> <!-- /.mainLsSingle-serviceCharacteristic -->

    <section class="mainLsSingle-serviceContent">
      <div class="mainLsSingle-serviceContent__service d-lg-flex">
        <div class="mainLsSingle-serviceContent__service-img">
          <img src="assets/images/ls-single/sanin/4-1.png" class="">
        </div> <!-- /.mainLsSingle-serviceContent__service-img -->
        <div class="mainLsSingle-serviceContent__service-content">
          <h3 class="mainLsSingle-serviceContent__service-content__heading"><?php the_lang_word('ls-single-sanin_5');?></h3>
          <p class="mainLsSingle-serviceContent__service-content__desc"><?php the_lang_word('ls-single-sanin_6');?></p>
        </div> <!-- /.mainLsSingle-serviceContent__service-content -->
      </div> <!-- /.mainLsSingle-serviceContent__service-->
    </section> <!-- /.mainLsSingle-serviceContent -->

    <?php require '../page_parts/topics.php';?>
  </main>

<?php require '../page_parts/footer.php' ?>