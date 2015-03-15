<?php /*%%SmartyHeaderCode:387154748e2504b134-66900798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb47ae1966fe44d659b34d840448930fd2286bd4' => 
    array (
      0 => 'C:\\wamp\\www\\Fimo&Mais\\View\\Smarty\\Templates\\Outline.tpl',
      1 => 1421423573,
      2 => 'file',
    ),
    '0f87f2e6a113d56f81db3730c926ab6d80d133cd' => 
    array (
      0 => 'C:\\wamp\\www\\Fimo&Mais\\View\\Smarty\\Templates\\Front\\PostList.tpl',
      1 => 1421423944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '387154748e2504b134-66900798',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_54b9354ab12403_62899786',
  'variables' => 
  array (
    'app_name' => 0,
    'contentTemplate' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b9354ab12403_62899786')) {function content_54b9354ab12403_62899786($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF-8>
        <title>Fimo & Mais</title>
    </head>
    <body>

        <header id="outlineHeader">
            <p>outlineHeader</p>
        </header>

        <nav id="outlineMenu">
            <ul>
                <li><a href="index.php?section=1">Post</a></li>
                <li><a href="index.php?section=2">PostList</a></li>
                <li><a href="index.php?section=3">Product</a></li>
                <li><a href="index.php?section=4">ProductList</a></li>
            </ul>
        </nav>


        <div id="outlineBody">
            postList.tpl

    <div class="post">
        <header>
            <h1>primo post</h1>
        </header>
        <div>
            <p>Lorem ipsub sbla</p>
        </div>
        <footer>
            <p>23-11-2014 22:02:29</p>
        </footer>
    </div>
    <div class="post">
        <header>
            <h1>Secondo Post</h1>
        </header>
        <div>
            <p>Lorem Ipsum ma sci scriviamo due cavolate</p>
        </div>
        <footer>
            <p>16-01-2015 16:55:25</p>
        </footer>
    </div>
    <div class="post">
        <header>
            <h1>Terzo post</h1>
        </header>
        <div>
            <p>siamo al terzo post inserito a mano sul DB xD</p>
        </div>
        <footer>
            <p>16-01-2015 16:55:53</p>
        </footer>
    </div>



        </div>


        <aside id="outlineLeftCol">
            <p>outlineLeftCol</p>
        </aside>


        <footer id="outlineFooter">
            <p>outlineFooter</p>
        </footer>

    </body>
</html><?php }} ?>
