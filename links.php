<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>與我連繫--設計獅</title>
<link rel="shortcut icon" href="favicon.ico">
<link type="text/css" rel="stylesheet" href="css/one.css">
<link type="text/css" rel="stylesheet" href="css/fishy.css">
<script src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-jrumble.js"></script>
<script type="text/javascript">
$(document).ready(function(){						   	
	$('#shake').jrumble({
		rangeX: 2,
		rangeY: 2,
		rangeRot: 1
	});
});
</script>
</head>

<body>
<div id="Wrapper">
<div id="header">
	<div class="logo"><h1 class="title">設計獅</h1><a id="shake" href="index.php"><img src="images/logo.png"></a></div>
    <div id="bird-1" class="floating-bird"></div>
	<div id="bird-2" class="floating-bird"></div>
	<div id="bird-3" class="floating-bird"></div>
    <?php include("menu.php")?>
</div>
<div id="links_content">
	<div id="run"><div id="run-1" class="floating-run"></div></div>
    <div class="line"><a href="http://line.naver.jp/zh-hant/" target="_blank">chien815</a></div>
	<div class="mail"><a href="mailto:chien815@gmail.com">chien815@gmail.com</a></div>
    
</div>
<?php include("footer.php")?>
</div>
</body>
</html>
