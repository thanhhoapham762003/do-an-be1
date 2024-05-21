<?php
require_once '../../config/database.php';

$template = new Template();

$categoryModel = new Category();
$categories = $categoryModel->getAllCategories();

$data = [
    'title' => 'Create a product',
    'slot'  => $template->render('products/create-form', ['categories' => $categories])
];
$template->view('layout-admin', $data);