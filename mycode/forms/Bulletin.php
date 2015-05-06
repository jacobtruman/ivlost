<?php
$ptype = "Bulletin Page";
$root = "D:/inetpub/support";
include($root."/support_web/components/mainheader.php");
if ($active == 'Yes'){
	include($root."/support_web/forms/notes.php");

	if ($level1 == "Yes"){
		echo "<form name='form1".$prop."' method='POST' action='/support_web/forms/NetworkMap.php' target='_blank'>\n";
		echo "<input type='hidden' name='prop' value='".$prop."'>\n";
		echo "<input type='hidden' name='lvl' value='1'>\n";
		echo "<SCRIPT language='JavaScript'>\n";
		echo "function submit1stlvl".$prop."(){\n";
		echo "document.form1".$prop.".submit();\n";
		echo "}\n";
		echo "</SCRIPT>\n";
		echo "</form>\n";
		echo "<tr><td width='101%' colspan='2' align=center><font size='2' face='Verdana' color='#FF0000'><b>";
		echo "<a href='javascript: submit1stlvl".$prop."()' style='color: #FF0000'>\n";
		echo "1st Level Network Map</a></b></font></td></tr>";
	}else{
		echo "<tr><td width='101%' colspan='2' align=center><font size='2' face='Verdana' color='#FF0000'><b>";
		echo "We Do Not Provide 1st Level Support For This Property</b></font></td></tr>";
	}
	if ($level2 == "Yes"){
		echo "<form name='form2".$prop."' method='POST' action='/support_web/2ndlevel/forms/NetworkMap.php' target='_blank'>\n";
		echo "<input type='hidden' name='prop' value='".$prop."'>\n";
		echo "<input type='hidden' name='lvl' value='2'>\n";
		echo "<SCRIPT language='JavaScript'>\n";
		echo "function submit2ndlvl".$prop."(){\n";
		echo "document.form2".$prop.".submit();\n";
		echo "}\n";
		echo "</SCRIPT>\n";
		echo "</form>\n";
		echo "<tr><td width='101%' colspan='2' align=center><font size='2' face='Verdana' color='#0000FF'><b>";
		echo "<a href='javascript: submit2ndlvl".$prop."()'>";
		echo "2nd Level Network Map</a></b></font></td></tr>";
	}else{
		echo "<tr><td width='101%' colspan='2' align=center><font size='2' face='Verdana' color='#0000FF'><b>";
		echo "We Do Not Provide 2nd Level Support For This Property</b></font></td></tr>";
	}
	echo '</table>';
	echo '</td>';
	echo '</tr>';
}else{

	echo '<tr>';
	echo '<td align="center" colspan="2">';
	echo '<BR>';
	echo '<BR>';
	echo '<BR>';
	echo '<font size="2" face="Verdana">';
	echo '<B>';
	echo 'We no longer Support this property.';
	echo '</B>';
	echo '</font>';
	echo '</td>';
	echo '</tr>';
	echo '</table>';

}
?>
		<tr>
			<td valign='bottom' colspan='3'>
				<?php
					include($root.'/support_web/Components/footer.php');
				?>
			</td>
		</tr>
	</table>
</body>
<!-- Created/Modified by Jacob Truman -->