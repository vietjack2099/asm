<?php 
	require_once('./dbconnector.php');

	$cateID=$_GET['cateID'];
    $sql="DELETE FROM categories WHERE cateID = $cateID";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);    
    header('location:viewCate.php'); 
 ?>