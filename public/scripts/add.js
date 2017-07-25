/**
 * 添加用户数据
 */
//给各个输入框绑定事件
	$("input[placeholder]").each(function(index){
		$(this).blur(function(){
			blurConf(index);
		})
		$(this).focus(function(){
			clickTips(index);
		})
	})
	//点击提交，触发所有验证
	$("input[name='send']").click(function(){
		for(var i=0;i<3;i++){
			blurConf(i);
		}
		if( flagArr[0]==true &&  flagArr[1]==true &&  flagArr[2]==true){
	
		}else{
			return false
		}
	})
	//表单出现
	$(function(){
		$("form").css({"transform":"scale(1)","opacity":"1"})
	})
	//点击确认，跳转页面
	/*$("#addSuccess button").click(function(){
		location.href='getAll.php';
	})*/