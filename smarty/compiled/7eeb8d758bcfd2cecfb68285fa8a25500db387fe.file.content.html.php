<?php /* Smarty version Smarty-3.1.17, created on 2016-11-13 14:06:39
         compiled from "application\views\web\login\content.html" */ ?>
<?php /*%%SmartyHeaderCode:990158032033908ae7-69174252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eeb8d758bcfd2cecfb68285fa8a25500db387fe' => 
    array (
      0 => 'application\\views\\web\\login\\content.html',
      1 => 1479042394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '990158032033908ae7-69174252',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_580320339184e4_53227867',
  'variables' => 
  array (
    'notification_msg' => 0,
    'url_login_process_admin' => 0,
    'url_lupa_pass_admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580320339184e4_53227867')) {function content_580320339184e4_53227867($_smarty_tpl) {?><div class="container">
  <div class="row">
    <br/>
    <center>
      <h2>ADMINISTRATOR
      </h2>
    </center>
    <div class="col-sm-4 col-sm-offset-4 login_box">
      <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>
      <div class="b-form-row">
        <div class="b-shortcode-example">
          <div class="b-alert-warning f-alert-warning">
            <div class="b-right">
              <i class="fa fa-times-circle-o">
              </i>
            </div>
            <div class="b-remaining">
              <i class="fa fa-exclamation-triangle">
              </i><?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>

            </div>
          </div>
        </div>
      </div>
      <?php }?>
      <h3 style="color:#01A9DB">LOGIN
      </h3>
      <br/>
      <form name="form_login2" id="form_login2" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_login_process_admin']->value;?>
" class="b-form f-form b-form-inline f-form-inline">
        <div class="form-group has-feedback">
          <input type="text" id="username" name="userid" class="form-control" placeholder="username">
          <i class="form-control-feedback glyphicon glyphicon-user">
          </i>
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="password" name="password" class="form-control" placeholder="password">
          <i class="form-control-feedback glyphicon glyphicon-lock">
          </i>
        </div>
        <button type="submit" name="b_login" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">LOGIN
        </button>
        <br/>
        <br/>
        <center>
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_lupa_pass_admin']->value;?>
">Lupa Password?
          </a>
        </center>
        <br/>
        </div>
      </form>
  </div>
</div>
<?php }} ?>
