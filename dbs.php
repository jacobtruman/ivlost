<?    
$dbhost="host"; 
$dbuser="username"; 
$dbpass="password"; 
$dbname="database name"; 
$table="table name"; 

mysql_connect( "$dbhost", "$dbuser", "$dbpass")  or  die( "Unable  to  connect   
to  SQL  server"); 
@mysql_select_db( "$dbname")  or  die( "Unable  to  select  database"); 
if(!IsSet($sort)) $result  =  mysql_query( "select  *  from  $table"); 
  else $result  =  mysql_query( "select  *  from  $table order by $sort"); 
?> 
   
<table  border="1"> 
<tr> 
<? 
while  ($field=mysql_fetch_field($result))  { 
                 echo  "<th><A HREF=\"show.php3?sort=$field->name\">$field- 
>name</A></th>"; 
} 
echo  "</tr>"; 
while($row  =  mysql_fetch_row($result))  { 
      echo  "<tr>"; 
      for($i=0;  $i < mysql_num_fields($result);  $i++)  { 
         echo  "<td>$row[$i]</td>"; 
      }            
      echo  "</tr>\n"; 
} 
echo  "</table>";   
?> 
