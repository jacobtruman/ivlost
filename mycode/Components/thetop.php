<?php
include($root.'/support_web/Components/header.php');
?>
<table border='0' width='100%' cellspacing='0' class='ms-underline'>
      <tr>
        <td width='20%' align='center'>
			<font size='2' face='Verdana'>
                <a href='<?php echo $pover;?>' target='_blank'>
					Property Overview
				</a>
			</font>
		</td>
        <td width='20%' align='center'>
			<font size='2' face='Verdana'>
                <a href='<?php echo $ipinfo;?>' target='_blank'>
					IP Information
				</a>
			</font>
		</td>
		<td width='20%' align='center'>
			<font size='2' face='Verdana'>
                <a href='<?php echo $notespage;?>' target='_blank'>
					Notes
				</a>
			</font>
		</td>
        <td width='20%' align='center'>
			<font size='2' face='Verdana'>
				<?php
					if ($htype == 'Holiday Inn Express'){
						$flink = 'Holiday Inn HSIA';
					}elseif ($htype == 'Hilton Garden Inn'){
						$flink = 'Hilton HSIA';
					}elseif ($htype == 'Fairfield Inn'){
						$flink = 'Marriott Hotels HSIA';
					}elseif ($htype == 'Sheraton Four Points'){
						$flink = 'Starwood Hotels HSIA';
					}elseif ($htype == 'Walnut Knolls'){
						$flink = $htype;
					}else{
						$flink = $htype.' HSIA';
					}
				?>
                <a href='file:///Z:/<?php echo $flink;?>/<?php echo $fold;?>' target='_blank'>
					Customer Information
				</a>
			</font>
		</td>
		<?php
		if ($lvl == '1'){
			$lnk = '/support_web/DatanamicsContactInformation.asp';
			$lnkt = '2nd Level Support';
		}else{
			$lnk = 'file://Lasdn-sd01/HTN Knowledgebase/Passwords/Passwordstandards.pdf';
			$lnkt = 'Equipment Passwords';
		}
		?>
		<td width='20%' align='center'>
			<font size='2' face='Verdana'>
				<a href='<?php echo $lnk;?>' target='_blank'>
					<?php echo $lnkt;?>
				</a>
			</font>
		</td>
      </tr>
    </table>