function right(e) {
  if (navigator.appName == 'Microsoft Internet Explorer' && (event.button == 2 || event.button == 3)) {
    alert("Ha, Gotcha!");
	  return false;
 	}
	else {
	if (navigator.appName == 'Microsoft Internet Explorer' && (event.button == 1 )){
	return window.close();
	}else{
    return true;
  }
}
}
document.onmousedown=right;
document.onmouseup=right;

if (document.layers)
  window.captureEvents(Event.MOUSEDOWN);
if (document.layers)
  window.captureEvents(Event.MOUSEUP);

window.onmousedown=right;
window.onmouseup=right;
