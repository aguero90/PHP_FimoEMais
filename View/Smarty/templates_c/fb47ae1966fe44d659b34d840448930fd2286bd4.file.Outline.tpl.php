<?php /* Smarty version Smarty-3.1.17, created on 2015-01-16 17:01:56
         compiled from "C:\wamp\www\Fimo&Mais\View\Smarty\Templates\Outline.tpl" */ ?>
<?php /*%%SmartyHeaderCode:809854b943b071d6e3-97280447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb47ae1966fe44d659b34d840448930fd2286bd4' => 
    array (
      0 => 'C:\\wamp\\www\\Fimo&Mais\\View\\Smarty\\Templates\\Outline.tpl',
      1 => 1421427703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '809854b943b071d6e3-97280447',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_54b943b07741d1_59741210',
  'variables' => 
  array (
    'app_name' => 0,
    'contentTemplate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b943b07741d1_59741210')) {function content_54b943b07741d1_59741210($_smarty_tpl) {?><!DOCTYPE html>
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
