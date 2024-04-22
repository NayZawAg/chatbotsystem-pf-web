  <?php if (empty($_SESSION['allow_cookies']['first'])) :?>
  <div class="container-fluid check-cookie fixed-top" style="z-index: 999998">
    <div class="row">
      <div class="col-md-10 col-sm-12 col-xs-12">
        <p class="check-cookie_text"><?php the_lang_word('cookie_1');?></p>
      </div>
      <div class="col-md-2 col-sm-12 col-xs-12 check-cookie_btn-area">
        <button type="button" id="set-cookie" class="btn btn-cookie form-control"><?php the_lang_word('cookie_2');?></button>
      </div>
    </div>
  </div>
  <?php endif;?>
  <!-- モーダル・ダイアログ -->
  <div class="modal fade cookie-modal" id="cookieModal" tabindex="-1" style="z-index: 999999">
    <div class="modal-dialog">
      <div class="modal-content cookie-modal-content">
        <div class="modal-header">
          <h4 class="modal-subtitle">Japan Omotenashi Conciege</h3>
          <h3 class="modal-title">withJorge</h3>
        </div>
        <div class="modal-body">
          <p>
            <?php the_lang_word('cookie_3'); ?>
          </p>
          <h5><?php the_lang_word('cookie_7');?></h5>
          <p><?php the_lang_word('cookie_4');?></p>
          <h5><?php the_lang_word('cookie_8');?></h5>
          <div class="cookie-checklist">
            <table style="width:100%;margin-bottom:20px;">
              <tbody>
                <tr>
                  <td style="width:5%;vertical-align: top"><input type="checkbox" name="allow_cookies[]" id="cookie-google" value="google" <?php if (isset($_SESSION['allow_list']['google']) == true):?>checked="checked"<?php endif;?> /></td>
                  <td style="width:95%" for="cookie-google">
                    <?php the_lang_word('cookie_5');?><br>
                    <?php the_lang_word('cookie_6');?><br>
                    <a href="https://www.google.com/analytics/learn/privacy.html" target="_blank">https://www.google.com/analytics/learn/privacy.html</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" id="save-cookie-list" class="btn-cookie-save form-control"><?php the_lang_word('cookie_7');?> <span class="btn-cookie-save-arrow"><img src="/assets/images/link_arrow_right.png"></span></button>
        </div>
      </div>
    </div>
  </div>