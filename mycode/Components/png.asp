<%
For i = 1 To 10
map = i - 1
if (i = 1) then
pic = "/support_web/1stlevel/"&loc&"/Pictures/NetworkMap.png"
else
pic = "/support_web/1stlevel/"&loc&"/Pictures/NetworkMap"&i&".png"
end if
Dim FSO
set FSO = server.createObject("Scripting.FileSystemObject")
Dim Filepath
Filepath = Server.MapPath(pic)
if FSO.FileExists(Filepath) Then
	Response.write "<BR><img border='0' src='"&pic&"' usemap='#FPMap"&map&"' border='0'>"
Else

End If
Set FSO = nothing
Next
%>