<?php 
require '../lib/functions.php';
require '../page_parts/header.php';
?>
  <main class="main mainLsSingle">
    <section class="main-heading mainLsSingle-heading">
      <div class="mainLsSingle-heading__MV">
        <div class="mainLsSingle-heading__MV-img mainLsSingle-heading__MV-img_pc" style="width:100%;background-image: url(assets/images/ls-single/touchandpay/1-1-KeyVisual_en.png)"></div>
        <div class="mainLsSingle-heading__MV-img mainLsSingle-heading__MV-img_sp" style="width:100%;background-image: url(assets/images/ls-single/touchandpay/1-1-KeyVisual_en_sp.jpg);height: 700px;"></div>
      </div>
      
      <div class="mainLsSingle-heading__title">
        <h1 class="mainLsSingle-heading__title-heading"><?php the_lang_word('ls-single-touchandpay_1');?></h1>
      </div> <!-- /.mainLsSingle-heading__title -->
    </section> <!-- /.mainLsSingle-heading -->
    <section class="mainLsSingle-areaCharacteristic">
      <h2 class="mainLsSingle-areaCharacteristic__heading"><?php the_lang_word('ls_8');?></h2>
      <p class="mainLsSingle-areaCharacteristic__desc"><?php the_lang_word(('ls-single-touchandpay_2'));?></p>
    </section> <!-- /.mainLsSingle-areaCharacteristic -->

    <section class="mainLsSingle-serviceCharacteristic">
      <h2 class="mainLsSingle-areaCharacteristic__heading"><?php the_lang_word('ls_10');?></h2>
      <img src="assets/images/ls-single/touchandpay/1-2_touchandpayLogo.png" class="mainLsSingle-serviceCharacteristic__img">
      <p class="mainLsSingle-serviceCharacteristic__desc"><?php the_lang_word('ls-single-touchandpay_3');?></p>
    </section> <!-- /.mainLsSingle-serviceCharacteristic -->
    <section class="mainLsSingle-serviceCharacteristic mainLsSingle-serviceCharacteristic__information text-center">
      <p>
        <a href="https://touchandpay-japan.com" target="_blank" onclick="gtag('event', 'click', {'event_category': 'link','event_label': 'tp_textlink1'});">Touch to The future by "Touch&Pay"</a>
        <a href="https://kankouyohou.com/en/" target="_blank" onclick="gtag('event', 'click', {'event_category': 'link','event_label': 'tp_textlink2'});">Japan Voyage Navigator</a>
        <a href="https://find47.jp/en/" target="_blank" onclick="gtag('event', 'click', {'event_category': 'link','event_label': 'tp_textlink3'});">FIND47</a>
      </p>
    </section>

    <section class="mainLsSingle-serviceContent">
      <div class="mainLsSingle-serviceContent__service d-lg-flex">
        <div class="mainLsSingle-serviceContent__service-img">
          <img src="assets/images/ls-single/touchandpay/1-3_smartPayment.png" class="">
        </div> <!-- /.mainLsSingle-serviceContent__service-img -->
        <div class="mainLsSingle-serviceContent__service-content">
          <h3 class="mainLsSingle-serviceContent__service-content__heading"><?php the_lang_word('ls-single-touchandpay_4');?></h3>
          <p class="mainLsSingle-serviceContent__service-content__desc"><?php the_lang_word('ls-single-touchandpay_5');?></p>
        </div> <!-- /.mainLsSingle-serviceContent__service-content -->
      </div> <!-- /.mainLsSingle-serviceContent__service-->
      <div class="mainLsSingle-serviceContent__service d-lg-flex reverseOrder">
        <div class="mainLsSingle-serviceContent__service-img">
          <img src="assets/images/ls-single/touchandpay/1-3_smartCheck-in.png" class="">
        </div> <!-- /.mainLsSingle-serviceContent__service-img -->
        <div class="mainLsSingle-serviceContent__service-content">
          <h3 class="mainLsSingle-serviceContent__service-content__heading"><?php the_lang_word('ls-single-touchandpay_6');?></h3>
          <p class="mainLsSingle-serviceContent__service-content__desc"><?php the_lang_word('ls-single-touchandpay_7');?></p>
        </div> <!-- /.mainLsSingle-serviceContent__service-content -->
      </div> <!-- /.mainLsSingle-serviceContent__service-->
      <div class="mainLsSingle-serviceContent__service d-lg-flex">
        <div class="mainLsSingle-serviceContent__service-img">
          <img src="assets/images/ls-single/touchandpay/1-3_smartSolatium.png" class="">
        </div> <!-- /.mainLsSingle-serviceContent__service-img -->
        <div class="mainLsSingle-serviceContent__service-content">
          <h3 class="mainLsSingle-serviceContent__service-content__heading"><?php the_lang_word('ls-single-touchandpay_8');?></h3>
          <p class="mainLsSingle-serviceContent__service-content__desc"><?php the_lang_word('ls-single-touchandpay_9');?></p>
        </div> <!-- /.mainLsSingle-serviceContent__service-content -->
      </div> <!-- /.mainLsSingle-serviceContent__service-->

      <div class="mainLsSingle-serviceContent__service d-lg-flex reverseOrder">
        <div class="mainLsSingle-serviceContent__service-img">
          <img src="assets/images/ls-single/touchandpay/1-3_smartTicket.png" class="">
        </div> <!-- /.mainLsSingle-serviceContent__service-img -->
        <div class="mainLsSingle-serviceContent__service-content">
          <h3 class="mainLsSingle-serviceContent__service-content__heading"><?php the_lang_word('ls-single-touchandpay_10');?></h3>
          <p class="mainLsSingle-serviceContent__service-content__desc"><?php the_lang_word('ls-single-touchandpay_11');?></p>
        </div> <!-- /.mainLsSingle-serviceContent__service-content -->
      </div> <!-- /.mainLsSingle-serviceContent__service-->
      <div class="mainLsSingle-serviceContent__service d-lg-flex">
        <div class="mainLsSingle-serviceContent__service-img">
          <img src="assets/images/ls-single/touchandpay/1-3_smartDerivery.png" class="">
        </div> <!-- /.mainLsSingle-serviceContent__service-img -->
        <div class="mainLsSingle-serviceContent__service-content">
          <h3 class="mainLsSingle-serviceContent__service-content__heading"><?php the_lang_word('ls-single-touchandpay_12');?></h3>
          <p class="mainLsSingle-serviceContent__service-content__desc"><?php the_lang_word('ls-single-touchandpay_13');?></p>
        </div> <!-- /.mainLsSingle-serviceContent__service-content -->
      </div> <!-- /.mainLsSingle-serviceContent__service-->
    </section> <!-- /.mainLsSingle-serviceContent -->

    <?php require '../page_parts/topics.php';?>
  </main>

<?php require '../page_parts/footer.php' ?>