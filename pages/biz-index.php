<?php 
require '../lib/functions.php';
require '../page_parts/biz-header.php';
?>

  <main class="main mainTop">
    <div class="mainTop-container">

      <section class="mainTop-firstView mainTop-firstViewBiz" id="top">
        <div class="mainTop-firstView__content">
          <div class="mainTop-firstView__content-logo">
            <h1 class="mainTop-firstView__content-logo__jp">
              <?php the_lang_word('top_1');?>
            </h1>
            <br>
            <div class="mainTop-firstView__content-logo__en">
              <p class="mainTop-firstView__content-logo__en-sm"><?php the_lang_word('top_2');?></p>
              <h1 class="mainTop-firstView__content-logo__en-lg"><?php the_lang_word('sitename');?></h1>
            </div> <!-- /.mainTop-firstView__content-logo__en -->
          </div> <!-- /.mainTop-firstView__content-logo -->
          <?php /*
          <div class="mainTop-firstView__content-search">
            <form id="search" action="#" method="post">
              <input id="submitBtn" type="image" class="submitBtn" src="assets/images/top/search.png">
              <input type="text" name="q" id="transcript" placeholder="質問する" />
              <img onclick="startDictation()" src="assets/images/top/microphone.png" class="recBtn">
            </form>
          </div>
          */ ?>
        </div> <!-- /.mainTop-firstView__content -->
      </section> <!-- /.mainTop-firstView -->

      <section class="mainTop-concept" id="concept">
        <div class="mainTop-concept__containerBiz">
          <div class="mainTop-concept__content animated">
            <h3 class="mainTop-concept__content-headingEn"><?php the_lang_word('top_48');?></h3>
            <h2 class="mainTop-concept__content-headingJp"><?php the_lang_word('top_4');?></h2>
            <p class="mainTop-concept__content-desc">
              <?php the_lang_word('top_5');?><br>
              <?php the_lang_word('top_6');?><br>
              <?php the_lang_word('top_7');?><br>
              <?php the_lang_word('top_8');?><br><br>
              <?php the_lang_word('top_9');?><br>
              <span style="font-size:14px"><?php the_lang_word('top_10');?></span>
            </p>
          </div> <!-- /.mainTop-concept__content -->
        </div> <!-- /.mainTop-concept__container -->
      </section> <!-- /.mainTop-concept -->




      <section class="mainTopLs-heading" id="local-service">
        <div class="mainTopLs-heading__container">
          <div class="mainTopLs-heading__content">
            <img src="/assets/images/top-biz/<?php echo get_lang();?>_top_drawing.png" class="img" style="width:100%;" usemap="#aboutwithjorge" />
            <map name="aboutwithjorge">
              <area shape="rect" coords="0,220,285,140" href="/assets/images/top-biz/<?php echo get_lang();?>_slide01.png" data-lightbox="aboutwithjorge" alt="共通決済基盤">
              <area shape="rect" coords="655,385,895,300" href="/assets/images/top-biz/<?php echo get_lang();?>_slide02.png" data-lightbox="aboutwithjorge" alt="外部情報機関のデータ利用">
              <area shape="rect" coords="360,110,600,30" href="/assets/images/top-biz/<?php echo get_lang();?>_slide03.png" data-lightbox="aboutwithjorge" alt="AI モジュール">
              <!--<area shape="rect" coords="1240,330,930,225" href="/assets/images/top-biz/slide01.png" data-lightbox="image-3"  data-title="SNS" alt="SNS">-->
              <area shape="rect" coords="60,385,300,300" href="/assets/images/top-biz/<?php echo get_lang();?>_slide04.png" data-lightbox="aboutwithjorge" alt="チャットボット">
              <area shape="rect" coords="300,660,650,140" href="/assets/images/top-biz/<?php echo get_lang();?>_slide05.png" data-lightbox="aboutwithjorge" alt="外部情報機関のデータ利用">
            </map>

            <!--<a data-toggle="modal" data-target="#slide-modal"><img src="/assets/images/top-biz/top_drawing.png" class="img" style="width:100%;" /></a>-->
          </div> <!-- /.mainTopLs-heading__content -->
        </div> <!-- /.mainTopLs-heading__container -->
      </section> <!-- /.mainTopLs-heading -->
      <section class="mainTopLs-bgImg mainLs-bgImg"></section>
      <section class="bizTop-content main-content mainLs-content" id="topics">
        <div class="main-content__container mainTopLs-content__container mainLs-content__container">
          <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
              <h2 class="mainTopTopics-heading__WH text-center">
                <?php the_lang_word('top_12');?>
              </h2>

              <div class="top-biz-box">
                <p class="text-center">
                  <?php the_lang_word('top_13');?>
                </p>
               <section class="mainTopTopics-link">
                  <a href="/biz-contact?lang=<?php echo get_lang();?>" class="mainTopTopics-link__btn"><?php the_lang_word('top_14');?> <span class="mainTopTopics-link__btn-arrow"><img src="/assets/images/link_arrow_right.png"></span></a>
                </section> <!-- /.main-link -->
              </div>
            </div>
          </div>
        </div> <!-- /.mainLs-content__container -->
      </section> <!-- /.main-content -->
    </div> <!-- /.mainTop-container -->
  </main>
<?php require '../page_parts/biz-footer.php' ?>