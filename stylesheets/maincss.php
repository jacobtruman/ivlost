<?php
$file = $_REQUEST['file'];
if ($file == 'bsux'){
	$image = '../images/bsux.gif';
	include('sch1.php');
}elseif ($file == 'top1'){
	$image = '../images/ivlost.jpg';
	include('sch1.php');
}elseif ($file == 'top2'){
	$image = '../images/sm-ivlost.jpg';
	include('sch1.php');
}elseif ($file == 'mid1'){
	//$image = '/../images/offspring.jpg';
	$image = '';
	include('sch1.php');
}elseif ($file == 'mid2'){
	//$image = '/../images/sm-offspring.jpg';
	$image = '';
	include('sch1.php');
}elseif ($file == 'lost'){
	$image = '../images/lost.gif';
	include('sch1.php');
}elseif ($file == 'construct'){
	$image = '../images/construct.gif';
	include('sch1.php');
}elseif ($file == 'copyright'){
	$image = '';
	include('sch3.php');
}elseif ($file == 'navbar'){
	$image = '';
	include('sch2.php');
}else{
	$image = '';
	include('sch1.php');
}

?>
BODY
{
	BACKGROUND-COLOR: <?php echo $bgcolor;?>;
	BACKGROUND-IMAGE: url(<?php echo $image;?>);
	BACKGROUND-REPEAT: NO-REPEAT;
	BACKGROUND-POSITION: center center;
	BACKGROUND-ATTACHMENT: fixed;
	FONT-FAMILY: <?php echo $fontf;?>;
	FONT-SIZE: <?php echo $fonts;?>;
	COLOR: <?php echo $fontc;?>;
	TEXT-DECORATION: none;
	MARGIN-LEFT: 0;
	MARGIN-TOP: 5px;
	MARGIN-BOTTOM: 0;
	MARGIN-RIGHT: 0;
	SCROLLBAR-ARROW-COLOR: #000000;
    SCROLLBAR-TRACK-COLOR: #808080;
    SCROLLBAR-BASE-COLOR: #808080;
	SCROLLBAR-SHADOW-COLOR: #000000;
  	SCROLLBAR-HIGHLIGHT-COLOR: #C0C0C0;
  	SCROLLBAR-3DLIGHT-COLOR: #C0C0C0;
}
FONT
{
	FONT-FAMILY: <?php echo $fontf;?>;
	FONT-SIZE: <?php echo $fonts;?>;
	COLOR: <?php echo $fontc;?>;
	TEXT-DECORATION: none;
}
A:link
{
	FONT-FAMILY: <?php echo $fontf;?>;
	FONT-SIZE: <?php echo $fonts;?>;
	COLOR: <?php echo $fontc;?>;
	TEXT-DECORATION: none;
}
A:visited
{
	FONT-FAMILY: <?php echo $fontf;?>;
	FONT-SIZE: <?php echo $fonts;?>;
	COLOR: <?php echo $fontc;?>;
	TEXT-DECORATION: none;
}
A:active
{
	FONT-FAMILY: <?php echo $fontf;?>;
	FONT-SIZE: <?php echo $fonts;?>;
	COLOR: #C0C0C0;
	TEXT-DECORATION: none;
}
A:hover
{
	FONT-FAMILY: <?php echo $fontf;?>;
	FONT-SIZE: <?php echo $fonts;?>;
	COLOR: #C0C0C0;
	TEXT-DECORATION: none;
}
TD
{
	BACKGROUND-COLOR: <?php echo $bgcolor;?>;
	FONT-FAMILY: <?php echo $fontf;?>;
    FONT-SIZE: <?php echo $fonts;?>;
}
TABLE.structure
{
	FONT-FAMILY: <?php echo $fontf;?>;
	FONT-SIZE: <?php echo $fonts;?>;
	BORDER : thin solid #000000;
}	

TD.topbar
{
	BACKGROUND-COLOR: <?php echo $bgcolor;?>;
	FONT-FAMILY: <?php echo $fontf;?>;
   	FONT-SIZE: <?php echo $fonts;?>;
}	

TD.leftbar
{
	BACKGROUND-COLOR: <?php echo $bgcolor;?>;
	FONT-FAMILY: <?php echo $fontf;?>;
    FONT-SIZE: <?php echo $fonts;?>;
}

TD.mainwin
{
	FONT-FAMILY: <?php echo $fontf;?>;
    FONT-SIZE: <?php echo $fonts;?>;
}

.formfield
{
BORDER-RIGHT: #000000 1px solid;
BORDER-TOP: #000000 1px solid;
FONT-SIZE: <?php echo $fonts;?>;
BORDER-LEFT: #000000 1px solid;
CURSOR: auto;
COLOR: '#000000';
BORDER-BOTTOM: #000000 1px solid;
FONT-FAMILY: <?php echo $fontf;?>;
}
.formbutton
{
BORDER-RIGHT: #575757 1px solid;
BORDER-TOP: #575757 1px solid;
FONT-SIZE: <?php echo $fonts;?>;
BORDER-LEFT: #575757 1px solid;
CURSOR: hand;
COLOR: '#000000';
BORDER-BOTTOM: #575757 1px solid;
FONT-FAMILY: <?php echo $fontf;?>;
BACKGROUND-COLOR: '#AEAEAE'
}
.lost
{
FONT-SIZE: 15pt;
FONT-FAMILY: <?php echo $fontf;?>;
}
.head
{
FONT-SIZE: 24pt;
FONT-FAMILY: <?php echo $fontf;?>;
FONT-WEIGHT: bold;
}
.construct
{
FONT-SIZE: 15pt;
FONT-FAMILY: <?php echo $fontf;?>;
}

A.lnk1:link
{
        FONT-FAMILY: <?php echo $fontf;?>;
        FONT-SIZE: <?php echo $fonts;?>;
        COLOR: #C0C0C0; 
        TEXT-DECORATION: none;
}
A.lnk1:visited
{
        FONT-FAMILY: <?php echo $fontf;?>;
        FONT-SIZE: <?php echo $fonts;?>;
        COLOR: #C0C0C0;
        TEXT-DECORATION: none;
}
A.lnk1:active
{
        FONT-FAMILY: <?php echo $fontf;?>;
        FONT-SIZE: <?php echo $fonts;?>;
        COLOR: <?php echo $fontc;?>;
        TEXT-DECORATION: none;
}
A.lnk1:hover
{
        FONT-FAMILY: <?php echo $fontf;?>;
        FONT-SIZE: <?php echo $fonts;?>;
        COLOR: <?php echo $fontc;?>;
        TEXT-DECORATION: none;
}

.countdown
{
BACKGROUND-COLOR: <?php echo $bgcolor;?>;
BORDER: 0pt;
FONT-SIZE: 8pt;
FONT-FAMILY: <?php echo $fontf;?>;
COLOR: <?php echo $fontc;?>;
text-align: right;
}
