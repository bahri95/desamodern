<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 23:06:05
         compiled from "application/views/private/harga/ekspor_list.html" */ ?>
<?php /*%%SmartyHeaderCode:97260788757ea1488e951c9-25236598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0d3dee65258b52422784d548c5ea883373f23a8' => 
    array (
      0 => 'application/views/private/harga/ekspor_list.html',
      1 => 1474855392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97260788757ea1488e951c9-25236598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea1488ef1a74_17893380',
  'variables' => 
  array (
    'url_add' => 0,
    'data_ekspor' => 0,
    'result' => 0,
    'no_ekspor' => 0,
    'url_edit' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea1488ef1a74_17893380')) {function content_57ea1488ef1a74_17893380($_smarty_tpl) {?>                     <div class="box">
/3" title="Tambah Data" class="btn bg-olive btn-flat"><i class='fa fa-plus'></i> Tambah Data</a></div>
 $_from = $_smarty_tpl->tpl_vars['data_ekspor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
" class="checkbox" /></td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_harga'];?>
" title="Edit" class="btn btn-success btn-flat"><i class='fa fa-pencil'></i></a>
<?php }?></ul>