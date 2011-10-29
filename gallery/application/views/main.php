<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Gallery</title>	
	<link href="../css/style.css" rel="stylesheet" type="text/css" />	 
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/gallery.js"></script>
	<script type="text/javascript" src="../fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="../fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="../fancybox/jquery.fancybox-1.3.4.css" media="screen" />	         
</head>
<body>	
	<div id="content">
		<div id="header">
			<h2>Gallery</h2>
		</div>							
		<div id="gallery">
			<div id="prev"><img src='../img/left-act.png' /></div>		
			<div id="next"><img src='../img/right-act.png' /></div>
			<div id="blprev"></div>
			<div id="blnext"></div>
			<img class="loading" src="../img/loading.gif" alt="" />
			<ul id="prev_container"></ul>			
			<ul id="chooseGallery">			
			<?php  						
					$path = '../img/upload/';
				    $img = $current;
					for($i = 0;$i < count($img); $i++){
						echo '<li class="first">'.HTML::anchor($path.$img[$i]['id'].$img[$i]['ext'],HTML::image($path.$img[$i]['id'].'s'.$img[$i]['ext']),array('title'=>$img[$i]['alt'])).'</li>';						
					}							
			?>				
			</ul>
			<ul id="next_container"></ul>			
		</div>
		<?php echo $loadform; ?>
	</div>	
</body>
</html>
