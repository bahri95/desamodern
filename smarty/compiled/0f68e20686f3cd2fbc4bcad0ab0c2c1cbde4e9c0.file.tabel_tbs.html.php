<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 01:28:35
         compiled from "application/views/private/dashboard/tabel_tbs.html" */ ?>
<?php /*%%SmartyHeaderCode:122332663157ea0383959ff0-41281483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f68e20686f3cd2fbc4bcad0ab0c2c1cbde4e9c0' => 
    array (
      0 => 'application/views/private/dashboard/tabel_tbs.html',
      1 => 1474877410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122332663157ea0383959ff0-41281483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tahun_data' => 1,
    'databulan' => 1,
    'rs' => 1,
    'datatbs' => 1,
    'data' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea03839c3143_48743852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea03839c3143_48743852')) {function content_57ea03839c3143_48743852($_smarty_tpl) {?>

 $_from = $_smarty_tpl->tpl_vars['databulan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
</td>
 $_from = $_smarty_tpl->tpl_vars['datatbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
</td>
 $_from = $_smarty_tpl->tpl_vars['rs']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
</td>