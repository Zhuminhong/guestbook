<?php
/* Smarty version 3.1.30, created on 2017-07-25 19:00:08
  from "C:\xampp\htdocs\Day07_0725\guestbook\application\views\home\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597724b87c9129_23060349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfcd42448bf01becadaeebabd8037d0083ce6042' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Day07_0725\\guestbook\\application\\views\\home\\home.html',
      1 => 1500980406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597724b87c9129_23060349 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<!--以home.php为路径的基准点 -->
<link rel="stylesheet" href="../../../libs/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../public/styles/home.css">
<body>
<h3>USER MANAGEMENT</h3>
<table class="table table-bordered table-striped table-hover">
	<tr><td>用户名</td><td>用户邮箱</td><td>注册时间</td><td>操作</td></tr>
	<!-- 循环 遍历出 对象数组中的 各个属性值-->
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?> 
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value->userName;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value->email;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value->regTime;?>
</td>
		<td>
			<a>修改</a>
			<a href='delete.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
'>删除</a>
		</td>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<tr><td colspan="4" class="add"><a href='add.php'>添加数据</a></td></tr>
</table>
<div class="page"><?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</div>

</body>
</html>
<?php }
}
