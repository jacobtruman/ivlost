<?php

if (isset($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);
	$prop = $vars['prop'];
	if (isset($vars['lvl'])){
		$lvl = $vars['lvl'];
	}else{
	}
}else if (isset($_POST['prop'])){
	$prop = $_POST['prop'];
	if (isset($_POST['lvl'])){
		$lvl = $_POST['lvl'];
	}else{
	}
}else{
}

if (isset($prop)){
$db = $root.'/support_web/fpdb/propinfo.mdb';
$conn = new COM('ADODB.Connection');
$conn->Open("DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$db");

$sql = "SELECT * FROM prop where (prop = '".$prop."')";
$res = $conn->Execute($sql);

$prop = $res->Fields['prop']->Value;

$gateway = $res->Fields['gateway']->Value;
$gateway2 = $res->Fields['gateway2']->Value;
$htype = $res->Fields['htype']->Value;
$name = $res->Fields['name']->Value;
$loc = $res->Fields['loc']->Value;
$fold = $res->Fields['fold']->Value;
$inst = $res->Fields['inst']->Value;
$lgn = $res->Fields['lgn']->Value;
$lgn2 = $res->Fields['lgn2']->Value;
$pswd = $res->Fields['pswd']->Value;
$pswd2 = $res->Fields['pswd2']->Value;
$dbname = $res->Fields['dbname']->Value;
$level1 = $res->Fields['level1']->Value;
$level2 = $res->Fields['level2']->Value;
$active = $res->Fields['active']->Value;
$notes = $res->Fields['notes']->Value;
$eqlgn = $res->Fields['eqlgn']->Value;
$eqpswd = $res->Fields['eqpswd']->Value;

$res->Close();
$conn->Close();
$res = null;
$conn = null;


$pover = '/support_web/forms/PropertyOverview.php?prop='.$prop;
$ipinfo = '/support_web/forms/IPInformation.php?prop='.$prop;
$cinfo = '/support_web/forms/ContactInformation.php?prop='.$prop;
$notespage = '/support_web/forms/notes2.php?prop='.$prop;

}else{
}

if (isset($htype)){
	if ($htype == "Hampton Inn"){
		$img = "HamptonInn.JPG";
	}elseif ($htype == "Hilton"){
		$img = "Hilton.JPG";
	}elseif ($htype == "Comfort Inn"){
		$img = "ComfortInn.JPG";
	}elseif ($htype == "Comfort Suites"){
		$img = "ComfortSuites.JPG";
	}elseif ($htype == "Embassy Suites"){
		$img = "EmbassySuites.JPG";
	}elseif ($htype == "Holiday Inn"){
		$img = "HolidayInn.JPG";
	}elseif ($htype == "Holiday Inn Express"){
		$img = "HolidayInnExpress.JPG";
	}elseif ($htype == "Courtyard Marriott"){
		$img = "CourtyardMarriott.JPG";
	}elseif ($htype == "Doubletree"){
		$img = "Doubletree.JPG";
	}elseif ($htype == "Homewood Suites"){
		$img = "HomewoodSuites.JPG";
	}elseif ($htype == "Sheraton Four Points"){
		$img = "sheraton4points.JPG";
	}elseif ($htype == "Hilton Garden Inn"){
		$img = "HiltonGI.JPG";
	}elseif ($htype == "Conrad"){
		$img = "Conrad.png";
	}elseif ($htype == "Fairfield Inn"){
		$img = "FairfieldInn.png";
	}else{
		$img = "na.png";
	}
}
?>