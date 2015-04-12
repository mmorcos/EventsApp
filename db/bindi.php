<?php
if( $_POST )
{
$con = mysql_connect("sql1.njit.edu","bar25_proj","bindi123");

if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("bar25_proj", $con);


$insert_query = "insert into tc(
                name,detail,date,time,location
                
                    ) values (
            ".$_POST['name'].",
            ".$_POST['detail'].",
            ".$_POST['date'].",
            ".$_POST['time'].",
            ".$_POST['location'].")";

($insert_query);

echo "<h2>Thank you for your feedback!</h2>";

mysql_close($con);
}
?>