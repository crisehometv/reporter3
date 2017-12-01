<?php
/* Smarty version 3.1.30, created on 2017-11-26 08:06:38
  from "D:\cris\UniServerZ\www\reporter\templates\op_show_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1a760eed8c86_35337256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63305d8df960e6bbd045db9445148908bdea1b00' => 
    array (
      0 => 'D:\\cris\\UniServerZ\\www\\reporter\\templates\\op_show_article.tpl',
      1 => 1511178784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1a760eed8c86_35337256 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container my-4">
    <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>
    <?php if (isset($_SESSION['username']) && $_SESSION['username'] == $_smarty_tpl->tpl_vars['article']->value['username']) {?>
    <div class="alert alert-info text-center">
        <a href="admin.php?op=delete_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-danger">刪除</a>
        <a href="admin.php?op=modify_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-warning">編輯</a>
    </div>
    <?php }?>
</div><?php }
}
