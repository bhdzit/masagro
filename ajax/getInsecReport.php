
<?php
	require ("setQuery.php");
	$query=new setQuery();
	$sql="select * from  ma_butterflies_catch;";
	$res=$query-> setSQlQuery($sql);
	while($rep=$res->fetch_assoc()){
		echo $rep["ma_bc_id"].",".$rep["ma_bc_date"].",".$rep["ma_bc"].";";
	}
?>
