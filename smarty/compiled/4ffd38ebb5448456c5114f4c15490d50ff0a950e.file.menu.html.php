<?php /* Smarty version Smarty-3.1.17, created on 2016-11-28 02:42:22
         compiled from "application\views\web\base-layout\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:31215802fa18e9c632-59919313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ffd38ebb5448456c5114f4c15490d50ff0a950e' => 
    array (
      0 => 'application\\views\\web\\base-layout\\menu.html',
      1 => 1480297341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31215802fa18e9c632-59919313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5802fa190486e5_56451475',
  'variables' => 
  array (
    'baseurl' => 0,
    'datamenu' => 0,
    'url_detail' => 0,
    'rs_menu' => 0,
    'datasosmed' => 0,
    'rs' => 0,
    'list_berita_berjalan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5802fa190486e5_56451475')) {function content_5802fa190486e5_56451475($_smarty_tpl) {?><header>
            <!-- Mobile Menu Start -->
            <div class="mobile-menu-area navbar-fixed-top hidden-sm hidden-md hidden-lg">
                <nav class="mobile-menu" id="mobile-menu">
                    <div class="sidebar-nav-desmod">
                        <ul class="nav side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn mobile-menu-btn" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
">Home</a></li>
                             <?php  $_smarty_tpl->tpl_vars['rs_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs_menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datamenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs_menu']->key => $_smarty_tpl->tpl_vars['rs_menu']->value) {
$_smarty_tpl->tpl_vars['rs_menu']->_loop = true;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_detail']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rs_menu']->value['kategori_rubrik'];?>
</a></li>
                             <?php } ?>
                            <!-- social icon -->
                            <li>
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
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="top_header_icon">
                        <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datasosmed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                        <span class="top_header_icon_wrap">
                            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
"></i></a>
                        </span>
                       <?php } ?>
                       
                    </div>
                    <div id="showLeft" class="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu End -->
            <!-- top header -->
            <div class="top_header hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <div class="top_header_menu_wrap">
                                <ul class="top-header-menu">
                                    
                                   
                                </ul>
                            </div>
                        </div>
                        <!--breaking news-->
                        <div class="col-sm-8 col-md-7">
                            <div class="newsticker-inner">
                                <ul class="newsticker">
                                    <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_berita_berjalan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                    <li><span class="color-1"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></li>
                                    <?php } ?>
                                    
                                </ul>
                                <div class="next-prev-inner">
                                    <a href="#" id="prev-button"><i class='pe-7s-angle-left'></i></a>
                                    <a href="#" id="next-button"><i class='pe-7s-angle-right'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <div class="top_header_icon">
                                <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datasosmed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                <span class="top_header_icon_wrap">
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
"></i></a>
                                </span>
                               <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top_banner_wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <div class="header-logo">  <!-- logo -->
                                <!-- <a href="home-style-one.html">
                                    <img class="td-retina-data img-responsive"  src="images/logo.png" alt="">
                                </a> -->
                            </div>
                        </div>
                        <div class="col-xs-8 col-md-8 col-sm-8 hidden-xs">
                            <div class="header-banner">
                                <!-- <a href="#"><img class="td-retina img-responsive" src="images/top-bannner.jpg" alt="" ></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- navber -->
            <div class="container hidden-xs">
                <nav class="navbar">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" class="category01">HOME</a></li>
                            <?php  $_smarty_tpl->tpl_vars['rs_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs_menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datamenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs_menu']->key => $_smarty_tpl->tpl_vars['rs_menu']->value) {
$_smarty_tpl->tpl_vars['rs_menu']->_loop = true;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['rs_menu']->value['url_detail'];?>
" class="category0<?php echo $_smarty_tpl->tpl_vars['rs_menu']->value['urutan'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs_menu']->value['kategori_rubrik'];?>
</a></li>
                            <?php } ?>
                        </ul>
                    </div> <!-- navbar-collapse -->
                </nav>
            </div>
        </header>   
        <!-- header news Area<?php }} ?>
