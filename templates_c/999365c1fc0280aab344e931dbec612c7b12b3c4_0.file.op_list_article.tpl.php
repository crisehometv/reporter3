<?php
/* Smarty version 3.1.30, created on 2017-11-19 13:07:50
  from "D:\cris\UniServerZ\www\reporter\templates\op_list_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a118226abe006_45507696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '999365c1fc0280aab344e931dbec612c7b12b3c4' => 
    array (
      0 => 'D:\\cris\\UniServerZ\\www\\reporter\\templates\\op_list_article.tpl',
      1 => 1511096867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a118226abe006_45507696 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="img-container">
</div>
<div class="container">
</div>

<div class="container">
        <h1 class="my-3  text-center">最新文章</h1>
        <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
$_smarty_tpl->tpl_vars['article']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->index++;
$__foreach_article_0_saved = $_smarty_tpl->tpl_vars['article'];
?>
                <div class="col-sm-4">
                        <?php $_smarty_tpl->_assignInScope('cover', "uploads/thumb_".((string)$_smarty_tpl->tpl_vars['article']->value['sn']).".png");
?> <?php if (file_exists($_smarty_tpl->tpl_vars['cover']->value)) {?>

                        <img src="<?php echo $_smarty_tpl->tpl_vars['cover']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="rounded cover">
                        <h3><a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
                        <h5><?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>
</h5>



                        <?php } else { ?>
                        <img src="https://picsum.photos/400/230?image=<?php echo $_smarty_tpl->tpl_vars['article']->index;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
 " class="rounded cover">
                        <h3><a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
                        <h5><?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>
</h5>
                        <?php }?>
                </div>
                <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved;
}
} else {
?>

                <h1>尚無內容</h1>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        </div>
</div><?php }
}
