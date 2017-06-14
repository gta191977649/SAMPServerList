<!doctype html>
<html><!-- InstanceBegin template="/Templates/Style.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>無題ドキュメント</title>
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
			<h1>SAMP Server Cacher<span style="font-size: 20%"> プロジェクトスパルウ</span></h1>
			
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
		<div class="am-g am-g-fixed"><!-- InstanceBeginEditable name="Main" --><h1>一览<hr/></h1>
		<?php displayServers(); ?>
		<!-- InstanceEndEditable -->
			
		</div>
		
	</div>
	<footer>
	<div class="am-g am-g-fixed">
		<p style="text-align: center;">SAMP服务器搜藏列表</br/>(C)Project Sparrow 2017 <br/>By Episodes</p>
	</div>
</footer>

</body>
<!-- InstanceEnd --></html>