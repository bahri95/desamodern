<?php /* Smarty version Smarty-3.1.17, created on 2016-11-28 03:06:04
         compiled from "application\views\web\base-layout\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:2778257ea3c06f3b4c5-14087113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c7daaeeddbbe8f44bdbbf957481dcdf2f0b6b25' => 
    array (
      0 => 'application\\views\\web\\base-layout\\footer.html',
      1 => 1480298762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2778257ea3c06f3b4c5-14087113',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea3c0705ab61_12719493',
  'variables' => 
  array (
    'datamenu' => 0,
    'rs' => 0,
    'list_berita_terbaru_footer' => 0,
    'datasosmed' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea3c0705ab61_12719493')) {function content_57ea3c0705ab61_12719493($_smarty_tpl) {?> <!-- footer Area
        ============================================ -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="footer-box footer-logo-address"> <!-- address  -->
                            
                            <address>
                                Kantor Kami<br/>
                                Gedung SMESCO UKM Lantai 16<br/>
                                Jl. Gatot Subroto Kav. 94 Jakarta Selatan - 12780<br/>
                                Telp : (021) 79197088<br/>
                                Fax : (021) 79199067<br/>
                            </address>
                        </div> <!-- /.address  -->
                    </div>
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="footer-box">
                                    <h3 class="category-headding">kategori</h3>
                                    <div class="headding-border bg-color-4"></div>
                                    <ul>
                                        <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datamenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                        <li><i class="fa fa-dot-circle-o"></i><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['ur_detail'];?>
"></a><?php echo $_smarty_tpl->tpl_vars['rs']->value['kategori_rubrik'];?>
</li>
                                        <?php } ?>
                                        
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-box"> <!-- featured news -->
                            <h3 class="category-headding ">berita terbaru</h3>
                            <div class="headding-border bg-color-2"></div>
                            <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_berita_terbaru_footer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                            <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                <div class="img-thumb">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" rel="bookmark"><img class="entry-thumb" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="" height="80" width="100"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-2">
                                        <a href="#"><?php echo $_smarty_tpl->tpl_vars['rs']->value['kategori_rubrik'];?>
</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
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
                        </div> <!-- /.featured news -->
                    </div>
                </div>
            </div>
        </footer>
        <div class="sub-footer">  <!-- sub footer -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p>© 2013 taa.co.id. 
Developed by PT Tunas Andalan Abadi</p>
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
"></i> </a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.sub footer --><?php }} ?>
