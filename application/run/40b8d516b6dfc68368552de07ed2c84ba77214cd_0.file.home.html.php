<?php
/* Smarty version 3.1.30, created on 2017-07-25 14:54:39
  from "C:\xampp\htdocs\Day07_0725\guestBook\application\views\home\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5976eb2fd9f7d5_13615940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40b8d516b6dfc68368552de07ed2c84ba77214cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Day07_0725\\guestBook\\application\\views\\home\\home.html',
      1 => 1500964957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5976eb2fd9f7d5_13615940 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<!--以home.php为路径的基准点 -->
<link rel="stylesheet" href="../../../libs/bootstrap/css/bootstrap.min.css">
<body>
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

</table>
<div class="page"><?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</div>
<style>
	.page{
		text-align:center
	}
</style>
</body>
</html>
<?php }
}
