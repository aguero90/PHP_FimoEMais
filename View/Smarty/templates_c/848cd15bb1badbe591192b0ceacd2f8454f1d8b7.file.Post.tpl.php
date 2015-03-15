<?php /* Smarty version Smarty-3.1.17, created on 2015-02-23 20:34:22
         compiled from "C:\wamp\www\Fimo&Mais\View\Smarty\Templates\Front\Post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:805554eb8ecea65296-36696680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '848cd15bb1badbe591192b0ceacd2f8454f1d8b7' => 
    array (
      0 => 'C:\\wamp\\www\\Fimo&Mais\\View\\Smarty\\Templates\\Front\\Post.tpl',
      1 => 1421426523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '805554eb8ecea65296-36696680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_54eb8ecec69cb5_19636139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54eb8ecec69cb5_19636139')) {function content_54eb8ecec69cb5_19636139($_smarty_tpl) {?>Post.tpl

<div id="postCard">
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

<div id="comments">
    <header>
        <h1>Commenti</h1>
    </header>

    <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value->getComments(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
        <div class="post">
            <header>
                <h1><?php echo $_smarty_tpl->tpl_vars['comment']->value->getUsername();?>
</h1>
            </header>
            <div>
                <p><?php echo $_smarty_tpl->tpl_vars['comment']->value->getText();?>
</p>
            </div>
            <footer>
                <p><?php echo $_smarty_tpl->tpl_vars['comment']->value->getDate()->toString();?>
</p>
            </footer>
        </div>
    <?php } ?>
</div>

<div id="insertComment">
    Form inserimento commento
</div><?php }} ?>
