<%
if ((str = "") or (str = "&nbsp;")) then
pg = "ContactInformation.asp?prop="&prop
dpg = "ContactInformation.asp?prop="&prop&"&inst="&inst
else
pg = "ContactInformation.asp?"&str
dpg = "ContactInformation.asp?"&str
end if
%>

					<tr>
						<td width='50%' valign='top'>
							<%
								if ((prop = "") or (prop = "&nbsp;")) then
								else
									if ((img = "") or (img = "&nbsp;")) then
									elseif (ptype = "Contact Information") then
										response.write "<img border='0' src='/support_web/Logos/"&img&"'>"
									else
										response.write "<a href='/support_web/1stlevel/"&pg&"' target='_blank'><img border='0' src='/support_web/Logos/"&img&"'></a>"
									end if
								end if
							%>
						</td>
						<td width='50%' valign='top' align='right'>
							<%
							if ((inst = "") or (inst = "&nbsp;")) then
							inst = "Datanamics"
							end if
								if ((ptype = "") or (ptype = "&nbsp;")) then
									response.write "<img border='0' src='/support_web/Logos/"&inst&".JPG'>"
								elseif (ptype = "HSIA Main Page") then
								else
									response.write "<a href='/support_web/"&inst&dpg&"' target='_blank'><img border='0' src='/support_web/Logos/"&inst&".JPG'></a>"
								end if
							%>
						</td>
					</tr>