<?php
$file = 'index.php';
if (!copy($file, $file.'.bak')) {
   echo "failed to copy $file...<br />\n";
}
?> 