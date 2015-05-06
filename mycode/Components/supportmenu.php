<table border="0" width="1" height="690">
  <tr>
    <td width="172" height="539" valign="top" bgcolor="#F0F0F0">
    
    <table border="0" width="140" cellspacing="0" cellpadding="0" height="172">
  <tr>
    <td width="17%" bgcolor="" height="172"><font size="2" face="Verdana">
<a NAME="TOP">
<script language="JavaScript1.2"><!--

var isDOM=document.getElementById?1:0,isIE=document.all?1:0,isNS4=navigator.appName=='Netscape'&&!isDOM?1:0,isIE4=isIE&&!isDOM?1:0,isOp=self.opera?1:0,isDyn=isDOM||isIE||isNS4;function getRef(i,p){p=!p?document:p.navigator?p.document:p;return isIE?p.all[i]:isDOM?(p.getElementById?p:p.ownerDocument).getElementById(i):isNS4?p.layers[i]:null;};function getSty(i,p){var r=getRef(i,p);return r?isNS4?r:r.style:null;};if(!self.LayerObj)var LayerObj=new Function('i','p','this.ref=getRef(i,p);this.sty=getSty(i,p);return this');function getLyr(i,p){return new LayerObj(i,p)};function LyrFn(n,f){LayerObj.prototype[n]=new Function('var a=arguments,p=a[0],px=isNS4||isOp?0:"px";'+'with(this){'+f+'}');};LyrFn('x','if(!isNaN(p))sty.left=p+px;else return parseInt(sty.left)');LyrFn('y','if(!isNaN(p))sty.top=p+px;else return parseInt(sty.top)');LyrFn('vis','sty.visibility=p');LyrFn('bgColor','if(isNS4)sty.bgColor=p?p:null;'+'else sty.background=p?p:"transparent"');LyrFn('bgImage','if(isNS4)sty.background.src=p?p:null;'+'else sty.background=p?"url("+p+")":"transparent"');LyrFn('clip','if(isNS4)with(sty.clip){left=a[0];top=a[1];right=a[2];bottom=a[3]}'+'else sty.clip="rect("+a[1]+"px "+a[2]+"px "+a[3]+"px "+a[0]+"px)" ');LyrFn('write','if(isNS4)with(ref.document){write(p);close()}else ref.innerHTML=p');LyrFn('alpha','var f=ref.filters,d=(p==null);if(f){'+'if(!d&&sty.filter.indexOf("alpha")==-1)sty.filter+=" alpha(opacity="+p+")";'+'else if(f.length&&f.alpha)with(f.alpha){if(d)enabled=false;else{opacity=p;enabled=true}}}'+'else if(isDOM)sty.MozOpacity=d?"":p/100');function setLyr(v,dw,p){if(!setLyr.seq)setLyr.seq=0;if(!dw)dw=0;var o=!p?isNS4?self:document.body:!isNS4&&p.navigator?p.document.body:p,IA='insertAdjacentHTML',AC='appendChild',id='_sl_'+setLyr.seq++;if(o[IA])o[IA]('beforeEnd','<div id="'+id+'" style="position:absolute"></div>');else if(o[AC]){var n=document.createElement('div');o[AC](n);n.id=id;n.style.position='absolute';}else if(isNS4){var n=new Layer(dw,o);id=n.id;}var l=getLyr(id,p);with(l)if(ref){vis(v);x(0);y(0);sty.width=dw+(isNS4?0:'px')}return l;};if(!self.page)var page={win:self,minW:0,minH:0,MS:isIE&&!isOp};page.db=function(p){with(this.win.document)return(isDOM?documentElement[p]:0)||body[p]||0};page.winW=function(){with(this)return Math.max(minW,MS?db('clientWidth'):win.innerWidth)};page.winH=function(){with(this)return Math.max(minH,MS?db('clientHeight'):win.innerHeight)};page.scrollX=function(){with(this)return MS?db('scrollLeft'):win.pageXOffset};page.scrollY=function(){with(this)return MS?db('scrollTop'):win.pageYOffset};function addProps(obj,data,names,addNull){for(var i=0;i<names.length;i++)if(i<data.length||addNull)obj[names[i]]=data[i];};function PopupMenu(myName){this.myName=myName;this.showTimer=this.hideTimer=this.showDelay=0;this.hideDelay=500;this.menu=[];this.litNow=[];this.litOld=[];this.overM='';this.overI=0;this.hideDocClick=0;this.actMenu=null;PopupMenu.list[myName]=this;};PopupMenu.list=[];var PmPt=PopupMenu.prototype;PmPt.callEvt=function(mN,iN,evt){var i=this.menu[mN][iN],r=this[evt]?(this[evt](mN,iN)==false):0;if(i[evt]){if(i[evt].substr)i[evt]=new Function('mN','iN',i[evt]);r|=(i[evt](mN,iN)==false);}return r;};PmPt.over=function(mN,iN){with(this){clearTimeout(hideTimer);overM=mN;overI=iN;var cancel=iN?callEvt(mN,iN,'onmouseover'):0;litOld=litNow;litNow=[];var litM=mN,litI=iN;if(mN)do{litNow[litM]=litI;litI=menu[litM][0].parentItem;litM=menu[litM][0].parentMenu;}while(litM);var same=1;for(var z in menu)same&=(litNow[z]==litOld[z]);if(same)return 1;clearTimeout(showTimer);for(var thisM in menu)with(menu[thisM][0]){if(!lyr)continue;lI=litNow[thisM];oI=litOld[thisM];if(lI!=oI){if(lI)changeCol(thisM,lI);if(oI)changeCol(thisM,oI);}if(!lI)clickDone=0;if(isRoot)continue;if(lI&&!visNow)doVis(thisM,1);if(!lI&&visNow)doVis(thisM,0);}nextMenu='';if(!cancel&&menu[mN]&&menu[mN][iN].type=='sm:'){var m=menu[mN],targ=m[iN].href;if(!menu[targ])return 0;if(m[0].clickSubs&&!m[0].clickDone)return 0;nextMenu=targ;if(showDelay)showTimer=setTimeout(myName+'.doVis("'+targ+'",1)',showDelay);else doVis(targ,1);}return 1;}};PmPt.out=function(mN,iN){with(this){if(mN!=overM||iN!=overI)return;var thisI=menu[mN][iN],cancel=callEvt(mN,iN,'onmouseout');if(thisI.href!=nextMenu){clearTimeout(showTimer);nextMenu='';}if(hideDelay&&!cancel){var delay=(menu[mN][0].isRoot&&(thisI.type!='sm:'))?50:hideDelay;hideTimer=setTimeout(myName+'.over("",0)',delay);}overM='';overI=0;}};PmPt.click=function(mN,iN){with(this){var m=menu[mN];if(callEvt(mN,iN,'onclick'))return 0;with(m[iN])S:switch(type){case 'sm:':{if(m[0].clickSubs){m[0].clickDone=1;doVis(href,1);return 1;}break S;}case 'js:':{eval(href);break S}case '':type='window';default:if(href)eval(type+'.location.href="'+href+'"');}return over('',0);}};PmPt.changeCol=function(mN,iN,fc){with(this.menu[mN][iN]){if(!lyr||!lyr.ref)return;var bgFn=outCol!=overCol?(outCol.indexOf('.')==-1?'bgColor':'bgImage'):0;var ovr=(this.litNow[mN]==iN)?1:0,doFX=(!fc&&this.litNow[mN]!=this.litOld[mN]);var col=ovr?overCol:outCol;if(fade[0]){clearTimeout(timer);col='#';count=Math.max(0,Math.min(count+(2*ovr-1)*parseInt(fade[ovr][0]),100));var oc,nc,hexD='0123456789ABCDEF';for(var i=1;i<4;i++){oc=parseInt('0x'+fade[0][i]);nc=parseInt(oc+(parseInt('0x'+fade[1][i])-oc)*(count/100));col+=hexD.charAt(Math.floor(nc/16)).toString()+hexD.charAt(nc%16);}if(count%100>0)timer=setTimeout(this.myName+'.changeCol("'+mN+'",'+iN+',1)',50);}if(bgFn&&isNS4)lyr[bgFn](col);var reCSS=(overClass!=outClass||outBorder!=overBorder);if(doFX)with(lyr){if(!this.noRW&&(overText||overInd||isNS4&&reCSS))write(this.getHTML(mN,iN,ovr));if(!isNS4&&reCSS){ref.className=(ovr?overBorder:outBorder);var chl=(isDOM?ref.childNodes:ref.children);if(chl&&!overText)for(var i=0;i<chl.length;i++)chl[i].className=ovr?overClass:outClass;}}if(bgFn&&!isNS4)lyr[bgFn](col);if(doFX&&outAlpha!=overAlpha)lyr.alpha(ovr?overAlpha:outAlpha);}};PmPt.position=function(posMN){with(this){for(mN in menu)if(!posMN||posMN==mN)with(menu[mN][0]){if(!lyr||!lyr.ref||!visNow)continue;var pM,pI,newX=eval(offX),newY=eval(offY);if(!isRoot){pM=menu[parentMenu];pI=pM[parentItem].lyr;if(!pI)continue;}var eP=eval(par),pW=(eP&&eP.navigator?eP:window);with(pW.page)var sX=scrollX(),wX=sX+winW()||9999,sY=scrollY(),wY=winH()+sY||9999;var sb=page.MS?5:20;if(pM&&typeof(offX)=='number')newX=Math.max(sX,Math.min(newX+pM[0].lyr.x()+pI.x(),wX-menuW-sb));if(pM&&typeof(offY)=='number')newY=Math.max(sY,Math.min(newY+pM[0].lyr.y()+pI.y(),wY-menuH-sb));lyr.x(newX);lyr.y(newY);}}};PmPt.doVis=function(mN,show){with(this){var m=menu[mN],mA=(show?'show':'hide')+'Menu';m[0].visNow=show;if(m&&m[0].lyr&&m[0].lyr.ref){if(show)position(mN);var p=m[0].parentMenu;if(p)m[0].lyr.sty.zIndex=m[0].zIndex=menu[p][0].zIndex+2;if(this[mA])this[mA](mN);else m[0].lyr.vis(show?'visible':'hidden');}}};function ItemStyle(){var names=['len','spacing','popInd','popPos','pad','outCol','overCol','outClass','overClass','outBorder','overBorder','outAlpha','overAlpha','normCursor','nullCursor'];addProps(this,arguments,names,1);};PmPt.startMenu=function(mName){with(this){if(!menu[mName]){menu[mName]=new Array();menu[mName][0]=new Object();}actMenu=menu[mName];aM=actMenu[0];actMenu.length=1;var names=['name','isVert','offX','offY','width','itemSty','par','clickSubs','clickDone','visNow','parentMenu','parentItem','oncreate','isRoot'];addProps(aM,arguments,names,1);aM.extraHTML='';aM.menuW=aM.menuH=0;aM.zIndex=1000;if(!aM.lyr)aM.lyr=null;if(mName.substring(0,4)=='root'){aM.isRoot=1;aM.oncreate=new Function('this.visNow=1;'+myName+'.position("'+mName+'");this.lyr.vis("visible")');}return aM;}};PmPt.addItem=function(){with(this)with(actMenu[0]){var aI=actMenu[actMenu.length]=new Object();var names=['text','href','type','itemSty','len','spacing','popInd','popPos','pad','outCol','overCol','outClass','overClass','outBorder','overBorder','outAlpha','overAlpha','normCursor','nullCursor','iX','iY','iW','iH','fW','fH','overText','overInd','lyr','onclick','onmouseover','onmouseout'];addProps(aI,arguments,names,1);var iSty=(arguments[3]?arguments[3]:actMenu[0].itemSty);for(prop in iSty)if(aI[prop]+''=='undefined')aI[prop]=iSty[prop];var r=RegExp,re=/^SWAP:(.*)\^(.*)$/;if(aI.text.match(re)){aI.text=r.$1;aI.overText=r.$2}if(aI.popInd.match(re)){aI.popInd=r.$1;aI.overInd=r.$2}aI.timer=aI.count=0;aI.fade=[];for(var i=0;i<2;i++){var oC=i?'overCol':'outCol';if(aI[oC].match(/^(\d+)\#(..)(..)(..)$/)){aI[oC]='#'+r.$2+r.$3+r.$4;aI.fade[i]=[r.$1,r.$2,r.$3,r.$4];}}if(aI.outBorder&&isNS4)aI.pad++;aI.iW=(isVert?width:aI.len);aI.iH=(isVert?aI.len:width);var lastGap=(actMenu.length>2)?actMenu[actMenu.length-2].spacing:0;var spc=((actMenu.length>2)&&aI.outBorder?1:0);if(isVert){menuH+=lastGap-spc;aI.iX=0;aI.iY=menuH;menuW=width;menuH+=aI.iH;}else{menuW+=lastGap-spc;aI.iX=menuW;aI.iY=0;menuW+=aI.iW;menuH=width;}return aI;}};PmPt.getHTML=function(mN,iN,isOver){with(this){var itemStr='';with(menu[mN][iN]){var textClass=(isOver?overClass:outClass),txt=(isOver&&overText?overText:text),popI=(isOver&&overInd?overInd:popInd);if((type=='sm:')&&popI){if(isNS4)itemStr+='<layer class="'+textClass+'" left="'+((popPos+fW)%fW)+'" top="'+pad+'" height="'+(fH-2*pad)+'">'+popI+'</layer>';else itemStr+='<div class="'+textClass+'" style="position:absolute;left:'+((popPos+fW)%fW)+'px;top:'+pad+'px;height:'+(fH-2*pad)+'px">'+popI+'</div>';}if(isNS4)itemStr+=(outBorder?'<span class="'+(isOver?overBorder:outBorder)+'"><spacer type="block" width="'+(fW-8)+'" height="'+(fH-8)+'"></span>':'')+'<layer left="'+pad+'" top="'+pad+'" width="'+(fW-2*pad)+'" height="'+(fH-2*pad)+'"><a class="'+textClass+'" href="#" '+'onClick="return false" onMouseOver="status=\'\';'+myName+'.over(\''+mN+'\','+iN+');return true">'+txt+'</a></layer>';else itemStr+='<div class="'+textClass+'" style="position:absolute;left:'+pad+'px;top:'+pad+'px;width:'+(fW-2*pad)+'px;height:'+(fH-2*pad)+'px">'+txt+'</div>';}return itemStr;}};PmPt.update=function(docWrite,upMN){with(this){if(!isDyn)return;for(mN in menu)with(menu[mN][0]){if(upMN&&(upMN!=mN))continue;var str='',eP=eval(par);with(eP&&eP.navigator?eP:self)var dC=document.compatMode,dT=document.doctype;dFix=(dC&&dC.indexOf('CSS')>-1||isOp&&!dC||dT&&dT.name.indexOf('.dtd')>-1||isDOM&&!isIE)?2:0;for(var iN=1;iN<menu[mN].length;iN++)with(menu[mN][iN]){var itemID=myName+'-'+mN+'-'+iN;var targM=menu[href];if(targM&&(type=='sm:')){targM[0].parentMenu=mN;targM[0].parentItem=iN;}if(outBorder){fW=iW-dFix;fH=iH-dFix}else{fW=iW;fH=iH}var isImg=(outCol.indexOf('.')!=-1);if(!isIE){if(normCursor=='hand')normCursor='pointer';if(nullCursor=='hand')nullCursor='pointer';}if(isDOM||isIE4){str+='<div id="'+itemID+'" '+(outBorder?'class="'+outBorder+'" ':'')+'style="position:absolute;left:'+iX+'px;top:'+iY+'px;width:'+fW+'px;height:'+fH+'px;z-index:'+zIndex+';'+(outCol?'background:'+(isImg?'url('+outCol+')':outCol):'')+((typeof(outAlpha)=='number')?';filter:alpha(opacity='+outAlpha+');-moz-opacity:'+(outAlpha/100):'')+';cursor:'+((type!='sm:'&&href)?normCursor:nullCursor)+'" ';}else if(isNS4){str+='<layer id="'+itemID+'" left="'+iX+'" top="'+iY+'" width="'+fW+'" height="'+fH+'" z-index="'+zIndex+'" '+(outCol?(isImg?'background="':'bgcolor="')+outCol+'" ':'');}var evtMN='(\''+mN+'\','+iN+')"';str+='onMouseOver="'+myName+'.over'+evtMN+' onMouseOut="'+myName+'.out'+evtMN+' onClick="'+myName+'.click'+evtMN+'>'+getHTML(mN,iN,0)+(isNS4?'</layer>':'</div>');}var sR=myName+'.setupRef('+(docWrite?1:0)+',"'+mN+'")';if(isOp)setTimeout(sR,1000);var mVis=(isOp&&isRoot)?'visible':'hidden';if(docWrite){var targFr=(eP&&eP.navigator?eP:window);targFr.document.write('<div id="'+myName+'-'+mN+'" style="position:absolute;'+'visibility:'+mVis+';left:-1000px;top:0px;width:'+(menuW+2)+'px;height:'+(menuH+2)+'px;z-index:1000">'+str+extraHTML+'</div>');}else{if(!lyr||!lyr.ref)lyr=setLyr(mVis,menuW,eP);else if(isIE4)setTimeout(myName+'.menu.'+mN+'[0].lyr.sty.width='+(menuW+2),50);with(lyr){sty.zIndex=1000;write(str+extraHTML)}}if(!isOp)setTimeout(sR,100);}}};PmPt.setupRef=function(docWrite,mN){with(this)with(menu[mN][0]){if(docWrite||!lyr||!lyr.ref)lyr=getLyr(myName+'-'+mN,eval(par));for(var i=1;i<menu[mN].length;i++)menu[mN][i].lyr=getLyr(myName+'-'+mN+'-'+i,(isNS4?lyr.ref:eval(par)));menu[mN][0].lyr.clip(0,0,menuW+2,menuH+2);if(menu[mN][0].oncreate)oncreate();}};


var hBar = new ItemStyle(17, 10, '', 0, 0, '#F0F0F0', '#5f8ac5', 'highText', 'highText', '', '',
 null, null, 'hand', 'default');

var subM = new ItemStyle(22, 0, '&gt;', -15, 3, '#5f8ac5', '#C0C0C0', 'lowText', 'highText',
 '', '', null, null, 'hand', 'default');

var subBlank = new ItemStyle(22, 1, '&gt;', -15, 3, '#CCCCDD', '#5f8ac5', 'lowText', 'highText',
 '', '', null, null, 'hand', 'default');

var button = new ItemStyle(22, 1, '&gt;', -15, 2, '#006633', '#CC6600', 'buttonText', 'buttonHover',
 'buttonBorder', 'buttonBorderOver', 80, 95, 'crosshair', 'default');

var pMenu = new PopupMenu('pMenu');
with (pMenu)
{

startMenu('root', true, 4, 178, 140, hBar);

addItem('&nbsp; Support', 'mSupport', 'sm:');
addItem('&nbsp; How To&#39s', 'mHowtos', 'sm:');
addItem('&nbsp', '', '');
addItem('&nbsp', '', '');
addItem('&nbsp; 4 Point Sheraton', 'm4PointSheraton', 'sm:');
addItem('&nbsp; Choice Hotels', 'mChoiceHotels', 'sm:');
addItem('&nbsp; Courtyard Marriot', 'mCourtyardMarriot', 'sm:');
addItem('&nbsp; Conrad', 'mConrad', 'sm:');
addItem('&nbsp; Fairfield Inn', 'mFairfieldInn', 'sm:');
addItem('&nbsp; Doubletree', 'mDoubletree', 'sm:');
addItem('&nbsp; Embassy Suites', 'mEmbassySuites', 'sm:');
addItem('&nbsp; Hampton Inn', 'mHamptonInn', 'sm:');
addItem('&nbsp; Hilton', 'mHilton', 'sm:');
addItem('&nbsp; Hilton Garden Inn', 'mHiltonGardenInn', 'sm:');
addItem('&nbsp; Holiday Inn', 'mHolidayInn', 'sm:');
addItem('&nbsp; Holiday Inn Express', 'mHolidayExpress', 'sm:');
addItem('&nbsp; Homewood Suites', 'mHomewoodSuites', 'sm:');
addItem('&nbsp; Homestead Suites', 'mHomesteadSuites', 'sm:');
addItem('&nbsp; Towneplace Suites', 'mTowneplace', 'sm:');
addItem('&nbsp; Walnut Knolls', 'mWalnut', 'sm:');
addItem('&nbsp; Westin', 'mWestin', 'sm:');
addItem('&nbsp; Tests', 'mTests', 'sm:');

startMenu('mSupport', true, 140, 0, 240, subM);
addItem('HSIA', '/support_web/HSIA 1st level support/hsia web.asp' , '');
//addItem('iWay Business Customers', '/support_web/IBC/iWay Business Customers.asp' , '');
addItem('Prop Search', '/support_web/forms/Results.php' , '');
addItem('iWay Business Customers', '/support_web/IWAY/IWAY.asp' , '');
addItem('Lincoln PPV', '/support_web/IWAY/IWAY.asp' , '');
//addItem('Orchid Customer Lookup', '/support_web/Orchid/Orchid Customer Lookup.asp' , '');
addItem('Orchid Customer Lookup', '/support_web/IWAY/IWAY.asp' , '');
addItem('Wireless Check In', '/support_web/wireless/ma 5.asp' , '');
addItem('Gateway Lookup', 'window.open("/support_web/hsia fact sheet/Equipment Lookup.asp")', 'js:');
addItem('Hotel Naming Convention', 'window.open("/support_web/HSIA 1st level support/How To/Hotel Naming Conventions.asp")', 'js:');
addItem('Voicemail Logging', 'window.open("/support_web/voicemail/voicemail entry.asp")', 'js:');
addItem('Hampton Inn Access Code Lookup', 'window.open("http://192.251.124.33/hsia/pages/obtain_codes.jsp")', 'js:');

startMenu('mHowtos', true, 140, 0, 220, subM);
addItem('1st Level How To`s', 'window.open("/support_web/1stlevel/HowTo/HowTo.asp")' , 'js:');
addItem('2nd Level How To`s', 'window.open("/support_web/2ndLevel/Howto/HowTo.asp")' , 'js:');
addItem('Service Desk Login Examples', 'file://Lasdn-sd01/HTN Knowledgebase/Procedures & Documents/Service Desk Login Examples.doc' , '');
addItem('PrintMe', 'window.open("/support_web/HSIA 1st level support/How To/PrintMe.asp")', 'js:');

startMenu('m4PointSheraton', true, 140, 0, 100, subM);
addItem('Harrisburg', '/support_web/forms/Bulletin.php?prop=HARFP' , '');
addItem('LAX', '/support_web/forms/NoSupport.php' , '');
addItem('San Diego', '/support_web/forms/NoSupport.php' , '');

startMenu('mChoiceHotels', true, 140, 0, 180, subM);
addItem('Comfort Inn Jamestown', '/support_web/forms/Bulletin.php?prop=NY403' , '');
addItem('Comfort Suites Buffalo', '/support_web/forms/Bulletin.php?prop=NY102' , '');

startMenu('mCourtyardMarriot', true, 140, 0, 180, subM);
addItem('Princeton Courtyard', '/support_web/forms/Bulletin.php?prop=USNJPR' , '');

startMenu('mConrad', true, 140, 0, 180, subM);
addItem('Miami', '/support_web/forms/Bulletin.php?prop=MIACI' , '');

startMenu('mFairfieldInn', true, 140, 0, 180, subM);
addItem('Hickory', '/support_web/forms/Bulletin.php?prop=HKYFY' , '');

startMenu('mDoubletree', true, 140, 0, 120, subM);
addItem('Doubletree A-C', 'mDoubletreeAC', 'sm:');
addItem('Doubletree D-M', 'mDoubletreeDM', 'sm:');
addItem('Doubletree N-Z', 'mDoubletreeNZ', 'sm:');

startMenu('mDoubletreeAC', true, 120, 0, 200, subM);
addItem('Alana Waikiki', '/support_web/forms/Bulletin.php?prop=ISHNL' , '');
addItem('Bay City Riverfront', '/support_web/forms/Bulletin.php?prop=MBSBC' , '');
addItem('Bellevue', '/support_web/forms/Bulletin.php?prop=LIOND' , '');
addItem('Boise', '/support_web/forms/Bulletin.php?prop=BOIPR' , '');
addItem('Boston Bayside', '/support_web/forms/Bulletin.php?prop=BOSCH' , '');
addItem('Boston Cambridge', '/support_web/forms/Bulletin.php?prop=BOSSB' , '');
addItem('Boston Downtown', '/support_web/forms/Bulletin.php?prop=BOSCO' , '');
addItem('Boston Waltham', '/support_web/forms/Bulletin.php?prop=BOSOW' , '');
addItem('Carolina Inn', '/support_web/forms/Bulletin.php?prop=RDUPC' , '');
addItem('Chicago Downtown', '/support_web/forms/Bulletin.php?prop=ORDMD' , '');

startMenu('mDoubletreeDM', true, 120, 0, 200, subM);
addItem('Detroit Metro', '/support_web/forms/Bulletin.php?prop=DTWWE' , '');
addItem('Durango', '/support_web/forms/Bulletin.php?prop=RLDU' , '');
addItem('Houston Allen Center', '/support_web/forms/Bulletin.php?prop=HOUDB' , '');
addItem('Jersey City', '/support_web/forms/Bulletin.php?prop=EWRWT' , '');
addItem('La Posada (Scottsdale)', '/support_web/forms/Bulletin.php?prop=RLSD' , '');
addItem('Las Vegas', '/support_web/Bulletins/Doubletree Las Vegas Bulletin Page.asp' , '');
addItem('Miami Beach (Surfcomber)', '/support_web/forms/Bulletin.php?prop=MIAOF' , '');
addItem('Minneapolis Park Place', '/support_web/Bulletins/Doubletree Minneapolis Park Place Bulletin.asp' , '');
addItem('Modesto', '/support_web/Bulletins/Doubletree Modesto Bulletin Page.asp' , '');

startMenu('mDoubletreeNZ', true, 120, 0, 300, subM);
addItem('Ontario', '/support_web/Bulletins/Doubletree Ontario Bulletin Page.asp' , '');
addItem('Paradise Valley Resort (Scottsdale)', '/support_web/Bulletins/Doubletree Paradise Valley Resort Bulletin Page.asp' , '');
addItem('San Diego Golf Resort',  '/support_web/forms/Bulletin.php?prop=SANCM' , '');
addItem('San Diego Mission Valley',  '/support_web/Bulletins/Doubletree San Diego Mission Valley Bulletin Page.asp' , '');
addItem('San Jose',  '/support_web/forms/Bulletin.php?prop=JOSED' , '');
addItem('Santa Monica',  '/support_web/forms/Bulletin.php?prop=SMOPC' , '');
addItem('Seattle Airport',  '/support_web/Bulletins/Doubletree Seattle Airport Bulletin Page.asp' , '');
addItem('Seattle South Center',  '/support_web/Bulletins/Doubletree Seattle South Center Bulletin Page.asp' , '');
addItem('Sonoma Wine Country (Rohnert Park)',  '/support_web/Bulletins/Doubletree Sonoma Wine Country Bulletin Page.asp' , '');
addItem('Spokane City Center',  '/support_web/forms/NoSupport.php' , '');
addItem('St. Louis Conference Center (Chesterfield)',  '/support_web/Bulletins/Doubletree St. Louis Conference Center Bulletin Page.asp' , '');
addItem('Tallahassee Airport', '/support_web/forms/Bulletin.php?prop=THLAP' , '');
addItem('Tulsa Downtown',  '/support_web/forms/Bulletin.php?prop=TULSD' , '');

startMenu('mEmbassySuites', true, 140, 0, 160, subM);
addItem('Austin Town Lake', '/support_web/1stlevel/Bulletin.asp?prop=AUSLK' , '');
addItem('Cleveland Beachwood', '/support_web/1stlevel/Bulletin.asp?prop=CLEBH' , '');
addItem('Memphis', '/support_web/1stlevel/Bulletin.asp?prop=MEMPE' , '');

startMenu('mHamptonInn', true, 140, 0, 140, subM);
addItem('Hampton Inn A-D', 'mHamptonInnAD', 'sm:');
addItem('Hampton Inn E-H', 'mHamptonInnEH', 'sm:');
addItem('Hampton Inn I-L', 'mHamptonInnIL', 'sm:');
addItem('Hampton Inn M-P', 'mHamptonInnMP', 'sm:');
addItem('Hampton Inn Q-T', 'mHamptonInnQT', 'sm:');
addItem('Hampton Inn U-Z', 'mHamptonInnUZ', 'sm:');

startMenu('mHamptonInnAD', true, 140, 0, 130, subM);
addItem('A Hampton Inn&#39;s', 'mHamptonInnA', 'sm:');
addItem('B Hampton Inn&#39;s', 'mHamptonInnB', 'sm:');
addItem('C Hampton Inn&#39;s', 'mHamptonInnC', 'sm:');
addItem('D Hampton Inn&#39;s', 'mHamptonInnD', 'sm:');

startMenu('mHamptonInnA', true, 130, 0, 180, subM);
addItem('Albany GA', '/support_web/HSIA 1st level support/Hampton Inn/AlbanyGA/Bulletin.asp' , '');
addItem('Albuquerque North', '/support_web/Bulletins/Hampton Inn Albuquerque North Bulletin Page.asp' , '');
addItem('Alexandria VA', '/support_web/Bulletins/Hampton Inn Alexandria VA Bulletin Page.asp' , '');
addItem('Amarillo', '/support_web/Bulletins/Hampton Inn Amarillo Bulletin Page.asp' , '');
addItem('Anchorage', '/support_web/Bulletins/Hampton Inn Anchorage Bulletin Page.asp' , '');
addItem('Ann Arbor North', '/support_web/Bulletins/Hampton Inn Ann Arbor North Bulletin Page.asp' , '');
addItem('Annapolis', '/support_web/Bulletins/Hampton Inn Annapolis Bulletin Page.asp' , '');
addItem('Asheboro', '/support_web/1stlevel/Bulletin.asp?prop=ASBNC' , '');
addItem('Atlanta Gwinnett', '/support_web/Bulletins/Hampton Inn & Suites Atlanta Gwinnett Bulletin Page.asp' , '');
addItem('Atlantic City Bayside', '/support_web/Bulletins/Hampton Inn Atlantic City Bayside Bulletin Page.asp' , '');

startMenu('mHamptonInnB', true, 130, 0, 180, subM);
addItem('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp' , '');
addItem('Batesville', '/support_web/Bulletins/Hampton Inn Batesville Bulletin Page.asp' , '');
addItem('Binghamton Vestal', '/support_web/Bulletins/Hampton Inn Binghamton Vestal Bulletin Page.asp' , '');
addItem('Bloomington', '/support_web/Bulletins/Hampton Inn Bloomington Bulletin Page.asp' , '');
addItem('Birmingham Pelham', '/support_web/Bulletins/Hampton Inn Birmingham Pelham Bulletin Page.asp' , '');
addItem('Blythe', '/support_web/Bulletins/Hampton Inn Blythe Bulletin Page.asp' , '');
addItem('Boulder/Louisville', '/support_web/Bulletins/Hampton Inn Boulder Louisville Bulletin Page.asp' , '');
addItem('Brookfield', '/support_web/Bulletins/Hampton Inn Brookfield Bulletin Page.asp' , '');
addItem('Buffalo Airport', '/support_web/Bulletins/Hampton Inn Buffalo Airport Bulletin Page.asp' , '');

startMenu('mHamptonInnC', true, 130, 0, 220, subM);
addItem('Cape Girardeau', '/support_web/Bulletins/Hampton Inn Cape Girardeau Bulletin Page.asp' , '');
addItem('Carson', '/support_web/1stlevel/Bulletin.asp?prop=CSNCA' , '');
addItem('Charlotte Arrowood', '/support_web/Bulletins/Hampton Inn Charlotte Arrowood Bulletin Page.asp' , '');
addItem('Charlottesville', '/support_web/Bulletins/Hampton Inn Charlottesville Bulletin Page.asp' , '');
addItem('Cherokee', '/support_web/Bulletins/Hampton Inn Cherokee Bulletin Page.asp' , '');
addItem('Chesterfield', '/support_web/Bulletins/Hampton Inn St. Louis Chesterfield Bulletin Page.asp' , '');
addItem('Chicago O`hare', '/support_web/Bulletins/HamptonInnChicagoOhareBulletinPage.asp' , '');
addItem('Chincoteague', '/support_web/Bulletins/Hampton Inn & Suites Chincoteague-Waterfront Bulletin Page.asp' , '');
addItem('Christiansburg Blacksburg', '/support_web/Bulletins/Hampton Inn Christiansburg Blacksburg Bulletin Page.asp' , '');
addItem('Columbia I-26 Harbison', '/support_web/Bulletins/Hampton Inn Columbia I-26 Harbison Bulletin Page.asp' , '');
addItem('Commerce', '/support_web/Bulletins/Hampton Inn Commerce Bulletin Page.asp' , '');
addItem('Corolla', '/support_web/Bulletins/Hampton Inn Outer Banks Corolla Bulletin Page.asp' , '');
addItem('Crescent City', '/support_web/forms/Bulletin.asp?prop=CECCA', '');

startMenu('mHamptonInnD', true, 130, 0, 210, subM);
addItem('Dallas Addison', '/support_web/Bulletins/Hampton Inn Dallas Addison Bulletin Page.asp' , '');
addItem('Dallas Ft. Worth Airport South', '/support_web/Bulletins/Hampton Inn Dallas Ft Worth Airport South Bulletin Page.asp' , '');
addItem('Dalton', '/support_web/Bulletins/Hampton Inn Dalton Bulletin Page.asp' , '');
addItem('Dayton Northwest', '/support_web/Bulletins/Hampton Inn Dayton Northwest Bulletin Page.asp' , '');
addItem('Dayton South', '/support_web/Bulletins/Hampton Inn Dayton South Bulletin Page.asp' , '');
addItem('Denver Cherry Creek', '/support_web/Bulletins/Hampton Inn Denver Cherry Creek Bulletin Page.asp' , '');
addItem('Denver West Golden', '/support_web/Bulletins/Hampton Inn Denver West Golden Bulletin Page.asp' , '');
addItem('Detroit Dearborn', '/support_web/Bulletins/Hampton Inn Detroit Dearborn at Greenfield Village Bulletin Page.asp' , '');
addItem('Dover', '/support_web/Bulletins/Hampton Inn Dover Bulletin Page.asp' , '');
addItem('Duluth', '/support_web/forms/Bulletin.asp?prop=DULMN' , '');
addItem('Dumfries', '/support_web/Bulletins/Hampton Inn Dumfries Bulletin Page.asp' , '');

startMenu('mHamptonInnEH', true, 140, 0, 140, subM);
addItem('Eden Prairie', '/support_web/forms/Bulletin.asp?prop=MSPED' , '');
addItem('Edinburgh', '/support_web/Bulletins/Hampton Inn Edinburgh Bulletin Page.asp' , '');
addItem('Evansville', '/support_web/Bulletins/Hampton Inn Evansville Bulletin Page.asp' , '');
addItem('F Hampton Inn&#39;s', 'mHamptonInnF', 'sm:');
addItem('G Hampton Inn&#39;s', 'mHamptonInnG', 'sm:');
addItem('H Hampton Inn&#39;s', 'mHamptonInnH', 'sm:');

startMenu('mHamptonInnF', true, 140, 0, 160, subM);
addItem('Fairfax VA', '/support_web/Bulletins/Hampton Inn Fairfax VA Bulletin Page.asp' , '');
addItem('Fairfield Napa Valley', '/support_web/1stlevel/Bulletin.asp?prop=SFOFF' , '');
addItem('Flemington', '/support_web/Bulletins/Hampton Inn Flemington Bulletin Page.asp' , '');
addItem('Ft. Smith', '/support_web/Bulletins/Hampton Inn Ft. Smith Bulletin Page.asp' , '');
addItem('Ft. Worth I-30 Westside', '/support_web/Bulletins/Hampton Inn Ft. Worth I-30 Westside Bulletin Page.asp' , '');

startMenu('mHamptonInnG', true, 140, 0, 260, subM);
addItem('Gainesville', '/support_web/Bulletins/Hampton Inn Gainesville Bulletin Page.asp' , '');
addItem('Gallatin', '/support_web/Bulletins/Hampton Inn Gallatin Bulletin Page.asp' , '');
addItem('Garden Grove (Los Angeles Anaheim)', '/support_web/Bulletins/Hampton Inn Los Angeles Anaheim Garden Grove Bulletin Page.asp' , '');
addItem('Georgetown(Lexington)', '/support_web/Bulletins/Hampton Inn Georgetown Bulletin Page.asp' , '');
addItem('Glenwood Springs', '/support_web/Bulletins/Hampton Inn Glenwood Springs Bulletin Page.asp' , '');
addItem('Greenville SC', '/support_web/1stlevel/Bulletin.asp?prop=GSPHY' , '');
addItem('Grenada MS', '/support_web/1stlevel/Bulletin.asp?prop=NWBFR' , '');
addItem('Grand Rapids South', '/support_web/Bulletins/Hampton Inn Grand Rapids South Bulletin Page.asp' , '');
addItem('Gulfport MS', '/support_web/1stlevel/Bulletin.asp?prop=GLFPT' , '');

startMenu('mHamptonInnH', true, 140, 0, 160, subM);
addItem('Hanover PA', '/support_web/forms/Bulletin.php?prop=HANPA' , '');
addItem('Harrisburg East', '/support_web/1stlevel/Bulletin.asp?prop=HARPA' , '');
addItem('Harrisburg West', '/support_web/Bulletins/Hampton Inn Harrisburg West Bulletin Page.asp' , '');
addItem('Harrisonburg', '/support_web/1stlevel/Bulletin.asp?prop=HSBUV' , '');
addItem('Hickory', '/support_web/Bulletins/Hampton Inn Hickory Bulletin Page.asp' , '');
addItem('Hillsville', '/support_web/1stlevel/Bulletin.asp?prop=HLVVA' , '');
addItem('Hot Springs', '/support_web/Bulletins/Hampton Inn Hot Springs Bulletin Page.asp' , '');
addItem('Houston I-10 Katy', '/support_web/forms/Bulletin.asp?prop=HOUKY' , '');
addItem('Houston I-10 West', '/support_web/Bulletins/Hampton Inn Houston I-10 Bulletin Page.asp' , '');
addItem('Houston Woodlands', '/support_web/Bulletins/Hampton Inn Houston Woodlands Bulletin Page.asp' , '');

startMenu('mHamptonInnIL', true, 140, 0, 180, subM);
addItem('Indianapolis South', '/support_web/Bulletins/Hampton Inn Indianapolis South Bulletin Page.asp' , '');
addItem('Jacksonville', '/support_web/forms/Bulletin.asp?prop=JAXDW' , '');
addItem('Jasper', '/support_web/Bulletins/Hampton Inn Jasper Bulletin Page.asp' , '');
addItem('Jupiter/Juno Beach', '/support_web/Bulletins/Hampton Inn Jupiter-Juno Beach Bulletin Page.asp' , '');
addItem('Kansas City', '/support_web/forms/Bulletin.php?prop=MKCHS' , '');
addItem('Kearny Mesa(San Diego)', '/support_web/Bulletins/Hampton Inn Kearny Mesa Bulletin Page.asp' , '');
addItem('L Hampton Inn&#39;s', 'mHamptonInnL', 'sm:');

startMenu('mHamptonInnL', true, 180, 0, 240, subM);
addItem('Lancaster', '/support_web/Bulletins/Hampton Inn Lancaster Bulletin Page.asp' , '');
addItem('Las Cruces', '/support_web/Bulletins/Hampton Inn Las Cruces Bulletin Page.asp' , '');
addItem('Lawrence', '/support_web/Bulletins/Hampton Inn Lawrence Bulletin Page.asp' , '');
addItem('Lexington I-75', '/support_web/forms/Bulletin.asp?prop=LEXEH' , '');
addItem('Lima', '/support_web/Bulletins/Hampton Inn Lima Bulletin Page.asp' , '');
addItem('Little Rock I-30', '/support_web/Bulletins/Hampton Inn Little Rock I-30 Bulletin Page.asp' , '');
addItem('Little Rock West', '/support_web/forms/Bulletin.asp?prop=LITWT' , '');
addItem('Logan', '/support_web/1stlevel/Bulletin.asp?prop=LGUUT' , '');
addItem('Long Island (Commack)', '/support_web/Bulletins/Hampton Inn Long Island Commack Bulletin Page.asp' , '');
addItem('Longmont', '/support_web/1stlevel/Bulletin.asp?prop=DENLM' , '');
addItem('Louisville', '/support_web/Bulletins/Hampton Inn Boulder Louisville Bulletin Page.asp' , '');

startMenu('mHamptonInnMP', true, 140, 0, 130, subM);
addItem('M Hampton Inn&#39;s', 'mHamptonInnM', 'sm:');
addItem('N Hampton Inn&#39;s', 'mHamptonInnN', 'sm:');
addItem('O Hampton Inn&#39;s', 'mHamptonInnO', 'sm:');
addItem('P Hampton Inn&#39;s', 'mHamptonInnP', 'sm:');

startMenu('mHamptonInnM', true, 130, 0, 260, subM);
addItem('Madison West', '/support_web/Bulletins/Hampton Inn Madison West Bulletin Page.asp' , '');
addItem('Mall of America (Minneapolis Airport)', '/support_web/1stlevel/Bulletin.asp?prop=MSPRF' , '');
addItem('Manassas', '/support_web/Bulletins/Hampton Inn Manassas Bulletin Page.asp' , '');
addItem('Manheim', '/support_web/Bulletins/Hampton Inn Manheim Bulletin Page.asp' , '');
addItem('McAllen', '/support_web/Bulletins/Hampton Inn McAllen Bulletin Page.asp' , '');
addItem('Memphis Poplar', '/support_web/Bulletins/Hampton Inn & Suites Memphis Poplar Bulletin Page.asp' , '');
addItem('Memphis Shady Grove', '/support_web/Bulletins/Hampton Inn & Suites Memphis Shady Grove Bulletin Page.asp' , '');
addItem('Middletown', '/support_web/Bulletins/Hampton Inn Middletown Bulletin Page.asp' , '');
addItem('Missoula', '/support_web/Bulletins/Hampton Inn Missoula Bulletin Page.asp' , '');
addItem('Montgomery East', '/support_web/1stlevel/Bulletin.asp?prop=MGMAL' , '');
addItem('Mount Airy', '/support_web/Bulletins/Hampton Inn Mount Airy Bulletin Page.asp' , '');

startMenu('mHamptonInnN', true, 130, 0, 180, subM);
addItem('New Albany', '/support_web/Bulletins/Hampton Inn New Albany Bulletin Page.asp' , '');
addItem('Newburgh West Point', '/support_web/Bulletins/Hampton Inn Newburgh West Point Bulletin Page.asp' , '');
addItem('New Philadelphia OH', '/support_web/1stlevel/Bulletin.asp?prop=NPHOH' , '');
addItem('North Platte', '/support_web/Bulletins/Hampton Inn North Platte Bulletin Page.asp' , '');
addItem('Northville', '/support_web/Bulletins/Hampton Inn Northville Bulletin Page.asp' , '');

startMenu('mHamptonInnO', true, 130, 0, 180, subM);
addItem('Oak Ridge', '/support_web/1stlevel/Bulletin.asp?prop=ORKHH' , '');
addItem('Ocala', '/support_web/Bulletins/Hampton Inn Ocala Bulletin Page.asp' , '');
addItem('Olive Branch', '/support_web/Bulletins/Hampton Inn Olive Branch Bulletin Page.asp' , '');
addItem('Outer Banks Corolla', '/support_web/Bulletins/Hampton Inn Outer Banks Corolla Bulletin Page.asp' , '');
addItem('Oxford MS', '/support_web/forms/NoSupport.php' , '');
addItem('Oxford OH', '/support_web/Bulletins/Hampton Inn Oxford OH Bulletin Page.asp' , '');

startMenu('mHamptonInnP', true, 130, 0, 180, subM);
addItem('Paducah', '/support_web/Bulletins/Hampton Inn Paducah Bulletin Page.asp' , '');
addItem('Pascagoula Moss Point', '/support_web/Bulletins/Hampton Inn Pascagoula Moss Point Bulletin Page.asp' , '');
addItem('Perry', '/support_web/Bulletins/Hampton Inn Perry Bulletin Page.asp' , '');
addItem('Phoenix Midtown', '/support_web/Bulletins/Hampton Inn Phoenix Midtown Bulletin Page.asp' , '');
addItem('Phoenix Tempe', '/support_web/1stlevel/Bulletin.asp?prop=PHXTE' , '');
addItem('Port Huron', '/support_web/1stlevel/Bulletin.asp?prop=PTHMI' , '');
addItem('Portland Airport ME', '/support_web/1stlevel/Bulletin.asp?prop=PWMME' , '');
addItem('Prescott', '/support_web/Bulletins/Hampton Inn Prescott Bulletin Page.asp' , '');

startMenu('mHamptonInnQT', true, 140, 0, 130, subM);
addItem('Quakertown', '/support_web/Bulletins/Hampton Inn Quakertown Bulletin Page.asp' , '');
addItem('R Hampton Inn&#39;s', 'mHamptonInnR', 'sm:');
addItem('S Hampton Inn&#39;s', 'mHamptonInnS', 'sm:');
addItem('Thomasville', '/support_web/Bulletins/Hampton Inn Thomasville Bulletin Page.asp' , '');

startMenu('mHamptonInnR', true, 130, 0, 180, subM);
addItem('Raleigh Cary RBC Center', '/support_web/Bulletins/Hampton Inn Raleigh Cary RBC Center Bulletin Page.asp' , '');
addItem('Reading Wyomissing', '/support_web/Bulletins/Hampton Inn Reading Wyomissing Bulletin Page.asp' , '');
addItem('Rehoboth Beach', '/support_web/Bulletins/Hampton Inn Rehoboth Beach Bulletin Page.asp' , '');
addItem('Richmond West', '/support_web/Bulletins/Hampton Inn Richmond West Bulletin Page.asp' , '');
addItem('Rockville Center', '/support_web/Bulletins/Hampton Inn & Suites Rockville Center Bulletin Page.asp' , '');
addItem('Roswell', '/support_web/Bulletins/Hampton Inn Roswell Bulletin Page.asp' , '');
addItem('Ruston', '/support_web/Bulletins/Hampton Inn Ruston Bulletin Page.asp' , '');

startMenu('mHamptonInnS', true, 130, 0, 240, subM);
addItem('Salisbury', '/support_web/forms/Bulletin.php?prop=SLBJA' , '');
addItem('San Antonio Airport', '/support_web/Bulletins/Hampton Inn San Antonio Airport Bulletin Page.asp' , '');
addItem('San Antonio Northeast', '/support_web/Bulletins/Hampton Inn San Antonio Northeast Bulletin Page.asp' , '');
addItem('San Antonio Sea World', '/support_web/Bulletins/Hampton Inn San Antonio Sea World Bulletin Page.asp' , '');
addItem('Sandusky Central', '/support_web/1stlevel/Bulletin.asp?prop=SKYOH' , '');
addItem('Sandusky Milan', '/support_web/1stlevel/Bulletin.asp?prop=SKYML' , '');
addItem('Santa Fe', '/support_web/Bulletins/Hampton Inn Santa Fe Bulletin Page.asp' , '');
addItem('Scottsburg', '/support_web/Bulletins/Hampton Inn Scottsburg Bulletin Page.asp' , '');
addItem('Seattle Downtown', '/support_web/Bulletins/Hampton Inn Seattle Downtown Bulletin Page.asp' , '');
addItem('Seekonk', '/support_web/forms/Bulletin.php?prop=SEEMA' , '');
addItem('Seymour', '/support_web/Bulletins/Hampton Inn Seymour Bulletin Page.asp' , '');
addItem('Shrewsbury', '/support_web/Bulletins/Hampton Inn Shrewsbury Bulletin Page.asp' , '');
addItem('Southern Pines', '/support_web/1stlevel/Bulletin.asp?prop=SNPNC' , '');
addItem('Southfield', '/support_web/Bulletins/Hampton Inn Southfield Bulletin Page.asp' , '');
addItem('Springfield OH', '/support_web/Bulletins/Hampton Inn Springfield (OH) Bulletin Page.asp' , '');
addItem('Springfield TN', '/support_web/Bulletins/Hampton Inn Springfield Bulletin Page.asp' , '');
addItem('St. Augustine Beach', '/support_web/Bulletins/Hampton Inn St. Augustine Beach Bulletin Page.asp' , '');
addItem('St. Clairsville', '/support_web/Bulletins/Hampton Inn St. Clairsville Bulletin Page.asp' , '');
addItem('St. Louis Airport', '/support_web/Bulletins/Hampton Inn St. Louis Airport Bulletin Page.asp' , '');
addItem('St. Louis Downtown(Union Station)', '/support_web/Bulletins/Hampton Inn St. Louis Downtown Bulletin Page.asp' , '');
addItem('St. Louis NW I-270', '/support_web/1stlevel/Bulletin.asp?prop=STLDR' , '');
addItem('St. Louis Southwest', '/support_web/Bulletins/Hampton Inn St. Louis Southwest Bulletin Page.asp' , '');
addItem('Statesboro', '/support_web/Bulletins/Hampton Inn Statesboro Bulletin Page.asp' , '');
addItem('Syracuse NY', '/support_web/1stlevel/Bulletin.asp?prop=SYROC' , '');

startMenu('mHamptonInnUZ', true, 140, 0, 140, subM);
addItem('Valley Forge Oaks', '/support_web/forms/Bulletin.php?prop=PHLVY' , '');
addItem('W Hampton Inn&#39;s', 'mHamptonInnW', 'sm:');
addItem('York', '/support_web/1stlevel/Bulletin.asp?prop=YRKPA' , '');
addItem('Youngstown North', '/support_web/1stlevel/Bulletin.asp?prop=YNGNO' , '');

startMenu('mHamptonInnW', true, 140, 0, 180, subM);
addItem('Warrenton', '/support_web/forms/Bulletin.asp?prop=HIWVA' , '');
addItem('Wheeling', '/support_web/forms/Bulletin.asp?prop=WHEWV' , '');
addItem('Williamsport', '/support_web/forms/Bulletin.asp?prop=WPTPA' , '');
addItem('Williamston NC', '/support_web/forms/Bulletin.php?prop=WILNC' , '');
addItem('Wilmington Newark', '/support_web/forms/Bulletin.php?prop=ILGDE' , '');
addItem('Wilson', '/support_web/forms/Bulletin.asp?prop=WLNTR' , '');
addItem('Winston Salem', '/support_web/forms/Bulletin.asp?prop=INTST' , '');
addItem('Wooster', '/support_web/forms/Bulletin.php?prop=WOOOH' , '');

startMenu('mHilton', true, 140, 0, 100, subM);
addItem('Hilton A-B', 'mHiltonAB', 'sm:');
addItem('Hilton C-D', 'mHiltonCD', 'sm:');
addItem('Hilton E-L', 'mHiltonEL', 'sm:');
addItem('Hilton M-O', 'mHiltonMO', 'sm:');
addItem('Hilton P-S', 'mHiltonPS', 'sm:');
addItem('Hilton T-Z', 'mHiltonTZ', 'sm:');

startMenu('mHiltonAB', true, 100, 0, 180, subM);
addItem('Alexandria Mark Center', '/support_web/forms/NoSupport.php', '');
addItem('Anaheim', '/support_web/forms/Bulletin.php?prop=SNAAH', '');
addItem('Atlanta Airport', '/support_web/Bulletins/Hilton Atlanta Airport Bulletin Page.asp', '');
addItem('Auburn Hills', '/support_web/1stlevel/Bulletin.asp?prop=MSPPH', '');
addItem('Austin (Convention Ctr)', '/support_web/Bulletins/Hilton Austin Bulletin Page.asp', '');
addItem('Boston Back Bay', '/support_web/forms/NoSupport.php' , '');
addItem('Boston Logan Airport', '/support_web/Bulletins/Hilton Boston Logan Airport Bulletin Page.asp', '');
addItem('Burbank Airport', '/support_web/forms/Bulletin.asp?prop=BURAH', '');

startMenu('mHiltonCD', true, 100, 0, 200, subM);
addItem('Charlotte & Towers', '/support_web/forms/NoSupport.php' , '');
addItem('Charlotte Exec Park', '/support_web/Bulletins/Hilton Charlotte Exec Park Bulletin Page.asp', '');
addItem('Chicago H & T', '/support_web/Bulletins/Hilton Chicago Bulletin Page.asp', '');
addItem('Chicago O`hare', '/support_web/forms/Bulletin.asp?prop=CHIOH', '');
addItem('Cleveland East Beachwood', '/support_web/forms/NoSupport.php' , '');
addItem('DFW Lakes', '/support_web/Bulletins/Hilton DFW Lakes Bulletin Page.asp', '');

startMenu('mHiltonEL', true, 100, 0, 180, subM);
addItem('East Brunswick', '/support_web/Bulletins/Hilton East Brunswick H&T Bulletin Page.asp', '');
addItem('Fontainebleau', '/support_web/Bulletins/Hilton Fontainebleau Bulletin Page.asp', '');
addItem('Frontenac', '/support_web/forms/Bulletin.asp?prop=STLFH', '');
addItem('Glendale', '/support_web/forms/NoSupport.php' , '');
addItem('Hawaiian Village', '/support_web/Bulletins/Hilton Hawaiian Village Bulletin Page.asp', '');
addItem('Houston Americas', '/support_web/Bulletins/Hilton Houston Americas Bulletin Page.asp', '');
addItem('Long Beach', '/support_web/Bulletins/Hilton Long Beach Bulletin Page.asp', '');
addItem('Long Beach Conv Ctr', '/support_web/Bulletins/Hilton Long Beach Convention Center Bulletin Page.asp', '');
addItem('Los Angeles Airport', '/support_web/Bulletins/Hilton Los Angeles Airport Bulletin Page.asp', '');

startMenu('mHiltonMO', true, 100, 0, 180, subM);
addItem('McLean Tysons Corner', '/support_web/forms/NoSupport.php' , '');
addItem('Miami Airport', '/support_web/Bulletins/Hilton Miami Airport Bulletin Page.asp', '');
addItem('Millenium', '/support_web/Bulletins/Hilton Millenium Bulletin Page.asp', '');
addItem('Minneapolis & Towers', '/support_web/forms/NoSupport.php' , '');
addItem('New Orleans Airport', '/support_web/forms/NoSupport.php' , '');
addItem('New Orleans', '/support_web/forms/NoSupport.php' , '');
addItem('New York & Towers', '/support_web/Bulletins/Hilton New York Bulletin Page.asp', '');
addItem('Omaha', '/support_web/Bulletins/Hilton Omaha Bulletin Page.asp', '');

startMenu('mHiltonPS', true, 100, 0, 180, subM);
addItem('Palacio Del Rio', '/support_web/Bulletins/Hilton Palacio Del Rio Bulletin Page.asp', '');
addItem('Palm Beach Airport', '/support_web/Bulletins/Hilton Palm Beach Airport Bulletin Page.asp', '');
addItem('Palmer House', '/support_web/Bulletins/Hilton Palmer House Bulletin Page.asp', '');
addItem('Pasadena', '/support_web/forms/NoSupport.php', '');
addItem('Pittsburgh', '/support_web/forms/NoSupport.php' , '');
addItem('Ryetown', '/support_web/forms/NoSupport.php' , '');
addItem('Salt Lake City Center', '/support_web/Bulletins/Hilton Salt Lake City Center Bulletin Page.asp', '');
addItem('San Diego', '/support_web/forms/NoSupport.php' , '');
addItem('San Francisco', '/support_web/forms/NoSupport.php' , '');
addItem('Seattle Airport Convention Center', '/support_web/forms/NoSupport.php' , '');
addItem('Sedona', '/support_web/Bulletins/Hilton Sedona Resort & Spa Bulletin Page.asp', '');
addItem('Short Hills', '/support_web/forms/Bulletin.asp?prop=EWRSH', '');
addItem('Southfield', '/support_web/forms/Bulletin.asp?prop=DETSH', '');

startMenu('mHiltonTZ', true, 100, 0, 180, subM);
addItem('Tapitio Cliffs', '/support_web/Bulletins/Hilton Pointe Resort@Tapitio Cliffs Bulletin Page.asp', '');
addItem('Tarrytown', '/support_web/forms/NoSupport.php' , '');
addItem('Times Square', '/support_web/Bulletins/Hilton Times Square Bulletin Page.asp', '');
addItem('Torrey Pines', '/support_web/Bulletins/Hilton Torrey Pines Bulletin Page.asp', '');
addItem('Waldorf Astoria', '/support_web/Bulletins/Hilton Waldorf Astoria Bulletin Page.asp', '');
addItem('Washington & Towers', '/support_web/Bulletins/Hilton Washington & Towers Bulletin Page.asp', '');

startMenu('mHiltonGardenInn', true, 140, 0, 180, subM);
addItem('Hilton Garden Inn A-P', 'mHiltonGardenInnAP', 'sm:');
addItem('Hilton Garden Inn R-Z', 'mHiltonGardenInnRZ', 'sm:');

startMenu('mHiltonGardenInnAP', true, 180, 0, 180, subM);
addItem('Atlanta Perimeter Center', '/support_web/forms/NoSupport.php' , '');
addItem('El Segundo', '/support_web/forms/NoSupport.php' , '');
addItem('Flagstaff', '/support_web/Bulletins/Hilton Garden Inn Flagstaff Bulletin Page.asp', '');
addItem('Montebello', '/support_web/Bulletins/Hilton Garden Inn Montebello Bulletin Page.asp', '');
addItem('Oakbrook Terrace', '/support_web/forms/Bulletin.php?prop=CHIOB', '');
addItem('Phoenix Midtown', '/support_web/Bulletins/Hilton Garden Inn Phoenix Midtown Bulletin Page.asp', '');

startMenu('mHiltonGardenInnRZ', true, 180, 0, 180, subM);
addItem('Raleigh Durham Airport', '/support_web/forms/Bulletin.php?prop=RDUAH', '');
addItem('Redding', '/support_web/forms/Bulletin.php?prop=RDDRF', '');
addItem('Saratoga Springs', '/support_web/forms/Bulletin.php?prop=ALBSS', '');
addItem('Temple', '/support_web/forms/Bulletin.php?prop=TPLGI', '');
addItem('Valencia Six Flags', '/support_web/forms/Bulletin.php?prop=VALVH', '');
addItem('Wilkes Barre', '/support_web/forms/Bulletin.php?prop=AVPWI', '');
addItem('Wisconsin Dells', '/support_web/forms/Bulletin.php?prop=MSNWD', '');
addItem('Wooster', '/support_web/1stlevel/Bulletin.asp?prop=WOOGI', '');

startMenu('mHolidayInn', true, 140, 0, 150, subM);
addItem('Columbus', '/support_web/forms/Bulletin.php?prop=COLIM', '');
addItem('Hendersonville', '/support_web/1stlevel/Bulletin.asp?prop=BNABH', '');
addItem('Hopkinsville', '/support_web/forms/Bulletin.asp?prop=HOPKY', '');
addItem('Lake George', '/support_web/1stlevel/Bulletin.asp?prop=LGNY', '');
addItem('Seattle City Center', '/support_web/forms/Bulletin.asp?prop=SEACC', '');

startMenu('mHolidayExpress', true, 140, 0, 150, subM);
addItem('Albany Western Ave', '/support_web/1stlevel/Bulletin.asp?prop=ALBNY', '');
addItem('Dover', '/support_web/1stlevel/Bulletin.asp?prop=HDVHY', '');
addItem('Edinburgh', '/support_web/forms/Bulletin.php?prop=TLREX', '');
addItem('Greenwood', '/support_web/1stlevel/Bulletin.asp?prop=GRWEX', '');
addItem('Indianapolis', '/support_web/1stlevel/Bulletin.asp?prop=INDSK', '');
addItem('Seattle Airport', '/support_web/forms/Bulletin.php?prop=SEAHI', '');

startMenu('mHomewoodSuites', true, 140, 0, 210, subM);
addItem('Alexandria', '/support_web/forms/Bulletin.php?prop=AXEHW' , '');
addItem('Boston-Billerica', '/support_web/forms/Bulletin.php?prop=BOSBL' , '');
addItem('Dallas-Market Center', '/support_web/forms/Bulletin.php?prop=DALMC' , '');
addItem('Ft. Worth', '/support_web/forms/Bulletin.php?prop=FTWHW' , '');
addItem('Harrisburg East', '/support_web/forms/Bulletin.php?prop=HARHS' , '');
addItem('Harrisburg-West Hershey', '/support_web/forms/Bulletin.php?prop=HIHSH' , '');
addItem('Hartford-Farmington', '/support_web/forms/Bulletin.php?prop=HFDHM' , '');
addItem('Lexington', '/support_web/forms/Bulletin.php?prop=LEXHW' , '');
addItem('Mall of America (Minneapolis)', '/support_web/forms/Bulletin.php?prop=MSPHW' , '');
addItem('Memphis Poplar', '/support_web/forms/Bulletin.php?prop=MEMPO' , '');
addItem('Nashville Airport', '/support_web/forms/Bulletin.php?prop=BNAHW' , '');
addItem('Nashville Brentwood', '/support_web/forms/Bulletin.php?prop=BNABT' , '');
addItem('Oakland Waterfront', '/support_web/forms/Bulletin.php?prop=OAKHW' , '');
addItem('Orlando Maitland', '/support_web/forms/Bulletin.php?prop=MCOML' , '');
addItem('Reading', '/support_web/forms/Bulletin.php?prop=HSRPA' , '');

startMenu('mHomesteadSuites', true, 140, 0, 100, subM);
addItem('Redmond', '/support_web/Bulletins/Homestead Suites Redmond Bulletin Page.asp', '');

startMenu('mTowneplace', true, 140, 0, 100, subM);
addItem('Broomfield', '/support_web/forms/NoSupport.php' , '');

startMenu('mWalnut', true, 140, 0, 100, subM);
addItem('Walnut Knolls', '/support_web/forms/Bulletin.php?prop=WALKN', '');

startMenu('mWestin', true, 140, 0, 100, subM);
addItem('Kierland', '/support_web/Bulletins/Westin Kierland Bulletin Page.asp', '');

startMenu('mTests', true, 140, 0, 180, subM);
addItem('Test', '/support_web/1stlevel/Bulletin2.asp?prop=MINE' , '');
}

addMenuBorder(pMenu, window.subBlank,
 null, '#666666', 1, '#CCCCDD', 2);
if ((navigator.userAgent.indexOf('rv:0.')==-1) &&
    !(isOp&&!document.documentElement) && !(isIE4&&!window.external))
{

}

page.elmPos=function(e,p)
{
 var x=0,y=0,w=p?p:this.win;
 e=e?(e.substr?(isNS4?w.document.anchors[e]:getRef(e,w)):e):p;
 if(isNS4){if(e&&(e!=p)){x=e.x;y=e.y};if(p){x+=p.pageX;y+=p.pageY}}
 else if (e && e.focus && e.href && this.MS && /Mac/.test(navigator.platform))
 {
  e.onfocus = new Function('with(event){self.tmpX=clientX-offsetX;' +
   'self.tmpY=clientY-offsetY}');
  e.focus();x=tmpX;y=tmpY;e.blur()
 }
 else while(e){x+=e.offsetLeft;y+=e.offsetTop;e=e.offsetParent}
 return{x:x,y:y};
};

function addMenuBorder(mObj, iS, alpha, bordCol, bordW, backCol, backW)
{
 for (var mN in mObj.menu)
 {
  var mR=mObj.menu[mN], dS='<div style="position:absolute; background:';
  if (mR[0].itemSty != iS) continue;
  for (var mI=1; mI<mR.length; mI++)
  {
   mR[mI].iX += bordW+backW;
   mR[mI].iY += bordW+backW;
  }
  mW = mR[0].menuW += 2*(bordW+backW);
  mH = mR[0].menuH += 2*(bordW+backW);

  if (isNS4) mR[0].extraHTML += '<layer bgcolor="'+bordCol+'" left="0" top="0" width="'+mW+
   '" height="'+mH+'" z-index="980"><layer bgcolor="'+backCol+'" left="'+bordW+'" top="'+
   bordW+'" width="'+(mW-2*bordW)+'" height="'+(mH-2*bordW)+'" z-index="990"></layer></layer>';
  else mR[0].extraHTML += dS+bordCol+'; left:0px; top:0px; width:'+mW+'px; height:'+mH+
   'px; z-index:980; '+(alpha!=null?'filter:alpha(opacity='+alpha+'); -moz-opacity:'+(alpha/100):'')+
   '">'+dS+backCol+'; left:'+bordW+'px; top:'+bordW+'px; width:'+(mW-2*bordW)+'px; height:'+
   (mH-2*bordW)+'px; z-index:990"></div></div>';
 }
};

var scFr=self.PopupMenu?self:(parent.PopupMenu?parent:top);function popEvt(str,each){var PML=scFr.PopupMenu.list,mN;for(var objName in PML)with(PML[objName]){if(scFr!=self&&each)for(mN in menu)with(menu[mN][0]){if(par.substring(par.lastIndexOf('.')+1)==self.name)eval(str);}else eval(str);}};var scrFn,popOL=window.onload,popUL=window.onunload,popOR=window.onresize,popOS=window.onscroll,nsWinW=window.innerWidth,nsWinH=window.innerHeight,nsPX=window.pageXOffset,nsPY=window.pageYOffset;document.popOC=document.onclick;if(scFr.PopupMenu){if(!self.page)var isNS4=scFr.isNS4,page={};if(scFr!=self)for(var f in scFr.page)page[f]=scFr.page[f];page.win=self;popEvt('self[objName]=PML[objName]',0);if(!isNS4)popEvt('update(true,mN)',1);window.onload=function(){if(popOL)popOL();if(isNS4){popEvt('update(false,mN)',1);setInterval(scrFn,50)}window.onunload=new Function('if(popUL)popUL();popEvt("lyr=null",1)');};if(popOS||(''+popOS!='undefined'))window.onscroll=function(){if(popOS)popOS();popEvt('position(mN)',1);};else{scrFn='if(nsPX!=pageXOffset||nsPY!=pageYOffset)'+'{nsPX=pageXOffset;nsPY=pageYOffset;popEvt("position(mN)",1)}';if(!isNS4)setInterval(scrFn,50);}function resizeBugCheck(){if(nsWinW!=innerWidth||nsWinH!=innerHeight)location.reload()};if(scFr.isOp&&!document.documentElement&&!self.opFix)self.opFix=setInterval('resizeBugCheck()',500);window.onresize=function(){if(popOR)popOR();if(isNS4)resizeBugCheck();popEvt('position(mN)',1);};if(isNS4)document.captureEvents(Event.CLICK);document.onclick=function(evt){popEvt('if(isNS4&&overI)click(overM,overI);if(!overI&&hideDocClick)over("root",0)',0);return document.popOC?document.popOC(evt):(isNS4?document.routeEvent(evt):true);};}

//--></script>

</tr>
</table>

</table>

