<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 23:08:46
         compiled from "application/views/private/informasi/list.html" */ ?>
<?php /*%%SmartyHeaderCode:12146665257edd73eefa172-29987423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb3fd4a522aef89f9d4f3e4a314511cb8404b6cc' => 
    array (
      0 => 'application/views/private/informasi/list.html',
      1 => 1473324228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12146665257edd73eefa172-29987423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'url_process' => 1,
    'data' => 1,
    'result' => 1,
    'no' => 1,
    'url_edit' => 1,
    'pagging' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57edd73f0b1a07_70943943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57edd73f0b1a07_70943943')) {function content_57edd73f0b1a07_70943943($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/h71721/public_html/application/third_party/Smarty/plugins/modifier.date_format.php';
?>
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
" name="form-koleksi" method="post" onsubmit="javascript:return konfirmasi_delete_data();">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
" class="checkbox" />




)

" width="100" />
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_informasi'];?>
" title="Edit" class="btn btn-success btn-flat">
<?php }?>