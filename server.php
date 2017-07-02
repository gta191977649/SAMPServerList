<!doctype html>
<html><!-- InstanceBegin template="/Templates/Style.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<!-- InstanceBeginEditable name="doctitle" -->
<title> SAMP 服务器</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="assets/css/amazeui.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
<!-- 必要的JS文件 -->
<script type="text/javascript" src="http://cdn.gbtags.com/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="http://cdn.gbtags.com/amazeui/2.4.2/amazeui.min.js"></script>
<?php
	//多国语
	include("assets/php/language.php");
	include("assets/php/func.php");
	
?>
</head>

<body>
	<div id="header">
		<div class="am-g am-g-fixed">
			<h1><?php echo $LAN['SITE_NAME']; ?><span style="font-size: 20%"> プロジェクトスパルウ</span></h1>
			
		</div>
	</div>
  <!--导航代码 -->
  <header class="am-topbar">
   <div class="am-g am-g-fixed">
    
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
    <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
      <ul class="am-nav am-nav-pills am-topbar-nav">
        <li ><a href="index.php"><?php echo $LAN['HOME']?></a></li>
        <li ><a href="servAdd.php"><?php echo $LAN['SERV_ADD']; ?></a></li>
         
        
        <li class="am-dropdown" data-am-dropdown>
          <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
            <?php echo $LAN['STATUS']; ?><span class="am-icon-caret-down"></span>
          </a>
          <ul class="am-dropdown-content">
            <li><a href="status.php"><?php echo $LAN['STATUS']; ?></a></li>
			
            
          </ul>
        </li>
         <li class="am-dropdown" data-am-dropdown>
				  <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
				  <?php echo $LAN['LINK']; ?><span class="am-icon-caret-down"></span>
				  </a>
			    <ul class="am-dropdown-content">
					<li><a href="#">禾雀飛翔(ブログ)</a></li>
					<li><a href="#">拍攝現場控制台(CN)</a></li>
					<li><a href="#">OwnCloud</a></li>

			    </ul>
		</li>
       
   
       
      </ul>
    
     <div class="am-topbar-right">
      	<ul class="am-nav am-nav-pills am-topbar-nav">
			<li class="am-dropdown" data-am-dropdown>
				  <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
					<span class="am-icon-globe"><?php echo $LAN['NAME']; ?></span><span class="am-icon-caret-down"></span>
				  </a>
			    <ul class="am-dropdown-content">
					<li><a href="#">日本语</a></li>
					<li><a href="#">中国语</a></li>

			    </ul>
			</li>
        
		</ul>
    </div>
     

</div>
  </header>
  	<div class="am-container">
		<div class="am-g am-g-fixed"><!-- InstanceBeginEditable name="Main" -->
		<?php
			//获得要查询的服务器
			/*
			if(isset($_GET["ip"])) $ip = $_GET["ip"];
			if(isset($_GET["port"])) $port = $_GET["port"];
			*/
			if(isset($_GET["id"])) $serverID = $_GET["id"];
			
			$data = getServerFromDB($serverID);
			?>  <?php
			if(!empty($serverID))
			{
				
				?>
				<h1 id="title"><?php echo array_iconv($data['NAME']); ?><hr/></h1>
				
				<h2><?php echo $LAN['SERVER_REALTIME']; ?></h2>
				<!-- Ajax 动态更新服务器信息... -->
				<script type="text/javascript">
					$(document).ready(function()
					{
						$('#serverInfo').load('assets/php/serverQuery.php?type=1&ip=<?php echo $data['IP'].'&port='.$data['PORT']; ?>');
					   var refreshId = setInterval(function()
					   {
						 $('#serverInfo').load('assets/php/serverQuery.php?type=1&ip=<?php echo $data['IP'].'&port='.$data['PORT']; ?>');

					   }, 30000);

					});
				</script>
				<div id="serverInfo">
					Loading...
				</div>
				
				<?php
			}
			else
			{
				?>
					<script type="text/javascript">
						$(document).ready(function()
						{
							$("#my-alert").modal('open');
						});
							  
					</script>
			
					
					<div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
					  <div class="am-modal-dialog">
						<div class="am-modal-hd">出错了 :(</div>
						<div class="am-modal-bd">
							无效的服务器参数!请检查一下
						</div>
						<div class="am-modal-footer">
						  <span class="am-modal-btn">嗯~</span>
						</div>
					  </div>
					</div>
				
				<?php
			}
			
		?>
		
		
		
		<!-- InstanceEndEditable -->
			
		</div>
		
	</div>
	<footer>
	<div class="am-g am-g-fixed">
		<hr/>
		<p style="text-align: center;">SAMP服务器搜藏列表</br/>(C)Project Sparrow 2017 <br/>By Episodes</p>
	</div>
</footer>

</body>
<!-- InstanceEnd --></html>