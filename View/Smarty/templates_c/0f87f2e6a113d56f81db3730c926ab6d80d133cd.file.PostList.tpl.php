<?php /* Smarty version Smarty-3.1.17, created on 2015-01-16 17:00:32
         compiled from "C:\wamp\www\Fimo&Mais\View\Smarty\Templates\Front\PostList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107554b943b07923d7-45930819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f87f2e6a113d56f81db3730c926ab6d80d133cd' => 
    array (
      0 => 'C:\\wamp\\www\\Fimo&Mais\\View\\Smarty\\Templates\\Front\\PostList.tpl',
      1 => 1421423944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107554b943b07923d7-45930819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_54b943b07c3388_81430558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b943b07c3388_81430558')) {function content_54b943b07c3388_81430558($_smarty_tpl) {?>postList.tpl

<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    <div class="post">
        <header>
            <h1><?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
</h1>
        </header>
        <div>
            <p><?php echo $_smarty_tpl->tpl_vars['post']->value->getText();?>
</p>
        </div>
        <footer>
            <p><?php echo $_smarty_tpl->tpl_vars['post']->value->getDate()->toString();?>
</p>
        </footer>
    </div>
<?php } ?>


<?php }} ?>
