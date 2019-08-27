<?php
    require_once('./dbconnector.php');

    if (isset($_POST['Submit'])) {

    $cateID = $_GET['cateID'];
    $cateName = $_POST['cateName'];

    $sql = "UPDATE categories SET cateName = '".$cateName."' WHERE cateID = $cateID"; 

    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:viewCate.php');   

    }
?>
