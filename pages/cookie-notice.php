<?php 

require '../lib/functions.php';
require '../page_parts/header.php';
?> 
  <main class="main mainPrivacy">
    <section class="main-heading">
      <h1 class="main-heading__title"><?php the_lang_word('common_5'); ?></h1>
    </section> <!-- /.main-heading -->

    <div class="main-container">
      <section class="main-content sampleContents">
        <div class="privacy-header">
          <h2 class="text-center"><?php the_lang_word('cookie_notice_title');?></h2>
          <p class="revision_date text-right"><?php the_lang_word('cookie_notice_revision_date');?></p>
        </div>
        <div class="privacy-content">
          <p><?php the_lang_word('cookie_notice_section1');?></p>
          <p>
            <?php the_lang_word('cookie_notice_section2_1');?><br>
            <?php the_lang_word('cookie_notice_section2_2');?>
          </p>
          <p>
            <?php the_lang_word('cookie_notice_section3_1');?><br>
            <?php the_lang_word('cookie_notice_section3_2');?><br>
            <?php the_lang_word('cookie_notice_section3_3');?><br>
            <?php the_lang_word('cookie_notice_section3_4');?>
          </p>
          <p><?php the_lang_word('cookie_notice_section4');?></p>
          <p class="privacy-content-subtitle"><?php the_lang_word('cookie_notice_section5_title');?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('cookie_notice_section5_1'); ?><br>
            <?php the_lang_word('cookie_notice_section5_2'); ?>
          </p>
          <ul class="list-style">
            <li><?php the_lang_word('cookie_notice_section5_2_1_subtitle');?></li>
            <li class="list-content"><?php the_lang_word('cookie_notice_section5_2_1_1');?></li>
            <li><?php the_lang_word('cookie_notice_section5_2_2_subtitle');?></li>
            <li class="list-content"><?php the_lang_word('cookie_notice_section5_2_2_1');?></li>
            <li><?php the_lang_word('cookie_notice_section5_2_3_subtitle');?></li>
            <li class="list-content">
              <?php the_lang_word('cookie_notice_section5_2_3_1');?><br>
              <?php the_lang_word('cookie_notice_section5_2_3_2');?>
            </li>
          </ul>
          <p class="privacy-content-subtitle"><?php the_lang_word('cookie_notice_section6_title');?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('cookie_notice_section6_1'); ?>
          </p>
          <p class="privacy-content-subtitle"><?php the_lang_word('cookie_notice_section7_title');?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('cookie_notice_section7_1'); ?><br>
            <?php the_lang_word('cookie_notice_section7_2'); ?><br>
            <?php the_lang_word('cookie_notice_section7_3'); ?><br>
            <?php the_lang_word('cookie_notice_section7_4'); ?>
          </p>
          <p class="privacy-content-subtitle"><?php the_lang_word('cookie_notice_section8_title');?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('cookie_notice_section8_1'); ?>
          </p>
          <p class="privacy-content-subtitle"><?php the_lang_word('cookie_notice_section9_title');?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('cookie_notice_section9_1'); ?><br>
            <?php the_lang_word('cookie_notice_section9_2'); ?>
          </p>
          <p class="privacy-content-subtitle"><?php the_lang_word('cookie_notice_section10_title');?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('cookie_notice_section10_1'); ?><br>
            <?php the_lang_word('cookie_notice_section10_2'); ?>
          </p>
          <p class="privacy-content-lastmessage">
            <?php the_lang_word('cookie_notice_section11_1'); ?><br>
            <?php the_lang_word('cookie_notice_section11_2'); ?>
          </p>
        </div>


      </section>
    </div> <!-- /.main-container -->
  </main> <!-- /.main -->

<?php require '../page_parts/footer.php' ?>