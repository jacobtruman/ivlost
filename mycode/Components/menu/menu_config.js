function Go(){return}

/*	(c) Ger Versluis 2000 version 5 October 9th 2001	*
*	You may remove all comments for faster loading		*/		

	var NoOffFirstLineMenus=18;			// Number of first level items
	var LowBgColor='F0F0F0';			// Background color when mouse is not over
	var LowSubBgColor='F0F0F0';			// Background color when mouse is not over on subs
	var HighBgColor='5f8ac5';			// Background color when mouse is over
	var HighSubBgColor='5f8ac5';			// Background color when mouse is over on subs
	var FontLowColor='000000';			// Font color when mouse is not over
	var FontSubLowColor='000000';			// Font color subs when mouse is not over
	var FontHighColor='F0F0F0';			// Font color when mouse is over
	var FontSubHighColor='F0F0F0';			// Font color subs when mouse is over
	var BorderColor='F0F0F0';			// Border colorD8D8D8
	var BorderSubColor='F0F0F0';			// Border color for subs
	var BorderWidth=3;				// Border width
	var BorderBtwnElmnts=1;				// Border between elements 1 or 0
	var FontFamily="verdana,arial,technical"	// Font family menu items
	var FontSize=9;					// Font size menu items
	var FontBold=0;					// Bold menu items 1 or 0
	var FontItalic=0;				// Italic menu items 1 or 0
	var MenuTextCentered='left';			// Item text position 'left', 'center' or 'right'
	var MenuCentered='left';			// Menu horizontal position 'left', 'center' or 'right'
	var MenuVerticalCentered='top';			// Menu vertical position 'top', 'middle' or 'bottom'
	var ChildOverlap=0;				// horizontal overlap child/ parent
	var ChildVerticalOverlap=0;			// vertical overlap child/ parent
	var StartTop=128;       		// Menu offset x coordinate
	var StartLeft=0;				// Menu offset y coordinate
	var VerCorrect=0;				// Multiple frames y correction
	var HorCorrect=0;				// Multiple frames x correction
	var LeftPaddng=5;				// Left padding
	var TopPaddng=1;				// Top padding
	var FirstLineHorizontal=0;			// First level items layout horizontal 1 or 0
	var MenuFramesVertical=1;			// Frames in cols or rows 1 or 0
	var DissapearDelay=400;				// delay before menu folds in
	var TakeOverBgColor=1;				// Menu frame takes over background color subitem frame
	var FirstLineFrame='self';			// Frame where first level appears
	var SecLineFrame='self';			// Frame where sub levels appear
	var DocTargetFrame='self';			// Frame where target documents appear
	var TargetLoc='';				// DIV id for relative positioning (refer to config.htm for info)
	var HideTop=0;					// Hide first level when loading new document 1 or 0
	var MenuWrap=1;					// enables/ disables menu wrap 1 or 0
	var RightToLeft=0;				// enables/ disables right to left unfold 1 or 0
	var UnfoldsOnClick=0;				// Level 1 unfolds onclick/ onmouseover
	var WebMasterCheck=0;				// menu tree checking on or off 1 or 0

function BeforeStart(){return}
function AfterBuild(){return}
function BeforeFirstOpen(){return}
function AfterCloseAll(){return}

