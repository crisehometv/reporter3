<?php
/* Smarty version 3.1.30, created on 2017-11-02 13:16:47
  from "D:\cri\UniServerZ20171102\www\reporter\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fb1abfae8fc7_89480331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8e4fa16bf93680caa6058ef558a15287201de41' => 
    array (
      0 => 'D:\\cri\\UniServerZ20171102\\www\\reporter\\templates\\index.tpl',
      1 => 1509179038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fb1abfae8fc7_89480331 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>頁面標題頁</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/my.css">

</head>

<body>
    <!-- 先做一個容器 -->
    <div class="img-container">
        <div class="container">
            <nav class="nav">
                <a href="index.php" class="nav-link text-white">首頁</a>
                <a href="index.php" class="nav-link text-white">編輯精選</a>
                <a href="index.php" class="nav-link text-white">街巷故事</a>
                <a href="index.php" class="nav-link text-white">市井觀點</a>
                <a href="index.php" class="nav-link text-white">私房知識塾</a>
                <a href="admin.php" class="nav-link text-white">管理</a>


            </nav>

            <h1 class="text-white pt-5">巷集談-街道新聞</h1>
            <div class="row">
                <div class="col-sm-6">
                    <p class="text-white ">「臺南公民智庫」是一個全新的概念，有效地運用社大的公民教育場域、加上民間NGO、專業學者，成為一個具有研究與提供思考與政策方向的機構，並兼具有行動力及參與城市運作的社會機能。</p>
                </div>

            </div>

        </div>
    </div>

    <!-- 現在要放入文章 -->
    <div class="container">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
        <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h3>
        <?php
}
} else {
?>

        <h1>還沒有內容</h1>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>



    <?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        //圖片大小隨著視窗執行，但是移動視窗時要移動載入
        $(document).ready(function () {
            $('.img-container').css('width', $(window).width());
            $('.img-container').css('height', $(window).height());
        });
        //自動調整圖片大小
        $(window).resize(function () {
            $('.img-container').css('width', $(window).width());
            $('.img-container').css('height', $(window).height());

        });
    <?php echo '</script'; ?>
>
    <!-- 假文工具 -->
    <?php echo '<script'; ?>
 src="http://more.handlino.com/javascripts/moretext-1.2.js" type="text/javascript"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
