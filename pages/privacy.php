<?php 
require '../lib/functions.php';
require '../page_parts/header.php';
?> 


  <main class="main mainPrivacy">
    <section class="main-heading">
      <h1 class="main-heading__title"><?php the_lang_word('common_4');?></h1>
    </section> <!-- /.main-heading -->

    <div class="main-container">
      <section class="main-content sampleContents">
        <div class="privacy-header">
          <h2 class="text-center"><?php the_lang_word('privacy_title');?></h2>
          <p class="revision_date text-right"><?php the_lang_word('privacy_revision_date');?></p>
        </div>
        <div class="privacy-content">
          <p class="privacy-content-subtitle"><?php the_lang_word('privacy_section1_title');?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('privacy_section1_1'); ?>
          </p>
        </div>
        <div class="privacy-content">
          <p class="privacy-content-subtitle"><?php the_lang_word('privacy_section2_title');?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('privacy_section2_1'); ?>
          </p>
        </div>
        <div class="privacy-content">
          <ol class="privacy_list">
            <li class="pirvacy-content-paragraph-title"><?php the_lang_word('privacy_section2_1_subtitle'); ?></li>
            <ol>
              <li><?php the_lang_word('privacy_section2_1_1'); ?></li>
              <li><?php the_lang_word('privacy_section2_1_2'); ?></li>
              <li><?php the_lang_word('privacy_section2_1_3'); ?></li>
              <li><?php the_lang_word('privacy_section2_1_4'); ?></li>
            </ol>
            <li class="pirvacy-content-paragraph-title"><?php the_lang_word('privacy_section2_2_subtitle'); ?></li>
            <ul>
              <li><?php the_lang_word('privacy_section2_2_1'); ?></li>
            </ul>
            <ol>
              <li><?php the_lang_word('privacy_section2_2_2_subtitle');?></li>
              <ul>
                <li><?php the_lang_word('privacy_section2_2_2_1');?></li>
                <li><?php the_lang_word('privacy_section2_2_2_2');?></li>
                <li><?php the_lang_word('privacy_section2_2_2_3');?></li>
                <li><?php the_lang_word('privacy_section2_2_2_4');?></li>
                <li><?php the_lang_word('privacy_section2_2_2_5');?></li>
                <li><?php the_lang_word('privacy_section2_2_2_6');?></li>
              </ul>
              <li class="pirvacy-content-paragraph-title"><?php the_lang_word('privacy_section2_2_3_subtitle');?></li>
              <ul>
                <li><?php the_lang_word('privacy_section2_2_3_1');?></li>
              </ul>
              <li class="pirvacy-content-paragraph-title"><?php the_lang_word('privacy_section2_2_4_subtitle');?></li>
              <ul>
                <li><?php the_lang_word('privacy_section2_2_4_1');?></li>
                <li><?php the_lang_word('privacy_section2_2_4_2');?></li>
              </ul>
            </ol>

            <li class="pirvacy-content-paragraph-title"><?php the_lang_word('privacy_section2_3_subtitle');?></li>
            <ol>
              <li><?php the_lang_word('privacy_section2_3_1');?></li>
              <li><?php the_lang_word('privacy_section2_3_2');?></li>
              <li><?php the_lang_word('privacy_section2_3_3');?></li>
              <li><?php the_lang_word('privacy_section2_3_4');?></li>
              <?php if (get_lang() != 'ja'): ?>
                <li><?php the_lang_word('privacy_section2_3_5');?></li>
              <?php endif;?>
            </ol>
            <li class="pirvacy-content-paragraph-title"><?php the_lang_word('privacy_section2_4_subtitle');?></li>
            <ul>
              <li><?php the_lang_word('privacy_section2_4_1');?><li>
              <li><?php the_lang_word('privacy_section2_4_2');?><li>
            </ul>

            <li class="pirvacy-content-paragraph-title"><?php the_lang_word('privacy_section2_5_subtitle');?></li>
            <ul>
              <li><?php the_lang_word('privacy_section2_5_1');?></li>
            </ul>

            <li class="pirvacy-content-paragraph-title"><?php the_lang_word('privacy_section2_6_subtitle');?></li>
            <ul>
              <li><?php the_lang_word('privacy_section2_6_1');?></li>
            </ul>

            <li class="pirvacy-content-paragraph-title"><?php the_lang_word('privacy_section2_7_subtitle');?></li>
            <ul>
              <li><?php the_lang_word('privacy_section2_7_1');?></li>
            </ul>
          </ol>          
        </div>
        <div class="privacy-content">
          <p class="privacy-content-lastmessage">
            <?php the_lang_word('privacy_section3_1'); ?>
          </p>
        </div>

      </section>
    </div> <!-- /.main-container -->
  </main> <!-- /.main -->


<?php require '../page_parts/footer.php' ?>
