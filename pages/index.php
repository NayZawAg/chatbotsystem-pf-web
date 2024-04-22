<?php 
require '../lib/functions.php';
require '../page_parts/header.php';
?>

  <main class="main mainTop">
    <div class="mainTop-container">

      <section class="mainTop-firstView">
        <div class="mainTop-firstView__content">
          <div class="mainTop-firstView__content-logo">
            <div class="mainTop-firstView__content-logo__en">
              <p class="mainTop-firstView__content-logo__en-sm"><?php the_lang_word('top_1');?></p>
              <h1 class="mainTop-firstView__content-logo__en-lg"><?php the_lang_word('sitename');?></h1>
            </div> <!-- /.mainTop-firstView__content-logo__en -->            
            <h1 class="mainTop-firstView__content-logo__jp"><?php the_lang_word('top_2');?></h1>
          </div> <!-- /.mainTop-firstView__content-logo -->

          <?php /*
          <div class="mainTop-firstView__content-search">
            <form id="search" action="#" method="post">
              <input id="submitBtn" type="image" class="submitBtn" src="assets/images/top/search.png">
              <input type="text" name="q" id="transcript" placeholder="<?php the_lang_word('top_3');?>" />
              <img onclick="startDictation()" src="assets/images/top/microphone.png" class="recBtn">
            </form>
          </div>
          */ ?>
        </div> <!-- /.mainTop-firstView__content -->
      </section> <!-- /.mainTop-firstView -->

      <section class="mainTop-concept" id="concept">
        <div class="mainTop-concept__container">
          <div class="mainTop-concept__content animated">
            <h2 class="mainTop-concept__content-headingJp"><?php the_lang_word('top_16');?></h2>
            <h4 class="mainTop-concept__content-subHeading"><?php the_lang_word('top_17');?></h4>
            <div class="mainTop-concept__serviceimage">
              <div class="row">
                <div class="col-12">
                  <div class="title-border">
                    <img src="/assets/images/top/<?php echo get_lang();?>-concept-1.png" class="mainTop-concept__serviceimage__img mainTop-concept__serviceimage__img-title" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <img src="/assets/images/top/concept-2.png" class="mainTop-concept__serviceimage__img mainTop-concept__serviceimage__img-partner" />
                </div>
                <div class="col-12">
                  <h4><?php the_lang_word('top_20');?></h4>
                  <?php /*<p><?php the_lang_word('top_21');?></p>*/?>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <img src="/assets/images/top/concept-arrow.png" class="mainTop-concept__serviceimage__img" />
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <img src="/assets/images/top/concept-3.png" class="mainTop-concept__serviceimage__img mainTop-concept__serviceimage__img-concierge" />
                </div>
                <div class="col-12">
                  <h4><?php the_lang_word('top_22');?></h4>
                  <?php /*<p><?php the_lang_word('top_23');?></p>*/?>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p class="sns-comingsoon__text"><?php the_lang_word('top_concept_5');?></p>
                  <div>
                    <p class="sns-comingsoon">Coming Soon</p>
                    <img src="/assets/images/top/concept-arrow-right.png" class="mainTop-concept__serviceimage-commingsoon-arrow" />
                    <img src="/assets/images/top/sns_comingsoon.png" class="mainTop-concept__serviceimage-commingsoon-sns" />
                  </div>
                  <?php /*
                  <img src="/assets/images/sns-line.png" class="mainTop-concept__serviceimage__img-sns" />
                  <img src="/assets/images/sns-facebook.png" class="mainTop-concept__serviceimage__img-sns" />
                  <img src="/assets/images/sns-wechat.png" class="mainTop-concept__serviceimage__img-sns" />
                  */?>
                </div>
              </div>

            </div>
          </div> <!-- /.mainTop-concept__content -->
        </div> <!-- /.mainTop-concept__container -->
      </section> <!-- /.mainTop-concept -->
      <section class="mainTopLs-heading" id="local-service">
        <div class="mainTopLs-heading__container">
          <div class="mainTopLs-heading__heading">
            <h2 class="mainTopLs-heading__heading-EN"><?php the_lang_word('top_4');?></h2>
            <h3 class="mainTopLs-heading__heading-JP"><?php the_lang_word('top_5');?></h3>
          </div> <!-- /.mainTopLs-heading__heading -->
          <div class="mainTopLs-heading__content">
            <h4 class="mainTopLs-heading__content-heading"><?php the_lang_word('top_6');?></h4>
            <p class="mainTopLs-heading__content-desc"><?php the_lang_word('top_7');?></p>
            <p class="mainTopLs-heading__content-desc"><?php the_lang_word('top_8');?></p>
          </div> <!-- /.mainTopLs-heading__content -->
        </div> <!-- /.mainTopLs-heading__container -->
      </section> <!-- /.mainTopLs-heading -->
      <section class="mainTopLs-bgImg mainLs-bgImg"></section>
      <section class="mainTopLs-content mainTopLs-content main-content mainLs-content">
        <div class="main-content__container mainTopLs-content__container mainLs-content__container" id="mainTopLs-content__container">
          <div class="mainLs-content__service mainTopLs-content__service">
            <a href="/ls-touchandpay?lang=<?php echo get_lang();?>" class="mainLs-content__service-eyeCatch mainTopLs-content__service-eyeCatch d-block vartical-center" style="background-image: url(assets/images/ls-single/touchandpay/1-1-KeyVisual_en.png)"></a>
            <div class="mainLs-content__service-heading">
              <h2 class="mainLs-content__service-heading"><a href="/ls-touchandpay?lang=<?php echo get_lang();?>" class="mainLs-content__service-heading__link"><?php the_lang_word('ls-single-touchandpay_1');?></a></h2>
            </div> <!-- /.main-content__service-heading -->
            <?php /*
            <div class="mainLs-content__service-tags">
              <ul class="mainLs-content__service-tags__list">
                <li class="mainLs-content__service-tags__item d-inline-block"><a href="#" class="mainLs-content__service-tags__link"><?php the_lang_word('top_9');?></a></li>
                <li class="mainLs-content__service-tags__item d-inline-block"><a href="#" class="mainLs-content__service-tags__link"><?php the_lang_word('top_10');?></a></li>
              </ul>
            </div>
            */ ?>
          </div> <!-- /.main-content__service -->

          <div class="mainLs-content__service mainTopLs-content__service">
            <a href="/ls-sanin?lang=<?php echo get_lang();?>" class="mainLs-content__service-eyeCatch mainTopLs-content__service-eyeCatch text-center vartical-center" style="background-image: url(assets/images/ls-single/sanin/1-1-KeyVisual_pc.png)"></a>
            <div class="mainLs-content__service-heading">
              <h2 class="mainLs-content__service-heading"><a class="mainLs-content__service-heading__link"><?php the_lang_word('ls-single-sanin_2');?></a></h2>
            </div> <!-- /.main-content__service-heading -->
          </div> <!-- /.main-content__service -->

          <div class="mainLs-content__service mainTopLs-content__service">
            <a href="/ls-kyoto?lang=<?php echo get_lang();?>" class="mainLs-content__service-eyeCatch mainTopLs-content__service-eyeCatch text-center vartical-center" style="background-image: url(assets/images/ls-single/kyoto/1-1-KeyVisual_pc.png)"></a>
            <div class="mainLs-content__service-heading">
              <h2 class="mainLs-content__service-heading"><a class="mainLs-content__service-heading__link"><?php the_lang_word('ls-single-kyoto_2');?></a></h2>
            </div> <!-- /.main-content__service-heading -->
          </div> <!-- /.main-content__service -->

          <div class="mainLs-content__service mainTopLs-content__service">
            <a href="/ls-kyushu?lang=<?php echo get_lang();?>" class="mainLs-content__service-eyeCatch mainTopLs-content__service-eyeCatch text-center vartical-center" style="background-image: url(assets/images/ls-single/kyushu/1-1-KeyVisual_pc.png)"></a>
            <div class="mainLs-content__service-heading">
              <h2 class="mainLs-content__service-heading"><a class="mainLs-content__service-heading__link"><?php the_lang_word('ls-single-kyushu_2');?></a></h2>
            </div> <!-- /.main-content__service-heading -->
          </div> <!-- /.main-content__service -->

        </div> <!-- /.mainLs-content__container -->
      </section> <!-- /.main-content -->
      <?php /*
      <section class="mainTopLs-link">
        <a href="/ls?lang=<?php echo get_lang();?>" class="mainTopLs-link__btn"><?php the_lang_word('top_12');?> <span class="mainTopLs-link__btn-arrow"><img src="/assets/images/link_arrow_right.png"></span></a>
      </section> <!-- /.main-link -->
      */?>

      <?php /*
      <section class="mainTopTopics-heading" id="topics">
        <div class="mainTopTopics-heading__container">
          <h2 class="mainTopTopics-heading__EN"><?php the_lang_word('top_13');?></h2>
        </div> <!-- /.mainTopTopics-heading__container -->
      </section> <!-- /.mainTopTopics-heading -->
      <section class="main-content mainTopics-contnet topics">
        <div class="main-content__container mainTopics-content__container topics-container d-md-flex flex-md-wrap">
          <?php for ($i = 0; $i < 4; $i++) :?>
          <article class="mainTopics-content__article topics-article">
            <div class="topics-article__container row">
              <a href="#" class="topics-article__eyeCatch col-5 d-block" style="background-image: url(assets/images/topics/topics-sampleEyecatch.png)">
              </a> <!-- /.topics-article__eyeCatch -->
              <div class="topics-article__content col-7">
                <p class="topics-article__content-duration">2018/12/31(金) - 2019/1/2(日)</p>
                <h2 class="topics-article__content-title"><a href="" class="topics-article__content-title__link" target="_brank">MIDTOWN OPEN THE PARK 2018</a></h2>
                <p class="topics-article__content-desc"><a href="#" class="topics-article__content-desc__link" target="_brank">初夏を楽しむイベントが満載</a></p>
              </div> <!-- /.topics-article__content -->
            </div> <!-- /.topics-article__container -->
          </article> <!-- /.topics-article -->
          <?php endfor;?>
        </div> <!-- /.main-content__container -->
      </section> <!-- /.main-content -->
      <section class="mainTopTopics-link">
        <a href="/topics?lang=<?php echo get_lang();?>" class="mainTopTopics-link__btn"><?php the_lang_word('top_12');?> <span class="mainTopTopics-link__btn-arrow">&gt;</span></a>
      </section> <!-- /.main-link -->
      */?>
    </div> <!-- /.mainTop-container -->
  </main>

<?php require '../page_parts/footer.php' ?>