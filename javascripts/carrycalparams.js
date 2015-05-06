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


day = unescape(params["day"]);
year = unescape(params["year"]);
month = unescape(params["month"]);
val = "<IMG SRC='"+year+"/"+month+"/"+day+".gif' BORDER='2'>";
document.write(val);

}

function pullTitle(){


day = unescape(params["day"]);
year = unescape(params["year"]);
month = unescape(params["month"]);
monthfull = unescape(params["monthfull"]);
val = monthfull+" "+day+", "+year;
document.title=val;
}