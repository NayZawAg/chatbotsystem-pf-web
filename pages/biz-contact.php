<?php 
require '../lib/functions.php';
require '../lib/contact_commit.php';
require '../page_parts/biz-header.php';
?>
  <main class="main mainContact">
    <div class="main-heading">
      <h1 class="main-heading__title"><?php the_lang_word('contact_1');?></h1>
    </div> <!-- /.main-heading -->
    <div class="main-container">
      <div class="main-content mainContact-content">
        <?php if (isset($errors['global'])) :?>
        <div>
          <p style="color:red"><?php echo $errors['global'];?></p>
        </div>
        <?php endif;?>
        <form action="/biz-contact?lang=<?php echo get_lang();?>" method="post" role="form" class="contactUserForm">
          <p><?php the_lang_word('contact_12');?></p>
          <div class="contactUserForm-organization contactUserForm-item">
            <label for="" class="control-label"><?php the_lang_word('contact_2');?></label>
            <input type="" name="contact[organization]" value="<?php if (isset($contact['organization'])) {echo $contact['organization'];}?>" class="form-control" id="" placeholder="">
            <?php if (isset($errors['contact']['organization'])):?><div style="color:red"><?php echo $errors['contact']['organization'];?></div><?php endif;?>
          </div>
          <div class="contactUserForm-name contactUserForm-item">
            <label for="" class="control-label"><?php the_lang_word('contact_3');?></label>
            <input type="" name="contact[name]" value="<?php echo $contact['name']=$contact['name'];?>" class="form-control" id="" placeholder="">
            <?php if (isset($errors['contact']['name'])):?><div style="color:red"><?php echo $errors['contact']['name'];?></div><?php endif;?>
          </div>
          <div class="contactUserForm-email contactUserForm-item">
            <label for="" class="control-label center-label"><?php the_lang_word('contact_4');?><span class="require_mark">*</span></label>
            <input type="email" name="contact[mailaddress]" value="<?php echo $contact['mailaddress'];?>" class="form-control" id="" placeholder="">
            <?php if (isset($errors['contact']['mailaddress'])):?><div style="color:red"><?php echo $errors['contact']['mailaddress'];?></div><?php endif;?>
          </div>
          <div class="contactUserForm-subject contactUserForm-item">
            <label for="" class="control-label center-label"><?php the_lang_word('contact_5');?></label>
            <input type="" name="contact[subject]" value="<?php echo $contact['subject'];?>" class="form-control" id="" placeholder="">
            <?php if (isset($errors['contact']['subject'])):?><div style="color:red"><?php echo $errors['contact']['subject'];?></div><?php endif;?>
          </div>
          <div class="contactUserForm-content contactUserForm-item">
            <label for="" class="control-label center-label"><?php the_lang_word('contact_6');?><span class="require_mark">*</span></label>
            <textarea rows="10" cols="60" name="contact[body]"><?php echo $contact['body'];?></textarea>
            <?php if (isset($errors['contact']['body'])):?><div style="color:red"><?php echo $errors['contact']['body'];?></div><?php endif;?>
          </div>
          <div class="contactUserForm-privacy contactUserForm-item d-flex flex-wrap">
            <div class="agreement">
              <p><?php the_lang_word('contact_10');?></p>
              <blockquote><?php the_lang_word('contact_11');?></blockquote>
            </div>
            <label>
              <input type="checkbox" name="contact[agree_privacy]" id="privacyagreement" value="1" autocomplete="off" required="required" <?php $contact_model->checked_checkbox('agree_privacy');?> />
              <?php the_lang_word('contact_8');?>
            </label>
            <?php if (isset($errors['contact']['agree_privacy'])):?><div style="color:red"><?php echo $errors['contact']['agree_privacy'];?></div><?php endif;?>
          </div>
          <input type="hidden" name="contact[user_type]" value="company" />
          <div class="contactUserForm-submit contactUserForm-item">
            <input type="submit" value="<?php the_lang_word('contact_9');?>" name="submitbtn" class="contactUserForm-submit__input" id="contactUserForm-submit__input">
          </div>  
        </form>  
      </div> <!-- /.main-content -->
    </div> <!-- /.main-container -->
  </main>


<?php require '../page_parts/biz-footer.php' ?>