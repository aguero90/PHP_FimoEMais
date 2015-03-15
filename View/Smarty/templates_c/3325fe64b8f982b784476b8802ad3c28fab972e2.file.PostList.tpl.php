<?php /* Smarty version Smarty-3.1.17, created on 2015-03-15 13:46:26
         compiled from "C:\wamp\www\PHP_FimoEMais\View\Smarty\Templates\Front\PostList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2336655058d32237367-77060140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3325fe64b8f982b784476b8802ad3c28fab972e2' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_FimoEMais\\View\\Smarty\\Templates\\Front\\PostList.tpl',
      1 => 1421423944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2336655058d32237367-77060140',
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
  'unifunc' => 'content_55058d32264cf9_15120531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55058d32264cf9_15120531')) {function content_55058d32264cf9_15120531($_smarty_tpl) {?>postList.tpl

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
