<?php /* Smarty version Smarty-3.1.17, created on 2016-11-22 05:46:00
         compiled from "application\views\web\base-layout\document-default.html" */ ?>
<?php /*%%SmartyHeaderCode:2742258046ffdb39581-19412385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f1f0e00ffe08108e46fa60b275a6d3297d304d0' => 
    array (
      0 => 'application\\views\\web\\base-layout\\document-default.html',
      1 => 1479789951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2742258046ffdb39581-19412385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_58046ffdb87795_46034333',
  'variables' => 
  array (
    'LOADJS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58046ffdb87795_46034333')) {function content_58046ffdb87795_46034333($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
    
    <!-- Document Wrapper
    ============================================= -->
  
        <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- Content
        ============================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/tittle.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="container">
             <div class="row">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/sidebar-list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/paging.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>     
        </div>     
        <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            

    <!-- Go To Top
    ============================================= -->
   
    <!-- javascript loaded -->
    <?php echo $_smarty_tpl->tpl_vars['LOADJS']->value;?>

    <!-- end of loaded javascript -->
</body>
</html>
<?php }} ?>
