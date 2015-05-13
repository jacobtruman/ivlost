<?php
require_once("AutoLoad.php");

$nav = new Navigation();

?>
<html>

<head>
	<title>ivlost</title>
	<link rel='stylesheet' type='text/css' href='stylesheets/main.css'>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script>
		$(document).ready(function() {
			<?
				echo implode("\n", $nav->getAjax());
			?>
			$.ajax({url: "main.php", success: function(result){
				$("#main-content").html(result);
			}});
		});
	</script>
</head>

<div id="main-wrapper">
	<div id="header">
		ivlost
	</div>
	<div id="navbar">
		<?php
		echo implode(" | ", $nav->getLinks());
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