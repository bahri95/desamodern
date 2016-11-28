<?php /* Smarty version Smarty-3.1.17, created on 2016-11-28 02:56:56
         compiled from "application\views\web\base-layout\sidebar-list.html" */ ?>
<?php /*%%SmartyHeaderCode:35635833c805697522-40754172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83bd8ee4d088ff33eee159856f452ab8074dcdf0' => 
    array (
      0 => 'application\\views\\web\\base-layout\\sidebar-list.html',
      1 => 1480297400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35635833c805697522-40754172',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5833c8056a30a3_53705461',
  'variables' => 
  array (
    'datasosmed' => 0,
    'rs' => 0,
    'berita_sidebar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5833c8056a30a3_53705461')) {function content_5833c8056a30a3_53705461($_smarty_tpl) {?><aside class="col-sm-4 left-padding">
                    <div class="input-group search-area"> <!-- search area -->
                        <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <!-- social icon -->
                    <h3 class="category-headding ">SOSIAL MEDIA</h3>
                    <div class="headding-border"></div>
                    <div class="social">
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datasosmed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['link'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
"><i class="fa  fa-<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
"></i></a></li>
                            <?php } ?>

                        </ul>
                    </div> <!-- /.social icon -->
                    <div class="tab-inner">
                        <ul class="tabs">
                            <li><a href="#">POPULAR</a></li>
                            <li><a href="#">MOST VIEWED</a></li>
                        </ul><hr> <!-- tabs -->
                        <div class="tab_content">
                            <div class="tab-item-inner">
                               <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                    <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="img-thumb">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" rel="bookmark"><img class="entry-thumb" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="" height="80" width="90"></a>
                                        </div>
                                        <div class="item-details">
                                            <h6 class="sub-category-title bg-color-4">
                                                <a href="#"><?php echo $_smarty_tpl->tpl_vars['rs']->value['kategori_rubrik'];?>
</a>
                                            </h6>
                                            <h3 class="td-module-title"><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h3>
                                            <div class="post-editor-date">
                                                <!-- post date -->
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i><?php echo $_smarty_tpl->tpl_vars['rs']->value['date_update'];?>

                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div> <!-- / tab item -->
                            <div class="tab-item-inner">
                                 <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                    <div class="box-item" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="img-thumb">
                                            <a href="#" rel="bookmark"><img class="entry-thumb" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="" height="80" width="90"></a>
                                        </div>
                                        <div class="item-details">
                                            <h6 class="sub-category-title bg-color-4">
                                                <a href="#"><?php echo $_smarty_tpl->tpl_vars['rs']->value['kategori_rubrik'];?>
</a>
                                            </h6>
                                            <h3 class="td-module-title"><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h3>
                                            <div class="post-editor-date">
                                                <!-- post date -->
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i><?php echo $_smarty_tpl->tpl_vars['rs']->value['date_update'];?>

                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                            </div> <!-- / tab item -->
                        </div> <!-- / tab_content -->
                    </div> <!-- / tab -->
                    <div class="banner-add"> <!-- add -->
                        <span class="add-title">- Advertisement -</span>
                        <a href="#"><img src="images/ad-banner.jpg" class="img-responsive center-block" alt=""></a>
                    </div>
                </aside><?php }} ?>
