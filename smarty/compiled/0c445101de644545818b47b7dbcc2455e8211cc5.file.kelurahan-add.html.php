<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 06:55:52
         compiled from "application\views\private\kelurahan\kelurahan-add.html" */ ?>
<?php /*%%SmartyHeaderCode:177735814263bc4c9d4-25478878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c445101de644545818b47b7dbcc2455e8211cc5' => 
    array (
      0 => 'application\\views\\private\\kelurahan\\kelurahan-add.html',
      1 => 1477716951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177735814263bc4c9d4-25478878',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5814263bdee9b5_67053625',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'kecamatan' => 0,
    'result_kecamatan' => 0,
    'kecamatan_selected' => 0,
    'id_kelurahan' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5814263bdee9b5_67053625')) {function content_5814263bdee9b5_67053625($_smarty_tpl) {?><section class="content-header">
">
">
.
.
" method="post">
 $_from = $_smarty_tpl->tpl_vars['kecamatan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_kecamatan']->key => $_smarty_tpl->tpl_vars['result_kecamatan']->value) {
$_smarty_tpl->tpl_vars['result_kecamatan']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['result_kecamatan']->value['id']==$_smarty_tpl->tpl_vars['kecamatan_selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result_kecamatan']->value['id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['result_kecamatan']->value['nama'];?>

 $_from = $_smarty_tpl->tpl_vars['id_kelurahan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
"  id="id_kelurahan" class="form-control" maxlength="10" style="width:100px;" />
"  class="btn btn-primary">