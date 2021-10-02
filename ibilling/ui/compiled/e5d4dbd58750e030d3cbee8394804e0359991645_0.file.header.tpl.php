<?php
/* Smarty version 3.1.39, created on 2021-08-31 11:30:37
  from 'C:\xampp\htdocs\all projects\ibilling\ui\theme\ibilling\sections\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612e4b1da7cb51_51969783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5d4dbd58750e030d3cbee8394804e0359991645' => 
    array (
      0 => 'C:\\xampp\\htdocs\\all projects\\ibilling\\ui\\theme\\ibilling\\sections\\header.tpl',
      1 => 1621318798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612e4b1da7cb51_51969783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
