<?php

	function displayServers()
	{
		include('db.php');
		$stmt = $dbHandle->prepare('SELECT * FROM servers LIMIT 20');  
		//$stmt->bind_param('s', $name);  

		$stmt->execute();  

		$result = $stmt->get_result(); 
		echo '<table class="am-table">';
		?>
		 <thead>
		  <tr>
			<th>名称</th>
			<th>模式</th>
			<th>玩家</th>
			<th>IP</th>
		  </tr>
		  </thead>
		  <tbody>
		<?
		while ($row = $result->fetch_assoc()) 
		{  
			
			//$info = getBaiscInfo($row['IP'],$row['PORT']);实时查询代码(耗资源...)
			if($info != null)
			{
				echo '<tr>';
				echo '<td>'. iconv("GB2312","UTF-8",$info['hostname']).'</td>';
				echo '<td>'.iconv("GB2312","UTF-8",$info['gamemode']).'</td>';
				echo '<td>'.$info['players'].'/'.$info['maxplayers'].'</td>';
				echo '<td>'.iconv("GB2312","UTF-8",$row['IP']).'</td>';
				echo '</tr>';
			}
		} 
		
		echo '</tbody></table>';
	

	}
	function getBaiscInfo($ip,$port)
	{
		require("SampQuery.class.php"); 
        $query = new SampQuery($ip, $port); 
		
		if ($query->connect()) 
		{ // If a successful connection has been made 
            
			$ret = $query->getInfo(); 
			$query->close();
            return $ret;
            

		}
      

		return null;
	}

	

?>