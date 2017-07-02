 <?php
  	
        if(isset($_GET["type"])) $type = $_GET["type"];
		if(isset($_GET["ip"])) $ip = $_GET["ip"];
		if(isset($_GET["port"])) $port = $_GET["port"];
		
	
		if(!empty($type) && !empty($ip) && !empty($port))
		{
				
			include("language.php");
			require_once("func.php"); // Require or include the SampQuery class file
			$info = getBaiscInfo($ip,$port);
			//判断服务器是否在线
			if($info == null) die('<div class="am-alert am-alert-danger" data-am-alert>
			 <button type="button" class="am-close">&times;</button>无法获取服务器讯息 :(<br/>(注:有时候会因为网络波动,你可以尝试刷新本页面)</div><a href="javascript:window.location.reload();"> 刷新此页面 </a>');
			?>
			<table class="am-table am-table-bordered am-table-radius">
			  <tbody>
				<tr>
				  <th scope="row"><?php echo $LAN['SERVER_TH_NAME']; ?></th>
				  <td><?php echo array_iconv($info['hostname']); ?></td>
				</tr>
				<tr>
				  <th scope="row"><?php echo $LAN['SERVER_TH_MODE']; ?></th>
				  <td><?php echo array_iconv($info['gamemode']); ?></td>
				</tr>
				<tr>
				  <th scope="row"><?php echo $LAN['SERVER_TH_MAP']; ?></th>
				  <td><?php echo array_iconv($info['map']); ?></td>
				</tr>
				<tr>
				  <th scope="row"><?php echo $LAN['SERVER_TH_CPLAYER']; ?></th>
				  <td><?php echo array_iconv($info['players']); ?></td>
				</tr>
				<tr>
				  <th scope="row"><?php echo $LAN['SERVER_TH_MPLAYER']; ?></th>
				  <td><?php echo array_iconv($info['maxplayers']); ?></td>
				</tr>
			  </tbody>
			</table>
		<?php
		
		}
		else
		{
			die('<div class="am-alert am-alert-danger" data-am-alert>
			 <button type="button" class="am-close">&times;</button>无效的服务器地址!!<br/>前端传来了无效的服务器地址，系统无法获取还服务器的讯息。<br/><a href="index.php">回到首页</a></div>');
		}
?>