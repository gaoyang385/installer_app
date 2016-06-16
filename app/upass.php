<?php
//SendMsg('17721029326','安装,王小二,18801773343,2016-06-30');
function SendMsg($tel,$content)
{
	$sid='d2f40dc267a9b07ceb3e04ea0918cd2d';
	$appId='65053d942375447db1fcd32923e629c8';
	$time=date('yyyyMMddHHmmssSSS');
	$templateId='25504';
	$to=$tel;
	$param=$content;
	$sign=md5($sid.$time.'18345eae42937408f3f4cbe6f1de5d12');


	 $curl = curl_init();
    //设置抓取的url
    curl_setopt($curl, CURLOPT_URL, 'http://www.ucpaas.com/maap/sms/code');
    //设置头文件的信息作为数据流输出
    curl_setopt($curl, CURLOPT_HEADER, 1);
    //设置获取的信息以文件流的形式返回，而不是直接输出。
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    //设置post方式提交
    curl_setopt($curl, CURLOPT_POST, 1);
    //设置post数据
    $post_data = array(
        "sid" => $sid,
        "appId" => $appId,
        "time"=>$time,
        "templateId"=>$templateId,
        "to"=>$to,
        "param"=>$param,
        "sign"=>$sign
        );
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post_data));
    //执行命令
    $data = curl_exec($curl);
    //关闭URL请求
    curl_close($curl);
    //显示获得的数据
}

?>