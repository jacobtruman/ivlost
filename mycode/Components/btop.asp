<%

prop = request.querystring("prop")
gateway = FP_FieldVal(fp_rs,"gateway")
lgn = FP_FieldVal(fp_rs,"lgn")
pswd = FP_FieldVal(fp_rs,"pswd")
dbname = FP_FieldVal(fp_rs,"dbname")
lgn = FP_FieldVal(fp_rs,"lgn")
htype = FP_FieldVal(fp_rs,"htype")
name = FP_FieldVal(fp_rs,"name")
loc = FP_FieldVal(fp_rs,"loc")
fold = FP_FieldVal(fp_rs,"fold")
level1 = FP_FieldVal(fp_rs,"level1")
level2 = FP_FieldVal(fp_rs,"level2")
inst = FP_FieldVal(fp_rs,"inst")
active = FP_FieldVal(fp_rs,"active")
notes = FP_FieldVal(fp_rs,"notes")
str = "prop="&prop&"&htype="&htype&"&name="&name&"&loc="&loc&"&img="&img&"&fold="&fold&"&inst="&inst&"&"

%>
<!--#include virtual='/support_web/Components/imgs.asp'-->