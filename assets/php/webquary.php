<?php
//error_reporting(0);
header("Content-Type:text/html;charset=UTF-8");
if(isset($_GET["IP"])) $IP = $_GET["IP"];
if(isset($_GET["PORT"])) $PORT = $_GET["PORT"];
if(isset($_GET["TYPE"])) $type = $_GET["TYPE"];

if($type == "ol")
{
	//调用SAMP API
	require "SampQueryAPI.php";
	$query = new SampQueryAPI($IP, $PORT);
	
	if($query->isOnline())
	{
		$aInformation = $query->getInfo();
		//header("Location: draw.php/?string="."在线玩家: ".$aInformation['players']."/".$aInformation['maxplayers']."");
		
		//echo $aInformation['players']."/".$aInformation['maxplayers'];//显示在线玩家
		//DrawStringWithPicture($aInformation['players']."/".$aInformation['maxplayers']);
		echo "服务器在线:)";
		die();
	}
	else
	{
		echo "服务器不在线!";
		die();
		//DrawStringWithPicture();
		
	}
}


if($type == "player")
{
	//调用SAMP API
	require "SampQuery.class.php";
	$query = new SampQuery($IP, $PORT);
	
	if($query->connect())
	{
		$aInformation = $query->getInfo();
		//header("Location: draw.php/?string="."在线玩家: ".$aInformation['players']."/".$aInformation['maxplayers']."");
		
		echo $aInformation['players'];//显示在线玩家
		die();
		//DrawStringWithPicture($aInformation['players']."/".$aInformation['maxplayers']);
		//echo "服务器在线:)";
	}
	else
	{
		echo "ERROR";
		die();
		//DrawStringWithPicture();
		
	}
}

if($type == "mode")
{
	//调用SAMP API
	require "SampQueryAPI.php";
	$query = new SampQueryAPI($IP, $PORT);
	
	if($query->connect())
	{
		$aInformation = $query->getInfo();
		//header("Location: draw.php/?string="."在线玩家: ".$aInformation['players']."/".$aInformation['maxplayers']."");
		
		echo iconv("GB2312","UTF-8",$aInformation['gamemode']);
		die();
		//DrawStringWithPicture($aInformation['players']."/".$aInformation['maxplayers']);
		//echo "服务器在线:)";
	}
	else
	{
		echo "ERROR";
		die();
		//DrawStringWithPicture();
		
	}
}
?>