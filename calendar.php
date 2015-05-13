<?php
require_once("AutoLoad.php");

$nav = array(
	"Home"=>"main.php",
	"Calvin Calendar"=>"calendar/main.php",
	"Mission Pictures"=>"pictures/main.php?dir=mission",
	"Pictures"=>"pictures/main.php",
	"My Wedding"=>"wedding/main.php",
	"Grant"=>"pictures/main.php?dir=grant",
	"Blog"=>"myblog/",
	"Accounts"=>"users/",
	"Contact Me"=>"mailme/"
);

$links = array();
foreach($nav as $title=>$link) {
	$links[] = "<a href='{$link}'>{$title}</a>\n";
}

?>
<html>

<head>
	<title>ivlost</title>
	<link rel='stylesheet' type='text/css' href='stylesheets/main.css'>
</head>

<div id="main-wrapper">
	<div id="header">
		ivlost
	</div>
	<div id="navbar">
		<?php
			echo implode(" | ", $links);
		?>
	</div>
	<div id="main-content">
		Content...
	</div>
	<div id="footer">
		ivlost.com Copyright &#169; 2003
	</div>
	<div id="footer-base">

	</div>
</div>

</html>