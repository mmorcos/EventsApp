<?php
 $db = mysql_connect("sql1.njit.edu","bar25_proj","bindi123"); 
 if (!$db) {
 die("Database connection failed miserably: " . mysql_error());
 }
  $db_select = mysql_select_db("bar25_proj",$db);
 if (!$db_select) {
 die("Database selection also failed miserably: " . mysql_error());
 }
?>
<html>
 <head>
 <title>Step 1</title>
 </head>
 <body>
  <?php
//Step3
$result = mysql_query("SELECT * FROM academics", $db);
 if (!$result) {
 die("Database query failed: " . mysql_error());
 }
?>
</body>
</html>
