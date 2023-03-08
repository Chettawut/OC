<?php
	header('Content-Type: application/json');
    include('../../conn.php');
    date_default_timezone_set('Asia/Bangkok');

	$sql = "SELECT * FROM color as a inner join type as b on (a.typecode=b.typecode)";
	$query = mysqli_query($conn,$sql);

	
	$json_result=array(
		"clcode" => array(),
        "clname" => array(),
		"typecode" => array(),
        "typename" => array(),
		"status" => array()
		);
		
        while($row = $query->fetch_assoc()) {
			array_push($json_result['clcode'],$row["clcode"]);
            array_push($json_result['clname'],$row["clname"]);
			array_push($json_result['typecode'],$row["typecode"]);
			array_push($json_result['typename'],$row["typename"]);
			array_push($json_result['status'],$row["status"]);
        }
        echo json_encode($json_result);



		mysqli_close($conn);
?>