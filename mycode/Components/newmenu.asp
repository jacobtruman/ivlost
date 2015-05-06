<%
dim objConnh,sqlh,rsh
set objConnh = server.createobject("ADODB.connection")
objConnh.open application("propinfo_ConnectionString")
sqlh = "SELECT DISTINCT htype FROM prop"
set rsh = objConnh.execute(sqlh)
if not rsh.eof then
i = 0
  with response
    do until rsh.eof
	htype = rsh("htype")



response.write "<form name='formname' method='GET' ACTION='/support_web/forms/Bulletin.asp'>"
dim objConnd,sqld,rsd
set objConnd = server.createobject("ADODB.connection")
objConnd.open application("propinfo_ConnectionString")
sqld = "SELECT * FROM prop where (htype = '"&htype&"')"
set rsd = objConnd.execute(sqld)
if not rsd.eof then
  with response
  	.write htype&"<BR>"
    .write "<select size='1' NAME='prop' CLASS='formfield' STYLE='width:180'>"
	.write "<option value='' selected>Select One</option>"
    do until rsd.eof
	name = rsd("name")
	prop = rsd("prop")
      .write "<option value='"&prop&"' class='formfield'>" & name & "</option>"
      rsd.movenext
    loop
    rsd.close
    set rsd = nothing
    objConnd.close
    set objConnd = nothing
    .write "</select>"
  end with
else
  rsd.close
  set rsd = nothing
  objConnd.close
  set objConnd = nothing
  response.write "no menu items found"
end if
response.write "<BR><input type='submit' value='Select' class='formbutton'></form><BR>"


      	rsh.movenext
    loop
    rsh.close
    set rsh = nothing
    objConnh.close
    set objConnh = nothing
  end with

else
  rsh.close
  set rsh = nothing
  objConnh.close
  set objConnh = nothing
  response.write "no menu items found"
end if
%>