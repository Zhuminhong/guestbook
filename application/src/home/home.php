<?php
/**
*作者：ZMH 
*内容：home:前台php文件
*时间：20170725
*/

//导入smarty配置文件
include '../../../smarty.init.php';

$pdo=new PDO("mysql:host=".HOST.";dbname=".DBNAME,USERNAME,PWD);
$pdo->query("set names utf8");
/////////////////////分页开始/////////////////////////
//总记录数
$total=$pdo->query("select * from member")->rowCount();
//每页显示数据的条数
$pageSize=3;
$pageTotal=ceil($total/$pageSize);
//判断page是否有值
if($_GET['page']){
	$page=$_GET['page'];
	//当当前页大于总页数的时候，就让当前页书一直等于总页数
	if($page>=$pageTotal){
		$page=$pageTotal;
	}
}else{
	$page=1;
}
/////////////////////////分页结束///////////////////////
$sql = "select * from member order by id desc limit ".($page-1)*$pageSize.",".$pageSize;
$result=$pdo->query($sql);
$data=$result->fetchAll(PDO::FETCH_OBJ);
//根据总页数，循环出每一页
//pagination:bootstrap的分页类;
$str="<ul class='pagination'>";
//如果在第一页，就无法点击上一页了
if($page==1){
	$str.='<li class="disabled"><a href="?page='.($page-1).'"><span>&laquo;</span></a></li>';			 
}else{
	$str.='<li><a href="?page='.($page-1).'"><span>&laquo;</span></a></li>';
}

for($i=1;$i<=$pageTotal;$i++){
	if($page==$i){
		$str.="<li class='active'><a href='?page=".$i."'>".$i."</a></li>";
	}else{
		$str.="<li><a href='?page=".$i."'>".$i."</a></li>";
	}	
}
//如果在最后一页，就无法点击下一页了
if($page==$pageTotal){
	$str.='<li class="disabled"><a href="?page='.($page+1).'"><span>&raquo;</span></a></li>';
}else{
	$str.='<li><a href="?page='.($page+1).'"><span>&raquo;</span></a></li>';
}

$str.="</ul>";
//把分页字符串赋值给模板
$smarty->assign("page",$str);

//把数据赋值给变量
$smarty->assign("data", $data);

//指定要显示的静态页面
$smarty->display('home/home.html');
?>
