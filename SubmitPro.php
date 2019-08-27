<?php
    require_once('./dbconnector.php');

    if (isset($_POST['Submit'])) {

    $productID = $_GET['productID'];
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    $des = $_POST['des'];
    $cateID = $_POST['cateID'];

    $sql = "UPDATE products SET productName = '".$productName."', price ='".$price."',des = '".$des."',cateID = '".$cateID."' WHERE productID =  $productID";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:viewPro.php');   
    }
?>
