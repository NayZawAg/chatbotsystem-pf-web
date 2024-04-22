<?php 
// 中国語、韓国語の場合は英語にリダイレクト
if (isset($_GET['lang']) && in_array($_GET['lang'], ['zh-cn', 'zh-tw', 'ko'])){
  header('location: /anonymous/tsunagaro-kyushu-project?lang=en');
}


require '../../lib/functions.php';
require '../../page_parts/header_anonymous.php';
?>


<?php 
if (get_lang() == 'ja') {
    require '../../page_parts/anonymous/tsunagaro-kyushu-project/ja.php'; 
} else {
    require '../../page_parts/anonymous/tsunagaro-kyushu-project/en.php'; 
}
 
?>

<script>
  $("body").css('background-color', '#F2F2F2');
</script>
<?php require '../../page_parts/foot.php'; ?>