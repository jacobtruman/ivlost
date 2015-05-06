<style>
.ff{font-size: 10px;
	font-family:verdana,arial,helvetica,sans;
	color: #333333;
	background: #DDDDDD;
	}
.btn{
	font-size: 9px;
	font-family:verdana,arial,helvetica,sans;
	color: #333333;
	background: #cccccc;
	}
BODY{
scrollbar-3dlight-color:#999999;
scrollbar-arrow-color:#999999;
scrollbar-base-color:#DDDDDD;
scrollbar-darkshadow-color:#999999;
scrollbar-face-color:#DDDDDD;
scrollbar-highlight-color:#DDDDDD;
scrollbar-shadow-color:#DDDDDD;
scrollbar-track-color:#CCCCCC;
}

</style>
<BODY bgcolor="#cccccc" text="#666666">
<CENTER>
<img src="top.gif" width="531" height="102" alt="Binary- it's digitalicious!" border="0"><BR>

<?php
include('../include.php');

if(isset($_POST['convert']) == "TRUE"){
$convert = $_POST['convert'];
$binary = $_POST['binary'];
$ascii = $_POST['text'];

act($convert, $binary, $ascii);
}else{
full();
}

function act($convert, $binary, $ascii){
if ($convert == 'text'){
bin2asc( $binary );
}elseif ($convert == 'binary'){
asc2bin( $ascii );
}
}

function bin2asc ($binary) 
{ 
$ascii = '';
 $i = 0; 
while ( strlen($binary) > 3 ) 
 { 
   $byte[$i] = substr($binary, 0, 8); 
   $byte[$i] = base_convert($byte[$i], 2, 10); 
   $byte[$i] = chr($byte[$i]); 
   $binary = substr($binary, 8); 
   $ascii = "$ascii$byte[$i]"; 
 } 
 //return $ascii;
top();
echo $ascii;
middle();
bottom();
}


function asc2bin ($ascii) 
{ 
$binary = '';
 while ( strlen($ascii) > 0 ) 
 { 
   $byte = ""; $i = 0; 
  $byte = substr($ascii, 0, 1); 
   while ( $byte != chr($i) ) { $i++; } 
   $byte = base_convert($i, 10, 2); 
   $byte = str_repeat("0", (8 - strlen($byte)) ) . $byte;
  $ascii = substr($ascii, 1); 
   $binary = "$binary$byte"; 
 } 
 //return $binary;
top();
middle();
echo $binary;
bottom();
}

function full(){
top();
middle();
bottom();
}

function top(){
echo "<FORM NAME='formname' ACTION='index.php' METHOD='POST'>
<TABLE BORDER='0' CELLPADDING='2' CELLSPACING='0'>
<BR>
<BR>
<BR>
<TR>
<TD ALIGN='center'>
<TEXTAREA NAME='text' ROWS='6' COLS='40' WRAP='PHYSICAL' CLASS='ff'>";
}

function middle(){
echo "</TEXTAREA>
</TD>
<TD ALIGN='center'>
<TEXTAREA NAME='binary' ROWS='6' COLS='40' WRAP='PHYSICAL' CLASS='ff'>";
}

function bottom(){
echo "</TEXTAREA>
</TD>
</TR>
<TR>
<TD ALIGN='center'>
<INPUT TYPE='Submit' NAME='convert' VALUE='binary' CLASS='btn'>
</TD>
<TD ALIGN='center'>
<INPUT TYPE='Submit' NAME='convert' VALUE='text' CLASS='btn'>
</TD>
</TR>
</TABLE>
</FORM>";
}
?>
<BR>
<BR>
<BR>
<BR>
<img src="bottom.gif" width="60" height="50" alt="" border="0">
</CENTER>
</BODY>