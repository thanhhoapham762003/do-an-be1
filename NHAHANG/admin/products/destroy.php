<?php
require_once '../../config/database.php';

if(isset($_POST['productId'])) {
    $id = $_POST['productId'];
    $productModel = new Product();
    if ($productModel->destroy($id)) {
        $_SESSION['alert'] = 'Deleted successfully!!!';
    }
    else {
        $_SESSION['alert'] = 'Deleted failed!!!';
    }
    header('location: index.php');
}