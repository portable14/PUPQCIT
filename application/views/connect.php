<?php
$serverName = "LAPTOP-JEFFAZUR";
$connectionInfo = array ("Database"=>"DMS");
$conn = sqlrsrv_connect ($serverName, $connectionInfo);

if ($conn) {
	echo "connection established.<br />";
}

else {
	echo "connection could not be established.<br />";
	die (print_r(sql_srv_errors(), true));
}
?>