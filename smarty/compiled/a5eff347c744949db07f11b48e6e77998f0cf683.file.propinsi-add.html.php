<?php /* Smarty version Smarty-3.1.17, created on 2016-10-28 13:07:07
         compiled from "application\views\private\propinsi\propinsi-add.html" */ ?>
<?php /*%%SmartyHeaderCode:3097058132b97ae7721-89660071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5eff347c744949db07f11b48e6e77998f0cf683' => 
    array (
      0 => 'application\\views\\private\\propinsi\\propinsi-add.html',
      1 => 1477652784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3097058132b97ae7721-89660071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_58132b97ba2f40_62238999',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'id_prov' => 0,
    'result' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58132b97ba2f40_62238999')) {function content_58132b97ba2f40_62238999($_smarty_tpl) {?><section class="content-header">
">
">
.
.
" method="post">
 $_from = $_smarty_tpl->tpl_vars['id_prov']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
"  id="id_prov" class="form-control" maxlength="10" style="width:100px;" />
" maxlength="50" />
"  class="btn btn-primary">