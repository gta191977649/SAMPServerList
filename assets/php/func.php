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
			<th>推荐度</th>
			<th>最后检测</th>
		  </tr>
		  </thead>
		  <tbody>
		<?
		while ($row = $result->fetch_assoc()) 
		{  
			
			//$info = getBaiscInfo($row['IP'],$row['PORT']);实时查询代码(耗资源...)
		
			echo '<tr>';
			echo '<td>'.$row['NAME'].'</td>';
			echo '<td>'.$row['GAMEMODE'].'</td>';
			echo '<td>'.$row['PCURRENT'].'/'.$row['PMAX'].'</td>';
			echo '<td>'.$row['IP'].'</td>';
			echo '<td>'.$row['RATE'].'</td>';
			echo '<td>'.$row['LASTCK'].'</td>';
			echo '</tr>';
			
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