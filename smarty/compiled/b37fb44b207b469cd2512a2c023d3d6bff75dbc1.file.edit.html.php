<?php /* Smarty version Smarty-3.1.17, created on 2016-10-18 04:13:03
         compiled from "application\views\private\sosmed\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1621558058516f23707-86449401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b37fb44b207b469cd2512a2c023d3d6bff75dbc1' => 
    array (
      0 => 'application\\views\\private\\sosmed\\edit.html',
      1 => 1476756781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1621558058516f23707-86449401',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_580585170d74b1_84765279',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'logo' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580585170d74b1_84765279')) {function content_580585170d74b1_84765279($_smarty_tpl) {?><section class="content-header">
">
">
.
.
" method="post" enctype="multipart/form-data">
" size="100" maxlength="255" />
" size="100" maxlength="255" />
 $_from = $_smarty_tpl->tpl_vars['logo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['id_logo']==$_smarty_tpl->tpl_vars['result']->value['id_logo']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result']->value['logo'];?>

" size="100" maxlength="255" />
" size="100" min="1" maxlength="20" width="50" />
" size="100" maxlength="255"  style="width:150px;" />
"  class="btn btn-primary">