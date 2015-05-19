<?php
require_once("AutoLoad.php");
?>
<script language=JavaScript src="js/calendar.js" type=text/javascript></script>
<script>
	$(document).ready(function ()
	{
		$.ajax({
			url: "calendar_years.php", success: function (result)
			{
				$("#calendar-left").html(result);
			}
		});
		loadImageGrid();
	});
	function loadImageGrid(header)
	{
		header = header || true;
		$.ajax({
			url: "image_grid.php?header=" + header, success: function (result)
			{
				$("#calendar-mid").html(result);
			}
		});
	}
</script>
<div id="calendar-wrapper">
	<div id="calendar-left"></div>
	<div id="calendar-mid"></div>
	<div id="calendar-right"></div>
</div>

<div id=dwindow style="display: none; left: 100px; width: 10px; position: absolute; top: 0px; height: 10px">
	<div id=displaydiv
	     style="border-right: #999 1px solid; border-top: #999 1px solid; z-index: 2; left: 15px; border-left: #999 1px solid; width: 100px; border-bottom: #999 1px solid; position: absolute; top: 15px; height: 100px; background-color: #383838"></div>
	<iframe id=cframe
	        style="border-right: 0px; border-top: 0px; left: 0px; border-left: 0px; width: 0px; border-bottom: 0px; position: relative; top: 0px; height: 0px"
	        name=cframe src="about:blank" frameborder=0 scrolling=no></iframe>
	<div onmousedown=initializedrag(event) id=dbar
	     style="border-right: #ccc 1px dashed; padding-right: 0px; border-top: #ccc 1px dashed; padding-left: 0px; z-index: 1; left: 0px; padding-bottom: 0px; border-left: #ccc 1px dashed; width: 100%; cursor: move; padding-top: 0px; border-bottom: #ccc 1px dashed; position: absolute; top: 0px; height: 32px; background-color: #383838">
		<div style="font-size: 8px; left: 5px; color: #999; position: absolute; top: -1px; font-type: trebuchet ms">::
		</div>
		<div id=loaderbar
		     style="font-size: 8px; left: 13px; color: #999; position: absolute; top: -1px; font-type: trebuchet ms">|
		</div>
		<div
			style="padding-right: 5px; padding-left: 5px; font-size: 10px; right: 0px; padding-bottom: 5px; cursor: pointer; color: #999; padding-top: 5px; position: absolute; top: -5px; text-align: right; font-type: trebuchet ms"
			onclick=closeit()>x
		</div>
	</div>
	<div id=saver style="display: none; left: 0px; width: 0px; position: absolute; top: 0px; height: 0px"></div>
</div>