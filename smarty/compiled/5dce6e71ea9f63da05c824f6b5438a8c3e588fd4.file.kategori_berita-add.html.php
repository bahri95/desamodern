<?php /* Smarty version Smarty-3.1.17, created on 2016-11-18 13:23:09
         compiled from "application\views\private\kategori_berita\kategori_berita-add.html" */ ?>
<?php /*%%SmartyHeaderCode:20181582eeaf68c3f69-38962199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dce6e71ea9f63da05c824f6b5438a8c3e588fd4' => 
    array (
      0 => 'application\\views\\private\\kategori_berita\\kategori_berita-add.html',
      1 => 1479471786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20181582eeaf68c3f69-38962199',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_582eeaf6939280_59073077',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'id_kategori' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582eeaf6939280_59073077')) {function content_582eeaf6939280_59073077($_smarty_tpl) {?>
">
">
.
.
" method="post">
 $_from = $_smarty_tpl->tpl_vars['id_kategori']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
"  id="id_kategori" class="form-control" maxlength="10" style="width:100px;" />
"  class="btn btn-primary">