<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 07:09:59
         compiled from "application/views/web/aspirasi/aspirasi.html" */ ?>
<?php /*%%SmartyHeaderCode:102715088657ecf687017073-74677148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df9deaed4be5c7345f0bcf234b98ab6f3074e02b' => 
    array (
      0 => 'application/views/web/aspirasi/aspirasi.html',
      1 => 1473324242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102715088657ecf687017073-74677148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_modul' => 0,
    'label' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process_aspirasi' => 0,
    'data' => 0,
    'listasosiasi' => 0,
    'result' => 0,
    'url_captcha' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ecf68711c316_88710624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ecf68711c316_88710624')) {function content_57ecf68711c316_88710624($_smarty_tpl) {?><div class="b-desc-section-container">



.
.
" id="form-kontak" name="form-kontak" method="post"
 *
" class="form-control" />
  *
" class="form-control" />
 *
 $_from = $_smarty_tpl->tpl_vars['listasosiasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['nama_asosiasi'];?>

" class="form-control" />
 *

 *
" class="form-control" />
 *

" id="image_captcha" align="absmiddle" />
doc/refresh.jpg" id="refresh" style="max-width:25px;margin-left:20px;" />
 *
" class="form-control" />

" />








