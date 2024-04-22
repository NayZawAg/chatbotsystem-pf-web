<?php 
require '../lib/functions.php';
// TODO: lsが増えた時に下記 location は削除する
header('location: /?lang=' . get_lang());


require '../page_parts/header.php';
?> 

  <main class="main mainLs">
    <section class="main-heading mainLs-heading">
      <h1 class="main-heading__title main-heading__title-en main-heading__title-red"><?php the_lang_word('ls_1');?></h1>
      <h1 class="main-heading__title main-heading__title-jp main-heading__title-red"><?php the_lang_word('ls_14');?></h1>
    </section> <!-- /.main-heading -->

    <div class="main-container mainLs-container">
      <section class="mainLs-bgImg"></section>
      
      <section class="main-content mainLs-content">
        <div class="main-content__container mainLs-content__container d-md-flex flex-wrap">

          <article class="mainLs-content__service">
            <a href="/ls-touchandpay?lang=<?php echo get_lang();?>" class="mainLs-content__service-eyeCatch d-block" style="background-image: url(assets/images/ls-single/touchandpay/1-1-KeyVisual_en.png)"></a>
            <div class="mainLs-content__service-heading">
              <h2 class="mainLs-content__service-heading"><a href="/ls-touchandpay?lang=<?php echo get_lang();?>" class="mainLs-content__service-heading__link"><?php the_lang_word('ls-single-touchandpay_1');?></a></h2>
            </div> <!-- /.main-content__service-heading -->
            <div class="mainLs-content__service-tags">
            </div>
          </article> <!-- /.main-content__service -->

          <?php /*
          <article class="mainLs-content__service">
            <a href="/ls-single?lang=<?php echo get_lang();?>" class="mainLs-content__service-eyeCatch d-block" style="background-image: url(assets/images/ls/ls-article.png)"></a>
            <div class="mainLs-content__service-heading">
              <h2 class="mainLs-content__service-heading"><a href="/ls-single?lang=<?php echo get_lang();?>" class="mainLs-content__service-heading__link"><?php the_lang_word('ls_4');?></a></h2>
            </div> <!-- /.main-content__service-heading -->
            <div class="mainLs-content__service-tags">
              <ul class="mainLs-content__service-tags__list">
                <li class="mainLs-content__service-tags__item d-inline-block"><a href="#" class="mainLs-content__service-tags__link"><?php the_lang_word('ls_2');?></a></li>
                <li class="mainLs-content__service-tags__item d-inline-block"><a href="#" class="mainLs-content__service-tags__link"><?php the_lang_word('ls_3');?></a></li>
              </ul>
            </div>
          </article> <!-- /.main-content__service -->
          */?>

        </div> <!-- /.mainLs-content__container -->
      </section> <!-- /.main-content -->
    </div> <!-- /.main-container -->
  </main>


<?php require '../page_parts/footer.php' ?>