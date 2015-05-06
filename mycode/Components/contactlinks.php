<?php
if (isset($prop)){
	$pg = "ContactInformation.php?prop=".$prop;
	$dpg = "ContactInformation.php?prop=".$prop."&inst=".$inst;
}
?>
					<tr>
						<td width='50%'>
							<?php
								if (isset($prop)){
									if (!isset($img)){
									}elseif ($ptype == "Contact Information"){
										echo "<img border='0' src='/support_web/Logos/".$img."'>";
									}else{
										echo "<a href='/support_web/forms/".$pg."' target='".$name."contact'><img border='0' src='/support_web/Logos/".$img."'></a>";
									}
								}
							?>
						</td>
						<td width='50%' valign='top' align='right'>
							<?php
								if (isset($prop)){
									if (!isset($inst)){
										$inst = "Datanamics";
									}
									if ((!isset($ptype)) || ($ptype == '')){
										echo "<img border='0' src='/support_web/Logos/".$inst.".JPG'>";
									}elseif ($ptype == "HSIA Main Page"){
									}else{
										echo "<a href='/support_web/".$inst.$dpg."' target='dcontact'><img border='0' src='/support_web/Logos/".$inst.".JPG'></a>";
									}
								}
							?>
						</td>
					</tr>