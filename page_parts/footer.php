
  <footer class="footer">
    <div class="footer-breadList">
      <div class="footer-breadList__container">
        <ul class="footer-breadList__list">
          <li class="footer-breadList__item d-inline-block">
            <a href="/?lang=<?php echo get_lang();?>" class="footer-breadList__link"><img src="/assets/images/footer/logo_min.png" class="footer-breadList__link-img" alt="withJorge"></a>
          </li>
          <?php foreach((array)get_breadcrumbs() as $v) :?>
          <li class="footer-breadList__item d-inline-block">
            <?php if ($v['name'] == 'LOCAL SERVICE DETAIL'): ?>
              <a href="/<?php echo $v['url'];?>" class="footer-breadList__link"><?php echo $page_title;?></a>
            <?php elseif(empty($v['url'])) :?>
              <span class="footer-breadList__link"><?php echo $v['name'];?></span>
            <?php else: ?>
              <a href="<?php echo $v['url'];?>?lang=<?php echo get_lang();?>" class="footer-breadList__link"><?php echo $v['name'];?></a>
            <?php endif;?>
          </li>
          <?php endforeach;?>
        </ul>
      </div> <!-- /.footer-breadList__container -->
    </div> <!-- /.footer-breadList -->

    <div class="footer-businessLink">
      <div class="footer-businessLink__container">
        <a href="/biz-index?lang=<?php echo get_lang();?>" class="footer-businessLink__btn">
          <?php the_lang_word('common_1'); ?> <span class="footer-businessLink__btn-arrow"><img src="/assets/images/link_arrow_right_red.png"></span>
        </a>
      </div> <!-- /.footer-businessLink__container -->
    </div> <!-- /.footer-breadlist -->

    <div class="footer-nav">
      <div class="footer-nav__container">
        <ul class="footer-nav__list">
          <li class="footer-nav__item d-md-inline-block">
            <a href="/company?lang=<?php echo get_lang();?>" class="footer-nav__link"><?php the_lang_word('common_2');?><img src="/assets/images/footer/footer-nav__linkimg.png" alt="" class="footer-nav__linkimg"></a>
          </li>
          <li class="footer-nav__item d-md-inline-block">
            <a href="/terms?lang=<?php echo get_lang();?>" class="footer-nav__link"><?php the_lang_word('common_3');?><img src="/assets/images/footer/footer-nav__linkimg.png" alt="" class="footer-nav__linkimg"></a>
          </li>
          <li class="footer-nav__item d-md-inline-block">
            <a href="/privacy?lang=<?php echo get_lang();?>" class="footer-nav__link"><?php the_lang_word('common_4');?><img src="/assets/images/footer/footer-nav__linkimg.png" alt="" class="footer-nav__linkimg"></a>
          </li>
          <li class="footer-nav__item d-md-inline-block">
            <a href="/contact?lang=<?php echo get_lang();?>" class="footer-nav__link"><?php the_lang_word('common_7');?><img src="/assets/images/footer/footer-nav__linkimg.png" alt="" class="footer-nav__linkimg"></a>
          </li>
          <li class="footer-nav__item d-md-inline-block">
            <a href="/cookie-notice?lang=<?php echo get_lang();?>" class="footer-nav__link"><?php the_lang_word('common_8');?><img src="/assets/images/footer/footer-nav__linkimg.png" alt="" class="footer-nav__linkimg"></a>
          </li>
          <li class="footer-nav__item d-md-inline-block">
            <a href="/anonymous?lang=<?php echo get_lang();?>" class="footer-nav__link"><?php the_lang_word('common_9');?><img src="/assets/images/footer/footer-nav__linkimg.png" alt="" class="footer-nav__linkimg"></a>
          </li>
        </ul>
      </div> <!-- /.footer-nav__container -->
    </div> <!-- /.footer-nav -->
    <div class="footer-logo">
      <div class="footer-logo__container">
        <a href="/?lang=<?php echo get_lang();?>" class="footer-logo__link"><img src="/assets/images/footer/footer-logo__link-img.png" class="footer-logo__link-img"></a>
      </div> <!-- /.footer-logo__container -->
    </div>

    <p class="pageTop" id="to_top"><span class="hover to_top"><img src="/assets/images/top.png" alt="PAGE TOP" onclick="$('body,html').animate({scrollTop: 0},500);"></span></p>
  </footer>

<?php require 'foot.php';?>
