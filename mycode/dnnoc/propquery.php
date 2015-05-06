<?php

parse_str($_SERVER['QUERY_STRING'],$vars);

if (isset($vars['ctyho'])){
	$prop = $vars['ctyho'];
}else{
	$prop = $_POST['ctyho'];
}

include ('../../gsyslog.php');

// Connect to the database
$connection = mysql_connect ($hostname,$username,$password)
  or die ("Unable to connect to MySQL server.");

// connect to the database 
mysql_select_db ($databasename,$connection)
  or die ("Unable to select the database.");

// sql query to return results
$sql = "SELECT * FROM prop where (ctyho = '".$prop."')";

// Execute the query
$sql_result = mysql_query($sql,$connection)
 or die(mysql_errno() . ": " . mysql_error(). "\n");  
 
 if (mysql_num_rows($sql_result) == 0 ) {

  echo "No results were found for the login ".$prop;
  exit();

} else {

$row = mysql_fetch_array($sql_result);
$ctyho = $row["ctyho"];
$prop_name = $row["prop_name"];
$prop_ip = $row["prop_ip"];
$pswd = $row["pswd"];

}
?>