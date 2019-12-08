<?php
	require ("setQuery.php");
	$query=new setQuery();
	$res=$query-> setSQlQuery($_GET["sql"])->fetch_assoc();
	echo $res["ma_tramp_id"].",".$res["ma_usu_business_name"].", ".$res["ma_tramp_date"].", ".$res["ST_Y(ma_tramp_point)"].", ".$res["ST_X(ma_tramp_point)"];
?>