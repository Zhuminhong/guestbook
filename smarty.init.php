<?php
/**
*作者：ZMH 
*内容：smarty 配置文件
*时间：20170725
*/
//开启session
session_start();
//设置错误报告级别
error_reporting(E_ALL^E_NOTICE^E_STRICT^E_DEPRECATED);
//设置默认时区
date_default_timezone_set("PRC");

//__FILE__ ——得到当前文件名和完整目录
//dirname()——得到当前文件的完整目录
//ROOT ——得到项目的根目录
define("ROOT", dirname(__FILE__)) ;
//导入smarty类
include ROOT."/libs/smarty/Smarty.class.php";
//导入配置文件 
include ROOT."/application/configs/config.php";

$smarty=new Smarty();

//自定义模板目录
$smarty->template_dir=ROOT."/application/views";
//自定义编译目录
//$smarty->compile_dir=ROOT."/application/run";
$smarty->setCompileDir(ROOT."/application/run");
?>