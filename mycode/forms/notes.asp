<%
ptype = "Notes Page"
%>
<!--#include virtual='/support_web/Components/dbtop.asp'-->
<!--#include virtual='/support_web/Components/header.asp'-->
		<tr>
			<td valign='top'>
				<table border='0'>
					<tr>
						<td width='100%' colspan='2' align='left'>
							<BR>
							<BR>
						</td>
					</tr>
					<tr>
						<td width='100%' colspan='2' align='left'>
							<font size='2' face='Verdana'>
								<%
								If IsNull(notes) then
								msg = "<BR>"
								else
								msg = notes
								end if
								%>
								<%=replace(msg, VbCrLf, "<br>")%>
							</font>
						</td>
					</tr>
					<tr>
						<td width='100%' colspan='2' align='left'>
							<BR>
							<BR>
						</td>
					</tr>
			</table>
			<!--#include virtual="/support_web/components/footer.asp"-->
		</td>
	</tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->