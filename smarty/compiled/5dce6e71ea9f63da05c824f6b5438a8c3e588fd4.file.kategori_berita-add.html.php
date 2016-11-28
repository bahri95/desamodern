<?php /* Smarty version Smarty-3.1.17, created on 2016-11-18 13:23:09
         compiled from "application\views\private\kategori_berita\kategori_berita-add.html" */ ?>
<?php /*%%SmartyHeaderCode:20181582eeaf68c3f69-38962199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dce6e71ea9f63da05c824f6b5438a8c3e588fd4' => 
    array (
      0 => 'application\\views\\private\\kategori_berita\\kategori_berita-add.html',
      1 => 1479471786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20181582eeaf68c3f69-38962199',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_582eeaf6939280_59073077',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'id_kategori' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582eeaf6939280_59073077')) {function content_582eeaf6939280_59073077($_smarty_tpl) {?><section class="content-header">  <h1>    Kategori Berita    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i> Kategori Berita      </a>    </li>    <li class="active">Tambah Data    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-6">      <!-- form add -->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Tambah Data Kategori Berita          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post">          <div class="box-body">           <div class="form-group">            <label for="id_kategori">ID Kategori Berita *               </label>              <?php if ($_smarty_tpl->tpl_vars['id_kategori']->value!='') {?>              <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['id_kategori']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>              <input type="text" readonly="readonly" name="id_kategori" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['max_id'];?>
"  id="id_kategori" class="form-control" maxlength="10" style="width:100px;" />              <?php } ?>               <?php } else { ?>                <input type="text" readonly="readonly" name="id_kategori" value="1"  id="id_kategori" class="form-control" maxlength="10" style="width:100px;" />              <?php }?>            </div>            <div class="form-group">              <label for="kategori_berita">Nama Kategori Berita *               </label>              <input type="text" name="kategori_berita" id="kategori_berita" class="form-control"  maxlength="50" />            </div>            <div class="form-group">              <label for="urutan">Urutan *               </label>              <input type="number" name="urutan" id="urutan" class="form-control" style="width: 30%;" />            </div>                      </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <i class="fa fa-save">              </i>  Simpan            </button>            <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal            </a>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><?php }} ?>
