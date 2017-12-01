<?php
/* Smarty version 3.1.30, created on 2017-11-19 14:12:36
  from "D:\cris\UniServerZ\www\reporter\templates\op_article_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a119154b00683_26261739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62e15721d0056e2e810812dce07f5f30a9270625' => 
    array (
      0 => 'D:\\cris\\UniServerZ\\www\\reporter\\templates\\op_article_form.tpl',
      1 => 1511100750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a119154b00683_26261739 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<!-- <textarea name="content" id="content"></textarea> -->


<form action="admin.php" method="post" enctype="multipart/form-data" class=" my-4">
    <div class="form-group">
        <!-- sr-only 一般讀者看不到，給視力障礙的閱讀器使用的 -->
        <label for="title" class="col-form-label sr-only">文章標題</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="請輸入標題">
        <div class="form-group">
            <label for="content" class="col-form-label sr-only">文章內容</label>
            <textarea name="content" id="content" rows="20" class="form-control" placeholder="請輸入文章內容"></textarea>
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

<?php echo '</script'; ?>
><?php }
}
