<?php
/* Smarty version 5.4.4, created on 2025-04-14 14:54:14
  from 'file:LoginView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.4',
  'unifunc' => 'content_67fd0576015288_23762226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9d8cc1debd56115b068c155ff7811e1c9bc61e1' => 
    array (
      0 => 'LoginView.tpl',
      1 => 1744635251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67fd0576015288_23762226 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\xampp\\htdocs\\app\\view';
?><!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" value="<?php echo $_smarty_tpl->getValue('form')['login'];?>
" required />
        <br />
        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" value="<?php echo $_smarty_tpl->getValue('form')['pass'];?>
" required />
        <br />
        <input type="submit" value="Login" />
    </form>

    <?php if ($_smarty_tpl->getValue('msgs')->hasErrors()) {?>
        <ul>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'error');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error')->value) {
$foreach0DoElse = false;
?>
                <li><?php echo $_smarty_tpl->getValue('error');?>
</li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>
</body>
</html><?php }
}
