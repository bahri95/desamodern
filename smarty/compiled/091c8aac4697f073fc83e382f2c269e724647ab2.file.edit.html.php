<?php /* Smarty version Smarty-3.1.17, created on 2016-10-19 03:40:30
         compiled from "application\views\private\foto\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1674357ebe9fa85b6e7-04228656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '091c8aac4697f073fc83e382f2c269e724647ab2' => 
    array (
      0 => 'application\\views\\private\\foto\\edit.html',
      1 => 1476841229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1674357ebe9fa85b6e7-04228656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ebe9fa936319_05286867',
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
<?php if ($_valid && !is_callable('content_57ebe9fa936319_05286867')) {function content_57ebe9fa936319_05286867($_smarty_tpl) {?><section class="content-header">  <h1>    Album Foto    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i> Data Album      </a>    </li>    <li class="active">Edit Data Album    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-9">      <!-- form update email-->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Tambah Album          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">          <div class="box-body">            <div class="form-group">              <label for="user_name_lama">Nama Album *              </label>              <input type="hidden" name="id_album" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_album'];?>
" size="100" maxlength="255" />              <input type="text" name="nama_album" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_album'];?>
" size="100" maxlength="255" />            </div>                       <div class="form-group">                    <label for="user_name_lama">Tanggal *                    </label>                    <input type="text" name="tanggal" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal'];?>
" class="tanggal_album form-control" size="10" maxlength="10" style="width:150px;" />                  </div>                     </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <i class="fa fa-save">              </i>  Simpan            </button>            <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal            </a>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><script type="text/javascript">  var loadFile = function(event) {    var output = document.getElementById('output');    output.src = URL.createObjectURL(event.target.files[0]);  };</script><?php }} ?>
