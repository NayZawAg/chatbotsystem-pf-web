<?php
require '../lib/functions.php';

$post = $_POST;

$cookie_list = cookie_list();

if ($post['type'] == '1') {
    // 1の場合はCookie利用をtrueとする
    foreach ($cookie_list as $v) {
        $_SESSION['allow_list'][$v] = true;
        $_SESSION['allow_cookies'][$v] = true;
    }
    $_SESSION['allow_cookies']['first'] = true;
} elseif ($post['type'] == '2') {
    // 2の場合はcookie のlist選択
    foreach ($cookie_list as $v) {
        if (in_array($v, $post['allow_list'])) {
            $_SESSION['allow_list'][$v] = true;
            $_SESSION['allow_cookies'][$v] = true;
        } else {
            $_SESSION['allow_list'][$v] = false;
            $_SESSION['allow_cookies'][$v] = false;
        }
    }
    $_SESSION['allow_cookies']['first'] = true;
}

header('content-type: application/json; charset=utf-8');

// TODO: json_encodeが使えないため、このような仕様にしている。
// TODO: 現状 google のみをチェックしているので良いが、json_encodeを使えるようにした方が良い。
if (isset($_SESSION['allow_list']['google'])) {
    echo 1;
} else {
    echo 0;

}
exit();