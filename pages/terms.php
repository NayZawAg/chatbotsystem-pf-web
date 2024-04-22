<?php 

require '../lib/functions.php';
require '../page_parts/header.php';
?> 

  <main class="main mainPrivacy">
    <section class="main-heading">
      <h1 class="main-heading__title"><?php the_lang_word('common_3');?></h1>
    </section> <!-- /.main-heading -->

    <div class="main-container">
      <section class="main-content sampleContents">
        <div class="privacy-header">
          <h2 class="text-center"><?php the_lang_word('terms_title');?></h2>
          <p class="revision_date text-right"><?php the_lang_word('terms_revision_date');?></p>
        </div>
        <div class="privacy-content">
          <p class="privacy-content-subtitle"><?php the_lang_word('terms_section1_title');?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('terms_section1_1'); ?><br>
            <?php the_lang_word('terms_section1_2'); ?><br>
            <?php the_lang_word('terms_section1_3'); ?><br>
            <?php the_lang_word('terms_section1_4'); ?>
          </p>

          <p class="privacy-content-subtitle"><?php the_lang_word('terms_section2_title'); ?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('terms_section2_1'); ?><br>
            <?php the_lang_word('terms_section2_2'); ?>
          </p>

            <ol>
              <li><?php the_lang_word('terms_section2_3'); ?></li>
              <li><?php the_lang_word('terms_section2_4'); ?></li>
            </ol>

          <p class="privacy-content-text">
            <?php the_lang_word('terms_section2_5'); ?><br>
            <?php the_lang_word('terms_section2_6'); ?>
          </p>

          <p class="privacy-content-subtitle"><?php the_lang_word('terms_section3_title'); ?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('terms_section3_1'); ?>
          </p>

          <p class="privacy-content-subtitle"><?php the_lang_word('terms_section4_title'); ?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('terms_section4_1'); ?><br>
            <?php the_lang_word('terms_section4_2'); ?><br>
            <?php the_lang_word('terms_section4_3'); ?>
          </p>

          <p class="privacy-content-subtitle"><?php the_lang_word('terms_section5_title'); ?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('terms_section5_1'); ?>
          </p>

          <p class="privacy-content-subtitle"><?php the_lang_word('terms_section6_title'); ?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('terms_section6_1'); ?><br>
            <?php the_lang_word('terms_section6_2'); ?><br>
            <?php the_lang_word('terms_section6_3'); ?><br>
            <?php the_lang_word('terms_section6_4'); ?>
          </p>

          <p class="privacy-content-subtitle"><?php the_lang_word('terms_section7_title'); ?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('terms_section7_1'); ?>
          </p>

          <p class="privacy-content-subtitle"><?php the_lang_word('terms_section8_title'); ?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('terms_section8_1'); ?><br>
            <?php the_lang_word('terms_section8_2'); ?><br>
            <?php the_lang_word('terms_section8_3'); ?>
          </p>

          <p class="privacy-content-subtitle"><?php the_lang_word('terms_section9_title'); ?></p>
          <p class="privacy-content-text"><?php the_lang_word('terms_section9_1'); ?></p>

          <p class="privacy-content-subtitle"><?php the_lang_word('terms_section10_title'); ?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('terms_section10_1'); ?><br>
            <?php the_lang_word('terms_section10_2'); ?><br>
            <?php the_lang_word('terms_section10_3'); ?><br>
            <?php the_lang_word('terms_section10_4'); ?>
          </p>

          <p class="privacy-content-subtitle"><?php the_lang_word('terms_section11_title'); ?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('terms_section11_1'); ?><br>
            <?php the_lang_word('terms_section11_2'); ?><br>
            <?php the_lang_word('terms_section11_3'); ?><br>
            <?php the_lang_word('terms_section11_4'); ?>
          </p>

          <p class="privacy-content-subtitle"><?php the_lang_word('terms_section12_title'); ?></p>
          <p class="privacy-content-text">
            <?php the_lang_word('terms_section12_1'); ?><br>
            <?php the_lang_word('terms_section12_2'); ?>
          </p>
        </div>
      </section>
    </div> <!-- /.main-container -->
  </main> <!-- /.main -->

<?php require '../page_parts/footer.php' ?>