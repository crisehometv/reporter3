<?php
// 送入到樣板檔
//assign 要在display前面
$smarty->assign('op', $op);
$smarty->assign('Title', $page_title);
$smarty->display(_PAGE_TPL);
