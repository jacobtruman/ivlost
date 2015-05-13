<?php
require_once("AutoLoad.php");
?>
<script>
	$(document).ready(function() {
		$.ajax({url: "calendar_years.php", success: function(result){
			$("#calendar-left").html(result);
		}});
		$.ajax({url: "image_grid.php", success: function(result){
			$("#calendar-mid").html(result);
		}});
	});
</script>
<div id="calendar-wrapper">
	<div id="calendar-left"></div>
	<div id="calendar-mid"></div>
	<div id="calendar-right">
		Months
	</div>
</div>