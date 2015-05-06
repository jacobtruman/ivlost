<?php

$path = json_decode(base64_decode($_REQUEST['p']), true);

$path = dirname(__FILENAME__)."/{$path}";
if (!file_exists($path)){
	$path = 'images/0.gif';
}

$params = array("path"=>$path);

echo "
<body onselectstart='event.cancelBubble=true; event.returnValue=false;' id=bd bgColor='#383838' leftMargin=0 topMargin=0 onload=parent.popuploaded(pContents) marginwidth='0' marginheight='0' margin-top='0'>
<script language=javascript>
	pContents = '';
	pContents += '<div style=\"position:absolute;left:0px;top:0px;\"><img src=\"get_image.php?p=".base64_encode(json_encode($params))."\"></div>';
	document.write(pContents);
</script>
</body>\n";