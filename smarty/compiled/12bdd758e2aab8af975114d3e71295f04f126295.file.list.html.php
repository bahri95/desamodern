<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 00:22:44
         compiled from "application/views/web/foto/list.html" */ ?>
<?php /*%%SmartyHeaderCode:141458340557e9f4148587d9-88732712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12bdd758e2aab8af975114d3e71295f04f126295' => 
    array (
      0 => 'application/views/web/foto/list.html',
      1 => 1473324246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141458340557e9f4148587d9-88732712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'album_list' => 0,
    'rs' => 0,
    'url_detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9f414a5f457_36270815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9f414a5f457_36270815')) {function content_57e9f414a5f457_36270815($_smarty_tpl) {?><section class="b-infoblock--without-border">
 $_from = $_smarty_tpl->tpl_vars['album_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
'>
/<?php echo $_smarty_tpl->tpl_vars['rs']->value['id_album'];?>
' class='b-btn f-btn b-btn-light f-btn-light fancybox info' rel='gallery' title='<?php echo $_smarty_tpl->tpl_vars['rs']->value['nama_album'];?>
'>
/<?php echo $_smarty_tpl->tpl_vars['rs']->value['id_album'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['nama_album'];?>
