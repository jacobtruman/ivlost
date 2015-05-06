<?php
$ptype = 'Notes Page';
$root = 'D:/inetpub/support';
include($root.'/support_web/Components/dbtop.php');
include($root.'/support_web/Components/header.php');
?>
		<BR>
		<BR>
			<font size='2' face='Verdana'>
				<?php
				echo nl2br($notes);
				?>
			</font>
		</td>
	</tr>
	<tr>
		<td valign='bottom'>
			<?php include($root.'/support_web/Components/footer.php');?>
		</td>
	</tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->