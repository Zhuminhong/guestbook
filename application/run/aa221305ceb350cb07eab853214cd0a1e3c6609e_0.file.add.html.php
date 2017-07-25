<?php
/* Smarty version 3.1.30, created on 2017-07-25 19:40:04
  from "C:\xampp\htdocs\Day07_0725\guestbook\application\views\home\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59772e1420c681_02209010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa221305ceb350cb07eab853214cd0a1e3c6609e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Day07_0725\\guestbook\\application\\views\\home\\add.html',
      1 => 1500982801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59772e1420c681_02209010 (Smarty_Internal_Template $_smarty_tpl) {
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
				<div class='form-group'>
					<label for=''>姓名  NAME</label><br>
					<input name="userName" type="text" class="form-control" placeholder="请输入姓名" id="input0">
					<div id="info0">用户名必须是。。。</div>
				</div>
				<div class='form-group'>
					<label for=''>密码  PASSWORD</label><br>
					<input name="pwd" type="password" class="form-control" placeholder="请输入密码" id="input1">
					<div id="info1">密码必须是。。。</div>
				</div>
				<div class='form-group'>
					<label for=''>邮箱  EMAIL</label><br>
					<input name="email" type="email" class="form-control" placeholder="请输入邮箱" id="input2">
					<div id="info2">邮箱只支持。。。。</div>
				</div>
				<input name="send" type="submit" value="SUBMIT" class="btn btn-primary form-control addBtn">
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
>
<?php }
}
