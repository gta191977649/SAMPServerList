<?php
	//日志更新PHP文件 （执行此文件会自动把全部数据库里的数据更新）
	//By Episodes
	updateLog();
	function updateLog()
	{
		require("db.php");
		include_once("func.php");

		$stmt = $dbHandle->prepare('SELECT ID,IP,PORT FROM servers'); 
		$stmt->execute();  
		$result = $stmt->get_result(); 



		while ($row = $result->fetch_assoc()) 
		{  
			//处理数据
			if(!empty($row["IP"]) && !empty($row["PORT"])) //判断数据库里的数据是否合法
			{
				$data = getBaiscInfo($row["IP"],$row["PORT"]);//获得事实服务器数据...
				//$currentPlayer = file_get_contents('./webquary.php?TYPE=player&IP=justnowmovie.ddns.net&PORT=7777');
				//http://localhost/SAMPServerList/assets/php/webquary.php?TYPE=player&IP=justnowmovie.ddns.net&PORT=7777
				
				if($data !=null)
				{
					echo("处理: 服务器ID: ".$row["ID"]."数据: ".$data["players"]."<br/>");
					updateServerDB($row["ID"],$data["players"]);
					
				}
				else
				{
					echo("处理: 服务器ID: ".$row["ID"]."查询出错！");
					updateServerDBFail($row["ID"]);
				}
			}


		}
	}

?>