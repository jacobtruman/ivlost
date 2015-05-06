/*

INSTRUCTIONS

Step 1
In the Logins & Passwords section, configure the variables as
indicated by the comments.
 
Step 2:
Add the following code to the <head> section of your login page: 
 <script src="scripts/login.js"></script> 
Change "scripts/login.js" to reflect the correct path to this script
file on your server. 
 
Step 3:
Add this code to the login page, at the place you want the login
panel to show:
 
 <script language="JavaScript">
  BuildPanel();
 </script>
 
Step 4:
Add the following code to the <head> section of each page procteded
by this script:
 
 <script src="scripts/login.js"></script>
 <script language="JavaScript">
  checkCookie();
 </script>

Change "scripts/login.js" to reflect the correct path to this script
file on your server.
 
Step 5: 
On the page that is to have the logout button, paste this code where you
want the button to be:

 <form action="" name="frmLogoff">
  <input type="button" name="btLogoff" value="log out" onclick="logout();">
 </form>
 
Step 6:
Upload this script and your html pages to the relevant directories
on your server.   

*/

//----------------------------------------------------------------
//  Logins & Passwords - These require configuration.
//----------------------------------------------------------------
var thesuccesspg = "right.html";
var loginpage = "index.html";
var target = "right";

var users = new Array();

users[0] = new Array("jacob","insane");
users[1] = new Array("katy","katy12");
users[2] = new Array("guest","guest123");

//----------------------------------------------------------------
//  Login Functions
//----------------------------------------------------------------
function access(login,password){
 var loggedin = 0;
 var members = users.length;
 for(x=0;x<members && !loggedin; x++){
 if((login==users[x][0])&&(password==users[x][1]))
  loggedin = 1;
 } 
 if(loggedin==1){
  window.location = thesuccesspg;
  setCookie("login",1); }
 else
  alert('access denied');
}

function logout() {
 deleteCookie("login");
 window.self.location = loginpage;
}

//----------------------------------------------------------------
// Cookie Handler
//----------------------------------------------------------------
var ckTemp = document.cookie;

function setCookie(name, value) { 
 if (value != null && value != "")
  document.cookie=name + "=" + escape(value) + ";";
 ckTemp = document.cookie;
 }
 
function deleteCookie(name) {
  if (getCookie(name)) {
    document.cookie = name + "=" +
    "; expires=Thu, 01-Jan-70 00:00:01 GMT";
  }
}

function getCookie(name) { 
 var index = ckTemp.indexOf(name + "=");
 if(index == -1) return null;
  index = ckTemp.indexOf("=", index) + 1;
 var endstr = ckTemp.indexOf(";", index);
 if (endstr == -1) endstr = ckTemp.length;
 return unescape(ckTemp.substring(index, endstr));
 }
  
function checkCookie() {
 var temp = getCookie("login");
 if(!temp==1) {
  alert('access denied'); 
 top.location.href=loginpage; }
}

//----------------------------------------------------------------
// Login Panel
//----------------------------------------------------------------

function BuildPanel() {
document.write('<form name="logon">');
document.write('<table align="center" border="0">');
document.write('<tr>');
document.write('<td align="right">');
document.write('<font face="BatmanForeverAlternate,Verdana" color="FFFFFF" size="1">');
document.write('Login:');
document.write('</font>');
document.write('</td>');
document.write('<td>');
document.write('<input type="text" name="login" size="15" class="formfield">');
document.write('</td>');
document.write('</tr>');
document.write('<tr>');
document.write('<td align="right">');
document.write('<font face="BatmanForeverAlternate,Verdana" color="FFFFFF" size="1">');
document.write('Password:');
document.write('</font>');
document.write('</td>');
document.write('<td>');
document.write('<input type="password" name="password" size="15" class="formfield">');
document.write('</td>');
document.write('</tr>');
document.write('<tr>');
document.write('<td align="center" colspan="2">');
document.write('<input type="button" value="Logon" name="Logon" class="formbutton" onclick="access(login.value,password.value)">');
document.write('<input type="reset" value="Reset" name="Reset" class="formbutton">');
document.write('</td>');
document.write('</tr>');
document.write('</table>');
document.write('</form>');
}
