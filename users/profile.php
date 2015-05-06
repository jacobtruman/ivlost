<HEAD>
<Title>
    <?php echo $username;?>'s Profile
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='../stylesheets/maincss.php'>
</HEAD>
<body>
<BR>
<BR>
<?php
$lines = file('../../accounts/'.$username);

echo "Username: <font color='#FF0000' style='color:#FF0000;'>".$lines[0]."</font><BR>\n";
echo "Name: <font color='#FF0000' style='color:#FF0000;'>".$lines[1]."</font><BR>\n";;
echo "Privilages: <font color='#FF0000' style='color:#FF0000;'>".$lines[3]."</font><BR>\n";
echo "Last Updated: <font color='#FF0000' style='color:#FF0000;'>".$lines[4]."</font><BR>\n";
?>