<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 01:08:18
         compiled from "application/views/web/sesebi/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:37112214657e9fec2b1c4c3-49542335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6881611aa17a806caf83d467862cb3f9c86dab09' => 
    array (
      0 => 'application/views/web/sesebi/detail.html',
      1 => 1473324250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37112214657e9fec2b1c4c3-49542335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'menu' => 0,
    'label' => 0,
    'sesebi_list' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9fec2bbe1f6_60990426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9fec2bbe1f6_60990426')) {function content_57e9fec2bbe1f6_60990426($_smarty_tpl) {?><div class="col-md-9">



" style="max-width:100%;margin:0 10px 10px 0;">


">Download Lampiran

 $_from = $_smarty_tpl->tpl_vars['sesebi_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
"  alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">

"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>


">
