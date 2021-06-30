<?php

mysql_connect("localhost" , "root" , "");
$db=mysql_select_db("db_robot");
if 
($db)
{echo "connect";
}
else 
{echo "error"}
?>