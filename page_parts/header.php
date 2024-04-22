<?php require 'head.php';?>
  <?php require 'cookie_modal.php';?>

  <header class="header header-wh" id="header">
    <div class="header-container l-container">
      <a class="header-logo header-logo__mobile" href="/?lang=<?php echo get_lang();?>"><img class="header-logo__image" src="/assets/images/logo-mobile.png" alt="withjorge" width="150px"></a>
      <a class="header-logo header-logo__desktop" href="/?lang=<?php echo get_lang();?>"><img class="header-logo__image" src="/assets/images/logo.png" alt="withjorge" width="150px"></a>
      <div class="header-language">
        <img src="/assets/images/header/language.png" class="header-language__img">
        <ul id="header-language__list" class="header-language__list">
          <li class="header-language__item" value=""><span class="header-language__selected"><?php get_selected_lang_name();?></span></li>
          <li class="header-language__item" value=""><a href="/<?php echo str_replace(array('.php', '/'), array('', ''), $_SERVER['SCRIPT_NAME']); ?>" class="header-language__link"><?php the_lang_word('ja');?></a></li>
          <li class="header-language__item" value=""><a href="/<?php echo str_replace(array('.php', '/'), array('', ''), $_SERVER['SCRIPT_NAME']); ?>?lang=en" class="header-language__link"><?php the_lang_word('en');?></a></li>
          <li class="header-language__item" value=""><a href="/<?php echo str_replace(array('.php', '/'), array('', ''), $_SERVER['SCRIPT_NAME']); ?>?lang=zh-cn" class="header-language__link"><?php the_lang_word('zh-cn');?></a></li>
          <li class="header-language__item" value=""><a href="/<?php echo str_replace(array('.php', '/'), array('', ''), $_SERVER['SCRIPT_NAME']); ?>?lang=zh-tw" class="header-language__link"><?php the_lang_word('zh-tw');?></a></li>
          <li class="header-language__item" value=""><a href="/<?php echo str_replace(array('.php', '/'), array('', ''), $_SERVER['SCRIPT_NAME']); ?>?lang=ko" class="header-language__link"><?php the_lang_word('ko');?></a></li>
        </ul>
      </div>
      <nav class="header-menu">
        <ul class="header-menu__list">
          <li class="header-menu__item"><a class="header-menu__link" href="<?php echo get_link('top');?>" onclick="$('body,html').animate({scrollTop: 0},500);">TOP</a></li>
          <li class="header-menu__item"><a class="header-menu__link active" href="<?php echo get_link('concept');?>"><?php the_lang_word('menu_1');?></a></li>
          <li class="header-menu__item"><a class="header-menu__link" href="<?php echo get_link('local-service');?>"><?php the_lang_word('menu_2');?></a></li>
          <li class="header-menu__item header-menu__item-business"><a class="header-menu__link header-menu__link-business" href="/biz-index?lang=<?php echo get_lang();?>"><?php 
          the_lang_word('common_1');?></a></li>
        </ul>
      </nav>
      
      <div class="header-hamburger">
        <a class="header-hamburger__menu header-hamburger__menu-normal" id="hamburger-btn">
          <span></span>
          <span></span>
          <span></span>
        </a>
      </div>
    </div>
  </header>

  <div class="dropdown-menu" id="dropdown-menu">
    <ul class="dropdown-menu__list">
      <li class="dropdown-menu__item"><a class="dropdown-menu__link" href="<?php echo get_link('top');?>">TOP</a></li>
      <li class="dropdown-menu__item"><a class="dropdown-menu__link" href="<?php echo get_link('concept');?>"><?php the_lang_word('menu_1');?></a></li>
      <li class="dropdown-menu__item"><a class="dropdown-menu__link" href="<?php echo get_link('local-service');?>"><?php the_lang_word('menu_2');?></a></li>
    </ul>
  </div> <!-- /.dropdown-menu -->

  <div class="l-dropdown-overlay" id="dropdown-overlay"></div>
