<?php
	header('Content-Type: application/json');
	include('../../conn.php');

	$sql = "SELECT b.amount as amount1,c.typename,a.stcode,a.stname1,a.unit,a.status ";
	$sql .= "FROM product a inner join product_level as b on (a.stcode=b.stcode) ";  
	$sql .= " inner join type as c on (a.typecode=c.typecode) ";  
	$sql .= " where b.places = 1 ";  

	$query = mysqli_query($conn,$sql);

	// echo $sql;

	$json_result=array(
		"stcode" => array(),
		"stname1" => array(),
		"amount1" => array(),
		"typename" => array(),
		"unit" => array(),
		"status" => array()
		
		);
		
        while($row = $query->fetch_assoc()) {
			array_push($json_result['stcode'],$row["stcode"]);
			array_push($json_result['stname1'],$row["stname1"]);
			array_push($json_result['amount1'],$row["amount1"]);
			array_push($json_result['typename'],$row["typename"]);
			array_push($json_result['unit'],$row["unit"]);
			array_push($json_result['status'],$row["status"]);
        }
        echo json_encode($json_result);



?>