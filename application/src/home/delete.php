<?php
/**
*作者：ZMH 
*内容：删除数据
*时间：20170725
*/
//导入smarty配置文件
include '../../../smarty.init.php';

$pdo=new PDO("mysql:host=".HOST.";dbname=".DBNAME,USERNAME,PWD);
$pdo->query("set names utf8");

if($_GET["id"]){
	$sql="delete from member where id=".$_GET["id"];
	//删除成功，返回删除的条数，int类型
	$result=$pdo->exec($sql);
	//如果删除成功的话
	if($result){
		header("location:home.php");
	}else{
		echo "删除失败";
	}
}else{
	header("location:home.php");
}
?>
