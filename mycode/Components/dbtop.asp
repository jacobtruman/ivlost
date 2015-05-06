<%

pcode = request.querystring("prop")
lvl = request.querystring("lvl")

dim objConn,sql,rs
set objConn = server.createobject("ADODB.connection")
objConn.open application("propinfo_ConnectionString")
sql = "SELECT * FROM prop where (prop = '"&pcode&"')"
set rs = objConn.execute(sql)
if not rs.eof then
prop = rs("prop")
gateway = rs("gateway")
gateway2 = rs("gateway2")
htype = rs("htype")
name = rs("name")
loc = rs("loc")
prop = rs("prop")
fold = rs("fold")
inst = rs("inst")
lgn = rs("lgn")
pswd = rs("pswd")
lgn2 = rs("lgn2")
pswd2 = rs("pswd2")
dbname = rs("dbname")
level1 = rs("level1")
level2 = rs("level2")
active = rs("active")
notes = rs("notes")
else
  rs.close
  set rs = nothing
  objConn.close
  set objConn = nothing
  'response.write "no menu items found"
end if


pover = "/support_web/1stLevel/PropertyOverview.asp?prop="&prop
ipinfo = "/support_web/1stLevel/IPInformation.asp?prop="&prop
cinfo = "/support_web/1stLevel/ContactInformation.asp?prop="&prop
png = "/support_web/1stlevel/"&loc&"/Pictures/NetworkMap.png"
png2 = "/support_web/1stlevel/"&loc&"/Pictures/NetworkMap2.png"
png3 = "/support_web/1stlevel/"&loc&"/Pictures/NetworkMap3.png"
png4 = "/support_web/1stlevel/"&loc&"/Pictures/NetworkMap4.png"
png5 = "/support_web/1stlevel/"&loc&"/Pictures/NetworkMap5.png"
%>
<!--#include virtual='/support_web/Components/imgs.asp'-->