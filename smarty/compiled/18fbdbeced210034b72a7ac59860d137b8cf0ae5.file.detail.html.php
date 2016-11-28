<?php /* Smarty version Smarty-3.1.17, created on 2016-11-27 13:05:29
         compiled from "application\views\web\berita\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:112525804bd4e6e1d40-46810431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18fbdbeced210034b72a7ac59860d137b8cf0ae5' => 
    array (
      0 => 'application\\views\\web\\berita\\detail.html',
      1 => 1480248327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112525804bd4e6e1d40-46810431',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5804bd4e774519_18171886',
  'variables' => 
  array (
    'data' => 0,
    'berita_terkait' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5804bd4e774519_18171886')) {function content_5804bd4e774519_18171886($_smarty_tpl) {?><div class="col-sm-8">
                    <article class="content">
                        <div class="post-thumb">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" class="img-responsive post-image" alt="">
                            <div class="social">
                                <ul>
                                    <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span> </a></li>
                                    <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a></li>
                                    <li><a href="#" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a></li>
                                    <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a></li>

                                </ul>
                            </div> <!-- /.social icon -->
                        </div> 
                        <h1><?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
</h1>
                        <div class="date">
                            <ul>
                                <li>By<a title="" href="#"><span> <?php echo $_smarty_tpl->tpl_vars['data']->value['admin_name'];?>
</span></a> --</li>
                                <li><a title="" href="#"><?php echo $_smarty_tpl->tpl_vars['data']->value['date_update'];?>
</a> --</li>
                              
                            </ul>
                        </div>
                        <p><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</p>
                        <div class="row">
                       
                        <!-- Related news area
                        ============================================ -->
                        <div class="related-news-inner">
                            <h3 class="category-headding ">BERITA TERKAIT</h3>
                            <div class="headding-border"></div>
                            <div class="row">
                                <div id="content-slide-5" class="owl-carousel">
                                    <!-- item-1 -->
                                    <div class="item">
                                        <div class="row rn_block">
                                            <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_terkait']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                            <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="2s" data-wow-delay="1s"><!-- image -->
                                                    <div class="post-thumb">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
">
                                                            <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-info meta-info-rn">
                                                        <div class="slide">
                                                            <a target="_blank" href="#" class="post-badge btn_two"><?php echo $_smarty_tpl->tpl_vars['rs']->value['kategori_rubrik'];?>
</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-title-author-details">
                                                    <h4><a href="#"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h4>
                                                    <div class="post-editor-date">
                                                        <div class="post-date">
                                                            <i class="pe-7s-clock"></i><?php echo $_smarty_tpl->tpl_vars['rs']->value['date_update'];?>

                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>

                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <!-- form
                        ============================================ -->
                        
                    </article>
                </div><?php }} ?>
