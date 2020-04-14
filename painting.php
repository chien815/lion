<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>插畫設計--設計獅</title>
<link rel="shortcut icon" href="favicon.ico">
<link type="text/css" rel="stylesheet" href="css/one.css">
<link type="text/css" rel="stylesheet" href="css/fishy.css">
<link href="css/lightbox.css" rel="stylesheet" />
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/lightbox.js"></script>
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
<div id="banner" align="center">
      <div class="col c25 ">
      <div class="sample2 photo"><a title="魔法少女" rel="lightbox[roadtrip]" href="images/painting/p01.jpg"><img src="images/painting/p01s.jpg"></a></div>
      <p class="sh"><b>魔法少女</b></p>      
      </div>
      <div class="col c25 ">
      <div class="sample2 photo"><a title="週年慶" rel="lightbox[roadtrip]" href="images/painting/p02.jpg"><img src="images/painting/p02s.jpg"></a></div>
      <p class="sh"><b>週年慶</b></p>      
      </div>
      <div class="col c25 ">
      <div class="sample2 photo"><a title="桃園結義" rel="lightbox[roadtrip]" href="images/painting/p03.jpg"><img src="images/painting/p03s.jpg"></a></div>
      <p class="sh"><b>桃園結義</b></p>      
      </div>
      <div class="col c25 last">
      <div class="sample2 photo"><a title="陪力社區計畫" rel="lightbox[roadtrip]" href="images/painting/p04.jpg"><img src="images/painting/p04s.jpg"></a></div>
      <p class="sh"><b>陪力社區計畫</b></p>      
      </div>
      <div class="col c25 ">
      <div class="sample2 photo"><a title="豆干公仔" rel="lightbox[roadtrip]" href="images/painting/p05.jpg"><img src="images/painting/p05s.jpg"></a></div>
      <p class="sh"><b>豆干公仔</b></p>      
      </div>
      <div class="col c25 ">
      <div class="sample2 photo"><a title="機票婚卡" rel="lightbox[roadtrip]" href="images/painting/p06.jpg"><img src="images/painting/p06s.jpg"></a></div>
      <p class="sh"><b>機票婚卡</b></p>      
      </div>
      <div class="col c25 ">
      <div class="sample2 photo"><a title="仙人" rel="lightbox[roadtrip]" href="images/painting/p07.jpg"><img src="images/painting/p07s.jpg"></a></div>
      <p class="sh"><b>仙人</b></p>      
      </div>
      <div class="col c25 last">
      <div class="sample2 photo"><a title="中秋兔" rel="lightbox[roadtrip]" href="images/painting/p08.jpg"><img src="images/painting/p08s.jpg"></a></div>
      <p class="sh"><b>中秋兔</b></p>      
      </div>
</div>
<?php include("footer.php")?>
</div>
</body>
</html>
