/**
 * Created by lenovo on 2017/7/20.
 * 作者：ZMH
 * 内容：表单用户名、密码和邮箱的验证
 */
var infoArr = [
    "用户名可由汉字、字母、下划线组成，长度不超过14位",
    "用户密码可由字母和数字组成，长度6-14位",
    "支持163、126和qq邮箱"
];
var errArr = [
    "用户名不合法，请重新输入！",
    "用户密码不合法，请重新输入！",
    "邮箱不合法，请重新输入！"
];
var emptyArr = [
    "用户名不能为空！", "用户密码不能为空！", "用户邮箱不能为空！"
];
var confArr = [
    /^([\u4e00-\u9fa5]|[A-z]){1,14}$/, /^([A-z]|[0-9]){6,50}$/, /^\w+@{1}(163|126|qq)\.(com|cn)$/
];
var flagArr=[false,false,false]; //判断所有输入框均已满足要求的开关
//输入框失去焦点的时候触发的事件
function blurConf(num){
    var content=$("#input"+num).val();
    if($("#input"+num).val()==""){
        $("#input"+num).next("div").html(emptyArr[num]).css("color","#FF0034").show("1000");
       flagArr[num]=false;
    }else if(confArr[num].test(content)==false){
        $("#input"+num).next("div").html(errArr[num]).css("color","#FF0034").show("1000");
        flagArr[num]=false;
    }else{
    	  flagArr[num]=true;
        $("#input"+num).next("div").hide("1000");
    }
}
//点击输入框触发的事件
function clickTips(num){
    $("#input"+num).click(function () {
        $("#input"+num).next("div").html(infoArr[num]).css("color","#FFE053").show("1000");
    })
}



