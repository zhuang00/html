// var ajax = new XMLHttpRequest();
// alert(ajax);
//
// // new ActiveXObject("Microsoft.XMLHTTP");
// // alert(ajax);
function getAjax() {
    return window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
    //     var br = window.XMLHttpRequest?'!ie6':"==ie6";
    // alert(br)
}
//1指定URL 2发送请求 3获取数据
var ajax = getAjax();
//AJAX事件监听
ajax.onreadystatechange=function(){
    //所有数据都接收完 并且状态码为200 表示请求完成并且是成功的
    if(ajax.readyState==4) {
        //接收数据没有问题
        if (ajax.status == 200) {
            alert(ajax.responseText)
        }else {
        alert("出错了。。。");
        }
    }
}
ajax.open("get","2.php");//指定URL
ajax.send();
// ajax.onreadystatechange()