<?php
	function displayServers()
	{
		require_once('db.php');
		include('language.php');
		
		$stmt = $dbHandle->prepare('SELECT * FROM servers LIMIT 20');  
		//$stmt->bind_param('s', $name);  

		$stmt->execute();  

		$result = $stmt->get_result(); 
		echo '<table class="am-table am-table-hover">';
		?>
		 <thead>
		  <tr>
			<th><?php echo $LAN['SERVER_TH_NAME']; ?></th>
			<th><?php echo $LAN['SERVER_TH_MODE']; ?></th>
			<th><?php echo $LAN['SERVER_TH_PLAYER']; ?></th>
			<th><?php echo $LAN['SERVER_TH_IP']; ?></th>
			<th><?php echo $LAN['SERVER_TH_RATE']; ?></th>
			<th><?php echo $LAN['SERVER_TH_LSCK']; ?></th>
		  </tr>
		  </thead>
		  <tbody>
		<?
		while ($row = $result->fetch_assoc()) 
		{  
			
			//$info = getBaiscInfo($row['IP'],$row['PORT']);实时查询代码(耗资源...)
		
			echo '<tr>';
			echo '<td>'.'<a href="server.php?id='.$row['ID'].'">'.array_iconv($row['NAME']).'</a></td>';
			echo '<td>'.array_iconv($row['GAMEMODE']).'</td>';
			echo '<td>'.$row['PCURRENT'].'/'.$row['PMAX'].'</td>';
			echo '<td>'.$row['IP'].":".$row['PORT'].'</td>';
			echo '<td>'.$row['RATE'].'</td>';
			if($row['SYNSTATE'] == 1) echo '<td>'.$row['LASTCK'].'<a href="#" class="am-icon-check am-icon-fw" style="color:#5EB95E;"></a></td>';
			else echo '<td>'.$row['LASTCK'].'<a href="#" class="am-icon-exclamation-circle am-icon-fw" style="color:#DD514C; "></a></td>';
			echo '</tr>';
			
		} 
		
		echo '</tbody></table>';
	

	}
	function getBaiscInfo($ip,$port)
	{
		require_once("SampQuery.class.php"); 
        $query = new SampQuery($ip, $port); 
		
		if ($query->connect()) 
		{ // If a successful connection has been made 
            
			$ret = $query->getInfo(); 
			$query->close();
	

            return $ret;
		}

		return null;
	}
	function getServerFromDB($serverID)
	{
		require_once('db.php');
		
		$stmt = $dbHandle->prepare('SELECT * FROM servers WHERE `ID` = ? LIMIT 1');  
		$stmt->bind_param('i', $serverID);  
		$stmt->execute();  
		$result = $stmt->get_result(); 
		$row = $result->fetch_assoc();
		return $row;
	}

	function updateServerDB($serverID,$player)
	{
		include('config.php');
		$dbHandle = new mysqli($DB['HOST'], $DB['USER'],$DB['PWD'], $DB['DB']);
		$stmt = $dbHandle->prepare("UPDATE `servers` SET  `PCURRENT` =  ? , `LASTCK` = now(), `SYNSTATE` = 1 WHERE  `ID` = ?");  
		$stmt->bind_param('ii', $player,$serverID);  
		$stmt->execute();  
	}
	function updateServerDBFail($serverID)
	{
		include('config.php');
	
		$dbHandle = new mysqli($DB['HOST'], $DB['USER'],$DB['PWD'], $DB['DB']);
		$stmt = $dbHandle->prepare("UPDATE `servers` SET `SYNSTATE` = 0 WHERE `ID` = ?");  
		$stmt->bind_param('i',$serverID);  
		$stmt->execute();  
	
	}

	function array_iconv($data, $output = 'utf-8') {
	  $encode_arr = array('UTF-8','ASCII','GBK','GB2312','BIG5','JIS','eucjp-win','sjis-win','EUC-JP');
	  $encoded = mb_detect_encoding($data, $encode_arr);
	  if (!is_array($data)) {
		return mb_convert_encoding($data, $output, $encoded);
	  }
	  else {
		foreach ($data as $key=>$val) {
		  $key = array_iconv($key, $output);
		  if(is_array($val)) {
			$data[$key] = array_iconv($val, $output);
		  } else {
		  $data[$key] = mb_convert_encoding($data, $output, $encoded);
		  }
		}
	 	return $data;
	 }
}

?>