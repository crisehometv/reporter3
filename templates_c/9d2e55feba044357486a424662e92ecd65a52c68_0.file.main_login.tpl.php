<?php
/* Smarty version 3.1.30, created on 2017-11-26 09:20:39
  from "D:\cris\UniServerZ\www\reporter3\templates\main_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1a87676b46a5_51759845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d2e55feba044357486a424662e92ecd65a52c68' => 
    array (
      0 => 'D:\\cris\\UniServerZ\\www\\reporter3\\templates\\main_login.tpl',
      1 => 1510370288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a1a87676b46a5_51759845 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>

    <div class="img-container">
        <div class="container">
            <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <h1 class="pt-5" tyle=color: "yellow">巷集談-街道新聞</h1>
            <form class="form-signin" name="form1" method="post" action="checklogin.php">
                <h2 class="form-signin-heading">Please請登入</h2>
                <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
                <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
                <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
                <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

                <div id="message"></div>
            </form>
        </div>

    </div>


    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
