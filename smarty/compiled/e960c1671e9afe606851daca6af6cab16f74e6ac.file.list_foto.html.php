<?php /* Smarty version Smarty-3.1.17, created on 2016-10-19 03:51:33
         compiled from "application\views\private\foto\list_foto.html" */ ?>
<?php /*%%SmartyHeaderCode:1941257ebe9fe33ba63-03591182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e960c1671e9afe606851daca6af6cab16f74e6ac' => 
    array (
      0 => 'application\\views\\private\\foto\\list_foto.html',
      1 => 1476841893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1941257ebe9fe33ba63-03591182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ebe9fe57dce4_98614762',
  'variables' => 
  array (
    'album' => 0,
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add_foto' => 0,
    'url_process' => 1,
    'data' => 1,
    'result' => 1,
    'no' => 1,
    'url_edit_foto' => 1,
    'pagging' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ebe9fe57dce4_98614762')) {function content_57ebe9fe57dce4_98614762($_smarty_tpl) {?>

">
">
.
.
/<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
" title="Tambah Data" class="btn bg-olive btn-flat">
" name="form-album" method="post" onsubmit="javascript:return konfirmasi_delete_data();">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
">
" class="checkbox" />
.
" width="100" />


/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_album'];?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_foto'];?>
" title="Edit Foto" class="btn btn-success btn-flat">
<?php }?>