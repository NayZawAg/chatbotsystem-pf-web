<?php
ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 30);
// 3年間保持する
session_start(['cookie_lifetime' => 60 * 60 * 24 * 30 * 12 * 3]);

require_once('languages.php');
require_once('mail.php');

function get_site_url() {
  if (empty($_SERVER["HTTPS"])) {
    return 'http://'.$_SERVER["HTTP_HOST"];
  } else {
    return 'https://'.$_SERVER["HTTP_HOST"];
  }
}

function is_production() {
  if ($_SERVER["HTTP_HOST"] == 'www.withjorge.jp') {
    return true;
  }
  return false;
}

function cookie_list()
{
    $list = array(
        'google',
    );
    return $list;
}

function get_breadcrumbs()
{
    $script_name = $_SERVER['SCRIPT_NAME'];
    $result = array();
    switch (true) {
        case preg_match('/index\.php/', $script_name):
            $result = [
                [
                    'url' => '',
                    'name' => 'TOP'
                ]
            ];
            break;
        case preg_match('/ls\.php/', $script_name):
            $result = [
                [
                    'url' => '/',
                    'name' => 'TOP'
                ],
                [
                    'url' => '',
                    'name' => 'LOCAL SERVICE'
                ],
            ];
            break;
        case preg_match('/topics\.php/', $script_name):
            $result = [
                [
                    'url' => '/',
                    'name' => 'TOP'
                ],
                [
                    'url' => '',
                    'name' => 'TOPICS'
                ],
            ];
            break;
        case preg_match('/ls-single\.php/', $script_name):
            $result = [
                [
                    'url' => '/',
                    'name' => 'TOP'
                ],
                [
                    'url' => '',
                    'name' => 'LOCAL SERVICE'
                ],
                [
                    'url' => '',
                    'name' => 'LOCAL SERVICE DETAIL'
                ],
            ];
            break;
        case preg_match('/ls-touchandpay\.php/', $script_name):
            $result = [
                [
                    'url' => '/',
                    'name' => 'TOP'
                ],
                [
                    'url' => '',
                    'name' => get_lang_words()['ls-single-touchandpay_1'],
                ],
            ];
            break;
        case preg_match('/ls-kyoto\.php/', $script_name):
            $result = [
                [
                    'url' => '/',
                    'name' => 'TOP'
                ],
                [
                    'url' => '',
                    'name' => get_lang_words()['ls-single-kyoto_2'],
                ],
            ];
            break;
        case preg_match('/ls-kyushu\.php/', $script_name):
            $result = [
                [
                    'url' => '/',
                    'name' => 'TOP'
                ],
                [
                    'url' => '',
                    'name' => strip_tags(get_lang_words()['ls-single-kyushu_2']),
                ],
            ];
            break;
        case preg_match('/ls-sanin\.php/', $script_name):
            $result = [
                [
                    'url' => '/',
                    'name' => 'TOP'
                ],
                [
                    'url' => '',
                    'name' => strip_tags(get_lang_words()['ls-single-sanin_2']),
                ],
            ];
            break;
        case preg_match('/company\.php/', $script_name):
            $result = [
                [
                    'url' => '/',
                    'name' => 'TOP'
                ],
                [
                    'url' => '',
                    'name' => get_word_list()[get_user_type()][get_lang()]['common_2'],
                ],
            ];
            break;
        case preg_match('/terms\.php/', $script_name):
            $result = [
                [
                    'url' => '/',
                    'name' => 'TOP'
                ],
                [
                    'url' => '',
                    'name' => get_word_list()[get_user_type()][get_lang()]['common_3'],
                ],
            ];
            break;
        case preg_match('/biz-contact\.php/', $script_name):
            $result = [
                [
                    'url' => '/biz-index',
                    'name' => 'TOP'
                ],
                [
                    'url' => '',
                    'name' => get_word_list()[get_user_type()][get_lang()]['common_6'],
                ],
            ];
            break;

        case preg_match('/contact\.php/', $script_name):
            $result = [
                [
                    'url' => '/',
                    'name' => 'TOP'
                ],
                [
                    'url' => '',
                    'name' => get_word_list()[get_user_type()][get_lang()]['common_7'],
                ],
            ];
            break;
        case preg_match('/privacy\.php/', $script_name):
            $result = [
                [
                    'url' => '/',
                    'name' => 'TOP'
                ],
                [
                    'url' => '',
                    'name' => get_word_list()[get_user_type()][get_lang()]['common_4'],
                ],
            ];
            break;
        case preg_match('/cookie-notice\.php/', $script_name):
            $result = [
                [
                    'url' => '/',
                    'name' => 'TOP'
                ],
                [
                    'url' => '',
                    'name' => get_word_list()[get_user_type()][get_lang()]['common_8'],
                ],
            ];
            break;
        case preg_match('/anonymous\.php/', $script_name):
            $result = [
                [
                    'url' => '/',
                    'name' => 'TOP'
                ],
                [
                    'url' => '',
                    'name' => get_word_list()[get_user_type()][get_lang()]['common_9'],
                ],
            ];
            break;
        default:
            $result = [
                [
                    'url' => '',
                    'name' => 'TOP'
                ]
            ];
            break;
    }

    return $result;
}
