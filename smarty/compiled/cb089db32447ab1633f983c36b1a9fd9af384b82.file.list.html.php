<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:12:03
         compiled from "application\views\private\banner\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2731857ec94933dfe32-91735708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb089db32447ab1633f983c36b1a9fd9af384b82' => 
    array (
      0 => 'application\\views\\private\\banner\\list.html',
      1 => 1475122317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2731857ec94933dfe32-91735708',
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
  'unifunc' => 'content_57ec94934a71e6_97079598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec94934a71e6_97079598')) {function content_57ec94934a71e6_97079598($_smarty_tpl) {?>
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
" width="100" />
" width="100" />






/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_banner'];?>
" title="Edit Nama Album" class="btn btn-success btn-flat">
<?php }?>