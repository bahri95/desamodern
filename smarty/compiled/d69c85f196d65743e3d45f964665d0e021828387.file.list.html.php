<?php /* Smarty version Smarty-3.1.17, created on 2016-10-28 11:18:17
         compiled from "application\views\private\kota\list.html" */ ?>
<?php /*%%SmartyHeaderCode:143405813073db34604-17850103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd69c85f196d65743e3d45f964665d0e021828387' => 
    array (
      0 => 'application\\views\\private\\kota\\list.html',
      1 => 1477646267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143405813073db34604-17850103',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5813073dc2e648_03202318',
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'url_search' => 0,
    'propinsi' => 0,
    'result_propinsi' => 0,
    'propinsi_selected' => 0,
    'kota' => 0,
    'result' => 0,
    'url_edit' => 0,
    'url_edit2' => 0,
    'url_delete' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5813073dc2e648_03202318')) {function content_5813073dc2e648_03202318($_smarty_tpl) {?><section class="content-header">
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
" >
/' + this.value">
 $_from = $_smarty_tpl->tpl_vars['propinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_propinsi']->key => $_smarty_tpl->tpl_vars['result_propinsi']->value) {
$_smarty_tpl->tpl_vars['result_propinsi']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['result_propinsi']->value['id']==$_smarty_tpl->tpl_vars['propinsi_selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result_propinsi']->value['nama'];?>

 $_from = $_smarty_tpl->tpl_vars['kota']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>



/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
"
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_prov'];?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
"
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
" title="Hapus" class="btn btn-danger btn-flat" id="btndel<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
" onclick="return konfirmasi_delete();">