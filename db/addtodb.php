<?php
define('DB_NAME','bar25_proj');
define('DB_USER','bar25_proj');
define('DB_PASSWORD','bindi123');
define('DB_HOST','sql1.njit.edu');


$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

if(!$link) {
die('could not connect:'.mysql_error());
}

$db_selected=mysql_select_db(DB_NAME,$link);

if(!$db_selected){
	die('can\t use' .DB_NAME .':' .mysql_error());
}

//echo 'connected sucess';

$value=$_POST['name'];

$sql="INSERT INTO academics (name) VALUES ('$value')";

if(!mysql_query($sql)){
	die('Error:' .mysql_error());
}

mysql_close();
?>