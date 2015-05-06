<?php
$dir = '.';
$numfiles = shell_exec("ls -la '$dir'|wc -l|sed 's/^ *//;'");
$numfiles = $numfiles - 3;
echo $numfiles;
?>
