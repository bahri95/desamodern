<?php /* Smarty version Smarty-3.1.17, created on 2016-10-28 11:11:23
         compiled from "application\views\private\kota\kota-add.html" */ ?>
<?php /*%%SmartyHeaderCode:13221581313651ade31-44891096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb0088f5d27cf6168018879661d0a75b868d0b77' => 
    array (
      0 => 'application\\views\\private\\kota\\kota-add.html',
      1 => 1477645882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13221581313651ade31-44891096',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5813136525dae2_44388859',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'propinsi' => 0,
    'result_propinsi' => 0,
    'propinsi_selected' => 0,
    'id_kota' => 0,
    'result' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5813136525dae2_44388859')) {function content_5813136525dae2_44388859($_smarty_tpl) {?><section class="content-header">
">
">
.
.
" method="post">
 $_from = $_smarty_tpl->tpl_vars['propinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_propinsi']->key => $_smarty_tpl->tpl_vars['result_propinsi']->value) {
$_smarty_tpl->tpl_vars['result_propinsi']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['result_propinsi']->value['id']==$_smarty_tpl->tpl_vars['propinsi_selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result_propinsi']->value['id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['result_propinsi']->value['nama'];?>

 $_from = $_smarty_tpl->tpl_vars['id_kota']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
"  id="id_kota" class="form-control" maxlength="10" style="width:100px;" />
"  id="nama_kota" class="form-control"  maxlength="50" />
"  class="btn btn-primary">