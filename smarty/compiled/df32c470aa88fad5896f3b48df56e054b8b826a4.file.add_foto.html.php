<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:18:31
         compiled from "application/views/private/foto/add_foto.html" */ ?>
<?php /*%%SmartyHeaderCode:173576027857ecea7728c982-04477329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df32c470aa88fad5896f3b48df56e054b8b826a4' => 
    array (
      0 => 'application/views/private/foto/add_foto.html',
      1 => 1473844514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173576027857ecea7728c982-04477329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'album' => 0,
    'url_private' => 0,
    'url_list' => 0,
    'url_list_foto' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ecea77314138_56678282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ecea77314138_56678282')) {function content_57ecea77314138_56678282($_smarty_tpl) {?><section class="content-header">

">
">
/<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
">
.
.
/<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
" title="List Foto" class="btn bg-olive btn-flat">
" method="post" enctype="multipart/form-data">
"/>
">
" size="100"  maxlength="255" />
" size="100" maxlength="255" />
" size="100" min="1" maxlength="20" width="50" />
"  class="btn btn-primary">