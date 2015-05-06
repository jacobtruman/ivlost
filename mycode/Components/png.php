<?php
$i = 0;
while($i < 10){
	$map = $i + 1;
	if ($i == 0){
		$pic = '/support_web/1stlevel/'.$loc.'/Pictures/NetworkMap.png';
	}else{
		$pic = '/support_web/1stlevel/'.$loc.'/Pictures/NetworkMap'.$map.'.png';
	}
	if (file_exists($root.$pic)){
		echo "<BR><img border='0' src='".$pic."' usemap='#FPMap".$i."' border='0'>";
	}else{
	}
$i++;
}
?>