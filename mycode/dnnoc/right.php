<HEAD>
<TITLE>
Why Datanamics?
</TITLE>
</HEAD>
<?php
parse_str($_SERVER['QUERY_STRING'],$vars);
?>
<FRAMESET border='0' frameSpacing='0' frameBorder='0' rows='220,*'>
<FRAME name='top' src='top.php?ctyho=<?php echo $vars['ctyho'];?>' scrolling='no' target='main'>
<FRAME name='bot' src='bottom.php?ctyho=<?php echo $vars['ctyho'];?>' scrolling='no'>
<NOFRAMES>
<body>
<p>This page uses frames, but your browser doesn't support them.</p>
</body>
</NOFRAMES>
</FRAMESET>