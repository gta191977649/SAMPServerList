<?php
	$lan = isset($_GET['lang']);
	if(empty($lan)) $lan = 'cn';//默认设置为中文
	
	//根据语言加载翻译文件
	switch($lan)
	{
		case 'cn': include("Lang/zh_cn.php");
	}


?>