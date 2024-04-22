<?php 
require '../lib/functions.php';
require '../page_parts/header.php';
?> 

<?php 
if (get_lang() == 'ja') {
    require '../page_parts/anonymous/index/ja.php'; 
} else {
    require '../page_parts/anonymous/index/en.php'; 
}
 
?>

<?php require '../page_parts/footer.php'; ?>