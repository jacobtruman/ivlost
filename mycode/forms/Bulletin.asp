<%
ptype = "Bulletin Page"
%>

<!--#include virtual='/support_web/Components/dbtop.asp'-->
<!--#include virtual='/support_web/Components/mainheader.asp'-->
<!--#include virtual='/support_web/1stlevel/notes.asp'-->

<%

if (level1 = "Yes") then
	response.write "<tr><td width='101%' colspan='2' align=center><font size='2' face='Verdana' color='#FF0000'><b>"
	response.write "<a href='/support_web/1stLevel/"&loc&"/NetworkMap.asp?prop="&prop&"&lvl=1' target='_blank' style='color: #FF0000'>"
	response.write "1st Level Network Map</a></b></font></td></tr>"
else
	response.write "<tr><td width='101%' colspan='2' align=center><font size='2' face='Verdana' color='#FF0000'><b>"
	response.write "We Do Not Provide 1st Level Support For This Property</b></font></td></tr>"
end if
if (level2 = "Yes") then
	response.write "<tr><td width='101%' colspan='2' align=center><font size='2' face='Verdana' color='#0000FF'><b>"
	response.write "<a href='/support_web/2ndLevel/"&loc&"/NetworkMap.asp?prop="&prop&"&lvl=2' target='_blank'>"
	response.write "2nd Level Network Map</a></b></font></td></tr>"
else
	response.write "<tr><td width='101%' colspan='2' align=center><font size='2' face='Verdana' color='#0000FF'><b>"
	response.write "We Do Not Provide 2nd Level Support For This Property</b></font></td></tr>"
end if
%>
				</table>
			</td>
		</tr>
	</table>
	<!--include virtual='/support_web/Components/newmenu.asp'-->
<!--#include virtual='/support_web/Components/footer.asp'-->
</body>
<!-- Created/Modified by Jacob Truman -->