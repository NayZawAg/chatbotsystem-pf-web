<?php 
require '../lib/functions.php';
require '../page_parts/header.php';
?> 

  <main class="main mainContact">
    <div class="main-heading">
      <h1 class="main-heading__title"><?php the_lang_word('quiry_complete_1');?></h1>
    </div> <!-- /.main-heading -->

    <div class="main-container">
      <div class="main-content mainContactComplete-content">

        <p><?php the_lang_word('quiry_complete_2');?></p>
        <a href="/?lang=<?php echo get_lang();?>" class="mainContactComplete-content__link"><?php the_lang_word('quiry_complete_3');?> <span class="mainContactComplete-content__link-arrow">&gt;</span></a>

      </div> <!-- /.main-content -->
    </div> <!-- /.main-container -->
  </main>

<?php require '../page_parts/footer.php' ?>