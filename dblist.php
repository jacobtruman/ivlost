<?php
$link = mysql_connect('localhost', 'jacob', 'ivlostinsane');
$db_list = mysql_list_dbs($link);

while ($row = mysql_fetch_object($db_list)) {
   echo $row->Database . "\n";
}
?> 
