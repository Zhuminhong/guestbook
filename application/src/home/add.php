<?php
/**
*作者：ZMH 
*内容:后台 ，添加用户数据
*时间：20170725
*/
//导入smarty配置文件
include '../../../smarty.init.php';

$pdo=new PDO("mysql:host=".HOST.";dbname=".DBNAME,USERNAME,PWD);
$pdo->query("set names utf8");

//判断是否点击了提交按钮
if($_POST["send"]){
	$searchSql="select *
				from   member
   				where  userName='".$_POST['userName']."'";
	$searchResult=$pdo->query($searchSql);
	$oneUser=$searchResult->fetchAll(PDO::FETCH_OBJ);

	//如果用户名已存在
	if($oneUser[0]){
		echo '<script>
				alert("用户名已存在");
				history.go(-1);
			</script>';
		return false;
	}
	
	//添加数据
	$sql="insert into member(
		userName,
		pwd,
		email,
		regTime
	)values(
		'". $_POST['userName'] ."',
		'". md5($_POST['pwd']) ."',
		'". $_POST['email'] ."',
		'".date('Y-m-d H:i:s')."'
	)";

	//执行insert语句
	$result=$pdo->exec($sql);
	if($result){
		//echo "ok";
		echo '<script>
			alert("数据添加成功！");
			location.href="home.php";
			</script>';
	}else{
		echo "failed";
	}
}

//指定要显示的静态页面
$smarty->display('home/add.html');
?>
