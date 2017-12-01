<?php
require_once 'loginheader.php';
require_once 'header.php';
// define('_PAGE_TPL');
$page_title = '首頁';

// 下面是對op 和 sn 作變數過濾
$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int) ($_REQUEST['sn']) : 0;
switch ($op) {

    default:
        // 寫單篇文章要看sn
        // list_sn();
        if ($sn) {
            show_article($sn);
            $op = 'show_article';

        } else {
            list_article();
            $op = 'list_article';

        }
        break;
}

require_once 'footer.php';
// $smarty->display('index.tpl');

// 顯示多篇標題 w2
function list_article()
{
    global $db, $smarty;
    $sql    = "SELECT * FROM `article` ORDER BY `update_time` DESC LIMIT 0,9";
    $result = $db->query($sql) or die($db->error);
    $all    = [];
    $i      = 0;
    //while是迴圈要讀取多筆資料用
    while ($data = $result->fetch_assoc()) {
        $all[$i] = $data;
        // stip_tags是因為要把網頁標籤語法拿掉 因為在ekeditor會有html標籤產生   mb_substr 前面的mb有加就是字數 沒加就是位元
        $all[$i]['summary'] = mb_substr(strip_tags($data['content']), 0, 75);
        $i++;
    }
    // die(var_export($all));
    $smarty->assign('all', $all);
}
