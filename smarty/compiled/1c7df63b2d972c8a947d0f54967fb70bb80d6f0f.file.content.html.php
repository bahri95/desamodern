<?php /* Smarty version Smarty-3.1.17, created on 2016-11-28 02:36:34
         compiled from "application\views\web\home\content.html" */ ?>
<?php /*%%SmartyHeaderCode:202465802fa19103f11-69857447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c7df63b2d972c8a947d0f54967fb70bb80d6f0f' => 
    array (
      0 => 'application\\views\\web\\home\\content.html',
      1 => 1480296976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202465802fa19103f11-69857447',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5802fa19190934_71676942',
  'variables' => 
  array (
    'berita_list_satu' => 0,
    'rs' => 0,
    'berita_list_dua' => 0,
    'berita_list_tiga' => 0,
    'berita_list_empat' => 0,
    'berita_list_lima' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5802fa19190934_71676942')) {function content_5802fa19190934_71676942($_smarty_tpl) {?>  <section class="headding-news">
            <div class="container">
                <div class="row row-margin">
                    <div class="col-sm-3 col-padding">
                    <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list_satu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                        <div class="post-wrapper post-grid-1 wow fadeIn" data-wow-duration="2s">
                            <div class="post-thumb img-zoom-in">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
">
                                    <img class="entry-thumb" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-3"><?php echo $_smarty_tpl->tpl_vars['rs']->value['kategori_rubrik'];?>
</span>
                                <h3 class="post-title post-title-size"><a href="#" rel="bookmark"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
 </a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i><?php echo $_smarty_tpl->tpl_vars['rs']->value['date_update'];?>

                                    </div>
                                    
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                     <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list_dua']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                        <div class="post-wrapper post-grid-2 wow fadeIn" data-wow-duration="2s">
                            <div class="post-thumb img-zoom-in">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
">
                                    <img class="entry-thumb" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-5"><?php echo $_smarty_tpl->tpl_vars['rs']->value['kategori_rubrik'];?>
</span>
                                <h3 class="post-title post-title-size"><a href="#" rel="bookmark"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i><?php echo $_smarty_tpl->tpl_vars['rs']->value['date_update'];?>

                                    </div>
                                  
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <div class="col-sm-6 col-padding">
                     <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list_tiga']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                        <div class="post-wrapper post-grid-3 wow fadeIn" data-wow-duration="2s">
                            <div class="post-thumb img-zoom-in">
                                <a href="#">
                                    <img class="entry-thumb-middle" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-4"><?php echo $_smarty_tpl->tpl_vars['rs']->value['kategori_rubrik'];?>
</span>
                                <h3 class="post-title"><a href="#" rel="bookmark"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
 </a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i><?php echo $_smarty_tpl->tpl_vars['rs']->value['date_update'];?>

                                    </div>
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                         <?php } ?>
                    </div>
                   
                    <div class="col-sm-3 col-padding">
                     <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list_empat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                        <div class="post-wrapper post-grid-4 wow fadeIn" data-wow-duration="2s">
                            <div class="post-thumb img-zoom-in">
                                <a href="#">
                                    <img class="entry-thumb" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-1"><?php echo $_smarty_tpl->tpl_vars['rs']->value['kategori_rubrik'];?>
</span>
                                <h3 class="post-title post-title-size"><a href="#" rel="bookmark"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i><?php echo $_smarty_tpl->tpl_vars['rs']->value['date_update'];?>

                                    </div>
                                  
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list_lima']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                        <div class="post-wrapper post-grid-5 wow fadeIn" data-wow-duration="2s">
                            <div class="post-thumb img-zoom-in">
                                <a href="#">
                                    <img class="entry-thumb" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-2"><?php echo $_smarty_tpl->tpl_vars['rs']->value['kategori_rubrik'];?>
</span>
                                <h3 class="post-title post-title-size"><a href="#" rel="bookmark"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
 </a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> <?php echo $_smarty_tpl->tpl_vars['rs']->value['date_update'];?>

                                    </div>
                                    
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section><?php }} ?>
