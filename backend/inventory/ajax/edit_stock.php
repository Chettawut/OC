<?php
	header('Content-Type: application/json');
	include('../../conn.php');
    
    date_default_timezone_set("Asia/Bangkok");

    $strSQL = "UPDATE stock SET ";
    $strSQL .= "stcode='".$_POST["stcode"]."',stname1='".$_POST["stname1"]."',unit='".$_POST["unit"]."',stmin1='".$_POST["stmin1"]."' ";
    $strSQL .= ",stmin2='".$_POST["stmin2"]."',stmax='".$_POST["stmax"]."',type='".$_POST["type"]."',status='".$_POST["status"]."',s_date='".date("Y-m-d")."',s_time='".date("H:i:s")."'";
    $strSQL .= "WHERE stcode= '".$_POST["stcode"]."' ";

    
	$query = mysqli_query($conn,$strSQL);
    
    // echo $strSQL;


        if($query) {
            echo json_encode(array('status' => '1','message'=> 'แก้ไขรหัสสินค้า '.$_POST["stcode"].' สำเร็จ'));
        }
        else
        {
            echo json_encode(array('status' => '0','message'=> 'Error insert data!'));
        }
    
        mysqli_close($conn);
?>