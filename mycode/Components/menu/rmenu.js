var display_url=0
function showmenuie5(){
 var rightedge=document.body.clientWidth-event.clientX
 var bottomedge=document.body.clientHeight-event.clientY
 if (rightedge<ie5menu.offsetWidth)
  ie5menu.style.left=document.body.scrollLeft+event.clientX-ie5menu.offsetWidth
 else
  ie5menu.style.left=document.body.scrollLeft+event.clientX
  if (bottomedge<ie5menu.offsetHeight)
   ie5menu.style.top=document.body.scrollTop+event.clientY-ie5menu.offsetHeight
  else
   ie5menu.style.top=document.body.scrollTop+event.clientY
 ie5menu.style.visibility="visible"
 return false
}
function hidemenuie5(){
 ie5menu.style.visibility="hidden"
}
function highlightie5(){
 if (event.srcElement.className=="menuitemz"){
  event.srcElement.style.backgroundColor="highlight"
  event.srcElement.style.backgroundColor="C0C0C0"
  event.srcElement.style.color="FFFFFF"
  if (display_url==1)
   window.status=event.srcElement.url
 }
}
function lowlightie5(){
 if (event.srcElement.className=="menuitemz"){
  event.srcElement.style.backgroundColor=""
  event.srcElement.style.color="black"
  window.status=''
 }
}
function jumptoie5(){
 if (event.srcElement.className=="menuitemz"){
  if (event.srcElement.getAttribute("target")!=null)
   window.open(event.srcElement.url,event.srcElement.getAttribute("target"))
  else
   window.location=event.srcElement.url
 }
}

document.write('<!--[if IE]>');
document.write('<div style="visibility:hidden" id="ie5menu" class="skin0" onMouseover="highlightie5()" onMouseout="lowlightie5()" onClick="jumptoie5()">');
document.write('<div class="menuitemz" url="index2.html">- Tools News</div>');
document.write('<div class="menuitemz" url="patches.html">- Patches News</div>');
document.write('<div class="menuitemz" url="oldnews.html">- More News</div>');
document.write('<hr>');
document.write('<div class="menuitemz" url="http://pub72.ezboard.com/baldostools" target="_blank">- New Aldos Tools Forum</div>');
document.write('<div class="menuitemz" url="search.html">- Search the site</div>');
document.write('<hr>');
document.write('<div class="menuitemz" url="http://www.geocities.com/aldo.vargas/" target="_blank">- My Other Tools</div>');
document.write('<div class="menuitemz" url="links.html">- Other Links</div>');
document.write('<div class="menuitemz" url="main.html">- Disable Popup Menu</div>');
document.write('<hr>');
document.write('<div class="menuitemz" url="mailto:?Subject=http://www.aldostools.com is really cool!">- Tell a Friend...</div>');
document.write('</div>');
document.write('<![endif]-->');

if (document.all&&window.print&&parent==self){
 ie5menu.className="skin0"
 document.oncontextmenu=showmenuie5
 document.body.onclick=hidemenuie5
}
