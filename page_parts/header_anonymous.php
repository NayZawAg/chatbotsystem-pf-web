<?php require 'head.php';?>

  <header class="header header-wh" id="header">
    <div class="header-container l-container">
      <div class="header-language">
        <img src="/assets/images/header/language.png" class="header-language__img">
        <ul id="header-language__list" class="header-language__list">
          <li class="header-language__item" value=""><span class="header-language__selected"><?php get_selected_lang_name();?></span></li>
          <li class="header-language__item" value=""><a href="<?php echo str_replace(array('.php'), array(''), $_SERVER['SCRIPT_NAME']); ?>" class="header-language__link"><?php the_lang_word('ja');?></a></li>
          <li class="header-language__item" value=""><a href="<?php echo str_replace(array('.php'), array(''), $_SERVER['SCRIPT_NAME']); ?>?lang=en" class="header-language__link"><?php the_lang_word('en');?></a></li>
        </ul>
      </div>
    </div>
  </header>

