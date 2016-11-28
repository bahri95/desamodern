<?php /* Smarty version Smarty-3.1.17, created on 2016-11-28 02:38:34
         compiled from "application\views\web\berita\list.html" */ ?>
<?php /*%%SmartyHeaderCode:20696580ea66cad6d50-61013238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af50530f45a450c21fef39812867b0478059c92d' => 
    array (
      0 => 'application\\views\\web\\berita\\list.html',
      1 => 1480297006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20696580ea66cad6d50-61013238',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_580ea66cb3c662_15614626',
  'variables' => 
  array (
    'berita_list' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580ea66cb3c662_15614626')) {function content_580ea66cb3c662_15614626($_smarty_tpl) {?>
      
           
                <div class="col-sm-8">
                    <?php if ($_smarty_tpl->tpl_vars['berita_list']->value!='') {?>
                    <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                    <!--Post list-->
                    <div class="post-style2 wow fadeIn" data-wow-duration="1s">
                        <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt=""></a>
                        <div class="post-style2-detail">
                            <h3><a href="#" title=""><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h3>
                            <div class="date">
                                <ul>
                                    <li><img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" class="img-responsive" alt=""></li>
                                    <li>Oleh <a title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['admin_name'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['rs']->value['admin_name'];?>
</span></a> --</li>
                                    <li><a title="" href="#"><?php echo $_smarty_tpl->tpl_vars['rs']->value['date_update'];?>
</a> --</li>
                                   
                                </ul>
                            </div>
                            <p><?php echo $_smarty_tpl->tpl_vars['rs']->value['content'];?>
</p>
                            <a class="btn btn-style" href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
">Selengkapnya</a>
                        </div>
                    </div>
                    <?php } ?>
                    <?php }?>
                </div>
            
        
<?php }} ?>
