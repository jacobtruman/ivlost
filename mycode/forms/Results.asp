<%
ptype = "Property Search Page"
%>

<!--#include virtual='/support_web/Components/dbtop.asp'-->
<!--#include virtual='/support_web/Components/searchheader.asp'-->
<BR>
<BR>
<table width='90%' border='1' cellpadding='0' cellspacing='0' bordercolor='C0C0C0' align='center'>
      <thead>
        <tr>
          <td><b>CTYHO</b></td>
		  <td><b>Property Type</b></td>
          <td><b>Property Name</b></td>
		  <td><b>Notes</b></td>
		  <td><b>1st Level</b></td>
		  <td><b>2nd Level</b></td>
        </tr>
      </thead>
<tbody>
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry = "SELECT * FROM prop WHERE (htype LIKE '::htype::') OR (name LIKE '%::name::%') OR (prop = (select prop from contact where (phone = '::phone::')))"
fp_sDefault="name=.."
fp_sNoRecords="<tr><td colspan=6 align=""LEFT"" width=""100%"">No records returned.</td></tr>"
fp_sDataConn="propinfo"
fp_iMaxRecords=256
fp_iCommandType=1
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_iDisplayCols=6
fp_fCustomQuery=False
BOTID=0
fp_iRegion=BOTID
%>
<!--#include virtual="/_fpclass/fpdbrgn1.inc"-->
<%
loc = FP_Field(fp_rs,"loc")
prop = FP_Field(fp_rs,"prop")
notes = FP_Field(fp_rs,"notes")

%>
        <tr>
          <td>
		  	<%=FP_Field(fp_rs,"prop")%>
          </td>
		  <td>
		  	<%=FP_Field(fp_rs,"htype")%>
          </td>
		  <td>
		  	<%=FP_Field(fp_rs,"name")%>
          </td>
          <td>
<%
If ((notes = "") or (notes = "&nbsp;")) then
	response.write "<font size='2' face='Verdana' color='#C0C0C0'>"
	response.write "No Notes</font>"
else
	response.write "<font size='2' face='Verdana' color='#A000BD'>"
	response.write "<a href='/support_web/forms/notes.asp?prop="&prop&"' target='_blank' style='color: #A000BD'>"
	response.write "Notes</a></font>"
end if
%>
          </td>
		  <td>
<%
if (FP_Field(fp_rs,"level1") = "Yes") then
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write "<a href='/support_web/1stLevel/"&loc&"/NetworkMap.asp?prop="&prop&"&lvl=1' target='_blank' style='color: #FF0000'>"
	response.write "1st Level</a></font>"
else
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write "No 1st Level</font>"
end if
%>
          </td>
		  <td>
<%
if (FP_Field(fp_rs,"level2") = "Yes") then
	response.write "<font size='2' face='Verdana' color='#0000FF'>"
	response.write "<a href='/support_web/2ndLevel/"&loc&"/NetworkMap.asp?prop="&prop&"&lvl=2' target='_blank'>"
	response.write "2nd Level</a></font>"
else
	response.write "<font size='2' face='Verdana' color='#0000FF'>"
	response.write "No 2nd Level</font>"
end if
%>
          </td>
        </tr>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
				</table>
<!--#include virtual='/support_web/Components/footer.asp'-->
	</table>
</body>
<!-- Created/Modified by Jacob Truman -->