<?php
/* Smarty version 3.1.30, created on 2017-11-19 14:20:46
  from "D:\cris\UniServerZ\www\reporter\templates\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a11933e407404_50090381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58e3bb9d9de3ec98e5b02b574fdadfbbef9ebe4f' => 
    array (
      0 => 'D:\\cris\\UniServerZ\\www\\reporter\\templates\\nav.tpl',
      1 => 1511100892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a11933e407404_50090381 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark PY-0">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu">
    <span class="navbar-toggler-icon"></span>
</button>
    <a class="navbar-brand" href="index.php">
    <img alt="Brand" src="images/logo.png" class="img-fluid">
</a>
    <div class="collapse navbar-collapse" id="menu">
        <div class="navbar-nav mr-auto">
            <a href="index.php" class="nav-link text-white">首頁</a>
            <a href="index.php" class="nav-link text-white">編輯精選</a>
            <a href="index.php" class="nav-link text-white">街巷故事</a>
            <a href="index.php" class="nav-link text-white">市井觀點</a>
            <a href="index.php" class="nav-link text-white">私房知識塾</a>
        </div>

        <div class="navbar-nav">
            <?php if (isset($_SESSION['username'])) {?>
            <a href="admin.php?op=article_form" class="nav-link text-white">發佈</a>
            <a href="logout.php" class="nav-link text-white">登出</a> <?php } else { ?>
            <a href="signup.php" class="nav-link text-white">註冊</a>
            <a href="main_login.php" class="nav-link text-white">登入</a> <?php }?>
        </div>
    </div>
</nav><?php }
}
