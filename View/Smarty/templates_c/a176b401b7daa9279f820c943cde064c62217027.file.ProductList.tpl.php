<?php /* Smarty version Smarty-3.1.17, created on 2015-01-16 17:01:58
         compiled from "C:\wamp\www\Fimo&Mais\View\Smarty\Templates\Front\ProductList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3210554b94406809919-43733520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a176b401b7daa9279f820c943cde064c62217027' => 
    array (
      0 => 'C:\\wamp\\www\\Fimo&Mais\\View\\Smarty\\Templates\\Front\\ProductList.tpl',
      1 => 1421427445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3210554b94406809919-43733520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_54b9440687b8b9_83157876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b9440687b8b9_83157876')) {function content_54b9440687b8b9_83157876($_smarty_tpl) {?>ProductList.tpl

<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
    <div class="post">
        <header>
            <h1><?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</h1>
        </header>
        <div>
            <p><?php echo $_smarty_tpl->tpl_vars['product']->value->getDescription();?>
</p>
        </div>
        <footer>
            <p><?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['product']->value->getAmount();?>
</p>
        </footer>
    </div>
<?php } ?><?php }} ?>
