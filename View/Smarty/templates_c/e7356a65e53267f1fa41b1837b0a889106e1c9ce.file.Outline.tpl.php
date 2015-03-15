<?php /* Smarty version Smarty-3.1.17, created on 2015-03-15 13:46:26
         compiled from "C:\wamp\www\PHP_FimoEMais\View\Smarty\Templates\Outline.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2742555058d32113c64-68286750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7356a65e53267f1fa41b1837b0a889106e1c9ce' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_FimoEMais\\View\\Smarty\\Templates\\Outline.tpl',
      1 => 1421427703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2742555058d32113c64-68286750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_name' => 0,
    'contentTemplate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55058d321f29d1_77606587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55058d321f29d1_77606587')) {function content_55058d321f29d1_77606587($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF-8>
        <title><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</title>
    </head>
    <body>

        <header id="outlineHeader">
            <p>outlineHeader</p>
        </header>

        <nav id="outlineMenu">
            <ul>
                <li><a href="index.php?s=1">Post</a></li>
                <li><a href="index.php?s=2">PostList</a></li>
                <li><a href="index.php?s=3">Product</a></li>
                <li><a href="index.php?s=4">ProductList</a></li>
            </ul>
        </nav>


        <div id="outlineBody">
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['contentTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>


        <aside id="outlineLeftCol">
            <p>outlineLeftCol</p>
        </aside>


        <footer id="outlineFooter">
            <p>outlineFooter</p>
        </footer>

    </body>
</html><?php }} ?>
