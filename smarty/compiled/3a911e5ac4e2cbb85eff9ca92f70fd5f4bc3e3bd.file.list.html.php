<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 01:25:41
         compiled from "application/views/web/agenda/list.html" */ ?>
<?php /*%%SmartyHeaderCode:111738706657ea02d5af9933-62255338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a911e5ac4e2cbb85eff9ca92f70fd5f4bc3e3bd' => 
    array (
      0 => 'application/views/web/agenda/list.html',
      1 => 1473324242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111738706657ea02d5af9933-62255338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'agenda_list' => 0,
    'rs' => 0,
    'label' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea02d5bea3d3_48168135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea02d5bea3d3_48168135')) {function content_57ea02d5bea3d3_48168135($_smarty_tpl) {?><div class="row j-masonry b-col-default-indent">
 $_from = $_smarty_tpl->tpl_vars['agenda_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_agenda'];?>

 - <?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal_selesai'];?>


">
 
