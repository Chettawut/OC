<?php
	header('Content-Type: application/json');
    include('../../conn.php');
    date_default_timezone_set('Asia/Bangkok');

    $strSQL = "UPDATE brand SET ";
    $strSQL .= "bdname='".$_POST["bdname"]."',typecode='".$_POST["typecode"]."',status='".$_POST["status"]."' ";
    $strSQL .= "WHERE bdcode= '".$_POST["bdcode"]."' ";

    
	$query = mysqli_query($conn,$strSQL);
    
    // echo $strSQL;


        if($query) {
            echo json_encode(array('status' => '1','message'=> 'แก้ไขแบรนด์ '.$_POST["bdname"].' สำเร็จ'));
        }
        else
        {
            echo json_encode(array('status' => '0','message'=> 'Error insert data!'));
        }
    
        mysqli_close($conn);
?>