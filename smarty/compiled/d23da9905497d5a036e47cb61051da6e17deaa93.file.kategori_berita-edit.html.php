<?php /* Smarty version Smarty-3.1.17, created on 2016-11-19 01:44:43
         compiled from "application\views\private\kategori_berita\kategori_berita-edit.html" */ ?>
<?php /*%%SmartyHeaderCode:32531582f9f997056d1-09872831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd23da9905497d5a036e47cb61051da6e17deaa93' => 
    array (
      0 => 'application\\views\\private\\kategori_berita\\kategori_berita-edit.html',
      1 => 1479516281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32531582f9f997056d1-09872831',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_582f9f997d8609_64197647',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f9f997d8609_64197647')) {function content_582f9f997d8609_64197647($_smarty_tpl) {?><section class="content-header">  <h1>    Kategori Berita    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i> Kategori Berita      </a>    </li>    <li class="active">Update Data    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-6">      <!-- form add -->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Update Data Kategori Berita          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post">          <input type="hidden" name="id_kategori" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_kategori'];?>
" />          <div class="box-body">            <div class="form-group">              <label for="id_kategori">Id Kategori               </label>              <input type="text" name="id_kategori" id="id_kategori" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_kategori'];?>
" maxlength="50" readonly="readonly" style="width: 30%;" />            </div>            <div class="form-group">              <label for="Kategori">Nama Kategori Berita *               </label>              <input type="text" name="kategori_berita" id="kategori_berita" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['kategori_rubrik'];?>
" maxlength="50" />            </div>             <div class="form-group">              <label for="urutan">Urutan *               </label>              <input type="number" name="urutan" id="urutan" class="form-control" style="width: 30%;" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['urutan'];?>
" />            </div>          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <i class="fa fa-save">              </i>  Simpan            </button>            <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal            </a>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><?php }} ?>
