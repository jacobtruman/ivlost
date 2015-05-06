//Edit the following variables below.
//font face example: arial,verdana,tahoma
var fface="courier new";
//font size
var fsize="4";
//font color
var fcolor="#FFFFFF";
//bold text. Set to 1 if true 0 if false;
var b = "1";
//italics text. Set to 1 if true 0 if false;
var i = "0";
//Do you want the date to be seen in the window status bar?
//Set to 1 if true 0 if false;
var statusbaron = "1";
//If the above is set to 1 insert the background color here.
var bgcolor = "#000000";

//##Do Not Edit Below this line!##//

//sets the cookie
function setcookie(name, value, expires, path, domain, secure) {
document.cookie = name + "=" + escape(value) + ((expires == null) ? "" : "; expires=" + 
expires.toGMTString()) + ((path == null) ? "" : "; path=" + path) + 
((domain == null) ? "" : "; domain=" + domain) + ((secure == null) ? "" : "; secure");

}

function getcookie(name,value) {  
var search = name + "="          
if (document.cookie.length > 0) {                 
offset = document.cookie.indexOf(search)                     
if (offset != -1) {                            
offset += search.length                                                     
end = document.cookie.indexOf(";", offset)                           
if (end == -1)                                         
end = document.cookie.length                             
return unescape(document.cookie.substring(offset, end))  
     }           
    }
   }

var name = getcookie("cookiecounter");
var now = new Date();
var maddcount=name++;
var vverb;
var bold ="",ital ="",ebold="",eital="";
now.setTime(now.getTime() + 31 * 24 * 60 * 60 * 1000);
if(b==1) { var bold = "<B>"; ebold = "</B>";}
if(i==1) { var ital = "<i>"; eital = "</I>";}

var dacss = "<font face=" + fface + " size=" + fsize + " color=" + fcolor + " style='background-color:" + bgcolor + ";'>";

if(name) {
if (name == "1") {
document.write(bold + ital + dacss + "You've been here " + name + " time.</font>" + ebold + eital);
setcookie("cookiecounter", name, now);
 } else {
document.write(bold + ital + dacss + "You've been here " + name + " times.</font>"  + ebold + eital);
setcookie("cookiecounter", name, now);
  }
 } else {
name=0;
document.write(bold + ital + dacss + "This is your first time here! Welcome to our site!</font>"  + ebold + eital);
setcookie("cookiecounter", name, now);
}
