<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="amiss.css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" type="image/png" href="ref/fav.jpg">

<link rel="stylesheet" type="text/css" href="shadowbox.css">
<script type="text/javascript" src="shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>

<title>Amiss</title>
</head>
<body>
<div id="container">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="social">
<a  target="_blank" href="http://www.facebook.com/Amissmovie"><img alt="Facebook" src="ref/fb.png" /></a>
<a  target="_blank" href="https://twitter.com/AmissFilm"><img alt="Twitter" src="ref/tw.png" /></a>
<a  target="_blank" href="https://www.youtube.com/amissfilm"><img alt="Youtube" src="ref/yt.png" /></a>
</div>
<div class="lang">
<a alt="English" href="index.php"><img src="ref/eng.png" /></a>
<a alt="Korean" href="kor/index.php"><img src="ref/kor.png" /></a>
</div>
<h1 id="logo">
<a href="index.php"><img src="ref/logo2.png" /></a>
</h1>
<div id="centeredmenu">
<ul>
	<li><a href="index.php">Home</a></li>

	<li><a href="#">About</a>
		<ul>
			<li><a href="index.php?p=film">Film</a></li>
			<li><a href="index.php?p=CastCrew">Cast and Crew</a></li>
		</ul>
        </li>
        
	<li><a href="#">Gallery</a>
		<ul>
			<li><a href="index.php?p=Production">Production</a></li>
			<li><a href="index.php?p=Promotional">Promotional</a></li>
		</ul>
        </li>

	<li><a href="#">Links</a>
		<ul>
			<li><a target="_blank" href="http://sonnysidefilms.com">Sonny Side Films</a></li>
			<li><a target="_blank" href="http://www.rollthedicepictures.com">Roll the Dice Pictures</a></li>
    	</ul>
    </li>
    <li><a href="mailto:Amissadmin@amissmovie.com?subject=Contact&amp;body=Dear Amiss, ">Contact</a></li>
    <li><a href="index.php?p=Discuss">Discuss</a></li>

	
</ul>
</div>
<div id="main">
<?php
$pages_dir='pages';
if (!empty($_GET['p'])){
	$pages= scandir($pages_dir, 0);
	unset ($pages[0], $pages[1]);
	
	$p=$_GET['p'];
	if (in_array ($p.'.inc.php', $pages)) {
		include ($pages_dir.'/'.$p .'.inc.php'); 
		}
		else {
			echo 'Invalid Page<BR>'; } 
			}
			else {
				include($pages_dir.'/home.inc.php'); 
				}
?>
</div>
<footer>
© Copyright 2012 Amiss. All Rights Reserved by Heather Nicole and Luandro Vieira.
</footer>

</div>
</body>
</html>