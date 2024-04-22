<?php 
require '../lib/functions.php';
// TODO: topics開放する時に下記 location は削除する
header('location: /?lang=' . get_lang());
require '../page_parts/header.php';
?>

  <main class="main mainTopics">

    <section class="main-heading mainTopics-heading">
      <h1 class="main-heading__title main-heading__title-en main-heading__title-red">TOPICS</h1>
      <h1 class="main-heading__title main-heading__title-jp main-heading__title-red">トピックス</h1>
    </section> <!-- /.main-heading -->

    <div class="main-container mainTopics-container">
      <section class="main-content mainTopics-contnet topics">
        <div class="main-content__container mainTopics-content__container topics-container d-md-flex flex-md-wrap">

          <?php for($i = 0; $i < 4; $i++): ?>
          <article class="mainTopics-content__article topics-article">
            <div class="topics-article__container row">
              <a href="#" class="topics-article__eyeCatch col-5 d-block" style="background-image: url(assets/images/topics/topics-sampleEyecatch.png)">
              </a> <!-- /.topics-article__eyeCatch -->
              <div class="topics-article__content col-7">
                <p class="topics-article__content-duration">2018/12/31(金) - 2019/1/2(日)</p>
                <h2 class="topics-article__content-title"><a href="#" class="topics-article__content-title__link" target="_brank">MIDTOWN OPEN THE PARK 2018</a></h2>
                <p class="topics-article__content-desc"><a href="#" class="topics-article__content-desc__link" target="_brank">初夏を楽しむイベントが満載</a></p>
              </div> <!-- /.topics-article__content -->
            </div> <!-- /.topics-article__container -->
          </article> <!-- /.topics-article -->
          <?php endfor;?>

        </div> <!-- /.main-content__container -->
      </section> <!-- /.main-content -->
    </div> <!-- /.main-container -->
  </main> <!-- /.main -->


<?php require '../page_parts/footer.php' ?>