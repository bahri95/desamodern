<?php /* Smarty version Smarty-3.1.17, created on 2016-11-27 17:44:06
         compiled from "application\views\web\base-layout\tittle.html" */ ?>
<?php /*%%SmartyHeaderCode:246675802fadb9d25a1-54354037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '945ed1690af08e46cfb2d244a596ad3f9afa9ea8' => 
    array (
      0 => 'application\\views\\web\\base-layout\\tittle.html',
      1 => 1480265045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246675802fadb9d25a1-54354037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5802fadb9e9cb9_71031574',
  'variables' => 
  array (
    'page_judul' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5802fadb9e9cb9_71031574')) {function content_5802fadb9e9cb9_71031574($_smarty_tpl) {?>         <section class="block-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1><?php echo $_smarty_tpl->tpl_vars['page_judul']->value;?>
</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><i class="pe-7s-home"></i> <a href="home-style-one.html" title="">Home</a></li>
                                <li><a href="#" title=""><?php echo $_smarty_tpl->tpl_vars['page_judul']->value;?>
</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><?php }} ?>
