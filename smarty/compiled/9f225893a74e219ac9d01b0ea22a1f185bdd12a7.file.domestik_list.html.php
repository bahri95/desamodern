<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 02:41:12
         compiled from "application/views/private/harga/domestik_list.html" */ ?>
<?php /*%%SmartyHeaderCode:86365951857ea1488deb547-90735858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f225893a74e219ac9d01b0ea22a1f185bdd12a7' => 
    array (
      0 => 'application/views/private/harga/domestik_list.html',
      1 => 1474855100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86365951857ea1488deb547-90735858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_add' => 0,
    'data_domestik_input' => 0,
    'result' => 0,
    'no' => 0,
    'url_edit' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea1488e5bc06_85487985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea1488e5bc06_85487985')) {function content_57ea1488e5bc06_85487985($_smarty_tpl) {?>                     <div class="box">
/1" title="Tambah Data" class="btn bg-olive btn-flat"><i class='fa fa-plus'></i> Tambah Data</a></div>
 $_from = $_smarty_tpl->tpl_vars['data_domestik_input']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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