////////////////////////////////////////////////
//  DHTML MENU BUILDER 2.8.13                 //
//  (c)xFX JumpStart                          //
//                                            //
//  PSN: 120209-TWB-2473-2378                 //
//                                            //
//  GENERATED: 6/15/2001 - 9:41:15 PM         //
////////////////////////////////////////////////


	var nStyle = new Array;
	var hStyle = new Array;
	var nLayer = new Array;
	var hLayer = new Array;
	var nTCode = new Array;

	var AnimStep = 0;
	var AnimHnd = 0;
	var HTHnd = new Array;
	var DoFormsTweak = true;

	var mFrame;
	var cFrame;

	var OpenMenus = new Array;
	var SelCommand;
	var nOM = 0;

	var mX;
	var mY;
	var xOff = 0;

	var HideSpeed = 300;

var BV=navigator.appVersion;
BV=parseFloat(BV.indexOf('MSIE')>0?BV.split(';')[1].split(' ')[2]:BV.split(' ')[0]);
var BN=window.navigator.appName;
var IsWin=(navigator.userAgent.indexOf('Windows')!=-1)?true:false;
var OP=(navigator.userAgent.indexOf('Opera')!=-1&&BV>=4)?true:false;
var SM=(BN.indexOf('Netscape')!=-1&&(BV>=5)||OP)?true:false;
var NS=(BN.indexOf('Netscape')!=-1&&!SM)?true:false;
var IE=(BN.indexOf('Explorer')!=-1&&(BV>=4)||SM)?true:false;


	if((!IsWin&&IE)||SM) {
		frames.self = window;
		frames.top = top;
	}

	if(IE)
		xOff = (SM&&!OP)?-9:2;
	cFrame = eval(frames['self']);

	var fx = 0;



	hStyle[0]="border: 0; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #FFFFFF; background-color: #0000FF; cursor: hand;";
	hStyle[1]="border: 0; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #FFFFFF; background-color: #0000FF; cursor: hand;";
	hStyle[2]="border: 0; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #FFFFFF; background-color: #0000FF; cursor: hand;";
	hStyle[3]="border: 0; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #FFFFFF; background-color: #0000FF; cursor: hand;";
	hStyle[4]="border: 0; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #FFFFFF; background-color: #0000FF; cursor: hand;";
	hStyle[5]="border: 0; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #FFFFFF; background-color: #0000FF; cursor: hand;";
	hStyle[6]="border: 0; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #FFFFFF; background-color: #0000FF; cursor: hand;";
	hStyle[7]="border: 0; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #FFFFFF; background-color: #0000FF; cursor: hand;";
	hStyle[8]="border: 0; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #FFFFFF; background-color: #0000FF; cursor: hand;";
	hStyle[9]="border: 0; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #FFFFFF; background-color: #0000FF; cursor: hand;";
	hStyle[10]="border: 0; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #FFFFFF; background-color: #0000FF; cursor: hand;";
	hStyle[11]="border: 0; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #FFFFFF; background-color: #0000FF; cursor: hand;";
	hStyle[12]="border: 0; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #FFFFFF; background-color: #0000FF; cursor: hand;";
	hStyle[13]="border: 0; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #FFFFFF; background-color: #0000FF; cursor: hand;";
	nTCode[1]="frames[\'self\'].execURL(\'http://www.ivlost.com/pictures.html\', \'frames[self]\');";
	nLayer[1]="<p align=left><font face=Tahoma point-size=8 color=#000000>Pictures</font>";
	hLayer[1]="<p align=left><font face=Tahoma point-size=8 color=#FFFFFF>Pictures</font>";
	nTCode[2]="frames[\'self\'].execURL(\'http://www.ivlost.com/links.html\', \'frames[self]\');";
	nLayer[2]="<p align=left><font face=Tahoma point-size=8 color=#000000>Links</font>";
	hLayer[2]="<p align=left><font face=Tahoma point-size=8 color=#FFFFFF>Links</font>";
	nTCode[3]="frames[\'self\'].execURL(\'http://mail.ivlost.com\', \'frames[self]\');";
	nLayer[3]="<p align=left><font face=Tahoma point-size=8 color=#000000>ivlost Mail</font>";
	hLayer[3]="<p align=left><font face=Tahoma point-size=8 color=#FFFFFF>ivlost Mail</font>";
	nTCode[4]="frames[\'self\'].execURL(\'http://www.ivlost.com/roll_1.html\', \'frames[self]\');";
	nLayer[4]="<p align=left><font face=Tahoma point-size=8 color=#000000>Roll 1</font>";
	hLayer[4]="<p align=left><font face=Tahoma point-size=8 color=#FFFFFF>Roll 1</font>";
	nTCode[5]="frames[\'self\'].execURL(\'http://www.ivlost.com/roll_2.html\', \'frames[self]\');";
	nLayer[5]="<p align=left><font face=Tahoma point-size=8 color=#000000>Roll 2</font>";
	hLayer[5]="<p align=left><font face=Tahoma point-size=8 color=#FFFFFF>Roll 2</font>";
	nTCode[6]="frames[\'self\'].execURL(\'http://www.ivlost.com/roll_3.html\', \'frames[self]\');";
	nLayer[6]="<p align=left><font face=Tahoma point-size=8 color=#000000>Roll 3</font>";
	hLayer[6]="<p align=left><font face=Tahoma point-size=8 color=#FFFFFF>Roll 3</font>";
	nTCode[7]="frames[\'self\'].execURL(\'http://www.ivlost.com/roll_4.html\', \'frames[self]\');";
	nLayer[7]="<p align=left><font face=Tahoma point-size=8 color=#000000>Roll 4</font>";
	hLayer[7]="<p align=left><font face=Tahoma point-size=8 color=#FFFFFF>Roll 4</font>";
	nTCode[8]="frames[\'self\'].execURL(\'http://www.ivlost.com/roll_5.html\', \'frames[self]\');";
	nLayer[8]="<p align=left><font face=Tahoma point-size=8 color=#000000>Roll 5</font>";
	hLayer[8]="<p align=left><font face=Tahoma point-size=8 color=#FFFFFF>Roll 5</font>";
	nTCode[9]="frames[\'self\'].execURL(\'http://www.ivlost.com/roll_6.html\', \'frames[self]\');";
	nLayer[9]="<p align=left><font face=Tahoma point-size=8 color=#000000>Roll 6</font>";
	hLayer[9]="<p align=left><font face=Tahoma point-size=8 color=#FFFFFF>Roll 6</font>";
	nTCode[10]="frames[\'self\'].execURL(\'http://www.cysop.net\', \'frames[self]\');";
	nLayer[10]="<p align=left><font face=Tahoma point-size=8 color=#000000>Cysop</font>";
	hLayer[10]="<p align=left><font face=Tahoma point-size=8 color=#FFFFFF>Cysop</font>";
	nTCode[11]="frames[\'self\'].execURL(\'http://www.mindshadow.net\', \'frames[self]\');";
	nLayer[11]="<p align=left><font face=Tahoma point-size=8 color=#000000>Mindshadow</font>";
	hLayer[11]="<p align=left><font face=Tahoma point-size=8 color=#FFFFFF>Mindshadow</font>";
	nTCode[12]="frames[\'self\'].execURL(\'http://www.nullsector.net\', \'frames[self]\');";
	nLayer[12]="<p align=left><font face=Tahoma point-size=8 color=#000000>Nullsector</font>";
	hLayer[12]="<p align=left><font face=Tahoma point-size=8 color=#FFFFFF>Nullsector</font>";
	nTCode[13]="frames[\'self\'].execURL(\'http://www.superchristie.net\', \'frames[self]\');";
	nLayer[13]="<p align=left><font face=Tahoma point-size=8 color=#000000>SuperChristie</font>";
	hLayer[13]="<p align=left><font face=Tahoma point-size=8 color=#FFFFFF>SuperChristie</font>";
	nTCode[14]="frames[\'self\'].execURL(\'http://www.mormongeek.com\', \'frames[self]\');";
	nLayer[14]="<p align=left><font face=Tahoma point-size=8 color=#000000>MormonGeek</font>";
	hLayer[14]="<p align=left><font face=Tahoma point-size=8 color=#FFFFFF>MormonGeek</font>";


	function GetCurCmd(e) {
//IE
//This function will return the current command under the mouse pointer.
//It will return null if the mouse is not over any command.
//------------------------------
//Version 1.5
//
		if(SM)
			var cc = e;
		else
			var cc = mFrame.window.event.srcElement;
		while(cc.id=="") {
			cc = cc.parentElement;
			if(cc==null)
				break;
		}
		return cc;
	}

	function HoverSel(mode, imgLName, imgRName, e) {
//IE
//This is the function called every time the mouse pointer is moved over a command.
//------------------------------
//mode: 0 if the mouse is moving over the command and 1 if is moving away.
//imgLName: Name of the left image object, if any.
//imgRName: Name of the right image object, if any.
//------------------------------
//Version 10.0
//
		var imgL = new Image;
		var imgLRsc = new Image;
		var imgR = new Image;
		var imgRRsc = new Image;
		var nStyle;
		var mc;
		
		if(mode==0 && OpenMenus[nOM].SelCommand!=null)
			HoverSel(1);
		
		if(imgLName!="_")
			var imgL = eval("mFrame.document.images['"+imgLName+"']");
		if(imgRName!="_")
			var imgR = eval("mFrame.document.images['"+imgRName+"']");
		
		if(mode==0) {
			mc = GetCurCmd(e);
			if(nOM>1)
				if(mc==OpenMenus[nOM-1].SelCommand)
					return false;
			if(OpenMenus[nOM].SelCommand || nOM>1)
				while(!InMenu()&&nOM>1)
					Hide();
			if(imgLName!='_') imgLRsc = eval(imgLName+"On");
			if(imgRName!='_') imgRRsc = eval(imgRName+"On");
			OpenMenus[nOM].SelCommand = mc;
			OpenMenus[nOM].SelCommandPar = [imgLName,imgRName,SM?mc.getAttribute("style"):mc.style.cssText];
			if(SM)
				mc.setAttribute("style", GetCStyle(mc.style) + hStyle[mc.id]);
			else
				mc.style.cssText = GetCStyle(mc.style) + hStyle[mc.id];
		} else {
			mc = (mode==1)?OpenMenus[nOM].SelCommand:OpenMenus[nOM].Opener;
			imgLName = (mode==1)?OpenMenus[nOM].SelCommandPar[0]:OpenMenus[nOM].OpenerPar[0];
			imgRName = (mode==1)?OpenMenus[nOM].SelCommandPar[1]:OpenMenus[nOM].OpenerPar[1];
			nStyle = (mode==1)?OpenMenus[nOM].SelCommandPar[2]:OpenMenus[nOM].OpenerPar[2];
			mc.style.background = "";
			if(SM)
				mc.setAttribute("style", nStyle);
			else
				mc.style.cssText = nStyle;
			if(imgLName!='_') imgLRsc = eval(imgLName+"Off");
			if(imgRName!='_') imgRRsc = eval(imgRName+"Off");
			window.status = "";
			OpenMenus[nOM].SelCommand = null;			
		}
		
		if(imgLName!='_') {
			imgL = eval("mFrame.document.images."+imgLName);
			imgL.src = imgLRsc.src;
		}
		if(imgRName!='_') {
			imgR = eval("mFrame.document.images."+imgRName);
			imgR.src = imgRRsc.src;
		}
		
		return true;
	}

	function NSHoverSel(mode, mc, bcolor) {
//NS
//This is the function called every time the mouse pointer is moved over or away from a command.
//------------------------------
//mode: 0 if the mouse is moving over the command and 1 if is moving away.
//mc: Name of the layer that corresponds to the selected command.
//n: Unique ID that identifies this command. Used to retrieve the data from the nLayer or hLayer array.
//bcolor: Background color of the command. Ignored if the group uses a background image.
//w: Width of the command's layer.
//h: Height of the command's layer.
//------------------------------
//Version 11.0
//
		var n;
		var LayerHTM;
		
		window.clearTimeout(CBparseInt(HTHnd[nOM]));HTHnd[nOM] = 0;
		if(!nOM) return false;
		
		if(mode==0 && OpenMenus[nOM].SelCommand!=null)
			NSHoverSel(1);
		
		if(mode==0) {
			mc = mc.parentLayer.layers[mc.name.substr(0, mc.name.indexOf("EH"))];
			n = CBparseInt(mc.name.substr(2));
			if(nOM>1)
				if(mc==OpenMenus[nOM-1].SelCommand)
					return false;
			while(!InMenu()&&nOM>1)
				Hide();
			LayerHTM = hLayer[n];
			OpenMenus[nOM].SelCommand = mc;
			OpenMenus[nOM].SelCommandPar = mc.bgColor;
			mc.bgColor = bcolor;
		} else {
			mc = (mode==1)?OpenMenus[nOM].SelCommand:OpenMenus[nOM].Opener;
			bcolor = (mode==1)?OpenMenus[nOM].SelCommandPar:OpenMenus[nOM].OpenerPar;
			n = CBparseInt(mc.name.substr(2));
			LayerHTM = nLayer[n];
			if(mc.parentLayer.background.src!="")
				mc.bgColor = null;
			else
				mc.bgColor = bcolor;
			window.status = "";
			OpenMenus[nOM].SelCommand = null;
		}
		mc.clip.width = mc.parentLayer.parentLayer.clip.width - 2*mc.parentLayer.left;
		mc.document.open();
		mc.document.write(LayerHTM);
		mc.document.close();

		return true;
	}

	function Hide() {
//IE,NS
//This function hides the last opened group and it keeps hiding all the groups until
//no more groups are opened or the mouse is over one of them.
//Also takes care of reseting any highlighted commands.
//------------------------------
//Version 3.5
//
		window.clearTimeout(HTHnd[nOM]);HTHnd[nOM] = 0;
		window.clearTimeout(AnimHnd);AnimHnd = 0;

		if(OpenMenus[nOM].SelCommand!=null) {
			if(IE) HoverSel(1);
			if(NS) NSHoverSel(1);
		}
		if(OpenMenus[nOM].Opener!=null) {
			if(IE) HoverSel(3);
			if(NS) NSHoverSel(3);
		}

		OpenMenus[nOM].visibility = "hidden";
		nOM--;

		if(nOM>0)
			if(!InMenu())
				HTHnd[nOM] = window.setTimeout("Hide()", HideSpeed/4);

		if(nOM==0)
			FormsTweak("visible");
	}

	function ShowMenu(mName, x, y, isCascading) {
//IE,NS
//This is the main function to show the menus when a hotspot is triggered or a cascading command is activated.
//------------------------------
//mName: Name of the <div> or <layer> to be shown.
//x: Left position of the menu.
//y: Top position of the menu.
//isCascading: True if the menu has been triggered from a command, and not from a hotspot.
//------------------------------
//Version 14.5
//
		window.clearTimeout(CBparseInt(HTHnd[nOM]));HTHnd[nOM] = 0;
		x = CBparseInt(x);y = CBparseInt(y);
		
		if(AnimHnd && nOM>0) {
			AnimStep=101;
			Animate();
		}
		if(IE)
			if(SM)
				var Menu = mFrame.document.getElementById(mName);
			else
				var Menu = mFrame.document.all[mName];
		if(NS)
			var Menu = mFrame.document.layers[mName];
		if(!Menu)
			return false;
		if(IE)
			Menu = Menu.style;
		if(Menu==OpenMenus[nOM])
			return false;
			
		if(!isCascading)
			HideAll();
			
		Menu.Opener = nOM>0?OpenMenus[nOM].SelCommand:null;
		Menu.OpenerPar = nOM>0?OpenMenus[nOM].SelCommandPar:null;
		Menu.SelCommand = null;
		if(OP) {
			Menu.width = Menu.pixelWidth;
			Menu.height = Menu.pixelHeight;
		}

		var pW = GetWidthHeight()[0] + GetLeftTop()[0];
		var pH = GetWidthHeight()[1] + GetLeftTop()[1];
		
		if(IE) {
			if(isCascading) {
				x = CBparseInt(OpenMenus[nOM].left) + CBparseInt(OpenMenus[nOM].width) - 6;
				y = CBparseInt(OpenMenus[nOM].SelCommand.style.top) + CBparseInt(OpenMenus[nOM].top) - y;
				Menu.left = (x+CBparseInt(Menu.width)>pW)?CBparseInt(OpenMenus[nOM].left) - CBparseInt(Menu.width) + 6:x;
				Menu.top =  (y+CBparseInt(Menu.height)>pH)?pH - CBparseInt(Menu.height):y;
			} else {
				Menu.left = (x+CBparseInt(Menu.width)>pW)?pW - CBparseInt(Menu.width):x;
				Menu.top =  (y+CBparseInt(Menu.height)>pH)?pH - CBparseInt(Menu.height):y;
			}
			if(IsWin&&!SM)
				Menu.clip = "rect(0 0 0 0)";
		}
		if(NS) {
			if(isCascading) {
				x = OpenMenus[nOM].left + OpenMenus[nOM].clip.width - 6;
				y = OpenMenus[nOM].top + OpenMenus[nOM].SelCommand.top;
				x = (x+Menu.w>pW)?OpenMenus[nOM].left - Menu.w + 6:x;
				y = (y+Menu.h>pH)?pH - Menu.h:y;
			} else {
				x = (x+Menu.w>pW)?pW - Menu.w:x;
				y = (y+Menu.h>pH)?pH - Menu.h:y;
			}
			Menu.clip.width = 0;
			Menu.clip.height = 0;
			Menu.moveToAbsolute(x,y);
		}
		if(isCascading)
			Menu.zIndex = CBparseInt(OpenMenus[nOM].zIndex) + 1;
		Menu.visibility = "visible";
		OpenMenus[++nOM] = Menu;
		HTHnd[nOM] = 0;
		if((IE&&IsWin&&!SM)||NS)
			AnimHnd = window.setTimeout("Animate()", 10);
		FormsTweak("hidden");

		return true;
	}

	function Animate() {
//IE,NS
//This function is called by ShowMenu every time a new group must be displayed and produces the predefined unfolding effect.
//Currently is disabled for Navigator, because of some weird bugs we found with the clip property of the layers.
//------------------------------
//Version 1.9
//
		var r = '';
		var nw = nh = 0;
		switch(fx) {
			case 1:
				if(IE) r = "0 " + AnimStep + "% " + AnimStep + "% 0";
				if(NS) nw = AnimStep; nh = AnimStep;
				break;
			case 2:
				if(IE) r = "0 100% " + AnimStep + "% 0";
				if(NS) nw = 100; nh = AnimStep;
				break;
			case 3:
				if(IE) r = "0 " + AnimStep + "% 100% 0";
				if(NS) nw = AnimStep; nh = 100;
				break;
			case 0:
				if(IE) r = "0 100% 100% 0";
				if(NS) nw = 100; nh = 100;
				break;
		}
		if(OpenMenus[nOM]) {
			with(OpenMenus[nOM]) {
				if(IE)
					clip =  "rect(" + r + ")";
				if(NS) {
					clip.width = w*(nw/100);
					clip.height = h*(nh/100);
				}
			}
			AnimStep += 20;
			if(AnimStep<=100)
				AnimHnd = window.setTimeout("Animate()",25);
			else {
				window.clearTimeout(AnimHnd);
				AnimStep = 0;
				AnimHnd = 0;
			}
		}
	}
	
	function InMenu() {
//IE,NS
//This function returns true if the mouse pointer is over the last opened menu.
//------------------------------
//Version 1.6
//
		var m = OpenMenus[nOM];
		if(!m)
			return false;
		if(IE&&!SM)
			SetPointerPos();			
		var l = CBparseInt(m.left) + xOff;
		var r = l+(IE?CBparseInt(m.width):m.clip.width) - xOff;
		var t = CBparseInt(m.top) + xOff;
		var b = t+(IE?CBparseInt(m.height):m.clip.height) - xOff;
		return ((mX>=l && mX<=r) && (mY>=t && mY<=b));
	}

	function SetPointerPos(e) {
//IE,NS
//This function sets the mX and mY variables with the current position of the mouse pointer.
//------------------------------
//e: Only used under Navigator, corresponds to the Event object.
//------------------------------
//Version 1.2
//
		if(IE) {
			if(!SM) {
				if(mFrame!=cFrame||event==null)
					if(mFrame.window.event==null)
						return;
					else
						e = mFrame.window.event;
				else
					e = event;
			}
			mX = e.clientX + GetLeftTop()[0];
			mY = e.clientY + GetLeftTop()[1];
		}
		if(NS) {
			mX = e.pageX;
			mY = e.pageY;
		}
	}
	

	function HideMenus(e) {
//IE,NS
//This function checks if the mouse pointer is on a valid position and if the current menu should be kept visible.
//The function is called every time the mouse pointer is moved over the document area.
//------------------------------
//e: Only used under Navigator, corresponds to the Event object.
//------------------------------
//Version 25.0
//
		if(nOM>0) {
			SetPointerPos(e);
			if(OpenMenus[nOM].SelCommand!=null)
				if(!InMenu()&&!HTHnd[nOM])
					HTHnd[nOM] = window.setTimeout("if(nOM>0)if(!InMenu())Hide()", HideSpeed);
		}
	}
	
	function FormsTweak(state) {
//IE
//This is an undocumented function, which can be used to hide every listbox (or combo) element on a page.
//This can be useful if the menus will be displayed over an area where is a combo box, which is an element that cannot be placed behind the menus and it will always appear over the menus resulting in a very undesirable effect.
//------------------------------
//Version 2.0
//
		if(DoFormsTweak && IE)
			for(var f = 0; f <= (mFrame.document.forms.length - 1); f++)
				for(var e = 0; e <= (mFrame.document.forms[f].elements.length - 1); e++)
					if(mFrame.document.forms[f].elements[e].type=="select-one")
						mFrame.document.forms[f].elements[e].style.visibility = state;
	}

	function execURL(url, tframe) {
//IE,NS
//This function is called every time a command is triggered to jump to another page or execute some javascript code.
//------------------------------
//url: Encrypted URL that must be opened or executed.
//tframe: If the url is a document location, tframe is the target frame where this document will be opened.
//------------------------------
//Version 1.1
//
		HideAll();
		window.setTimeout("execURL2('" + url + "', '" + tframe + "')", 100);
	}

	function execURL2(url, tframe) {
//IE,NS
//This function is called every time a command is triggered to jump to another page or execute some javascript code.
//------------------------------
//url: Encrypted URL that must be opened or executed.
//tframe: If the url is a document location, tframe is the target frame where this document will be opened.
//------------------------------
//Version 1.1
//
		var fObj = eval(rStr(tframe));
		url = rStr(url);
		url.indexOf("javascript")!=url.indexOf("vbscript")?eval(url):fObj.location.href = url;
	}

	function rStr(s) {
//IE,NS
//This function is used to decrypt the URL parameter from the triggered command.
//------------------------------
//Version 1.1
//
		s = xrep(s,"\x1E","'");
		s = xrep(s,"\x1D","\x22");
		s = xrep(s,"\x1C",",");
		return s;
	}

	function xrep(s, f, n) {
//IE,NS
//This function looks for any occurrence of the f string and replaces it with the n string.
//------------------------------
//Version 1.0
//
		var tmp = s.split(f);
		return tmp.join(n);
	}

	function hNSCClick(e) {
//NS
//This function executes the selected command's trigger code.
//------------------------------
//Version 1.0
//
		eval(this.TCode);
	}
	
	function CBparseInt(n) {
//IE,NS
//This function fixes a bug in Navigator's parseInt() function for the Mac.
//------------------------------
//Version 1.3
//
		if(typeof(n)=="number"||typeof(n)=="string")
			return (!IsWin&&!SM?n:parseInt(n))*1;
		return 0;
	}

	function HideAll() {
//IE,NS
//This function will hide all the currently opened menus.
//------------------------------
//Version 1.0
//
		while(nOM>0)
			Hide();
	}

	function GetLeftTop() {
//IE,NS
//This function returns the scroll bars position on the menus frame.
//------------------------------
//Version 2.0
//
		if(IE)
			return [OP?0:SM?mFrame.scrollX:mFrame.document.body.scrollLeft,OP?0:SM?mFrame.scrollY:mFrame.document.body.scrollTop];
		if(NS)
			return [mFrame.pageXOffset,mFrame.pageYOffset];
	}
	
	function tHideAll() {
//IE,NS
//This function is called when the mouse is moved away from a hotspot to close any opened menu.
//------------------------------
//Version 1.0
//
		HTHnd[nOM] = window.setTimeout("if(!InMenu()&&nOM==1)HideAll(); else HTHnd[nOM]=0;", HideSpeed);
	}

	function GetWidthHeight() {
//IE,NS
//This function returns the width and height of the menus frame.
//------------------------------
//Version 2.0
//
		if(IE&&!SM)
			return [mFrame.document.body.clientWidth,mFrame.document.body.clientHeight];
		if(NS||SM)
			return [mFrame.innerWidth,mFrame.innerHeight];
	}
	
	function GetCStyle(cmc) {
//IE,SM
//This functions completes the style of command with all the common
//parameters from the original style code.
//------------------------------
//Version 1.0
//
		return "position: absolute; left:" + cmc.left + 
			   "; top: " + cmc.top + 
			   "; width: " + (OP?cmc.pixelWidth:cmc.width) + 
			   "; height: " + (OP?cmc.pixelHeight:cmc.height) + "; ";
	}
	
	function SetUpEvents() {
//IE,NS
//This function initializes the frame variables and setups the event handling.
//------------------------------
//Version 1.9
//
		onerror = errHandler;
		if(typeof(mFrame)=="undefined")
		mFrame = eval(frames['self']);
		if(typeof(mFrame)=="undefined")
			window.setTimeout("SetUpEvents()",10);
		else {
			if(NS) {
				mFrame.captureEvents(Event.MOUSEMOVE);
				mFrame.onmousemove = HideMenus;
				PrepareEvents();
			}
			if(IE) {
				document.onmousemove = HideMenus;
				mFrame.document.onmousemove = document.onmousemove;
			}
		}
	}
	
	function errHandler(sMsg,sUrl,sLine) {
//IE,NS
//This function will trap any errors generated by the scripts and filter the unhandled ones.
//------------------------------
//Version 1.0
//
		if(sMsg.substr(0,16)!="Access is denied"&&sMsg!="Permission denied")
			alert("DHTML Menu Builder Java Script Error\n" +
			      "\nDescription: " + sMsg +
			      "\nSource: " + sUrl +
			      "\nLine: "+sLine);
		return true;
	}

	function PrepareEvents() {
//NS
//This function is called right after the menus are rendered.
//It has been designed to attach the OnClick event to the <layer> tag. This is being
//done this way because Navigator does not support a click inline event capturing on
//the layer tag... duh!
//------------------------------
//Version 2.7
//
		for(var l=0; l<mFrame.document.layers.length; l++) {
			var lo = mFrame.document.layers[l];
			if(lo.layers.length) {
				lo.w = lo.clip.width;
				lo.h = lo.clip.height;
				for(var sl=0; sl<lo.layers[0].layers.length; sl++) {
					var slo = mFrame.document.layers[l].layers[0].layers[sl];
					if(slo.name.indexOf("EH")>0) {
						slo.document.onmouseup = hNSCClick;
						slo.document.TCode = nTCode[slo.name.split("EH")[1]];
					}					
				}
			}
		}
	}

	if(IE)
		with(document) {
			open();
			write("<div id=\"ivlost\" style=\"position: absolute; left:0; top:0; width: 63; height: 43; z-index: 100; visibility: hidden\"><div style=\"width: 63; height: 43; background-color: #C0C0C0; color: #000000; border-left: #E0E0E0 solid 1; border-right: 1 solid #808080; border-top: 1 solid #E0E0E0; border-bottom: 1 solid #808080;\"><div align=left style=\"position: absolute; border: 0; left: 1; top: 1; width: 61; height: 13; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #000000; cursor: hand; background-color: #C0C0C0;\" id=0 OnMouseOver=\"frames[\'self\'].HoverSel(0,\'_\',\'_\',this);window.status=\'Pictures\';\" OnClick=\"frames[\'self\'].execURL(\'http://www.ivlost.com/pictures.html\', \'frames[self]\');\"><span style=\"position: absolute; left: 0; top: 0; width: 59;\">Pictures</span></div><div align=left style=\"position: absolute; border: 0; left: 1; top: 15; width: 61; height: 13; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #000000; cursor: hand; background-color: #C0C0C0;\" id=1 OnMouseOver=\"frames[\'self\'].HoverSel(0,\'_\',\'_\',this);window.status=\'Links\';\" OnClick=\"frames[\'self\'].execURL(\'http://www.ivlost.com/links.html\', \'frames[self]\');\"><span style=\"position: absolute; left: 0; top: 0; width: 59;\">Links</span></div><div align=left style=\"position: absolute; border: 0; left: 1; top: 29; width: 61; height: 13; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #000000; cursor: hand; background-color: #C0C0C0;\" id=2 OnMouseOver=\"frames[\'self\'].HoverSel(0,\'_\',\'_\',this);window.status=\'ivlost Mail\';\" OnClick=\"frames[\'self\'].execURL(\'http://mail.ivlost.com\', \'frames[self]\');\"><span style=\"position: absolute; left: 0; top: 0; width: 59;\">ivlost Mail</span></div></div></div><div id=\"pictures\" style=\"position: absolute; left:0; top:0; width: 43; height: 85; z-index: 100; visibility: hidden\"><div style=\"width: 43; height: 85; background-color: #C0C0C0; color: #000000; border-left: #E0E0E0 solid 1; border-right: 1 solid #808080; border-top: 1 solid #E0E0E0; border-bottom: 1 solid #808080;\"><div align=left style=\"position: absolute; border: 0; left: 1; top: 1; width: 41; height: 13; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #000000; cursor: hand; background-color: #C0C0C0;\" id=3 OnMouseOver=\"frames[\'self\'].HoverSel(0,\'_\',\'_\',this);window.status=\'Roll 1\';\" OnClick=\"frames[\'self\'].execURL(\'http://www.ivlost.com/roll_1.html\', \'frames[self]\');\"><span style=\"position: absolute; left: 0; top: 0; width: 39;\">Roll 1</span></div><div align=left style=\"position: absolute; border: 0; left: 1; top: 15; width: 41; height: 13; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #000000; cursor: hand; background-color: #C0C0C0;\" id=4 OnMouseOver=\"frames[\'self\'].HoverSel(0,\'_\',\'_\',this);window.status=\'Roll 2\';\" OnClick=\"frames[\'self\'].execURL(\'http://www.ivlost.com/roll_2.html\', \'frames[self]\');\"><span style=\"position: absolute; left: 0; top: 0; width: 39;\">Roll 2</span></div><div align=left style=\"position: absolute; border: 0; left: 1; top: 29; width: 41; height: 13; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #000000; cursor: hand; background-color: #C0C0C0;\" id=5 OnMouseOver=\"frames[\'self\'].HoverSel(0,\'_\',\'_\',this);window.status=\'Roll 3\';\" OnClick=\"frames[\'self\'].execURL(\'http://www.ivlost.com/roll_3.html\', \'frames[self]\');\"><span style=\"position: absolute; left: 0; top: 0; width: 39;\">Roll 3</span></div><div align=left style=\"position: absolute; border: 0; left: 1; top: 43; width: 41; height: 13; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #000000; cursor: hand; background-color: #C0C0C0;\" id=6 OnMouseOver=\"frames[\'self\'].HoverSel(0,\'_\',\'_\',this);window.status=\'Roll 4\';\" OnClick=\"frames[\'self\'].execURL(\'http://www.ivlost.com/roll_4.html\', \'frames[self]\');\"><span style=\"position: absolute; left: 0; top: 0; width: 39;\">Roll 4</span></div><div align=left style=\"position: absolute; border: 0; left: 1; top: 57; width: 41; height: 13; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #000000; cursor: hand; background-color: #C0C0C0;\" id=7 OnMouseOver=\"frames[\'self\'].HoverSel(0,\'_\',\'_\',this);window.status=\'Roll 5\';\" OnClick=\"frames[\'self\'].execURL(\'http://www.ivlost.com/roll_5.html\', \'frames[self]\');\"><span style=\"position: absolute; left: 0; top: 0; width: 39;\">Roll 5</span></div><div align=left style=\"position: absolute; border: 0; left: 1; top: 71; width: 41; height: 13; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #000000; cursor: hand; background-color: #C0C0C0;\" id=8 OnMouseOver=\"frames[\'self\'].HoverSel(0,\'_\',\'_\',this);window.status=\'Roll 6\';\" OnClick=\"frames[\'self\'].execURL(\'http://www.ivlost.com/roll_6.html\', \'frames[self]\');\"><span style=\"position: absolute; left: 0; top: 0; width: 39;\">Roll 6</span></div></div></div><div id=\"links\" style=\"position: absolute; left:0; top:0; width: 81; height: 71; z-index: 100; visibility: hidden\"><div style=\"width: 81; height: 71; background-color: #C0C0C0; color: #000000; border-left: #E0E0E0 solid 1; border-right: 1 solid #808080; border-top: 1 solid #E0E0E0; border-bottom: 1 solid #808080;\"><div align=left style=\"position: absolute; border: 0; left: 1; top: 1; width: 79; height: 13; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #000000; cursor: hand; background-color: #C0C0C0;\" id=9 OnMouseOver=\"frames[\'self\'].HoverSel(0,\'_\',\'_\',this);window.status=\'Cysop\';\" OnClick=\"frames[\'self\'].execURL(\'http://www.cysop.net\', \'frames[self]\');\"><span style=\"position: absolute; left: 0; top: 0; width: 77;\">Cysop</span></div><div align=left style=\"position: absolute; border: 0; left: 1; top: 15; width: 79; height: 13; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #000000; cursor: hand; background-color: #C0C0C0;\" id=10 OnMouseOver=\"frames[\'self\'].HoverSel(0,\'_\',\'_\',this);window.status=\'Mindshadow\';\" OnClick=\"frames[\'self\'].execURL(\'http://www.mindshadow.net\', \'frames[self]\');\"><span style=\"position: absolute; left: 0; top: 0; width: 77;\">Mindshadow</span></div><div align=left style=\"position: absolute; border: 0; left: 1; top: 29; width: 79; height: 13; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #000000; cursor: hand; background-color: #C0C0C0;\" id=11 OnMouseOver=\"frames[\'self\'].HoverSel(0,\'_\',\'_\',this);window.status=\'Nullsector\';\" OnClick=\"frames[\'self\'].execURL(\'http://www.nullsector.net\', \'frames[self]\');\"><span style=\"position: absolute; left: 0; top: 0; width: 77;\">Nullsector</span></div><div align=left style=\"position: absolute; border: 0; left: 1; top: 43; width: 79; height: 13; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #000000; cursor: hand; background-color: #C0C0C0;\" id=12 OnMouseOver=\"frames[\'self\'].HoverSel(0,\'_\',\'_\',this);window.status=\'SuperChristie\';\" OnClick=\"frames[\'self\'].execURL(\'http://www.superchristie.net\', \'frames[self]\');\"><span style=\"position: absolute; left: 0; top: 0; width: 77;\">SuperChristie</span></div><div align=left style=\"position: absolute; border: 0; left: 1; top: 57; width: 79; height: 13; font-family: Tahoma; font-size: 8pt; font-weight: none; font-style: none; color: #000000; cursor: hand; background-color: #C0C0C0;\" id=13 OnMouseOver=\"frames[\'self\'].HoverSel(0,\'_\',\'_\',this);window.status=\'MormonGeek\';\" OnClick=\"frames[\'self\'].execURL(\'http://www.mormongeek.com\', \'frames[self]\');\"><span style=\"position: absolute; left: 0; top: 0; width: 77;\">MormonGeek</span></div></div></div>");
			close();
		}
	if(NS)
		with(document) {
			open();
			write("<layer name=ivlost top=0 left=0 width=63 height=43 z-index=100 bgColor=#E0E0E0 visibility=hidden><layer bgColor=\"#C0C0C0\" left=1 top=1 width=61 height=41 z-index=101><layer name=MC1EH1 left=0 top=0 width=61 height=13 z-index=103 OnMouseOver=\"frames[\'self\'].NSHoverSel(0,this,\'#0000FF\');window.status=\'Pictures\';\"></layer><layer name=MC1 left=0 top=0 width=61 height=13 z-index=102 bgcolor=#C0C0C0><p align=left><font face=Tahoma point-size=8 color=#000000>Pictures</font></layer><layer name=MC2EH2 left=0 top=14 width=61 height=13 z-index=103 OnMouseOver=\"frames[\'self\'].NSHoverSel(0,this,\'#0000FF\');window.status=\'Links\';\"></layer><layer name=MC2 left=0 top=14 width=61 height=13 z-index=102 bgcolor=#C0C0C0><p align=left><font face=Tahoma point-size=8 color=#000000>Links</font></layer><layer name=MC3EH3 left=0 top=28 width=61 height=13 z-index=103 OnMouseOver=\"frames[\'self\'].NSHoverSel(0,this,\'#0000FF\');window.status=\'ivlost Mail\';\"></layer><layer name=MC3 left=0 top=28 width=61 height=13 z-index=102 bgcolor=#C0C0C0><p align=left><font face=Tahoma point-size=8 color=#000000>ivlost Mail</font></layer></layer></layer><layer name=pictures top=0 left=0 width=43 height=85 z-index=100 bgColor=#E0E0E0 visibility=hidden><layer bgColor=\"#C0C0C0\" left=1 top=1 width=41 height=83 z-index=101><layer name=MC4EH4 left=0 top=0 width=41 height=13 z-index=103 OnMouseOver=\"frames[\'self\'].NSHoverSel(0,this,\'#0000FF\');window.status=\'Roll 1\';\"></layer><layer name=MC4 left=0 top=0 width=41 height=13 z-index=102 bgcolor=#C0C0C0><p align=left><font face=Tahoma point-size=8 color=#000000>Roll 1</font></layer><layer name=MC5EH5 left=0 top=14 width=41 height=13 z-index=103 OnMouseOver=\"frames[\'self\'].NSHoverSel(0,this,\'#0000FF\');window.status=\'Roll 2\';\"></layer><layer name=MC5 left=0 top=14 width=41 height=13 z-index=102 bgcolor=#C0C0C0><p align=left><font face=Tahoma point-size=8 color=#000000>Roll 2</font></layer><layer name=MC6EH6 left=0 top=28 width=41 height=13 z-index=103 OnMouseOver=\"frames[\'self\'].NSHoverSel(0,this,\'#0000FF\');window.status=\'Roll 3\';\"></layer><layer name=MC6 left=0 top=28 width=41 height=13 z-index=102 bgcolor=#C0C0C0><p align=left><font face=Tahoma point-size=8 color=#000000>Roll 3</font></layer><layer name=MC7EH7 left=0 top=42 width=41 height=13 z-index=103 OnMouseOver=\"frames[\'self\'].NSHoverSel(0,this,\'#0000FF\');window.status=\'Roll 4\';\"></layer><layer name=MC7 left=0 top=42 width=41 height=13 z-index=102 bgcolor=#C0C0C0><p align=left><font face=Tahoma point-size=8 color=#000000>Roll 4</font></layer><layer name=MC8EH8 left=0 top=56 width=41 height=13 z-index=103 OnMouseOver=\"frames[\'self\'].NSHoverSel(0,this,\'#0000FF\');window.status=\'Roll 5\';\"></layer><layer name=MC8 left=0 top=56 width=41 height=13 z-index=102 bgcolor=#C0C0C0><p align=left><font face=Tahoma point-size=8 color=#000000>Roll 5</font></layer><layer name=MC9EH9 left=0 top=70 width=41 height=13 z-index=103 OnMouseOver=\"frames[\'self\'].NSHoverSel(0,this,\'#0000FF\');window.status=\'Roll 6\';\"></layer><layer name=MC9 left=0 top=70 width=41 height=13 z-index=102 bgcolor=#C0C0C0><p align=left><font face=Tahoma point-size=8 color=#000000>Roll 6</font></layer></layer></layer><layer name=links top=0 left=0 width=81 height=71 z-index=100 bgColor=#E0E0E0 visibility=hidden><layer bgColor=\"#C0C0C0\" left=1 top=1 width=79 height=69 z-index=101><layer name=MC10EH10 left=0 top=0 width=79 height=13 z-index=103 OnMouseOver=\"frames[\'self\'].NSHoverSel(0,this,\'#0000FF\');window.status=\'Cysop\';\"></layer><layer name=MC10 left=0 top=0 width=79 height=13 z-index=102 bgcolor=#C0C0C0><p align=left><font face=Tahoma point-size=8 color=#000000>Cysop</font></layer><layer name=MC11EH11 left=0 top=14 width=79 height=13 z-index=103 OnMouseOver=\"frames[\'self\'].NSHoverSel(0,this,\'#0000FF\');window.status=\'Mindshadow\';\"></layer><layer name=MC11 left=0 top=14 width=79 height=13 z-index=102 bgcolor=#C0C0C0><p align=left><font face=Tahoma point-size=8 color=#000000>Mindshadow</font></layer><layer name=MC12EH12 left=0 top=28 width=79 height=13 z-index=103 OnMouseOver=\"frames[\'self\'].NSHoverSel(0,this,\'#0000FF\');window.status=\'Nullsector\';\"></layer><layer name=MC12 left=0 top=28 width=79 height=13 z-index=102 bgcolor=#C0C0C0><p align=left><font face=Tahoma point-size=8 color=#000000>Nullsector</font></layer><layer name=MC13EH13 left=0 top=42 width=79 height=13 z-index=103 OnMouseOver=\"frames[\'self\'].NSHoverSel(0,this,\'#0000FF\');window.status=\'SuperChristie\';\"></layer><layer name=MC13 left=0 top=42 width=79 height=13 z-index=102 bgcolor=#C0C0C0><p align=left><font face=Tahoma point-size=8 color=#000000>SuperChristie</font></layer><layer name=MC14EH14 left=0 top=56 width=79 height=13 z-index=103 OnMouseOver=\"frames[\'self\'].NSHoverSel(0,this,\'#0000FF\');window.status=\'MormonGeek\';\"></layer><layer name=MC14 left=0 top=56 width=79 height=13 z-index=102 bgcolor=#C0C0C0><p align=left><font face=Tahoma point-size=8 color=#000000>MormonGeek</font></layer></layer></layer>");
			close();
		}
SetUpEvents();



