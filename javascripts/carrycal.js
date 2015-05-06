{
function getParams() {
var idx = document.URL.indexOf('?');
var params = new Array();
if (idx != -1) {
var pairs = document.URL.substring(idx+1, document.URL.length).split('&');
for (var i=0; i<pairs.length; i++) {
nameVal = pairs[i].split('=');
params[nameVal[0]] = nameVal[1];
   }
}
return params;
}
params = getParams();
}

function pullParams(){

01 = unescape(params["01"]);
02 = unescape(params["02"]);
03 = unescape(params["03"]);
04 = unescape(params["04"]);
05 = unescape(params["05"]);
06 = unescape(params["06"]);
07 = unescape(params["07"]);
08 = unescape(params["08"]);
09 = unescape(params["09"]);
10 = unescape(params["10"]);
11 = unescape(params["11"]);
12 = unescape(params["12"]);
13 = unescape(params["13"]);
14 = unescape(params["14"]);
15 = unescape(params["15"]);
16 = unescape(params["16"]);
17 = unescape(params["17"]);
18 = unescape(params["18"]);
19 = unescape(params["19"]);
20 = unescape(params["20"]);
21 = unescape(params["21"]);
22 = unescape(params["22"]);
23 = unescape(params["23"]);
24 = unescape(params["24"]);
25 = unescape(params["25"]);
26 = unescape(params["26"]);
27 = unescape(params["27"]);
28 = unescape(params["28"]);
29 = unescape(params["29"]);
30 = unescape(params["30"]);
31 = unescape(params["31"]);
}

function createDate()
{
if (01 == "01"){
document.write("<title>"+01+"</title>");
document.write("<center>");
document.write("<img src='pics/"+001+".gif' border='2'>");
document.write("</center>");
}else{
}
;
}
