<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 07:24:34
         compiled from "application\views\private\kelurahan\kelurahan-edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1296958142d04998027-11350170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01aeec199adca373fde2af9f622618a5a77625c2' => 
    array (
      0 => 'application\\views\\private\\kelurahan\\kelurahan-edit.html',
      1 => 1477718672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1296958142d04998027-11350170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_58142d04a20bc0_44437947',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'kecamatan' => 0,
    'result_kecamatan' => 0,
    'kecamatan_selected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58142d04a20bc0_44437947')) {function content_58142d04a20bc0_44437947($_smarty_tpl) {?><section class="content-header">
">
">
.
.
" method="post">
" />
 $_from = $_smarty_tpl->tpl_vars['kecamatan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_kecamatan']->key => $_smarty_tpl->tpl_vars['result_kecamatan']->value) {
$_smarty_tpl->tpl_vars['result_kecamatan']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['result_kecamatan']->value['id']==$_smarty_tpl->tpl_vars['kecamatan_selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result_kecamatan']->value['id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['result_kecamatan']->value['nama'];?>

"  id="id_kelurahanv" class="form-control"  maxlength="10" readonly="readonly" />
" size="45" maxlength="255" />
"  class="btn btn-primary">