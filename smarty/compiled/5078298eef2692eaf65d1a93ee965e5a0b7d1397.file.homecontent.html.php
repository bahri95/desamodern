<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 11:35:07
         compiled from "application\views\web\home\homecontent.html" */ ?>
<?php /*%%SmartyHeaderCode:786657ea3c068b73c5-55713078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5078298eef2692eaf65d1a93ee965e5a0b7d1397' => 
    array (
      0 => 'application\\views\\web\\home\\homecontent.html',
      1 => 1475141705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '786657ea3c068b73c5-55713078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea3c06999cf2_18780681',
  'variables' => 
  array (
    'judul' => 0,
    'berita_dmsi' => 0,
    'rs' => 0,
    'baseurl' => 0,
    'berita_asosiasi' => 0,
    'foto_list' => 0,
    'act_lang' => 0,
    'video_list' => 0,
    'eventhome' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea3c06999cf2_18780681')) {function content_57ea3c06999cf2_18780681($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("web/home/anggota_slider.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


 $_from = $_smarty_tpl->tpl_vars['berita_dmsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
 </div>
">
php_helpers/timthumb.php?src=<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
&amp;w=120&amp;zc=0" alt="" />
" class="f-primary-b f-more font-judul"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>

 
 $_from = $_smarty_tpl->tpl_vars['berita_asosiasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
 </div>
">
php_helpers/timthumb.php?src=<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
&amp;w=120&amp;zc=0" alt="" />
" class="f-primary-b f-more font-judul"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>

 

 $_from = $_smarty_tpl->tpl_vars['foto_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt=""/> 


 $_from = $_smarty_tpl->tpl_vars['video_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt=""/> 
" class="b-btn f-btn b-btn-light f-btn-light fancybox info fancybox.iframe" title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
">



 $_from = $_smarty_tpl->tpl_vars['eventhome']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_agenda'];?>



