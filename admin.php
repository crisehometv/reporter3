<?php
// session_start();
// require_once 'function.php';
// require_once 'smarty/libs/Smarty.class.php';
// $smarty = new Smarty;
// $db     = link_db();
require_once 'header.php';
// define('_PAGE_TPL');
$page_title = '文章輸入';

$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int) ($_REQUEST['sn']) : 0;
switch ($op) {
    case 'insert':
        $sn = insert_article();
        header("location: index.php?sn={$sn}");
        exit;
    case 'delete_article':
        delete_article($sn);
        header("location:index.php");
        exit;
    case "article_form":
        break;
    case "modify_article":
        show_article($sn);
        break;
    case 'update':
        update_article($sn);
        header("location: index.php?sn={$sn}");
        exit;
    default:
        $op = "";
        break;

}
require_once 'footer.php';
// $smarty->display('admin.tpl');  //送入到樣板檔

// 儲存管理介面的文章
function insert_article()
{
    global $db;
    // 進入資料庫的過濾要用 real_escape_string
    $title    = $db->real_escape_string($_POST['title']);
    $content  = $db->real_escape_string($_POST['content']);
    $username = $db->real_escape_string($_POST['username']);

    $sql = "INSERT INTO `article` (`title`, `content`,`username`, `create_time`, `update_time`)
    VALUES('{$title}', '{$content}','{$username}', NOW(), NOW())";
    $db->query($sql) or die($db->error);
    $sn = $db->insert_id;

    upload_pic($sn);
    return $sn;
}

function delete_article($sn)
{
    global $db;

    $sql = "DELETE FROM `article` WHERE sn='{$sn}'AND username='{$_SESSION['username']}'";
    $db->query($sql) or die($db->error);
// 刪除圖片的部分
    if (file_exists("uploads/cover_{$sn}.png")) {
        unlink("uploads/cover_{$sn}.png");
        unlink("uploads/thumb_{$sn}.png");
    }

}

function update_article($sn)
{
    global $db;
    // 進入資料庫的過濾要用 real_escape_string
    $title    = $db->real_escape_string($_POST['title']);
    $content  = $db->real_escape_string($_POST['content']);
    $username = $db->real_escape_string($_POST['username']);

    $sql = "UPDATE `article` SET `title`='{$title}',`content`='{$content}',`update_time`= NOW() WHERE `sn`='{$sn}'";
    $db->query($sql) or die($db->error);
    upload_pic($sn);
}

function upload_pic($sn)
{

    if (isset($_FILES)) {
        require_once 'class.upload.php';
        $foo = new Upload($_FILES['pic']);
        if ($foo->uploaded) {
            // 上傳時圖變大
            $foo->file_new_name_body = 'cover_' . $sn;
            $foo->image_resize       = true;
            $foo->image_convert      = png;
            $foo->image_x            = 1200;
            $foo->image_ratio_y      = true;
            $foo->Process('uploads/');

            if ($foo->processed) {
                $foo->file_new_name_body = 'thumb_' . $sn;
                $foo->image_resize       = true;
                $foo->image_convert      = png;
                $foo->image_x            = 400;
                $foo->image_ratio_y      = true;
                $foo->Process('uploads/');
            }
        }
    }
}
