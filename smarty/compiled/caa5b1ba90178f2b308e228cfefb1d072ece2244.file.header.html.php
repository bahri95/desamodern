<?php /* Smarty version Smarty-3.1.17, created on 2016-11-15 05:33:30
         compiled from "application\views\web\base-layout\header.html" */ ?>
<?php /*%%SmartyHeaderCode:206565826f06f3c6b95-85523899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caa5b1ba90178f2b308e228cfefb1d072ece2244' => 
    array (
      0 => 'application\\views\\web\\base-layout\\header.html',
      1 => 1479042638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206565826f06f3c6b95-85523899',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5826f06f414da0_45976862',
  'variables' => 
  array (
    'share' => 0,
    'THEMESPATH' => 0,
    'LOADSTYLE' => 0,
    'JSDEFAULT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5826f06f414da0_45976862')) {function content_5826f06f414da0_45976862($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DESA MODERN</title>
    <link rel="shortcut icon" href="favicon.ico">
    <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['share']->value['judul'];?>
" />
    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['share']->value['url_detail'];?>
" />
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['share']->value['image'];?>
" />
    <meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['share']->value['deskripsi'];?>
" />
    <meta property="og:site_name" content="gubernurdki.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['THEMESPATH']->value;?>
" />
    <?php echo $_smarty_tpl->tpl_vars['LOADSTYLE']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['JSDEFAULT']->value;?>

</head>
<?php }} ?>