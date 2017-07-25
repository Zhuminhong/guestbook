<?php
/**
*作者：ZMH 
*内容：数据修改
*时间：20170725
*/
//导入smarty配置文件
include '../../../smarty.init.php';

$pdo=new PDO("mysql:host=".HOST.";dbname=".DBNAME,USERNAME,PWD);
$pdo->query("set names utf8");

//如果没有id，就跳转回首页
if($_GET["id"]){
	$sql="select * from member where id=".$_GET["id"];
	//echo $sql;
	$result=$pdo->query($sql);
	//从结果集中获取所有的数据
	$data = $result->fetchAll(PDO::FETCH_OBJ);
	//var_dump($data[0]);
	//判断数据是否存在
	if($data[0]==null){
		echo "数据不存在";
	}
	
	//将需要修改的值传递到html中
	$smarty->assign("userName", $data[0]->userName);
	$smarty->assign("pwd", $data[0]->pwd);
	$smarty->assign("email", $data[0]->email);
	//如果点击了提交按钮
	if($_POST["send"]){
		/* 如果没有修改密码，$pwd的值就是原来的密码
		 * 如果修改了，$pwd的值就是加密后的值
		 *   */
		if($_POST['pwd2']==$_POST['pwd']){
			$pwd=$_POST['pwd'];
		}else{
			$pwd=md5($_POST['pwd']);
		}
		//var_dump($_POST);
		//创建修改的sql语句
		$sql="update member
				 set userName='".$_POST['userName']."',
					 pwd='".$pwd."',
					 email='".$_POST['email']."'
			  where  id=".$_GET['id'];
		//echo $sql;
		$result=$pdo->exec($sql);
		/* header("location:update.php?id=".$_GET["id"]); */
		if($result){
			header("location:home.php");
		}else if($result==0){
			echo "<script>alert('没有修改')</script>";
		}else{
			echo "<script>alert('修改失败')</script>";
		}
		
	}
}else{
	header("location:getAll.php");
}

//指定要显示的静态页面
$smarty->display('home/update.html');
?>