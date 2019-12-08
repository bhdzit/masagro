<?php
	require ("setQuery.php");
	$query=new setQuery();
		$sql="insert into ma_butterflies_catch values(null,\"".$_POST["id_tramp"]."\",\"".$_POST["tramp_date"]."\",".$_POST["tramp_camp"].");";
		echo $sql;
	$res=$query-> setSQlQuery($sql);
	
?>