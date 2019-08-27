<?php 
	require_once('./dbconnector.php');

	$productID=$_GET['productID'];
    $sql="DELETE FROM products WHERE productID = $productID";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);    
    header('location:viewPro.php'); 
 ?>