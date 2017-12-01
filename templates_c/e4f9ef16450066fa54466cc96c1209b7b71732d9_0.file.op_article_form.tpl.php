<?php
/* Smarty version 3.1.30, created on 2017-11-26 14:37:20
  from "D:\cris\UniServerZ\www\reporter3\templates\op_article_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1ad1a0583b74_04226696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4f9ef16450066fa54466cc96c1209b7b71732d9' => 
    array (
      0 => 'D:\\cris\\UniServerZ\\www\\reporter3\\templates\\op_article_form.tpl',
      1 => 1511707034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1ad1a0583b74_04226696 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/languages/jquery.validationEngine-zh_TW.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css">
<!-- <textarea name="content" id="content"></textarea> -->


<form action="admin.php" method="post" enctype="multipart/form-data" class=" my-4" id="myform">
    <div class="form-group">
        <!-- sr-only 一般讀者看不到，給視力障礙的閱讀器使用的 -->
        <label for="title" class="col-form-label sr-only">文章標題</label>
        <input type="text" class="form-control validate[required]" name="title" id="title" placeholder="請輸入標題">
        <div class="form-group">
            <label for="content" class="col-form-label sr-only">文章內容</label>
            <textarea name="content" id="content " rows="20" class="form-control validate[required,minSize[15]]" placeholder="請輸入文章內容"></textarea>
        </div>
        <div class="form-group">
            <label for="title" class="col-form-label sr-only">封面圖</label>
            <input type="file" class="form-control" name="pic" id="pic" placeholder="請上傳圖片">
        </div>
        <div class="text-center">
            <input type="hidden" name="op" value="insert">
            <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>
">
            <button type="submit" class="btn btn-primary">儲存</button>
        </div>
    </div>
</form>

<?php echo '<script'; ?>
>
    // content對ID
    CKEDITOR.replace('content');
    $(document).ready(function () {
        $('#myform').validationEngine({ promptPosition: "bottomLeft" });
    });

<?php echo '</script'; ?>
><?php }
}
