<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:09:29
         compiled from "application/views/web/base-layout/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:126842320157e9edd3ee7019-39986966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77a1eda6cc84734346ce9ac641b1f771621654b2' => 
    array (
      0 => 'application/views/web/base-layout/footer.html',
      1 => 1474529440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126842320157e9edd3ee7019-39986966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9edd409a961_51295385',
  'variables' => 
  array (
    'homeurl' => 0,
    'url_menu_profil' => 0,
    'act_lang' => 0,
    'url_menu_kontak' => 0,
    'BASEURL' => 0,
    'datasosmed' => 1,
    'rs' => 1,
    'asosiasifooter' => 1,
    'kontakinfo' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9edd409a961_51295385')) {function content_57e9edd409a961_51295385($_smarty_tpl) {?><footer>
">Home
">
">
themes/default/img/logo_dmsi_besar.png" alt="Logo"/>
 $_from = $_smarty_tpl->tpl_vars['datasosmed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" target="_blank" class="b-btn-group-hor__item f-btn-group-hor__item">
">
 $_from = $_smarty_tpl->tpl_vars['asosiasifooter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" >



