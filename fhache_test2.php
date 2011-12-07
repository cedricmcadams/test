<?php
 mysql_connect("localhost","radins","loremipsum") or die("Impossible de se connecter : " . mysql_error());
 mysql_select_db('radins'); 
 $sql = "select  count(DISTINCT IP) as NBD, count(IP) as NB from logs where IP LIKE '192.168.%'";
 $req = mysql_query($sql);
 $data = mysql_fetch_array($req);
 $nombre_vu=$data['NB'];
 $nombre_vu_d=$data['NBD'];
 echo "Il y'a eu $nombre_vu vu par le sous réseau 192.168.0.0/24 dont $nombre_vu_d uniques";
?>