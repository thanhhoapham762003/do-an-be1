<?php
require_once '../../config/database.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $productModel = new Product();
    $product = $productModel->getProductByIdWithCategories($id);
}

$template = new Template();

$categoryModel = new Category();
$categories = $categoryModel->getAllCategories();


$data = [
    'title' => 'Edit a product',
    'slot'  => $template->render('products/edit-form', ['categories' => $categories, 'product' => $product])
];
$template->view('layout-admin', $data);