var dragapproved=false
var minrestore=0
var initialheight
var ie5=document.all&&document.getElementById
var ns6=document.getElementById&&!document.all
var agt=navigator.userAgent.toLowerCase(); 
var opera = (agt.indexOf("opera") != -1) 
var bmajor = parseInt(navigator.appVersion);
var opera6 = (this.opera && (bmajor ==6));

// pref.js
var defaultOpacity = 95;
var defaultStyle = 1;

function setStyle(opa,newStyle) 
{
	if (document.layers)
	{
		window.location.reload(true);
	}
	else 
	{
        if (oldStyle != newStyle) {
            setStyleByClass("h" + oldStyle,"h" + newStyle);
            setStyleByClass("i" + oldStyle,"i" + newStyle);

            document.getElementById("bot").className = "body" + newStyle;
            document.getElementById("bd").className = "body" + newStyle;

            setStyleByClass("bt" + oldStyle,"bt" + newStyle);
        }

		if (document.all)
		{
			displaydiv.style.filter="Alpha(Opacity=" + opa + ")";

			for (i = 1; i <= 2; i++)
			{
				document.getElementById("tdt" + i).style.filter="Alpha(Opacity=" + opa + ")";
			}
			pN = newStyle;
			oldOpacity = opa;
		}
		closeit();
	}
}

var ie = (document.all) ? true : false;

function setStyleByClass(c,p){
	var elements;
	elements = (ie) ? document.all : document.getElementsByTagName('*');

	for(var i = 0; i < elements.length; i++){
		var node = elements.item(i);

		if (node.className == c)
			node.className = p;
	}
}

function previewStyle(opa,newStyle,showMessage) 
{
	if (document.layers && showMessage)
	{
		alert("Preview not possible in Netscape 4");
	}
	else if (oldStyle != newStyle)
	{
		setStyleByClass("h" + oldStyle,"h" + newStyle);
		setStyleByClass("i" + oldStyle,"i" + newStyle);
		setStyleByClass("bt" + oldStyle,"bt" + newStyle);
		document.getElementById("bot").className = "body" + newStyle;
		document.getElementById("bd").className = "body" + newStyle;

		oldStyle = newStyle;

		if (document.all)
		{
			displaydiv.style.filter="Alpha(Opacity=" + opa + ")";
		}
	}
}

function cancelStyleChange()
{
	if (!ie5 && !ns6) {
		window.close();
	}
	else {
		if (document.all)
		{
            displaydiv.style.filter="Alpha(Opacity=" + oldOpacity + ")";
        }
		document.getElementById("bot").className = "body" + pN;
		document.getElementById("bd").className = "body" + pN;
		setStyleByClass("h" + oldStyle,"h" + pN);
		setStyleByClass("i" + oldStyle,"i" + pN);
		setStyleByClass("bt" + oldStyle,"bt" + pN);

		oldStyle = pN;

		closeit();
	}
}

function resetStyle(opaElement,styleElement)
{
	opaElement.selectedIndex = defaultOpacity/5 - 10;
	styleElement.selectedIndex = defaultStyle - 1;

	previewStyle(opaElement.value,styleElement.value,false);
}

function setNewStyle(opa,newStyle,timezone)
{
	var today = new Date();
	var expires = new Date(today.getTime() + (60 * 60 * 24 * 365 * 1000));

	Set_Cookie("picnumber",newStyle,expires,"/calvin_and_hobbes/");
	Set_Cookie("opacity",opa,expires,"/calvin_and_hobbes/");
	Set_Cookie("timezone",timezone,expires,"/calvin_and_hobbes/");

	if (!ie5 && !ns6) {
		opener.reloadPage();
		window.close();
	}
	else {
		setStyle(opa, newStyle);
	}
}

function Set_Cookie(name,value,expires,path,domain,secure) {
	document.cookie = name + "=" + escape(value) +
		( (expires) ? ";expires=" + expires.toGMTString() : "") +
		( (path) ? ";path=" + path : "") + 
		( (domain) ? ";domain=" + domain : "") +
		( (secure) ? ";secure" : "");
}

function setActiveStyleSheet(title) {
   var i, a, main;
   for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
     if(a.getAttribute("rel").indexOf("style") != -1
        && a.getAttribute("title")) {
       a.disabled = true;
       if(a.getAttribute("title") == title) a.disabled = false;
     }
   }
}

//pop.js

function drag_drop(e){
if (ie5&&dragapproved&&event.button==1){
document.getElementById("dwindow").style.left=tempx+event.clientX-offsetx
document.getElementById("dwindow").style.top=tempy+event.clientY-offsety
return false;
}
else if (ns6&&dragapproved){
document.getElementById("dwindow").style.left=tempx+e.clientX-offsetx
document.getElementById("dwindow").style.top=tempy+e.clientY-offsety
return false;
}
}

function initializedrag(e){
offsetx=ie5? event.clientX : e.clientX
offsety=ie5? event.clientY : e.clientY
tempx=parseInt(document.getElementById("dwindow").style.left)
tempy=parseInt(document.getElementById("dwindow").style.top)
dragapproved=true
document.onmousemove=drag_drop
}

function loadpage(url,width,height,pTyp){
if ((!ie5&&!ns6) || opera6)
if (pTyp=="img") window.open("pic.php?pic=" + url,"_blank","width=" + width + ",height=" + height + ",scrollbars=0")
else window.open(url,"_blank","width=" + width + ",height=" + height + ",scrollbars=0")

else{
if (opera) {height+=2;}
if (ns6) document.getElementById("displaydiv").style.width=width;
else document.getElementById("displaydiv").style.width=width + 2
document.getElementById("displaydiv").style.height=winheight
document.getElementById("dbar").style.width=width+30;
document.getElementById("displaydiv").innerHTML="<table width=100% height=100% bgcolor='#383838'><TD>&nbsp;</TD></TABLE>";
document.getElementById("dwindow").style.left=30
document.getElementById("dwindow").style.top=ns6? window.pageYOffset*1+30 : document.body.scrollTop*1+30
document.getElementById("dwindow").style.display=''
document.getElementById("displaydiv").style.display=''
openwindow(url,width,height,pTyp)
}
}

var displayProgress;
var maxBar = 30;
var pTimer;
function showprogress(am) {
var iH = "";
for (i=0;i<(am%maxBar);i++) iH+="|";
document.getElementById("loaderbar").innerHTML=iH;
am += 1;
if (am < maxBar*10 && displayProgress == 1) pTimer = setTimeout("showprogress(" + am + ")",200);
else picloaded();
}

function loadpic(url,width,height){
loadpage(url,width,height,"img")
}

function closeit(){
document.getElementById("dwindow").style.display="none";
document.getElementById("cframe").src="about:blank";
}

if (ie5||ns6)
document.onmouseup=new Function("dragapproved=false;document.onmousemove=null;document.getElementById('saver').style.display='none'")

var steps=10
var winheight=10

function openwindow(thelocation,sizex,sizey,pTyp)
{
temploc=thelocation
if (!(window.resizeTo&&document.all)&&!(window.resizeTo&&document.getElementById)){
window.open(thelocation)
return
}
displayProgress=1;
showprogress(1)
var stepy = ((sizey-winheight)/steps)
go2(thelocation,sizex,sizey,stepy,pTyp)
}

function go2(thelocation,sizex,sizey,stepy,pTyp)
{
	if (winheight>sizey-stepy)
	{
		document.getElementById("displaydiv").style.height=sizey;

		if (pTyp=="img"){
			if (opera) {sizey -= 2}
			document.getElementById("displaydiv").innerHTML="<IMG style=\"background-color:white\" onload=\"picloaded()\" src=\"" + thelocation + "\" width=" + sizex + " height=" + sizey + ">";
		}
		else {
		document.getElementById("cframe").src=thelocation
		}
		winheight=0
	}
	else
	{
		document.getElementById("displaydiv").style.height=winheight
		winheight+=stepy
		setTimeout("go2('" + thelocation + "'," + sizex + "," + sizey + "," + stepy + ",\"" + pTyp + "\")",10)
	}
}

function picloaded()
{
	displayProgress = 0;
	clearTimeout(pTimer);
	document.getElementById("loaderbar").innerHTML="";
}

function popuploaded(theC)
{
	document.getElementById("displaydiv").innerHTML = theC;

	picloaded();
}

//m2.js
var zF=1;
var isie=0;
if(window.navigator.appName=="Microsoft Internet Explorer"&&window.navigator.appVersion.substring(window.navigator.appVersion.indexOf("MSIE")+5,window.navigator.appVersion.indexOf("MSIE")+8)>=5.5) {
isie=1;
}
else {
isie=0;
}
function getPopupHtml() {
var html='<HTML><BODY>';
html+='<TABLE STYLE="border:1px dashed #ccc;" WIDTH="120" HEIGHT="100%" CELLPADDING="0" CELLSPACING="0">';
html+='<LI'+'NK title=mainstyle href="../stylesheets/calvin.css" type=text/css rel=STYLESHEET>\n';
html+='<ST'+'YLE TYPE="text/css">\n';
html+='a:link {text-decoration:none;font-family:Tahoma,Arial;font-size:8pt;}\n';
html+='a:visited {text-decoration:none;font-family:Tahoma,Arial;font-size:8pt;}\n';
html+='</ST'+'YLE>\n';
html+='<SC'+'RIPT LANGUAGE="JavaScript">\n';
html+='window.onerror=null;\n\n';
html+='</'+'SCRIPT>\n';
html+='<TD id=maintd vAlign=top width=120 bgColor="white">';
html+='<TABLE cellSpacing=0 cellPadding=1 width=118 border=0>';
html+='<TR>';
html+='<TD vAlign=top>';
html+='<P style="cursor:default" id=hm class=hm>MENU</P></TD></TR>';
html+='<TR><TD class=z id=m1 ONMOUSEOVER="parent.omov(1)" ONMOUSEOUT="parent.omou(1)" ONCLICK="window.parent.history.go(-1);parent.oPopup.hide();" onmouseup="window.parent.history.go(-1);parent.oPopup.hide();"><P id=p1 class=men><U>B</U>ack</P></TD></TR>\n';
html+='<TR><TD class=z id=m2 ONMOUSEOVER="parent.omov(2)" ONMOUSEOUT="parent.omou(2)" ONCLICK="window.parent.history.go(1);parent.oPopup.hide();" onmouseup="window.parent.history.go(1);parent.oPopup.hide();"><P id=p2 class=men>F<U>o</U>rward</P></TD></TR>\n';
html+='<TR><TD class=z><HR vspace=0></TD></TR>\n';
html+='<TR><TD class=z id=m3 ONMOUSEOVER="parent.omov(3)" ONMOUSEOUT="parent.omou(3)" ONCLICK="window.print();parent.oPopup.hide();"><P id=p3 class=men>Pr<U>i</U>nt</P></TD></TR>\n';
html+='<TR><TD class=z id=m4 ONMOUSEOVER="parent.omov(4)" ONMOUSEOUT="parent.omou(4)" ONCLICK="window.parent.document.location.reload();"><P id=p4 class=men><U>R</U>efresh</P></TD></TR>\n';
html+='<TR><TD class=z id=m5><HR vspace=0></TD></TR>\n';
html+='<TR><TD class=z id=m6 ONMOUSEOVER="parent.omov(6)" ONMOUSEOUT="parent.omou(6)" ONCLICK="parent.zoomDoc(1.2);"><P id=p6 class=men><U>Z</U>oom in</P></TD></TR>\n';
html+='<TR><TD class=z id=m7 ONMOUSEOVER="parent.omov(7)" ONMOUSEOUT="parent.omou(7)" ONCLICK="parent.zoomDoc(0.8333);"><P id=p7 class=';
html+= zF==1?'dis':'men';
html+='>Zoo<U>m</U> out</P></TD></TR>\n';
html+='<TR><TD class=z id=m8 ONMOUSEOVER="parent.omov(8)" ONMOUSEOUT="parent.omou(8)" ONCLICK="parent.zoomDoc(0);"><P id=p8 class=';
html+= zF==1?'dis':'men';
html+='>Show <U>a</U>ll</P></TD></TR>\n';
html+='<TR><TD class=z id=m9><HR vspace=0></TD></TR>\n';
html+='<TR><TD class=z id=m10 ONMOUSEOVER="parent.omov(10)" ONMOUSEOUT="parent.omou(10)" ONCLICK="parent.window.external.AddFavorite(\'http://www.reemst.com/calvin_and_hobbes/\',\'Calvin and Hobbes at Martijn\\\'s\');parent.oPopup.hide();"><P id=p10 class=men>Add to <U>F</U>avorites</P></TD></TR>\n';
html+='</TABLE></TD></TR></TABLE></BODY></HTML>';
return html;
}
if (isie) var oPopup = window.createPopup();

function zoomDoc(aM)
{
var cZ = document.body.style.zoom;
if (cZ == 0) cZ=1;
var nZ = cZ * aM;
if (nZ < 1.02) nZ = 1;
document.body.style.zoom=nZ;

if (zF != nZ){parent.oPopup.hide()}
zF = nZ;
}
function omou(id)
{
eval("oPopup.document.all.m"+id+".style.background='#FFF'");
if (id < 7 || id > 8 || zF != 1)
eval("oPopup.document.all.p"+id+".style.color='#000'");
}
function omov(id)
{
eval("oPopup.document.all.m"+id+".style.background='#008'");
if (id < 7 || id > 8 || zF != 1)
eval("oPopup.document.all.p"+id+".style.color='#FFF'");
}

function selectstart()
{
this.document.parentWindow.event.cancelBubble = true;
this.document.parentWindow.event.returnValue = false;
return false;
}


//mail.js
function mailme (address) {
var host = 'reemst';
var domain = 'com';
location.href="mailto:" + address + "@" + host + "." + domain;
}
