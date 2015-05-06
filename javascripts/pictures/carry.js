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


pic = unescape(params["pic"]);
loc = unescape(params["loc"]);
val = "<LINK REL='stylesheet' TYPE='text/css' HREF='"+loc+"/stylesheets/"+pic+".css'>"
document.write(val);

}

function pullTitle(){


desc = unescape(params["desc"]);
locn = unescape(params["locn"]);
val = locn+" - "+desc;
document.title=val;
document.write(val);
}

function loadprev(){


pic = unescape(params["pic"]);
loc = unescape(params["loc"]);
locn = unescape(params["locn"]);
lend = unescape(params["lend"]);
pvalue=parseFloat(pic) - 1

if (pvalue == '1'){
prev = '01';
}else if (pvalue == '2'){
prev = '02';
}else if (pvalue == '3'){
prev = '03';
}else if (pvalue == '4'){
prev = '04';
}else if (pvalue == '5'){
prev = '05';
}else if (pvalue == '6'){
prev = '06';
}else if (pvalue == '7'){
prev = '07';
}else if (pvalue == '8'){
prev = '08';
}else if (pvalue == '9'){
prev = '09';
}else{
prev = pvalue;
}

if(lend != 'yes'){
pval = "<a href='JavaScript: "+loc+"pic_"+prev+"(\""+prev+"\",\""+loc+"\",\""+locn+"\",\"nog\")'>"
}else{
pval = "<A href='../mid.html'>"
}
document.write(pval);
}

function loadnext(){


pic = unescape(params["pic"]);
loc = unescape(params["loc"]);
locn = unescape(params["locn"]);
rend = unescape(params["rend"]);
nvalue=parseFloat(pic) + 1

if (nvalue == '1'){
next = '01';
}else if (nvalue == '2'){
next = '02';
}else if (nvalue == '3'){
next = '03';
}else if (nvalue == '4'){
next = '04';
}else if (nvalue == '5'){
next = '05';
}else if (nvalue == '6'){
next = '06';
}else if (nvalue == '7'){
next = '07';
}else if (nvalue == '8'){
next = '08';
}else if (nvalue == '9'){
next = '09';
}else{
next = nvalue;
}

if(rend != 'yes'){
nval = "<a href='JavaScript: "+loc+"pic_"+next+"(\""+next+"\",\""+loc+"\",\""+locn+"\",\"nog\")'>"
}else{
nval = "<A href='../mid.html'>"
}
document.write(nval);
}