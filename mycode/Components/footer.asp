<font face='verdana' size='1'>
Page last modified: 
</font>
<font face='verdana' size='1' color='FF0000'>
<% 
dfile = Request.ServerVariables("SCRIPT_NAME")
'response.write dfile
Dim oFSO,oFile,dMod 
Set oFSO=Server.CreateObject("Scripting.FileSystemObject") 
'BE SURE TO CHANGE THE NAME IN THE NEXT LINE!! 
Set oFile=oFSO.GetFile(Server.MapPath(dfile)) 
dMod=oFile.DateLastModified 
Set oFSO=Nothing 
Set oFile=Nothing 
Response.Write dMod 
%>
</font>