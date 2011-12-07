<?php

$id=mysql_connect("localhost","radins","loremipsum");
$id_db=mysql_select_db("radins");

$sql="select count(*) from logs where IP='192.168.0.0/24'";

if($result=mysql_query($sql))
{
echo $result;
}
else
{
echo "echec";
}

$sql="select count(IP) from logs where IS NOT IP='192.168.0.0/24'";
if($result=mysql_query($sql))
{
echo $result;
}
else
{
echo "echec";
}

?>