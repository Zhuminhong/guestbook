<?php
/* Smarty version 3.1.30, created on 2017-07-25 20:23:44
  from "C:\xampp\htdocs\Day07_0725\guestbook\application\views\home\update.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59773850caabf6_92574530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd68b3a134e27d48e5e0d20d979c11d3e52a15895' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Day07_0725\\guestbook\\application\\views\\home\\update.html',
      1 => 1500985415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59773850caabf6_92574530 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="../../../libs/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../public/styles/home.css">
</head>
<body>
	<h3>USER MANAGEMENT</h3>
	<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-1 hidden-xs"></div>
		<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
			<form action="" method="post" id="addUser">
				<!--保存原来的密码 -->
				<input name="pwd2" type="hidden" value=<?php ob_start();
echo $_smarty_tpl->tpl_vars['pwd']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
>
				<div class='form-group'>
					<label for=''>姓名  NAME</label><br>
					<input name="userName" type="text" class="form-control" placeholder="请输入姓名" id="input0" value=<?php ob_start();
echo $_smarty_tpl->tpl_vars['userName']->value;
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
>
					<div id="info0">用户名必须是。。。</div>
				</div>
				<div class='form-group'>
					<label for=''>密码  PASSWORD</label><br>
					<input name="pwd" type="password" class="form-control" placeholder="请输入密码" id="input1" value=<?php ob_start();
echo $_smarty_tpl->tpl_vars['pwd']->value;
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>
>
					<div id="info1">密码必须是。。。</div>
				</div>
				<div class='form-group'>
					<label for=''>邮箱  EMAIL</label><br>
					<input name="email" type="email" class="form-control" placeholder="请输入邮箱" id="input2" value=<?php ob_start();
echo $_smarty_tpl->tpl_vars['email']->value;
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>
>
					<div id="info2">邮箱只支持。。。。</div>
				</div>
				<input name="send" type="submit" value="CHANGE" class="btn btn-primary form-control">
			</form>	
		</div>
		<div class="col-lg-3 col-md-3 col-sm-1 hidden-xs"></div>
	</div>
</div>
<!--数据添加成功提示-->
<div class="modal fade" id="addSuccess" data-backdrop="true" data-keyboard="true" tabindex="1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body" style="color:#717171;">用户添加成功！</div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">确认</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php echo '<script'; ?>
 src='../../../public/scripts/jquery-3.2.1.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='../../../libs/bootstrap/js/bootstrap.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='../../../public/scripts/formValidate.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='../../../public/scripts/add.js'><?php echo '</script'; ?>
><?php }
}
