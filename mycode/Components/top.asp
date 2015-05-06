<%

prop = request.querystring("prop")
htype = request.querystring("htype")
name = request.querystring("name")
loc = request.querystring("loc")
img = request.querystring("img")
prop = request.querystring("prop")
fold = request.querystring("fold")
inst = request.querystring("inst")
str = "prop="&prop&"&htype="&htype&"&name="&name&"&loc="&loc&"&img="&img&"&fold="&fold&"&inst="&inst&"&"
pover = "/support_web/1stLevel/PropertyOverview.asp"
ipinfo = "/support_web/1stLevel/IPInformation.asp"
cinfo = "/support_web/1stLevel/ContactInformation.asp"
png = "/support_web/1stlevel/"&loc&"/Pictures/NetworkMap.png"
png2 = "/support_web/1stlevel/"&loc&"/Pictures/NetworkMap2.png"
png3 = "/support_web/1stlevel/"&loc&"/Pictures/NetworkMap3.png"
png4 = "/support_web/1stlevel/"&loc&"/Pictures/NetworkMap4.png"
png5 = "/support_web/1stlevel/"&loc&"/Pictures/NetworkMap5.png"
%>
<!--#include virtual='/support_web/Components/imgs.asp'-->