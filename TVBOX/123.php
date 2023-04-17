<?php
error_reporting(E_ERROR | E_PARSE);//屏蔽错误
header('Content-Type: text/html;charset=utf-8');//utf-8格式
header('Access-Control-Allow-Origin:*'); // *代表允许任何网址请求
header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); // 允许请求的类型
// header('Access-Control-Allow-Credentials: true'); // 设置是否允许发送 cookies
 header('Access-Control-Allow-Headers: Content-Type,Content-Length,Accept-Encoding,X-Requested-with, Origin'); // 设置允许自定义请求头的字段
 /*
 @@竹子哥折腾
 使用方法：/123.php?url=https://api.xinlangapi.com/xinlangapi.php/provide/vod/from/xlm3u8/ 注意：后面必须是云播资源站
 */
 
$url=$_GET["url"];
if(strrpos($url,"?")){
	$url=substr($url,0,strrpos($url,"?"));
}

$data=file_get_contents($url);
$json=json_decode($data,true);
$classarr=$json['class'];
for ($i=0; $i<count($classarr); $i++) {//数组循环
		 if(strstr($classarr[$i]['type_name'],"伦理")==true){
		 $id=$classarr[$i]['type_id'];
		 break;
	     }
}

if($id!=""){
    //echo file_get_contents($url."?ac=list&t=".$id);
	echo "好像发现点什么:";
	echo "<br />";
	echo $url."?ac=list&t=".$id;
}else{
	echo "散了吧没什么好东西";
}
