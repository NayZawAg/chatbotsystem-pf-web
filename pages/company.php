<?php 
require '../lib/functions.php';
require '../page_parts/header.php';
?>  

  <main class="main mainCompany">
    <div class="main-heading">
      <h1 class="main-heading__title"><?php the_lang_word('company_1');?></h1>
    </div> <!-- /.main-heading -->

    <div class="main-container">
      <div class="main-content mainCompany-content">
        <p class=""><?php the_lang_word('company_2');?></p>
        <div class="mainCompany-content__banner d-flex flex-wrap">
          <div class="mainCompany-content__banner-meti">
            <img src="assets/images/company/logo_meti.png">
          </div>
          <div class="mainCompany-content__banner-deloitte">
            <img src="assets/images/company/logo_deloitte.png" class="logo_deloitte">
          </div>
        </div> <!-- /.mainCompany-content__banner -->
        <p><?php the_lang_word('company_3');?></p>
        <p><?php the_lang_word('company_4');?></p>
      </div> <!-- /.main-content -->
    </div> <!-- /.main-container -->
  </main>

<?php require '../page_parts/footer.php' ?>