<?php 
require '../lib/functions.php';
// TODO: topics開放する時に下記 location は削除する
header('location: /?lang=' . get_lang());

require '../page_parts/header.php';

// 個別ページはタイトルを入力してください（フッターでパンくずで使用するため）
$page_title = '釧路ストレスフリーサポート事業';
?>
  <main class="main mainLsSingle">
    <section class="main-heading mainLsSingle-heading">
      <div class="mainLsSingle-heading__MV d-lg-flex flex-lg-wrap">
        <div class="mainLsSingle-heading__MV-left mainLsSingle-heading__MV-img" style="background-image: url(assets/images/ls-single/lsSingleMV-left.png)"></div>
        <div class="mainLsSingle-heading__MV-right mainLsSingle-heading__MV-img" style="background-image: url(assets/images/ls-single/lsSingleMV-right.png)"></div>
      </div>
      
      <div class="mainLsSingle-heading__title">
        <div class="mainLsSingle-heading__title-categories">
          <ul class="mainLsSingle-heading__title-categories__list">
            <li class="mainLsSingle-heading__title-categories__item">
              <a href="#" class="mainLsSingle-heading__title-categories__link"><?php the_lang_word('ls_5');?></a>
            </li>
            <li class="mainLsSingle-heading__title-categories__item">
              <a href="#" class="mainLsSingle-heading__title-categories__link"><?php the_lang_word('ls_6');?></a>
            </li>
            
          </ul>
        </div> <!-- /.mainLsSingle-heading__title-categories -->

        <h1 class="mainLsSingle-heading__title-heading"><?php the_lang_word('ls_7');?></h1>
      </div> <!-- /.mainLsSingle-heading__title -->
    </section> <!-- /.mainLsSingle-heading -->

    <section class="mainLsSingle-banners">
      <div class="mainLsSingle-banners__container">
        <ul class="mainLsSingle-banners__list">
          <li class="mainLsSingle-banners__item mainLsSingle-banners__item-appstore d-inline-block">
            <a href="https://itunes.apple.com/jp/store" target="_blank" class="mainLsSingle-banners__link"><img src="assets/images/ls-single/appstore.png" class="mainLsSingle-banners__img"></a>

          </li>
          <li class="mainLsSingle-banners__item mainLsSingle-banners__item-googleplay d-inline-block">
            <a href="https://play.google.com/store?hl=<?php the_lang();?>" target="_blank" class="mainLsSingle-banners__link"><img src="assets/images/ls-single/googleplay.png" class="mainLsSingle-banners__img"></a>
          </li>
        </ul>
      </div> <!-- /.mainLsSingle-banners__container -->
    </section> <!-- /.mainLsSingle-banners -->

    <section class="mainLsSingle-areaCharacteristic">
      <h2 class="mainLsSingle-areaCharacteristic__heading"><?php the_lang_word('ls_8');?></h2>
      <p class="mainLsSingle-areaCharacteristic__desc"><?php the_lang_word(('ls_9'));?></p>
    </section> <!-- /.mainLsSingle-areaCharacteristic -->

    <section class="mainLsSingle-serviceCharacteristic">
      <h2 class="mainLsSingle-serviceCharacteristic__heading"><?php the_lang_word('ls_10');?></h2>
      <img src="assets/images/ls-single/service.png" class="mainLsSingle-serviceCharacteristic__img">
      <p class="mainLsSingle-serviceCharacteristic__desc"><?php the_lang_word('ls_11');?></p>
    </section> <!-- /.mainLsSingle-serviceCharacteristic -->

    <section class="mainLsSingle-serviceContent">
      <h2 class="mainLsSingle-serviceContent__heading"><?php the_lang_word('ls_12');?></h2>

      <div class="mainLsSingle-serviceContent__service d-lg-flex">
        <div class="mainLsSingle-serviceContent__service-img">
          <img src="assets/images/ls-single/service-1.png" class="">
        </div> <!-- /.mainLsSingle-serviceContent__service-img -->
        <div class="mainLsSingle-serviceContent__service-content">
          <h3 class="mainLsSingle-serviceContent__service-content__heading">サービスタイトル</h3>
          <p class="mainLsSingle-serviceContent__service-content__desc">ービスの内容の紹介テキストです。サービスの内容の紹介テキストです。サービスの内容の紹介テキストです。サービスの内容の紹介テキストです。サービスの内容の紹介テキストです。</p>
        </div> <!-- /.mainLsSingle-serviceContent__service-content -->
      </div> <!-- /.mainLsSingle-serviceContent__service-->
      <div class="mainLsSingle-serviceContent__service d-lg-flex reverseOrder">
        <div class="mainLsSingle-serviceContent__service-img">
          <img src="assets/images/ls-single/service-2.png" class="">
        </div> <!-- /.mainLsSingle-serviceContent__service-img -->
        <div class="mainLsSingle-serviceContent__service-content">
          <h3 class="mainLsSingle-serviceContent__service-content__heading">サービスタイトル</h3>
          <p class="mainLsSingle-serviceContent__service-content__desc">ービスの内容の紹介テキストです。サービスの内容の紹介テキストです。サービスの内容の紹介テキストです。サービスの内容の紹介テキストです。サービスの内容の紹介テキストです。</p>
        </div> <!-- /.mainLsSingle-serviceContent__service-content -->
      </div> <!-- /.mainLsSingle-serviceContent__service-->
      <div class="mainLsSingle-serviceContent__service d-lg-flex">
        <div class="mainLsSingle-serviceContent__service-img">
          <img src="assets/images/ls-single/service-3.png" class="">
        </div> <!-- /.mainLsSingle-serviceContent__service-img -->
        <div class="mainLsSingle-serviceContent__service-content">
          <h3 class="mainLsSingle-serviceContent__service-content__heading">サービスタイトル</h3>
          <p class="mainLsSingle-serviceContent__service-content__desc">ービスの内容の紹介テキストです。サービスの内容の紹介テキストです。サービスの内容の紹介テキストです。サービスの内容の紹介テキストです。サービスの内容の紹介テキストです。</p>
        </div> <!-- /.mainLsSingle-serviceContent__service-content -->
      </div> <!-- /.mainLsSingle-serviceContent__service-->
    </section> <!-- /.mainLsSingle-serviceContent -->

    <?php require '../page_parts/topics.php';?>

  </main>

<?php require '../page_parts/footer.php' ?>