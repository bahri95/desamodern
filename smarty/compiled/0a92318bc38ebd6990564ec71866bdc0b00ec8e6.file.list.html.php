<?php /* Smarty version Smarty-3.1.17, created on 2016-10-19 03:35:42
         compiled from "application\views\private\foto\list.html" */ ?>
<?php /*%%SmartyHeaderCode:939457ebe339884e81-38998627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a92318bc38ebd6990564ec71866bdc0b00ec8e6' => 
    array (
      0 => 'application\\views\\private\\foto\\list.html',
      1 => 1476840940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '939457ebe339884e81-38998627',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ebe33a30ab46_87939860',
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
    'url_add_foto' => 1,
    'url_list_foto' => 1,
    'pagging' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ebe33a30ab46_87939860')) {function content_57ebe33a30ab46_87939860($_smarty_tpl) {?>
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
.


/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_album'];?>
" title="Edit Nama Album" class="btn btn-success btn-flat">
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_album'];?>
" title="Tambah Foto" class="btn btn-success btn-flat">
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_album'];?>
" title="Lihat List Foto" class="btn btn-success btn-flat">
<?php }?>