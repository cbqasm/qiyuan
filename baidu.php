<?php 
//先初始化curl
$ch = curl_init();

//配置curl
//设置虚拟浏览器的请求地址,默认方式为get方式
curl_setopt($ch, CURLOPT_URL, "http://www.baidu.com");
//是否以字符串的形式进行返回,true代表是,false就是代表不是,一般使用true
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//禁止访问的服务器去询问浏览器是否存在公用名,证书和主机名,0代表禁止,1代表开启
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//禁止服务器短校验SSL证书,false代表禁止,true开启
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

//执行curl,让虚拟浏览器发出请求,如果希望把请求的页面进行输出,就要在发送结果接收返回消息
$baidu = curl_exec($ch);
//希望看到请求的结果,我们要对返回的数据进行判断
if ($baidu === false) {
	//如果恒等于false,就代表请求失败了
	echo curl_error($ch);
}else{
	//代表请求成功
	echo $baidu;
}


//关闭curl,清楚掉虚拟浏览器
curl_close($ch);



 ?>