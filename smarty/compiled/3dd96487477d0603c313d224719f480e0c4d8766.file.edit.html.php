<?php /* Smarty version Smarty-3.1.17, created on 2016-11-20 10:21:52
         compiled from "application\views\private\berita\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:670957ec5e577155f9-99830456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dd96487477d0603c313d224719f480e0c4d8766' => 
    array (
      0 => 'application\\views\\private\\berita\\edit.html',
      1 => 1479633564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '670957ec5e577155f9-99830456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec5e577a9d18_43625133',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'datakategori' => 0,
    'rs_kategori' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec5e577a9d18_43625133')) {function content_57ec5e577a9d18_43625133($_smarty_tpl) {?><section class="content-header">
  <h1>
    Berita
    <small>panel
    </small>
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">
        <i class="fa fa-home">
        </i> Home
      </a>
    </li>
    <li>
      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">
        <i class="fa ">
        </i> Berita
      </a>
    </li>
    <li class="active">Tambah Data
    </li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!-- notification template -->
    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>
    <div class="col-md-12">
      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>
      <div class="alert alert-danger alert-dismissable">
        <i class="fa fa-ban">
        </i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
        </button>
        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.
      </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>
      <div class="alert alert-success alert-dismissable">
        <i class="fa fa-check">
        </i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
        </button>
        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.
      </div>
      <?php }?>
    </div>
    <?php }?>
    <div class="col-md-9">
      <!-- form update email-->
      <div class="box box-success">
      
          <!-- form start -->
          <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">
          
              <div class="tab-pane active" id="tab_1">
                <div class="box-body">
                  <div class="form-group">
                    <input type="hidden" name="id_berita" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_berita'];?>
">        
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
                    <select name="id_kategori" class="form-control" style="width: 50%;">
                      <?php  $_smarty_tpl->tpl_vars['rs_kategori'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs_kategori']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datakategori']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs_kategori']->key => $_smarty_tpl->tpl_vars['rs_kategori']->value) {
$_smarty_tpl->tpl_vars['rs_kategori']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['rs_kategori']->value['id_kategori'];?>
" 
                        <?php if ($_smarty_tpl->tpl_vars['rs_kategori']->value['id_kategori']==$_smarty_tpl->tpl_vars['data']->value['id_kategori']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['rs_kategori']->value['kategori_rubrik'];?>
</option>
                      <?php } ?>
                    </select>
                  </div>
                   
                  <div class="form-group">
                    <label for="user_name_lama">Judul Berita * 
                    </label>
                    <input type="text" name="judul" id="judul" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
" class="form-control" size="50" maxlength="255" />
                  </div>
                  
                  <div class="form-group">
                    <label for="user_name_lama">Isi Berita
                    </label>
                    <textarea name="content" cols="72" rows="10"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

                    </textarea>
                  </div>
                   <div class="form-group">
                    <label for="berita_berjalan">Berita Berjalan</label>
                    <select name="berita_berjalan" class="form-control" style="width: 10%;">
                      <option  value="yes"  <?php if ($_smarty_tpl->tpl_vars['data']->value['berita_berjalan']=="yes") {?>selected="selected"<?php }?>>Ya</option>
                      <option value="no"  <?php if ($_smarty_tpl->tpl_vars['data']->value['berita_berjalan']=="no") {?>selected="selected"<?php }?>>Tidak</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="publish">Publish</label>
                    <select name="publish" class="form-control" style="width: 10%;">
                      <option value="yes" <?php if ($_smarty_tpl->tpl_vars['data']->value['publish']=="yes") {?>selected="selected"<?php }?>>Ya</option>
                      <option value="no" <?php if ($_smarty_tpl->tpl_vars['data']->value['publish']=="no") {?>selected="selected"<?php }?>>Tidak</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="user_name_lama">Keyword
                    </label>
                    <input type="text" name="keywords" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['keywords'];?>
">
                  </div>
                  <div align="center"><?php echo $_smarty_tpl->tpl_vars['data']->value['image_berita'];?>
</div>
                  <div class="form-group">
                   <label for="user_name_lama">File Gambar (300x400 pixel) 
                    
                    </label>
                    <span>
                      <input type="file" accept="image/*" onchange="loadFile(event)" 
                             style="visibility:hidden; width: 1px;" 
                             id='foto' name='foto'  
                             onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> 
                      <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/> 
                      &nbsp;
                      <span  class="badge badge-important" >
                      </span>
                    </span>
                  </div>
                  <center>
                    <img id="output" style="height:200px; margin-top:10px;"/>
                  </center>
                  <div class="form-group">
                    <label for="user_name_lama">Keterangan Gambar
                    </label>
                    <input type="text" name="keterangan_gambar" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['keterangan_gambar'];?>
" size="100" maxlength="200" class="form-control" />
                  </div>
                 
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.tabs pane 1-->
             
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save">
                    </i>  Simpan
                  </button>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">
                    <i class="fa fa-close">
                    </i>  Batal
                  </a>
                </div>
              </div>
              <!-- /.tabs pane 2-->
            </div>
            <!-- /.tabs content-->
          </form>
        </div>
        <!-- /.tabs customs-->
        </form>
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
  </div>
<!-- /.row -->
</section>
<!-- /.content -->

<script type="text/javascript">
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>


<?php }} ?>
