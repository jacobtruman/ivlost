<!--#include virtual='/support_web/Components/dbtop.asp'-->
<!--#include virtual='/support_web/Components/header.asp'-->
<BR>
    <table border='0' width='100%' cellspacing='0'>
      <tr>
        <td width='25%' style='border-bottom: 2 solid #C0C0C0' bordercolor='#D8D8D8' align='center'>
			<font size='2' face='Verdana'>
                <a href='<%=pover%>' target='_blank'>
					Property Overview
				</a>
			</font>
		</td>
        <td width='25%' style='border-bottom: 2 solid #C0C0C0' bordercolor='#D8D8D8' align='center'>
			<font size='2' face='Verdana'>
                <a href='<%=ipinfo%>' target='_blank'>
					IP Information
				</a>
			</font>
		</td>
        <td width='25%' style='border-bottom: 2 solid #C0C0C0' bordercolor='#D8D8D8' align='center'>
			<font size='2' face='Verdana'>
<!--#include virtual='/support_web/Components/oddfolds.asp'-->
                <a href='file:///Z:/<%=flink%>/<%=fold%>' target='_blank'>
					Customer Information
				</a>
			</font>
		</td>
		<%
		if (lvl = "1") then
			lnk = "/support_web/DatanamicsContactInformation.asp"
			lnkt = "2nd Level Support"
		else
			lnk = "file://Lasdn-sd01/HTN Knowledgebase/Passwords/Passwordstandards.pdf"
			lnkt = "Equipment Passwords"
		end if
		%>
		<td width='25%' style='border-bottom: 2 solid #C0C0C0' bordercolor='#D8D8D8' align='center'>
			<font size='2' face='Verdana'>
				<a href='<%=lnk%>' target='_blank'>
					<%=lnkt%>
				</a>
			</font>
		</td>
      </tr>
    </table>