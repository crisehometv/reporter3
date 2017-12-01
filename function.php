<?php
function link_db()
{
    $db = new mysqli('localhost', 'root', '12345', 'reporter');
    if ($db->connect_error) {
        die('無法連上資料庫：' . $db->connect_error);
    }
    $db->set_charset("utf8");
    return $db;
}

// 顯示單篇文章W4
function show_article($sn)
{
    global $db, $smarty;
// 過濾htmlpurifier
    require_once 'HTMLPurifier/HTMLPurifier.auto.php';
    $config   = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);

    $sql    = "SELECT * FROM `article` WHERE `sn`='$sn'";
    $result = $db->query($sql) or die($db->error);
    $data   = $result->fetch_assoc();
// 過濾htmlpurifier
    $data['content'] = $purifier->purify($data['content']);
    $smarty->assign('article', $data);
}
