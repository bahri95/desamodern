<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 10:32:31
         compiled from "application/views/private/sosmed/list.html" */ ?>
<?php /*%%SmartyHeaderCode:72460646757ed25ff679b49-92682860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1634e08af5f3452c5e92ddcbd04167e078f45c2a' => 
    array (
      0 => 'application/views/private/sosmed/list.html',
      1 => 1473324240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72460646757ed25ff679b49-92682860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'start' => 0,
    'end' => 0,
    'total' => 0,
    'pagging' => 1,
    'url_process' => 1,
    'data' => 1,
    'result' => 1,
    'no' => 1,
    'url_edit' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ed25ffd409f9_75613891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ed25ffd409f9_75613891')) {function content_57ed25ffd409f9_75613891($_smarty_tpl) {?>
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
 - <?php echo $_smarty_tpl->tpl_vars['end']->value;?>
</b> dari <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> data</span>
<?php }?>
" name="form-album" method="post" onsubmit="javascript:return konfirmasi_delete_data();">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
" class="checkbox" />
.



/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_sosmed'];?>
" title="Edit Nama Album" class="btn btn-success btn-flat">
<?php }?>