<? 
/*
$db = 'c:\sites\support_web\fpdb\propinfo.mdb';
$conn = new COM('ADODB.Connection');
$conn->Open("DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$db");

$sql = "SELECT * FROM prop where (htype = 'Hampton Inn') order by name";
$res = $conn->Execute($sql);

echo $res;

//echo $res->Fields['prop']->Value;

$res->Close();
$conn->Close();
$res = null;
$conn = null;
*/

$dbhost="localhost";
$dbuser="root";
$dbpass="triadpass";
$dbname="menu";

$dblink = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $dblink);

$query = "select name from prop where htype = 'Hampton Inn' order by name"; 
$result = mysql_query($query, $dblink) or die ("Cannot Connect" . mysql_error());

$field = mysql_fetch_field($result);
$fieldname = $field->name;

?>
<div id="box"><!-- BEGIN MENU --> 
	<div id="menucont">

	<div class="menublock" onmouseover="this.className='display' " onmouseout="this.className='menublock' ">
	        <a class="tl"><b>My Menu</a>
       	 <div class="subs">

	<?php
		while($row  =  mysql_fetch_row($result))  {
		echo  "<tr>";
      for($i=0;  $i < mysql_num_fields($result);  $i++)  {
	  echo "<li><a class=sl href=mypage.php>".$row[$i]."</a></li>";
	}
}
	?>

      	  </div></div>
	
					
	</div><!-- CLOSE menucont -->
	</div><!-- CLOSE box and the menu -->