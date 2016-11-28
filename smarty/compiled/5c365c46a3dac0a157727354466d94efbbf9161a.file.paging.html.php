<?php /* Smarty version Smarty-3.1.17, created on 2016-11-28 03:17:35
         compiled from "application\views\web\base-layout\paging.html" */ ?>
<?php /*%%SmartyHeaderCode:141525833c805704b39-63423095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c365c46a3dac0a157727354466d94efbbf9161a' => 
    array (
      0 => 'application\\views\\web\\base-layout\\paging.html',
      1 => 1480299451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141525833c805704b39-63423095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5833c8057089c0_89415436',
  'variables' => 
  array (
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5833c8057089c0_89415436')) {function content_5833c8057089c0_89415436($_smarty_tpl) {?><!-- pagination -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    <?php if ($_smarty_tpl->tpl_vars['pagging']->value!='') {?>
                        <ul class="pagination">
                            <?php echo $_smarty_tpl->tpl_vars['pagging']->value;?>
   
                        </ul>
                    <?php }?>
                    </div>
                    <div class="col-sm-12">
                        <div class="banner">
                           <!--  <img src="images/top-bannner2.jpg" class="img-responsive center-block" alt=""> -->
                        </div>
                    </div>
                </div>
            </div><?php }} ?>
