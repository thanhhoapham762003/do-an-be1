<?php
require_once '../../config/database.php';
$productId = '';
$productName = '';
$productPrice = '';
$productDescription = '';
$productImage = '';

$categoriesId = [];

if (isset($_POST['productId'])) {
    $productId = $_POST['productId'];
}
if (isset($_POST['productName'])) {
    $productName = $_POST['productName'];
}
if (isset($_POST['productPrice'])) {
    $productPrice = $_POST['productPrice'];
}
if (isset($_POST['productDescription'])) {
    $productDescription = $_POST['productDescription'];
}
if (isset($_POST['productImage'])) {
    $productImage = $_POST['productImage'];
}

if (isset($_POST['categoriesId'])) {
    $categoriesId = $_POST['categoriesId'];
}

if(!empty($productId) && !empty($productName) && !empty($productPrice) && !empty($productDescription) && !empty($productImage) ) {
    $productModel = new Product();
    if($productModel->update($productId, $productName, $productPrice, $productDescription, $productImage, $categoriesId)) {
        header('location: http://localhost:82/NHAHANG/admin/products/');
    }
}